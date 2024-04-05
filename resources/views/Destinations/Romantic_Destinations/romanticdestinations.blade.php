@extends('layouts.master')
@section('title', 'Wagnistrip')

  <link rel="stylesheet" href="{{('assets/css/destinationcss/romanticdestinations.css')}}">
      <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
  <!--Deskstop view-->

<div class="contain">
    <h2 style="margin-top: 100px;">Romantic Destinations</h2>
    <div class="card-1">
    <div class="grid grid-three-column">
      <div class="switzerland">
        <img src="{{('assets/images/honeymoondestination/Switzerland (2).png')}}" alt="Switzerland Image">
        <div class="overlay heading_40">
            <a href="">Switzerland</a>
        </div>
      </div>
      <div class="capetown">
        <img src="{{('assets/images/honeymoondestination/Capetown .png')}}" alt="Capetown Image">
        <div class="overlay heading_40">
            <a href="">Capetown</a>
        </div>
      </div>
      <div class="maldives">
        <img src="{{('assets/images/honeymoondestination/Maldives .png')}}" alt="Maldives Image">
        <div class="overlay">
            <a href="">Maldives</a>
        </div>
      </div>
    </div>
</div>
<div class="card-2">
    <div class="grid grid-three-column">
      <div class="mexico">
        <img src="{{('assets/images/honeymoondestination/Mexico.png')}}" alt="Mexico Image">
        <div class="overlay">
            <a href="">Mexico</a>
        </div>
      </div>
      <div class="paris">
        <img src="{{('assets/images/honeymoondestination/Paris .png')}}" alt="Paris Image">
        <div class="overlay">
            <a href="">Paris</a>
        </div>
      </div>
      <div class="spain">
        <img src="{{('assets/images/honeymoondestination/spain .png')}}" alt="Spain Image">
        <div class="overlay">
            <a href="">Spain</a>
        </div>
      </div>
    </div>
</div>
</div>

<x-footer />