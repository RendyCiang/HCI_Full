<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function ViewLoginPage(){
        return view('LoginPage');
    }

    public function StoreLoginData(Request $request){
        $takeData = $request->validate([
            'email' => ['required', 'ends_with:@gmail.com'],
            'password' => ['required', 'min:8'],
        ]);

        if(Auth::attempt($takeData)){
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }

    }
}
