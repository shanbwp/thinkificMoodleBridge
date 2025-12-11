@extends('layouts.home')
@section('seo')
<title> Career- music distribution, music publishing | ACR__Helper Media </title>
<meta name="description" content="ACR__Helper Media helps you in making career in music industry by distributing your music in wide range of platforms and ensure your 100% royalties.">
@endsection
@section('content')

<!-- Hero -->
<section id="slider" class="hero p-0 odd featured">
    <div class="swiper-container no-slider slider-h-75">
        <div class="swiper-wrapper">

            <!-- Item 1 -->
            <div class="swiper-slide slide-center">

                <img src="{{asset('assets/images/career.jpg')}}" class="full-image" data-mask="70">

                <div class="slide-content row text-center">
                    <div class="col-12 mx-auto inner">
                        <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text">Your Career</h1>

                    </div>
                </div>
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
                        <div class="done">
                            <i class="icon bigger icon-check"></i>
                            <h3>Your message was sent successful. Thanks.</h3>
                        </div>
                    </div>
                </div>

                <!-- Steps Message -->
                <div class="row intro form-content">
                    <div class="col-12 p-0">

                        <!-- Step Title -->
                        <div class="step-title">
                            <h2 class="featured alt">Your Career</h2>
                            <p>Don't wait until tomorrow. Talk to one of our consultants today and start your Career.</p>
                        </div>
                    </div>
                </div>

                <!-- Steps Group -->
                <div class="row text-center form-content">
                    <div class="col-12 p-0">
                        <form action="{{route('front-career-store')}}" id="influence-form" method="post" enctype="multipart/form-data">
                            @csrf
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
                                        <input type="text" required name="phone" data-minlength="3" class="form-control field-phone" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 input-group p-0">
                                        <label class="form-control" for="image"> profile Image</label>
                                    </div>
                                    <div class="col-6 input-group p-0">
                                        <input type="file" name="image" id="image" data-minlength="3" class="form-control field-phone">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 input-group p-0">
                                        <input type="text" name="designation" data-minlength="3" class="form-control field-phone" placeholder="designation">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 input-group p-0">
                                        <input type="text" name="subject" data-minlength="3" class="form-control field-phone" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 input-group p-0">
                                        <input type="text" name="experience" required data-minlength="3" class="form-control field-phone" placeholder="experience">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 input-group p-0">
                                        <label class="form-control" for="cv">Your CV/Resume</label>
                                    </div>
                                    <div class="col-6 input-group p-0">
                                        <input type="file" name="cv" id="cv" data-minlength="3" class="form-control field-phone" placeholder="Upload Your CV">
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

    </div>
</section>

@endsection