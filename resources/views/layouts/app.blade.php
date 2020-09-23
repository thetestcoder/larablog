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
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link href='https://www.google.com/fonts#UsePlace:use/Collection:Droid+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='https://www.google.com/fonts#UsePlace:use/Collection:Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" media="screen" href="{{asset('front-assets/js/bootstrap/bootstrap.min.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('front-assets/js/mainmenu/menu.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('front-assets/css/default.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('front-assets/css/layouts.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('front-assets/css/shortcodes.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('front-assets/css/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" media="screen" href="{{asset('front-assets/css/responsive-leyouts.css')}}" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{asset('front-assets/css/Simple-Line-Icons-Webfont/simple-line-icons.css')}}" media="screen" />
    <link rel="stylesheet" href="{{asset('front-assets/css/et-line-font/et-line-font.css')}}">
    <link href="{{asset('front-assets/js/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('front-assets/js/jFlickrFeed/style.css')}}" />
</head>
<body>
<div class="site_wrapper">
    <div class="topbar white topbar-padding">
        <div class="container">
            <div class="topbar-left-items">
                <ul class="toplist toppadding pull-left paddtop1">
                    <li class="rightl"><i class="fa fa-phone"></i> 1234 - 5678 - 9012</li>
                    <li><i class="fa fa-envelope"></i> yourmail@domain.com</li>
                </ul>
            </div>
            <!--end left-->

            <div class="topbar-right-items pull-right">
                <ul class="toplist toppadding">
                    <li class="lineright"><a href="#">Login</a></li>
                    <li class="lineright"><a href="#">Register</a></li>
                    <li><a href="https://www.facebook.com/codelayers"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/codelayers"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li class="last"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>

    <div id="header">
        <div class="container">
            <div class="navbar yellow-green navbar-default yamm">
                <div class="navbar-header">
                    <button type="button" data-toggle="collapse" data-target="#navbar-collapse-grid" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                    <a href="index.html" class="navbar-brand"><img src="images/logo.png" alt=""/></a> </div>
                <div id="navbar-collapse-grid" class="navbar-collapse collapse pull-right">
                    <ul class="nav yellow-green navbar-nav">
                        <li> <a href="index.html" class="dropdown-toggle active">Home</a></li>
                        <li> <a href="about.html" class="dropdown-toggle">About Me</a></li>
                        <li class="dropdown"> <a href="fullwidth-post.html" class="dropdown-toggle">Posts</a>
                            <ul class="dropdown-menu five" role="menu">
                                <li> <a href="gallerypost.html">Gallery Post</a> </li>
                                <li> <a href="fullwidth-post.html">Full Width Post</a> </li>
                                <li> <a href="video-post.html">Video Post</a> </li>
                                <li> <a class="active" href="index.html">Post with Sidebar</a></li>
                            </ul>
                        </li>
                        <li> <a href="contact.html" class="dropdown-toggle">Contact Me</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--end menu-->
    <div class="clearfix"></div>

    <section>
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-md-6">
                    <div class="blog2-header-box">
                        <div class="image-holder">
                            <div class="text-box top-padding"> <a href="#">
                                    <h1 class="title uppercase dosis">pharetra quis vulputate </h1>
                                </a> <a href="#">
                                    <h1 class="title uppercase dosis">pharetra vulputate </h1>
                                </a>
                                <div class="post-info"><span><i class="fa fa-user"></i> By John Doe</span> <span><i class="fa fa-clock-o"></i> 20/07/2015</span> <span><i class="fa fa-comment"></i> 15</span> </div>
                            </div>
                            <img src="http://placehold.it/1000x650" alt="" class="img-responsive"/> </div>
                    </div>
                </div>
                <!--end item-->

                <div class="col-md-6">
                    <div class="blog2-header-box">
                        <div class="image-holder">
                            <div class="text-box top-padding"> <a href="#">
                                    <h1 class="title uppercase dosis">pharetra quis vulputate </h1>
                                </a> <a href="#">
                                    <h1 class="title uppercase dosis">pharetra vulputate </h1>
                                </a>
                                <div class="post-info"><span><i class="fa fa-user"></i> By John Doe</span> <span><i class="fa fa-clock-o"></i> 20/07/2015</span> <span><i class="fa fa-comment"></i> 15</span> </div>
                            </div>
                            <img src="http://placehold.it/1000x650" alt="" class="img-responsive"/> </div>
                    </div>
                </div>
                <!--end item-->

            </div>
        </div>
    </section>
    <!--end section-->
    <div class="clearfix"></div>

    <section class="section-light sec-tpadding-2">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="col-md-12 nopadding">
                        <div class="blog1-post-holder">
                            <div class="image-holder">
                                <div class="post-info"> <span><i class="fa fa-user"></i> Charlotte</span> <span><i class="fa fa-calendar"></i> 26 April , 2015</span> </div>
                                <img src="http://placehold.it/1200x600" alt="" class="img-responsive"/> </div>
                            <div class="text-box-inner">
                                <h4 class="dosis uppercase less-mar3"><a href="#">Aliquam Rhoncus amet Maecenas sed nisl</a></h4>
                                <div class="blog-post-info"> <span><i class="fa fa-user"></i> By Benjamin</span> <span><i class="fa fa-comments-o"></i> 15 Comments</span> </div>
                                <br/>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue. Cras tellus. </p>
                                <br/>
                                <br/>
                                <a href="#" class="btn btn-border yellow-green">Read more</a> </div>
                        </div>
                    </div>
                    <!--end post-->

                    <div class="col-md-12 nopadding">
                        <div class="blog1-post-holder">
                            <div class="image-holder">
                                <div class="post-info"> <span><i class="fa fa-user"></i> Charlotte</span> <span><i class="fa fa-calendar"></i> 26 April , 2015</span> </div>
                                <img src="http://placehold.it/1200x600" alt="" class="img-responsive"/> </div>
                            <div class="text-box-inner">
                                <h4 class="dosis uppercase less-mar3"><a href="#">Aliquam Rhoncus amet Maecenas sed nisl</a></h4>
                                <div class="blog-post-info"> <span><i class="fa fa-user"></i> By Benjamin</span> <span><i class="fa fa-comments-o"></i> 15 Comments</span> </div>
                                <br/>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue. Cras tellus. </p>
                                <br/>
                                <br/>
                                <a href="#" class="btn btn-border yellow-green">Read more</a> </div>
                        </div>
                    </div>
                    <!--end post-->

                    <div class="col-md-12 nopadding">
                        <div class="blog1-post-holder">
                            <div class="image-holder">
                                <div class="post-info"> <span><i class="fa fa-user"></i> Charlotte</span> <span><i class="fa fa-calendar"></i> 26 April , 2015</span> </div>
                                <img src="http://placehold.it/1200x600" alt="" class="img-responsive"/> </div>
                            <div class="text-box-inner">
                                <h4 class="dosis uppercase less-mar3"><a href="#">Aliquam Rhoncus amet Maecenas sed nisl</a></h4>
                                <div class="blog-post-info"> <span><i class="fa fa-user"></i> By Benjamin</span> <span><i class="fa fa-comments-o"></i> 15 Comments</span> </div>
                                <br/>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue. Cras tellus. </p>
                                <br/>
                                <br/>
                                <a href="#" class="btn btn-border yellow-green">Read more</a> </div>
                        </div>
                    </div>
                    <!--end post-->

                    <div class="col-md-12 nopadding">
                        <div class="blog1-post-holder">
                            <div class="image-holder">
                                <div class="post-info"> <span><i class="fa fa-user"></i> Charlotte</span> <span><i class="fa fa-calendar"></i> 26 April , 2015</span> </div>
                                <img src="http://placehold.it/1200x600" alt="" class="img-responsive"/> </div>
                            <div class="text-box-inner">
                                <h4 class="dosis uppercase less-mar3"><a href="#">Aliquam Rhoncus amet Maecenas sed nisl</a></h4>
                                <div class="blog-post-info"> <span><i class="fa fa-user"></i> By Benjamin</span> <span><i class="fa fa-comments-o"></i> 15 Comments</span> </div>
                                <br/>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue. Cras tellus. </p>
                                <br/>
                                <br/>
                                <a href="#" class="btn btn-border yellow-green">Read more</a> </div>
                        </div>
                    </div>
                    <!--end post-->

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
                <div class="col-md-4 bmargin clearfix">
                    <div class="item-holder">
                        <h4 class="uppercase less-mar3 dosis text-white">Recent Posts</h4>
                        <div class="footer-title-bottomstrip2"></div>
                        <div class="clearfix"></div>
                        <div class="blog1-sidebar-posts">
                            <div class="image-left"><img src="http://placehold.it/80x80" alt=""/></div>
                            <div class="text-box-right">
                                <h6 class="less-mar3 uppercase dosis nopadding text-white"><a href="#">Clean And Modern</a></h6>
                                <p>Lorem ipsum dolor sit</p>
                                <div class="blog1-post-info dark"> <span>By John Doe</span><span>May 19</span> </div>
                            </div>
                        </div>
                        <div class=" divider-line solid dark"></div>
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <div class="blog1-sidebar-posts">
                            <div class="image-left"><img src="http://placehold.it/80x80" alt=""/></div>
                            <div class="text-box-right">
                                <h6 class="less-mar3 uppercase dosis nopadding text-white"><a href="#">Clean And Modern</a></h6>
                                <p>Lorem ipsum dolor sit</p>
                                <div class="blog1-post-info dark"> <span>By John Doe</span><span>May 19</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end item-->

                <div class="col-md-4 bmargin clearfix">
                    <h4 class="uppercase less-mar3 dosis text-white">search widget</h4>
                    <div class="footer-title-bottomstrip2"></div>
                    <div class="clearfix"></div>
                    <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent mattis. </p>
                    <br/>
                    <input class="blog1-sidebar-serch_input dark" type="search" placeholder="Email Address">
                    <input name="" value="Submit" class="blog1-sidebar-serch-submit dark" type="submit">
                    <div class="clearfix"></div>
                    <br/>
                    <br/>
                    <ul class="social-icons-3 dark">
                        <li><a class="twitter" href="https://twitter.com/codelayers"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.facebook.com/codelayers"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="active" href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <!--end item-->

                <div class="col-md-4 bmargin clearfix">
                    <h4 class="uppercase less-mar3 dosis text-white">Featured News</h4>
                    <div class="footer-title-bottomstrip2"></div>
                    <div class="clearfix"></div>
                    <div id="owl-demo11" class="owl-carousel">
                        <div class="item"> <a href="#"><img src="http://placehold.it/400x220" alt="" class="img-responsive"/></a> <br/>
                            <h4 class="dosis uppercase less-mar1 text-white"><a href="#">Aliquam ornare</a></h4>
                            <div class="blog1-post-info dark"> <span>By John Doe</span><span>May 19</span> </div>
                        </div>
                        <!--end slide item-->

                        <div class="item"> <a href="#"><img src="http://placehold.it/400x220" alt="" class="img-responsive"/></a> <br/>
                            <h4 class="dosis uppercase less-mar1 text-white"><a href="#">Aliquam ornare</a></h4>
                            <div class="blog1-post-info dark"> <span>By John Doe</span><span>May 19</span> </div>
                        </div>
                        <!--end slide item-->

                    </div>
                </div>
                <!--end item-->

                <div class="clearfix"></div>
                <br/>
                <br/>
                <div class="divider-line solid dark"></div>
                <br/>
                <div class="col-md-2"> <br/>
                    <img src="images/flogo.png" alt=""/> </div>
                <div class="col-md-10">
                    <blockquote class="style1"><span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue. Cras tellus. In pulvinar lectus a est. Curabitur eget orci.</span></blockquote>
                </div>
            </div>
        </div>
    </section>
    <!--end section-->
    <div class="clearfix"></div>
    <section class="section-copyrights sec-moreless-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12"> <span>Copyright © 2019 <a href="https://1.envato.market/hasta-html-by-codelayers">hasta</a> By <a href="https://1.envato.market/codelayers">Codelayers</a> | All rights reserved.</span></div>
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
</body>
</html>
