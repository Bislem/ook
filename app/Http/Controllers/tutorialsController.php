<?php

namespace App\Http\Controllers;

use App\Models\categories;
use App\Models\tutorials;
use Illuminate\Http\Request;

class tutorialsController extends Controller
{
    public function index(){
        $title = "Tutorials";
        $results = tutorials::paginate(10);
        $page = 'tutorials';
        return view('tutorials.index',compact('title','page','results'));
    }

    public function showPost($slug){
        $post = tutorials::where('slug',$slug)->firstOrFail();
        $page = "tutorials";
        $title = "Tutorials | ".$post->title;
        return view('tutorials.post',compact('title','post','page'));
    }

    public function getCategoryP($slug){
        $id = categories::where('slug',$slug)->firstOrFail();
        $results = tutorials::where('category',$id->id)->paginate(10);
        $page = "tutorials";
        $title = "Tutorials | Category | $id->title";
        return view('tutorials.index',compact('title','results','page'));
    }
}
