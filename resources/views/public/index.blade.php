@extends('public.mainframe')
@section('content')

    <!-- Header Area  -->

   <!-- Navbar -->

    <!-- <div id="smooth-content"> -->

    <!-- Hero Area  -->
    <div id="home-3" class="hero-area">
        <div class="container">
            <div class="row hero-area-inner">
                <div class="offset-xl-1 col-xl-10 offset-lg-1 col-lg-10 wow fadeInUp animated" data-wow-delay="200ms">
                    <div class="hero-area-content">
                        <div class="section-title">                            
                            <h1>Transform your <br> <span>Vision  into Reality</span></h1>
                        </div>
                    </div>
                </div>    
                <div class="row mt-60">
                    <div class="col-xl-7 col-lg-7 col-md-7">
                        <div class="hero-area-banner">
                            <img src="{{ asset('frontend/assets/img/hero-area-banner.jpg') }}" alt="">
                            <p>[Architecture]</p>
                        </div>
                    </div>
                    <div class="offset-xl-1 col-xl-4 offset-lg-1 col-lg-4 col-md-5">
                        <div class="hero-area-content">
                            <p>At Archipix, we are passionate about bringing our clients vision to life. We work closely with you. Aliquam maximus mi nec justo efficitur, quis sollicitudin sapien tempus. Vivamus dictum varius elit, ultricies sollicitudin metus fermentum vel. Maecenas eget scelerisque orci. </p>
                        </div>
                        <div class="directon-sign">
                            <i class="las la-arrow-down"></i>
                        </div>
                        <div class="hero-area-banner mt-60">
                            <img src="{{ asset('frontend/assets/img/hero-banner-2.jpg') }}" alt="">
                            <p>[Interior]</p>
                        </div>
                    </div>
                    <div class="section-title mb-0">
                        <span><i class="las la-arrow-down mt-30"></i></span>
                        <h3>Archipix</h3>
                        <p>Design your Dream House</p>
                    </div>
                </div>            
            </div>
            
        </div>
                

    </div>

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

    <!-- Project Section  -->
    <div id="project-3" class="project-section section-padding pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h2>Our Featured Work</h2>
                </div>
            </div>
            <div class="row">
                <nav>
                    <div class="nav project-list" role="tablist">                        
                        <button class="nav-link active" id="architecture-design-tab" data-bs-toggle="tab" data-bs-target="#architecture-design" type="button" role="tab" aria-controls="architecture-design" aria-selected="false">Architecture Design</button>
                        <button class="nav-link" id="interior-design-tab" data-bs-toggle="tab" data-bs-target="#interior-design" type="button" role="tab" aria-controls="interior-design" aria-selected="false">Interior Design</button>
                        <button class="nav-link" id="project-management-tab" data-bs-toggle="tab" data-bs-target="#project-management" type="button" role="tab" aria-controls="project-management" aria-selected="false">Project Management</button>
                        <button class="nav-link" id="historic-preservation-tab" data-bs-toggle="tab" data-bs-target="#historic-preservation" type="button" role="tab" aria-controls="historic-preservation" aria-selected="false">Historic Preservation</button>
                        <button class="nav-link" id="landscape-design-tab" data-bs-toggle="tab" data-bs-target="#landscape-design" type="button" role="tab" aria-controls="landscape-design" aria-selected="false">Landscape Design</button>                          
                        <button class="nav-link" id="furniture-remodel-tab" data-bs-toggle="tab" data-bs-target="#furniture-remodel" type="button" role="tab" aria-controls="furniture-remodel" aria-selected="false">Furniture Remodel</button>                          
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">                   
                    <div class="tab-pane fade show active" id="architecture-design" role="tabpanel" aria-labelledby="architecture-design-tab" tabindex="0">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-6 col-12">                                
                                <div class="featured-work-wrapper" data-background="{{ asset('frontend/assets/img/project/3-1.jpg') }}" style="cursor: pointer;" onclick="window.location='project-details.html';">                                    
                                    <div class="featured-work-inner">
                                        <div class="fetured-work-bg">                                              
                                        </div>
                                        <a href="project-details.html" class="details-link">
                                            <i class="las la-arrow-right"></i>
                                        </a>
                                        <div class="featured-work-info">
                                            <h2>01</h2>
                                            <h4>Mediterrean Villa</h4>
                                        </div>
                                    </div>                                                                        
                                </div>                                
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                                <div class="featured-work-wrapper" data-background="{{ asset('frontend/assets/img/project/3-2.jpg') }}" style="cursor: pointer;" onclick="window.location='project-details.html';">                                    
                                    <div class="featured-work-inner">
                                        <div class="fetured-work-bg">                                              
                                        </div>
                                        <a href="project-details.html" class="details-link">
                                            <i class="las la-arrow-right"></i>
                                        </a>
                                        <div class="featured-work-info">
                                            <h2>02</h2>
                                            <h4>Peninsula Villa</h4>
                                        </div>
                                    </div>                                                                        
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                                <div class="featured-work-wrapper" data-background="{{ asset('frontend/assets/img/project/3-3.jpg') }}" style="cursor: pointer;" onclick="window.location='project-details.html';">                                    
                                    <div class="featured-work-inner">
                                        <div class="fetured-work-bg">                                              
                                        </div>
                                        <a href="project-details.html" class="details-link">
                                            <i class="las la-arrow-right"></i>
                                        </a>
                                        <div class="featured-work-info">
                                            <h2>03</h2>
                                            <h4>Parkview Resort</h4>
                                        </div>
                                    </div>                                                                        
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="interior-design" role="tabpanel" aria-labelledby="interior-design-tab" tabindex="0">
                        <div class="row">                            
                            <div class="col-xl-4 col-lg-4 col-md-6 col-12">                                
                                <div class="featured-work-wrapper" data-background="{{ asset('frontend/assets/img/project/3-4.jpg') }}" style="cursor: pointer;" onclick="window.location='project-details.html';">                                    
                                    <div class="featured-work-inner">
                                        <div class="fetured-work-bg">                                              
                                        </div>
                                        <a href="project-details.html" class="details-link">
                                            <i class="las la-arrow-right"></i>
                                        </a>
                                        <div class="featured-work-info">
                                            <h2>01</h2>
                                            <h4>Restaurant Inn</h4>
                                        </div>
                                    </div>                                                                        
                                </div>                                
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                                <div class="featured-work-wrapper" data-background="{{ asset('frontend/assets/img/project/3-5.jpg') }}" style="cursor: pointer;" onclick="window.location='project-details.html';">                                    
                                    <div class="featured-work-inner">
                                        <div class="fetured-work-bg">                                              
                                        </div>
                                        <a href="project-details.html" class="details-link">
                                            <i class="las la-arrow-right"></i>
                                        </a>
                                        <div class="featured-work-info">
                                            <h2>02</h2>
                                            <h4>Corporate Office</h4>
                                        </div>
                                    </div>                                                                        
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                                <div class="featured-work-wrapper" data-background="{{ asset('frontend/assets/img/project/3-6.jpg') }}" style="cursor: pointer;" onclick="window.location='project-details.html';">                                    
                                    <div class="featured-work-inner">
                                        <div class="fetured-work-bg">                                              
                                        </div>
                                        <a href="project-details.html" class="details-link">
                                            <i class="las la-arrow-right"></i>
                                        </a>
                                        <div class="featured-work-info">
                                            <h2>03</h2>
                                            <h4>Museum Spaces</h4>
                                        </div>
                                    </div>                                                                        
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="project-management" role="tabpanel" aria-labelledby="project-management-tab" tabindex="0">
                        <div class="row">                                
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-12">                                
                                    <div class="featured-work-wrapper" data-background="{{ asset('frontend/assets/img/project/3-7.jpg') }}" style="cursor: pointer;" onclick="window.location='project-details.html';">                                    
                                        <div class="featured-work-inner">
                                            <div class="fetured-work-bg">                                              
                                            </div>
                                            <a href="project-details.html" class="details-link">
                                                <i class="las la-arrow-right"></i>
                                            </a>
                                            <div class="featured-work-info">
                                                <h2>01</h2>
                                                <h4>Mediterrean Villa</h4>
                                            </div>
                                        </div>                                                                        
                                    </div>                                
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                                    <div class="featured-work-wrapper" data-background="{{ asset('frontend/assets/img/project/3-8.jpg') }}" style="cursor: pointer;" onclick="window.location='project-details.html';">                                    
                                        <div class="featured-work-inner">
                                            <div class="fetured-work-bg">                                              
                                            </div>
                                            <a href="project-details.html" class="details-link">
                                                <i class="las la-arrow-right"></i>
                                            </a>
                                            <div class="featured-work-info">
                                                <h2>02</h2>
                                                <h4>Peninsula Villa</h4>
                                            </div>
                                        </div>                                                                        
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                                    <div class="featured-work-wrapper" data-background="{{ asset('frontend/assets/img/project/3-9.jpg') }}" style="cursor: pointer;" onclick="window.location='project-details.html';">                                    
                                        <div class="featured-work-inner">
                                            <div class="fetured-work-bg">                                              
                                            </div>
                                            <a href="project-details.html" class="details-link">
                                                <i class="las la-arrow-right"></i>
                                            </a>
                                            <div class="featured-work-info">
                                                <h2>03</h2>
                                                <h4>Parkview Resort</h4>
                                            </div>
                                        </div>                                                                        
                                    </div>
                                </div>
                            </div>                          
                        </div>
                    </div>
                    <div class="tab-pane fade" id="historic-preservation" role="tabpanel" aria-labelledby="historic-preservation-tab" tabindex="0">
                        <div class="row">                                
                            <div class="col-xl-4 col-lg-4 col-md-6 col-12">                                
                                <div class="featured-work-wrapper" data-background="{{ asset('frontend/assets/img/project/3-10.jpg') }}" style="cursor: pointer;" onclick="window.location='project-details.html';">                                    
                                    <div class="featured-work-inner">
                                        <div class="fetured-work-bg">                                              
                                        </div>
                                        <a href="project-details.html" class="details-link">
                                            <i class="las la-arrow-right"></i>
                                        </a>
                                        <div class="featured-work-info">
                                            <h2>01</h2>
                                            <h4>Sears Tower</h4>
                                        </div>
                                    </div>                                                                        
                                </div>                                
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                                <div class="featured-work-wrapper" data-background="{{ asset('frontend/assets/img/project/3-11.jpg') }}" style="cursor: pointer;" onclick="window.location='project-details.html';">                                    
                                    <div class="featured-work-inner">
                                        <div class="fetured-work-bg">                                              
                                        </div>
                                        <a href="project-details.html" class="details-link">
                                            <i class="las la-arrow-right"></i>
                                        </a>
                                        <div class="featured-work-info">
                                            <h2>02</h2>
                                            <h4>Willis Mall</h4>
                                        </div>
                                    </div>                                                                        
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                                <div class="featured-work-wrapper" data-background="{{ asset('frontend/assets/img/project/3-12.jpg') }}" style="cursor: pointer;" onclick="window.location='project-details.html';">                                    
                                    <div class="featured-work-inner">
                                        <div class="fetured-work-bg">                                              
                                        </div>
                                        <a href="project-details.html" class="details-link">
                                            <i class="las la-arrow-right"></i>
                                        </a>
                                        <div class="featured-work-info">
                                            <h2>03</h2>
                                            <h4>Pixel IT Park</h4>
                                        </div>
                                    </div>                                                                        
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="landscape-design" role="tabpanel" aria-labelledby="landscape-design-tab" tabindex="0">
                        <div class="row">                                
                            <div class="col-xl-4 col-lg-4 col-md-6 col-12">                                
                                <div class="featured-work-wrapper" data-background="{{ asset('frontend/assets/img/project/3-13.jpg') }}" style="cursor: pointer;" onclick="window.location='project-details.html';">                                    
                                    <div class="featured-work-inner">
                                        <div class="fetured-work-bg">                                              
                                        </div>
                                        <a href="project-details.html" class="details-link">
                                            <i class="las la-arrow-right"></i>
                                        </a>
                                        <div class="featured-work-info">
                                            <h2>01</h2>
                                            <h4>Dinning Spaces</h4>
                                        </div>
                                    </div>                                                                        
                                </div>                                
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                                <div class="featured-work-wrapper" data-background="{{ asset('frontend/assets/img/project/3-14.jpg') }}" style="cursor: pointer;" onclick="window.location='project-details.html';">                                    
                                    <div class="featured-work-inner">
                                        <div class="fetured-work-bg">                                              
                                        </div>
                                        <a href="project-details.html" class="details-link">
                                            <i class="las la-arrow-right"></i>
                                        </a>
                                        <div class="featured-work-info">
                                            <h2>02</h2>
                                            <h4>Common Area</h4>
                                        </div>
                                    </div>                                                                        
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                                <div class="featured-work-wrapper" data-background="{{ asset('frontend/assets/img/project/3-15.jpg') }}" style="cursor: pointer;" onclick="window.location='project-details.html';">                                    
                                    <div class="featured-work-inner">
                                        <div class="fetured-work-bg">                                              
                                        </div>
                                        <a href="project-details.html" class="details-link">
                                            <i class="las la-arrow-right"></i>
                                        </a>
                                        <div class="featured-work-info">
                                            <h2>03</h2>
                                            <h4>House Yard Design</h4>
                                        </div>
                                    </div>                                                                        
                                </div>
                            </div>
                        </div>
                    </div>                        
                    <div class="tab-pane fade" id="furniture-remodel" role="tabpanel" aria-labelledby="furniture-remodel-tab" tabindex="0">
                        <div class="row">                                
                            <div class="col-xl-4 col-lg-4 col-md-6 col-12">                                
                                <div class="featured-work-wrapper" data-background="{{ asset('frontend/assets/img/project/3-16.jpg') }}" style="cursor: pointer;" onclick="window.location='project-details.html';">                                    
                                    <div class="featured-work-inner">
                                        <div class="fetured-work-bg">                                              
                                        </div>
                                        <a href="project-details.html" class="details-link">
                                            <i class="las la-arrow-right"></i>
                                        </a>
                                        <div class="featured-work-info">
                                            <h2>01</h2>
                                            <h4>Floor Design</h4>
                                        </div>
                                    </div>                                                                        
                                </div>                                
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                                <div class="featured-work-wrapper" data-background="{{ asset('frontend/assets/img/project/3-17.jpg') }}" style="cursor: pointer;" onclick="window.location='project-details.html';">                                    
                                    <div class="featured-work-inner">
                                        <div class="fetured-work-bg">                                              
                                        </div>
                                        <a href="project-details.html" class="details-link">
                                            <i class="las la-arrow-right"></i>
                                        </a>
                                        <div class="featured-work-info">
                                            <h2>02</h2>
                                            <h4>Green Planting</h4>
                                        </div>
                                    </div>                                                                        
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                                <div class="featured-work-wrapper" data-background="{{ asset('frontend/assets/img/project/3-18.jpg') }}" style="cursor: pointer;" onclick="window.location='project-details.html';">                                    
                                    <div class="featured-work-inner">
                                        <div class="fetured-work-bg">                                              
                                        </div>
                                        <a href="project-details.html" class="details-link">
                                            <i class="las la-arrow-right"></i>
                                        </a>
                                        <div class="featured-work-info">
                                            <h2>03</h2>
                                            <h4>Furniture Design</h4>
                                        </div>
                                    </div>                                                                        
                                </div>
                            </div>
                        </div>
                    </div>                        
                    </div>
            </div>
        </div>
    </div>

    <!-- Client Section  -->

    <div class="client-area section-padding pt-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="client-wrap owl-carousel">
                    <div class="single-client">
                        <a href="#"><img src="{{ asset('frontend/assets/img/client/1.png') }}" alt=""></a>
                    </div>
                    <div class="single-client">
                        <a href="#"><img src="{{ asset('frontend/assets/img/client/2.png') }}" alt=""></a>
                    </div>
                    <div class="single-client">
                        <a href="#"><img src="{{ asset('frontend/assets/img/client/3.png') }}" alt=""></a>
                    </div>
                    <div class="single-client">
                        <a href="#"><img src="{{ asset('frontend/assets/img/client/4.png') }}" alt=""></a>
                    </div>
                    <div class="single-client">
                        <a href="#"><img src="{{ asset('frontend/assets/img/client/5.png') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- About Section  -->
    <div class="about-section section-padding pt-0">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-xl-7 col-lg-7 col-md-6">
                    <div class="section-title">
                        <h2>About <br> Archipix <span class="d-none d-md-block"><i class="las la-arrow-down ml-40"></i></span></h2>                            
                    </div>
                    <div class="about-desc mt-60 pl-150">
                        <p>Archipix is a team of experienced architects and interior designers who are passionate about creating beautiful, functional spaces. We believe that good design should be accessible to everyone, and we work hard to make sure that our clients visions become a reality.</p>
                    </div>
                </div>
                <div class="offset-xl-1 col-xl-4 offset-lg-1 col-lg-4 col-md-6 text-end">
                    <div class="about-img">
                        <img src="{{ asset('frontend/assets/img/about/about-3.jpg') }}" alt="">
                    </div>
                </div>
            </div>            
        </div>
    </div>

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

    <!-- Testimonial Section  -->

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

    <!-- Why Choose Us Section  -->
    <div class="why-choose-us-section section-padding pt-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3">
                    <div class="section-title">
                        <h2>Why Choose Archipix?</h2>
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

    <!-- CTA Area  -->
    <div class="cta-area-two gray-bg" data-background="{{ asset('frontend/assets/img/cta-sketch.png') }}">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-xl-7 col-lg-7">
                    <div class="section-title">
                        <h2>Interested in seeing <br> more of our <br> work? <span><i class="las la-arrow-right"></i></span> </h2>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5">
                    <div class="cta-content">
                        <p>Explore our <a href="project.html">portfolio</a> to see examples of our projects and get inspired for your own space.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Blog Section  -->
    <div id="blog-3" class="blog-section section-padding pb-50">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="section-title">                    
                        <h2>Design Insight</h2>
                    </div>
                </div>
            </div>
            <div class="row mt-40">                               
                <div class="single-blog-item pt-40 pb-40"> 
                    <div class="blog-bg">
                        <img src="{{ asset('frontend/assets/img/blog/blog-4.jpg') }}" alt="">
                    </div>                       
                    <div class="blog-content">                        
                        <div class="blog-meta">
                            <p>Architecture</p>
                        </div>
                        <div class="blog-info">
                            <div class="blog-author">
                                <p>by Jane Collins</p>
                            </div>
                            <div class="blog-date">
                                <p>May 1, 2023</p>
                            </div>
                        </div> 
                        <h3><a href="blog-details.html">How to Design a Sustaintable <br> Apartment</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur repellat ipsam nesciunt sed cumque iusto, doloribus iure libero quia amet laborum pariatur saepe autem et id numquam.</p>                                                       
                        <a href="blog-details.html" class="read-more-btn">Read More</a>
                    </div>    
                                        
                </div>
                <div class="single-blog-item pb-40"> 
                    <div class="blog-bg">
                        <img src="{{ asset('frontend/assets/img/blog/blog-6.jpg') }}" alt="">
                    </div>                       
                    <div class="blog-content">                        
                        <div class="blog-meta">
                            <p>Interior</p>
                        </div>
                        <div class="blog-info">
                            <div class="blog-author">
                                <p>by Paul Roberts</p>
                            </div>
                            <div class="blog-date">
                                <p>May 1, 2023</p>
                            </div>
                        </div> 
                        <h3><a href="blog-details.html">The importance of Lighting Design <br> in Interior Spaces</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur repellat ipsam nesciunt sed cumque iusto, doloribus iure libero quia amet laborum pariatur saepe autem et id numquam.</p>                                                       
                        <a href="blog-details.html" class="read-more-btn">Read More</a>
                    </div>    
                                        
                </div>
                <div class="single-blog-item pb-40"> 
                    <div class="blog-bg">
                        <img src="{{ asset('frontend/assets/img/blog/blog-7.jpg') }}" alt="">
                    </div>                       
                    <div class="blog-content">                        
                        <div class="blog-meta">
                            <p>Interior</p>
                        </div>
                        <div class="blog-info">
                            <div class="blog-author">
                                <p>by Paul Roberts</p>
                            </div>
                            <div class="blog-date">
                                <p>May 1, 2023</p>
                            </div>
                        </div> 
                        <h3><a href="blog-details.html">Creating a Functional Corporate Office Space</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur repellat ipsam nesciunt sed cumque iusto, doloribus iure libero quia amet laborum pariatur saepe autem et id numquam.</p>                                                       
                        <a href="blog-details.html" class="read-more-btn">Read More</a>
                    </div>    
                                        
                </div>                                       
            </div>            
        </div>
    </div>

    @endsection
    <!-- Footer -->

    <!-- </div> -->
    <!-- </div> -->
<!-- Js and co -->