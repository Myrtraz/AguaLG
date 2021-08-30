<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductCategoryController extends Controller
{
    public function usProducts()
    {
        $products = Product::paginate(8);
        return view('products.usProducts', compact('products'));
    }

    public function filters()
    {
        $filters = Product::where('type', 'filtro')->get();
        return view('products.filters', compact('filters'));
    }

    public function accessories()
    {
        $accessories = Product::where('type', 'Accesorio')->get();
        return view('products.accessories', compact('accessories'));
    }

    public function thermos()
    {
        $thermos = Product::where('type', 'termo')->get();
        return view('products.thermos', compact('thermos'));
    }

    public function getProduct($name)
    {
        $product = Product::where('name', $name)->first();
        return view('products.product', compact('name', 'product'));
    }
}
