<?php

namespace App\Http\Controllers\User;

use App\Category;
use App\Http\Controllers\Controller;
use App\Post;
use App\Tag;
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
            'user_id'       => auth()->id(),
            'category_id'   => $request->category_id
        ]);

        if($request->hasFile('feature_image')){
            $post->addMedia($request->feature_image)
                ->toMediaCollection("feature_image");
        }

        $tags_id = $this->addAndSyncTags($request, $post);

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
     * @param  Post  $post
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit(Post $post)
    {
        $this->authorize('update', $post);
        $categories = Category::all();
        return view('backpanel.posts.edit', compact(['post', 'categories']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Post $post
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Post $post)
    {
        $this->authorize('update', $post);
        $post->update([
            'title'         => $request->input('title', $post->title),
            'content'       => $request->input('post_content', $post->content),
            'status'        => $request->input('status', $post->status),
            'excerpt'       => $request->input('excerpt', $post->excerpt),
            'category_id'   => $request->input('category_id', $post->category_id)
        ]);

        if($request->hasFile('feature_image')){
            $post->media()->delete();
            $post->addMedia($request->feature_image)
                ->toMediaCollection("feature_image");
        }

        $tags_id = $this->addAndSyncTags($request, $post);

        return redirect()->route('post.index')
            ->with('success', "Post Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Post  $post
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Post $post)
    {
        $this->authorize('delete', $post);
        $post->delete();
        return redirect()->route('post.index')
            ->with('success', "Post Deleted Successfully");
    }

    public function trashedPost()
    {
        $posts = Post::onlyTrashed()->get();
        return view('backpanel.posts.trash', compact('posts'));
    }

    public function restorePost($id)
    {
        Post::withTrashed()->where('id', $id)->restore();
        return redirect()
            ->route('post.index')
            ->with('success', "Post Restored");
    }

    public function forceDeletePost($id)
    {
        $post =  Post::withTrashed()->where('id', $id)->first();
        $this->authorize('delete', $post);
        $post->getMedia('feature_image')[0]->delete();
        $post->forceDelete();
        return redirect()
            ->route('post.index')
            ->with('success', "Post Deleted successfully");
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

    /**
     * @param Request $request
     * @param $post
     * @return array
     */
    private function addAndSyncTags(Request $request, $post): array
    {
        if ($request->has('tags')) {
            $tags = explode(",", $request->tags);
            $tags_id = [];

            foreach ($tags as $tag) {
                $tag_model = Tag::where('name', $tag)->first();
                if ($tag_model) {
                    array_push($tags_id, $tag_model->id);
                } else {
                    array_push($tags_id, (Tag::create(['name' => $tag]))->id);
                }
            }

            $post->tags()->sync($tags_id);
        }
        return $tags_id;
    }
}
