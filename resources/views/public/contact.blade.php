@extends('public.mainframe')
@section('content')
@php
  $innerHero = getInnerHero();

  if(count($innerHero) > 0){  
    $pageHero = getInnerHero()->where('page', '=', 'contact')->first();
  } else {
    $pageHero = '';
  }

  $noContent = empty($pageHero->summary);
  $noImage = empty($pageHero->image);

$separators = ",|-|_|\n";
$contact = getContact()->first();
$smedia = getSmedia();

if (Session::has('message') ) {
    $msg = Session::get('message');
} else {
    $msg = 'Message not sent';
}
@endphp

    <!-- Contact Section  -->

    <div class="contact-section section-padding pt-0">
        <div class="container">
            <div class="col-xl-12 col-lg-12">
                <div class="section-title mt-20">
                    <h1>Contact Us <span><i class="las la-arrow-right"></i></span></h1>
                </div>
            </div>  
            <div class="row justify-content-center mt-60">
                <div class="col-xl-12">
  @if(!$noImage) 
              <img src="{{ url($pageHero->image) }}" alt="" />
  @else 
                    <img src="{{ asset('frontend/assets/img/contact-bg.jpg') }}" alt="">
  @endif
                </div>                              
            </div>
            <div class="row mt-60">
                <div class="col-xl-5 col-lg-5">
                    <div class="contact-text">
  @if(!$noContent) 
                {!! $pageHero->summary !!}
  @else 
                        <p>Have a question about our services or want to get started on you design project? We are here to help! Fill out the contact form below and one of our team members will get back to you within 24 hours. Alternatively, you can reach out to us via phone or email using the contact information provided below. We can't wait to hear from you!</p>
  @endif
                    </div>
                </div>
                <div class="offset-xl-1 col-xl-6 offset-lg-1 col-lg-6">
                    <div class="subimit-form-wrap">
                        <div class="section-title">
                            <h2>Submit Form <span><i class="las la-arrow-right"></i></span></h2>
                        </div>

                        <form method="post" action="{{ route('send.enquiry') }}">
                            <div class="row">
                        <div class="col-12">
                            <div id="msg" class="alert alert-success contact__msg" style="display: none;" role="alert">
                                {{ $msg }}
                            </div>
                        </div>
                    </div>
                            @csrf
                            <input name="name" type="text" placeholder="Your Name" required> 
                            <input name="email" type="email" placeholder="Email" required>
                            <input name="phone" type="text" placeholder="Phone Number" required>
                            <textarea name="message" id="message" cols="30" rows="4" placeholder="Message" required></textarea>
                            <!-- <input type="submit" value="Submit"> -->
                            <input name="submit" type="submit"  value="Submit">
                        </form>
                    </div>
                </div>
            </div>
            <div class="contact-info-wrap">
                <div class="row mt-60">
                    <div class="col-xl-6">
                    <img src="{{ asset('frontend/assets/img/contact-img.jfif') }}" alt="">
                        <!-- <div class="google-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3690.404245521138!2d91.80989606467384!3d22.338360085303748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sdewanhat%20near%20Chattogram!5e0!3m2!1sen!2sbd!4v1677069314806!5m2!1sen!2sbd" width="600" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>        
                        </div> -->
                    </div>
                    <div class="col-xl-6">
                        <div class="contact-info">
                            <div class="section-title">
                                <h2>Contact Info <span><i class="las la-arrow-right"></i></span></h2>
                            </div>
                            <div class="contact-info-inner">
                                <div class="single-contact-info">
                                    <p>Email</p>
            @if(!empty($contact->email))
            @php
                $email = $contact->email;
                $emails = preg_split("#(?<=$separators)#", $email); 
            @endphp
                            @foreach($emails as $email)
                            <a href="mailto:{{ strip_tags($email) }}"><h4>{{ strip_tags($email) }}</h4></a>
                            @endforeach
            @else
                            <h4 href="">user@email.com</h4>
            @endif
                                </div>
                                <div class="single-contact-info">
                                    <p>Phone</p>
        @if(!empty($contact->phone))
            @php
                $phone = $contact->phone;
                $phones = preg_split("#(?<=$separators)#", $phone); 
            @endphp
            @foreach($phones as $phone)
                            <a style="font-size: 0.95em; color: white;" href="tel:+{{ preg_replace('/\D/', '', $phone) }}"><h4>{{ strip_tags($phone) }}</h4></a><br/>
            @endforeach
        @else
                            <h4 style="font-size: 1em; color: white;">+234 XXX XXX XXXX</h4>
        @endif
                                    <!-- <h4>(123) 456-7890</h4> -->
                                </div>
                        @if(!empty($contact->address))
                                <div class="single-contact-info">
                                    <p>Address</p>
                                    <h4>{{strip_tags($contact->address)}}</h4>
                                    <!-- <h4>123, Main Street, Suite 456, California, USA</h4> -->
                                </div> 
                        @endif 
                                <div class="social-area">
            @foreach($smedia as $smedia)
                @if($smedia->name === 'Facebook')
                                    <a href="{{ $smedia->link }}"><i class="fab la-facebook-f"></i></a>
                @elseif($smedia->name === 'LinkedIn')
                                    <a href="{{ $smedia->link }}"><i class="fab la-linkedin-in"></i></a>
                @elseif($smedia->name === 'Instagram')
                                    <a href="{{ $smedia->link }}"><i class="fab la-instagram"></i></a> 
                @elseif($smedia->name === 'Twitter')
                                    <a href="{{ $smedia->link }}"><i class="fab la-linkedin"></i></a>
                @endif
            @endforeach
                                   <!--  <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-skype"></i></a> -->
                                </div>                          
                            </div>
                        </div>
                    </div>
                </div>        
            </div>            
        </div>
    </div>
<script>
    @if(Session::has('message'))
      document.getElementById("msg").style.display = "block";
    @endif
</script>
@endsection