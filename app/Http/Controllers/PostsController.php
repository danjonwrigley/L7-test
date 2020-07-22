<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function showAll()
    {
        //
    }

    public function show($slug)
    {
        dd($post = Post::where('slug', $slug)->firstOrFail());
        return view('pages.posts.post', [
            $post = Post::where('slug', $slug)->firstOrFail(),
        ]);
    }
}
