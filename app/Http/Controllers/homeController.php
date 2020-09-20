<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        $page = "home";
        $title = "Ocean of Knowledge | Home";
        return view('home',compact('page','title'));
    }
}
