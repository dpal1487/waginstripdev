<div class="container flight_sliderOffers mobileVes1 mt-5 mb-5" >
    <div class="row btnssreser">
        <div class="col-sm-6">
            <h2 class="float-left font-weight-bold" style="font-size:28px;">
                Exclusive Offers on Flights
            </h2>
        </div>
        {{-- <div class="col-sm-6">
            <div class="offersButtons_12 mt-0">
                <span href="#flightsliderOffer_20" role="button" data-slide="prev"><i class="fa fa-angle-left"
                        aria-hidden="true"></i></span>
                <span href="#flightsliderOffer_20" role="button" data-slide="next"><i class="fa fa-angle-right"
                        aria-hidden="true"></i></span>
            </div>
        </div> --}}
    </div>
                    @php
                        $cncode = !empty(Session()->get('country_code')) ? Session()->get('country_code') : [];
                        $country =!empty($cncode[0]) ? $cncode[0] : 'IN';
                    @endphp    
    <div id="flightsliderOffer_20" class="carousel slide mt-3 mb-3" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row p-2">
                    <div class="col-sm-4 p-2">
                        <a href="#">
                            <div class="card" >
                                @if($country == 'IN')
                                <img src="assets/images/flights/22.png" style="height:180px;" alt="">
                                @else
                                <img src="assets/images/flights/foffer.png" style="height:180px;" alt="">
                                @endif
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4 p-2">
                        <a href="#">
                            <div class="card">
                                <img src="assets/images/flights/24.png" style="height:180px;" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4 p-2">
                        <a href="#">
                            <div class="card">
                                <img src="assets/images/flights/25.png" style="height:180px;" alt="">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
           {{-- <div class="carousel-item">
                <div class="row p-2">
                    <div class="col-sm-4 p-2">
                        <a href="#">
                            <div class="card">
                                <img src="assets/images/flights/23.png" style="height:180px;" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4 p-2">
                        <a href="#">
                            <div class="card">
                                <img src="assets/images/flights/24.png" style="height:180px;" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4 p-2">
                        <a href="#">
                            <div class="card">
                                <img src="assets/images/flights/25.png" style="height:180px;" alt="">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row p-2">
                    <div class="col-sm-4 p-2">
                        <a href="#">
                            <div class="card">
                                <img src="assets/images/flights/26.png" style="height:180px;" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4 p-2">
                        <a href="#">
                            <div class="card">
                                <img src="assets/images/flights/27.png" style="height:180px;" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4 p-2">
                        <a href="#">
                            <div class="card">
                                <img src="assets/images/flights/28.png" style="height:180px;" alt="">
                            </div>
                        </a>
                    </div>
                </div>
            </div> --}}
        </div>

    </div>

</div>