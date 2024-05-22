<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <title>Dexterdem & Associates</title>

    <!--Favicon-->
    <link rel="icon" href="{{ asset('frontend/assets/img/favicon.png') }}" type="image/png">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Line Awesome CSS -->
    <link href="{{ asset('frontend/assets/css/line-awesome.min.css') }}" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="{{ asset('frontend/assets/css/fontAwesomePro.css') }}" rel="stylesheet">    
    <!-- Animate CSS-->
    <link href="{{ asset('frontend/assets/css/animate.css') }}" rel="stylesheet">        
    <!-- Owl Carousel CSS -->
    <link href="{{ asset('frontend/assets/css/owl.carousel.css') }}" rel="stylesheet">
    <!-- Slick Slider CSS -->
    <link href="{{ asset('frontend/assets/css/slick.css') }}" rel="stylesheet">    
    <!-- Back to Top -->
    <link href="{{ asset('frontend/assets/css/backToTop.css') }}" rel="stylesheet">
    <!-- Metis Menu -->
    <link href="{{ asset('frontend/assets/css/metismenu.css') }}" rel="stylesheet">
    <!-- Style CSS -->
    <link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet">


    <!-- jquery -->
    <script src="{{ asset('frontend/assets/js/jquery-1.12.4.min.js') }}"></script>
</head>

<body>

    <!-- preloader -->
    <div class="preloader">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>

    <!-- Mouse Cursor  -->
    <div class="mouseCursor cursor-outer"></div>
    <div class="mouseCursor cursor-inner"><span>Drag</span></div>

    <div id="smooth-wrapper">

        @include('public.component.navbar')

         <div id="smooth-content">
            <!-- Content -->
                  @yield('content')

            @include('public.component.footer')
         </div>
    </div>


    <!-- Search Dropdown Area -->

    <div class="search-popup">
        <span class="search-back-drop"></span>

        <div class="search-inner">
            <div class="container">                
                <button class="close-search"><span class="la la-times"></span></button>                
                <form method="post" action="index.html">
                    <div class="form-group">
                        <input type="search" name="search-field" value="" placeholder="Type your keyword" required="">
                        <button type="submit"><i class="fal fa-search"></i></button>                        
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Off-canvas Area-->

    <div class="extra-info">
        <div class="close-icon menu-close">
            <button>
                <i class="las la-times"></i>
            </button>
        </div>
        <div class="logo-side mb-30">
            <div class="logo">
                <a href="index-3.html" class="logo"><img src="{{ asset('frontend/assets/img/wordmark.png') }}" style="height: 2.5em;" alt="Dexterdem & Associates" /></a>
            </div>
        </div>
        <div class="side-info">
            <div class="contact-list mb-40">
                <!-- <h4>About</h4> -->
                <p>Welcome to Dexterdem &amp Associates, a full service architecture and interior design firm. We specialize in creating beautiful, functional spaces that reflect your unique style.</p>
                <img src="{{ asset('frontend/assets/img/offcanvas-img.jpg') }}" alt="">

                <div class="mt-30 mb-30">
                    <a href="contact.html" class="white-btn">Get In Touch</a>
                </div>
            </div>
            <div class="social-area-wrap">
                <a href="#"><i class="lab la-facebook-f"></i></a>                                    
                <a href="#"><i class="lab la-instagram"></i></a>
                <a href="#"><i class="lab la-linkedin-in"></i></a>
                <a href="#"><i class="lab la-skype"></i></a>                
            </div>
        </div>
    </div>

    <div class="offcanvas-overlay"></div>


    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- Popper JS -->
    <script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <!-- Wow JS -->
    <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
    <!-- Way Points JS -->
    <script src="{{ asset('frontend/assets/js/jquery.waypoints.min.js') }}"></script>
    <!-- Counter Up JS -->
    <script src="{{ asset('frontend/assets/js/jquery.counterup.min.js') }}"></script>
    <!-- Owl Carousel JS -->
    <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
    <!-- Slick Slider JS -->
    <script src="{{ asset('frontend/assets/js/slick.min.js') }}"></script>        
    <!-- Back To Top JS -->
    <script src="{{ asset('frontend/assets/js/backToTop.js') }}"></script>
    <!-- Metis Menu JS -->
    <script src="{{ asset('frontend/assets/js/metismenu.js') }}"></script>
    <!-- GSAP Animation JS -->
    <script src="{{ asset('frontend/assets/js/gsap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/gsap-scroll-to-plugin.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/SplitText.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/ScrollSmoother.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/smoother-script.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/heading-animation.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/paragraph-animation.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

</body>

</html>