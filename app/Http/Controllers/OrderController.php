<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ShoppingCart;
use App\Models\Checkout;
use App\Models\Address;
use Carbon\Carbon;

class OrderController extends Controller
{
    public function addCart(Request $request)
    {
        $pid = $request->pid;
        $qty = $request->quantity;

        $product = Product::find($pid);
        $uid = md5($pid . Carbon::now());

        $add = ShoppingCart::create([
            'uid' => $uid,
            'product_id' => $product->id,
            'product_name' => $product->name,
            'product_type' => $product->type,
            'product_price'=> $product->price,
            'product_qty'=> $request->quantity,
            'product_cover'=> $product->cover,
        ]);

        return redirect()->route('shoppingCart', compact('uid', 'qty', 'pid'));
    }

    public function shoppingCart(Request $request)
    {
        $pid = $request->pid;
        $qty = $request->qty;
        $uid = $request->uid;

        $products = Product::where('id', $pid)->get();
        return view('cart.shoppingCart', compact('products', 'qty', 'uid', 'pid'));
    }

    public function checkout(Request $request)
    {
        $pid = $request->pid;
        $qty = $request->qty;
        $uid = $request->uid;

        $products = Product::where('id', $pid)->get();
        return view('cart.checkout', compact('products','qty', 'uid', 'pid'));
    }

    public function order(Request $request)
    {
        $pid = $request->pid;
        $uid = $request->uid;

        $order = Checkout::create([
            'uid' => $uid,
            'pid' => $pid,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'document' => $request->document,
            'email' => $request->email,
            'phone' => $request->phone,
            'company_name' => $request->company_name,
        ]);

        $address = Address::create([
            'uid' => $uid,
            'street_address' => $request->street_address,
            'country' => $request->country,
            'city' => $request->city,
        ]);

        return redirect()->route('index');
    }
}
