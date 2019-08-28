<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class WebpayController extends Controller
{
    public function order(Request $request)
    {
        $data = [
            'date_from' => Carbon::createFromFormat('d.m.Y', $request->input('datestart')),
            'date_to' => Carbon::createFromFormat('d.m.Y', $request->input('datefinish')),
            'adult_count' => $request->input('adult_count'),
            'child_count' => $request->input('child_count'),
            'hotel_name' => 'sanprimorsky',
            'room_id' => $request->input('room_id'),
//            'fio' => $request->input('fio'),
//            'phone' => $request->input('phone'),
//            'email' => $request->input('email'),
            'amount' => $request->input('amount'), // todo перепроверить - мб подделка
            'status' => Order::WEBPAY_STATUS_NEW,
        ];
        $order = Order::create($data);
        $seed = time();
        $signature = sha1($seed
            . config('webpay.wsb_store_id')
            . $order->id
            . config('webpay.wsb_test')
            . config('webpay.wsb_currency_id')
            . $order->amount
            . config('webpay.secret')
        );

        Transaction::create([
            'order_id' => $order->id,
            'action' => 'send',
            'data' => json_encode($data, JSON_UNESCAPED_UNICODE),
        ]);

//        return view('sanprimorsky.webpay_form', compact('order', 'seed', 'signature'));
        return response()->json([
            'status' => 'ok',
            'html' => view('sanprimorsky.webpay_form', compact('order', 'seed', 'signature'))->render()
        ]);
    }


    public function return(Request $request)
    {
        if ($request->has(['wsb_order_num', 'wsb_tid'])) {
            Transaction::create([
                'order_id' => $request->input('wsb_order_num'),
                'action' => 'return',
                'transaction_id' => $request->input('wsb_tid'),
            ]);

            $order = null;
            $message = '';
            $errors = [];
            $webpay_response = Order::getWebpayStatus($request->input('wsb_tid'));
            if ($webpay_response['status'] == 'success') {
                if ($order = Order::find($request->input('wsb_order_num'))) {
                    $order->transaction_id = $request->input('wsb_tid');
                    $order->save();

                    if (in_array($webpay_response['payment_type'], array(1, 4))) // статусы успешной оплаты
                    {

                        $order->status = Order::WEBPAY_STATUS_SUCCESS;
                        $order->save();

                        // mail('vasilychapaev@gmail.com', 'оплата членства - бизон', "проверь, группе дату назначило? script - return. user_id = ".$order['UF_USER_ID']);
                        // todo Mail
                        Mail::send('sanprimorsky.email', ['order' => $order],
                            function ($email) use ($order) {
                                $email->from(config('sanprimorsky.email_from'))
                                    ->to(config('sanprimorsky.email_to'))
                                    ->subject(config('sanprimorsky.email_subject'));
                            });
                        // todo Amo
                        // todo queue
                        $message = 'Оплата выполнена успешно. Спасибо.';
                    }
                    if (in_array($webpay_response['payment_type'], array(2, 5, 7, 8))) // статусы отказа в оплате
                    {
                        $order->status = Order::WEBPAY_STATUS_FAILED . ': ' .Order::$webpayStatus[$webpay_response['status']];
                        $order->save();
                        $errors[] = 'Банк отклонил платеж, статус #' . $webpay_response['status'] . '/' . Order::$webpayStatus[$webpay_response['status']];
                    }
                    if ($webpay_response['payment_type'] == 3) // платеж "думает", надо подождать
                    {
                        $message = 'Платеж проходит проверку. Обновите страницу через минутку.';
                    }
                } else {
                    $errors[] = 'Не могу найти заказ №' . $webpay_response['order_id'];
                }
            } else {
                $errors[] = 'Webpay: ' . $webpay_response['message'];
            }
        }

        return view('sanprimorsky.webpay_return', compact('order', 'message', 'errors'));
    }


    public function notify(Request $request)
    {
        $wp = [
            'order_id'  => $request->site_order_id,
            'status'    => $request->payment_type,
        ];

        if ($order = Order::find($wp['order_id']))
        {
            if (in_array($wp['status'], array(1, 4))) // статусы успешной оплаты
            {
                $order->status = Order::WEBPAY_STATUS_SUCCESS;
                $order->save();
//              mail('vasilychapaev@gmail.com', 'оплата членства - бизон', "проверь, группе дату назначило? script - notify. user_id = ".$order['UF_USER_ID']);
                // todo Mail
                // todo Amo
                // todo Queue
            }
            if (in_array($wp['status'], array(2, 5, 7, 8))) // статусы отказа в оплате
            {
                $order->status = Order::WEBPAY_STATUS_FAILED;
                $order->save();
            }
//            return view('sanprimorsky.webpay_notify', compact('order'));
            return response()->json(['status'=>'success'], 200);
        }
        return response()->json(['status'=>'error'], 401);
    }


    public function cancel(Request $request)
    {
        if ($order = Order::find($request->input('wsb_order_num'))) {
            $order->status = Order::WEBPAY_STATUS_CANCEL;
            $order->save();
            return view('sanprimorsky.webpay_cancel', compact('order'));
        }

        return redirect(env('APP_URL'));
    }

}
