@extends('layouts.app')
@section('content')
    <h3>Author: {{$user->name}}</h3>
    @forelse($user->posts as $post)
        <div class="col-md-12 nopadding">
            <div class="blog1-post-holder">
                <div class="image-holder">
                    <div class="post-info">
                        <span>
                            <i class="fa fa-user"></i> {{$post->category->name}}
                        </span>
                        <span><i class="fa fa-calendar"></i> {{$post->created_at->diffForHumans()}}</span>
                    </div>
                    <img src="{{$post->url}}" alt="" class="img-responsive"/>
                </div>
                <div class="text-box-inner">
                    <h4 class="dosis uppercase less-mar3">
                        <a href="{{route('single-post', [$post->slug])}}">{{$post->title}}</a>
                    </h4>
                    <div class="blog-post-info">
                        <span>
                            <i class="fa fa-user"></i> By
                            <a href="{{route('author-post', [$post->user->slug])}}">{{$post->user->name}}</a>
                        </span>
                        <span>
                            <i class="fa fa-comments-o"></i> 15 Comments</span>
                    </div>
                    <br/>
                    <p>{{$post->excerpt}}</p>
                    <br/>
                    <br/>
                    <a href="{{route('single-post', [$post->slug])}}" class="btn btn-border yellow-green">Read more</a> </div>
            </div>
        </div>
        <!--end post-->
    @empty
        <p>No Post Found</p>
    @endforelse
@endsection
