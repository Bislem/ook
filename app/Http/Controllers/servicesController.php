<?php

namespace App\Http\Controllers;

use App\Models\services;
use Illuminate\Http\Request;

class servicesController extends Controller
{
    public function index(){
        $title = "Services";
        $results = services::paginate(10);
        $page = 'services';
        return view('services.index',compact('title','page','results'));
    }

    public function showPost($slug){
        $post = services::where('slug',$slug)->firstOrFail();
        $page = "services";
        $title = "Services | Demo";
        return view('services.post',compact('title','post','page'));
    }
}
