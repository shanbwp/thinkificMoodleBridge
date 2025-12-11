@extends('layouts.home')
@section('seo')
    <title>  {{$blog->meta_title}} </title>
    <meta name="description" content="{{$blog->meta_description}}">
@endsection
@section('content')
<!-- Hero -->
<section id="slider" class="hero p-0 odd featured">
   <div class="swiper-container no-slider slider-h-75">
      <div class="swiper-wrapper">
         <!-- Item 1 -->
         <div class="swiper-slide slide-center">
            <img src="{{asset('assets/images/blog/'.$blog->image)}}" class="full-image" data-mask="70">
            <div class="slide-content row text-center">
               <div class="col-12 mx-auto inner">
                  <h3 style="font-size: 52px;" data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text">{{$blog->name}}</h3>

               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<!-- Content -->
<section id="content" class="section-1 single featured">
   <div class="container">
      <div class="row">

         <!-- Main -->
         <main class="col-12 col-lg-12 p-0">
            <div class="row">
               <div class="col-12 align-self-center">
                  <h2 class="featured mt-0 ml-0">{{$blog->name}}</h2>

                  <!-- Image -->
                  <div class="gallery">
                     <a href="{{asset('assets/images/blog/'.$blog->image)}}">
                        <img src="{{asset('assets/images/blog/'.$blog->image)}}" alt="{{$blog->img_alt}}" class="w-100">
                     </a>
                  </div>
                  {!!$blog->description!!}
               </div>
            </div>
         </main>

      </div>
   </div>
</section>

<!-- News -->
<section id="news" class="section-2 carousel showcase news">
   <div class="overflow-holder">
      <div class="container">
         <div class="row text-center intro">
            <div class="col-12">
               <h2>Recent Posts</h2>
               <p class="text-max-800">Every week we publish exclusive content on various topics.</p>
            </div>
         </div>
         <div class="swiper-container mid-slider items">
            <div class="swiper-wrapper">
               @foreach($blogs as $item)
               <div class="swiper-slide slide-center item">
                  <div class="row card p-0 text-center">
                     <div class="image-over">
                        <img src="{{asset('assets/images/blog/' .$item->image)}}" alt="{{$item->img_alt}}">
                     </div>
                     <br>
                     <div class="card-caption col-12 p-0">
                        <div class="card-body">
                           <a href="{{route('blog-detail',['id'=>$item->slug])}}">
                              <h4 class="m-0">{{$item->name}}</h4>
                           </a>
                        </div>
                        <br>
                        <div class="card-footer d-lg-flex align-items-center justify-content-center">
                           <a href="#" class="d-lg-flex align-items-center"><i class="icon-user"></i>{{$item->country}}</a>
                           <a href="#" class="d-lg-flex align-items-center"><i class="icon-clock"></i>{{$item->date}}</a>
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



@endsection