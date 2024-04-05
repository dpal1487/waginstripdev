@extends('layouts.master')
@section('title', 'XYZ')
@section('body')
<!-- DESKTOP VIEW START  -->

<div class="tourExperienceBanner">
</div>

<div class="searchBanner1">
    <p class="m-0 small font-weight-bold">Searching for</p>
    <input id="myInput" name="myCountry" type="text" placeholder="Activities Globally">
</div>

<div class="tourSliderBox1">
    <h1>Select your city</h1>
    <div class="tourSldr1">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="one1">
                        <img src="assets/images/holiday/1.jpg" alt="">
                        <h6>Goa</h6>
                        <p>70+ Options</p>
                    </div>
                    <div class="one2">
                        <img src="assets/images/holiday/6.jpg" alt="">
                        <h6>Bali</h6>
                        <p>50+ Options</p>
                    </div>
                    <div class="one3">
                        <img src="assets/images/holiday/2.jpg" alt="">
                        <h6>Keral</h6>
                        <p>50+ Options</p>
                    </div>
                    <div class="one4">
                        <img src="assets/images/holiday/3.jpg" alt="">
                        <h6>Kolkata</h6>
                        <p>50+ Options</p>
                    </div>
                    <div class="one5">
                        <img src="assets/images/holiday/4.jpg" alt="">
                        <h6>Mumbai</h6>
                        <p>50+ Options</p>
                    </div>
                    <div class="one6">
                        <img src="assets/images/holiday/5.jpg" alt="">
                        <h6>Delhi</h6>
                        <p>50+ Options</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="one1">
                        <img src="assets/images/holiday/7.jpg" alt="">
                        <h6>Dubai</h6>
                        <p>50+ Options</p>
                    </div>
                    <div class="one2">
                        <img src="assets/images/holiday/8.jpg" alt="">
                        <h6>Jaipur</h6>
                        <p>50+ Options</p>
                    </div>
                    <div class="one3">
                        <img src="assets/images/holiday/9.jpg" alt="">
                        <h6>Rajashtan</h6>
                        <p>50+ Options</p>
                    </div>
                    <div class="one4">
                        <img src="assets/images/holiday/11.jpg" alt="">
                        <h6>Uttrakhand</h6>
                        <p>50+ Options</p>
                    </div>
                    <div class="one5">
                        <img src="assets/images/holiday/3.jpg" alt="">
                        <h6>Kashmir</h6>
                        <p>50+ Options</p>
                    </div>
                    <div class="one6">
                        <img src="assets/images/holiday/5.jpg" alt="">
                        <h6>Kolkata</h6>
                        <p>50+ Options</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                </span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                </span>
            </a>
        </div>
    </div>
</div>

<div class="container p-0">
    <div class="lftSdr35">
        <h4 class="font-weight-bold m-0 pb-3">Refine Search</h4>
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search" title="Type in a name">
        <h6 class="m-0 pt-3 font-weight-bold">
            Select Price Range
        </h6>
        <div class="slidecontainer mt-3">
            <input type="range" min="1000" max="100000" value="0" class="slider576" id="myRange">
            <h6 class="font-weight-bold mt-3 text-muted">Value: <span id="result1"></span></h6>
        </div>
        <h6 class="m-0 pt-3 pb-2 font-weight-bold">Categories</h6>
        <div class="categories12">
            <label class="categ56">Private & Custom Tours
                <input type="checkbox" checked="checked">
                <span class="checkmark"></span>
            </label>
            <label class="categ56">Tours & Sightseeing
                <input type="checkbox" checked="checked">
                <span class="checkmark"></span>
            </label>
            <label class="categ56">Water Sports
                <input type="checkbox" checked="checked">
                <span class="checkmark"></span>
            </label>
            <label class="categ56">Cultural & Theme Tours
                <input type="checkbox" checked="checked">
                <span class="checkmark"></span>
            </label>
            <label class="categ56">Spa and Wellness
                <input type="checkbox" checked="checked">
                <span class="checkmark"></span>
            </label>
        </div>
        <h6 class="m-0 pt-3 pb-2 font-weight-bold">Categories</h6>
        <div class="categories12">
            <label class="categ56">Private & Custom Tours
                <input type="checkbox" checked="checked">
                <span class="checkmark"></span>
            </label>
            <label class="categ56">Tours & Sightseeing
                <input type="checkbox" checked="checked">
                <span class="checkmark"></span>
            </label>
            <label class="categ56">Water Sports
                <input type="checkbox" checked="checked">
                <span class="checkmark"></span>
            </label>
            <label class="categ56">Cultural & Theme Tours
                <input type="checkbox" checked="checked">
                <span class="checkmark"></span>
            </label>
            <label class="categ56">Spa and Wellness
                <input type="checkbox" checked="checked">
                <span class="checkmark"></span>
            </label>
        </div>
        <h6 class="m-0 pt-3 pb-2 font-weight-bold">Categories</h6>
        <div class="categories12">
            <label class="categ56">
                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <input type="checkbox" checked="checked">
                <span class="checkmark"></span>
            </label>
            <label class="categ56">
                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <input type="checkbox" checked="checked">
                <span class="checkmark"></span>
            </label>
            <label class="categ56">
                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                <input type="checkbox" checked="checked">
                <span class="checkmark"></span>
            </label>
        </div>
    </div>
    <div class="rgtSdr35">
        <h4 class="font-weight-bold m-0"> Activities across cities</h4>
        <p class="small m-0 pb-2">(out of 9258+ activities)</p>
        <div class="crdtrp1">
            <div class="imgbox1"></div>
            <div class="dsc1">
                <h5>Lorem Ipsum is simply dummy text of the printing.</h5>
                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <br>
                <p>168 Rating</p>
                <h6>Plan for: <span>11 Hours</span></h6>
                <br>
                <hr>
                <p class="small-5">&#8226; There are many variations of passages of Lorem Ipsum available, but the
                    majority have suffered alteration in some form,</p>
                <button>Read More...</button>
            </div>
            <div class="priceTag1">
                <div class="ofr1">
                    Save 20%
                </div>
                <h5 class="text-secondary"><del>₹3,500</del></h5>
                <h3>₹8,500</h3>
                <p class="text-secondary">Per Person</p>
                <span>(Inclusive of all taxes)</span>
            </div>
        </div>
        <div class="crdtrp1">
            <div class="imgbox1"></div>
            <div class="dsc1">
                <h5>Lorem Ipsum is simply dummy text of the printing.</h5>
                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <br>
                <p>168 Rating</p>
                <h6>Plan for: <span>11 Hours</span></h6>
                <br>
                <hr>
                <p class="small-5">&#8226; There are many variations of passages of Lorem Ipsum available, but the
                    majority have suffered alteration in some form,</p>
                <button>Read More...</button>
            </div>
            <div class="priceTag1">
                <div class="ofr1">
                    Save 20%
                </div>
                <h5 class="text-secondary"><del>₹3,500</del></h5>
                <h3>₹8,500</h3>
                <p class="text-secondary">Per Person</p>
                <span>(Inclusive of all taxes)</span>
            </div>
        </div>
        <div class="crdtrp1">
            <div class="imgbox1"></div>
            <div class="dsc1">
                <h5>Lorem Ipsum is simply dummy text of the printing.</h5>
                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <br>
                <p>168 Rating</p>
                <h6>Plan for: <span>11 Hours</span></h6>
                <br>
                <hr>
                <p class="small-5">&#8226; There are many variations of passages of Lorem Ipsum available, but the
                    majority have suffered alteration in some form,</p>
                <button>Read More...</button>
            </div>
            <div class="priceTag1">
                <div class="ofr1">
                    Save 20%
                </div>
                <h5 class="text-secondary"><del>₹3,500</del></h5>
                <h3>₹8,500</h3>
                <p class="text-secondary">Per Person</p>
                <span>(Inclusive of all taxes)</span>
            </div>
        </div>
        <div class="crdtrp1">
            <div class="imgbox1"></div>
            <div class="dsc1">
                <h5>Lorem Ipsum is simply dummy text of the printing.</h5>
                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <br>
                <p>168 Rating</p>
                <h6>Plan for: <span>11 Hours</span></h6>
                <br>
                <hr>
                <p class="small-5">&#8226; There are many variations of passages of Lorem Ipsum available, but the
                    majority have suffered alteration in some form,</p>
                <button>Read More...</button>
            </div>
            <div class="priceTag1">
                <div class="ofr1">
                    Save 20%
                </div>
                <h5 class="text-secondary"><del>₹3,500</del></h5>
                <h3>₹8,500</h3>
                <p class="text-secondary">Per Person</p>
                <span>(Inclusive of all taxes)</span>
            </div>
        </div>
    </div>
</div>


<!-- DESKTOP VIEW END   -->

<script>
    var slider = document.getElementById("myRange");
    var output = document.getElementById("result1");
    output.innerHTML = slider.value;

    slider.oninput = function () {
        output.innerHTML = this.value;
    }

</script>

<x-footer />
@endsection
