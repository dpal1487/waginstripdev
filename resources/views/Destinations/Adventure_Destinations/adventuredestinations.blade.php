@extends('layouts.master')
@section('title', 'Wagnistrip')

  <link rel="stylesheet" href="{{('assets/css/destinationcss/adventuredestinations.css')}}">
  <!--Deskstop view-->

<div class="contain">
    <h2 style="margin-top:100px;">Adventure Destinations</h2>
    <div class="card-1">
    <div class="grid grid-three-column">
      <div class="Antarctica">
        <img src="{{('assets/images/honeymoondestination/Antarctica.png')}}" alt="Antarctica Image">
        <div class="overlay">
            <a href="">Antarctica</a>
        </div>
      </div>
      <div class="Ice-Land">
        <img src="{{('assets/images/honeymoondestination/Ice-Land.png')}}" alt="Ice-Land Image">
        <div class="overlay">
            <a href="">Ice-Land</a>
        </div>
      </div>
      <div class="Ladakh">
        <img src="{{('assets/images/honeymoondestination/Ladakh.png')}}" alt="Ladakh Image">
        <div class="overlay">
            <a href="">Ladakh</a>
        </div>
      </div>
    </div>
</div>
<div class="card-2">
    <div class="grid grid-three-column">
      <div class="Manali">
        <img src="{{('assets/images/honeymoondestination/Manali.png')}}" alt="Manali Image">
        <div class="overlay">
            <a href="">Manali</a>
        </div>
      </div>
      <div class="Nepal">
        <img src="{{('assets/images/honeymoondestination/Nepal.png')}}" alt="Nepal Image">
        <div class="overlay">
            <a href="">Nepal</a>
        </div>
      </div>
      <div class="Rajasthan">
        <img src="{{('assets/images/honeymoondestination/Rajasthan.png')}}" alt="Rajasthan Image">
        <div class="overlay">
            <a href="">Rajasthan</a>
        </div>
      </div>
    </div>
</div>
</div>
<x-footer />