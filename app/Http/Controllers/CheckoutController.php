<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout($price){
        return view('checkout', ['price' => $price]);
    }

    public function success(){
        return view('success');
    }
}
