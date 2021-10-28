<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest; 
use App\Models\Product;
use App\Models\Checkout;
use App\Models\Address;
use App\Models\ShoppingCart;
use DB;

class OrderController extends Controller
{
    public function checkout(Request $request)
    {
        $pid = $request->pid;
        $qty = $request->qty;
        $uid = hash('ripemd160', $request->session()->token());

        $checkouts = shoppingCart::where('uid', $uid)->get();
        $subtotal =  DB::table('shopping_carts')->where('uid', $uid)->sum(DB::raw('shopping_carts.product_price * shopping_carts.product_qty'));
        return view('cart.checkout', compact('checkouts','qty', 'uid', 'pid', 'subtotal'));
    }

    public function order(OrderRequest $request)
    {
        $pid = $request->pid;
        $uid = hash('ripemd160', $request->session()->token());
        $checkout = shoppingCart::where('uid', $uid)->get();
        $qty = $request->qty;

        if ($request->check != "on") {
            return redirect()->route('checkout')->with('error','Seleccione el checkbox, para continuar con la orden');
        } else {
            foreach($checkout as $item) {
                //dd();
                Checkout::create([
                    'uid' => $uid,
                    'pid' => $pid,
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'document' => $request->document,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'company_name' => $request->company_name,
                ]);
    
                
                
            
            }
    
            Product::where('id', $item->pid)
                ->update([
                    'stock' => $item->products->stock - $qty
                ]);
            ShoppingCart::where('uid', $uid)
                ->update([
                    'is_ordered' => true
                ]);
    
            $address = Address::create([
                'uid' => $uid,
                'street_address' => $request->street_address,
                'country' => $request->country,
                'city' => $request->city,
            ]);
    
            return redirect()->route('congratulations', compact('uid'));
        }
    }
}
