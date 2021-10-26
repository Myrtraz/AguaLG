<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Carbon\Carbon;
class HomeController extends Controller
{
    public function index(Request $request)
    {
        $filters = Product::where('type', 'filtro')->paginate(4);
        return view('homepage', compact('filters'));
    }
}
