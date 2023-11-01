<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index() 
    {
        $posts = Post::get();
        return view('posts.index',[
            'posts' => $posts
        ]);
    }

    public function store(Request $Request)
    {
        $this->validate($Request,[
            'body'=> 'required'
        ]);

        $Request->user()->posts()->create($Request->only('body'));

    return back();
    }
}
