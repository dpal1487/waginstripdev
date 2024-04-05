@extends('layouts.master')
@section('title', 'Wagnistrip')

  <link rel="stylesheet" href="{{('assets/css/destinationcss/beachdestinations.css')}}">
  <!--Deskstop view-->

<div class="contain">
    <h2 style="margin-top: 100px;">Beach Destinations</h2>
    <div class="card-1">
    <div class="grid grid-three-column">
      <div class="australia">
        <img src="{{('assets/images/honeymoondestination/AUSTRALIA.png')}}" alt="Australia Image">
        <div class="overlay">
            <a href="">Australia</a>
        </div>
      </div>
      <div class="goa">
        <img src="{{('assets/images/honeymoondestination/GOA.png')}}" alt="Goa Image">
        <div class="overlay">
            <a href="">Goa</a>
        </div>
      </div>
      <div class="hawaii">
        <img src="{{('assets/images/honeymoondestination/Hawaii.png')}}" alt="Hawaii Image">
        <div class="overlay">
            <a href="">Hawaii</a>
        </div>
      </div>
    </div>
</div>
<div class="card-2">
    <div class="grid grid-three-column">
      <div class="maldives">
        <img src="{{('assets/images/honeymoondestination/MALDIVES.png')}}" alt="Maldives Image">
        <div class="overlay">
            <a href="">Maldives</a>
        </div>
      </div>
      <div class="philippines">
        <img src="{{('assets/images/honeymoondestination/Philippines.png')}}" alt="Philippines Image">
        <div class="overlay">
            <a href="">Philippines</a>
        </div>
      </div>
      <div class="thailand">
        <img src="{{('assets/images/honeymoondestination/THAILAND.png')}}" alt="Thailand Image">
        <div class="overlay">
            <a href="">Thailand</a>
        </div>
      </div>
    </div>
</div>
</div>
<x-footer />