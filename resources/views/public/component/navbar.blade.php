 
@php
$route = Route::current()->getName();
@endphp 

<div class="header-area">   
        <div id="header-sticky">
            @if (Route::has('login'))
                    @auth
            <div class="animated-gradient" style="height: 0.2em; width: 100%;"></div>
                    @endauth   
            @endif
            <div class="navigation">
                <div class="container">
                    <div class="header-inner-box">
    <!-- <link rel="icon" href="{{ asset('frontend/assets/img/favicon.png') }}" type="image/png"> -->


                        <a href="{{ url('/') }}" class="logo"><img src="{{ asset('frontend/assets/img/logo.png') }}" style="height: 2.5em;" alt="Dexterdem & Associates" /></a>         

                        <div class="main-menu d-none d-lg-block">
                            <ul>
                                <li class="{{ ($route == 'home')? 'active' : '' }}"><a class="navlink" href="{{ url('/') }}">Home</a></li>                                
                                <li class="{{ ($route == 'aboutus.page')? 'active' : '' }}"><a class="navlink" href="{{ route('aboutus.page') }}">About</a></li>                                
                                <li class="{{ ($route == 'services.page')? 'active' : '' }}"><a class="navlink" href="{{ route('services.page') }}">Services</a></li>

                                <li class="{{ ($route == 'projects.page' || $route == 'project_detailed.page')? 'active' : '' }}"><a class="navlink" href="{{ route('projects.page') }}">Projects</a></li>
                                
                                <li class="{{ ($route == 'contact.page')? 'active' : '' }}"><a class="navlink" href="{{ route('contact.page') }}">Contact</a></li>
                            </ul>                            
                        </div>

                        <div class="header-right">
                            <div class="search-trigger">                                        
                                <i class="fal fa-search"></i>
                            </div>
        
                            <div class="header-btn">
                                <div class="menu-trigger">
                                    <span class="lines"></span>
                                    <span class="lines"></span>
                                    <span class="lines"></span>
                                </div>
                            </div>
                        </div>

                        <div class="mobile-nav-bar d-block col-sm-1 col-6 d-lg-none">
                            <div class="mobile-nav-wrap">                    
                                <div id="hamburger">
                                    <i class="las la-bars"></i>                                    
                                </div>
                                <!-- mobile menu - responsive menu  -->
                                <div class="mobile-nav">
                                    <button type="button" class="close-nav">
                                        <i class="las la-times-circle"></i>
                                    </button>
                            <nav class="sidebar-nav">
                                <ul class="metismenu" id="mobile-menu">
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li><a href="{{ route('aboutus.page') }}">About</a></li>
                                    <li><a href="{{ route('services.page') }}">Services</a></li>
                                    <li><a href="{{ route('projects.page') }}">Projects</a></li>
                                    <li><a href="{{ route('contact.page') }}">Contact</a></li>                 
                                </ul>
                            </nav>  
                                    <div class="action-bar">
                                        <a href="mailto:info@Archipix.com"><i class="las la-envelope"></i>info@dexterdemandassociates.com</a>
                                        <a href="tel:123-456-7890"><i class="fal fa-phone"></i>123-456-7890</a>
                                        <a href="contact.html" class="white-btn">Contact Us</a>
                                    </div>      
                                </div>                            
                            </div>
                            <div class="overlay"></div>
                        </div>                        
                    </div>
                </div>
            </div>  
        </div>           
    </div>