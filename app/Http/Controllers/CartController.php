<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Product $product)
    {
        dd($product);

        //add to cart
        Cart::session(auth()->id())->add(array(
            'id' => $product->id,
            'name'=> $product->name,
            'price'=> $product->price,
            'quantity'=> 4,
            'attributes'=> array(),
            'associatedModel'=> $product
        ));

        return back();
    }

    public function index()
    {
        return view('cart.index');
    }
}
