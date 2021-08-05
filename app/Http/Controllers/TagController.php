<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $tags = Tag::paginate(10);
        return view('backpanel.tags.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backpanel.tags.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
       $tags = Tag::create($request->only('name'));
       return redirect()->back()->with("success", "Tag Created Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        return view('backpanel.tags.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Tag $tag)
    {
        $tag->update($request->only('name'));
        return redirect()
            ->route('tag.index')
            ->with("success", "Tag updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect()->back()->with("success", "Tag deleted Successfully");
    }

    public function trashedTag()
    {
        $tags = Tag::onlyTrashed()->get();
        return view('backpanel.tags.trash', compact('tags'));
    }

    public function restoreTag($tag)
    {
        Tag::withTrashed()->where('id', $tag)->restore();
        return redirect()->route('tag.index')
            ->with('success', "Tag Restored");
    }

    public function forceDeleteTag($tag)
    {
        Tag::withTrashed()->where('id', $tag)->forceDelete();
        return redirect()->route('tag.index')
            ->with('success', "Tag Deleted");
    }
}
