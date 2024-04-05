@extends('layouts.master')
@section('title', 'Wagnistrip')

  <link rel="stylesheet" href="{{('assets/css/destinationcss/weekendgateways.css')}}">
  <!--Deskstop view-->

<div class="contain">
    <h2 style="margin-top:100px;">Weekend Gateways</h2>
    <div class="card-1">
    <div class="grid grid-three-column">
      <div class="france">
        <img src="{{('assets/images/honeymoondestination/France.png')}}" alt="France Image">
        <div class="overlay">
            <a href="">France</a>
        </div>
      </div>
      <div class="italy">
        <img src="{{('assets/images/honeymoondestination/Italy.png')}}" alt="Italy Image">
        <div class="overlay">
            <a href="">Italy</a>
        </div>
      </div>
      <div class="newZealand">
        <img src="{{('assets/images/honeymoondestination/New Zealand.png')}}" alt="New Zealand Image">
        <div class="overlay">
            <a href="">New Zealand</a>
        </div>
      </div>
    </div>
</div>
<div class="card-2">
    <div class="grid grid-three-column">
      <div class="rishikesh">
        <img src="{{('assets/images/honeymoondestination/Rishikesh.png')}}" alt="Rishikesh Image">
        <div class="overlay">
            <a href="">Rishikesh</a>
        </div>
      </div>
      <div class="shimla">
        <img src="{{('assets/images/honeymoondestination/Shimla.png')}}" alt="Shimla Image">
        <div class="overlay">
            <a href="">Shimla</a>
        </div>
      </div>
      <div class="spain">
        <img src="{{('assets/images/honeymoondestination/Spain.png')}}" alt="Spain Image">
        <div class="overlay">
            <a href="">Spain</a>
        </div>
      </div>
    </div>
</div>
</div>
<x-footer />