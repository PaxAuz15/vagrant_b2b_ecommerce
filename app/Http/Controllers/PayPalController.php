<?php

namespace App\Http\Controllers;

// use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use NunoMaduro\Collision\Provider;
use Srmklive\PayPal\Services\ExpressCheckout;

class PayPalController extends Controller
{
    public function getExpressCheckout()
    {
        $cart = \Cart::session(auth()->id());

        $cartItems = array_map(function($item){
            return [
                'name' => $item['name'],
                'price' => $item['price'],
                'qty' => $item['quantity']
            ];
        }, $cart->getContent()->toarray());

        $checkoutData = [
            'items'=>$cartItems,

            'return_url'=>route('paypal.success'),
            'cancel_url'=>route('paypal.cancel'),
            'invoice_id'=>uniqid(),
            'invoice_description'=> " Order description ",
            'total'=>$cart->getTotal()
        ];

        $provider = new ExpressCheckout();

        $response = $provider->setExpressCheckout($checkoutData);

        // dd($response); //works!

        return redirect($response['paypal_link']);

    }

    public function cancelPage()
    {
        dd('payment failed');
    }
}
