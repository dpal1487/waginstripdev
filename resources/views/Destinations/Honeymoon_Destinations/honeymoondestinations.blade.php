@extends('layouts.master')
@section('title', 'Wagnistrip')

  <link rel="stylesheet" href="{{('assets/css/destinationcss/honeymoondestinations.css')}}">
       <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

  <!--Deskstop view-->

  <div class="contain">
    <h2 style="margin-top:100px;">Honeymoon Destinations</h2>
    <div class="card-1">
    <div class="grid grid-three-column">
      <div class="bali">
        <img src="{{('assets/images/honeymoondestination/Bali.png')}}" alt="Bali Image">
        <div class="overlay">
            <a href="">Bali</a>
        </div>
      </div>
      <div class="italy">
        <img src="{{('assets/images/honeymoondestination/itally image .png')}}" alt="Italy Image">
        <div class="overlay">
            <a href="">Italy</a>
        </div>
      </div>
      <div class="kerala">
        <img src="{{('assets/images/honeymoondestination/kerala image .png')}}" alt="Kerala Image">
        <div class="overlay">
            <a href="">Kerala</a>
        </div>
      </div>
    </div>
</div>
<div class="card-2">
    <div class="grid grid-three-column">
      <div class="phuket">
        <img src="{{('assets/images/honeymoondestination/Phuket.png')}}" alt="Phuket Image">
        <div class="overlay">
            <a href="">Phuket</a>
        </div>
      </div>
      <div class="shimla">
        <img src="{{('assets/images/honeymoondestination/shimla image .png')}}" alt="Shimla Image">
        <div class="overlay">
            <a href="">Shimla</a>
        </div>
      </div>
      <div class="thailand">
        <img src="{{('assets/images/honeymoondestination/Thailand  image .png')}}" alt="Thailand Image">
        <div class="overlay">
            <a href="">Thailand</a>
        </div>
      </div>
    </div>
</div>
</div>
<div class="container-fluid bg-darksar p-0">
    <div class="container mobileVes1 marthide pt-5 pb-3 text-white">
        <h6 class="font-weight-bold"> Our Products </h6>
        <ul class="list-unstyled listed_links">
            <li><a href="https://wagnistrip.us">Flight</a></li>
            <li><a href="https://wagnistrip.us/hotels">Hotel</a></li>
            <li><a href="https://wagnistrip.us/holidays">Holiday</a></li>
            <li><a href="https://wagnistrip.us/cruise">Cruise</a></li>
            <li><a href="https://wagnistrip.us/visa">Visa</a></li>
            <li><a href="https://wagnistrip.us/about-pages">About Us</a></li>
            <li><a href="https://wagnistrip.us/careerspages">Careers</a></li>
            <li><a href="https://wagnistrip.us/contact">Contact Us</a></li>
            <li><a href="https://wagnistrip.us/terms-and-conditions">Terms and Conditions</a></li>
            <li><a href="https://wagnistrip.us/user-agreement">User Agreement</a></li>
            <li><a href="https://wagnistrip.us/privacy-policy">Privacy Policy</a></li>
            <li><a href="https://wagnistrip.us/activities-main">Activities Tours</a></li>
            <li><a href="https://wagnistrip.us/blog-page">Blog</a></li>
        </ul>
    </div>
</div>