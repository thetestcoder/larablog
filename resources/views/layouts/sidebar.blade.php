@php
    $bio = getSiteOption("site_owner_bio");
    $site_owner_avatar = getSiteOwnerAvatar();
    $site_owner_fb_link = getSiteOption("site_owner_social_links.facebook");
    $site_owner_twitter_link = getSiteOption("site_owner_social_links.twitter");
    $site_owner_instagram_link = getSiteOption("site_owner_social_links.instagram");
    $site_owner_linkedin_link = getSiteOption("site_owner_social_links.linkedin");
@endphp

<div class="col-md-4">
    <div class="col-md-12 nopadding">
        <div class="blog1-sidebar-box">
            <div class="image-holder">
                @if($site_owner_avatar)
                    <img src="{{$site_owner_avatar}}" alt="" class="img-responsive"/>
                @endif
            </div>
            <div class="text-box-inner">
                <h5 class="uppercase dosis">About me</h5>
                <p>{{$bio}}</p>
                <br/>
                <div class="clearfix"></div>
                <ul class="blog1-social-icons">
                    @if(!empty($site_owner_fb_link))
                        <li>
                            <a href="{{$site_owner_fb_link}}">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                    @endif
                    @if(!empty($site_owner_twitter_link))
                        <li>
                            <a href="{{$site_owner_twitter_link}}">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                    @endif
                    @if(!empty($site_owner_instagram_link))
                        <li>
                            <a href="{{$site_owner_instagram_link}}">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>
                    @endif
                    @if(!empty($site_owner_linkedin_link))
                        <li>
                            <a href="{{$site_owner_linkedin_link}}">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                    @endif
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
                <form action="/">
                    <input
                        class="blog1-sidebar-serch_input"
                        type="search"
                        placeholder="Search"
                        name="q"
                    >
                    <input
                        value="Submit"
                        class="blog1-sidebar-serch-submit"
                        type="submit">
                </form>
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
