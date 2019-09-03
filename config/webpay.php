<?php

return [
    'billing_url' => 'https://securesandbox.webpay.by',
    'validate_url' => 'https://sandbox.webpay.by',
//    'billing_url' => 'https://securesandbox.webpay.by',
//    'validate_url' => 'https://sandbox.webpay.by',
    'login' => 'sanprimorsky',
    'secret' => 'secretkey098',
    'password_md5' => '6e36869bb284bad639a11e461d2a0b14', // ghkgo35
    'wsb_store_id' => '999080791',
    'wsb_store_name' => 'Санаторий Приморский',
    'wsb_currency_id' => 'BYN',
//    'wsb_currency_id' => 'RUB',
    'wsb_version' => 2,
    'wsb_test' => 1,
    'wsb_return_url' => env('APP_URL').'/webpay/return',
    'wsb_cancel_url' => env('APP_URL').'/webpay/cancel',
    'wsb_notify_url' => env('APP_URL').'/webpay/notify',
    '' => '',

];