@extends('layouts.master')
@section('title', 'Book Cheap Flight Tickets, Airline Tickets at Lowest Airfare | Wagnistrip')
@section('Description', 'Explore the best flight deals & book your next trip with ease. Discover low fares and save on airline tickets')
@section('body')
<!-- DESKTOP VIEW START  -->
<style>

  .exploring {
        color:#f80022;
       animation: blinker 1s step-end infinite;
      
    }
            
    @keyframes blinker {
     50% {
        opacity: 0;
       }
    }
    .proute{
            color: #b8566c !important;
    }
    
</style>
<script defer src="{{url('assets/js/welcomeblade.js')}}"></script>
<link rel="stylesheet" href="assets/css/responsive.css">
<div class="front_banenrsTopSearch">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="imgfrontbanner_1">
                </div>
            </div>
            <div class="carousel-item">
                <div class="imgfrontbanner_2">
                </div>
            </div>
            <div class="carousel-item">
                <div class="imgfrontbanner_3">
                </div>
            </div>
            <div class="carousel-item">
                <div class="imgfrontbanner_4">
                </div>
            </div>
            <div class="carousel-item">
                <div class="imgfrontbanner_5">
                </div>
            </div>
            <div class="carousel-item">
                <div class="imgfrontbanner_6">
                </div>
            </div>
        </div>
    </div>
</div>

<section class="margintoosss pt-6p pb-20" style="" id="hotel_pages">
@include('layouts.searchcard')
</section>

<style>
    /*----------------- flight---------- */
.loaderr {
     z-index: 1000;
  display: none;
  position: fixed;
  top: 100%;
  left: 50%;
  height:100%;
  width:100%;
  text-align: center;
  transform: translate(-50%, -50%);
    background-color:#ffffff7d;
}

.loading img {
  width: 200px;
}

.FlightImpBox .ContentText{
    padding: 12px;
    background: #fff;
    margin-top: 20px;
    border-radius: 9px;
    max-width: fit-content;
    margin: 33px auto 0 auto;
    text-align: center;
    font-size: 16px;
}

.FlightImpBox .ContentText b{
    font-weight:500;
}

.flight_cartd-h3-1{
    font-size:18px;
}


.offerPopup{
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    height: 100%;
    width: 100%;
    /*background: rgb(0 0 0 / 83%);*/
    z-index: 20000000;
    transform: scale(0);
    transition:all 0.8s ease-in-out;
}

.offerPopup.active{
    transform: scale(1);
}

.offerPopup .flexDivPopup{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
}

.offerPopup .offerImageBox img{
        border-radius: 7px 0 7px 7px;
        max-width: 680px;
        min-width: 50%;
}

 .offerPopup .contentDiv{
    position:relative;
}

.offerPopup .closeOfferPopup{
    position: absolute;
    top: -24px;
    right: -3px;
    height: 47px;
    padding: 3px;
    border-radius: 50px;
    background: #515050;
    width: 47px;
    line-height: 47px;
    text-align: center;   
}   


.offerPopup .closeOfferPopup span{
    font-size: 52px;
    display: block;
    color: #fff;
    line-height: 30px;
    cursor:pointer;
}

.setCookiesDiv{
    background: #0e3f5e;
    padding: 24px 6px;
    position: fixed;
    bottom: 15px;
    left: 15px;
    right: 0;
    width: 35%;
    z-index: 99;
    transition:all 0.8s ease-in-out;
    border-radius: 10px;
    display:none;
}

.setCookiesDiv.active{
    display:block;
}

.setCookiesDiv p{
    color:#fff;
    font-size:17px;
}

.setCookiesDiv .flexBtns{
    display: flex;
    gap: 0 55px;
}

.cookies-btnbtn{
    border: 0;
    padding: 7px 15px;
    border-radius: 7px;
    background: #8de9a2;
    color: #000;
    font-size: 15px;
    font-weight: 500;
    display: block;
    text-transform: uppercase;
}

@media (max-device-width: 1700px) {
    .offerPopup .offerImageBox img{
            max-width: 470px;
    }
}
@media (max-device-width: 1550px) {
    .offerPopup .offerImageBox img{
            max-width: 399px;
    }
}



@media only screen and (min-device-width: 275px) and (max-device-width: 576px) {
    
    .FlightImpBox .ContentText {
        padding: 39px;
        max-width: 100%;
        font-size: 52px;
        border-radius: 18px;
    }
    
    .offerPopup .offerImageBox img{
        width:100%;
        border-top:1px solid #000;
    }
    .offerPopup{
        background:#ffffff12;
    }
}

</style>

<div class="loaderr" >
  <div class="loading">
    <img src="assets/images/loader.gif" alt="" srcset="" loading="lazy">
   <h4>Please have patience,<br>Your flight will be searched soon</h4>
  </div>
</div>

<script type="text/javascript">
    function spinnerr(loading) {
        document.getElementsByClassName("loaderr")[0].style.display = "block";
    };
</script>

{{-- <div class="container mobileVes1 shadow mb-5 mt-5 rounded p-3" style="background-color:#ff9967;">
    <h6 class="text-center m-0">
        <strong>Important Info:</strong> To cancel/claim refund or reschedule/modify your booking <a href="#">Click Here</a>
    </h6>

</div>--}}



<div class="container FlightImpBox">
    <div class="ContentText"> <b>Important Info:</b> To cancel/claim refund or reschedule/modify your booking. <a href="https://www.wagnistrip.com/contact">Click here</a> </div>
</div>


<x-frontend.sections.offers-section-one />

<div class="container flightTopListWay mobileVes1" style="display:none;">
    <div class="row btnssreser">
        <div class="col-sm-6">
            <h2 class="float-left font-weight-bold" style="font-size:28px;">
                Popular Flight Routes
            </h2>
        </div>
        <div class="col-sm-6">
            <div class="offersButtons_12 mt-0">
                <span href="#flightTopList_1" role="button" data-slide="prev"><i class="fa fa-angle-left"
                        aria-hidden="true"></i></span>
                <span href="#flightTopList_1" role="button" data-slide="next"><i class="fa fa-angle-right"
                        aria-hidden="true"></i></span>
            </div>
        </div>
    </div>
    <div id="flightTopList_1" class="carousel slide mt-2 mb-3" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row p-2">
                    <div class="col-sm-4 p-2">
                        <a id="deltojaipur" href="#">
                            <div class="card text-left">
                                <img class="card-img-top" src="assets/images/flight/Jaipur .png" height="200" alt="" loading="lazy">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <p class="m-0 text-center">DELHI TO JAIPUR</p>
                                           {{--    <p class="m-0 float-right">Starting: ₹ 1997</p>  --}}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                         {{--   <p class="m-0 text-secondary float-left small proute">DELHI TO JAIPUR</p> --}}
                                            <!--<p class="m-0 float-right small  text-secondary">04/04/2023</p>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4 p-2">
                        <a  id="deltoamritsar" href="#">
                            <div class="card text-left">
                                <img class="card-img-top" src="assets/images/flight/Amritsar.png" height="200" alt="" loading="lazy">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <p class="m-0 text-center">DELHI TO AMRITSAR</p>
                                           {{--  <p class="m-0 float-right">Starting: ₹ 3224</p> --}}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                           {{-- <p class="m-0 text-secondary float-left small proute">DELHI TO AMRITSAR</p> --}}
                                            <!--<p class="m-0 float-right small  text-secondary">04/04/2023</p>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4 p-2">
                        <a id="deltoahmedabad" href="#">
                            <div class="card text-left">
                                <img class="card-img-top" src="assets/images/flight/Ahmedabad.png" height="200" alt="" loading="lazy">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <p class="m-0 text-center">DELHI TO AHMEDABAD</p>
                                            {{-- <p class="m-0 float-right">Starting: ₹ 2594</p> --}}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                          {{--  <p class="m-0 text-secondary float-left small proute">DELHI TO AHMEDABAD</p> --}}
                                            <!--<p class="m-0 float-right small  text-secondary">04/04/2022</p>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row p-2">
                    <div class="col-sm-4 p-2">
                        <a id="deltochandigarh" href="#">
                            <div class="card text-left">
                                <img class="card-img-top" src="assets/images/flight/Chandigarh.png" height="200" alt="" loading="lazy">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <p class="m-0 text-center">DELHI TO CHANDIGARH</p>
                                             {{-- <p class="m-0 float-right">Starting: ₹ 2803</p> --}}   
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                          {{--  <p class="m-0 text-secondary float-left small proute">DELHI TO CHANDIGARH</p> --}}
                                            <!--<p class="m-0 float-right small  text-secondary">04/04/2022</p>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4 p-2">
                        <a id="delhtolucknow" href="#">
                            <div class="card text-left">
                                <img class="card-img-top" src="assets/images/flight/Lucknow .png" height="200" alt="" loading="lazy">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <p class="m-0 text-center">DELHI TO LUCKNOW</p>
                                              {{-- <p class="m-0 float-right">Starting: ₹ 2699</p> --}}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                        {{--    <p class="m-0 text-secondary float-left small proute">DELHI TO LUCKNOW</p> --}}
                                            <!--<p class="m-0 float-right small  text-secondary">04/04/2022</p>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4 p-2">
                        <a id="deltokanpur" href="#">
                            <div class="card text-left">
                                <img class="card-img-top" src="assets/images/flight/kanpur .png" height="200" alt="" loading="lazy">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <p class="m-0 text-center">DELHI TO PUNE</p>
                                             {{--<p class="m-0 float-right">Starting: ₹3581</p> --}}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                        {{--    <p class="m-0 text-secondary float-left small proute">DELHI TO PUNE</p> --}}
                                            <!--<p class="m-0 float-right small  text-secondary">04/04/2022</p>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            {{-- <div class="carousel-item">
                <div class="row p-2">
                    <div class="col-sm-4 p-2">
                        <a id="delhtobangalore" href="#">
                            <div class="card text-left">
                                <img class="card-img-top" src="assets/images/flight/Gwalior.png" height="200" alt="" loading="lazy">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <p class="m-0 float-left">DELHI TO BANGALORE</p>
                                            <p class="m-0 float-right">Starting: ₹ 2193</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                           <p class="m-0 text-secondary float-left small proute">DELHI TO BANGALORE</p> 
                                           <p class="m-0 float-right small  text-secondary">04/04/2022</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4 p-2">
                        <a id="delhtodehradun" href="#">
                            <div class="card text-left">
                                <img class="card-img-top" src="assets/images/flight/Dehradun .png" alt="" height="200" loading="lazy">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <p class="m-0 float-left">DELHI TO DEHRADUN</p>
                                            <p class="m-0 float-right">Starting: ₹ 3010</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                         <p class="m-0 text-secondary float-left small proute">DELHI TO DEHRADUN</p>
                                           <p class="m-0 float-right small  text-secondary">04/04/2022</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4 p-2">
                        <a id="delhtomumbai" href="#">
                            <div class="card text-left">
                                <img class="card-img-top" src="assets/images/flight/Bombay .png" height="200" alt="" loading="lazy">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <p class="m-0 float-left">DELHI TO MUMBAI</p>
                                            <p class="m-0 float-right">Starting: ₹ 3929</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                           <p class="m-0 text-secondary float-left small proute">DELHI TO MUMBAI</p> 
                                            <p class="m-0 float-right small  text-secondary">04/04/2022</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div> --}}
        </div>

    </div>
</div>


<x-frontend.sections.top-destinations-holidays />
@php
    $cncode = !empty(Session()->get('country_code')) ? Session()->get('country_code') : [];
    $country =!empty($cncode[0]) ? $cncode[0] : 'IN';
@endphp
@if($country == 'IN')
<div something="{{$country}}" class="container FlightRoutesContainer">
    <div class="row">
        <div class="col-sm-6 col_flight-page" >
           <div class="card p-4">
             <h3 class="m-0 text-center font-weight-bold flight_cartd-h3">Popular Domestic Flights</h3>
               <table class="table table-bordered mt-4 text-center">
                  <tbody>
                         <tr>
                            <td class="con_tain">Hyderabad to Bangalore (HYD-BLR)</td>
                            <td>
                                <a id="hydtobang" href="#" class="btn btn_1280 btn-primary btn-sm">Search Now</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="con_tain">Mumbai to Chennai (BOM-MAA)</td>
                            <td>
                                <a id="mumtochen" href="#" class="btn btn_1280 btn-primary btn-sm">Search Now</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="con_tain">Chennai to Mumbai (MAA-BOM)</td>
                            <td>
                                <a id="chentomum" href="#" class="btn btn_1280 btn-primary btn-sm">Search Now</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="con_tain">Delhi to Ahmedabad (DEL-AMD)</td>
                            <td>
                                <a id="deltoahm" href="#" class="btn btn_1280 btn-primary btn-sm">Search Now</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="con_tain">Mumbai to Kolkata (BOM-CCU)</td>
                            <td>
                                <a id="mumtokol" href="#" class="btn btn_1280 btn-primary btn-sm">Search Now</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
             </div>
        </div>
        <div class="col-sm-6  col_flight-page flight-page-right">
           
            <div class="card p-4">
                <h3 class="m-0 text-center font-weight-bold flight_cartd-h3">Popular International Flights</h3>
                 <table class="table table-bordered mt-4 text-center">
                    <tbody>
                         <tr>
                            <td class="con_tain">Chandigarh To Bangkok (IXC-BKK)</td>
                            <td>
                                <a id="goatomum" href="#" class="btn btn_1280 btn-primary btn-sm">Search Now</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="con_tain">Mumbai to Bangkok (BOM-BKK)</td>
                           
                            <td>
                                <a id="mumtobang" href="#" class="btn btn_1280 btn-primary btn-sm">Search Now</a>
                            </td>
                        </tr>
                         <tr>
                            <td class="con_tain">Mumbai to Dubai (BOM-DXB)</td>
                           
                            <td>
                                <a id="mumtodub" href="#" class="btn btn_1280 btn-primary btn-sm">Search Now</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="con_tain">Kolkata to Malaysia (CCU-KUL)</td>
                           
                            <td>
                                <a id="koltomal" href="#" class="btn btn_1280 btn-primary btn-sm">Search Now</a>
                            </td>
                        </tr>
                        
                        <tr>
                            <td class="con_tain">Delhi to Singapore (DEL-SIN)</td>
                            <td>
                                <a id="deltosin" href="#" class="btn btn_1280 btn-primary btn-sm">Search Now</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@else
@include('components.popular-flight-card')
@endif

<div class="container my-5 FlightSeoContainer">
    @if($country == 'IN')
   <div class="row">
    
    <div class="col-sm-6 col_flight-page">
         <div class="card p-4">
         <table class="table table-bordered mt-4 text-center">  
         <tr>
             <th >
                 <h6 class="m-0 font-weight-bold flight_cartd-h3-1 fontSize52-in-mb">Why to Book Domestic Air Tickets from www.wagnistrip.com?</h6>  
             </th>
         </tr>
   <tbody>
      <tr>
       <td>
         <p class="m-0 text-justify pt-2 small fontSize42-in-mb">Wagnistrip brings new offers on various travel products along with cheap flight tickets. So, proceed for grabbing the best deals on domestic flight tickets with other travel solutions. The Indian aviation industry is witnessing a boom in the domestic airline sector due to the increase in air travelers. At www.wagnistrip.com, you can search and book various domestic airlines including, Air India, GO FIRST, Indian Airlines, IndiGo, SpiceJet, Vistara, and more to enjoy good connectivity to different Indian cities. It doesn’t charge any convenience fees or hidden charges and offers the lowest rates on flight booking. If you have to book a domestic flight in the coming days, don’t go anywhere just visit our flight page.
        </td>
        </tr>
        </tbody>
    </table>
   </div>
   </div>
    <div class="col-sm-6 col_flight-page flight-page-right">
         <div class="card p-4">
         <table class="table table-bordered mt-4 text-center">  
         <tr>
             <th>
                 <h6 class="m-0 font-weight-bold flight_cartd-h3-1 fontSize52-in-mb">Why to Book International Air Tickets from www.wagnistrip.com?</h6>  
             </th>
         </tr>
   <tbody>
      <tr>
       <td>
         <p class="m-0 pt-2 text-justify small fontSize42-in-mb">Visit all the world's biggest cities by purchasing affordable international airline tickets at www.wagnistrip.com. We provide you the widest selection of airlines flying to various nations while guaranteeing an enjoyable trip. Use wagnistrip.com to reserve any international flight. There are numerous benefits to reserving with us when travelling abroad: Leading company with a solid reputation, offering a variety of ticket alternatives, and having a strong relationship with global airline networks. The finest deals on all significant travel routes are guaranteed, and it aids you in selecting the budget international flights. Order inexpensive airline tickets for all popular international destinations in a few easy steps.
         </p>
        </td>
        </tr>
        </tbody>
    </table>
   </div>
   </div>
   </div>
   @else
   <div class="row">
    
    <div class="col-sm-6 col_flight-page">
         <div class="card p-4">
         <table class="table table-bordered mt-4 text-center">  
         <tr>
             <th >
                 <h6 class="m-0 font-weight-bold flight_cartd-h3-1 fontSize52-in-mb">Why to Book Domestic Air Tickets from www.wagnistrip.com?</h6>  
             </th>
         </tr>
   <tbody>
      <tr>
       <td>
         <p class="m-0 text-justify pt-2 small fontSize42-in-mb">Wagnistrip provides new offers on various travel products, along with the cheapest domestic flight ticket booking. So, proceed to grab the best deals on the domestic cheapest flight tickets with other travel solutions. The aviation industry is witnessing a boom in the domestic airline sector due to the increase in air travelers. At www.wagnistrip.com, you can search and book various domestic airlines. It doesn’t charge any convenience fees or hidden charges and offers the lowest domestic flight tickets. If you have to book a domestic flight in the coming days, don’t go anywhere; just visit our flight page. keep booking with us.</p>
        </td>
        </tr>
        </tbody>
    </table>
   </div>
   </div>
    <div class="col-sm-6 col_flight-page flight-page-right">
         <div class="card p-4">
         <table class="table table-bordered mt-4 text-center">  
         <tr>
             <th>
                 <h6 class="m-0 font-weight-bold flight_cartd-h3-1 fontSize52-in-mb">Why to Book International Air Tickets from www.wagnistrip.com?</h6>  
             </th>
         </tr>
   <tbody>
      <tr>
       <td>
         <p class="m-0 pt-2 text-justify small fontSize42-in-mb">Visit all the world's biggest cities by purchasing affordable international airline tickets at www.wagnistrip.com. We provide you the widest selection of airlines flying to various nations while guaranteeing an enjoyable trip. Use wagnistrip.com to reserve any international flight. There are numerous benefits to reserving with us when travelling abroad: Leading company with a solid reputation, offering a variety of ticket alternatives, and having a strong relationship with global airline networks. The finest deals on all significant travel routes are guaranteed, and it aids you in selecting the budget international flights.</p>
        </td>
        </tr>
        </tbody>
    </table>
   </div>
   </div>
   </div>
   @endif
   
</div>
    




{{-- <x-frontend.sections.maketruetripoffer />--}}
    <!--//////////////////////////////////////////////////////////////////////////////////////////////-->

<div class="container flight_sliderOffers mobileVes1 mt-5 mb-5 FlightBlog">
    <div class="row btnssreser">
        <div class="col-sm-6">
            <h2 class="float-left font-weight-bold bigHeading" style="font-size:28px; padding-left:16px;">
                Travel Blogs
            </h2>
        </div>
    </div>
    @if($country == 'IN')
    <div class="container mb-5 mobileVes1">
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top" src="assets/images/blog/blod-1.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold text-center">Kedarnath Yatra</h5>
                    <p class="card-text">
                        Regardless of how difficult the objective of Kedarnath is, the profound tornado and the feel of the spot are so compelling that lovers can't help but come here for Lord Shiva's divine elegance. It is considered one of the Char Dhams...
                        <a href="https://www.wagnistrip.com/blog-details">Read More</a>
                    </p>
                    <p class="card-text"><small class="text-muted">Last updated 2 months ago</small></p>

                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="assets/images/blog/blog-2.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title text-center font-weight-bold">Guides and Travel Tips for Thailand.</h5>
                    <p class="card-text">
                        We've put together the top Thailand tours and advice here. This Thailand guide and travel blog brings all of our top Thailand travel tips, information tales, experiences, and stories together. There are travel tips for singles and couples as well, not just families...
                        <a href="https://www.wagnistrip.com/blog-details2">Read More</a>
                    </p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="assets/images/blog/blog-3.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title text-center font-weight-bold">Nainital is one of Uttarakhand's most well known hill station.</h5>
                    <p class="card-text">
                        Clearly based on the lines of the Cumbrian Lake District by the British, Nainital is one of Uttarakhand's most well-known hill stations. Nainital is set in a valley around an eye-shaped lake, where, according to legend...
                        <a href="https://www.wagnistrip.com/blog-details3">Read More</a>
                    </p>
                    <p class="card-text"><small class="text-muted">Last updated 3 months ago</small></p>
                </div>
            </div>
        </div>
    </div>
    @else
    <!--blog for USA-->
    <div class="container mb-5 mobileVes1">
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top" src="assets/images/blog/blog4California.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold text-center">Visit California with Wagnistrip</h5>
                    <p class="card-text">The natural splendor of the Redwood Forest, Joshua Tree, and Big Sur! Gloomy and lovely weather in May and June It sounds amazing, right? You'll also like exploring great cities such as San Diego, San Francisco, and Los Angeles. That wonderful/delicious food, incredible road trips, fascinating camping...
                        <a href="https://www.wagnistrip.com/blog-details6">Read More</a>
                    </p>
                    <p class="card-text"><small class="text-muted">Last updated 1 day ago</small></p>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="assets/images/blog/blog5Miami.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title text-center font-weight-bold">Explore the World-Class Beaches in Miami</h5>
                    <p class="card-text">Impatiently waiting for an International trip? Excited for daily access to world-class beaches, exciting nightlife, rich culture, friendly residents, a top-notch cuisine scene, and scenic views, living in Miami is a joy for most of the year with Cheap Flights to Miami.It boasts all the...
                        <a href="https://www.wagnistrip.com/blog-details7">Read More</a>
                    </p>
                    <p class="card-text"><small class="text-muted">Last updated 5 day ago</small></p>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="assets/images/blog/blog6phila.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title text-center font-weight-bold">Is Philadelphia a Well-Known Tourist Destination? </h5>
                    <p class="card-text">Philadelphia has plenty of free things to do! Philadelphia is the city that helped launch a nation, and there are numerous opportunities to connect with its historical significance. It is one of the most helpful states in the US. Absolutely! Everyone in Philadelphia is friendly and nice. You can ask...
                        <a href="https://www.wagnistrip.com/blog-details8">Read More</a>
                    </p>
                    <p class="card-text"><small class="text-muted">Last updated 10 day ago</small></p>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
<!--//////////////////////////////////////////////////////////////////////////////////////////////-->




@if($country == 'IN')
<div class="container-fluid" style="background-color:#fff;">
    <div class="container mobileVes1 pt-20 mt-5">
        <div class="row p-2">
            <div class="col-sm-4">
                <h6 class="font-weight-bold" id="font_weight_12">Why Wagnistrip?</h6>
                <p class="small ppgagr text-justify pt-2">
                  Wagnistrip is an online travel company. It is well known for providing our customers with the best travel offers. The staff at Wagnistrip has been pushed by vision and tenacity to succeed. With a strong commitment and plenty of hard work, Wagnistrip has expanded its product line in advance. offering, which contains a range of offline and online goods and services. Therefore, begin your search for the cheapest flights right now.
            </div>
            <div class="col-sm-4">
                <h6 class="font-weight-bold " id="font_weight_12">We are offering cheapest flight.</h6>
                <p class="small ppgagr text-justify pt-2">
                    Wagnistrip provides the greatest prices on airline tickets, hotel accommodations, holiday packages, and a variety of other travel products. Our objective is to offer our customers the greatest and most economical ticket booking options. Wagnistrip will also offer hotel deals and a variety of other travel services throughout India. When traveling abroad, there are several advantages to booking with us, including our position as a preeminent firm with a good reputation.
                    
                </p>
            </div>
            <div class=" col-sm-4">
                <h6 class="font-weight-bold" id="font_weight_12">We are offering Holidays packages.</h6>
                <p class="small ppgagr text-justify pt-2">
                    Wagnistrip provides fantastic deals on vacation packages all around India and internationally.
                    Wagnistrip offers all-inclusive vacation packages to a variety of foreign places.
             You will also receive a number of customised tours. Do compare our rates with other travel portals and be prepared to receive the greatest deals (put this portion first) So, call us soon and we welcome you all to book some memorable holidays with us.
                </p>
            </div>

        </div>
    </div>
</div>
@else
<div class="container-fluid" style="background-color:#fff;">
    <div class="container mobileVes1 pt-20 mt-5">
        <div class="row p-2">
            <div class="col-sm-4">
                <h6 class="font-weight-bold" id="font_weight_12">Why Wagnistrip?</h6>
                <p class="small ppgagr text-justify pt-2">Wagnistrip is an online travel company. It is well known for providing our customers with cheap flight booking globally. The staff at Wagnistrip has been pushed by vision and tenacity to succeed. With a strong commitment and plenty of hard work, Wagnistrip has expanded its product line in advance. offering, which contains a range of offline and online goods and services. Therefore, begin your search for the discount on flight ticket booking right now.</p>
            </div>
            <div class="col-sm-4">
                <h6 class="font-weight-bold " id="font_weight_12">We are offering cheapest flight.</h6>
                <p class="small ppgagr text-justify pt-2"> Wagnistrip provides the best rates for airline tickets, hotel accommodations, holiday packages, and a variety of other travel products. Our objective is to offer our customers the cheapest airline booking site. Wagnistrip will also offer hotel deals and a variety of other travel services. When traveling abroad, there are several advantages to booking with us, including our position as a preeminent firm with a good reputation.</p>
            </div>
            <div class=" col-sm-4">
                <h6 class="font-weight-bold" id="font_weight_12">We are offering Holidays packages.</h6>
                <p class="small ppgagr text-justify pt-2">Wagnistrip provides fantastic deals on vacation packages all around India and internationally. Wagnistrip offers all-inclusive vacation packages with the best site to book cheap flights. You will also receive a number of flight cheap ticket booking with so many customised tours. Do compare our rates with other travel portals and be prepared to receive the greatest deals (put this portion first) So, call us soon and we welcome you all to book some memorable holidays with us.</p>
            </div>

        </div>
    </div>
</div>
@endif


<!-- <nav class="left_sliderICons fixed-bottom">
    <ul>
        <li><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i><span>Facebook</span></a></li>
        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i><span>Twitter</span></a></li>
        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i><span>Instagram</span></a></li>
        <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i><span>Linkedin</span></a></li>
        <li><a href="#"><i class="fa fa-pinterest-square" aria-hidden="true"></i><span>Pinterest</span></a></li>
        <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i><span>Youtube</span></a></li>
    </ul>
</nav> -->

<x-frontend.sections.mobile-view-pages />





@if($country == 'IN')
<div class="offerPopup">
    <div class="flexDivPopup">
        <div class="contentDiv">
            <div class="closeOfferPopup">
                <span>×</span>
            </div>
            <div class="offerImageBox">
                <img src="{{url('assets/images/tempimages/offerimage.jpg')}}" alt"">
            </div>
        </div>
    </div>
</div>
@else
<div class="offerModalRemove"></div>
@endif


<div class="setCookiesDiv">
    <div class="contentDiv container">
        <p>By Clicking <b>"Accept all cookies"</b> Using this website, you agree that Wagnistrip Pvt. Ltd. may place cookies on your computer or device. Cookies can stay on your device for different periods of time.</p>
        <div class="flexBtns">
            <button class="cookies-btnbtn">Necessary</button>
            <button class="cookies-btnbtn">Accept All</button>
            <button class="cookies-btnbtn">Close</button>
        </div>
    </div>
</div>


<div class="dpnr">
    <x-footer />
</div>


<!-- calldeals-modal -->
<x-calldeals-modal />




<!-- Desktop End View -->
   <script>


    // //  == = == start popular flight Scripts == = = //
    const months = ["+Jan+", "+Feb+", "+Mar+", "+Apr+", "+May+", "+Jun+", "+Jul+", "+Aug+", "+Sep+", "+Oct+", "+Nov+", "+Dec+"];

    const d = new Date()
    let year = d.getFullYear();
    let date = d.getDate();
    const currentMonth = new Date();
    let startdate = date + months[currentMonth.getMonth()] + year ;
    
    let newMonth = new Date();
    newMonth.setDate(d.getDate() + 3);
    date = newMonth.getDate();
    let enddate = date + months[newMonth.getMonth()] + year ;
    
     document.getElementById("hydtobang").href="flight/search?trip-type=oneway&departure=HYD&arrival=BLR&departDate="+enddate+"+&returnDate="+enddate+"&noOfAdults=1&noOfChilds=0&noOfInfants=0&cabinClass=Y&fare=Regular+Fares";
     document.getElementById("mumtochen").href="flight/search?trip-type=oneway&departure=BOM&arrival=MAA&departDate="+enddate+"+&returnDate="+enddate+"&noOfAdults=1&noOfChilds=0&noOfInfants=0&cabinClass=Y&fare=Regular+Fares";
 
    document.getElementById("goatomum").href="flight/search?trip-type=oneway&departure=GOI&arrival=BOM&departDate="+enddate+"+&returnDate="+enddate+"+&noOfAdults=1&noOfChilds=0&noOfInfants=0&cabinClass=Y&fare=Regular+Fares";
    document.getElementById("mumtobang").href="flight/search?trip-type=oneway&departure=BOM&arrival=BKK&departDate="+enddate+"+&returnDate="+enddate+"&noOfAdults=1&noOfChilds=0&noOfInfants=0&cabinClass=Y&fare=Regular+Fares";
    document.getElementById("mumtodub").href="flight/search?trip-type=oneway&departure=BOM&arrival=DXB&departDate="+enddate+"+&returnDate="+enddate+"&noOfAdults=1&noOfChilds=0&noOfInfants=0&cabinClass=Y&fare=Regular+Fares";
    document.getElementById("koltomal").href="flight/search?trip-type=oneway&departure=CCU&arrival=KUL&departDate="+enddate+"+&returnDate="+enddate+"&noOfAdults=1&noOfChilds=0&noOfInfants=0&cabinClass=Y&fare=Regular+Fares";
    document.getElementById("deltosin").href="flight/search?trip-type=oneway&departure=DEL&arrival=SIN&departDate="+enddate+"+&returnDate="+enddate+"&noOfAdults=1&noOfChilds=0&noOfInfants=0&cabinClass=Y&fare=Regular+Fares";
    document.getElementById("deltoahm").href="flight/search?trip-type=oneway&departure=DEL&arrival=AMD&departDate="+enddate+"+&returnDate="+enddate+"&noOfAdults=1&noOfChilds=0&noOfInfants=0&cabinClass=Y&fare=Regular+Fares";
    
    document.getElementById("mumtokol").href="flight/search?trip-type=oneway&departure=BOM&arrival=CCU&departDate="+enddate+"+&returnDate="+enddate+"+&noOfAdults=1&noOfChilds=0&noOfInfants=0&cabinClass=Y&fare=Regular+Fares";
    document.getElementById("chentomum").href="flight/search?trip-type=oneway&departure=MAA&arrival=BOM&departDate="+enddate+"+&returnDate="+enddate+"&noOfAdults=1&noOfChilds=0&noOfInfants=0&cabinClass=Y&fare=Regular+Fares";
    
   
    document.getElementById("deltojaipur").href="flight/search?trip-type=oneway&departure=DEL&arrival=JAI&departDate="+enddate+"+&returnDate="+enddate+"+&noOfAdults=1&noOfChilds=0&noOfInfants=0&cabinClass=Y&fare=Regular+Fares";
    document.getElementById("deltoamritsar").href="flight/search?trip-type=oneway&departure=DEL&arrival=ATQ&departDate="+enddate+"+&returnDate="+enddate+"&noOfAdults=1&noOfChilds=0&noOfInfants=0&cabinClass=Y&fare=Regular+Fares";
    document.getElementById("deltoahmedabad").href="flight/search?trip-type=oneway&departure=DEL&arrival=AMD&departDate="+enddate+"+&returnDate="+enddate+"&noOfAdults=1&noOfChilds=0&noOfInfants=0&cabinClass=Y&fare=Regular+Fares";
    document.getElementById("deltochandigarh").href="flight/search?trip-type=oneway&departure=DEL&arrival=IXC&departDate="+enddate+"+&returnDate="+enddate+"&noOfAdults=1&noOfChilds=0&noOfInfants=0&cabinClass=Y&fare=Regular+Fares";
    
    document.getElementById("delhtolucknow").href="flight/search?trip-type=oneway&departure=DEL&arrival=LKO&departDate="+enddate+"+&returnDate="+enddate+"&noOfAdults=1&noOfChilds=0&noOfInfants=0&cabinClass=Y&fare=Regular+Fares";
    document.getElementById("deltokanpur").href="flight/search?trip-type=oneway&departure=DEL&arrival=PNQ&departDate="+enddate+"+&returnDate="+enddate+"+&noOfAdults=1&noOfChilds=0&noOfInfants=0&cabinClass=Y&fare=Regular+Fares";
    
    
    // //  == = == End popular flight Scripts == = = //


</script> 

<Script>
    $(document).ready(function () {
        let selectedVal = 'oneway';

        $('.trip-type').change(function () {
            
            let selectedVal = $(this).val();
            // console.log(selectedVal);
        });

        $('#main-search-btn').on('click', function () {
            $('#main-form').submit();
        });
    });
</Script>

<script>
     $('.carousel').carousel({
        interval: 4000
    })
</Script>


<script>
    
    $('.btn1').click(function() {
        $('.btn1').removeClass('active');
      $(this).addClass('active');
      var activetext = $('.active').text();
      $('#fare4').val(activetext);
    });

    
    // offer offerPopup script
    @if($country == 'IN')
    // setTimeout(() => {
    window.addEventListener("DOMContentLoaded", (event) => {
        function setOfferCookie(name, value, days) {
            var expires = "";
            if (days) {
                var date = new Date();
                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                expires = "; expires=" + date.toUTCString();
            }
            document.cookie = name + "=" + value + expires + "; path=/";
        }
        setTimeout(() => {
            setOfferCookie("offerpopup", 'Opend', 1);
        }, 2000)
        // set getOfferCookie
        function getOfferCookie(name) {
            var nameEQ = name + "=";
            var ca = document.cookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) === ' ') {
                c = c.substring(1, c.length);
                }
                if (c.indexOf(nameEQ) === 0) {
                    return c.substring(nameEQ.length, c.length);
                }
            }
        return null;
        }
        let offerpopup = getOfferCookie("offerpopup");
        if (offerpopup === null) {
            $(".offerPopup").addClass("active");
        } else if (offerpopup == "Opend") {
            $(".offerPopup").removeClass("active");
        } else {
            $(".offerPopup").removeClass("active");
        }
        setTimeout(() => {
            $(".offerPopup").removeClass("active");
        }, 15000);
        
        $(".closeOfferPopup, body").click(function() {
            $(".offerPopup").removeClass("active");
        });
    });
    // }, 8000);
    @else
    // offerPopup script Remove
    @endif
    
    // https://we.tl/t-l0xq9vlL09
</script>

@endsection