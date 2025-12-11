@extends('layouts.home')
@section('seo')
     <title> BLOG POSTS | ACR__Helper MEDIA  </title>
    <meta name="description" content="ACR__Helper media publish blog posts daily for their users to get around easily with their core services and clients get what actually they are looking for">
@endsection
@section('content')

<!-- Hero -->
<section id="slider" class="hero p-0 odd featured">
    <div class="swiper-container no-slider slider-h-75">
        <div class="swiper-wrapper">

            <!-- Item 1 -->
            <div class="swiper-slide slide-center">

                <img src="{{asset('assets/images/blog.jpg')}}" class="full-image" data-mask="70">

                <div class="slide-content row text-center">
                    <div class="col-12 mx-auto inner">
                        <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text">Blog Posts</h1>
 
                <p class="text-max-800 nscolor">Discover trends, insights and progress in the music industry covering a wide range of topics on music publishing, digital marketing, NFT, designing and much more- updated regularly. A vast array of diverse content on latest news, tips and advancements based on expert studies.
!</p> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Blog -->
<section id="blog" class="section-1 showcase blog-grid masonry news">
    <div data-aos="zoom-in" data-aos-delay="200" data-aos-anchor="body" class="container">
        <div class="row content blog-grid masonry">
            <main class="col-12 p-0">
                <div class="bricklayer items columns-3">
                    @foreach($userBlog as $item)
                    <div class="card p-0 text-center item">
                        <div class="image-over">
                            <img src="{{asset('assets/images/blog/' .$item->image)}}" alt="{{$item->img_alt}}">
                        </div>
                        <div class="card-caption col-12 p-0">
                            <div class="card-body">
                                <a href="{{route('blog-detail',['id'=>$item->slug])}}">
                                    <h4>{{$item->name}}</h4>
                                </a>
                            </div>
                            <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                <a href="#" class="d-lg-flex align-items-center"><i class="icon-user"></i>{{$item->country}}</a>
                                <a href="#" class="d-lg-flex align-items-center"><i class="icon-clock"></i>{{$item->date}}</a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </main>
        </div>

    </div>
</section>
<style>
    .nscolor {
        color: white;
    }
</style>
<!-- Subscribe -->
<section id="subscribe" class="section-2 subscribe">
    <div class="container smaller">
        <div class="row text-center intro">
            <div class="col-12">
                <h2 class="nscolor">Newsletter</h2>
                <p class="text-max-800 nscolor">Stay up-to-date with the latest happenings by subscribing to our newsletter. We promise not to send you anything that will take your interest away!</p>
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
                        <input type="email" name="email" class="form-control field-email" placeholder="Email">
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
@endsection