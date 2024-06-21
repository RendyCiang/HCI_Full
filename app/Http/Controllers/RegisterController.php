<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;

class RegisterController extends Controller
{
    //
    public function ViewRegisterPage(){
        return view('RegisterPage');
    }

    public function StoreRegisterData(Request $request){
        $request->validate([
            'name' => ['required','min:4'],
            'email' => ['required', 'ends_with:@gmail.com'],
            'password' => ['required', 'min:8'],
            'NIK' => ['required', 'min:16'],
            'phone' => ['required', 'min:10','starts_with:08'],
            'DOB' => ['required', 'date'],
        ]);

        $hashedPassword = bcrypt($request->password);


        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $hashedPassword,
            'NIK' => $request->NIK,
            'phone' => $request->phone,
            'DOB' => $request->DOB,
        ]);

        return redirect('/login');
    }
}
