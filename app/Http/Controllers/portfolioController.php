<?php

namespace App\Http\Controllers;

use App\Models\categories;
use App\Models\portfolio;
use Exception;

class portfolioController extends Controller
{
    public function index(){
        $page = "portfolio";
        $title = "Portfolio";
        $results = portfolio::paginate(10);
        return view('portfolio.index',compact('page','title','results'));
    }

    public function getCategoryP($slug){
        $id = categories::where('slug',$slug)->firstOrFail();
        $results = portfolio::where('category',$id->id)->paginate(10);
        $page = "portfolio";
        $title = "Portfolio | Category | $id->title";
        return view('portfolio.index',compact('title','results','page'));
    }

    public function showPost($slug){
        $post = portfolio::where('slug',$slug)->firstOrFail();
        $page = "portfolio";
        $title = "Portfolio | Demo";
        return view('portfolio.post',compact('title','post','page'));
    }
}
