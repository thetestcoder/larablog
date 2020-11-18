<div class="col-md-4">
    <div class="col-md-12 nopadding">
        <div class="blog1-sidebar-box">
            <div class="image-holder"><img src="http://placehold.it/360x340" alt="" class="img-responsive"/></div>
            <div class="text-box-inner">
                <h5 class="uppercase dosis">About me</h5>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue. </p>
                <br/>
                <div class="clearfix"></div>
                <ul class="blog1-social-icons">
                    <li><a href="https://twitter.com/codelayers"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.facebook.com/codelayers"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--end author info-->

    <div class="col-md-12 nopadding">
        <div class="blog1-sidebar-box">
            <div class="text-box-inner">
                <h5 class="uppercase dosis">Search</h5>
                <div class="clearfix"></div>
                <input class="blog1-sidebar-serch_input" type="search" placeholder="Email Address">
                <input name="" value="Submit" class="blog1-sidebar-serch-submit" type="submit">
            </div>
        </div>
    </div>
    <!--end sidebar box-->

    <div class="col-md-12 nopadding">
        <div class="blog1-sidebar-box">
            <div class="text-box-inner">
                <h5 class="uppercase dosis">Categories</h5>
                <div class="clearfix"></div>
                <ul class="category-links">
                    @forelse($categories as $category)
                        <li>
                            <a
                                href="{{route('category-post', [$category->slug])}}"
                            >
                                {{$category->name}}
                            </a>
                        </li>
                    @empty
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
    <!--end sidebar box-->

    <div class="col-md-12 nopadding">
        <div class="blog1-sidebar-box">
            <div class="text-box-inner">
                <h5 class="uppercase dosis">Latest Posts</h5>
                <div class="clearfix"></div>
                @forelse($latestPosts as $single_post)
                    <div class="blog1-sidebar-posts">
                        <div class="image-left">
                            <img src="{{$single_post->url}}"
                                 width="80px"
                                 height="80px"
                                 alt="{{$single_post->title}}"
                                 style="background-size: cover"

                            />
                        </div>
                        <div class="text-box-right">
                            <h6 class="less-mar3 uppercase dosis nopadding">
                                <a
                                    href="{{route('single-post', [$single_post->slug])}}">
                                    {{$single_post->title}}
                                </a>
                            </h6>
                            <div class="post-info">
                                <span>By {{$single_post->user->name}}</span>
                                <span>{{$single_post->created_at->diffForHumans()}}</span>
                            </div>
                        </div>
                    </div>
                    <!--end item-->
                @empty
                @endforelse

            </div>
        </div>
    </div>
    <!--end sidebar box-->

    <div class="col-md-12 nopadding">
        <div class="blog1-sidebar-box">
            <div class="text-box-inner">
                <h5 class="uppercase dosis">Tags</h5>
                <div class="clearfix"></div>
                <ul class="tags">
                    @forelse($sidebarTags as $sidebarTag)
                    <li>
                        <a
                            href="{{route('tag-post', [$sidebarTag->slug])}}"
                        >
                            {{$sidebarTag->name}}</a>
                    </li>
                    @empty
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
    <!--end sidebar box-->

    <div class="col-md-12 nopadding">
        <div class="blog1-sidebar-box">
            <div class="text-box-inner">
                <h5 class="uppercase dosis">Newsletter</h5>
                <div class="clearfix"></div>
                <input class="blog1-sidebar-serch_input" type="search" placeholder="Email Address">
                <input name="" value="Submit" class="blog1-sidebar-serch-submit" type="submit">
            </div>
        </div>
    </div>
    <!--end sidebar box-->

</div>
