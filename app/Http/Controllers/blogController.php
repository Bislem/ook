<?php

namespace App\Http\Controllers;

use App\Models\categories;
use App\Models\posts;
use App\Models\subscription;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class blogController extends Controller
{
    public static $page = "blog";

    public function index(){
        $title = "Blog | Posts";
        $results = posts::paginate(10);
        $page = self::$page;
        $latest = self::getLatestPosts();
        $categories = categories::all();
        return view('blog.index',compact('title','page','results','latest','categories'));
    }

    private static function getLatestPosts($numberOfPosts =7){
        return posts::orderBy('created_at','desc')->take($numberOfPosts)->get();
    }

    public function getCategoryPosts($slug){
        $id = categories::where('slug',$slug)->firstOrFail();
        $results = posts::where('category',$id->id)->paginate(10);
        $page = "blog";
        $categories = categories::all();
        $title = "Blog | Posts | Category | $id->title";
        $latest = self::getLatestPosts();
        return view('blog.index',compact('title','results','page','latest','categories'));
    }

    public function getAuthorPosts($slug){
        $id = User::where('slug',$slug)->firstOrFail();
        $results = posts::where('author',$id->id)->paginate(10);
        $categories = categories::all();
        $page = "blog";
        $title = "Blog | Posts | Author : $id->username";
        $latest = self::getLatestPosts();
        return view('blog.index',compact('title','results','page','latest','categories'));
    }

    public function showPost($slug){
        $post = posts::where('slug',$slug)->firstOrFail();
        try{
            $post = app('db')->select("select * from posts where slug = '".$slug."'")[0];
        }catch(Exception $e){
            abort(404,"Page not Found");
        }
        $page = "blog";
        $title = "Blog | Post";
        return view('blog.post',compact('title','post','page'));
    }

    public function newsSubscription(Request $request){
        $val = Validator::make($request->all(),[
            'email' => 'required|email|max:50|unique:subscriptions'
        ]);

        if($val->fails()){
            return redirect()->back()->with('success','You are already subscribed !');
        }
        $subscriber = new subscription();

        $subscriber->email = $request->email;

        if(!$subscriber->save()){
            return redirect()->back()->with('fail','Sorry an error accured, we didn\'t get your email.');
        }

        return redirect()->back()->with('success','Congratulations, you have been subscribed successfully.');
    }
}
