@extends('layouts.home')
@section('seo')
    <title> Portfolio | Music Distribution </title>
    <meta name="description" content="The services we provide to our clients are on time and within budget. Our portfolio consists of some of our clients’ work.">
@endsection
@section('content')

<!-- Hero -->
<section id="slider" class="hero p-0 odd featured">
    <div class="swiper-container no-slider slider-h-75">
        <div class="swiper-wrapper">

            <!-- Item 1 -->
            <div class="swiper-slide slide-center">

                <img src="{{asset('assets/images/portfolio.jpg')}}" class="full-image" data-mask="70">

                <div class="slide-content row text-center">
                    <div class="col-12 mx-auto inner">
                        <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text">Our Portfolio</h1>
                        <nav data-aos="zoom-out-up" data-aos-delay="800" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/#demos">Home</a></li>
                                <li class="breadcrumb-item"><a href="/#pages">Pages</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Our Portfolio</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Grid -->
<section id="portfolio-grid" class="section-1 showcase portfolio blog-grid filter-section">
    <div class="overflow-holder">
        <div class="container">
            <div class="row text-center intro">
                <div class="col-12">
                    <h2 class="mb-0">What We Do</h2>
                </div>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-12">
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn active">
                            <input type="radio" value="all" checked class="btn-filter-item">
                            <span>All</span>
                        </label>
                        @foreach($category_blog as $key)
                        <label class="btn">
                            <input type="radio" value="{{$key->name}}" class="btn-filter-item">
                            <span>{{$key->name}}</span>
                        </label>
                        @endforeach  
                    </div>
                </div>
            </div>
            <div class="row items filter-items">
            @foreach($category_blog as $key)
                @foreach($key->portfolios as $port)
                @if($port->vedio!=null)
                <div class="col-12 col-md-6 col-lg-4 item filter-item" data-groups='["{{$key->name}}"]'>
                    <div class="row card p-0 text-center">
                   
                    <iframe width="360" height="360"
                        src="https://www.youtube.com/embed/{{$port->getvideourl($port->vedio)}}">
                    </iframe>
                     
                    </div>
                </div>
                @else 
                <div class="col-12 col-md-6 col-lg-4 item filter-item" data-groups='["{{$key->name}}"]'>
                    <div class="row card p-0 text-center">
                   
                      <div class="gallery">
                            <a href="{{asset('assets/images/portfolio/' .$port->image)}}" class="image-over">
                                <img src="{{asset('assets/images/portfolio/' .$port->image)}}" alt="Lorem ipsum">
                            </a>
                        </div>
                        <div class="card-caption col-12 p-0">
                            <div class="card-body">
                                <h4 class="m-0">{{$port->name}}</h4>
                            </div>
                            <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                <p>{{$port->title}}</p>
                            </div>
                        </div>   
                    </div>
                </div>
                
                @endif 
                @endforeach
             @endforeach 
                <div class="col-1 filter-sizer"></div>
            </div>
        </div>
    </div>
</section>

<!-- Skills -->
<section id="skills" class="section-2 odd counter skills">
    <div class="container">
        <div class="row text-center intro">
            <div class="col-12">
                <h2>Main Skills</h2>
                <p class="text-max-800">We see all types of projects as if they were ours. This brings us closer to our clients' projects bringing much more confidence and commitment.</p>
            </div>
        </div>
        <div data-aos-id="counter" data-aos="fade-up" data-aos-delay="200" class="row justify-content-center text-center items">
            <div class="col-12 col-md-6 col-lg-3 item">
                <div data-percent="42" class="radial">
                    <span></span>
                </div>
                <h4>Marketing</h4>
            </div>
            <div class="col-12 col-md-6 col-lg-3 item">
                <div data-percent="60" class="radial">
                    <span></span>
                </div>
                <h4>Branding</h4>
            </div>
            <div class="col-12 col-md-6 col-lg-3 item">
                <div data-percent="84" class="radial">
                    <span></span>
                </div>
                <h4>Web Design</h4>
            </div>
            <div class="col-12 col-md-6 col-lg-3 item">
                <div data-percent="100" class="radial">
                    <span></span>
                </div>
                <h4>WordPress</h4>
            </div>
        </div>
    </div>
</section>

<!-- Contact -->
<section id="contact" class="section-3 form">
    <div class="container">

        <div class="row">
            <div class="col-12 col-md-6 align-self-start text-center text-md-left">

                <!-- Success Message -->
                <div class="row success message">
                    <div class="col-12 p-0">
                        <div class="wait">
                            <div class="spinner-grow" role="status">
                                <span class="sr-only">Loading</span>
                            </div>
                            <h3 class="sending">SENDING</h3>
                        </div>
                        <div class="done">
                            <i class="icon bigger icon-check"></i>
                            <h3>Your message was sent successful. Thanks.</h3>
                            <a href="" class="btn mx-auto primary-button">
                                <i class="icon-refresh"></i>
                                REFRESH
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Steps Message -->
                <div class="row intro form-content">
                    <div class="col-12 p-0">

                        <!-- Step Title -->
                        <div class="step-title">
                            <h2 class="featured alt">Like What You See? Give Us A Call Then!</h2>
                            <p>What are you waiting for? We provide solutions for every other thing. Or you can just call us to get entertained! </p>
                        </div>


                    </div>
                </div>

                <!-- Steps Group -->
                <div class="row text-center form-content">
                    <div class="col-12 p-0">
                        <form action="{{route('front-contact-store')}}" id="leverage-form" class="multi-step-form" method="post">
                            @csrf
                            <!-- Group 1 -->
                            <fieldset class="step-group">
                                <div class="row">
                                    <div class="col-12 input-group p-0">
                                        <input type="email" name="email" data-minlength="3" class="form-control field-email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 input-group p-0">
                                        <input type="text" name="name" data-minlength="3" class="form-control field-name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 input-group p-0">
                                        <input type="text" name="phone" data-minlength="3" class="form-control field-phone" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-12 input-group p-0">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>

            <div class="content-images col-12 col-md-6 pl-md-5 d-none d-md-block">
               <img src="{{asset('assets/images/about-8.jpg')}}" class="fit-image" alt="Contact Us">
                   
            </div>
        </div>
        </form>
    </div>
</section>

@endsection