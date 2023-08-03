<?php

namespace App\Http\Controllers\Notification;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserNotification extends Controller
{

    public function SendPage(){
        $users = User::all();
        return view('notification.send',compact('users'));
    }
    public function Send(Request $request){
        $user = User::findOrFail($request->user);
        $user->notify(new \App\Notifications\UserNotification($request->input('content')));

        return response()->json('true',200);
    }


    public function ReceivePage(){
        return view('notification.receive');
    }
}
