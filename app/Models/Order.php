<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use SimpleXMLElement;

class Order extends Model
{
    const WEBPAY_STATUS_NEW = 'new';
    const WEBPAY_STATUS_INPROGRESS = 'inprogress';
    const WEBPAY_STATUS_SUCCESS = 'success';
    const WEBPAY_STATUS_FAILED = 'failed';
    const WEBPAY_STATUS_CANCEL = 'cancel';

    static public $webpayStatus = [
        '1' => 'Completed',
        '2' => 'Declined',
        '3' => 'Pending',
        '4' => 'Authorized',
        '5' => 'Redunded',
        '6' => 'System',
        '7' => 'Voided',
        '8' => 'Failed',
    ];

    protected $fillable = [
        'date_from',
        'date_to',
        'adult_count',
        'child_count',
        'hotel_name',
        'room_id',
        'fio',
        'phone',
        'email',
        'amount',

        'action',
        'transaction_id',
    ];

    static public function getWebpayStatus($tid = null)
    {
        $postdata = '*API=&API_XML_REQUEST=' . urlencode('<?xml version="1.0" encoding="ISO-8859-1" ?>'
                . '<wsb_api_request>'
                . '<command>get_transaction</command>'
                . '<authorization>'
                . '<username>' . config('webpay.login') . '</username>'
                . '<password>' . config('webpay.password_md5') . '</password>'
                . '</authorization>'
                . '<fields><transaction_id>' . $tid . '</transaction_id></fields>'
                . '</wsb_api_request>');

        $curl = curl_init(config('webpay.validate_url'));
        curl_setopt($curl, CURLOPT_HEADER, 0);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $postdata);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
        $response = curl_exec($curl);
        curl_close($curl);

        if ($response) {
            $xml = new SimpleXMLElement($response);
            if ((string)$xml->status == 'success') {
                $f = $xml->fields;
                $md5_wp = (string)$f->wsb_signature;
                $md5_calc = md5((string)$f->transaction_id
                    . (string)$f->batch_timestamp
                    . (string)$f->currency_id
                    . (string)$f->amount
                    . (string)$f->payment_method
                    . (string)$f->payment_type
                    . (string)$f->order_id
                    . (string)$f->rrn
                    . config('webpay.secret')
                );

                if ($md5_wp == $md5_calc) {
                    return [
                        'status' => 'success',
                        'transaction_id' => (string)$f->transaction_id,
                        'order_id' => (string)$f->order_num,
                        'payment_type' => (string)$f->payment_type
                    ];
                } else {
                    return ['status' => 'error', 'message' => 'Контрольная сумма не совпадает'];
                }
            } else {
                return ['status' => 'error', 'message' => (string)$xml->error->error_message];
            }
        }

        return false;
    }
}
