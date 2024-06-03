
@php
$aboutSummary = getAboutSummary()->first();
@endphp
    <!-- About Section  -->
    <div class="about-section section-padding pt-0">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-xl-7 col-lg-7 col-md-6">
                    <div class="section-title">
                        <h2>About Us <span class="d-none d-md-block"><i class="las la-arrow-down ml-40"></i></span></h2>                            
                    </div>
@if(!empty($aboutSummary->summary))
                    <div class="about-desc mt-60 pl-150">
                        <p>{!! $aboutSummary->summary !!}</p>
                    </div>
@else
                    <div class="about-desc mt-60 pl-150">
                        <p>Archipix is a team of experienced architects and interior designers who are passionate about creating beautiful, functional spaces. We believe that good design should be accessible to everyone, and we work hard to make sure that our clients visions become a reality.</p>
                    </div>
@endif
                </div>
                <div class="offset-xl-1 col-xl-4 offset-lg-1 col-lg-4 col-md-6 text-end">
@if(!empty($aboutSummary->image))
                    <div class="about-img">
                        <img src="{{ $aboutSummary->image }}" alt="About us image">
                    </div>
@else
                    <div class="about-img">
                        <img src="{{ asset('frontend/assets/img/about/about-3.jpg') }}" alt="">
                    </div>
@endif
                </div>
            </div>            
        </div>
    </div>
    <!-- About Section  -->
   <!--  <div class="about-section section-padding pt-0">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-xl-7 col-lg-7 col-md-6">
                    <div class="section-title">
                        <h2>About Us<span class="d-none d-md-block"><i class="las la-arrow-down ml-40"></i></span></h2>                            
                    </div>
                </div>
                <div class="offset-xl-1 col-xl-4 offset-lg-1 col-lg-4 col-md-6 text-end">
                </div>
            </div>            
        </div>
    </div> -->