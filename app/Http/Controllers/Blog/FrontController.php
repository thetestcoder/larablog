<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function allPost()
    {
        $posts = Post::where('status', 'publish')->latest()->paginate(2);
        return view('blog.home', compact('posts'));
    }

    public function singlePost(Post $post)
    {
        $relatedPosts = Post::where('id', "!=", $post->id)->take(3)->get();
        return view('blog.single-post', compact(['post', 'relatedPosts']));
    }
}
