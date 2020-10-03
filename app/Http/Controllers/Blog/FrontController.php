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
}
