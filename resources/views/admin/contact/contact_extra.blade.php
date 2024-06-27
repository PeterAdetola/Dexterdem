
@extends('admin.admin_master')
@section('admin')
@php
  $pageTitle = 'Contact Page Extras';

  $innerHero = getInnerHero();

  if(count($innerHero) > 0){
    $pageHero = getInnerHero()->where('page', '=', 'contact')->first();
  } else {
    $pageHero = '';
  }

    $noImage = empty($pageHero->image);
    $noSum = empty($pageHero->summary);
    $edit = !empty($pageHero->image) || !empty($pageHero->summary);

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
  @if(!$noSum) 
                  There is Content
  @else
                  No Content Yet
  @endif

                    <div class="divider mb-2 mt-3"></div>
                    <div class="row center">
                      <a href="#content-modal" class="modal-trigger"  style="color: grey;">
                        <div class="chip"> {{ $noSum ? 'Add Content' : 'Edit Content' }} </div>       
                      </a>
                  </div>
              </div>
    @include('admin.contact.modals.content-modal')
            </h5>
          </div>
                
          <div class="col s12 m6 grid">
            <figure class="effect-sadie">
  @if(!$noImage) 
              <img src="{{ url($pageHero->image) }}" alt="" />
  @else
          <img src="{{ asset('frontend/assets/img/contact-bg.jpg') }}" alt="img02" />
  @endif
              <figcaption>
                <p>1536 x 661</p>
                <a href="#image-modal" class="modal-trigger">View more</a>
              </figcaption>
            </figure>
          </div>
    @include('admin.contact.modals.image-modal')

        </div>
                  </div>
              </div>
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