<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(Request $request){
        $search=$request->search;
        $posts=Post::where('title','LIKE', "%{$search}%" )
            ->latest()->paginate();
        return view('home', ['posts'=>$posts]);
    }


    public function post(Post $post){
        //consulta a base de datos
       
        return view('post', ['post'=>$post]);
    }
}
