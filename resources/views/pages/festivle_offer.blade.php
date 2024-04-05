@extends("pages.offer_master")
@section('title', 'package offer')
@section('body')
    <section class="pb-20">
        <img src="{{ asset('assets/images/offer_bg2.jpg') }}" alt="" class="offerimage">
        <div class="container">
            @foreach($offerDetailArray as $offerDetail)
            <div class="pt-20 pb-20">
                <div class="bggradiant">
                    <i class="fa fa-gift"></i> {{ ucwords($offerDetail['packname']) }}
                    <div class="float-right">
                        <a href="{{url('/')}}" class="book-now-btn-ofer"> Book Now </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-5">
                   <div class="row">
                    <div class="col-6 colmd-6 col-sm-12">
                        <div class="offershadowsdetailsss">
                            <div class="w3-display-container">
                                @foreach($offerDetail['hotelimages'] as $hotelImages)
                                <img class="mySlides" src="{{ asset('offerUpload/'.$hotelImages) }}" style="width:100%; height: 320px;">
                                @endforeach
                                <div class="w3-center w3-container w3-display-bottommiddle" style="width:100%">
                                  <div class="w3-left leftArrow" onclick="plusDivs(-1)">&#10094;</div>
                                  <span class="imagetitle">HOTEL IMAGES</span>
                                  <div class="w3-right rightArrow" onclick="plusDivs(1)">&#10095;</div>
                                </div>
                            </div>
                        </div>
                       </div>
                       <div class="col-6 colmd-6 col-sm-12">
                        <div class="offershadowsdetailsss">
                            <div class="w3-content w3-display-container">
                                @foreach($offerDetail['packageimages'] as $packageImages)
                                <img class="mySlidesT" src="{{ asset('offerUpload/'.$packageImages) }}" style="width:100%; height: 320px;">
                                @endforeach
                                <div class="w3-center w3-container w3-display-bottommiddle" style="width:100%">
                                    <div class="w3-left leftArrow" onclick="plusDivsT(-1)">&#10094;</div>
                                    <span class="imagetitle">OFFER IMAGES</span>
                                    <div class="w3-right rightArrow" onclick="plusDivsT(1)">&#10095;</div>
                                </div>
                            </div>
                        </div> 
                       </div>
                   </div>
                </div>

                <div class="col-sm-7">
                    <div class="offershadowsdetailsss pt-10 pb-20">
                        <h3 class="offerDetailhotel pb-10"><i class="fa fa-building-o"></i> {{ ucwords($offerDetail['hotelname']) }} , {{ ucwords($offerDetail['location']) }}</h3>
                        <div class="row">
                            <div class="col-12 col-md-12 col-sm-12 text-center">
                                <span class="offerundertitle">
                                    Location : <i class="fa fa-map-marker"></i> {{ ucwords($offerDetail['location']) }}
                                </span>
                                <div class="offerbborder"></div>
                            </div>
                            <div class="col-6 col-md-6 col-sm-6 text-center">
                                <span class="offerundertitle"> Price : <i class="fa fa-inr"></i>{{ number_format($offerDetail['price']) }} </span>
                            </div>
                            <div class="col-6 col-md-6 col-sm-6 text-center">
                                <span class="offerundertitle">
                                    Rating : 
                                     <?php
                                        for($i = 0; $i < $offerDetail['rating']; $i++){
                                            echo '<i class="fa fa-star offerstar"></i>';
                                        } 
                                        for($j = $offerDetail['rating']; $j < 5; $j++) { 
                                            echo '<i class="fa fa-star-o offerstar"></i>';
                                        } 
                                     ?>
                                </span>
                            </div>
                            <div class="offerbborder"></div>
                            <div class="col-4 col-md-4 col-sm-4 pt-20 text-center">
                                <span class="offerundertitleee">
                                    Duration <i class="fa fa-clock-o"></i> : {{ ucwords($offerDetail['duration']) }}
                                </span>
                            </div>
                            
                            <div class="col-4 col-md-4 col-sm-4 pt-20 text-center">
                                <span class="offerundertitleee">
                                    Passanger <i class="fa fa-user-circle-o"></i> : {{ ucwords($offerDetail['passanger']) }}
                                </span>
                            </div>
                            <div class="col-4 col-md-4 col-sm-4 pt-20 text-center">
                                <span class="offerundertitleee">
                                    Transfer <i class="fa fa-cab"></i> : {{ ucwords($offerDetail['transfer']) }}
                                </span>
                            </div>
                            <div class="offerbborder"></div>
                            <div class="col-6 col-md-6 col-sm-5 pt-20 text-center">
                                <span class="offerundertitleee">
                                    Meal <i class="fa fa-cutlery"></i> : {{ ucwords($offerDetail['meal']) }}
                                </span>
                            </div>
                            <div class="col-6 col-md-6 col-sm-7 pt-20 text-center">
                                <span class="offerundertitleee">
                                    Package Type : {{ ucwords($offerDetail['package_type']) }}
                                </span>
                            </div>
                            <div class="offerbborder"></div>
                            <div class="col-12 col-md-12 col-sm-12 pt-20">
                                <div class="offerDetailhotel pb-10">Activities</div>  
                                <span class="offerundertitleee">
                                     {!! ucwords($offerDetail['activities']) !!}
                                </span>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
            <div class="row offershadowsdetailsss">
                <div class="col-sm-12">
                    <div class="offerDetailhotel">
                        Summary 
                    </div> 
                    <div class="offerundertitleee">
                        {!! ucwords($offerDetail['sumry']) !!}
                    </div>
                </div>
                <div class="col-12 col-md-12 col-sm-12">
                    <a href="{{ url('/') }}" class="book-now-btn-ofer"> Book Now </a>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <script>
        var slideIndex = 1;
        showDivs(slideIndex);
        function plusDivs(n) {
          showDivs(slideIndex += n);
        }
        function currentDiv(n) {
          showDivs(slideIndex = n);
        }
        function showDivs(n) {
          var i;
          var x = document.getElementsByClassName("mySlides");
          if (n > x.length) {slideIndex = 1}
          if (n < 1) {slideIndex = x.length}
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
          }
          x[slideIndex-1].style.display = "block"; 
        }

        var IndexT = 1;
        showDivsT(IndexT);
        function plusDivsT(n) {
          showDivsT(IndexT += n);
        }
        function currentDiv(n) {
          showDivsT(IndexT = n);
        }
        function showDivsT(n) {
          var i;
          var x = document.getElementsByClassName("mySlidesT");
          if (n > x.length) {IndexT = 1}
          if (n < 1) {IndexT = x.length}
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
          }
          x[IndexT-1].style.display = "block"; 
        }
    </script>
     
@endsection
