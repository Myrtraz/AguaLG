<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\OrderReceived;
use App\Models\Checkout;
use App\Models\ShoppingCart;
use App\Models\Address;
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

    public function showpdf(Request $request)
    {
        $uid = hash('ripemd160', $request->session()->token());
        $user = Checkout::where('uid', $uid)->first();
        $address = Address::where('uid', $uid)->first();
        $myOrder = DB::table('checkouts')
        ->select('checkouts.*','shopping_carts.*')->join('shopping_carts','shopping_carts.uid','=','checkouts.uid')
        ->where('shopping_carts.uid', $uid)
        ->get();

        return view('bill.pdf', compact('user','myOrder', 'address'));
    }

    public function printPDF(Request $request, $uid)
    {
        $uid = hash('ripemd160', $request->session()->token());
        $user = Checkout::where('uid', $uid)->first();
        $address = Address::where('uid', $uid)->first();
        $myOrder = DB::table('checkouts')
        ->select('checkouts.*','shopping_carts.*')->join('shopping_carts','shopping_carts.uid','=','checkouts.uid')
        ->where('shopping_carts.uid', $uid)
        ->get();

        $pdf = \PDF::loadView('bill.pdf', compact('user','myOrder', 'address'));

        return $pdf->stream('checkout.pdf');
    }
}
