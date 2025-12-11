@extends('layouts.home')
@section('seo')
     <title> ABOUT US | ACR__Helper MEDIA </title>
    <meta name="description" content="ACR__Helper Media is primarily a creative agency that provides services in areas such as music publishing, web development, wedding video editing, and so on">
@endsection 
@section('content')
<!-- Hero -->
<section id="slider" class="hero p-0 odd featured">
   <div class="swiper-container no-slider slider-h-75">
      <div class="swiper-wrapper">

         <!-- Item 1 -->
         <div class="swiper-slide slide-center">

            <img src="{{asset('assets/images/about-us.jpg')}}" alt="about-us" class="full-image" data-mask="70">

            <div class="slide-content row text-center">
               <div class="col-12 mx-auto inner">
                  <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text">About Us</h1>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<!-- Content -->
<section id="content" class="section-1 single">
   <div class="container">
      <div class="row">

         <!-- Main -->
         <main class="col-12 col-lg-8 p-0">
            <div class="row">
               <div class="col-12 align-self-center">
                  <h2 class="featured mt-0 ml-0">ACR__Helper Media</h2>
                  <p>ACR__Helper Media is primarily a creative agency that solves problems, creatively!.</p>
                  <p>Quality is the best policy. We work with brands to engage audiences. The scale of the project can be as a little as a brochure or as big as an entire marketing campaign. One thing is guaranteed: Success.</p>
                 
                  <h4>Veterans and Outcomes</h4> 
                  <p>We have been in marketing with several retained clients who have experienced success. We are market veterans who know what they are doing.</p>
                  
                   <h4>Targeted Design</h4> 
                  <p>Our first step is to understand the client and the audience they want to target. This drives our creative process to ensure success.</p>
                  
                  <h4>Precise and Thorough</h4> 
                  <p>Paying attention to detail is what we believe enhances the design. However, during the creative process, the primary focus can be lost. That’s why we keep ourselves grounded and work within the parameters of the brand.</p>
                <h4>Diverse Portfolio</h4> 
                  <p>We have in-house experts who work on a diverse portfolio. Whatever your need is, the chances are, we can help you..</p>
               </div>
            </div>
         </main>

         <!-- Sidebar -->
         <aside class="col-12 col-lg-4 pl-lg-5 p-0 float-right sidebar">
            <div class="row">
               <div class="col-12 align-self-center text-left">

                  <!-- Widget [services] -->
                  <div class="item widget-services">
                     <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                           <a href="#">
                              <i class="icon icon-badge"></i>
                              <h5>Quality</h5>
                           </a>
                        </li>
                        <li class="list-group-item">
                           <a href="#">
                              <i class="icon icon-briefcase"></i>
                              <h5>Experience</h5>
                           </a>
                        </li>
                        <li class="list-group-item">
                           <a href="#">
                              <i class="icon icon-trophy"></i>
                              <h5>Tradition</h5>
                           </a>
                        </li>
                        <li class="list-group-item">
                           <a href="#">
                              <i class="icon icon-diamond"></i>
                              <h5>Innovation</h5>
                           </a>
                        </li>
                     </ul>
                  </div>

                  <!-- Widget [testimonials] -->
                  <div class="item widget-carousel">
                     <div class="swiper-container mid-slider-simple items" data-perview="1">
                        <div class="swiper-wrapper">
                            @foreach($testimonial as $key)
                           <div class="swiper-slide slide-center text-center item">
                              <div class="row card">
                                 <div class="col-12">
                                    <img src="{{asset('assets/images/testimonial/'.$key->image)}}" alt="ACR__Helper-feed-back" class="person">
                                    <h4>{{$key->name}}</h4>
                                    <p>{{$key->title}}</p>
                                    <ul class="navbar-nav social share-list ml-auto">
                                       <li class="nav-item">
                                          <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
                                       </li>
                                       <li class="nav-item">
                                          <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
                                       </li>
                                       <li class="nav-item">
                                          <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
                                       </li>
                                       <li class="nav-item">
                                          <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
                                       </li>
                                       <li class="nav-item">
                                          <a href="#" class="nav-link"><i class="icon-star ml-2 mr-2"></i></a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           @endforeach 
                        </div>
                        <div class="swiper-pagination"></div>
                     </div>
                  </div>


               </div>
            </div>
         </aside>
      </div>
   </div>
</section>


<!-- Fun Facts -->
<section id="funfacts" class="section-2 odd counter funfacts">
   <div class="container">
      <div class="row text-center intro">
         <div class="col-12">
            <h2>Fun Facts</h2>
            <p class="text-max-800">Over the years we have done many things that we are proud of. This motivates us to continue looking for new challenges in order to improve our services.</p>
         </div>
      </div>
      <div data-aos-id="counter" data-aos="fade-up" data-aos-delay="200" class="row justify-content-center text-center items">
         <div class="col-12 col-md-6 col-lg-3 item">
            <div data-percent="342" class="radial">
               <span></span>
            </div>
            <h4>Great Projects</h4>
         </div>
         <div class="col-12 col-md-6 col-lg-3 item">
            <div data-percent="128" class="radial">
               <span></span>
            </div>
            <h4>Innovations</h4>
         </div>
         <div class="col-12 col-md-6 col-lg-3 item">
            <div data-percent="745" class="radial">
               <span></span>
            </div>
            <h4>Cups of Coffee</h4>
         </div>
         <div class="col-12 col-md-6 col-lg-3 item">
            <div data-percent="691" class="radial">
               <span></span>
            </div>
            <h4>Happy Customers</h4>
         </div>
      </div>
   </div>
</section>

<!-- About [video] -->
<section id="video" class="section-3 highlights image-left">
   <div class="container">
      <div class="row">
         <div class="gallery col-12 col-md-6">
            <a data-poster="{{asset('assets/images/about-6.jpg')}}" href="https://www.youtube.com/watch?v=7e90gBu4pas">
               <i class="play-video icon-control-play"></i>
               <div class="mask-radius"></div>
               <img src="{{asset('assets/images/about-6.jpg')}}" class="fit-image" alt="ACR__Helper-about-us">
            </a>
         </div>
         <div class="col-12 col-md-6 pl-md-5 align-self-center text-center text-md-left">
            <div class="row intro">
               <div class="col-12 p-0">
                  <h2 class="featured alt">Institutional</h2>
                  <p>Get to know a little of our history and the road we traveled that took us to the level we are today.</p>
               </div>
            </div>
            <div class="row items">
               <div class="col-12 p-0">
                  <div class="row item">
                     <div class="col-12 col-md-2 align-self-center">
                        <i class="icon icon-trophy"></i>
                     </div>
                     <div class="col-12 col-md-9 align-self-center">
                        <h4>Tradition</h4>
                        <p>We are excellence in developing web solutions for companies.</p>
                     </div>
                  </div>
                  <div class="row item">
                     <div class="col-12 col-md-2 align-self-center">
                        <i class="icon icon-diamond"></i>
                     </div>
                     <div class="col-12 col-md-9 align-self-center">
                        <h4>Innovation</h4>
                        <p>We seek to build something that changes people's lives.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection