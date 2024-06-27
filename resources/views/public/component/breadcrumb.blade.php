
 <!-- Breadcrumb Area  -->
@php
$route = Route::current()->getName();
@endphp
@if($route !== 'home') 
<div class="breadcrumb-area pt-50">
    <div class="container">
        <div class="row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li> 
                    @if($route == 'aboutus.page')                     
                    <li class="breadcrumb-item active" aria-current="page">About</li>
                    @elseif($route == 'services.page')                  
                    <li class="breadcrumb-item active" aria-current="page">Services</li>
                    @elseif($route == 'projects.page')             
                    <li class="breadcrumb-item active" aria-current="page">Projects</li>
                    @elseif($route == 'project_detailed.page')
                    <li class="breadcrumb-item"><a href="{{ route('projects.page') }}">Projects</a></li>          
                    <li class="breadcrumb-item active" aria-current="page">Project Details</li>
                    @elseif($route == 'contact.page')             
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                    @endif
                </ol>
            </nav>
        </div>
    </div>
</div>
@endif