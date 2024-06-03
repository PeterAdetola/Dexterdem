
@extends('admin.admin_master')
@section('admin')
@php
$pageTitle = 'Edit Service';
@endphp



@section('headScript')
<script src="{{ asset('backend/assets/vendors/sortable/sortable.js') }}"></script>
@endsection
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/vendors/dropify/css/dropify.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/vendors/jquery.nestable/nestable.css') }}">
@endsection 
<style>
    /* Optional CSS to style the preview area */
    .preview-container {
      display: flex;
      flex-wrap: wrap;
      margin-top: 10px;
    }
    .preview-container img {
      width: 100px;
      height: 100px;
      margin: 5px;
      object-fit: cover;
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
                  <li class="breadcrumb-item active">
                    <a href="{{ route('view.services') }}">View Services</a>
                  </li>
                  <li class="breadcrumb-item active">{{ $pageTitle }}</li>
                </ol>
              </div>

<!-- Somethings removed here -->

            </div>
          </div>
        </div><br>
        <div class="col s12">
          <div class="container">
            <!-- users view start -->
<div class="row"> 
  <div class="col s12 m12 l12">


<div class="card mb-10" style="padding:1em;">
      <h6 class="card-title ml-2">{{ $pageTitle }}</h6>
      <div class="divider mt-1"></div>

      <!-- <div class="progress collection mb-2">
        <div id="preloader" class="indeterminate" style="display:none; 
        border:2px #ebebeb solid"></div>
      </div> -->
      
      <!-- <div class="card-body"> -->
       <div class="row">
        <div class="col s12" id="account">
          <!-- users edit media object ends -->
          <!-- users edit account form start -->
          <form method="POST" action="{{ route('update.service') }}" enctype="multipart/form-data">
            <input type="hidden" name="id" value="{{ $service->id }}">
            @csrf

            <div class="row">
              <div class="col s12 m6 l5 mt-7">
                  <input name="image" type="file" data-default-file="{{ url($service->image) }}" id="input-file-now-custom-2" class="dropify" data-height='250' />  
                  @error('image')
                  <small class="errorTxt3  red-text">{{ $message }}*</small>
                  @enderror 
                  <small class="errorTxt3  grey-text">Edit service image in JPG (612 x 344)</small>
              </div>


              <div class="col s12 m6">
                <div class="row pt-10">

                  <div class="col s12 input-field">
                    <input id="name" name="name" type="text" value="{{ $service->name }}" class="validate" data-error=".errorTxt3" />
                    <label for="name">Service Name</label>
                    @error('name')
                    <small class="errorTxt3 red-text">{{ $message }}*</small>
                    @enderror
                  </div>

                  <div class="col s12 input-field">
                    <label for="summary">Summary</label>
                    <textarea id="icon_prefix2" name="summary" class="materialize-textarea" >{{ $service->summary }}</textarea>
                    @error('short_title')
                    <small class="errorTxt3  red-text">{{ $message }}*</small>
                    @enderror
                  </div>

                    

                </div>  
              </div>
            </div>

              <div class="card-action col s12 mt-2"> 
                  <div class="progress collection mb-2">
                    <div id="preloader" class="indeterminate" style="display:none;
                    border:2px #ebebeb solid"></div>
                  </div>  
                  <a href="#delete-service-modal" class="modal-trigger red-text left mt-1"><i class="material-icons vertical-align-middle dark-small-ico-bg">delete</i></a>
                <button  id="createServiceBtn" type="submit" class="modal-action waves-effect waves-red btn-large right">Save</button>
                
          </form>
          <!-- users edit account form ends -->
        </div>

      </div>
      <!-- </div> -->
</div>
  </div>



    {{--@include('admin.service.modals.edit-imgs-modal')--}}
    @include('admin.service.modals.delete-service-modal')
    {{--@include('admin.service.modals.sort-imgs-modal')--}}

</div>
<!-- users view ends -->
          </div>
          <!-- <div class="content-overlay"></div> -->
        </div>
      </div>
    </div>
    <!-- END: Page Main-->


<script src="{{ asset('backend/assets/js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
<script>
  tinymce.init({
    selector: 'textarea#myeditorinstance', // Replace this CSS selector to match the placeholder element for TinyMCE
    plugins: 'code lists',
    height: 250,
    toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code '
  }); 


      // Preloader Script

      document.getElementById("createServiceBtn").addEventListener("click", function() {
        var preloader = document.getElementById("preloader");
        preloader.style.display = "block";
      });


</script>



@endsection
@section('scripts')
    <script src="{{ asset('backend/assets/vendors/dropify/js/dropify.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/scripts/form-file-uploads.js') }}"></script> 
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
@endsection