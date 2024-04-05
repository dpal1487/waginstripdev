@extends('layouts.master')
@section('title', 'XYZ')
@section('body')
    <!-- DESKTOP VIEW START  -->
    <div class="container mobileVes1 mb-5 p-0" style="margin-top: 120px">
        <div class="row">
            <div class="col-xl-12">
                <div class="card shadow p-3">
                    <p class="text-muted m-0">Refine Search:</p>
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label class="small text-muted" for="formGroupExampleInput">Departure City</label>
                                <select class="form-control form-control-sm">
                                    <option>Mumbai</option>
                                    <option>Delhi</option>
                                    <option>Jaipur</option>
                                    <option>Goa</option>
                                    <option>Pune</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label class="small text-muted" for="formGroupExampleInput">Price Per Person</label>
                                <select class="form-control form-control-sm">
                                    <option>55,000</option>
                                    <option>55,000-1,00,000</option>
                                    <option>1,00,000 Above</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label class="small text-muted" for="formGroupExampleInput">Month of Travel</label>
                                <select class="form-control form-control-sm">
                                    <option>January</option>
                                    <option>February</option>
                                    <option>March</option>
                                    <option>April</option>
                                    <option>May</option>
                                    <option>June</option>
                                    <option>July</option>
                                    <option>August</option>
                                    <option>September</option>
                                    <option>October</option>
                                    <option>November</option>
                                    <option value="">December</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label class="small text-muted" for="formGroupExampleInput">Package Type</label>
                                <select class="form-control form-control-sm">
                                    <option>Only Stay</option>
                                    <option>Air Inclusive</option>
                                    <option>Group Tours</option>
                                    <option>Customized Holidays</option>
                                    <option>Holidays with flexi flight</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label class="small text-muted" for="formGroupExampleInput">Themes</label>
                                <select class="form-control form-control-sm">
                                    <option>Family</option>
                                    <option>Couple</option>
                                    <option>Honeymoon</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label class="small text-muted" for="formGroupExampleInput">Sort by</label>
                                <select class="form-control form-control-sm">
                                    <option>Price: Low to High</option>
                                    <option>Price: High to Low</option>
                                    <option>Duration: Low to High</option>
                                    <option>Duration: High to Low</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card bg-transparent mt-3">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <img src="assets/images/blog/Amalfi Coast, Italy.jpg" alt="">
                    </div>
                </div>
                <div class="col-sm-5">
                    <h5 class="m-0 font-weight-bold pt-2"> Maldives - Crazy Deal - Triton Prestige Sea View Maafushi </h5>
                    <h6 class="m-0 pt-1 font-weight-normal">4 Nights/5 Days</h6>
                    <hr>
                    <h6 class="m-0">Customized Holidays</h6>
                    <div class="grid-container12">
                        <div>
                            <h5><i class="fa fa-list" aria-hidden="true"></i></h5>
                            <p>Overview</p>
                        </div>
                        <div>
                            <h5><i class="fa fa-plane" aria-hidden="true"></i></h5>
                            <p>Flights</p>
                        </div>
                        <div>
                            <h5><i class="fa fa-bed" aria-hidden="true"></i></h5>
                            <p>Hotels</p>
                        </div>
                        <div>
                            <h5><i class="fa fa-camera-retro" aria-hidden="true"></i></h5>
                            <p>Sightseeing</p>
                        </div>
                        <div>
                            <h5><i class="fa fa-cutlery" aria-hidden="true"></i></h5>
                            <p>Food</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <h6 class="m-0 pt-3">Tour Types: <strong>Standard</strong></h6>
                    <h3 class="m-0 text-right pr-4 font-weight-bold pt-5">₹55,550</h3>
                    <p class="m-0 small text-right pr-4 text-muted">Starting price per adult</p>
                    <button type="button" class="btn float-right mt-4 mr-4 btn-primary btn-sm">Book Now</button>
                </div>
            </div>
        </div>
        <div class="card bg-transparent mt-3">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <img src="assets/images/blog/Amalfi Coast, Italy.jpg" alt="">
                    </div>
                </div>
                <div class="col-sm-5">
                    <h5 class="m-0 font-weight-bold pt-2"> Maldives - Crazy Deal - Triton Prestige Sea View Maafushi </h5>
                    <h6 class="m-0 pt-1 font-weight-normal">4 Nights/5 Days</h6>
                    <hr>
                    <h6 class="m-0">Customized Holidays</h6>
                    <div class="grid-container12">
                        <div>
                            <h5><i class="fa fa-list" aria-hidden="true"></i></h5>
                            <p>Overview</p>
                        </div>
                        <div>
                            <h5><i class="fa fa-plane" aria-hidden="true"></i></h5>
                            <p>Flights</p>
                        </div>
                        <div>
                            <h5><i class="fa fa-bed" aria-hidden="true"></i></h5>
                            <p>Hotels</p>
                        </div>
                        <div>
                            <h5><i class="fa fa-camera-retro" aria-hidden="true"></i></h5>
                            <p>Sightseeing</p>
                        </div>
                        <div>
                            <h5><i class="fa fa-cutlery" aria-hidden="true"></i></h5>
                            <p>Food</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <h6 class="m-0 pt-3">Tour Types: <strong>Standard</strong></h6>
                    <h3 class="m-0 text-right pr-4 font-weight-bold pt-5">₹55,550</h3>
                    <p class="m-0 small text-right pr-4 text-muted">Starting price per adult</p>
                    <button type="button" class="btn float-right mt-4 mr-4 btn-primary btn-sm">Book Now</button>
                </div>
            </div>
        </div>
        <div class="card bg-transparent mt-3">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <img src="assets/images/blog/Amalfi Coast, Italy.jpg" alt="">
                    </div>
                </div>
                <div class="col-sm-5">
                    <h5 class="m-0 font-weight-bold pt-2"> Maldives - Crazy Deal - Triton Prestige Sea View Maafushi </h5>
                    <h6 class="m-0 pt-1 font-weight-normal">4 Nights/5 Days</h6>
                    <hr>
                    <h6 class="m-0">Customized Holidays</h6>
                    <div class="grid-container12">
                        <div>
                            <h5><i class="fa fa-list" aria-hidden="true"></i></h5>
                            <p>Overview</p>
                        </div>
                        <div>
                            <h5><i class="fa fa-plane" aria-hidden="true"></i></h5>
                            <p>Flights</p>
                        </div>
                        <div>
                            <h5><i class="fa fa-bed" aria-hidden="true"></i></h5>
                            <p>Hotels</p>
                        </div>
                        <div>
                            <h5><i class="fa fa-camera-retro" aria-hidden="true"></i></h5>
                            <p>Sightseeing</p>
                        </div>
                        <div>
                            <h5><i class="fa fa-cutlery" aria-hidden="true"></i></h5>
                            <p>Food</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <h6 class="m-0 pt-3">Tour Types: <strong>Standard</strong></h6>
                    <h3 class="m-0 text-right pr-4 font-weight-bold pt-5">₹55,550</h3>
                    <p class="m-0 small text-right pr-4 text-muted">Starting price per adult</p>
                    <button type="button" class="btn float-right mt-4 mr-4 btn-primary btn-sm">Book Now</button>
                </div>
            </div>
        </div>
        <div class="card bg-transparent mt-3">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <img src="assets/images/blog/Amalfi Coast, Italy.jpg" alt="">
                    </div>
                </div>
                <div class="col-sm-5">
                    <h5 class="m-0 font-weight-bold pt-2"> Maldives - Crazy Deal - Triton Prestige Sea View Maafushi </h5>
                    <h6 class="m-0 pt-1 font-weight-normal">4 Nights/5 Days</h6>
                    <hr>
                    <h6 class="m-0">Customized Holidays</h6>
                    <div class="grid-container12">
                        <div>
                            <h5><i class="fa fa-list" aria-hidden="true"></i></h5>
                            <p>Overview</p>
                        </div>
                        <div>
                            <h5><i class="fa fa-plane" aria-hidden="true"></i></h5>
                            <p>Flights</p>
                        </div>
                        <div>
                            <h5><i class="fa fa-bed" aria-hidden="true"></i></h5>
                            <p>Hotels</p>
                        </div>
                        <div>
                            <h5><i class="fa fa-camera-retro" aria-hidden="true"></i></h5>
                            <p>Sightseeing</p>
                        </div>
                        <div>
                            <h5><i class="fa fa-cutlery" aria-hidden="true"></i></h5>
                            <p>Food</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <h6 class="m-0 pt-3">Tour Types: <strong>Standard</strong></h6>
                    <h3 class="m-0 text-right pr-4 font-weight-bold pt-5">₹55,550</h3>
                    <p class="m-0 small text-right pr-4 text-muted">Starting price per adult</p>
                    <button type="button" class="btn float-right mt-4 mr-4 btn-primary btn-sm">Book Now</button>
                </div>
            </div>
        </div>
        <div class="card bg-transparent mt-3">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <img src="assets/images/blog/Amalfi Coast, Italy.jpg" alt="">
                    </div>
                </div>
                <div class="col-sm-5">
                    <h5 class="m-0 font-weight-bold pt-2"> Maldives - Crazy Deal - Triton Prestige Sea View Maafushi </h5>
                    <h6 class="m-0 pt-1 font-weight-normal">4 Nights/5 Days</h6>
                    <hr>
                    <h6 class="m-0">Customized Holidays</h6>
                    <div class="grid-container12">
                        <div>
                            <h5><i class="fa fa-list" aria-hidden="true"></i></h5>
                            <p>Overview</p>
                        </div>
                        <div>
                            <h5><i class="fa fa-plane" aria-hidden="true"></i></h5>
                            <p>Flights</p>
                        </div>
                        <div>
                            <h5><i class="fa fa-bed" aria-hidden="true"></i></h5>
                            <p>Hotels</p>
                        </div>
                        <div>
                            <h5><i class="fa fa-camera-retro" aria-hidden="true"></i></h5>
                            <p>Sightseeing</p>
                        </div>
                        <div>
                            <h5><i class="fa fa-cutlery" aria-hidden="true"></i></h5>
                            <p>Food</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <h6 class="m-0 pt-3">Tour Types: <strong>Standard</strong></h6>
                    <h3 class="m-0 text-right pr-4 font-weight-bold pt-5">₹55,550</h3>
                    <p class="m-0 small text-right pr-4 text-muted">Starting price per adult</p>
                    <button type="button" class="btn float-right mt-4 mr-4 btn-primary btn-sm">Book Now</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Desktop End View -->
    <x-frontend.sections.mobile-view-pages />
    <div class=" dpnr">
        <x-footer />
    </div>
@endsection
