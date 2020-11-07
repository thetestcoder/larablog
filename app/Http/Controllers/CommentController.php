<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentStoreRequest;
use App\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(CommentStoreRequest $request, Post $post)
    {
        $post->comments()->create([
            'parent_id' => $request->comment_id,
            'name' => $request->name,
            'email' => $request->email,
            'comment' => $request->comment,
        ]);

        return back();
    }
}
