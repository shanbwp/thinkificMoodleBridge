@extends('layouts.home')
@section('seo')
    <title> Contact Us | ACR__Helper Media </title>
    <meta name="description" content="Queries? Please feel free to contact us. Here’s how you may get in touch with us.">
@endsection
@section('content')

<!-- Hero -->
<section id="slider" class="hero p-0 odd featured">
    <div class="swiper-container no-slider slider-h-75">
        <div class="swiper-wrapper">

            <!-- Item 1 -->
            <div class="swiper-slide slide-center">

                <img src="{{asset('assets/images/contact-us.jpg')}}" class="full-image" data-mask="70">

                <div class="slide-content row text-center">
                    <div class="col-12 mx-auto inner">
                        <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text">Contact Us</h1>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contacts -->
<section id="contacts" class="section-1 offers">
    <div class="container">
        <div class="row intro">
            <div class="col-12 col-md-12   align-self-center text-center text-md-left">
                <h2 class="featured">Our Team</h2>
                <p>Our workforce is shaped by a strong respect for each individual. Our team encourages ambitious talent who firmly believe in the company’s fundamental standards: work ethics, commitment, passion, creativity & teamwork - to make the work environment a learning cultural experience. We believe in our team of professionals and the competency of our workforce whose efforts have made us stand out in a very short time.
                </p>
            </div>
            <div class="col-12 col-md-12 mt-5 align-self-center text-center text-md-left">
                <h2 class="featured">Grow with us!</h2>
                <p>ACR__Helper Media is always open to hiring young blood and experienced professionals who are ready to take up challenges leading to growth in terms of career planning and diversity. We believe in providing equal opportunities to both genders with good standards of quality, a friendly workplace and safety compliance.
                 </p>
            </div> 
        </div>
        <div class="row justify-content-center text-center items">
            <div class="col-12 col-md-6 col-lg-3 item">
                <div class="card featured">
                    <i class="icon icon-phone"></i>
                    <h4>+1 (775) 235-2126</h4>
                    <h4>+971-525003169</h4>
                    <p class="mb-1">We answer by phone from Monday to Saturday from 10 am until 6 pm.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 item">
                <div class="card">
                    <i class="icon icon-envelope"></i>
                    <h4><a href="mailto:info@ACR__Helper.media" class="__cf_email__" data-cfemail="info@ACR__Helper.media">info@ACR__Helper.media</a></h4>
                    <p class="mb-1">We will respond to your email within 8 hours on business days.</p>
                </div>
            </div> 
            <div class="col-12 col-md-6 col-lg-3 item">
                <div class="card featured">
                    <i class="icon icon-location-pin"></i>
                    <h5>United States</h5>
                    <p class="mb-1">315 Nanners Way Corona  CA 92882  United States .</p>
                </div>
            </div> 
            <div class="col-12 col-md-6 col-lg-3 item">
                <div class="card featured">
                    <i class="icon icon-location-pin"></i>
                    <h5>DUBAI, UAE</h5>
                    <p class="mb-1">ASPIN COMMERCIAL TOWER 20th FLOOR OFFICE #17B SHEIKH ZAYED ROAD DUBAI, UAE</p>
                </div>
            </div>
        </div>
    </div>
</section> 
<!-- Custom -->
<section id="custom" class="section-2 map">
    <iframe src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=315%20Nanners%20Way%20Corona%20%20CA%2092882%20%20United%20States+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="600" height="450" aria-hidden="false" tabindex="0"></iframe>
</section>

<!-- Contact -->
<section id="contact" class="section-3 form">
    <div class="container">
        
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
                            <form action="{{route('front-contact-store')}}" id="influence-form" method="post">
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
                                            <input type="text" name="phone" data-minlength="3" class="form-control field-phone" placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 input-group p-0">
                                            <input type="text" required name="subject" data-minlength="3" class="form-control field-phone" placeholder="Subject">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 input-group p-0">
                                            <textarea name="message" class="form-control " rows="2" placeholder="Messaage"></textarea>
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
                    <img src="assets/images/about-8.jpg" class="fit-image" alt="Contact Us"> 
                </div>
            </div>

    </div>
</section>

@endsection