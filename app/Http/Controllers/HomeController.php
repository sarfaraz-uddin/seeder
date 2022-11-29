<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function login(){
        return view('login');
    }

    // public function dashboard(){
    //     $posts = Post::all();
    //     // $posts = Post::where('user_id','=', auth()->user()->id)->get(); //select = from posts;
    //     return view('dashboard', compact('posts'));
    // }

    public function register(){
        return view('register');
        // return redirect('/login');
    }
    
    
}
