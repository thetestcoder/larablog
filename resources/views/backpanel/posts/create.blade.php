@extends('backpanel.layouts.master')
@section('content')
    <div class="d-flex justify-content-between">
        <a href="{{route('post.index')}}" class="btn btn-primary rounded">All Post</a>
    </div>
    <h3 class="text-center">Create A New Post</h3>
    @include('backpanel.layouts.errors')
    <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input
                id="title"
                type="text"
                class="form-control"
                name="title"
                placeholder="Enter Post Title"
            >
        </div>
        <div class="form-group">
            <label for="post_content">Content Here</label>
            <textarea
                name="post_content"
                id="post_content"
                class="form-control"
                cols="30"
                rows="10"
            ></textarea>
        </div>
        <div class="form-group">
            <label for="excerpt">Excerpt Here</label>
            <textarea
                name="excerpt"
                id="excerpt"
                class="form-control"
            ></textarea>
        </div>
        <div class="form-group">
            <label for="category_id">Select Category</label>
            <select name="category_id" id="category_id" class="form-control">
                <option value="0">Please Select Category</option>
                @forelse($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @empty
                @endforelse
            </select>
        </div>
        <button
            class="btn btn-primary rounded"
            type="submit" value="draft" name="status">Save Post</button>
        <button
            class="btn btn-success rounded"
            type="submit" value="publish" name="status">Publish Post</button>
    </form>
@endsection

@section('scripts')
    <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('post_content', {
            filebrowserUploadUrl:"{{route('post.upload', ['_token'=>csrf_token()])}}",
            filebrowserUploadMethod:"form"
        });
    </script>
@endsection
