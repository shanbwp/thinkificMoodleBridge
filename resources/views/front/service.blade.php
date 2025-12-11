@extends('layouts.home')
@section('seo')
    <title> ACR__Helper Media: Our Services </title>
    <meta name="description" content="We are a multidisciplinary creative studio and provide plenty of services like Music Publishing, Web development, and wedding videography.">
@endsection
@section('content')

<!-- Hero -->
<section id="slider" class="hero p-0 odd featured">
    <div class="swiper-container no-slider slider-h-75">
        <div class="swiper-wrapper">
            <!-- Item 1 -->
            <div class="swiper-slide slide-center">
                <img src="{{asset('assets/images/our-services.jpg')}}" class="full-image" data-mask="30">
                <div class="slide-content row text-center">
                    <div class="col-12 mx-auto inner">
                        <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text">Services</h1>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services -->
<section id="services" class="section-1 offers">
    <div class="container">
        <div class="row intro">
            <div class="col-12 col-md-9 align-self-center text-center text-md-left">
                <h2 class="featured">Our Solutions</h2>
                <p>We are a multidisciplinary creative studio and provide a wide array of services. Our ultimate goal is to create a narrative that speaks with the audience emotionally. </p>
            </div>
            <div class="col-12 col-md-3 align-self-end">
                <a href="#contact" class="smooth-anchor btn mx-auto mr-md-0 ml-md-auto primary-button"><i class="icon-speech"></i>GET IN TOUCH</a>
            </div>
        </div>
        <div class="row justify-content-center text-center items">
            <div class="col-12 col-md-6 item">
                <div class="card featured">
                    <i class="icon icon-globe"></i>
                    <h4>Music Publishing</h4>
                    <p>For ACR__Helper Media, artists are the sole focus. We offer music publishing services, at legit rates. Are you on multiple platforms? If yes, you’re in luck. We give you the power by collecting royalties from streams, downloads, views, playbacks, etc. from various platforms so you can collect it all here in one place.</p>
                    <a href="#"><i class="btn-icon icon-arrow-right-circle"></i></a>
                </div>
            </div>
            <div class="col-12 col-md-6 item">
                <div class="card">
                    <i class="icon icon-basket"></i>
                    <h4>Digital Marketing</h4>
                    <p>Our digital marketing services are data-driven and that’s what our strategies are based on. We adopt a systematic approach to maximize profits for brands. Grow your business by choosing ACR__Helper Media by targeting potential clients.</p>
                    <a href="#"><i class="btn-icon icon-arrow-right-circle"></i></a>
                </div>
            </div>
            <div class="col-12 col-md-6 item">
                <div class="card">
                    <i class="icon icon-screen-smartphone"></i>
                    <h4>NFTs</h4>
                    <p>We’ll help you create NFT art to help build a marketplace for you. Our NFT services include art and token creation. Our in-house experts are veterans who can help you create what you’re looking for. Build your profile and dominate the market. </p>
                    <a href="#"><i class="btn-icon icon-arrow-right-circle"></i></a>
                </div>
            </div>
            <div class="col-12 col-md-6 item">
                <div class="card">
                    <i class="icon icon-layers"></i>
                    <h4>Brand Identity</h4>
                    <p>It takes time to tap the right audience to help grow your business. However, building a brand that speaks to your audience on an intimate level won’t take as long. We help companies build brand identity and missions. Whatever your concept is, come to us so we can nurture it.</p>
                    <a href="#"><i class="btn-icon icon-arrow-right-circle"></i></a>
                </div>
            </div>
            <div class="col-12 col-md-6 item">
                <div class="card">
                    <i class="icon icon-chart"></i>
                    <h4>UI/UX</h4>
                    <p>Our design team sits in a small studio inside our multidisciplinary office. However, we will help you create a product that is catchy and accessible at the same time. We meet deadlines and deliver the result you expect and more. .</p>
                    <a href="#"><i class="btn-icon icon-arrow-right-circle"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact -->
<section id="contact" class="section-3 form">
    <div class="container">
        <form action="{{route('front-contact-store')}}" id="contact" class="multi-step-form" method="post">
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
                                        <input type="email" required name="email" data-minlength="3" class="form-control field-email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 input-group p-0">
                                        <input type="text" required name="name" data-minlength="3" class="form-control field-name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 input-group p-0">
                                        <input type="text" name="phone" data-minlength="3" class="form-control field-phone" placeholder="Phone">
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