<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function shoppingCart()
    {
        return view('cart.shoppingCart');
    }

    public function checkout()
    {
        return view('cart.checkout');
    }
}
