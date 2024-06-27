 @php
$testimonials = getTestimonials()->sortBy('order');
@endphp
@if (count($testimonials) > 0)
    <div class="testimonial-section section-padding pt-50">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-title mb-0 text-md-end">
                        <h3><i class="las la-arrow-down d-none d-md-block"></i> What Our Clients Are Saying</h3>
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
                <div class="col-xl-12">
                    <div class="section-title mb-0 text-md-end">
                        <h3><i class="las la-arrow-down d-none d-md-block"></i> What Our Clients Are Saying</h3>
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
