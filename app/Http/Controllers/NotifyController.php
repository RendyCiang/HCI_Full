<?php

namespace App\Http\Controllers;

use App\Mail\Notification;
use App\Mail\NotificationMail;
use App\Models\Notify;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NotifyController extends Controller
{
    //
    public function GetEmail(Request $request){
        $request->validate([
            'email' => ['required','endswith:@gmail.com'],
        ]);

        Notify::create([
            'email' => $request->email,
        ]);

        Mail::to($request->email)->send(new Notification());

        return redirect('/home');
    }

    public function showNotify(){
        return view('notify');
    }

    public function sendNotification(Request $request)
    {
        $request->validate([
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $users = User::all();

        foreach ($users as $user) {
            Mail::to($user->email)->send(new NotificationMail($request->subject, $request->message));
        }

        return redirect('/home')->with('success', 'Notifications sent successfully!');
    }
}
