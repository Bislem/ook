<?php

namespace App\Http\Controllers;

use App\Models\messages;
use Illuminate\Http\Request;

class contactController extends Controller
{
    public function index(){
        $page = "contact";
        $title = "Contact";
        return view('contact',compact('page','title'));
    }

    public function message(Request $request){
        $this->validate($request,[
            'email' => 'required|email|max:100',
            'fullName' => 'required|max:40',
            'message' => 'required|max:1000',
        ]);
        
        $message = new messages();

        $message->fullName = $request->fullName;
        $message->message = $request->message;
        $message->email = $request->email;

        if(!$message->save()){
            return redirect()->back()->with('fail','Something went wrong, sorry we didn\'t get your message');
        }
        return redirect()->back()->with('success','We got your message !');

    }
}
