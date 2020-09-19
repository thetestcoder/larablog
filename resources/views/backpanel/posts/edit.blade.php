@extends('backpanel.layouts.master')
@section('content')
    <div class="d-flex justify-content-between">
        <a href="{{route('post.index')}}" class="btn btn-primary rounded">All Post</a>
    </div>
    <h3 class="text-center">Update {{$post->title}}</h3>
    @include('backpanel.layouts.errors')
    <form action="{{route('post.update', [$post->id])}}"
          method="post"
          enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input
                id="title"
                type="text"
                class="form-control"
                name="title"
                placeholder="Enter Post Title"
                value="{{$post->title}}"
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
            >{{$post->content}}</textarea>
        </div>
        <div class="form-group">
            <label for="excerpt">Excerpt Here</label>
            <textarea
                name="excerpt"
                id="excerpt"
                class="form-control"
            >{{$post->excerpt}}</textarea>
        </div>
        <div class="form-group">
            <label for="category_id">Select Category</label>
            <select name="category_id" id="category_id" class="form-control">
                <option value="0">Please Select Category</option>
                @forelse($categories as $category)
                    <option value="{{$category->id}}"
                    @if($post->category_id == $category->id)
                        selected
                        @endif
                        >{{$category->name}}</option>
                @empty
                @endforelse
            </select>
        </div>
        <div class="form-file-group">
            <input type="file"
                   name="feature_image"
                   style="display: none"
                   id="file-upload"
                   onchange="previewFile(this)">
            <p onclick="document.querySelector('#file-upload').click()">
                Drag Your File Here or Click in this area to Upload
            </p>
        </div>
        <div id="previewBox" style="display: none">
            <img src="{{$post->url}}" id="previewImg" width="500px" class="img-fluid">
            <i
                class="material-icons"
                style="cursor: pointer"
                onclick="removePreview()"
            >delete</i>
        </div>
        @if($post->status == 'draft')
            <button
                class="btn btn-primary rounded"
                type="submit" value="draft" name="status">Save Post</button>
        @endif
        @if($post->status == 'publish')
            <button
                class="btn btn-success rounded"
                type="submit" value="publish" name="status">Update Post</button>
        @else
            <button
                class="btn btn-success rounded"
                type="submit" value="publish" name="status">Publish Post</button>
        @endif

    </form>
@endsection

@section('styles')
    <style>
        .form-file-group{
            width: 500px;
            height: 200px;
            border: 4px dashed #000;
        }
        .form-file-group p {
            width: 100%;
            height: 100%;
            text-align: center;
            line-height: 170px;
        }
    </style>
@endsection

@section('scripts')
    <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('post_content', {
            filebrowserUploadUrl:"{{route('post.upload', ['_token'=>csrf_token()])}}",
            filebrowserUploadMethod:"form"
        });

        $(document).ready(function (){
           let url = "{{$post->url}}";
           if(url !== ""){
               $("#previewBox").css('display', 'block');
               $(".form-file-group").css('display', 'none');
           }
        });

        function previewFile(input){
            let file = $("input[type=file]").get(0).files[0];
            if(file){
                let reader = new FileReader();
                reader.onload = function (){
                    $("#previewImg").attr('src', reader.result);
                    $("#previewBox").css('display', 'block');
                }
                $(".form-file-group").css('display', 'none');
                reader.readAsDataURL(file);
            }
        }
        function removePreview(){
            $("#previewImg").attr('src',"");
            $("#previewBox").css('display', 'none');
            $(".form-file-group").css('display', 'block');
        }
    </script>
@endsection
