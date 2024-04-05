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
<div class="tptsect5">
    <h1>Explore Goa</h1>
    <span data-toggle="modal" data-target="#exampleModal">Change City</span>
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
        <h4 class="font-weight-bold m-0"> 243 Activities in Goa</h4>
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
