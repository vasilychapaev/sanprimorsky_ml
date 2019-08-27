<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebpayController extends Controller
{
    //
    public function order(Request $request)
    {

        dd('order');
    }

    public function cancel(Request $request)
    {

        dd('cancel');
    }

    public function return(Request $request)
    {

        dd('return');
    }

    public function notify(Request $request)
    {

        dd('notify');
    }

    public function check(Request $request)
    {

        dd('check');
    }

}
