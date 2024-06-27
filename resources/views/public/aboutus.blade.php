@extends('public.mainframe')
@section('content')


@php
$aboutSummary = getAboutSummary()->first();
@endphp
    <!-- About Section  -->
    <div class="about-section section-padding pt-3">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-xl-7 col-lg-7 col-md-6">
                    <div class="section-title">
                        <h2>About Dexterdem & Associates <span class="d-none d-md-block"><i class="las la-arrow-down ml-40"></i></span></h2>                            
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

    <!-- Service Section  -->
@php
$services = getServices()->sortBy('order');
$i = $j = 1;
@endphp
@if (count($services) > 0)
    <div id="service-3" class="service-section section-padding pt-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12 text-end">
                    <div class="section-title">
                        <h2>What We Do</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="cp-custom-accordion">
                        <div class="accordions" id="accordionExample"> 
  @foreach($services as $service)   
  @php $no = $j++   @endphp     
                            <div class="accordion-items">
                                <h2 class="accordion-header" id="heading{{$no}}">
                                  <button class="accordion-buttons" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$no}}" aria-expanded="true" aria-controls="collapse{{$no}}">
                                      <span>0{{$i++}}</span>
                                      {{ $service->name }} 
                                  </button>
                                </h2>
                                <div id="collapse{{$no}}" class="accordion-collapse collapse {{$no == 1 ? 'show' : ''}}" aria-labelledby="heading{{$no}}" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                      <img src="{{ $service->image }}" alt="">
                                      <p>{{ $service->summary }}</p>
                                  </div>
                                </div>
                              </div>
    @endforeach
                          </div>
                    </div>                                        
                </div>
            </div>
        </div>
    </div>
@else
    <div id="service-3" class="service-section section-padding pt-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12 text-end">
                    <div class="section-title">
                        <h2>What We Do</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="cp-custom-accordion">
                        <div class="accordions" id="accordionExample">    
                            <div class="accordion-items">
                                <h2 class="accordion-header" id="headingOne">
                                  <button class="accordion-buttons" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                      <span>01</span>
                                      Architectural Design
                                  </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                      <img src="assets/img/service/1.jpg" alt="">
                                      <p>Morbi et faucibus ex. Proin ut enim fermentum, pretium orci sed, suscipit nisl. Etiam ut nulla a dolor consectetur consequat at id ex. Maecenas porttitor, ligula eu dictum vehicula, massa tellus gravida lectus, eget tincidunt mauris eros sit amet turpis. Pellentesque habitant morbi tristique senectus.</p>
                                  </div>
                                </div>
                              </div>

                            <div class="accordion-items">
                              <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <span>02</span>
                                    Interior Design                                  
                                </button>
                              </h2>
                              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <img src="assets/img/service/2.jpg" alt="">
                                    <p>Mauris faucibus nisl eu mi egestas blandit. Quisque consectetur urna ac viverra iaculis. Ut turpis velit, consectetur ut tempus a, cursus id nulla. Proin imperdiet magna sit amet mollis luctus. Quisque id leo quis diam dapibus ultricies fringilla vitae neque. Aenean non sollicitudin quam, quis.</p>
                                </div>
                              </div>
                            </div>
                            
                            <div class="accordion-items">
                              <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <span>03</span>
                                    Project Management
                                </button>
                              </h2>
                              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <img src="assets/img/service/3.jpg" alt="">
                                    <p>Morbi et faucibus ex. Proin ut enim fermentum, pretium orci sed, suscipit nisl. Etiam ut nulla a dolor consectetur consequat at id ex. Maecenas porttitor, ligula eu dictum vehicula, massa tellus gravida lectus, eget tincidunt mauris eros sit amet turpis. Pellentesque habitant morbi tristique senectus.</p>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-items">
                              <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <span>04</span>
                                    Historic Preservation
                                </button>
                              </h2>
                              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <img src="assets/img/service/4.jpg" alt="">
                                    <p>Morbi et faucibus ex. Proin ut enim fermentum, pretium orci sed, suscipit nisl. Etiam ut nulla a dolor consectetur consequat at id ex. Maecenas porttitor, ligula eu dictum vehicula, massa tellus gravida lectus, eget tincidunt mauris eros sit amet turpis. Pellentesque habitant morbi tristique senectus.</p>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-items">
                              <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    <span>05</span>
                                    Landscape Design
                                </button>
                              </h2>
                              <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <img src="assets/img/service/5.jpg" alt="">
                                    <p>Morbi et faucibus ex. Proin ut enim fermentum, pretium orci sed, suscipit nisl. Etiam ut nulla a dolor consectetur consequat at id ex. Maecenas porttitor, ligula eu dictum vehicula, massa tellus gravida lectus, eget tincidunt mauris eros sit amet turpis. Pellentesque habitant morbi tristique senectus.</p>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-items">
                              <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    <span>06</span>
                                    Furniture Remodel
                                </button>
                              </h2>
                              <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <img src="assets/img/service/6.jpg" alt="">
                                    <p>Morbi et faucibus ex. Proin ut enim fermentum, pretium orci sed, suscipit nisl. Etiam ut nulla a dolor consectetur consequat at id ex. Maecenas porttitor, ligula eu dictum vehicula, massa tellus gravida lectus, eget tincidunt mauris eros sit amet turpis. Pellentesque habitant morbi tristique senectus.</p>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>                                        
                </div>
            </div>
        </div>
    </div>
@endif

    <!-- Why Choose Us Section  -->
    @php
$features = getFeatures()->sortBy('order');
@endphp
@if (count($features) > 0)
    <!-- Why Choose Us Section  -->
    <div class="why-choose-us-section section-padding pt-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3">
                    <div class="section-title">
                        <h2>Why Choose Us?</h2>
                    </div>
                </div>
                <div class="offset-xl-1 col-xl-8 offset-lg-1 col-lg-8">
           @php $i = 1; @endphp
        @foreach($features as $feature)
                    <div class="single-choose-item">
                        <div class="single-choose-inner">
                            <h5><span>0{{ $i++ }}</span>{{ $feature->name }}</h5>                    
                        </div>  
                        <div class="choose-img">
                            <img src="{{ url($feature->image) }}" alt="">
                        </div>                      
                    </div>
        @endforeach
                </div>
            </div>
        </div>
    </div>
@else
    <!-- Why Choose Us Section  -->
    <div class="why-choose-us-section section-padding pt-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3">
                    <div class="section-title">
                        <h2>Why Choose Us?</h2>
                    </div>
                </div>
                <div class="offset-xl-1 col-xl-8 offset-lg-1 col-lg-8">
                    <div class="single-choose-item">
                        <div class="single-choose-inner">
                            <h5><span>01</span>Innovative Design</h5>                                                            
                        </div>  
                        <div class="choose-img">
                            <img src="{{ asset('frontend/assets/img/choose/1.jpg') }}" alt="">
                        </div>                      
                    </div>
                    <div class="single-choose-item">
                        <div class="single-choose-inner">
                            <h5><span>02</span>Exceptional Service</h5>                                                            
                        </div>    
                        <div class="choose-img">
                            <img src="{{ asset('frontend/assets/img/choose/2.jpg') }}" alt="">
                        </div>                                          
                    </div>
                    <div class="single-choose-item">
                        <div class="single-choose-inner">
                            <h5><span>03</span>Quality Craftsmanship</h5>                                                            
                        </div> 
                        <div class="choose-img">
                            <img src="{{ asset('frontend/assets/img/choose/3.jpg') }}" alt="">
                        </div>                                             
                    </div>
                    <div class="single-choose-item">
                        <div class="single-choose-inner">
                            <h5><span>04</span>Experienced Team</h5>                                                            
                        </div>  
                        <div class="choose-img">
                            <img src="{{ asset('frontend/assets/img/choose/4.jpg') }}" alt="">
                        </div>                                            
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif   

    <!-- Counter Section -->

@php
$stats = getStats()->sortBy('order');
@endphp
@if (count($stats) > 0)
    <div class="counter-section section-padding pt-0 pb-50">
        <div class="container">
            <div class="row gx-5"> 
        @foreach($stats as $stat)               
                <div class="col-lg-3 col-md-6 col-sm-6">
            @php
                $valueString = $stat->value;
                $numberPart = preg_replace('/[^0-9]/', '', $valueString);
                $symbolPart = preg_replace('/[0-9]/', '', $valueString);
            @endphp
                    <div class="single-counter-box">
                        <p class="counter-number">[<span>{{ $numberPart }}</span>{{ $symbolPart }}]</p>
                        <h6>{{ $stat->key }}</h6>
                    </div>
                </div>
        @endforeach                             
            </div>            
        </div>
    </div>
@else 
    <!-- Counter Section -->
    <div class="counter-section section-padding pt-0 pb-50">
        <div class="container">
            <div class="row gx-5">                
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-counter-box">
                        <p class="counter-number">[<span>30</span>+]</p>
                        <h6>Year of Experience</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-counter-box">
                        <p class="counter-number">[<span>56</span>]</p>
                        <h6>Awards</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-counter-box">
                        <p class="counter-number">[<span>1235</span>]</p>
                        <h6>Project Completed</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-counter-box">
                        <p class="counter-number">[<span>90</span>%]</p>
                        <h6>Clients Satisfaction</h6>
                    </div>
                </div>                             
            </div>            
        </div>
    </div>
@endif


    <!-- Team Section  -->
@php
    $members = getMembers()->sortBy('order');
    $teamIntro = getTeamIntro()->first();
@endphp
@if(count($members) > 0)

          
<div id="team-page" class="team-section section-padding pt-50 pb-100">
  <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="section-title">
                        <h2>Meet <br>Our Team</h2>
                        <span><i class="las la-arrow-down mt-30"></i></span>
                    </div>
                </div>
                @if(!empty($teamIntro->heading) || !empty($teamIntro->heading))
                <div class="col-xl-5 col-lg-5 order-1 order-xl-2">
                    <div class="row">
                    <div class="team-content-wrapper">
                        <h3 class="mb-0">{!! $teamIntro->heading !!}</h3>
                        <p class="mb-2">{!! $teamIntro->intro !!}</p>
                    </div>
                </div>
                </div>
                @else
                <div class="col-xl-5 col-lg-5 order-1 order-xl-2">
                    <div class="row">
                    <div class="team-content-wrapper">
                        <h3 class="mb-0">Our company is a team of experienced engineers, architects and professionals</h3>
                        <p class="mb-2">Who are passionate about creating beautiful, functional spaces. We believe that good design should be accessible to everyone, and we work hard to make sure that our clients visions become a reality.</p>
                    </div>
                </div>
                </div>
                @endif
            </div>

            <div class="row">
          @foreach ($members as $member)

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-team-item">
                        <div class="team-img">
                            <img src="{{ url($member->image) }}" alt="">
                        </div>
                        <div class="team-info">
                            <h5>{{ $member->name }}<a href="{{ $member->linked_in }}" style="
                            float: right;"><div class="award-icon">
                                <i class="las la-arrow-right"></i>
                            </div></a></h5>
                            
                            <hr>
                            <p>[{{ $member->role }}]</p>
                        </div>

                    </div>
                </div>
        @endforeach
            </div>

        </div>
    </div>
  
@else
    <div id="team-page" class="team-section section-padding pt-50 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="section-title">
                        <h2>Our Team</h2>
                        <span><i class="las la-arrow-down mt-30"></i></span>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="single-team-item">
                                <div class="team-img">
                                    <img src="assets/img/team/1.jpg" alt="">
                                </div>
                                <div class="team-info">
                                    <h5>Mark Wood</h5>
                                    <hr>
                                    <p>[Project Manager]</p>
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="single-team-item">
                                <div class="team-img">
                                    <img src="assets/img/team/2.jpg" alt="">
                                </div>
                                <div class="team-info">
                                    <h5>Natasha Kareem</h5>
                                    <hr>
                                    <p>[Product Designer]</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-team-item">
                        <div class="team-img">
                            <img src="assets/img/team/3.jpg" alt="">
                        </div>
                        <div class="team-info">
                            <h5>Decan Rice</h5>
                            <hr>
                            <p>[Architect]</p>
                        </div>

                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-team-item">
                        <div class="team-img">
                            <img src="assets/img/team/4.jpg" alt="">
                        </div>
                        <div class="team-info">
                            <h5>Patric Evra</h5>
                            <hr>
                            <p>[Architect]</p>
                        </div>

                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-team-item">
                        <div class="team-img">
                            <img src="assets/img/team/5.jpg" alt="">
                        </div>
                        <div class="team-info">
                            <h5>Sophie White</h5>
                            <hr>
                            <p>[Civil Engineer]</p>
                        </div>

                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-team-item">
                        <div class="team-img">
                            <img src="assets/img/team/6.jpg" alt="">
                        </div>
                        <div class="team-info">
                            <h5>Phil Jhones</h5>
                            <hr>
                            <p>[Architect]</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
    <!-- Award Section  -->

    <div class="award-section section-padding pt-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <div class="section-title">
                        <h2>Awards <span><i class="las la-arrow-down"></i></span></h2>
                    </div>
                </div>
                
            </div>
            <div class="award-wrap mt-30">
                <div class="row mt-30 mb-30">
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="single-award-item">
                            <div class="award-icon">
                                <i class="las la-arrow-right"></i>
                            </div>
                            <div class="award-info">
                                <p>2023</p>
                                <h3>AIA Award</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="single-award-item">
                            <div class="award-icon">
                                <i class="las la-arrow-right"></i>
                            </div>
                            <div class="award-info">
                                <p>2023</p>
                                <h3>ASID Award</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="single-award-item">
                            <div class="award-icon">
                                <i class="las la-arrow-right"></i>
                            </div>
                            <div class="award-info">
                                <p>2023</p>
                                <h3>Leed Gold Certify</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection