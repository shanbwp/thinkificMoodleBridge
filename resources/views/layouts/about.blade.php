<!DOCTYPE html>

<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   @yield('seo')
   <title>{{$gs->meta_title}}</title> 
   <meta name="subject" content="{{$gs->meta_tag}}">
   <meta name="author" content="ACR__Helper">
   
    <meta property="og:title" content=ACR__Helper Media>
    <meta property="og:site_name" content=Influenicve Meida>
    <meta property="og:url" content=https://ACR__Helper.media/>
    <meta property="og:description" content=ACR__Helper Media is dedicated to putting songwriters and artists first, with publishing deals that remove any doubts of being unfair.>
    <meta property="og:type" content=website>
    <meta property="og:image" content=https://ACR__Helper.media/assets/images/setting/14401524781655803082ACR__Helperlogo.png>
    
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@Influenicve Media">
    <meta name="twitter:title" content="Influenicve Media">
    <meta name="twitter:description" content="ACR__Helper Media is dedicated to putting songwriters and artists first, with publishing deals that remove any doubts of being unfair.">
    <meta name="twitter:image" content="https://ACR__Helper.media/assets/images/setting/14401524781655803082ACR__Helperlogo.png">

    <meta name="google-site-verification" content="ZwpNV8-JVN_02tY_5NYHSW2-Y0w8dcatyr4oo062kzU" />
   <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">
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
   <link rel="stylesheet" href="{{asset('assets/css/default.css')}}">
   <link rel="stylesheet" href="{{asset('assets/css/theme-pink.css')}}">
   
     <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Corporation",
      "name": "ACR__Helper Media",
      "url": "https://ACR__Helper.media/",
      "logo": "https://ACR__Helper.media/assets/images/setting/14401524781655803082ACR__Helperlogo.png",
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "17752352126",
        "contactType": "technical support",
        "contactOption": "TollFree",
        "areaServed": "US",
        "availableLanguage": "en"
      },
      "sameAs": [
        "https://www.instagram.com/ACR__Helper.media/",
        "https://www.linkedin.com/company/ACR__Helper-media?trk=similar-pages"
      ]
    }
    </script>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-0EZGDNG530"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'G-0EZGDNG530');
        </script>
   <style>
      :root {
         --header-bg-color: #040402;
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
      }
   </style>
   
   <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MMSRN5P');
    </script>
<!-- End Google Tag Manager -->
</head>

<body class="theme-mode-dark">
    <!-- Global site tag (gtag.js) - Google Analytics -->

<!-- End Google Tag Manager (noscript) -->
   <!-- Header -->
   <header id="header">
      <!-- Navbar -->
      <nav data-aos="zoom-out" data-aos-delay="800" class="navbar navbar-expand">
         <div class="container header">
            <!-- Navbar Brand-->
            <a class="navbar-brand" href="{{route('home')}}"> influence </a>
            <div class="ml-auto"></div>
            <!-- Navbar Items -->
            <ul class="navbar-nav items">
               <li class="nav-item dropdown"> <a href="{{route('home')}}" class="nav-link">Home </i></a> </li>
               <li class="nav-item dropdown"> <a href="{{route('service')}}" class="nav-link">Services </i></a> </li>
               <li class="nav-item dropdown"> <a href="{{route('portfolio')}}" class="nav-link">Portfolio </i></a> </li>
               <li class="nav-item "> <a href="{{route('blog')}}" class="nav-link">Blog </i></a> </li>
               <li class="nav-item "> <a href="{{route('about')}}" class="nav-link">About </i></a> </li>
               <li class="nav-item "> <a href="{{route('contact')}}" class="nav-link">Contact </i></a> </li>

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
                  <a href="#" class="nav-link"><i class="icon-social-twitter"></i></a>
               </li>
               <li class="nav-item social">
                  <a href="#" class="nav-link"><i class="icon-social-instagram"></i></a>
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

            <!-- Navbar Action -->
            <ul class="navbar-nav action">
               <li class="nav-item ml-3">
                  <a href="#" target="_blank" class="btn ml-lg-auto dark-button"><i class="icon-rocket"></i>BUY NOW</a>

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
                           <a href="{{route('home')}}" class="logo">
                              Influence.
                              <img src="{{asset('assets/images/setting/'.$gs->logo)}}" alt="Influence">

                           </a>
                        </div>
                        <p>Authentic and innovative.<br>Built to the smallest detail<br>with a focus on usability<br>and performance.</p>
                        <ul class="navbar-nav social share-list mt-0 ml-auto">
                           <li class="nav-item">
                              <a href="#" class="nav-link"><i class="icon-social-instagram ml-0"></i></a>
                           </li>
                           <li class="nav-item">
                              <a href="#" class="nav-link"><i class="icon-social-facebook"></i></a>
                           </li>
                           <li class="nav-item">
                              <a href="#" class="nav-link"><i class="icon-social-linkedin"></i></a>
                           </li>
                           <li class="nav-item">
                              <a href="#" class="nav-link"><i class="icon-social-twitter"></i></a>
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
                                 +1 123 98765 4321
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="#" class="nav-link">
                                 <i class="icon-envelope mr-2"></i>
                                 <span class="__cf_email__" data-cfemail="19717c757576597b6c6a70777c6a6a377a7674">[email&#160;protected]</span>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="#" class="nav-link">
                                 <i class="icon-location-pin mr-2"></i>
                                 Office Street, 123
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
                              <a href="#" class="nav-link">Website Development</a>
                           </li>
                           <li class="nav-item">
                              <a href="#" class="nav-link">Building Applications</a>
                           </li>
                           <li class="nav-item">
                              <a href="#" class="nav-link">SEO & Digital Marketing</a>
                           </li>
                           <li class="nav-item">
                              <a href="#" class="nav-link">Branding and Identity</a>
                           </li>
                           <li class="nav-item">
                              <a href="#" class="nav-link">Digital Images & Videos</a>
                           </li>
                        </ul>
                     </div>
                     <div class="col-12 col-lg-4 p-3 text-center text-lg-left item">
                        <h4 class="title">Popular Tags</h4>
                        <a href="#" class="badge tag">Mobile</a>
                        <a href="#" class="badge tag">Development</a>
                        <a href="#" class="badge tag">Technology</a>
                        <a href="#" class="badge tag">App</a>
                        <a href="#" class="badge tag">Education</a>
                        <a href="#" class="badge tag">Business</a>
                        <a href="#" class="badge tag">Health</a>
                        <a href="#" class="badge tag">Industry</a>
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
  
    
     
    
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MMSRN5P"
    height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>

</body>

</html>