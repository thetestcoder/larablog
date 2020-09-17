<?php

namespace App\Http\Controllers\User;

use App\Category;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Spatie\Image\Image;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        return view('backpanel.posts.index')
            ->with('posts', Post::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('backpanel.posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $post = Post::create([
            'title'         => $request->title,
            'content'       => $request->post_content,
            'status'        => $request->status,
            'excerpt'       => $request->excerpt,
            'user_id'       => 7,
            'category_id'   => $request->category_id
        ]);

        if($request->hasFile('feature_image')){
            $post->addMedia($request->feature_image)
                ->toMediaCollection("feature_image");
        }

        return redirect()->route('post.index')
            ->with('success', "Post Added Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function trashedPost()
    {
        // TODO: all trashed posts
    }

    public function restorePost($post)
    {
        // TODO: restore a single post
    }

    public function forceDeletePost($post)
    {
        // TODO: Force delete any single trashed post
    }

    public function uploadPhoto(Request $request)
    {
        $original_name = $request->upload->getClientOriginalName();
        $filename_org = pathinfo($original_name, PATHINFO_FILENAME);
        $ext = $request->upload->getClientOriginalExtension();
        $filename = $filename_org.'_'.time().'.'.$ext;

        $request->upload->move(storage_path('app/public/blog/images'), $filename);

        $CKEditorFuncNum = $request->input('CKEditorFuncNum');

        $url = asset('storage/blog/images/'.$filename);
        $message = "Your Photo Uploaded";

        $res = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, `$url`, `$message`)</script>";
        @header("Content-Type: text/html; charset=utf-8");

        echo $res;

    }
}
