<!--<!DOCTYPE html>-->
<!--<html lang="en">-->



<!--<head>-->
<!--    <meta charset="UTF-8" />-->
<!--    <meta http-equiv="X-UA-Compatible" content="IE=edge" />-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0" />-->
<!--    <title>Document</title>-->
<!--    <link rel="stylesheet" href="./style.css">-->
<!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.0/css/font-awesome.css"-->
<!--        integrity="sha512-72McA95q/YhjwmWFMGe8RI3aZIMCTJWPBbV8iQY3jy1z9+bi6+jHnERuNrDPo/WGYEzzNs4WdHNyyEr/yXJ9pA=="-->
<!--        crossorigin="anonymous" referrerpolicy="no-referrer" />-->
<!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"-->
<!--        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="-->
<!--        crossorigin="anonymous" referrerpolicy="no-referrer" />-->
<!--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"-->
<!--        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />-->
<!--    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"-->
<!--        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">-->
<!--    </script>-->
<!--    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"-->
<!--        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">-->
<!--    </script>-->
<!--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"-->
<!--        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous">-->
<!--    </script>-->
<!--</head>-->

<!--<body>-->
<!--    <div class="container mt-5">-->


@extends('layouts.master')
@section('title','WAGNISTRIP (OPC)')
@section("body")
<!-- DESKTOP VIEW START  -->

 <link href="{{ asset('assets/css/packages.css') }}" rel="stylesheet">

    <div class="container mt-5">








        <div class="row">
            <div class="col-sm-8 m-auto">
                <div class="card shadow" style="border: none;  height: 5000px;padding-top:80px;">
                    <div class="row">
                        <div class="col-sm-7">
                            <h1 class="heading-1">
                                <span class="spn-1">Full Itinerary & Trip Details</span> </h1>
                        </div>
                        <div class="col-sm-5">
                            <img src="{{ URL::to('/assets/images/package-image/85555.png') }}" alt="" style="width: 260px;">
                            <img src="{{ URL::to('/assets/images/package-image/IATA.png') }}" alt="" style="width: 70px; margin-left:100px">
                        </div>
                    </div>
                    <h6 class="spn-2">Around Kathmandu
                        Valley Tour 5 Days
                        </h6>
                        <p>
                            <span class="seven">4N/5D</span> Flexi Package
                            <span class="sp-3">Amazing Kathmandu
                                Valle  Tour Inclusive Deal 4N</span>
                        </p>
                   
                        <div class="pvt-6">
                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="blr-23">BEST SELECTION</p>

                                </div>
                                <div class="col-sm-4">
                                    <p class="blr-23">BEST PRICES</p>
                                </div>
                                <div class="col-sm-4">
                                    <p class="blr-23">TRUSTED PAYMENTS</p>

                                </div>

                            </div>
                        </div>
                        <div class="container" style="padding-top: 10px;">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h4 class="head-09">Contents</h4>
                                    <ol>
                                            <a href="#iti">   <li>1. Your itinerary</li></a>
                                    <a href="#wise">    <li>2. Day wise details</li></a>
                                      <a href="#book">  <li>3. Why Book with us</li></a>
                                      <a href="#booking"><li>4. How to book</li></a>
                                      
                                    </ol>
                                </div>
                                <div class="col-sm-6">
                                    <div class="brdr-1">
                                        <h6 class="head-05">Curated by</h6>
                                        <h3 class="heading-three">WAGNISTRIP (OPC) Holidays</h3>
                                        <h6 class="psd-1">Email: customercare@wagnistrip.com</h6>
                                        <h6 class="psd-1">Call Us: 08096224444 </h6>
                                        <p class="pth-65 ">
                                            Quotation Created on this date Valid till this
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- next-page -->
                        <div class="container">
                            <h4 class="spn-2">Trip Overview</h4>
                            <img src="{{ URL::to('/assets/images/package-image/kathmandu.png') }}" alt=""
                                style="width: 600px; margin-left: 50px; margin-top: 20px; height: 400px;">
                            <div class="row mt-5">
                                <div class="col-sm-5">
                                    <div class="bd-12">
                                        <h6 class="htpvp">PRICE STARTING FROM</h6>
                                        <p class="htpvp1">₹25,377.06
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="bd-12">
                                        <h6 class="htpvp">DURATION
                                        </h6>
                                        <h6 class="htpvp1">5 days</h6>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="bd-12">
                                        <h6 class="htpvp">IDEAL AGE
                                        </h6>
                                        <h6 class="htpvp190">From 5 to 85 year olds    </h6>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="bd-12">
                                    <div class="col-sm-12" style="width: 670px;">
                                        <h6 class="htpvp">STARTS IN <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            ENDS IN
                                        </h6>
                                        <h6 class="htpvp1">Kathmandu<i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            Kathmandu
                                        </h6>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="bd-12">
                                    <div class="col-sm-10" style="width: 670px;">
                                        <h6 class="htpvp">OPERATED IN
                                        </h6>
                                        <h6 class="htpvp1">English
                                        </h6>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="bd-12">
                                        <h6 class="htpvp">OPERATOR</h6>
                                        <p class="htpvp1">Nepal Social Treks and Expedition P. Ltd
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="bd-12">
                                        <h6 class="htpvp">TOUR CODE
                                        </h6>
                                        <h6 class="htpvp1">#142474

                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- next-page -->
                        <!-- second-page -->
                        <div id="iti">
                        <div class="container">
                            <h4 class="heading-30">Itinerary</h4>
                            <h3 class="head-1">Introduction</h3>
                            <p class="para-67">Kathmandu, the gateway to the Himalayan Mountains. The name conjures images of a high
                                mountain city where the dreamers, the lucky and the famous all come to climb the highest peak on
                                earth, Mt Everest (8,848 meters). But Kathmandu is undeniably more than this. And an Around
                                Kathmandu Valley Tour’ will offer the opportunity to experience a deep, and rich cultural heritage, as
                                well as some beautiful sites of the surrounding countryside.
                                The Kathmandu Valley is illustrated by seven groups of monuments and buildings which display
                                the historic and artistic achievements for which the Kathmandu Valley has gained worldwide fame.
                                The seven include the Durbar Squares of Kathmandu (Hanuman Dhoka), Patan and Bhaktapur, the
                                Buddhist stupas Swayambhunath and Boudhanath and the Hindu temples Pashupati Nath and
                                Changu Narayan
                                The news of the damages caused by the earthquake dated 25th April, 2015 has been spread all
                                over the world. By involving in this package, you will get to witness the harms undergone in the
                                durbar squares and see how Nepal is moving forward with the reconstruction of the historical
                                monuments.                                
                            </p>
                            </div>
                            </div>
                            <div id="wise">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="hed-0">Day 1:</h4>
                                    </div>
                                    <div class="col-sm-9">
                                        <h4 class="hd09"> Arrival In Kathmandu, Meet With Guide Transfer To Hotel
                                </div>
                                </div>
                                </div>

                                <!-- next-page -->
                                <div class="container">
                                    <div class="bd-1">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h4 class="head-632">Start Point</h4>
                                            </div>
                                            <div class="col-sm-1">
                                                <p><i class="fa fa-map-marker" aria-hidden="true"></i>
                                                </p>
                                            </div>
                                            <div class="col-sm-5">
                                                <h6 class="hkl">Upon arrival, warm welcome by our
                                                    representative and transfer to hotel,
                                                    Tribhuvan International Airport (KTM)
                                                    
                                                     Kathmandu, Bagmati, Nepal
                                                </h6>
                                            </div>
                                            <div class="col-sm-3">
                                                <h6 class="hkl1"><i class="fa fa-clock-o" aria-hidden="true"></i>00:00 - 23:00</h6>
    
                                            </div>
                                        </div>
                                        <p class="para-6771 mt-2">Upon arrival, warm welcome by our representative and transfer to hotel. After freshen up, proceed
                                            for sightseeing tour to Great Stupa of Boudhanath (World heritage site in 1979) located in
                                            Kathmandu valley. The Stupa is a vast dome-shaped monument representing the Mind of the
                                            Buddha, and is the primary pilgrimage destination for Tantric Buddhists of the Himalayas and a
                                            major draw for Tibetan Buddhists from all over the planet. The history of the stupa from its origins
                                            in the fifth century to the present day is also presented here for the first time. Drive back to hotel.
                                            Evening Welcome Dinner with Cultural Dance, O/n at Hotel                                            
                                        </p>
                                    </div>
                                </div>
                                <!-- page-2 -->
                                <div class="container " style="padding-top: 200px;">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 2:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09">Sightseeing Bhaktapur Drive To Nagarkot                                            </h4>
                                        </div>
                                    </div>
                                    <p class="para-6777">After breakfast, drive to Bhaktapur, (World heritage site in 1979). Bhaktapur is filled with
                                        monuments, most terra-cotta with carved wood columns, palaces and temples with elaborate
                                        carvings, gilded roofs, and open courtyards. The city is dotted with pagodas and religious shrines.
                                        The Art Gallery has a fascinating collection of ancient manuscripts, thangkas, centuries-old stone
                                        sculpture, antique paintings that belong to the Hindu and Buddhist traditions of various periods.
                                        After visiting Bhaktapur, we drive to Nagarkot which is at a height of 2300 m above sea level. It
                                        commands an awesome, beautiful, breath-taking panoramic view of the Himalayan ranges. You
                                        can also see many major Himalayan peaks, like Langtang, Langtang-lirung, Chobha bhamre,
                                        Amadablam, Dorje Lhakpa, Gaurishankar and Mount Everest on a clear day. From here you can
                                        catch excellent view of sunset and sunrise.
                                        
                                    </p>
                                </div>
                                <hr>
                                <!-- page- -->
                                <div class="container " >
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 3:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h6 class="hd09">Nagarkot/ Kritipur / Kathmandu</h6>
                                        </div>
                                    </div>

                                    <p class="para-677">Wake up early morning to catch the sunrise and beautiful view of Himalayan panorama. If you wish
                                        then we would also go to see the beautiful village of Nagarkot for a short time. After breakfast,
                                        drive back to Kathmandu. After lunch, proceed to Kirtipur for sightseeing tour. Kirtipur is one of the
                                        oldest towns in Kathmandu valley. Kirtipur contains few Buddhist sites both old & new. Cilancho
                                        Stupa is of historic importance. A Bihar has been made in Kirtipur, which contain the miniature
                                        sites representing Lumbini, the birthplace of Buddha, Boudhgaya where Buddha got enlightenment,
                                        Saranath where Buddha gave his first teaching and Kushinagar where Buddha died. Then drive
                                        back to hotel.                                        
                                    </p>
                                </div>
                                <hr>
                                <div class="container " >
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 4:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h6 class="hd09">Kathmandu Sightseeing </h6>
                                        </div>
                                    </div>

                                    <p class="para-677">After breakfast, we drive to famous Durbar Square of Kathmandu (World heritage site in 1979)
                                        dominated by Lord Shiva temple where the “Living Goddess” overlooks the square from the south.
                                        The next destination is Patan Durbar square. (World heritage site in 1979). Patan Durbar Square
                                        complex is perhaps the most photographed of the three durbar squares. Located in the heart of
                                        Patan city, this was once the palace of the kings of Patan. The square is a display of Newari
                                        architecture that had reached its pinnacle during the reign of Malla kings who were great builders
                                        and patrons of the arts. <br>
                                        At the last we will be visiting Swayambhunath Stupa. Swayambhunath is believed to have been
                                        established more than 2,500 years ago. Swayambhunath (World heritage site in 1979) have
                                        developed into an important centre of Buddhism. Drive back to hotel.
                                        
                                    </p>
                                </div>
                                <hr>
                                <!-- page-4 -->
                                                           
                                <div class="container" >
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="hed-0">Day 5:</h4>
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="hd09">Departure To Your Country</h4>
                                        </div>
                                    </div>
                                    <div class="bd-12">
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <h4 class="head-632">End Point </h4>
                                            </div>
                                            <div class="col-sm-1">
                                                <p><i class="fa fa-map-marker" aria-hidden="true"></i>
                                                </p>
                                            </div>
                                            <div class="col-sm-6">
                                                <h6 class="hkl">
                                                    After having breakfast, one of our team
                                                    representatives will take you to the
                                                    Tribhuvan International Airport (TIA) for
                                                    your flight back to your home.,
                                                    Tribhuvan International Airport (KTM)
                                                    
                                                    , Kathmandu, Bagmati, Nepal
                                            </div>
                                        </div>
                                    </div>
                                    <p class="para-677">After having breakfast, one of our team representatives will take you hotel to the Tribhuvan
                                        International Airport (TIA) for your flight back to your home.
                                    </p>

                                </div>
                                </div>
                                <!-- nxt-page -->
                                <div class="container">
                                    <h4 class="headerrr">What’s Included</h4>
                                    <h6 class="headerr">Accommodation</h6>
                                   <p class="para-6777">All hotel Accomodation using Deluxe Hotel on B/B basis
                                </p>
                   
                                </div>
                                <!-- NEXT PAGE -->
                                <div class="container">
                                    <h6 class="head-876">Guide</h6>
                                    <p class="prvr">
                                        Experienced tour guide for sightseeing as per itinerary
                                        </p>
                                    
                                    <h6 class="head-876">Meals</h6>
                                    <p class="prvr">Welcome and farewell dinner in Kathmandu
                                    </p>

                                    <h6 class="head-876">Transport
                                    </h6>
                                  <p class="prvr">APrivate transfer using by tourist vehicle/car/jeep in travel period
                                    Private Surface Transfer to/ from Airport arrival and departure
                                    </p>
                                   
                                </div>
                                <!-- NEXT PAGE -->

                                <!-- NEXT PAGE -->
                                <div id="book">
                                <div class="container  " >
                                    <h4 class="headerrr1">Why Book with us?</h4>
                                    <div class="row mt-5">
                                        <div class="col-sm-6">
                                            <h6 class="head-876">No Booking Fees</h6>
                                            <p class="prvr">We charge 0% booking fees and 0% credit card
                                                fees. You won`t find any hidden fees.
                                                #BoycottBookingFees</p>

                                        </div>
                                        <div class="col-sm-6">
                                            <h6 class="head-876">Earn Unlimited Travel Credits</h6>
                                            <p class="prvr">You can use Travel Credit towards your next tour
                                                booking on TourRadar.TourRadar Credits do not
                                                expire.</p>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h6 class="head-876">Flexible Payment Options</h6>
                                            <p class="prvr">You can pay with a credit card or PayPal account to
                                                ensure that your booking are always easy.
                                            </p>

                                        </div>
                                        <div class="col-sm-6">
                                            <h6 class="head-876">Safely book online</h6>
                                            <p class="prvr">All your details are safely protected by a secure
                                                connection.</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div id="booking">
                                <button class="btn btvn" style="background-color:  rgb(234, 100, 10); color: #fff; margin-left: 270px !important; margin-top: 50px !important; border: 1px solid  rgb(234, 100, 10);">BOOK NOW</button>
                                    </div>
                            </div>
                        </div>
                </div>

            </div>
        </div>
    
<script>
    function myFunction() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more");
        var btnText = document.getElementById("myBtn");

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read more";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Read less";
            moreText.style.display = "inline";
        }
    }

</script>
<div class="borderbotum"></div>
{{-- <x-footer-tag /> --}}
<x-footer />
@endsection
