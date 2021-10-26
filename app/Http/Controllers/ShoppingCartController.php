<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ShoppingCart;
use Carbon\Carbon;
use DB;

class ShoppingCartController extends Controller
{
    public function addCart(Request $request)
    {
        $pid = $request->pid;
        $qty = $request->quantity;
        $uid = hash('ripemd160', $request->session()->token());

        $product = Product::find($pid);

        $add = ShoppingCart::create([
            'uid' => $uid,
            'product_id' => $product->id,
            'product_name' => $product->name,
            'product_type' => $product->type,
            'product_price'=> $product->price,
            'product_qty'=> $request->quantity,
            'product_cover'=> $product->cover,
            'is_ordered' => false
        ]);

        return redirect()->route('shoppingCart', compact('uid', 'qty', 'pid'));
    }

    public function shoppingCart(Request $request)
    {
        $filters = Product::where('type', 'filtro')->paginate(4);
        $pid = $request->pid;
        $qty = $request->qty;
        $uid = hash('ripemd160', $request->session()->token());

        $products = shoppingCart::where('uid', $uid)->get();
        $subtotal =  DB::table('shopping_carts')->where('uid', $uid)->sum(DB::raw('shopping_carts.product_price * shopping_carts.product_qty'));
        return view('cart.shoppingCart', compact('products', 'qty', 'uid', 'pid', 'subtotal', 'filters'));
    }

    public function removeCart($id)
    {
        ShoppingCart::destroy($id);

        return redirect()->back();
    }
}
