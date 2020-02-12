<?php

namespace App\Http\Controllers;

use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;

class PayPalController extends Controller
{
    public function getExpressCheckout()
    {
        $cart = Cart::session(auth()->id());
        dd($cart->getContent());
        // $cartItems = [
        //     [
        //         'name'  => 'Product 1',
        //         'price' => 9.99,
        //         'qty'   => 1,
        //     ],
        //     [
        //         'name'  => 'Product 2',
        //         'price' => 4.99,
        //         'qty'   => 2,
        //     ],
        // ];

        // $cartItems = array_map($cart->getContent());


        $checkoutData = [
            'items'=>$cartItems,

            'return_url'=>route('paypal.success'),
            'cancel_url'=>route('paypal.cancel'),
            'invoice_id'=>uniqid(),
            'invoice_description'=> " Order description ",
            'total'=>$cart->getTotal()
        ];

        $provider = new ExpressCheckout();

        $provider->setExpressCheckout($checkoutData);
    }

    public function cancelPage()
    {
        dd('payment failed');
    }
}
