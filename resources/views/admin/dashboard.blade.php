 @extends('admin.admin_master')
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/vendors/dropify/css/dropify.min.css') }}">
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

    <!-- Hero Section -->
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

<!-- About Summary -->
      <div class="card">
          <div class="card-content">
            <div class="row">
              <div class="col s12 m6 l10">
                <h4 class="card-title">About us</h4>
              </div>
            </div>
            <div class="divider"></div>


    @php
      $aboutSum = getAboutSummary()->first();
      $noAboutSum = empty($aboutSum->summary);
      $noAboutImg = empty($aboutSum->image);
    @endphp

    <div class="row mt-1">
    @if(!$noAboutSum)
      <div class="col s12 m6 mt-1 collection" style="margin: 2em; padding: 2em;">
        <p>{!! $aboutSum->summary !!}</p>
        <a href="#{{ $noAboutSum ? 'add_abtSum-modal' : 'edit_abtSum-modal' }}" class="modal-trigger chip mt-2">Edit Summary</a>
      </div>
    @else
      <div class="col s12 m6 mt-1 collection" style="padding: 3em;">
        <p>Archipix is a team of experienced architects and interior designers who are passionate about creating beautiful, functional spaces. We believe that good design should be accessible to everyone, and we work hard to make sure that our clients visions become a reality.</p>
      <a href="#{{ $noAboutSum ? 'add_abtSum-modal' : 'edit_abtSum-modal' }}" class="modal-trigger chip mt-2">Add Summary</a>
      </div>
    @endif

      <div class="col s12 m3 grid">
    @if(!$noAboutImg)
        <figure class="effect-sadie">
          <img src="{{ $aboutSum->image }}" />
          <figcaption>
            <a href="#edit_img-modal" class="modal-trigger">View more</a>
          </figcaption>
        </figure>
    @else
        <figure class="effect-sadie">
          <img src="{{ asset('frontend/assets/img/about/about-3.jpg') }}" />
          <figcaption>
            <p>1144 x 1300</p>
            <a href="#add_img-modal" class="modal-trigger">View more</a>
          </figcaption>
        </figure>
    @endif
      </div>
    </div>

    @include('admin.about_summary.aboutSum-modal')
    @include('admin.about_summary.aboutImg-modal')
    </div>
</div>

<div class="divider mt-3" style="margin-bottom: -2em;"></div>
<h4 class="small-heading">
  <span class="embossed grey-text" style="background-color: #fafafa">Other Sections &nbsp;&nbsp;</span>
</h4>

    @php
    $services = getServices();
    $members = getMembers();
    $projects = getProjects();
    $testimonials = getTestimonials();
    $clients = getClients();
    $stats = getStats();
    $features = getFeatures();
    @endphp
    <div class="row">      
      <div class="col s12 m6 card-width">
        <div class="card border-radius-6">
          <div class="card-content center-align">
            <i class="material-icons grey-text mb-5">highlight</i>
            <h4 class="m-0"><b>{{ count($services) }}</b></h4>
            <p>{{ (count($services) > 1)? 'Services' : 'Service' }}</p>
            <p class="mt-3">
              <a href="{{ route('view.services') }}" class="red-text"><i class="material-icons vertical-align-middle small-ico-bg">arrow_forward</i></a>
            </p>
          </div>
        </div>
      </div>

      <div class="col s12 m6 card-width">
        <div class="card border-radius-6">
          <div class="card-content center-align">
            <i class="material-icons grey-text mb-5">business_center</i>
            <h4 class="m-0"><b>{{ count($projects) }}</b></h4>
            <p>{{ (count($projects) > 1)? 'Projects' : 'Project' }}</p>
            <p class="mt-3">
              <a href="{{ route('view.projects') }}" class="red-text"><i class="material-icons vertical-align-middle small-ico-bg">arrow_forward</i></a>
            </p>
          </div>
        </div>
      </div>

        <div class="col s12 m6 l4 card-width">
          <div class="card border-radius-6">
            <div class="card-content center-align">
              <i class="material-icons grey-text mb-5">people</i>
              <h4 class="m-0"><b>{{ count($members) }}</b></h4>
              <p>{{ (count($members) > 1)? 'Team Members' : 'Team Member' }}</p>
            <p class="mt-3">
              <a href="{{ route('view.members') }}" class="red-text"><i class="material-icons vertical-align-middle small-ico-bg">arrow_forward</i></a>
            </p>
            </div>
          </div>
        </div>
      
        <div class="col s12 m6 l4 card-width">
          <div class="card border-radius-6">
            <div class="card-content center-align">
              <i class="material-icons grey-text mb-5">message</i>
              <h4 class="m-0"><b>{{ count($testimonials) }}</b></h4>
              <p>{{ (count($testimonials) > 1)? 'Testimonials' : 'Testimonial' }}</p>
            <p class="mt-3">
              <a href="{{ route('view.testimonials') }}" class="red-text"><i class="material-icons vertical-align-middle small-ico-bg">arrow_forward</i></a>
            </p>
            </div>
          </div>
        </div>
      
        <div class="col s12 m6 l4 card-width">
          <div class="card border-radius-6">
            <div class="card-content center-align">
              <i class="material-icons grey-text mb-5">group_work</i>
              <h4 class="m-0"><b>{{ count($clients) }}</b></h4>
              <p>{{ (count($clients) > 1)? 'Clients' : 'Client' }}</p>
            <p class="mt-3">
              <a href="{{ route('view.clients') }}" class="red-text"><i class="material-icons vertical-align-middle small-ico-bg">arrow_forward</i></a>
            </p>
            </div>
          </div>
        </div>

      <div class="col s12 m6 card-width">
        <div class="card border-radius-6">
          <div class="card-content center-align">
            <i class="material-icons grey-text mb-5">insert_chart</i>
            <h4 class="m-0"><b>{{ count($stats) }}</b></h4>
            <p>{{ (count($stats) > 1)? 'Stats' : 'Stat' }}</p>
            <p class="mt-3">
              <a href="{{ route('view.stats') }}" class="red-text"><i class="material-icons vertical-align-middle small-ico-bg">arrow_forward</i></a>
            </p>
          </div>
        </div>
      </div>

      <div class="col s12 m6 card-width">
        <div class="card border-radius-6">
          <div class="card-content center-align">
            <i class="material-icons grey-text mb-5">check_box</i>
            <h4 class="m-0"><b>{{ count($features) }}</b></h4>
            <p>{{ (count($features) > 1)? 'Features' : 'Feature' }}</p>
            <p class="mt-3">
              <a href="{{ route('view.features') }}" class="red-text"><i class="material-icons vertical-align-middle small-ico-bg">arrow_forward</i></a>
            </p>
          </div>
        </div>
      </div>

    </div>

    
<div class="divider mt-2" style="margin-bottom: -2em;"></div>
<h4 class="small-heading">
  <span class="embossed grey-text" style="background-color: #fafafa">Contact Section &nbsp;&nbsp;</span>
</h4>


  <!-- users view card details start -->
  <div class="card mb-5">
    <div class="card-content">
    @php
    $contact = getContact();
    $thereIsContact = (count($contact) > 0);
    @endphp
    @if(count($contact) > 0)
    @foreach($contact as $contact)

      <div class="row indigo lighten-5 border-radius-4 mb-2 pt-1 pb-1">
        <div class="col s12 m4" style="padding: 2em">
          <h6 class="indigo-text ml-2">
            <span style="
            position: relative;
            background-color: #e8eaf6; 
            z-index: 1;
            ">&nbsp; 

          Phone 

        &nbsp;</span>
          </h6>
          <div class="collection border" style="padding: 1em 2em; margin-top: -1em; z-index: 0;">
          <h6 class="m-0"><span>{!! $contact->phone !!}</span></h6>
        </div>
        </div>
        <div class="col s12 m4" style="padding: 2em">
          <h6 class="indigo-text ml-2">
            <span style="
            position: relative;
            background-color: #e8eaf6; 
            z-index: 1;
            ">&nbsp;

          Email

        &nbsp;</span>
          </h6>
          <div class="collection border" style="padding: 1em 2em; margin-top: -1em; z-index: 0;">
          <h6 class=" m-0"><span>{!! $contact->email !!}</span></h6>
        </div>
        </div>


        <div class="col s12 m4" style="padding: 2em; visibility: {{($contact->address) ? 'visible' : 'hidden'}};">
          <h6 class="indigo-text ml-2">
            <span style="
            position: relative;
            background-color: #e8eaf6;
            z-index: 1;
            ">&nbsp;

             Address 

           &nbsp;</span>
          </h6>
          <div class="collection border" style="padding: 1em 2em; margin-top: -1em; z-index: 0;">
            <p class="m-0">{!! $contact->address !!}</p>
          </div>
        </div>


        <div class="right mr-2 {{($contact->address) ? '' : 'mt-5'}}">
          @if($thereIsContact)
              <a href="#edit-contact-modal" class="modal-trigger red-text"><i class="material-icons vertical-align-middle dark-small-ico-bg">edit</i></a>
          @else              
              <a href="#edit-contact-modal" class="modal-trigger red-text"><i class="material-icons vertical-align-middle dark-small-ico-bg">add</i></a>
          @endif
        </div>
      </div>

    @include('admin.contact.modals.edit-contact-modal')
    @endforeach
    @else
      <div class="row indigo lighten-5 border-radius-4 mb-2 pt-1 pb-1">
        <div class="col s12 m4" style="padding: 2em">
          <h6 class="indigo-text ml-2">
            <span style="
            position: relative;
            background-color: #e8eaf6; 
            z-index: 1;
            ">&nbsp; Phone &nbsp;</span>
          </h6>
          <div class="collection border" style="padding: 2em 4em; margin-top: -1em; z-index: 0;">
          <h6 class="m-0"><span>234-XXX-XXX-XXXX</span></h6>
        </div>
        </div>
        <div class="col s12 m4" style="padding: 2em">
          <h6 class="indigo-text ml-2">
            <span style="
            position: relative;
            background-color: #e8eaf6; 
            z-index: 1;
            ">&nbsp; Email &nbsp;</span>
          </h6>
          <div class="collection border" style="padding: 2em 4em; margin-top: -1em; z-index: 0;">
          <h6 class=" m-0"><span>company@email.com</span></h6>
        </div>
        </div>
        <div class="col s12 m4" style="padding: 2em">
          <h6 class="indigo-text ml-2">
            <span style="
            position: relative;
            background-color: #e8eaf6; 
            z-index: 1;
            ">&nbsp; Address &nbsp;</span>
          </h6>
          <div class="collection border" style="padding: 1em 2em; margin-top: -1em; z-index: 0;">
          <p class="m-0">0, Name of the Street, At a particular rd. Name of state</p>
        </div>
        </div>
        <div class="right mr-2">
              <a href="#add-contact-modal" class="modal-trigger red-text"><i class="material-icons vertical-align-middle dark-small-ico-bg">arrow_forward</i></a>
        </div>
      </div>
    @include('admin.contact.modals.add-contact-modal')
    @endif

    @php
    $smedia = getSmedia();
    @endphp
      <div class="row">
        <div class="col s12">
          <h6 class="mb-2 mt-2"><i class="material-icons">link</i> Social Links</h6>
          <table class="striped">
    @if(count($smedia) > 0)
            <tbody>
    @foreach($smedia as $smedia)
              <tr>
                <td>{{ $smedia->name }}:</td>
                <td><a href="#">{{ $smedia->link }}</a></td>
                <td><a href="#edit-smedia-modal{{ $smedia->id }}" class="modal-trigger"><i class="material-icons vertical-align-middle dark-small-ico-bg">edit</i></a></td>
    @include('admin.contact.modals.edit-smedia-modal')
              </tr>
    @endforeach
    @else
              <tr>
                <td>Social Media type:</td>
                <td><a href="#">social media url</a></td>
              </tr>
            </tbody>
    @endif
          </table>
        <div class="right mt-2">
              <a href="#add-smedia-modal" class="modal-trigger red-text"><i class="material-icons vertical-align-middle dark-small-ico-bg">add</i></a>
        </div>
      </div>
    </div>
    @include('admin.contact.modals.add-smedia-modal')
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