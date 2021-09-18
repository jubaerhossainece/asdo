<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscriber;

class SubscriberController extends Controller
{

    public function store(Request $request){
        $request->validate([
            'email' => 'required|email:rfc,dns|unique:subscribers,email|max:100'
        ]);
        $Subscriber = new Subscriber;
        $Subscriber->email = $request->email;
        $result = $Subscriber->save();

        if($result){
            return response()->json([
                'success', 'You are subscribed to asdo newsletter now!'
            ]);
        }else{
            return response()->json([
                'failed', 'Something went wrong!'
            ]);
        }
    }
}
