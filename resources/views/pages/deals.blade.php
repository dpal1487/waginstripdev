@extends('layouts.master')
@section('title','XYZ')
@section("body")
    <div class="pt-6p"></div>
     <!-- Breadcrumb -->
     <section class="breadcrumb-outer text-center">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>Deals </h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="#">Deals</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="section-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->

    <section class="item-content">
        <div class="container boxunder slitxt">

            <h4>What You Get?</h4>
            <p style="padding: 15px">Domestic: Each passenger will get flat discount of upto Rs.299 on One-way & upto Rs.598 for Roundtrip
                International: Each passenger will get flat discount of upto Rs.699 on One-way & upto Rs.1398 for
                Roundtrip
                On a single PNR, maximum applicable discount is upto Rs.3000</p>

            <h4>How do you get it?</h4>
            <p style="padding: 15px">To avail discounts, users have to book flight tickets (domestic & international) for their preferred
                destination by applying coupon code: MTT2021
                This offer is valid for booking till 30st Aug, 2021
                All our new and existing customers can avail this offer
                The offer is valid for bookings made on XYZ's website, Mobile site, Android & iOS App</p>

            <h4>What else do you need to know?</h4>
            <p style="padding: 15px">Convenience fee will be charged as per the applicability
                The offer can't be clubbed with any other promotional offers
                Bookings with the valid promo codes will be only eligible for this offer
                In case of partial/full cancellation the offer stands void and discount will be rolled back before
                processing the refunds.
                Changes in flights and dates are allowed with change fees and fare difference
                Changes in names are not allowed</p>

            <h4>Terms & Conditions</h4>
            <p style="padding: 15px">In the event of any misuse or abuse of the offer, XYZ reserves the right to deny the offer to
                the customers.
                XYZ is the sole authority for interpretation of these terms.
                In addition, XYZ standard booking and privacy policy on www.xyz.com shall apply.
                In the event of any dispute, Courts of New Delhi will have jurisdiction.
                XYZ reserves the right, at any time, without prior notice and liability and without assigning
                any reason whatsoever, to add/alter/modify/change or vary all of these terms and conditions or to replace,
                wholly or in part, this offer by another offer, whether similar to this offer or not, or to extend or
                withdraw it altogether.
                XYZ shall not be liable for any loss or damage arising due to force majeure.</p>



            <div class="comment-form">
                <form>
                    <h3>Add a comment</h3>
                    <div class="row">
                       
                        <div class="form-group col-sm-6">
                            <label for="Name">Name:</label>
                            <input type="text" class="form-control" id="Name">
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="email">Email address:</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group col-sm-12">
                            <label for="website">Website:</label>
                            <input type="text" class="form-control" id="website">
                        </div>
                        <div class="form-group col-sm-12">
                            <label for="Name">Your Comment:</label>
                            <textarea class="form-control"></textarea>
                        </div>
                        <div class="col-sm-12">
                            <div class="comment-btn">
                                <a href="#" class="btn btn-sm btn-info">Submit Comment</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>

        
    </section>


    <div class="borderbotum"></div>
    {{-- <x-footer-tag /> --}}
    <x-footer />
@endsection