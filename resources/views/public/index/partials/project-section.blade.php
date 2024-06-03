@php
           
$projects = getProjects()->sortBy('created_at');
$services = getServicesProj();
@endphp
@if (count($projects) > 0)
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
    @foreach($services as $service)                   
                        <button class="nav-link {{$service->order == 1 ? 'active' : ''}}" id="service{{ $service->id }}-tab" data-bs-toggle="tab" data-bs-target="#service{{ $service->id }}" type="button" role="tab" aria-controls="service{{ $service->id }}" aria-selected="false">{{ $service->name }}</button>
    @endforeach
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">  
   @foreach($services as $service)                 
                    <div class="tab-pane fade {{$service->order == 1 ? 'show active' : ''}}" id="service{{ $service->id }}" role="tabpanel" aria-labelledby="service{{ $service->id }}-tab" tabindex="0">
                        <div class="row">
        @php  $i = 1; @endphp
        @foreach($projects as $project) 
        @if($project->category->name == $service->name)
                            <div class="col-xl-4 col-lg-4 col-md-6 col-12">                                
                                <div class="featured-work-wrapper" data-background="{{ $project->image }}" style="cursor: pointer;" onclick="window.location='project-details.html';">                                    
                                    <div class="featured-work-inner">
                                        <div class="fetured-work-bg">                                              
                                        </div>
                                        <a href="project-details.html" class="details-link">
                                            <i class="las la-arrow-right"></i>
                                        </a>
                                        <div class="featured-work-info">
                                            <h2>0{{$i++}}</h2>
                                            <h4>{{ $project->name }}</h4>
                                        </div>
                                    </div>                                                                        
                                </div>                                
                            </div>
        @endif
        @endforeach
                        </div>
                    </div>
    @endforeach                               
                    </div>
            </div>
        </div>
    </div>
@else   <!-- Project Section  -->
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
@endif 