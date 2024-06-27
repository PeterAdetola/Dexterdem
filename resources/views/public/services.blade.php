@extends('public.mainframe')
@section('content')

@php
  $innerHero = getInnerHero();

  if(count($innerHero) > 0){  
    $pageHero = getInnerHero()->where('page', '=', 'service')->first();
  } else {
    $pageHero = '';
  }

  $noHeading = empty($pageHero->heading);
  $noSubHeading = empty($pageHero->summary);
  $noImage = empty($pageHero->image);
  $noSum = empty($pageHero->summary);
@endphp
    <!-- Hero Area  -->
    <div id="project_page" class="hero-area">
        <div class="container">
            <div class="row hero-area-inner">
                <div class="col-xl-9 col-lg-9">
                    <div class="hero-area-content">
                        <div class="section-title">  
  @if(!$noHeading) 
                {!! $pageHero->heading !!}
  @else                          
                            <h1>Discover Our<br></h1>
                            <h1>Portfolio<i>/</i> of Stunning <br></h1>
                            <h1 class="pl-200">Designs</h1>
  @endif
                        </div>
                    </div>
                </div> 
                <div class="col-xl-3 col-lg-3 text-end">
                    <div class="service-info">
                        <p>Since 2019</p>
  @if(!$noSubHeading) 
                {!! $pageHero->summary !!}
  @else  
                        <h4>Building Construction</h4>
                        <h4>Consultancy</h4>
                        <h4>Design</h4>
  @endif
                    </div>
                </div>                   
            </div>                    
        </div>       
        <div class="project-feature-img">  
  @if(!$noImage) 
              <img src="{{ url($pageHero->image) }}" alt="" />
  @else          
            <img src="{{ asset('frontend/assets/img/project/project-feature-img-2.jpg') }}" alt="">
  @endif
        </div>         
    </div>


    <!-- Service Section  -->
@php
$services = getServices()->sortBy('order');
$i = 1;
@endphp
@if (count($services) > 0)
    <div class="service-section section-padding pt-100">
        <div class="container">
            <div class="row justify-content-center text-end">                    
                <div class="section-title">
                    <h2>Our Services</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
  @foreach($services as $service)    
                    <div class="single-service-item mt-30">
                        <div class="single-service-inner">
                            <h5><span>0{{$i++}}</span> {{ $service->name }} </h5>
                            <div class="details-link"><i class="las la-arrow-right"></i></div>
                        </div>
                        <div class="service-img">
                            <img src="{{ url($service->image) }}" alt="">
                        </div>
                    </div>
    @endforeach
                </div>
            </div>
        </div>
    </div>

@else
    <div class="service-section section-padding pt-100">
        <div class="container">
            <div class="row justify-content-center text-end">                    
                <div class="section-title">
                    <h2>Our Services</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="single-service-item mt-30">
                        <div class="single-service-inner">
                            <h5><span>01</span>Architectural Design</h5>
                            <div class="details-link"><i class="las la-arrow-right"></i></div>
                        </div>
                        <div class="service-img">
                            <img src="{{ asset('frontend/assets/img/service/service-1.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="single-service-item">
                        <div class="single-service-inner">
                            <h5><span>02</span>Interior Design</h5>
                            <div class="details-link"><i class="las la-arrow-right"></i></div>
                        </div>
                        <div class="service-img">
                            <img src="{{ asset('frontend/assets/img/service/service-2.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="single-service-item">
                        <div class="single-service-inner">
                            <h5><span>03</span>Project Management</h5>
                            <div class="details-link"><i class="las la-arrow-right"></i></div>
                        </div>
                        <div class="service-img">
                            <img src="{{ asset('frontend/assets/img/service/service-3.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="single-service-item">
                        <div class="single-service-inner">
                            <h5><span>04</span>Historic Preservation</h5>
                            <div class="details-link"><i class="las la-arrow-right"></i></div>
                        </div>
                        <div class="service-img">
                            <img src="{{ asset('frontend/assets/img/service/service-4.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="single-service-item">
                        <div class="single-service-inner">
                            <h5><span>05</span>Landscape Design</h5>
                            <div class="details-link"><i class="las la-arrow-right"></i></div>
                        </div>
                        <div class="service-img">
                            <img src="{{ asset('frontend/assets/img/service/service-5.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="single-service-item">
                        <div class="single-service-inner">
                            <h5><span>06</span>Furniture Remodel</h5>
                            <div class="details-link"><i class="las la-arrow-right"></i></div>
                        </div>
                        <div class="service-img">
                            <img src="{{ asset('frontend/assets/img/service/service-6.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

    <!-- Feature Area  -->
@php
$values = getValues()->sortBy('order');
@endphp
@if (count($values) > 0)
    <div class="feature-area gray-bg section-padding pt-0 pb-100">
        <div class="container">            
            <div class="row">
                <?php $counter = 0; ?>
  @foreach($values as $value)  
                <div class="col-xl-2 col-lg-2 col-md-4 {{$counter % 2 === 1 ? 'mt-150' : ''}}">
                    <div class="single-feature-item pt-0">
                        <div class="feature-icon">
                            <i class="las la-arrow-right"></i>
                        </div>
                        <h4>{{ $value->value }}</h4>
                    </div>
                </div>
                <?php $counter++; ?>
  @endforeach
            </div>
        </div>
    </div>
@else
    <div class="feature-area gray-bg section-padding pt-0 pb-100">
        <div class="container">            
            <div class="row">
                <div class="col-xl-2 col-lg-2 col-md-4">
                    <div class="single-feature-item pt-0">
                        <div class="feature-icon">
                            <i class="las la-arrow-right"></i>
                        </div>
                        <h4>Design for Sustainability</h4>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 mt-150">
                    <div class="single-feature-item">
                        <div class="feature-icon">
                            <i class="las la-arrow-right"></i>
                        </div>
                        <h4>Honesty & Integrity</h4>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4">
                    <div class="single-feature-item">
                        <div class="feature-icon">
                            <i class="las la-arrow-right"></i>
                        </div>
                        <h4>Innovative Design</h4>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 mt-150">
                    <div class="single-feature-item">
                        <div class="feature-icon">
                            <i class="las la-arrow-right"></i>
                        </div>
                        <h4>Attention to Details</h4>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4">
                    <div class="single-feature-item">
                        <div class="feature-icon">
                            <i class="las la-arrow-right"></i>
                        </div>
                        <h4>Experienced Team</h4>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 mt-150">
                    <div class="single-feature-item">
                        <div class="feature-icon">
                            <i class="las la-arrow-right"></i>
                        </div>
                        <h4>Quality Craftsmanship</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

 <!-- Process Section  -->
@php
$processes = getProcesses()->sortBy('order');
@endphp
@if (count($processes) > 0)
    <div class="process-section bg-cover section-padding pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="section-title">
                        <h2>Our Process</h2>
                    </div>
                </div>
            </div>
            <div class="row gx-0 mt-30">
  	@foreach($processes as $process) 
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-process-item">
                        <div class="process-num">
                            <h2>0{{ $process->order }}<i class="las la-arrow-right"></i></h2>
                        </div>
                        <h4>{{ $process->process }}</h4>
                        <p>{!! $process->description !!}</p>
                    </div>
                </div>
    @endforeach
            </div>
        </div>
    </div>
@else
    <div class="process-section bg-cover section-padding pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="section-title">
                        <h2>Our Process</h2>
                    </div>
                </div>
            </div>
            <div class="row gx-0 mt-30">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-process-item">
                        <div class="process-num">
                            <h2>01<i class="las la-arrow-right"></i></h2>
                        </div>
                        <h4>Initial Consultation </h4>
                        <p>Maecenas fermentum maximus dui aliquet mollis. Suspendisse leo lorem, tincidunt dictum interdum eu, fringilla non orci. Duis condimentum leo sit amet massa imperdiet placerat. Vestibulum.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 offset-xl-0 offset-lg-0 offset-md-6 col-md-6">
                    <div class="single-process-item">
                        <div class="process-num">
                            <h2>02<i class="las la-arrow-right"></i></h2>
                        </div>
                        <h4>Design Concept </h4>
                        <p>Praesent eget eros eget nisl lacinia pretium. Phasellus mi ligula, luctus quis leo ac, efficitur aliquet nulla. Sed vehicula, tellus ut volutpat finibus, ex sem.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-process-item">
                        <div class="process-num">
                            <h2>03<i class="las la-arrow-right"></i></h2>
                        </div>
                        <h4>Construction</h4>
                        <p>Phasellus at lobortis nisi, sed sollicitudin diam. Vivamus fringilla sit amet eros in hendrerit. Fusce cursus interdum risus, et lacinia mi ultrices ac. Morbi quis.</p>
                    </div>
                </div>
            </div>
            <div class="row gx-0">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="process-bg">                        
                    </div>                    
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-process-item">
                        <div class="process-num">
                            <h2>04<i class="las la-arrow-right"></i></h2>
                        </div>
                        <h4>Final Work-Through</h4>
                        <p>Vestibulum vitae consequat enim. Nam ac massa ac risus convallis fringilla eu varius nunc. Phasellus congue sodales est, ut condimentum mi efficitur id. In euismod.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-process-item">
                        <div class="process-num">
                            <h2>05<i class="las la-arrow-right"></i></h2>
                        </div>
                        <h4>Follow Up</h4>
                        <p>Etiam ornare mauris eros, sed molestie turpis vulputate nec. Nam porta, magna at posuere tincidunt, dolor tellus viverra orci, faucibus tristique nunc ante vel enim.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif  
    
    <!-- Testimonial Section  -->

 @php
$testimonials = getTestimonials()->sortBy('order');
@endphp
@if (count($testimonials) > 0)
    <div class="testimonial-section section-padding pt-50">
        <div class="container">
            <div class="row">
                <div class="offset-xl-6 col-xl-6 offset-lg-6 col-lg-6">
                    <div class="section-title text-end">
                        <h2>What Our Clients <br> <span><i class="las la-arrow-down"></i></span> Are Saying</h2>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row mt-50">
                <div class="col-xl-7 col-lg-7">
                    <div class="testimonial-wrapper owl-carousel">
        @foreach($testimonials as $testimonial)
                        <div class="single-testimonial-item">
                            <div class="quote-icon">
                                <img src="{{ asset('frontend/assets/img/straight-quotes.png') }}" alt="">
                            </div>
                            <div class="testimonial-content">
                                <p>{{ $testimonial->content }}</p>
                            </div>
                            <div class="testimonial-author">
                                @if($testimonial->image)
                                <img src="{{ $testimonial->image }}" alt="">
                                @else
                                <div class="initial-avatar" style="margin-bottom: 0em">{{ $testimonial->initials }}</div>
                                @endif
                                <h6 class="text-black">{{ $testimonial->name }} <span>{{ $testimonial->role }}</span></h6>
                            </div>

                        </div>
        @endforeach
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5">
                    <div class="testimonial-bg-wrapper d-none d-md-block">
                        <img src="{{ asset('frontend/assets/img/testimonial-bg.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@else
    <div class="testimonial-section section-padding pt-50">
        <div class="container">
            
            <div class="row">
                <div class="offset-xl-6 col-xl-6 offset-lg-6 col-lg-6">
                    <div class="section-title text-end">
                        <h2>What Our Clients <br> <span><i class="las la-arrow-down"></i></span> Are Saying</h2>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row mt-50">
                <div class="col-xl-7 col-lg-7">
                    <div class="testimonial-wrapper owl-carousel">
                        <div class="single-testimonial-item">
                            <div class="quote-icon">
                                <img src="{{ asset('frontend/assets/img/straight-quotes.png') }}" alt="">
                            </div>
                            <div class="testimonial-content">
                                <p>I hired Archipix to design and build my dream home, and I could be happier with the result. From the intial consultation to the final walk-through, the Archipix team was professional.</p>
                            </div>
                            <div class="testimonial-author">
                                <img src="{{ asset('frontend/assets/img/testimonial/1.png') }}" alt="">
                                <h6 class="text-black">Lisa Ray <span>New York, USA</span></h6>
                            </div>

                        </div>
                        <div class="single-testimonial-item">
                            <div class="quote-icon">
                                <img src="{{ asset('frontend/assets/img/straight-quotes.png') }}" alt="">
                            </div>
                            <div class="testimonial-content">
                                <p>I hired Archipix to design and build my dream home, and I could be happier with the result. From the intial consultation to the final walk-through, the Archipix team was professional.</p>
                            </div>
                            <div class="testimonial-author">
                                <img src="{{ asset('frontend/assets/img/testimonial/2.png') }}" alt="">
                                <h6 class="text-black">Paul Scholes <span>Manchester, UK</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5">
                    <div class="testimonial-bg-wrapper d-none d-md-block">
                        <img src="{{ asset('frontend/assets/img/testimonial-bg.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif 


@endsection