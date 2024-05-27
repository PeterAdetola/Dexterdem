<!-- Hero Area  -->
@php
$hero = App\Models\HeroSection::first();
@endphp

    <div id="home-3" class="hero-area">
        <div class="container">
            <div class="row hero-area-inner">
                <div class="offset-xl-1 col-xl-10 offset-lg-1 col-lg-10 wow fadeInUp animated" data-wow-delay="200ms">
                    <div class="hero-area-content">
                        <div class="section-title">  
                        @if(empty($hero->heading))                          
                            <h1>Transform your <br> <span>Vision  into Reality</span></h1>
                        @else                          
                            <h1>{!! $hero->heading !!}</h1>
                        @endif
                        </div>
                    </div>
                </div>    
                <div class="row mt-60">
                    <div class="col-xl-7 col-lg-7 col-md-7">
                        <div class="hero-area-banner">
                        @if(empty($hero->imageOne)) 
                            <img src="{{ asset('frontend/assets/img/hero-area-banner.jpg') }}" alt="add image1">
                        @else
                            <img src="{{ $hero->imageOne }}" alt="{{ $hero->captionOne }}">
                        @endif
                        @if(empty($hero->captionOne)) 
                            <p>[Architecture]</p>
                        @else
                            <p>[{{ $hero->captionOne }}]</p>
                        @endif
                        </div>
                    </div>
                    <div class="offset-xl-1 col-xl-4 offset-lg-1 col-lg-4 col-md-5">
                        <div class="hero-area-content">
                        @if(empty($hero->summary)) 
                            <p>At Archipix, we are passionate about bringing our clients vision to life. We work closely with you. Aliquam maximus mi nec justo efficitur, quis sollicitudin sapien tempus. Vivamus dictum varius elit, ultricies sollicitudin metus fermentum vel. Maecenas eget scelerisque orci. </p>
                        @else
                            <p>{!! $hero->summary !!}</p>
                        @endif
                        </div>
                        <div class="directon-sign">
                            <i class="las la-arrow-down"></i>
                        </div>
                        <div class="hero-area-banner mt-60">
                        @if(empty($hero->captionOne)) 
                            <img src="{{ asset('frontend/assets/img/hero-banner-2.jpg') }}" alt="add image1">
                        @else
                            <img src="{{ $hero->imageTwo }}" alt="{{ $hero->captionTwo }}">
                        @endif
                            <p>[{{ $hero->captionTwo }}]</p>
                        </div>
                    </div>
                    <div class="section-title mb-0">
                        <span><i class="las la-arrow-down mt-30"></i></span>
                        <h3>Dexterdem &amp Associates</h3>
                        @if(empty($hero->captionOne)) 
                        <p>Design your Dream House</p>
                        @else
                        <p>{{ $hero->tagline }}</p>
                        @endif
                    </div>
                </div>            
            </div>            
        </div>
    </div>