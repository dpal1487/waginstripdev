
@extends('layouts.master')
@section('title', 'Wagnistrip')

  <link rel="stylesheet" href="{{('assets/css/destinationcss/heritagedestinations.css')}}">
  <!--Deskstop view-->

<div class="contain">
    <h2 style="margin-top:100px;">Heritage Destinations</h2>
    <div class="card-1">
    <div class="grid grid-three-column">
      <div class="Agra">
        <img src="{{('assets/images/honeymoondestination/Agra.png')}}" alt="Agra Image">
        <div class="overlay">
            <a href="">Agra</a>
        </div>
      </div>
      <div class="Cambodia">
        <img src="{{('assets/images/honeymoondestination/Cambodia.png')}}" alt="Cambodia Image">
        <div class="overlay">
            <a href="">Cambodia</a>
        </div>
      </div>
      <div class="Egypt">
        <img src="{{('assets/images/honeymoondestination/Egypt.png')}}" alt="Egypt Image">
        <div class="overlay">
            <a href="">Egypt</a>
        </div>
      </div>
    </div>
</div>
<div class="card-2">
    <div class="grid grid-three-column">
      <div class="Greece">
        <img src="{{('assets/images/honeymoondestination/Greece.png')}}" alt="Greece Image">
        <div class="overlay">
            <a href="">Greece</a>
        </div>
      </div>
      <div class="RedFort">
        <img src="{{('assets/images/honeymoondestination/Red Fort.png')}}" alt="Red Fort Image">
        <div class="overlay">
            <a href="">Red Fort</a>
        </div>
      </div>
      <div class="Romania">
        <img src="{{('assets/images/honeymoondestination/Romania.png')}}" alt="Romania Image">
        <div class="overlay">
            <a href="">Romania</a>
        </div>
      </div>
    </div>
</div>
</div>
<x-footer />