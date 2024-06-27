
@extends('admin.admin_master')
@section('admin')
@php
$pageTitle = 'Edit Values';
@endphp

@section('headScript')
<script src="{{ asset('backend/assets/vendors/sortable/sortable.js') }}"></script>
@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/vendors/dropify/css/dropify.min.css') }}">
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
                  <li class="breadcrumb-item"><a href="{{ route('view.services_extra') }}">Service Extra</a>
                  </li>
                  <li class="breadcrumb-item active">{{ $pageTitle }}
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div><br>
        <div class="col s12">
          <div class="container">
            <!-- users view start -->



  <div class="section">
    <div class="card">
        <div class="card-content">
            <h5 class="card-title">Values</h5>
            <div class="collection" style="padding: 2em; padding-bottom: 1em;">

            <div  id="simpleList">
          @foreach($values as $value)
                <a href="#update_value{{ $value->id }}" class="modal-trigger"><span 
                  style="border-top: solid #ebebeb 1px;
                  border-bottom: solid white 1px;
                  " class="chip">{{ $value->value }}<i class="close material-icons">edit</i>
                  <input type="hidden" name="order[]" value="{{ $value->id }}">
                </span></a>
    @include('admin.service.modals.update_value-modal')
          @endforeach
            </div>

        <div class="divider mt-2 mb-2"></div>

        <div class="row">
              <a href="{{ route('view.services_extra') }}" class="red-text right"><i class="material-icons vertical-align-middle dark-small-ico-bg">done</i></a>
        </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- users view ends -->
          </div>
        </div>
      </div>
    </div>
    <!-- END: Page Main-->



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