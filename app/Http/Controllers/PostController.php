<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    public function dashboard()
    {
        // return view('dashboard',['list'=>todo::all()]);
        // $posts = Post::all();
        $posts = Post::where('user_id','=', auth()->user()->id)->get(); //select = from posts;
        return view('dashboard', compact('posts'));
    }
    
    public function saveTitle(Request $req)
    {
        //save data to the database
        Post::create([
            'title'=>$req->title,
            'user_id'=>$req->user()->id,
        ]);
        return redirect()->route('dashboard');

    }
    public function delete($id)
    {
        $Obj=Post::find($id);
        $Obj->delete();
        return redirect('/');
    }
    public function edit($id)
    {
        $Obj=Post::find($id);
         return view('edit',['data'=>$Obj]);
    }
    public function updateTitle(Request $req)
    {
        //save data to the database
        $Obj=Post::find($req->id);
        $Obj->update([
            'title'=>$req->title,
        ]);
        return redirect()->route('dashboard');
    }

}
