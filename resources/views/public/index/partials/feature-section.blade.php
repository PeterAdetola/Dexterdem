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
