<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function signin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        if(Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ]))
        {
            return redirect()->intended(route('allUsers'));
        }
        return redirect()->back()->with('failed', "The login information was incorrect!");
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->back();
    }

}
