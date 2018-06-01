<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Newsletter;

class SubscribesController extends Controller
{
    public function subscribe(Request $request){

        $this->validate($request, [
            'email' => 'required|email'
        ]);
        
        
        $email = $request->email;

        Newsletter::subscribe($email);
        // dd($request);
        Session::flash('subscribed', 'Successfully Subscribed');

        return redirect()->back();
    }
}
