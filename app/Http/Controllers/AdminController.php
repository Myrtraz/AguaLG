<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.create');
    }

    public function createProduct(Request $r)
    {
        $product = Product::create([
            'name' => $r->name,
            'price' => $r->price,
            'stock' =>$r->stock,
            'type' => $r->type,
            'cover' => $r->cover,
            'is_product_on' => true
        ]);

        return redirect()->route('dashboard');
    }

    public function storeProduct(Request $request)
    {
        $products = Product::get();
        return view('admin.selectEdit', compact('products'));
    }

    public function editProduct($id)
    {
        $product = Product::find($id);
        return view('admin.edit', compact('product'));
    }

    public function updateProduct(Request $r, $id)
    {
        $product = Product::find($id)
        ->update([
            'name' => $r->name,
            'price' => $r->price,
            'stock' =>$r->stock,
            'type' => $r->type,
            'cover' =>  $r->cover
        ]);

        return redirect()->route('select');
    }

    public function disableProduct($id)
    {
        $product = Product::where([
            'id' => $id
        ])
        ->update([
            'is_product_on' => false
        ]);
        
        //dd($product);
        return redirect()->back();
    }

    public function returnProduct(Request $request)
    {
        $products = Product::where('is_product_on', false)->get();
        return view('admin.returnProduct', compact('products'));
    }

    public function returneProduct($id)
    {
        $product = Product::where([
            'id' => $id
        ])
        ->update([
            'is_product_on' => true
        ]);
        
        return redirect()->back();
    }
}
