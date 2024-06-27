@extends('public.mainframe')
@section('content')



    <!-- Project Details  -->
    <div class="project-details-wrap section-padding pt-0">
        <div class="container">
            <div class="row gx-5 justify-content-around align-items-end mt-30">
                <div class="col-xl-6 col-lg-6">
                    <div class="project-bg">
                        <img src="{{ url($project->image) }}" alt="">
                        <div class="project-brief-wrap">
                            <div class="single-brief">
                                <h6>Category</h6>
                                <p>{{ $project->cat->name }}</p>
                            </div>
                            <div class="single-brief">
                                <h6>Location</h6>
                                <p>{{ $project->location }}</p>
                            </div>
                            <div class="single-brief">
                                <h6>Year</h6>
                                <p>{{ $project->year }}</p>
                            </div>
                            
                            <!-- <div class="single-brief total-cost">
                                <h6>Total Cost</h6>
                                <p>$7,590</p>
                            </div> -->
                        </div>
                    </div>                    
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="project-details-inner">
                        <div class="section-title">
                            <h1>{{ $project->name }}</h1>
                            <h6 class="text-end"></h6>
                        </div>
                        <div class="project-details-info">
                            <div class="single-info">
                                <p>Service</p>
                                <h4>{{ $project->cat->name }}</h4>
                            </div>
                            <!-- <div class="single-info">
                                <p>Location</p>
                                <h4>California, USA</h4>
                            </div>                            
                            <div class="single-info">
                                <p>Year</p>
                                <h4>2023</h4>
                            </div>  -->                           
                        </div>
                        <div class="project-desc">
                            <p>{!! $project->details !!}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gallery-section mt-120">
                <h4>Gallery</h4>
                <hr>
                <div class="row gx-3 gy-3 mt-20">
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="row gx-3 gy-3">
                    @if(count($projectImages) > 1)
                    	@foreach($projectImages->slice(1) as $image)
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="project-details-img">
                                    <img src="{{ url($image->image) }}" alt="">
                                    @if($image->caption)
	                                    <figure>
	                                        <figcaption>{{ $image->caption }}</figcaption>
	                                    </figure>
                                    @endif
                                </div>
                            </div>
                    	@endforeach
                    @endif
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="project-details-img big-img">
                            <img src="{{ url($projectImages->first()->image) }}" alt="">
                            @if($projectImages->first()->caption)
                                <figure>
                                    <figcaption>{{ $projectImages->first()->caption }}</figcaption>
                                </figure>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </div>

    @endsection