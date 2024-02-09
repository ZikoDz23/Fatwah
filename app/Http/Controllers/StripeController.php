<?php

namespace App\Http\Controllers;

use Stripe\Stripe;
use Illuminate\Http\Request;
use Stripe\checkout\Session;

class StripeController extends Controller
{
   

    public function checkout(){
     \Stripe\Stripe::setApiKey(config(key: 'stripe.sk'));
     $session = \Stripe\Checkout\Session::create([
      'line_items' => [
        
      [
      'price_data' => [
        'currency' => 'usd',
        'product_data' => [
            'name' => 'test',
        ],
        'unit_amount' => 500 , 
      ],
      'quantity' => 1,
    ],
],
'mode' => 'payment',
'success_url' => route(name:'success'),
'cancel_url' => route(name:'index'),

     ]);
    }

    public function succes(){
        return view('index');

    }

}
