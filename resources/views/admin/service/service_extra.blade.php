
@extends('admin.admin_master')
@section('admin')
@php
  $pageTitle = 'Service Page Extras';

  $innerHero = getInnerHero();

  if(count($innerHero) > 0){  
    $pageHero = getInnerHero()->where('page', '=', 'service')->first();
  } else {
    $pageHero = '';
  }

  $noHeading = empty($pageHero->heading);
  $noImage = empty($pageHero->image);
  $noSum = empty($pageHero->summary);
  $edit = !empty($pageHero->heading) || !empty($pageHero->image) || !empty($pageHero->summary);

@endphp

@section('headScript')
<script src="{{ asset('backend/assets/vendors/sortable/sortable.js') }}"></script>
@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/vendors/dropify/css/dropify.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/vendors/hover-effects/media-hover-effects.css') }}">
@endsection

    <style>
      .embossed{
        text-shadow: 2px 2px 2px white;
      }
      .border{
        border: 1px #fafafa solid;
      }
      .collection{
        background-color: #fafafa;
      }
    </style>

 <!-- BEGIN: Page Main-->
    <div id="main">
      <div class="row">
        <div class="content-wrapper-before gradient-45deg-black-grey"></div>
        <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
          <!-- Search for small screen-->
          <div class="container">
            <div class="row">
              <div class="col s10 m6 l6">
                <h5 class="breadcrumbs-title mt-0 mb-0"><span>{{ $pageTitle }}</span></h5>
                <ol class="breadcrumbs mb-0">
                  <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Admin Home</a>
                  </li>
                  <li class="breadcrumb-item active">{{ $pageTitle }}
                  </li>
                </ol>
              </div>

<!-- Somethings removed here -->

            </div>
          </div>
        </div><br>
        <div class="col s12">
          <div class="container">
            <!-- users view start -->
            <div class="section">
              <div class="card pb-3">
                <div class="row">
          <div class="card-content">
            <h5 class="card-title ml-2">Hero Section</h5>
            <div class="col s12 m6 grid">
             <h5 class="center">
              <div id="heroHeading" class="collection" style="padding: 0.5em;">
  @if(!$noHeading) 
                {!! $pageHero->heading !!}
  @else
                                  Transform your<br>
                    Vision into Reality<br>
  @endif

                    <div class="divider mb-2 mt-3"></div>
                    <div class="row center">
                      <a href="#heading-modal" class="modal-trigger"  style="color: grey;">
                        <div class="chip"> {{ $noHeading ? 'Add Heading' : 'Edit Heading' }} </div>       
                      </a>
                  </div>
              </div>
    @include('admin.service.modals.heading-modal')
            </h5>
          </div>
                
          <div class="col s12 m6 grid">
            <figure class="effect-sadie">
  @if(!$noImage) 
              <img src="{{ url($pageHero->image) }}" alt="" />
  @else
          <img src="{{ asset('frontend/assets/img/project/project-feature-img-2.jpg') }}" alt="img02" />
  @endif
              <figcaption>
                <p>2880 x 1297</p>
                <a href="#image-modal" class="modal-trigger">View more</a>
              </figcaption>
            </figure>
          </div>
    @include('admin.service.modals.image-modal')

        </div>
                  </div>
              </div>
          </div>

<!-- Value Section -->


  <div class="section">
    <div class="card">
        <div class="card-content">
            <h5 class="card-title">Values</h5>
            <div class="collection" style="padding: 2em; padding-bottom: 1em;">
          <form method="POST" action="{{ route('sort.value') }}">
            @csrf
  @if (count($values) > 0)
            <div  id="simpleList">
          @foreach($values as $value)
                <span style="cursor: grab;" class="chip hoverable">{{ $value->value }}<i class="close material-icons">drag_handle</i>
                  <input type="hidden" name="order[]" value="{{ $value->id }}">
                </span>
          @endforeach
            </div>
            <script>
              
    Sortable.create(simpleList, {
      animation: 150 
    }); 
            </script>
        @else
              <span class="chip hoverable">Design for Sustainability <i class="close material-icons">drag_handle</i></span>
              <span class="chip hoverable">Innovative Design <i class="close material-icons">drag_handle</i></span>
              <span class="chip hoverable">Experienced Team<i class="close material-icons">drag_handle</i></span>
              <span class="chip hoverable">Honesty & Integrity<i class="close material-icons">drag_handle</i></span>
              <span class="chip hoverable">Attention to Details<i class="close material-icons">drag_handle</i></span>
              <span class="chip hoverable">Quality Craftsmanship<i class="close material-icons">drag_handle</i></span>
        @endif
        <!-- <div class="divider mt-2 mb-2"></div> -->
      <div class="progress collection">
        <div id="sort_value-preloader" class="indeterminate" style="display:none;
        border:2px #ebebeb solid"></div>
      </div>
        <div class="row">
          @if(count($values) > 1)
              <button id="saveOrderButton" href="#!" class="chip z-depth-1 center ml-2" style="border: none; cursor: pointer;">Re-arrange</button>
          @endif
        </form>
          @if(count($values) > 0)
              <a href="{{ route('edit.values') }}" class="modal-trigger red-text right ml-1 mr-2"><i class="material-icons vertical-align-middle dark-small-ico-bg">edit</i></a>
          @endif
          @if(count($values) < 6)
            <a href="#update_value" class="modal-trigger red-text right"><i class="material-icons vertical-align-middle dark-small-ico-bg">add</i></a>
          @endif
        </div>
    @include('admin.service.modals.update_value-modal')
            </div>
        </div>
    </div>
</div>
</div>

<!-- Processes -->


  <div class="col s12 m12 l8 mb-10">    
         <div class="card subscriber-list-card">
            <div class="card-content pb-1">
              <div class="row">
               <h4 class="card-title mb-0 col s6">Processes</h4>
        @if (count($processes) < 5)
            <a href="#add_process" class="modal-trigger red-text right"><i class="material-icons vertical-align-middle dark-small-ico-bg">add</i></a>
        @endif
      @include('admin.service.modals.add_process-modal')
      </div>
            </div>
            <table class="subscription-table responsive-table highlight">
               <thead>
                  <tr>
                  </tr>
               </thead>
               <tbody>
  @if (count($processes) > 0)
    @foreach($processes as $process) 
          <tr>
             <td>{{ $process->order }}</td>
             <td>{{ $process->process }}</td>
             <td><a href="#edit_process{{ $process->id }}" class="modal-trigger" ><span class="chip pink lighten-5 pink-text text-accent-2">Edit</span></a></td>
          </tr>
      @include('admin.service.modals.edit_process-modal')
    @endforeach
        @else
          <tr>
             <td>No</td> 
             <td>Process</td>
             <td><a href="#"><span class="chip pink lighten-5 pink-text text-accent-2">Edit</span></a></td>
          </tr>
        @endif
               </tbody>
            </table>
         </div>


    

      {{--@include('admin.service.modals.sort_process-modal')--}}

<!-- users view ends -->
          </div>
          <!-- <div class="content-overlay"></div> -->
        </div>
      </div>
    </div>
    <!-- END: Page Main-->



  
<script src="{{ asset('backend/assets/js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
          <script>

const parentDiv = document.getElementById('heroHeading');
const headings = parentDiv.querySelectorAll('h1');

headings.forEach(heading => {
  heading.style.fontSize = '0.9em';
});
            
          </script>
  <script>
  tinymce.init({
    selector: 'textarea#myeditorinstance', // Replace this CSS selector to match the placeholder element for TinyMCE
    plugins: 'code lists',
    height: 250,
    toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code '
  });
  
    document.getElementById("saveOrderButton").addEventListener("click", function() {
      var preloader = document.getElementById("sort_value-preloader");
      preloader.style.display = "block";
    });

      // Preloader Script
    document.getElementById("addValueBtn").addEventListener("click", function() {
      var preloader = document.getElementById("add_value-preloader");
      preloader.style.display = "block";
    });

  </script>

  <script type="text/javascript">      
      
  $(document).ready(()=>{
      $('#image').change(function(){
        const file = this.files[0];
        // console.log(file);
        if (file){
          let reader = new FileReader();
          reader.onload = function(event){
            console.log(event.target.result);
            $('#showImage').attr('src', event.target.result);
          }
          reader.readAsDataURL(file);
        }
      });
    });

  </script>


@endsection
@section('scripts')
    <script src="{{ asset('backend/assets/vendors/dropify/js/dropify.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/scripts/form-file-uploads.js') }}"></script> 
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
@endsection