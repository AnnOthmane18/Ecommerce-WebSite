<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout(){
        return view('pages.checkout.checkout');
    }

    public function info(){
        return view('pages.checkout.info');
    }

    public function payment(){
        return view('pages.checkout.payment');
    }
}
