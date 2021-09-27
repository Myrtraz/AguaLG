<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\OrderReceived;
use App\Models\Checkout;
use App\Models\ShoppingCart;
use Mail;
use PDF;
use DB;

class MailController extends Controller
{
    public function congratulations(Request $request)
    {
        $myOrder = DB::table('checkouts')
        ->select('checkouts.*','shopping_carts.*')->join('shopping_carts','shopping_carts.uid','=','checkouts.uid')
        ->get();

        $uid = hash('ripemd160', $request->session()->token());
        $data = [
            'uid' => $uid,
        ];

        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new OrderReceived($data));

        return view('cart.congratulations');
    }

    public function showpdf()
    {
        return view('bill.pdf');
    }

    public function printPDF(Request $request, $uid)
    {
        $myOrder = DB::table('checkouts')
        ->select('checkouts.*','shopping_carts.*')->join('shopping_carts','shopping_carts.uid','=','checkouts.uid')
        ->get();

        $pdf = \PDF::loadView('bill.pdf', compact('myOrder'));

        return $pdf->download('checkout.pdf');
    }
}
