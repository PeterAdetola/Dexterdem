 @extends('admin.admin_master')
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/vendors/dropify/css/dropify.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/vendors/jquery.nestable/nestable.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/vendors/hover-effects/media-hover-effects.css') }}">
    <style>
      .embossed{
        text-shadow: 2px 2px 2px white;
      }
      .border{
        border: 1px #c5cae9 solid;
      }
    </style>
@endsection
@section('admin')
   
    <!-- BEGIN: Page Main-->
    <div id="main">
      <div class="row">
        <div class="content-wrapper-before gradient-45deg-black-grey"></div>
        <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
          <!-- Search for small screen-->
          <div class="container">
            <div class="row" style="">
              <div class="col s10 m6 l6">
                <h5 class="breadcrumbs-title mt-0 mb-0"><span>Welcome Admin! </span></h5>
                <p>Right here every aspect of the website can be edited. Explore...</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col s12">
          <div class="container">
            <div class="section">
    <div class="card">
        <div class="card-content pb-5">
          <h5 class="card-title">Hero Section</h5>
    @php
    $heroSection = getHeroSection();
    $noHeading = empty($heroSection->heading)
    @endphp
    @if($noHeading)
           <h5 class="center">
            <div class="collection" style=" padding: 0.5em;">
                                Transform your<br>
                  Vision into Reality<br>
              <div class="row center">
                <a href="#{{ $noHeading ? 'add_heading-modal' : 'edit_heading-modal' }}" class="modal-trigger"  style="display: relative; color: grey; z-index: 50">
                  <div class="chip"> Add Heading </div>             
                </a>
              </div>
          </div>
        </h5>
      @else
        <h5 class="center">
          <div class="collection" style=" padding: 0.5em;">
                                {!! $heroSection->heading !!}<br>
              <div class="row center">
                <a href="#{{ $noHeading ? 'add_heading-modal' : 'edit_heading-modal' }}" class="modal-trigger"  style="display: relative; color: grey; z-index: 50">
                  <div class="chip"> Edit Heading </div>             
                </a>
              </div>
          </div>
        </h5>
      @endif

    @include('admin.hero.hero_heading-modal')


          <div class="row">
            <div class="col s12 m6 grid">
              <div class="row">
    @php
    $noImgOne = empty($heroSection->imageOne)
    @endphp
    @if($noImgOne)
                <figure class="effect-sadie">
                  <img src="{{ asset('frontend/assets/img/hero-area-banner.jpg') }}" alt="img01" />
                  <figcaption>
                    <p>1302 x 1080</p>
                    <a href="#{{ $noImgOne ? 'add_img_one-modal' : 'edit_img_one-modal' }}" class="modal-trigger">View more</a>
                  </figcaption>
                </figure>
    @else
                <figure class="effect-sadie">
                  <img src="{{ ($heroSection->imageOne) }}" alt="img01" />
                  <figcaption>
                    <p>{{ $heroSection->captionOne }}</p>
                    <a href="#{{ $noImgOne ? 'add_img_one-modal' : 'edit_img_one-modal' }}" class="modal-trigger">View more</a>
                  </figcaption>
                </figure>
    @endif

    @include('admin.hero.hero_img_one-modal')
              </div>
              <br>
              <div class="row collection" style="padding: 1em;">

    @php
    $noTagline = empty($heroSection->tagline)
    @endphp
    @if($noTagline)
              <p class="pt-2 pr-2 ">Design your Dream House </p>
              <div class="row mt-2" style="padding: 1em;">
                <a href="#{{ $noTagline ? 'add_tagline-modal' : 'edit_tagline-modal' }}" class="modal-trigger">
                  <div class="chip"> Add Tagline </div>
                </a>
              </div>
    @else
              <p class="pt-2 pr-2 ">{{ $heroSection->tagline }}</p>
              <div class="row mt-2" style="padding: 1em;">
                <a href="#{{ $noTagline ? 'add_tagline-modal' : 'edit_tagline-modal' }}" class="modal-trigger">
                  <div class="chip"> Edit Tagline </div>
                </a>
              </div>
    @endif

    @include('admin.hero.hero_tagline-modal')
              </div>
            </div>

            <div class="col s12 m6 grid">
              <div class="row collection left-align" style="padding: 1em;">
    @php
    $noSummary = empty($heroSection->summary)
    @endphp
    @if($noSummary)
            <p class="pt-2 pr-2">At Archipix, we are passionate about bringing our clients vision to life. We work closely with you. Aliquam maximus mi nec justo efficitur, quis sollicitudin sapien tempus. Vivamus dictum varius elit, ultricies sollicitudin metus fermentum vel. Maecenas eget scelerisque orci. </p>
          <div class="row mt-2" style="padding: 1em;">
            <a href="#{{ $noSummary ? 'add_summary-modal' : 'edit_summary-modal' }}" class="modal-trigger" style="display: relative; color: grey; z-index: 50">
              <div class="chip"> Add Summary </div>
            </a>
          </div>
    @else
          <p class="pt-2 pr-2 ">{!! $heroSection->summary !!}</p>
          <div class="row mt-2" style="padding: 1em;">
            <a href="#{{ $noSummary ? 'add_summary-modal' : 'edit_summary-modal' }}" class="modal-trigger" style="display: relative; color: grey; z-index: 50">
              <div class="chip"> Edit Summary </div>
            </a>
          </div>
    @endif
              </div>

    @include('admin.hero.hero_summary-modal')

    @php
    $noImgTwo = empty($heroSection->imageTwo)
    @endphp
    @if($noImgTwo)
            <div class="col s12 m6 grid">
              <figure class="effect-sadie">
                <img src="{{ asset('frontend/assets/img/hero-banner-2.jpg') }}" alt="img02" />
                <figcaption>
                  <p>526 x 408</p>
                  <a href="#{{ $noImgTwo ? 'add_img_two-modal' : 'edit_img_two-modal' }}" class="modal-trigger">View more</a>
                </figcaption>
              </figure>
            </div>
    @else
            <div class="col s12 m6 grid">
              <figure class="effect-sadie">
                <img src="{{ url($heroSection->imageTwo) }}" alt="img02" />
                <figcaption>
                  <p>{{ $heroSection->captionTwo }}</p>
                  <a href="#{{ $noImgTwo ? 'add_img_two-modal' : 'edit_img_two-modal' }}" class="modal-trigger">View more</a>
                </figcaption>
              </figure>
            </div>
    @endif

    @include('admin.hero.hero_img_two-modal')
            </div>
          </div>

        </div>
    </div>
</div>
<!-- START RIGHT SIDEBAR NAV -->
<!-- END RIGHT SIDEBAR NAV -->
          </div>
          <div class="content-overlay"></div>
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

  tinymce.init({
    selector: 'textarea#myeditorinstanceII', // Replace this CSS selector to match the placeholder element for TinyMCE
    plugins: 'code lists',
    height: 200,
    toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code '
  }); 
</script>
@endsection

@section('scripts')
    <script src="{{ asset('backend/assets/vendors/dropify/js/dropify.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/scripts/form-file-uploads.js') }}"></script> 
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
    <!-- <script src="{{ asset('backend/assets/js/scripts/extra-components-nestable.js') }}"></script>  -->
@endsection