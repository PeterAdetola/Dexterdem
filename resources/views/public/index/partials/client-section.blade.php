@php
$clients = getClients()->sortBy('order');
@endphp
@if (count($clients) > 0)
    <div class="client-area section-padding pt-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="client-wrap owl-carousel">
        @foreach($clients as $client)
                        <div class="single-client">
                            <a href="#"><img src="{{ $client->image }}" alt="{{ $client->name }}"></a>
                        </div>
        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@else
    <div class="client-area section-padding pt-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="client-wrap owl-carousel">
                        <div class="single-client">
                            <a href="#"><img src="{{ asset('frontend/assets/img/client/1.png') }}" alt=""></a>
                        </div>
                        <div class="single-client">
                            <a href="#"><img src="{{ asset('frontend/assets/img/client/2.png') }}" alt=""></a>
                        </div>
                        <div class="single-client">
                            <a href="#"><img src="{{ asset('frontend/assets/img/client/3.png') }}" alt=""></a>
                        </div>
                        <div class="single-client">
                            <a href="#"><img src="{{ asset('frontend/assets/img/client/4.png') }}" alt=""></a>
                        </div>
                        <div class="single-client">
                            <a href="#"><img src="{{ asset('frontend/assets/img/client/5.png') }}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif