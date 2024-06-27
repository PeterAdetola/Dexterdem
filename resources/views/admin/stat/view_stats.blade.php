
@extends('admin.admin_master')
@section('admin')
@php
$pageTitle = 'View Stats';
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
<div class="row"> 
  <div class="col s12 m12 l8 mb-10">    
         <div class="card subscriber-list-card">
            <div class="card-content pb-1">
               <h4 class="card-title mb-0">Feature List</h4>
            </div>
            <table class="subscription-table responsive-table highlight">
               <thead>
                  <tr>
                  </tr>
               </thead>
               <tbody>
  @if (count($stats) > 0)
    @foreach($stats as $stat) 
          <tr>
             <td>{{ $stat->key }}</td>
             <td>{{ $stat->value }}</td>
             <td><a href="#edit_stat-modal{{ $stat->id }}" class="modal-trigger" ><span class="chip pink lighten-5 pink-text text-accent-2">Edit</span></a></td>
             <td class="center-align"><a href="#delete_modal{{ $stat->id }}" class="modal-trigger"><i class="material-icons  small-ico-bg red-text">delete</i></a></td>
             <input type="hidden" name="order[]" value="{{ $stat->id }}">
          </tr>
      @include('admin.stat.modals.edit_stat-modal')
      @include('admin.stat.modals.delete_stat-modal')
    @endforeach
        @else
          <tr>
             <td>Stat name</td>
             <td>Value</td>
             <td><a href="#"><span class="chip pink lighten-5 pink-text text-accent-2">Edit</span></a></td>
             <td class="center-align"><a href="#"><i class="material-icons grey-text">delete</i></a></td>
          </tr>
        @endif
               </tbody>
            </table>
         </div>


    
@if (count($stats) > 1)
<div class="row center-align">
    <a href="#sort_stat-modal" class="modal-trigger" type="submit" class="waves-effect chip btn-flat right mb-10"><div class="chip">&nbsp;&nbsp;Re-arrange&nbsp;&nbsp;</div></a>
</div>
@endif
      @include('admin.stat.modals.sort_stat-modal')
</div>



@if (count($stats) < 4)
  <div style="bottom: 50px; right: 19px;" class="fixed-action-btn direction-top"><a href="#add_stat-modal" class="modal-trigger btn-floating btn-large gradient-45deg-black-grey gradient-shadow"><i class="material-icons">add</i></a>
  </div>
@endif

    @include('admin.stat.modals.add_stat-modal')

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