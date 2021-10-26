<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.login');
    }

    public function loggedIn(Request $request) {
    	if (! Auth::attempt($request->only(['email', 'password']))) {
            return back()->withErrors(['Invalid Credentials']);
        }
        
        return redirect()->route('dashboard');
  	}

    public function logout() {
        Auth::logout();
        return redirect()->route('login');
    }
}
