<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    @yield('seo')
    <meta property="og:type" content=website> 
    <meta name="subject" content="{{$gs->meta_tag}}">
    <meta name="author" content="Influence">
    <meta name="google-site-verification" content="ZwpNV8-JVN_02tY_5NYHSW2-Y0w8dcatyr4oo062kzU" />
    <link rel="shortcut icon" href="{{asset('assets/images/setting/'.$gs->fav_icon)}}">
    <link rel="apple-touch-icon" href="{{asset('assets/images/apple-touch-icon.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('assets/images/apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('assets/images/apple-touch-icon-114x114.png')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/slider.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/animation.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/gallery.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/cookie-notice.min.css')}}">
    <!--<link rel="canonical" href="https://www.ACR__Helper.media/" />-->
    <link rel="canonical" href="{{ url(Request::url()) }}" /> 
    <link rel="stylesheet" href="{{asset('assets/css/default.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/theme-pink.css')}}">
   

    <style>
        :root {
            @if(request()->is('/')) --header-bg-color: #040402;
            --nav-item-color: #f5f5f5;
            --top-nav-item-color: #f5f5f5;
            --hero-bg-color: #040402;
            --section-1-bg-color: #040402;
            --section-2-bg-color: #040402;
            --section-3-bg-color: #040402;
            --section-4-bg-color: #040402;
            --section-5-bg-color: #040402;
            --section-6-bg-color: #040402;
            --section-7-bg-color: #040402;
            --footer-bg-color: #040402;

            @else --header-bg-color: #111111;
            --nav-item-color: #f5f5f5;
            --top-nav-item-color: #f5f5f5;
            --hero-bg-color: #000000;
            --section-1-bg-color: #eeeeee;
            --section-2-bg-color: #111111;
            --section-3-bg-color: #f5f5f5;
            --footer-bg-color: #191919;
            @endif
        };
       
    </style>

</head>

<body>
        <!-- Global site tag (gtag.js) - Google Analytics -->

<style>
     .activz{
            color: red !important;
             text-decoration: underline !important;
        }
</style>
    <body class="theme-mode-dark">
        <!-- Header -->
        <header id="header">
            <!-- Navbar -->
            <nav data-aos="zoom-out" data-aos-delay="800" class="navbar navbar-expand">
                <div class="container header">
                    <!-- Navbar Brand-->
                    <a class="navbar-brand" href="{{route('home')}}">    <img src="{{asset('assets/images/setting/'.$gs->white_logo)}}" alt="Influence"> </a>
                    <div class="ml-auto"></div>
                    <!-- Navbar Items -->
                    <ul class="navbar-nav items">
                        <li class="nav-item  "> <a href="{{route('home')}}" class="nav-link {{request()->is('/')?'activz':''}}">Home </i></a> </li>
                        <li class="nav-item  "> <a href="{{route('service')}}" class="nav-link {{request()->is('music-distribution-services')?'activz':''}}">Services </i></a> </li> 
                        <li class="nav-item  "> <a href="{{route('blog')}}" class="nav-link {{request()->is('blog')?'activz':''}}">Blog </i></a> </li>
                        <li class="nav-item "> <a href="{{route('about')}}" class="nav-link {{request()->is('about')?'activz':''}}">About </i></a> </li>
                        <li class="nav-item "> <a href="{{route('contact')}}" class="nav-link {{request()->is('contact')?'activz':''}}">Contact </i></a> </li>

                        </li>
                    </ul>

                    <!-- Navbar Icons -->
                    <ul class="navbar-nav icons">
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="modal" data-target="#search">
                                <i class="icon-magnifier"></i>
                            </a>
                        </li>
                        <li class="nav-item social">
                            <a href="{{$gs->fb_url}}" target="_blank" class="nav-link"><i class="icon-social-facebook"></i></a>
                        </li>
                        <li class="nav-item social">
                            <a href="{{$gs->insta_url}}" target="_blank" class="nav-link"><i class="icon-social-instagram"></i></a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="modal" data-target="#sign">
                                <i class="icon-user" style="font-size: 20px;"></i>
                            </a>
                        </li>
                    </ul>

                    <!-- Navbar Toggle -->
                    <ul class="navbar-nav toggle">
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="modal" data-target="#menu">
                                <i class="icon-menu m-0"></i>
                            </a>
                        </li>
                    </ul> 
                </div>
            </nav>

        </header>
        @yield('content')

        <!-- Footer -->
        <footer class="odd">

            <!-- Footer [links] -->
            <section id="footer" class="footer">
                <div class="container">
                    <div class="row items footer-widget">
                        <div class="col-12 col-lg-3 p-0">
                            <div class="row">
                                <div class="branding col-12 p-3 text-center text-lg-left item">
                                    <div class="brand">
                                        <a href="/" class="logo">
                                            <img src="{{asset('assets/images/setting/'.$gs->logo)}}" alt="Influence">

                                        </a>
                                    </div>
                                    <p>{{$gs->footer_text}}</p>
                                    <ul class="navbar-nav social share-list mt-0 ml-auto">
                                        <li class="nav-item">
                                            <a href="{{$gs->insta_url}}" target="_blank" class="nav-link"><i class="icon-social-instagram ml-0"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{$gs->fb_url}}" target="_blank" class="nav-link"><i class="icon-social-facebook"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{$gs->linkedin_url}}" target="_blank" class="nav-link"><i class="icon-social-linkedin"></i></a>
                                        </li> 
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-9 p-0">
                            <div class="row">
                                <div class="col-12 col-lg-4 p-3 text-center text-lg-left item">
                                    <h4 class="title">Get in Touch</h4>
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="icon-phone mr-2"></i>
                                                +1 (775) 235-2126
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="icon-envelope mr-2"></i>
                                                <span class="__cf_email__" data-cfemail="info@ACR__Helper.media">info@ACR__Helper.media</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="icon-location-pin mr-2"></i>
                                               315 Nanners Way Corona  CA 92882  United States
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#contact" class="mt-4 mr-auto ml-auto ml-lg-0 btn dark-button smooth-anchor"><i class="icon-speech"></i>SEND A MESSAGE</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-12 col-lg-4 p-3 text-center text-lg-left item">
                                    <h4 class="title">Our Services</h4>
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">Music Publishing</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">Digital Marketing</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">NFTs</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">Brand Identity</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">UI/UX</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-12 col-lg-4 p-3 text-center text-lg-left item">
                                    <h4 class="title">Popular Tags</h4>
                                    <a href="#" class="badge tag">Music</a>
                                    <a href="#" class="badge tag">Distribution</a>
                                    <a href="#" class="badge tag">Monetize</a>
                                    <a href="#" class="badge tag">Publishing</a>
                                    <a href="#" class="badge tag">Development</a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


        </footer>

        <!-- #region Global ============================ -->

        <!-- Modal [search] -->
        <div id="search" class="p-0 modal fade" role="dialog" aria-labelledby="search" aria-hidden="true">
            <div class="modal-dialog modal-dialog-slideout" role="document">
                <div class="modal-content full">
                    <div class="modal-header" data-dismiss="modal">
                        Search <i class="icon-close"></i>
                    </div>
                    <div class="modal-body">
                        <form class="row">
                            <div class="col-12 p-0 align-self-center">
                                <div class="row">
                                    <div class="col-12 p-0 pb-3">
                                        <h2>What are you looking for?</h2>
                                        <p>Search for services and news about the best that happens in the world.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 p-0 input-group">
                                        <input type="text" class="form-control" placeholder="Enter Keywords">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 p-0 input-group align-self-center">
                                        <button class="btn primary-button"><i class="icon-magnifier"></i>SEARCH</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal [sign] -->
        <div id="sign" class="p-0 modal fade" role="dialog" aria-labelledby="sign" aria-hidden="true">
            <div class="modal-dialog modal-dialog-slideout" role="document">
                <div class="modal-content full">
                    <div class="modal-header" data-dismiss="modal">
                        Sign In Form <i class="icon-close"></i>
                    </div>
                    <div class="modal-body">
                        <form action="#" class="row" method="post" enctype="multipart/form-data">
                         @csrf   
                        <div class="col-12 p-0 align-self-center">
                                <div class="row">
                                    <div class="col-12 p-0 pb-3">
                                        <h2>Sign In</h2>
                                        <p>Don't have an account? <a href="#" class="primary-color" data-toggle="modal" data-target="#register">Register now</a>.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 p-0 input-group">
                                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                                    </div>
                                    <div class="col-12 p-0 input-group">
                                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 p-0 input-group align-self-center">
                                        <button class="btn primary-button"><i class="icon-login"></i>LOGIN</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal [register] -->
        <div id="register" class="p-0 modal fade" role="dialog" aria-labelledby="register" aria-hidden="true">
            <div class="modal-dialog modal-dialog-slideout" role="document">
                <div class="modal-content full">
                    <div class="modal-header" data-dismiss="modal">
                        Register Form <i class="icon-close"></i>
                    </div>
                    <div class="modal-body">
                        <form action="{{route('user-register')}}" method="post" class="row">
                        @csrf   
                        <div class="col-12 p-0 align-self-center">
                                <div class="row">
                                    <div class="col-12 p-0 pb-3">
                                        <h2>Register</h2>
                                        <p>Have an account? <a href="#" class="primary-color" data-toggle="modal" data-target="#sign">Sign In</a>.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 p-0 input-group">
                                        <input type="text" class="form-control" name="name" placeholder="Name" required>
                                    </div>
                                    <div class="col-12 p-0 input-group">
                                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                                    </div>
                                    <div class="col-12 p-0 input-group">
                                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                                    </div>
                                    <div class="col-12 p-0 input-group">
                                        <input type="password" class="form-control" name="re-password" placeholder="Confirm Password" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 p-0 input-group align-self-center">
                                        <button class="btn primary-button"><i class="icon-rocket"></i>REGISTER</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal [responsive menu] -->
        <div id="menu" class="p-0 modal fade" role="dialog" aria-labelledby="menu" aria-hidden="true">
            <div class="modal-dialog modal-dialog-slideout" role="document">
                <div class="modal-content full">
                    <div class="modal-header" data-dismiss="modal">
                        Menu <i class="icon-close"></i>
                    </div>
                    <div class="menu modal-body">
                        <div class="row w-100">
                            <div class="items p-0 col-12 text-center">
                                <!-- Append [navbar] -->
                            </div>
                            <div class="contacts p-0 col-12 text-center">
                                <!-- Append [navbar] -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll [to top] -->
        <div id="scroll-to-top" class="scroll-to-top">
            <a href="#header" class="smooth-anchor">
                <i class="icon-arrow-up"></i>
            </a>
        </div>

        <script src="{{asset('assets/js/vendor/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/vendor/jquery.easing.min.js')}}"></script>
        <script src="{{asset('assets/js/vendor/jquery.inview.min.js')}}"></script>
        <script src="{{asset('assets/js/vendor/popper.min.js')}}"></script>
        <script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/vendor/ponyfill.min.js')}}"></script>
        <script src="{{asset('assets/js/vendor/slider.min.js')}}"></script>
        <script src="{{asset('assets/js/vendor/animation.min.js')}}"></script>
        <script src="{{asset('assets/js/vendor/progress-radial.min.js')}}"></script>
        <script src="{{asset('assets/js/vendor/bricklayer.min.js')}}"></script>
        <script src="{{asset('assets/js/vendor/gallery.min.js')}}"></script>
        <script src="{{asset('assets/js/vendor/shuffle.min.js')}}"></script>
        <script src="{{asset('assets/js/vendor/cookie-notice.min.js')}}"></script>
        <script src="{{asset('assets/js/vendor/particles.min.js')}}"></script>
        <script src="{{asset('assets/js/main.js')}}"></script>  
    </body>

</html>