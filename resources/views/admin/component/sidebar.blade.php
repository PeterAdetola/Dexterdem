 <!-- BEGIN: SideNav -->
@php
  $route = Route::current()->getName()
@endphp  

    <aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light sidenav-active-square">
      <div class="brand-sidebar">
        <h1 class="logo-wrapper" style="height:5em">
          <a class="brand-logo darken-1" href="index.html">
          <img style="margin-top: -0.4em; height: 1.3em;" class="hide-on-med-and-down" src="{{ asset('backend/assets/images/logo/pacmediac_logo.png') }}" alt="recordia logo"/>
          <img class="show-on-medium-and-down hide-on-med-and-up" src="{{ asset('backend/assets/images/logo/pacmediac_logo.png') }}" alt="recordia logo"/>
        </a>
        <a class="navbar-toggler" href="#">
          <i class="material-icons">radio_button_checked</i>
        </a>
      </h1>
      </div>
      <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">

        <li class="active bold"><a class="{{ ($route == 'dashboard')? 'active' : '' }} waves-effect waves-cyan " href="{{ route('dashboard') }}"><i class="material-icons">dashboard</i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
        </li>

        <li class="bold">
          <a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)">
          <i class="material-icons">highlight</i>
            <span class="menu-title" data-i18n="Service">Service</span>
          </a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li>
                <a class="{{ ($route == 'view.services_extra') || ($route == 'edit.values')? 'active' : '' }} waves-effect waves-cyan" href="{{ route('view.services_extra') }}"><i class="material-icons">radio_button_unchecked</i>
                  <span data-i18n="Service Page">Service Page</span>
                </a>
              </li> 
              <li>
                <a class="{{ ($route == 'view.services')? 'active' : '' }} waves-effect waves-cyan" href="{{ route('view.services') }}"><i class="material-icons">radio_button_unchecked</i>
                  <span data-i18n="Our Services">Our Services</span>
                </a>
              </li>              
            </ul>
          </div>
        </li>

        <li class="bold">
          <a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)">
          <i class="material-icons">business_center</i>
            <span class="menu-title" data-i18n="Projects">Project</span>
          </a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li>
                <a class="{{ ($route == 'view.projects_extra')? 'active' : '' }} waves-effect waves-cyan" href="{{ route('view.projects_extra') }}"><i class="material-icons">radio_button_unchecked</i>
                  <span data-i18n="Home Slide">Project Page</span>
                </a>
              </li> 
              <li>
                <a class="{{ ($route == 'view.projects')? 'active' : '' }} waves-effect waves-cyan" href="{{ route('view.projects') }}"><i class="material-icons">radio_button_unchecked</i>
                  <span data-i18n="Projects">Our Projects</span>
                </a>
              </li>              
            </ul>
          </div>
        </li>

        <li class="bold">
          <a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)">
          <i class="material-icons">people</i>
            <span class="menu-title" data-i18n="Home Slide Setup">Our Team</span>
          </a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li>
                <a class="{{ ($route == 'view.team_intro')? 'active' : '' }} waves-effect waves-cyan" href="{{ route('view.team_intro') }}"><i class="material-icons">radio_button_unchecked</i>
                  <span data-i18n="Home Slide">Our Team Intro</span>
                </a>
              </li> 
              <li>
                <a class="{{ ($route == 'view.members')? 'active' : '' }} waves-effect waves-cyan" href="{{ route('view.members') }}"><i class="material-icons">radio_button_unchecked</i>
                  <span data-i18n="Home Slide">Our Team Members</span>
                </a>
              </li>              
            </ul>
          </div>
        </li>

        <li class="active bold"><a class="{{ ($route == 'view.testimonials')? 'active' : '' }} waves-effect waves-cyan " href="{{ route('view.testimonials') }}"><i class="material-icons">chat</i><span class="menu-title" data-i18n="Dashboard">Testimonial</span></a>
        </li>

        <li class="active bold"><a class="{{ ($route == 'view.clients')? 'active' : '' }} waves-effect waves-cyan " href="{{ route('view.clients') }}"><i class="material-icons">group_work</i><span class="menu-title" data-i18n="Dashboard">Clients</span></a>
        </li>

        <li class="active bold"><a class="{{ ($route == 'view.features')? 'active' : '' }} waves-effect waves-cyan " href="{{ route('view.features') }}"><i class="material-icons">check_box</i><span class="menu-title" data-i18n="Dashboard">Feature</span></a>
        </li>

        <li class="active bold"><a class="{{ ($route == 'view.stats')? 'active' : '' }} waves-effect waves-cyan " href="{{ route('view.stats') }}"><i class="material-icons">insert_chart</i><span class="menu-title" data-i18n="Dashboard">Stat</span></a>
        </li>

        <li class="active bold"><a class="{{ ($route == 'view.contact_extra')? 'active' : '' }} waves-effect waves-cyan " href="{{ route('view.contact_extra') }}"><i class="material-icons">message</i><span class="menu-title" data-i18n="Contact">Contact Page</span></a>
        </li>

      </ul>
      <!-- <div class="navigation-background"></div> -->
      <a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>


    </aside>
    <!-- END: SideNav