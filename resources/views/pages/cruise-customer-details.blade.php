@extends('layouts.master')
@section('title', 'XYZ')
@section('body')
<!-- DESKTOP VIEW START  -->

<div class="container" style="margin-top:120px;">
    <h4 class="m-0 font-weight-bold">2 Nights SUNDOWNER TO GOA</h4>
    <h6 class="m-0 font-weight-bold text-secondary">2N/4D <span class="small">( Departing from: Mumbai )</span></h6>

    <p class="m-0 small text-primary pt-2">
        <a href="{{ url('cruise') }}" class="text-primary">Cruise</a> >
        <a href="#" class="text-primary">Cordelia Cruises</a> >
        <a href="#">2 Nights SUNDOWNER TO GOA</a> >
        <span class="text-dark">Payment</span>
    </p>
</div>

<div class="container mt-3 mb-5">
    <div class="row">
        <div class="col-sm-8">
            <div class="card p-3">
                <h5 class="m-0 font-weight-bold">Booking Details</h5>
                <div class="row mt-2">
                    <div class="col-sm-5 p-2">
                        <div class="card">
                            <img src="assets/images/cruise/cruise-7.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-sm-7 p-2">
                        <div class="card p-3">
                            <h5 class="m-0 font-weight-bold">SUNDOWNER TO GOA</h5>
                            <h6 class="m-0 pt-2 small font-weight-bold">2 Nights</h6>
                            <p class="m-0 pt-2 small text-muted"><span class="font-weight-bold">Start:</span> Mumbai
                                (port of departure) > Mumbai > Goa >
                                Mumbai </p>
                            <p class="m-0  small text-muted"><span class="font-weight-bold">End:</span> Mumbai (port of
                                departure) </p>
                            <hr>
                            <p class="m-0  small">Departure Date: <span class="font-weight-bold">26 Nov 22,
                                    Saturday</span> </p>
                            <p class="m-0  small">Departure Date: <span class="font-weight-bold">Mumbai</span> </p>
                            <p class="m-0  small">Ship: <span class="font-weight-bold">EMPRESS</span> </p>
                            <p class="m-0  small">Deck: <span class="font-weight-bold">4</span> </p>
                            <p class="m-0  small">Cabin: <span class="font-weight-bold">Interior Standard </span> </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card p-3 mt-4">
                <h5 class="m-0 font-weight-bold"><i class="fa fa-user-circle-o" aria-hidden="true"></i>
                    Travellers Details</h5>
                <div class="card border-0 mt-4">
                    <h6 class="m-0 font-weight-bold">Traveller 1</h6>
                    <div class="row mt-2">
                        <div class="col-sm-2 p-2">
                            <select class="form-control" name="" id="">
                                <option value="select" selected>Title</option>
                                <option value="Mr">Mr.</option>
                                <option value="Mr">Mrs.</option>
                                <option value="Mr">Miss.</option>

                            </select>
                        </div>
                        <div class="col-sm-5 p-2">
                            <input class="form-control" type="text" placeholder="First name">
                        </div>
                        <div class="col-sm-5 p-2">
                            <input class="form-control" type="text" placeholder="Last name">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-3 p-2">
                            <input class="form-control" type="date">
                        </div>
                        <div class="col-sm-3 p-2">
                            <select class="form-control" name="" id="">
                                <option value="select" selected>Country</option>
                                <option value="India">India</option>
                            </select>
                        </div>
                        <div class="col-sm-3 p-2">
                            <select class="form-control" name="" id="">
                                <option value="select" selected>State/City</option>
                                <option value="Mr">New Delhi</option>
                                <option value="Mr">Goa</option>
                            </select>
                        </div>
                        <div class="col-sm-3 p-2">
                            <select class="form-control" name="" id="">
                                <option value="select" selected>Meal Type</option>
                                <option value="Mr">Vegetarian</option>
                                <option value="Mr">Non Vegetarian</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="card border-0 mt-4">
                    <h6 class="m-0 font-weight-bold">Traveller 2</h6>
                    <div class="row mt-2">
                        <div class="col-sm-2 p-2">
                            <select class="form-control" name="" id="">
                                <option value="select" selected>Title</option>
                                <option value="Mr">Mr.</option>
                                <option value="Mr">Mrs.</option>
                                <option value="Mr">Miss.</option>

                            </select>
                        </div>
                        <div class="col-sm-5 p-2">
                            <input class="form-control" type="text" placeholder="First name">
                        </div>
                        <div class="col-sm-5 p-2">
                            <input class="form-control" type="text" placeholder="Last name">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-3 p-2">
                            <input class="form-control" type="date">
                        </div>
                        <div class="col-sm-3 p-2">
                            <select class="form-control" name="" id="">
                                <option value="select" selected>Country</option>
                                <option value="India">India</option>
                            </select>
                        </div>
                        <div class="col-sm-3 p-2">
                            <select class="form-control" name="" id="">
                                <option value="select" selected>State/City</option>
                                <option value="Mr">New Delhi</option>
                                <option value="Mr">Goa</option>
                            </select>
                        </div>
                        <div class="col-sm-3 p-2">
                            <select class="form-control" name="" id="">
                                <option value="select" selected>Meal Type</option>
                                <option value="Mr">Vegetarian</option>
                                <option value="Mr">Non Vegetarian</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="card border-0 mt-4">
                    <h6 class="m-0 font-weight-bold">Contact Details</h6>
                    <div class="row mt-2">
                        <p class="m-0 small pl-3 text-muted">Your booking details will be sent to this email address and
                            mobile number.</p>
                        <div class="col-sm-5 p-2">
                            <input class="form-control" type="text" placeholder="Enter your email address">
                        </div>
                        <div class="col-sm-5 p-2">
                            <input class="form-control" type="text" placeholder="Enter your mobile number">
                        </div>
                    </div>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label small" for="exampleCheck1">
                        I understand and agree to the rules, <a href="#">Privacy Policy</a>, <a href="#">User
                            Agreement</a> and <a href="#">Terms & Conditions</a> of
                        XYZ
                    </label>
                </div>
                <button type="submit" class="btn btn-primary mt-2 mb-2">Continue to Payment</button>

            </div>
        </div>

        <div class="col-sm-4 ">
            <div class="card">
                <div class="card-header p-3" style="background-color:#eee;">
                    <p class="m-0 text-right small text-secondary">GRAND TOTAL - 2 Adults </p>
                    <h2 class="m-0 font-weight-bold text-right">₹1,23,640</h2>
                    <p class="m-0 text-right small text-secondary">(Inclusive of All Taxes )</p>
                </div>
                <div class="card-body p-3">
                    <h5 class="card-title font-weight-bold text-dark">Fare Breakup</h5>
                    <div class="row">
                        <div class="col-sm-12">
                            <p class="float-left text-secondary small m-0">Total Basic Cost</p>
                            <p class="float-right text-secondary small m-0">₹1,11,998 </p>
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-sm-12">
                            <p class="float-left small m-0">55,999 X 2 Pax</p>
                        </div>
                    </div>
                    <hr class="m-0">
                    <div class="row mt-2">
                        <div class="col-sm-12">
                            <p class="float-left text-secondary small m-0">Total Discount</p>
                            <p class="float-right text-secondary small m-0">₹5,000 </p>
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-sm-12">
                            <p class="float-left small m-0">MTTFEST Coupon Applied</p>
                        </div>
                    </div>
                    <hr class="m-0">
                    <div class="row mt-2">
                        <div class="col-sm-12">
                            <p class="float-left text-secondary small m-0">Fees & Taxes</p>
                            <p class="float-right text-secondary small m-0">₹11,199 </p>
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-sm-12">
                            <p class="float-left small m-0">GST 5.0%, TCS 5.0% </p>
                        </div>
                    </div>
                    <hr class="m-0">
                    <h6 class="m-0 text-center pt-3 font-weight-bold">Important Information</h6>
                    <p class="small m-0 pt-2">By clicking on the Continue button below to proceed with the booking, I
                        confirm that I have read
                        and I accept <a href="#">Cancellation Policy</a>, <a href="#">User Agreement</a>, <a
                            href="#">Terms of Service</a> and <a href="#">Privacy Policy</a> of
                        XYZ</p>
                    <div class="row mt-4 mb-2">
                        <div class="col-sm-12">
                            <a href="#" class="btn btn-primary card">Proceed To Payments</a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="card mt-3 mb-3" style="background-color:#eee;">
                <div class="card-body">
                    <form>
                        <div class="form-group"> <label>Have coupon?</label>
                            <div class="input-group"> <input type="text" class="form-control coupon" name=""
                                    placeholder="Coupon code"> <span class="input-group-append"> <button
                                        class="btn btn-primary btn-apply coupon">Apply</button> </span> </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card p-3 mt-3">
                <h5 class="card-title font-weight-bold text-dark">Get 100% Credit of TCS Amount?</h5>
            </div>

        </div>
    </div>
</div>






<!-- DESKTOP VIEW END   -->

@endsection
