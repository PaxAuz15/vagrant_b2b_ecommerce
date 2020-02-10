<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Product $product)
    {

        //add to cart
        \Cart::session(auth()->id())->add(array(
            'id' => $product->id,
            'name'=> $product->name,
            'price'=> $product->price,
            'quantity'=> 1,
            'attributes'=> array(),
            'associatedModel'=> $product
        ));

        return redirect()->route('cart.index');
    }

    public function index()
    {
        $cartItems = \Cart::session(auth()->id())->getContent();
        return view('cart.index', compact('cartItems'));
    }
}
