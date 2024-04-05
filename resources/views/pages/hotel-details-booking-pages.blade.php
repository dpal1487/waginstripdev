@extends('layouts.master')
@section('title', 'XYZ')
@section('body')
<!-- DESKTOP VIEW START  -->
<x-userpages.holidays-banner />

<div class="mainsectionshotel-1 shadow-md">
    <h3>Hotel Palace, Valmar Resorts</h3>
    <i class="fa fa-star text-warning" aria-hidden="true"></i>
    <i class="fa fa-star text-warning" aria-hidden="true"></i>
    <i class="fa fa-star text-warning" aria-hidden="true"></i>
    <i class="fa fa-star text-warning" aria-hidden="true"></i>
    <p><i class="fa fa-map-marker" aria-hidden="true"></i> Luxury Hotel - <strong>Goa,</strong> India</p>

    <ul class="moreDetailsMenu1">
        <li class="tablink" onclick="openPage('Description', this, '#0065a5', '#fff')" id="defaultOpen">Description</li>
        <li class="tablink" onclick="openPage('Accommodation', this, '#0065a5', '#fff')" >Accommodation</li>
        <li class="tablink" onclick="openPage('Description', this, '#0065a5', '#fff')">Description</li>
        <li class="tablink" onclick="openPage('Location', this, '#0065a5', '#fff')">Location</li>
        <li class="tablink" onclick="openPage('Calendar', this, '#0065a5', '#fff')">Calendar</li>
        <li class="tablink" onclick="openPage('More', this, '#0065a5', '#fff')">+ More Offers</li>
    </ul>

    <div id="Description" class="tabcontent">
        <div class="sliderHotelPhotos-1">

        </div>
    </div>

    <div id="Accommodation" class="tabcontent">
        <h3>Accommodation</h3>
        <p>Some news this fine day!</p>
    </div>

    <div id="Description" class="tabcontent">
        <h3>Description</h3>
        <p>Get in touch, or swing by for a cup of coffee.</p>
    </div>

    <div id="Location" class="tabcontent">
        <h3>Location</h3>
        <p>Who we are and what we do.</p>
    </div>
    <div id="Calendar" class="tabcontent">
        <h3>Calendar</h3>
        <p>Who we are and what we do.</p>
    </div>
    <div id="More" class="tabcontent">
        <h3>More</h3>
        <p>Who we are and what we do.</p>
    </div>

    <div class="leftSiderPriceTages1">

    </div>
    

</div>

<!-- DESKTOP VIEW END   -->

<script>
    function openPage(pageName, elmnt, color, fontColor) {
        // Hide all elements with class="tabcontent" by default */
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        // Remove the background color of all tablinks/buttons
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].style.backgroundColor = "";
            tablinks[i].style.color = "";
        }

        // Show the specific tab content
        document.getElementById(pageName).style.display = "block";

        // Add the specific color to the button used to open the tab content
        elmnt.style.backgroundColor = color;
        elmnt.style.color = fontColor;
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>

<x-footer />
@endsection
