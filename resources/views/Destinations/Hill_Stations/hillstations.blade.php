@extends('layouts.master')
@section('title', 'Wagnistrip')

  <link rel="stylesheet" href="{{('assets/css/destinationcss/hillstations.css')}}">
  <!--Deskstop view-->

<div class="contain">
    <h2 style="margin-top:100px;">Hill Stations</h2>
    <div class="card-1">
    <div class="grid grid-three-column">
      <div class="austria">
        <img src="{{('assets/images/honeymoondestination/Austria.png')}}" alt="Austria Image">
        <div class="overlay">
            <a href="">Austria</a>
        </div>
      </div>
      <div class="darjeeling">
        <img src="{{('assets/images/honeymoondestination/Darjiling.png')}}" alt="
        Darjeeling Image">
        <div class="overlay">
            <a href="">
              Darjeeling</a>
        </div>
      </div>
      <div class="Kashmir">
        <img src="{{('assets/images/honeymoondestination/Kashmir.png')}}" alt="Kashmir Image">
        <div class="overlay">
            <a href="">Kashmir</a>
        </div>
      </div>
    </div>
</div>
<div class="card-2">
    <div class="grid grid-three-column">
      <div class="mussoorie">
        <img src="{{('assets/images/honeymoondestination/Mussoorie.png')}}" alt="Mussoorie Image">
        <div class="overlay">
            <a href="">Mussoorie</a>
        </div>
      </div>
      <div class="ooty">
        <img src="{{('assets/images/honeymoondestination/Ooty.png')}}" alt="Ooty Image">
        <div class="overlay">
            <a href="">Ooty</a>
        </div>
      </div>
      <div class="switzerland">
        <img src="{{('assets/images/honeymoondestination/Switzerland.png')}}" alt="Switzerland Image">
        <div class="overlay">
            <a href="">Switzerland</a>
        </div>
      </div>
    </div>
</div>
</div>

<x-footer />