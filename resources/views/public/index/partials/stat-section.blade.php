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