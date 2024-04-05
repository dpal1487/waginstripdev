@extends('layouts.master')
@section('title', 'Wagnistrip')

  <link rel="stylesheet" href="{{('assets/css/destinationcss/internationaldestinations.css')}}">
  <!--Deskstop view-->

<div class="contain">
    <h2 style="margin-top:100px;">International Destinations</h2>
    <div class="card-1">
    <div class="grid grid-three-column">
      <div class="bangkok">
        <img src="{{('assets/images/honeymoondestination/Bangkok (1).png')}}" alt="Bangkok Image">
        <div class="overlay">
            <a href="">Bangkok</a>
        </div>
      </div>
      <div class="barcelona">
        <img src="{{('assets/images/honeymoondestination/Barcelona.png')}}" alt="Barcelona Image">
        <div class="overlay">
            <a href="">Barcelona</a>
        </div>
      </div>
      <div class="canada">
        <img src="{{('assets/images/honeymoondestination/canada .png')}}" alt="Canada Image">
        <div class="overlay">
            <a href="">Canada</a>
        </div>
      </div>
    </div>
</div>
<div class="card-2">
    <div class="grid grid-three-column">
      <div class="dubai">
        <img src="{{('assets/images/honeymoondestination/Dubai  (2).png')}}" alt="Dubai Image">
        <div class="overlay">
            <a href="">Dubai</a>
        </div>
      </div>
      <div class="singapore">
        <img src="{{('assets/images/honeymoondestination/Singapore .png')}}" alt="Singapore Image">
        <div class="overlay">
            <a href="">Singapore</a>
        </div>
      </div>
      <div class="usa">
        <img src="{{('assets/images/honeymoondestination/USA .png')}}" alt="USA Image">
        <div class="overlay">
            <a href="">USA</a>
        </div>
      </div>
    </div>
</div>
</div>

<x-footer />