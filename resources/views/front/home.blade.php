@extends('layouts.home')
@section('seo')
<title> adrev Media: Music Publishing | Sell CDs online Media</title>
<meta name="description" content="Best Music Publishing Company Sells music online on Spotify, iTunes, Amazon, Google Play, Tidal, and 150+ platforms. We ensure your 100% royalties">
@endsection
@section('content')
<!-- Hero -->
<section id="slider" class="hero p-0 odd featured all">
    <div class="swiper-container no-slider animation slider-h-100">
        <div class="swiper-wrapper">

            <!-- Item 1 -->
            <div class="swiper-slide slide-center">
                <img data-aos="zoom-out-up" data-aos-delay="800" src="{{asset('assets/images/top_bg_video.gif')}}" class="hero-image" alt="Hero Image">
                <!--<video controls autoplay width="320" height="240">-->
                <!-- <source src="{{asset('assets/images/top_bg_video.mp4')}}" type="video/mp4">-->
                <!--</video>-->
                
                <div class="slide-content row" data-mask-768="50">
                    <div class="col-12 d-flex inner">
                        <div class="left align-self-center text-center text-md-left">
                            <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text">HAVE YOU GOT WHAT IT TAKES?.</h1>
                            <p data-aos="zoom-out-up" data-aos-delay="800" class="description">ACR__Helper Media is dedicated to putting songwriters and artists first, with publishing deals that remove any doubts of being unfair.</p>
                            <a href="#contact" data-aos="zoom-out-up" data-aos-delay="1200" class="smooth-anchor ml-auto mr-auto ml-md-0 mt-4 btn dark-button"><i class="icon-cup"></i>GET STARTED</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>

<!-- Features -->
<section id="features" class="section-1 odd offers featured all">
    <div class="container">
        <div class="row justify-content-center text-center items">
            <div class="col-12 col-md-6 col-lg-6 item">
                <div class="card no-hover">
                    <i class="icon icon-globe"></i>
                    <h4>Music Publishing</h4>
                    <p>For ACR__Helper Media, artists are the sole focus. We offer music publishing services, at legit rates. Are you on multiple platforms? If yes, you’re in luck. We give you the power by collecting royalties from streams, downloads, views, playbacks, etc. from various platforms so you can collect it all here in one place.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6 item">
                <div class="card no-hover">
                    <i class="icon icon-basket"></i>
                    <h4>NFTs</h4>
                    <p>We’ll help you create NFT art to help build a marketplace for you. Our NFT services include art and token creation. Our in-house experts are veterans who can help you create what you’re looking for. Build your profile and dominate the market. </p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 item">
                <div class="card no-hover">
                    <i class="icon icon-screen-smartphone"></i>
                    <h4>UI/UX</h4>
                    <p>Our design team sits in a small studio inside our multidisciplinary office. However, we will help you create a product that is catchy and accessible at the same time. We meet deadlines and deliver the result you expect and more.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 item">
                <div class="card no-hover">
                    <i class="icon icon-chart"></i>
                    <h4>Digital Marketing</h4>
                    <p>Our digital marketing services are data-driven and that’s what our strategies are based on. We adopt a systematic approach to maximize profits for brands. Grow your business by choosing ACR__Helper Media by targeting potential clients.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 item">
                <div class="card no-hover">
                    <i class="icon icon-bulb"></i>
                    <h4>Brand Identity</h4>
                    <p>It takes time to tap the right audience to help grow your business. However, building a brand that speaks to your audience on an intimate level won’t take as long. We help companies build brand identity and missions. Whatever your concept is, come to us so we can nurture it.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Get -->
<section id="get" class="section-3 hero odd p-0 featured all">
    <div class="swiper-container no-slider animation slider-h-75">
        <div class="swiper-wrapper">

            <!-- Item 1 -->
            <div class="swiper-slide slide-center">

                <video class="full-image" data-mask="50" playsinline autoplay muted loop>
                    <source src="{{asset('assets/videos/ACR__Helper-media-bg-video.mp4')}}" type="video/mp4" />
                </video>

                <div class="slide-content row">
                    <div class="col-12 d-flex inner">
                        <div class="center align-self-center text-center">
                            <h2 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text">ARE YOU READY?</h2>
                            <p data-aos="zoom-out-up" data-aos-delay="800" class="description ml-auto mr-auto">We are driven by creativity. We create innovative things to help you achieve better results and consolidate yourself in the market.</p>
                            <a href="#contact" data-aos="zoom-out-up" data-aos-delay="1200" class="smooth-anchor ml-auto mr-auto mt-5 btn primary-button"><i class="icon-rocket"></i>CONTACT US</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>

<!-- Testimonials -->
<section id="testimonials" class="section-4 odd carousel featured all">
    <div class="overflow-holder">
        <div class="container">
            <div class="row text-center intro">
                <div class="col-12">
                    <h2>Customer Testimonials</h2>
                    <p class="text-max-800">Our customers are satisfied with the work we do. The greatest gratification is to receive recognition for what we have built. This motivates us to improve even more.</p>
                </div>
            </div>
            <div class="swiper-container mid-slider items">
                <div class="swiper-wrapper">
                    

                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</section>

<!-- News -->
<section id="news" class="section-5 odd carousel showcase news featured all">
    <div class="overflow-holder">
        <div class="container">
            <div class="row intro">
                <div class="col-12 col-md-9 align-self-center text-center text-md-left">
                    <h2 class="featured">Blogs</h2>
                    <p>Every week we publish exclusive content on various topics.</p>
                </div>
                <div class="col-12 col-md-3 align-self-end">
                    <a href="{{route('blog')}}" class="btn mx-auto mr-md-0 ml-md-auto primary-button"><i class="icon-grid"></i>VIEW ALL</a>
                </div>
            </div>
            <div class="swiper-container mid-slider items">
                <div class="swiper-wrapper">
                    @foreach($userBlog as $item)
                    <div class="swiper-slide slide-center item">
                        <div class="row card p-0 text-center">
                            <div class="image-over">
                                <img src="{{asset('assets/images/blog/' .$item->image)}}" alt="Lorem ipsum">
                            </div>
                            <div class="card-caption col-12 p-0">
                                <div class="card-body">
                                    <a href="{{route('blog-detail',['id'=>$item->slug])}}">
                                        <h4 class="m-0">{{$item->name}}</h4>
                                    </a>
                                </div>
                                <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                    <a href="{{route('blog-detail',['id'=>$item->slug])}}" class="d-lg-flex align-items-center"><i class="icon-user"></i> {{$item->country}}</a>
                                    <a href="{{route('blog-detail',['id'=>$item->slug])}}" class="d-lg-flex align-items-center"><i class="icon-clock"></i>{{$item->date}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</section>

<!-- Subscribe -->
<section id="subscribe" class="section-6 odd subscribe featured all">
    <div class="container smaller">
        <div class="row text-center intro">
            <div class="col-12">
                <h2>Newsletter</h2>
                <p class="text-max-800">Stay up-to-date with the latest happenings by subscribing to our newsletter. We promise not to send you anything that will take your interest away!
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 p-0">
                <form action="{{route('front-subscriber-store')}}" id="influence-subscribe" method="post" class="row m-auto items">
                    @csrf
                    <div class="col-12 col-lg-5 m-lg-0 input-group align-self-center item">
                        <input type="text" name="name" class="form-control field-name" placeholder="Name">
                    </div>
                    <div class="col-12 col-lg-5 m-lg-0 input-group align-self-center item">
                        <input type="email" name="email" class="form-control field-email" placeholder="Email" required>
                    </div>
                    <div class="col-12 col-lg-2 m-lg-0 input-group align-self-center item">
                        <button type="submit"> <a class="btn primary-button w-100">SUBSCRIBE</a></button>
                    </div>
                    <div class="col-12 text-center">
                        <span class="form-alert mt-5 mb-0"></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Contact -->
<section id="contact" class="section-7 odd form featured all">
    <div class="container">
        <form action="{{route('front-contact-store')}}" method="post" id="Influence-form" class="multi-step-form">
            @csrf
            <div class="row">
                <div class="col-12 col-md-6 align-self-start text-center text-md-left">
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
                            <!-- Group 1 -->
                            <fieldset class="step-group">
                                <div class="row">
                                    <div class="col-12 input-group p-0">
                                        <input type="text" required name="name" data-minlength="3" class="form-control field-name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 input-group p-0">
                                        <input type="email" required name="email" data-minlength="3" class="form-control field-email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 input-group p-0">
                                        <input type="text" name="phone" data-minlength="3" class="form-control " placeholder="Phone">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 input-group p-0">
                                        <input type="text" name="subject" data-minlength="3" class="form-control field-phone" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 input-group p-0">
                                        <textarea name="message" class="form-control " rows="2" placeholder="Messaage"></textarea>
                                    </div>
                                </div>
                                <div class="col-12 input-group p-0">
                                    <button type="submit"> <a class="btn primary-button">Submit<i class="icon-arrow-right-circle"></i></a></button>
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
    </div>
</section>
@endsection