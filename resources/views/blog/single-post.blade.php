@extends('layouts.app')
@section('content')
    <div class="col-md-12 nopadding">
        <div class="blog1-post-holder">
            <div class="text-box-inner">
                <h4 class="dosis uppercase less-mar3">{{$post->title}}</h4>
                <div style="margin: 5px">
                    <img src="{{$post->url}}" alt="{{$post->title}}" class="img-responsive" width="90%">
                </div>
                {!! $post->content !!}
                <br/>
                <div class="tag-box">
                    <span>Tags: </span>
                    @forelse($post->tags as $tag)
                        <a href="{{route('tag-post', [$tag->slug])}}" class="tag-link">{{$tag->name}}</a>
                    @empty
                    @endforelse
                </div>
                <h4 class="dosis uppercase less-mar3"><a href="#">Share this article</a></h4>
                <br/>
                <ul class="blog1-social-icons">
                    <li><a href="https://twitter.com/codelayers"><i class="fa fa-twitter"></i></a></li>
                    <li>
                        <a href="https://www.facebook.com/codelayers">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
                <br/>
                <br/>
                <br/>
                <div class="blog1-post-info-box">
                    <div class="text-box border padding-3">
                        <div class="iconbox-medium left round overflow-hidden">
                            <img src="{{$post->user->avatar}}" alt="" class="img-responsive"/>
                        </div>
                        <div class="text-box-right more-padding-2">
                            <h4 class="uppercase dosis">
                                <a
                                    href="{{route('author-post', [$post->user->slug])}}"
                                >
                                    {{$post->user->name}}
                                </a>
                            </h4>
                            <div>
                                {!! $post->user->bio !!}
                            </div>
                            <br/>
                            <a class="btn btn-border yellow-green btn-small-2 " href="#">Read more</a></div>
                    </div>
                </div>
                <!--end item-->
                <div class="clearfix"></div>
                <br/>
                <br/>
                <h4 class="dosis uppercase less-mar3"><a href="#">Related Posts</a></h4>
                <br/>

                @forelse($relatedPosts as $single_post)
                    <div class="col-md-4 bmargin">
                        <div class="image-holder">
                            <a href="#">
                                <img src="{{$single_post->url}}" alt="{{$single_post->title}}"
                                     class="img-responsive"/>
                            </a>
                        </div>
                        <div class="clearfix"></div>
                        <h5 class="dosis uppercase less-mar1">
                            <a href="#">{{$single_post->title}}</a>
                        </h5>
                        <div class="blog1-post-info">
                            <span>By {{$single_post->user->name}}</span><span>
                                                {{$single_post->created_at->diffForHumans()}}</span>
                        </div>
                    </div>
                @empty
                @endforelse

                <div class="clearfix"></div>
                <br/>
                <br/>
                <h4 class="dosis uppercase less-mar3"><a href="#">3 Comments</a></h4>
                <br/>

                @forelse($post->comments as $comment)
                    <div class="blog1-post-info-box">
                        <div class="text-box border padding-3">
                            <div class="text-box-right more-padding-2">
                                <h5 class="uppercase dosis less-mar2">{{$comment->name}}</h5>
                                <div class="blog1-post-info">
                                    <span>
                                        {{$comment->created_at->diffForHumans()}}
                                    </span>
                                </div>
                                <p class="paddtop1">{{$comment->comment}}</p>
                                <br/>
                                <a
                                    class="btn btn-border yellow-green btn-small-2 "
                                    href="#comment-form"
                                    onclick="document.getElementById('comment_id').value = {{$comment->id}}"
                                >
                                    Reply
                                </a>
                            </div>
                            @forelse($comment->replies as $reply)
                                @include('blog.partials._replies', ['reply'=> $reply])
                            @empty
                            @endforelse
                        </div>
                    </div>
                    <!--end item-->

                    <div class="clearfix"></div>
                    <br/>
                @empty
                @endforelse
                <a class="loadmore-but" href="#">Load more Comments</a>
                <div class="smart-forms bmargin" id="comment-form">
                    <h4 class=" dosis uppercase">Post a Comment</h4>

                    <form
                        method="post"
                        action="{{route('comment.store', [$post->id])}}"
                        id="smart-form">
                        @csrf
                        <input type="hidden" name="comment_id" id="comment_id">
                        <div>
                            <div class="section form-group">
                                <label class="field prepend-icon">
                                    <input
                                        type="text"
                                        name="name"
                                        id="sendername"
                                        class="gui-input form-control"
                                        placeholder="Enter name">
                                </label>
                            </div>
                            <!-- end section -->

                            <div class="section form-group">
                                <label class="field prepend-icon">
                                    <input
                                        type="email"
                                        name="email"
                                        id="emailaddress"
                                        class="gui-input form-control"
                                        placeholder="Email address">
                                </label>
                            </div>
                            <!-- end section -->

                            <div class="section form-group">
                                <label class="field prepend-icon">
                                    <textarea
                                        class="gui-textarea form-control"
                                        id="sendermessage"
                                        name="comment"
                                        placeholder="Enter message"></textarea>
                                    <span
                                        class="input-hint">
                                        <strong>Hint:</strong>
                                        Please enter between 80 - 300 characters.
                                    </span>
                                </label>
                            </div>
                            <!-- end section -->

                            <div class="result"></div>
                            <!-- end .result  section -->

                        </div>
                        <!-- end .form-body section -->
                        <div class="form-footer">
                            <button type="submit" data-btntext-sending="Sending..."
                                    class="button btn-primary yellow-green">Submit
                            </button>
                            <button type="reset" class="button"> Cancel</button>
                        </div>
                        <!-- end .form-footer section -->
                    </form>
                </div>
                <!-- end .smart-forms section -->
            </div>
        </div>
    </div>
    <!--end post-->
    <!--end main bg-->
    <div class="clearfix"></div>
@endsection

@section('styles')
    <style>
        .tag-box{
            margin: 10px 0;
        }
        .tag-link{
            background-color: #dbdc33;
            padding: 7px;
            color: #fff;
            font-size: 14px;
            font-weight: bold;
            border-radius: 20px;
        }
    </style>
@endsection
