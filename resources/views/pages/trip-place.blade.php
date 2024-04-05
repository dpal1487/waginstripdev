@extends('layouts.master')
@section('title', 'XYZ')
@section('body')
<!-- DESKTOP VIEW START  -->

<div class="tripBanner12">
    <div class="bnrtrp">
        <h1>Visit Tegallalang Rice Terraces</h1>
        <h6><i class="fa fa-map-marker" aria-hidden="true"></i> Bali</h6>
        <p>Tiered Paddy Fields</p>
    </div>
</div>

<div class="trip-activities-60">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner" style="border-radius:10px;">
            <div class="carousel-item active" style="border-radius:10px;">
                <img class="d-block" src="assets/images/holiday/1.jpg"
                    style="height:350px; width:1090px; background-size:cover; border-radius:10px;">
            </div>
            <div class="carousel-item" style="border-radius:10px;">
                <img class="d-block" src="assets/images/holiday/1.jpg"
                    style="height:350px; width:1090px; background-size:cover; border-radius:10px;">
            </div>
            <div class="carousel-item" style="border-radius:10px;">
                <img class="d-block" src="assets/images/holiday/1.jpg"
                    style="height:350px; width:1090px; background-size:cover; border-radius:10px;">
            </div>
            <div class="carousel-item" style="border-radius:10px;">
                <img class="d-block" src="assets/images/holiday/1.jpg"
                    style="height:350px; width:1090px; background-size:cover; border-radius:10px;">
            </div>
            <div class="carousel-item" style="border-radius:10px;">
                <img class="d-block" src="assets/images/holiday/1.jpg"
                    style="height:350px; width:1090px; background-size:cover; border-radius:10px;">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div class="trip-activities-sec10">
    <h1 class="font-weight-bold m-0">Overview</h1>
    <p class="m-0">The Tegallalang rice terraces are tiered paddy fields along the hills of
        Ubud that offer insights into the cultivation of rice by local villagers.</p>
    <div class="tripTabtime">
        <input id="tabbox" type="checkbox">
        <label for="tabbox">
            <h5 class="float-left mr-5 text-success"><i class="fa fa-clock-o" aria-hidden="true"></i> Open Hours</h5>
            <h5 class="font-weight-bold text-muted">Suggested Duration - 30 minutes</h5>
        </label>
        <div class="tab-content">
            <ul>
                <li>
                    <p>Monday</p>
                    <span>8:00 AM - 6:00 PM</span>
                </li>
                <li>
                    <p>Tuesday</p>
                    <span>8:00 AM - 6:00 PM</span>
                </li>
                <li>
                    <p>Wednesday</p>
                    <span>8:00 AM - 6:00 PM</span>
                </li>
                <li>
                    <p>Thursday</p>
                    <span>8:00 AM - 6:00 PM</span>
                </li>
                <li>
                    <p>Friday</p>
                    <span>8:00 AM - 6:00 PM</span>
                </li>
                <li>
                    <p>Saturday</p>
                    <span>8:00 AM - 6:00 PM</span>
                </li>
                <li>
                    <p>Sunday</p>
                    <span>8:00 AM - 6:00 PM</span>
                </li>
            </ul>
        </div>
    </div>
    <h4 class="font-weight-bold pt-3"><i class="fa fa-circle-o text-danger" aria-hidden="true"></i> What To Expect?</h4>
    <p>Best visited early in the morning or late in the afternoon, the Tegallalang rice terraces are laid out like a
        mosaic in various shades of green.</p>
    <h4 class="font-weight-bold pt-3"><i class="fa fa-circle-o text-success" aria-hidden="true"></i> Tips</h4>
    <ul style="margin-left:-25px;">
        <li>There is no entrance fee for the site.</li>
        <li>The site has cafés and shops nearby.</li>
        <li>Walk on the designated pathways at the site.</li>
    </ul>
</div>

<div class="trip-cardSlider-2">
    <h1 class="font-weight-bold float-left">Similar Places</h1>
    <div class="btn96">
        <span href="#carouselExampleControls" role="button" data-slide="prev"><i class="fa fa-angle-left"
                aria-hidden="true"></i></span>
        <span href="#carouselExampleControls" role="button" data-slide="next"><i class="fa fa-angle-right"
                aria-hidden="true"></i></span>
    </div>
    <div class="slidrCnt52 carousel slide" id="carouselExampleControls" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="slideCard1">
                    <div></div>
                    <h6 class="font-weight-bold m-0 pt-2">Explore the Ancient Temples</h6>
                    <p class="small">Soak in Balinese Culture</p>
                </div>
                <div class="slideCard2">
                    <div></div>
                    <h6 class="font-weight-bold m-0 pt-2">Explore the Ancient Temples</h6>
                    <p class="small">Soak in Balinese Culture</p>
                </div>
                <div class="slideCard3">
                    <div></div>
                    <h6 class="font-weight-bold m-0 pt-2">Explore the Ancient Temples</h6>
                    <p class="small">Soak in Balinese Culture</p>
                </div>
                <div class="slideCard4">
                    <div></div>
                    <h6 class="font-weight-bold m-0 pt-2">Explore the Ancient Temples</h6>
                    <p class="small">Soak in Balinese Culture</p>
                </div>
                <div class="slideCard5">
                    <div></div>
                    <h6 class="font-weight-bold m-0 pt-2">Explore the Ancient Temples</h6>
                    <p class="small">Soak in Balinese Culture</p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="slideCard1">
                    <div></div>
                    <h6 class="font-weight-bold m-0 pt-2">Explore the Ancient Temples</h6>
                    <p class="small">Soak in Balinese Culture</p>
                </div>
                <div class="slideCard2">
                    <div></div>
                    <h6 class="font-weight-bold m-0 pt-2">Explore the Ancient Temples</h6>
                    <p class="small">Soak in Balinese Culture</p>
                </div>
                <div class="slideCard3">
                    <div></div>
                    <h6 class="font-weight-bold m-0 pt-2">Explore the Ancient Temples</h6>
                    <p class="small">Soak in Balinese Culture</p>
                </div>
                <div class="slideCard4">
                    <div></div>
                    <h6 class="font-weight-bold m-0 pt-2">Explore the Ancient Temples</h6>
                    <p class="small">Soak in Balinese Culture</p>
                </div>
                <div class="slideCard5">
                    <div></div>
                    <h6 class="font-weight-bold m-0 pt-2">Explore the Ancient Temples</h6>
                    <p class="small">Soak in Balinese Culture</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="trip-cardSlider-3">
    <div id="cardSlid557">
        <h1 class="font-weight-bold float-left">Similar Places</h1>
        <div class="btn98">
            <span href="#sliderControl12" role="button" data-slide="prev"><i class="fa fa-angle-left"
                    aria-hidden="true"></i></span>
            <span href="#sliderControl12" role="button" data-slide="next"><i class="fa fa-angle-right"
                    aria-hidden="true"></i></span>
        </div>
    </div>
    <div class="slidrCnt53 carousel slide" id="sliderControl12" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="slideCard1">
                    <a href="{{ url('/trip-destinations') }}">
                        <div>
                            <span>HONEYMOON</span>
                        </div>
                        <h6 class="font-weight-bold m-0 pt-2">Explore the Ancient Temples</h6>
                        <p class="small">Soak in Balinese Culture</p>
                    </a>
                </div>
                <div class="slideCard2">
                    <a href="">
                        <div>
                            <span>HONEYMOON</span>
                        </div>
                        <h6 class="font-weight-bold m-0 pt-2">Explore the Ancient Temples</h6>
                        <p class="small">Soak in Balinese Culture</p>
                    </a>
                </div>
                <div class="slideCard3">
                    <a href="">
                        <div>
                            <span>HONEYMOON</span>
                        </div>
                        <h6 class="font-weight-bold m-0 pt-2">Explore the Ancient Temples</h6>
                        <p class="small">Soak in Balinese Culture</p>
                    </a>
                </div>
                <div class="slideCard4">
                    <a href="">
                        <div>
                            <span>HONEYMOON</span>
                        </div>
                        <h6 class="font-weight-bold m-0 pt-2">Explore the Ancient Temples</h6>
                        <p class="small">Soak in Balinese Culture</p>
                    </a>
                </div>
                <div class="slideCard5">
                    <a href="">
                        <div>
                            <span>HONEYMOON</span>
                        </div>
                        <h6 class="font-weight-bold m-0 pt-2">Explore the Ancient Temples</h6>
                        <p class="small">Soak in Balinese Culture</p>
                    </a>
                </div>
            </div>
            <div class="carousel-item">
                <div class="slideCard1">
                    <a href="">
                        <div>
                            <span>HONEYMOON</span>
                        </div>
                        <h6 class="font-weight-bold m-0 pt-2">Explore the Ancient Temples</h6>
                        <p class="small">Soak in Balinese Culture</p>
                    </a>
                </div>
                <div class="slideCard2">
                    <a href="">
                        <div>
                            <span>HONEYMOON</span>
                        </div>
                        <h6 class="font-weight-bold m-0 pt-2">Explore the Ancient Temples</h6>
                        <p class="small">Soak in Balinese Culture</p>
                    </a>
                </div>
                <div class="slideCard3">
                    <a href="">
                        <div>
                            <span>HONEYMOON</span>
                        </div>
                        <h6 class="font-weight-bold m-0 pt-2">Explore the Ancient Temples</h6>
                        <p class="small">Soak in Balinese Culture</p>
                    </a>
                </div>
                <div class="slideCard4">
                    <a href="">
                        <div>
                            <span>HONEYMOON</span>
                        </div>
                        <h6 class="font-weight-bold m-0 pt-2">Explore the Ancient Temples</h6>
                        <p class="small">Soak in Balinese Culture</p>
                    </a>
                </div>
                <div class="slideCard5">
                    <a href="">
                        <div>
                            <span>HONEYMOON</span>
                        </div>
                        <h6 class="font-weight-bold m-0 pt-2">Explore the Ancient Temples</h6>
                        <p class="small">Soak in Balinese Culture</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="xyz-2">
    <h1 class="font-weight-bold">Exploring a destination...</h1>
    <p class="m-0">The joy of travel comes in exploring new things. Planting your feet somewhere you’ve
        never been before brings with it the rush of discovery and the joy of pushing back on the boundaries of your
        world.</p>
    <p class="m-0 pt-1">But when one does arrive at that fresh frontier, there are ways better than others to begin your
        journey of
        discovery.
        Follow these steps and see the world with a new light. </p>
    <ul>
        <li>Discover a new city through a food tour. Food tour’s are the easiest way to take a tour,
            learn about the local delicacies, and the best of all, get great tips that aren’t
            just “local” tips for tourists, but sometimes, lessons for a lifetime too </li>
        <li>Use Public Transportation. When you are in a new city, you can possibly see places
            and people that you wouldn’t normally see when simply walking to the places that checks your list.
            Some buses or rails take you to parts of the city you wouldn’t get to see otherwise.
            Whilst using public transportation, just ensure that you are following the local norms
            and do remember to watch the locals! </li>
        <li>
            Find a local festival. Go beyond what other tourists might do while visiting a place.
            Look for the unique things you would want to do. Use social media or the local
            tourism website to find out what’s going on locally. You may have to move out
            of the center of the city to do some of the less popular but more unique things,
            so just keep that in mind!
        </li>
    </ul>
</div>

<!-- DESKTOP VIEW END   -->
<x-footer />
@endsection
