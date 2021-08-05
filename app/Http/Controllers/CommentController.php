<?php

namespace App\Http\Controllers;

use App\Comment;
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

    public function index(){
        return view('backpanel.comments.index')
                    ->with('comments', Comment::latest()->get());
    }

    public function edit(Comment $comment){
        return view('backpanel.comments.edit', compact('comment'));
    }

    public function update(Request $request, Comment $comment)
    {
        $comment->update($request->all());
        return redirect()->route('comment.index');
    }

    public function destroy(Comment $comment){
        $comment->delete();
        return redirect()->route('comment.index');
    }

    public function approve(Comment $comment)
    {
        if($comment->status === 'pending'){
            $comment->status = 'approve';
            $comment->save();
            return redirect()->route('comment.index')
                ->with('success', "Comment Approved");
        }else{
            return redirect()->route('comment.index')
                        ->with('error', "Already Approved");
        }
    }
}
