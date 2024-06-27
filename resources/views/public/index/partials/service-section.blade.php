
@php
$services = getServices()->sortBy('order');
            $i = $j = 1;
@endphp
@if (count($services) > 0)
    <!-- Service Section  -->
    <div id="service-3" class="service-section pb-50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12 text-end">
                    <div class="section-title">
                        <h2>Our Service</h2>
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
                                <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$no}}" aria-expanded="true" aria-controls="collapse{{$no}}">
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
    <!-- Service Section  -->
    <div id="service-3" class="service-section pb-50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12 text-end">
                    <div class="section-title">
                        <h2>Our Service</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="cp-custom-accordion">
                        <div class="accordions" id="accordionExample">                            
                            <div class="accordion-items">
                              <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <span>01</span>
                                    Architectural Design                                    
                                </button>
                              </h2>
                              <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <img src="{{ asset('frontend/assets/img/service/1.jpg') }}" alt="">
                                    <p>Mauris faucibus nisl eu mi egestas blandit. Quisque consectetur urna ac viverra iaculis. Ut turpis velit, consectetur ut tempus a, cursus id nulla. Proin imperdiet magna sit amet mollis luctus. Quisque id leo quis diam dapibus ultricies fringilla vitae neque. Aenean non sollicitudin quam, quis.</p>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-items">
                                <h2 class="accordion-header" id="headingOne">
                                  <button class="accordion-buttons" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                      <span>02</span>
                                      Interior Design
                                  </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                      <img src="{{ asset('frontend/assets/img/service/2.jpg') }}" alt="">
                                      <p>Morbi et faucibus ex. Proin ut enim fermentum, pretium orci sed, suscipit nisl. Etiam ut nulla a dolor consectetur consequat at id ex. Maecenas porttitor, ligula eu dictum vehicula, massa tellus gravida lectus, eget tincidunt mauris eros sit amet turpis. Pellentesque habitant morbi tristique senectus.</p>
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
                                    <img src="{{ asset('frontend/assets/img/service/3.jpg') }}" alt="">
                                    <p>Mauris faucibus nisl eu mi egestas blandit. Quisque consectetur urna ac viverra iaculis. Ut turpis velit, consectetur ut tempus a, cursus id nulla. Proin imperdiet magna sit amet mollis luctus. Quisque id leo quis diam dapibus ultricies fringilla vitae neque. Aenean non sollicitudin quam, quis.</p>
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
                                    <img src="{{ asset('frontend/assets/img/service/4.jpg') }}" alt="">
                                    <p>Mauris faucibus nisl eu mi egestas blandit. Quisque consectetur urna ac viverra iaculis. Ut turpis velit, consectetur ut tempus a, cursus id nulla. Proin imperdiet magna sit amet mollis luctus. Quisque id leo quis diam dapibus ultricies fringilla vitae neque. Aenean non sollicitudin quam, quis.</p>
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
                                    <img src="{{ asset('frontend/assets/img/service/5.jpg') }}" alt="">
                                    <p>Mauris faucibus nisl eu mi egestas blandit. Quisque consectetur urna ac viverra iaculis. Ut turpis velit, consectetur ut tempus a, cursus id nulla. Proin imperdiet magna sit amet mollis luctus. Quisque id leo quis diam dapibus ultricies fringilla vitae neque. Aenean non sollicitudin quam, quis.</p>
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
                                    <img src="{{ asset('frontend/assets/img/service/6.jpg') }}" alt="">
                                    <p>Mauris faucibus nisl eu mi egestas blandit. Quisque consectetur urna ac viverra iaculis. Ut turpis velit, consectetur ut tempus a, cursus id nulla. Proin imperdiet magna sit amet mollis luctus. Quisque id leo quis diam dapibus ultricies fringilla vitae neque. Aenean non sollicitudin quam, quis.</p>
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