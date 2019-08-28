<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class LandingController extends Controller
{
    public function sanprimorskyOld()
    {
        dd(md5('ghkgo35'));
        return view('sanprimorsky_old.index');
    }

    public function sanprimorsky()
    {

        return view('sanprimorsky.index');
    }

    public function send(Request $request)
    {

        Mail::send('sanprimorsky.email_form', ['request' => $request],
            function ($email) use ($request) {
                $email->from(config('vasilychapaev@gmail.com'))
                    ->to('vasilychapaev@gmail.com')
                    ->subject('Заявка с формы: ' . $request->input('form_name'));
            });

        return response()->json(['status' => 'success', 'message' => 'Мы перезвоним Вам в рабочее время в течении 10 минут!']);
    }
}
