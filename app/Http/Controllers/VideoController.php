<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    function GetVideo(Request $request){
        $request->validate([
            'video' => ['required'],
            'title' => ['required', 'min:5'],
            'info' => ['required', 'min:5', 'max:10000'],
            'link' => ['required', 'min:5'],
        ]);

        $now = now()->format('Y-m-d_H.i.s');
        $filename = $now.'_'.$request->file('video')->getClientOriginalName();
        $request->file('video')->storeAs('/public'.'/'.$filename);

        Video::create([
            'video' => $filename,
            'info' => $request->info,
            'title' => $request->title,
            'link' => $request->link,
        ]);

        return redirect('/home');
    }

    function ViewAddVideo(){
        return view('AddVideo');
    }

    function ViewVideoPage($id){
        $Info = Video::find($id);
        return view('VideoPage', ['Info' => $Info]);
    }

}
