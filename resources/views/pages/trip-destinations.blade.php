@extends('layouts.master')
@section('title', 'XYZ')
@section('body')
<!-- DESKTOP VIEW START  -->

<div class="tripBanner15">
    <div class="bnrtrp">
        <h1 class="">Honeymoon Destinations Under ₹50,000</h1>
        <p class="font-weight-normal">Whatever you explore today will last a lifetime with you. Discover the best places
            and plan your next trip to
            these amazing recommendations with Trip Ideas.
            Time to pack your bags and set on a journey to scratch off a few destinations of your bucketlist</p>
        <h4 class="font-weight-bold float-left" style="color:white;">Travelling from</h4>
        <select>
            <option value="delhi">Delhi</option>
            <option value="Uttrakhand">Delhi</option>
            <option value="Goa">Goa</option>
            <option value="Kolkata">Kolkata</option>
        </select>
    </div>
</div>

<div class="trip-destinations-1">
    <div class="trip-sider1">
        <h4 class="pb-4 font-weight-bold" style="color:#0164a3;">No Filters Applied</h4>
        <hr>
        <h5 class="pb-3 pt-4 font-weight-bold" style="color:#0164a3;">Select Filters</h5>
        <h5 class="font-weight-bold pb-3" style="color:#0164a3;">Loctions</h5>
        <input type="radio" id="anywhere" name="locations" value="ANYWHERE">
        <label for="anywhere">Any Where</label><br>
        <input type="radio" id="weekendGetaway" name="locations" value="GETAWAY">
        <label for="css">Weekend Getaway</label><br>
        <input type="radio" id="domestic" name="locations" value="Domestic">
        <label for="domestic">Domestic</label><br>
        <input type="radio" id="international" name="locations" value="International">
        <label for="international">International</label>
        <br>
        <br>
        <h5 class="font-weight-bold pb-3" style="color:#0164a3;">Theme</h5>
        <input type="checkbox" checked="checked" value="Heritage">
        <label for="checkbox">Heritage</label><br>
        <input type="checkbox" checked="checked" value="Romantic">
        <label for="checkbox">Romantic</label><br>
        <input type="checkbox" checked="checked" value="Honeymoon">
        <label for="checkbox">Honeymoon</label><br>
        <input type="checkbox" checked="checked" value="Relaxation">
        <label for="checkbox">Relaxation</label><br>
        <input type="checkbox" checked="checked" value="Adventure">
        <label for="checkbox">Adventure</label><br>
        <input type="checkbox" checked="checked" value="Beach">
        <label for="checkbox">Beach</label><br>
        <input type="checkbox" checked="checked" value="Hills">
        <label for="checkbox">Hills & Mountains</label><br>
        <input type="checkbox" checked="checked" value="Wildlife">
        <label for="checkbox">Wildlife</label><br>
        <input type="checkbox" checked="checked" value="Pilgrimage">
        <label for="checkbox">Pilgrimage</label><br>
        <input type="checkbox" checked="checked" value="Food">
        <label for="checkbox">Food</label><br>
        <input type="checkbox" checked="checked" value="Trek">
        <label for="checkbox">Trek</label><br>
        <h5 class="font-weight-bold pt-4 pb-3" style="color:#0164a3;">Budget Per Person</h5>
        <div class="slidecontainer">
            <input type="range" min="10000" max="100000" value="5000" class="slider576" id="myRange">
            <h5 class="font-weight-bold mt-3 text-muted">Value: <span id="result1"></span></h5>
        </div>

        <h5 class="font-weight-bold pt-4 pb-3" style="color:#0164a3;">Months</h5>
        <input type="checkbox" checked="checked" value="Heritage">
        <label for="checkbox">Jan-22</label><br>
        <input type="checkbox" checked="checked" value="Romantic">
        <label for="checkbox">Feb-22</label><br>
        <input type="checkbox" checked="checked" value="Honeymoon">
        <label for="checkbox">Mar-22</label><br>
        <input type="checkbox" checked="checked" value="Relaxation">
        <label for="checkbox">Apr-22</label><br>
        <input type="checkbox" checked="checked" value="Adventure">
        <label for="checkbox">May-22</label><br>
        <input type="checkbox" checked="checked" value="Beach">
        <label for="checkbox">Jun-22</label><br>
        <input type="checkbox" checked="checked" value="Hills">
        <label for="checkbox">Jul-22</label><br>
        <input type="checkbox" checked="checked" value="Wildlife">
        <label for="checkbox">Aug-22</label><br>
        <input type="checkbox" checked="checked" value="Pilgrimage">
        <label for="checkbox">Sep-22</label><br>
        <input type="checkbox" checked="checked" value="Food">
        <label for="checkbox">Oct-22</label><br>
        <input type="checkbox" checked="checked" value="Trek">
        <label for="checkbox">Nov-22</label><br>
        <input type="checkbox" checked="checked" value="Trek">
        <label for="checkbox">Dec-22</label><br>
    </div>
    <div class="trip-sider2">
        <div class="cardbox1">
            <div class="img5687"></div>
            <span>1</span>
            <h5>Goa</h5>
            <p>Celebrate your love with a honeymoon at Goa.
                You can expect very hot weather with high humidity levels.
                Goa is also popular for adventure activities.</p>
            <div id="tpbox">
                <h5>₹52,5200</h5>
                <h6>1509 Kms . 2h 25m</h6>
                <p>Approx. for 7 nights trip</p>
            </div>
            <button>Explore <i class="fa fa-angle-right" aria-hidden="true"></i></button>
        </div>
        <div class="cardbox2">
            <div class="img5687"></div>
            <span>1</span>
            <h5>Goa</h5>
            <p>Celebrate your love with a honeymoon at Goa.
                You can expect very hot weather with high humidity levels.
                Goa is also popular for adventure activities.</p>
            <div id="tpbox">
                <h5>₹52,5200</h5>
                <h6>1509 Kms . 2h 25m</h6>
                <p>Approx. for 7 nights trip</p>
            </div>
            <button>Explore <i class="fa fa-angle-right" aria-hidden="true"></i></button>
        </div>
        <div class="cardbox1">
            <div class="img5687"></div>
            <span>1</span>
            <h5>Goa</h5>
            <p>Celebrate your love with a honeymoon at Goa.
                You can expect very hot weather with high humidity levels.
                Goa is also popular for adventure activities.</p>
            <div id="tpbox">
                <h5>₹52,5200</h5>
                <h6>1509 Kms . 2h 25m</h6>
                <p>Approx. for 7 nights trip</p>
            </div>
            <button>Explore <i class="fa fa-angle-right" aria-hidden="true"></i></button>
        </div>
        <div class="cardbox2">
            <div class="img5687"></div>
            <span>1</span>
            <h5>Goa</h5>
            <p>Celebrate your love with a honeymoon at Goa.
                You can expect very hot weather with high humidity levels.
                Goa is also popular for adventure activities.</p>
            <div id="tpbox">
                <h5>₹52,5200</h5>
                <h6>1509 Kms . 2h 25m</h6>
                <p>Approx. for 7 nights trip</p>
            </div>
            <button>Explore <i class="fa fa-angle-right" aria-hidden="true"></i></button>
        </div>
        <div class="cardbox1">
            <div class="img5687"></div>
            <span>1</span>
            <h5>Goa</h5>
            <p>Celebrate your love with a honeymoon at Goa.
                You can expect very hot weather with high humidity levels.
                Goa is also popular for adventure activities.</p>
            <div id="tpbox">
                <h5>₹52,5200</h5>
                <h6>1509 Kms . 2h 25m</h6>
                <p>Approx. for 7 nights trip</p>
            </div>
            <button>Explore <i class="fa fa-angle-right" aria-hidden="true"></i></button>
        </div>
        <div class="cardbox2">
            <div class="img5687"></div>
            <span>1</span>
            <h5>Goa</h5>
            <p>Celebrate your love with a honeymoon at Goa.
                You can expect very hot weather with high humidity levels.
                Goa is also popular for adventure activities.</p>
            <div id="tpbox">
                <h5>₹52,5200</h5>
                <h6>1509 Kms . 2h 25m</h6>
                <p>Approx. for 7 nights trip</p>
            </div>
            <button>Explore <i class="fa fa-angle-right" aria-hidden="true"></i></button>
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

<script>
    var slider = document.getElementById("myRange");
    var output = document.getElementById("result1");
    output.innerHTML = slider.value;

    slider.oninput = function () {
        output.innerHTML = this.value;
    }

</script>

<!-- DESKTOP VIEW END   -->
<x-footer />
@endsection
