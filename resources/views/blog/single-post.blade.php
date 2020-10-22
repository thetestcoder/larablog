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
                            <h4 class="uppercase dosis">{{$post->user->name}}</h4>
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
                <div class="blog1-post-info-box">
                    <div class="text-box border padding-3">
                        <div class="iconbox-medium left round overflow-hidden"><img src="http://placehold.it/110x110"
                                                                                    alt="" class="img-responsive"/>
                        </div>
                        <div class="text-box-right more-padding-2">
                            <h5 class="uppercase dosis less-mar2">Charlotte</h5>
                            <div class="blog1-post-info"><span>July 15 2015 at 10:30 AM</span></div>
                            <p class="paddtop1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et
                                justo. Praesent mattis commodo augue. </p>
                            <br/>
                            <a class="btn btn-border yellow-green btn-small-2 " href="#">Reply</a></div>
                    </div>
                </div>
                <!--end item-->

                <div class="clearfix"></div>
                <br/>
                <div class="blog1-post-info-box">
                    <div class="text-box border padding-3">
                        <div class="iconbox-medium left round overflow-hidden"><img src="http://placehold.it/110x110"
                                                                                    alt="" class="img-responsive"/>
                        </div>
                        <div class="text-box-right more-padding-2">
                            <h5 class="uppercase dosis less-mar2">John William</h5>
                            <div class="blog1-post-info"><span>July 15 2015 at 10:30 AM</span></div>
                            <p class="paddtop1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et
                                justo. Praesent mattis commodo augue. </p>
                            <br/>
                            <a class="btn btn-border yellow-green btn-small-2 " href="#">Reply</a></div>
                    </div>
                </div>
                <!--end item-->

                <div class="clearfix"></div>
                <br/>
                <div class="blog1-post-info-box less-width pull-right">
                    <div class="text-box border padding-3">
                        <div class="iconbox-medium left round overflow-hidden"><img src="http://placehold.it/110x110"
                                                                                    alt="" class="img-responsive"/>
                        </div>
                        <div class="text-box-right more-padding-2">
                            <h5 class="uppercase dosis less-mar2">John William</h5>
                            <div class="blog1-post-info"><span>July 15 2015 at 10:30 AM</span></div>
                            <p class="paddtop1">Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                            <br/>
                            <a class="btn btn-border yellow-green btn-small-2 " href="#">Reply</a></div>
                    </div>
                </div>
                <!--end item-->
                <div class="clearfix"></div>
                <a class="loadmore-but" href="#">Load more Comments</a>
                <div class="smart-forms bmargin">
                    <h4 class=" dosis uppercase">Post a Comment</h4>

                    <form
                        method="post"
                        action="{{route('comment.store', [$post->id])}}"
                        id="smart-form">
                        @csrf
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
