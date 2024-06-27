@php
$separators = ",|-|_|\n";
$contact = getContact()->first();
$smedia = getSmedia();
$hero = App\Models\HeroSection::first();
@endphp
    <div class="newsletter-section">
        <div class="container">
            <div class="row newsletter-inner gray-bg align-items-center">
                <div class="col-xl-7 col-lg-7">
                    <div class="section-title">
                        <h2>Do you have any project in mind? <span><i class="las la-arrow-right"></i></span> </h2>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5">
                    <div class="cta-content">
                        <p>Get in touch with us and we will handle your project from planning to execution. <a href="project.html">Contact us</a> right here </p>
                        <!-- <h3>We will deliver our best content straight to your inbox.</h3> -->
                        <!-- <div class="subscribed-form">
                            <form>
                                <input type="text" placeholder="Type your Email">
                                <input class="bordered-btn" type="submit" value="Sign Up">
                            </form>

                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Area -->

    <footer class="footer-area">
        <div class="container">
            <div class="footer-up">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <a href="{{ url('/') }}" class="logo"><img src="{{ asset('frontend/assets/img/wordmark.png') }}" style="height: 2.5em;" alt="Dexterdem & Associates" /></a>
                        
                        <p>{{ $hero->tagline }}</p>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <h5>{{ empty($contact->address) ? 'Contact' : 'Address' }}</h5>
                        @if(!empty($contact->address))
                        <p>{!! $contact->address !!}</p>
                        @endif

                        <div class="company-email">
            @if(!empty($contact->email))
            @php
                $email = $contact->email;
                $emails = preg_split("#(?<=$separators)#", $email); 
            @endphp
                            @foreach($emails as $email)
                            <a href="mailto:{{ strip_tags($email) }}">{{ strip_tags($email) }}</a>
                            @endforeach
            @else
                            <a href="">user@email.com</a>
            @endif
                        </div>
                        <div class="phone-number mt-5">
        @if(!empty($contact->phone))
            @php
                $phone = $contact->phone;
                $phones = preg_split("#(?<=$separators)#", $phone); 
            @endphp
            @foreach($phones as $phone)
                            <p><a style="font-size: 0.95em; color: white;" href="tel:+{{ preg_replace('/\D/', '', $phone) }}">{{ strip_tags($phone) }}</a></p>
            @endforeach
        @else
                            <p style="font-size: 1em; color: white;">+234 XXX XXX XXXX</p>
        @endif
                        </div>

                    </div>
                    <div class="col-lg-2 offset-lg-1 col-md-6 com-sm-12">
                        <h5>Links</h5>
                        <ul>
                            <li>
                                <a href="{{route('aboutus.page')}}">About</a>
                                <a href="{{route('services.page')}}">Services</a>
                                <a href="{{route('projects.page')}}">Project</a>
                                <a href="{{route('contact.page')}}">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <h5>Get in Touch</h5>
                        @if(count($smedia) > 0)
                        <ul>
                            <li>
                                <div class="social-area">
            @foreach($smedia as $smedia)
                @if($smedia->name === 'Facebook')
                                    <a href="{{ $smedia->link }}"><i class="lab la-facebook-f"></i>Facebook</a>
                @elseif($smedia->name === 'LinkedIn')
                                    <a href="{{ $smedia->link }}"><i class="lab la-linkedin-in"></i>Linkedin</a>
                @elseif($smedia->name === 'Instagram')
                                    <a href="{{ $smedia->link }}"><i class="lab la-instagram"></i>Instagram</a> 
                @elseif($smedia->name === 'Twitter')
                                    <a href="{{ $smedia->link }}"><i class="lab la-linkedin"></i>Twitter</a>
                @endif
            @endforeach
                                </div>
                            </li>
                        </ul>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </footer>

    <!-- Footer Bottom Area -->

    <div class="footer-bottom">
        <div class="container">
            <div class="row justify-content-center align-items-center justify-content-center">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <p class="copyright-line">© 2024 <a style="color: white; font-size: 1em" onclick="return false" ondblclick="location=this.href" href="{{ url('login') }}">Dexterdem &amp; Associates.</a> All rights reserved.</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 text-md-end">
                    <!-- <p class="privacy">Privacy Policy | Terms &amp; Conditions</p> -->

                            <p> Made by Pacmedia Creatives</p> 
                </div>
            </div>
        </div>
    </div>