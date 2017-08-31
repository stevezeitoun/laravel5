<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts', compact('posts'));
    }

    public function view($id)
    {
        $post = Post::where('id', $id)->firstOrFail();
        return view('post', compact('post'));
    }

    public function edit($id)
    {
            $post = Post::where('id', $id)->firstOrFail();
            return view('post-edit', compact('post'));
    }

    public function update(Request $request)
    {
        return $request->input();
    }
}
