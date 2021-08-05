<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link
        href='https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic'
        rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet'
          type='text/css'>
    <link href='https://www.google.com/fonts#UsePlace:use/Collection:Droid+Serif:400,400italic,700,700italic'
          rel='stylesheet' type='text/css'>
    <link
        href='https://www.google.com/fonts#UsePlace:use/Collection:Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic'
        rel='stylesheet' type='text/css'>

    <link rel="stylesheet" media="screen" href="{{asset('front-assets/js/bootstrap/bootstrap.min.css')}}"
          type="text/css"/>
    <link rel="stylesheet" href="{{asset('front-assets/js/mainmenu/menu.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('front-assets/css/default.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('front-assets/css/layouts.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('front-assets/css/shortcodes.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('front-assets/css/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" media="screen" href="{{asset('front-assets/css/responsive-leyouts.css')}}" type="text/css"/>
    <link rel="stylesheet" type="text/css"
          href="{{asset('front-assets/css/Simple-Line-Icons-Webfont/simple-line-icons.css')}}" media="screen"/>
    <link rel="stylesheet" href="{{asset('front-assets/css/et-line-font/et-line-font.css')}}">
    <link href="{{asset('front-assets/js/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('front-assets/js/jFlickrFeed/style.css')}}"/>
    <style>
        a.previous-link, a.next-link {
            text-decoration: none;
            display: inline-block;
            padding: 8px 16px;
        }

        span.next-link-disabled, span.previous-link-disabled {
            text-decoration: none;
            display: inline-block;
            padding: 8px 16px;
            background: #f1f1f1;
            color: lightgray;
        }

        a.previous-link, a.next-link {
            background: #dbdc33;
            color: white;
        }

        a.previous-link:hover, a.next-link:hover {
            background: #c3c418;
            color: white;
        }
    </style>
    @yield('styles')
</head>
<body>

@php
    $site_phone = getSiteOption("site_phone");
    $site_email = getSiteOption("site_email");
    $site_fb_link = getSiteOption("site_social_links.facebook");
    $site_twitter_link = getSiteOption("site_social_links.twitter");
    $site_insta_link = getSiteOption("site_social_links.instagram");
    $site_linkedin_link = getSiteOption("site_social_links.linkedin");
    $site_logo = getSiteLogo();
    $site_name = getSiteOption("site_name");
    $site_des = getSiteOption("site_description");
    $copyright_text = getSiteOption("copyright_text");
@endphp

<div class="site_wrapper">
    <div class="topbar white topbar-padding">
        <div class="container">
            <div class="topbar-left-items">
                <ul class="toplist toppadding pull-left paddtop1">
                    @if($site_phone)
                        <li class="rightl">
                            <i class="fa fa-phone"></i>
                            {{$site_phone}}
                        </li>
                    @endif
                    @if($site_email)
                        <li>
                            <i class="fa fa-envelope"></i>
                            {{$site_email}}
                        </li>
                    @endif
                </ul>
            </div>
            <!--end left-->

            <div class="topbar-right-items pull-right">
                <ul class="toplist toppadding">
                    <li class="lineright">
                        @if(auth()->guest())
                            <a href="/login">Login</a>
                        @else
                            <a href="/backpanel">{{auth()->user()->name}}</a>
                        @endif
                    </li>
                    @if(!empty($site_fb_link))
                        <li>
                            <a href="{{$site_fb_link}}">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                    @endif
                    @if(!empty($site_twitter_link))
                        <li>
                            <a href="{{$site_twitter_link}}">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                    @endif
                    @if(!empty($site_insta_link))
                        <li>
                            <a href="{{$site_insta_link}}">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>
                    @endif
                    @if(!empty($site_linkedin_link))
                        <li class="last">
                            <a href="{{$site_linkedin_link}}">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>

    <div id="header">
        <div class="container">
            <div class="navbar yellow-green navbar-default yamm">
                <div class="navbar-header">
                    <button type="button" data-toggle="collapse" data-target="#navbar-collapse-grid"
                            class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span
                            class="icon-bar"></span></button>
                    <a href="/" class="navbar-brand">
                        @if($site_logo)
                            <img
                                src="{{$site_logo}}"
                                alt="{{$site_name}}"
                                width="75px"
                            />
                        @else
                            <h3>{{$site_name}}</h3>
                        @endif
                    </a></div>
                <div id="navbar-collapse-grid" class="navbar-collapse collapse pull-right">
                    <ul class="nav yellow-green navbar-nav">
                        <li><a href="/" class="dropdown-toggle active">Home</a></li>
                        <li><a href="about.html" class="dropdown-toggle">About Me</a></li>
                        <li class="dropdown"><a href="fullwidth-post.html" class="dropdown-toggle">Posts</a>
                            <ul class="dropdown-menu five" role="menu">
                                <li><a href="gallerypost.html">Gallery Post</a></li>
                                <li><a href="fullwidth-post.html">Full Width Post</a></li>
                                <li><a href="video-post.html">Video Post</a></li>
                                <li><a class="active" href="index.html">Post with Sidebar</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html" class="dropdown-toggle">Contact Me</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--end menu-->
    <div class="clearfix"></div>

    <section class="section-light sec-tpadding-2">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    @yield('content')

                </div>
                <!--end left item-->

                <!-- sidebar here -->
            @include('layouts.sidebar')


            <!--end left item-->

            </div>
        </div>
    </section>
    <!--end main bg-->
    <div class="clearfix"></div>

    <section class="section-dark sec-padding">
        <div class="container ">
            <div class="row">
                <div class="col-md-2"><br/>
                    @if($site_logo)
                        <img
                            src="{{$site_logo}}"
                            alt="{{$site_name}}"
                            width="75px"
                        />
                    @else
                        <h3>{{$site_name}}</h3>
                    @endif
                </div>
                <div class="col-md-10">
                    <blockquote class="style1">
                        <span>
                            {{$site_des}}
                        </span>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>
    <!--end section-->
    <div class="clearfix"></div>
    <section class="section-copyrights sec-moreless-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span>
                        {!! $copyright_text !!}
                    </span>
                </div>
            </div>
        </div>
    </section>
    <!--end section-->
    <div class="clearfix"></div>
    <a href="#" class="scrollup yellow-green"></a><!-- end scroll to top of the page-->
</div>

<script type="text/javascript" src="{{asset('front-assets/js/universal/jquery.js')}}"></script>
<script src="{{asset('front-assets/js/bootstrap/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('front-assets/js/jFlickrFeed/jflickrfeed.min.js')}}"></script>
<script>
    $('#basicuse').jflickrfeed({
        limit: 6,
        qstrings: {
            id: '133294431@N08'
        },
        itemTemplate:
            '<li>' +
            '<a href="@{{image_b}}"><img src="@{{image_s}}" alt="@{{title}}" /></a>' +
            '</li>'
    });
</script>
<script src="{{asset('front-assets/js/mainmenu/customeUI.js')}}"></script>
<script src="{{asset('front-assets/js/mainmenu/jquery.sticky.js')}}"></script>

<script src="{{asset('front-assets/js/owl-carousel/owl.carousel.js')}}"></script>
<script src="{{asset('front-assets/js/owl-carousel/custom.js')}}"></script>
<script src="{{asset('front-assets/js/scrolltotop/totop.js')}}"></script>

<script src="{{asset('front-assets/js/scripts/functions.js')}}" type="text/javascript"></script>
@yield('scripts')
</body>
</html>
