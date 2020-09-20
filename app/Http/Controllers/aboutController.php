<?php

namespace App\Http\Controllers;

class aboutController extends Controller
{
    public function index(){
        $page = "about";
        $title = "About";
        return view('about',compact('page','title'));
    }
}
