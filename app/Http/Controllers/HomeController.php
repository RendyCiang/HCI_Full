<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function ViewHomePage(){
        $Info = Video::all();
        return view('homepage', ['Info' => $Info]);
    }

    public function ViewLandingPage(){
        return view('Landingpage');
    }

    public function ViewAboutPage(){
        return view('AboutUs');
    }

    public function ViewProfile(){
        $UserData = auth()->user();
        return view('profile', ['UserData' => $UserData]);
    }

    public function LogoutHome(){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/home');
    }
}
