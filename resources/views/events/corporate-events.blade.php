@extends('layouts.master')
@section('title', 'Wagnistrip')
@section('body')
<link rel="stylesheet" href="{{ asset('assets/css/events.css') }}">
    <!-- DESKTOP VIEW START  -->

    <div id="carouselExampleControls" class="carousel slide top-container mt-5" data-ride="carousel" data-interval="2000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="assets/images/events/corporate1.JPG"
                    style="height:500px;background-position:100%;background-size:cover;">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/images/events/corporate-4.jpg"
                    style="height:500px;background-position:100%;background-size:cover;">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/images/events/corporate6.jpg"
                    style="height:500px;background-position:100%;background-size:cover;">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/images/events/corporate15.jpg"
                    style="height:500px;background-position:100%;background-size:cover;">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container-fluid mt-5 backgroundstyle">
        <img src="assets/images/events/section-title.png" style="padding-top:20px; margin-left:48vw; " />
        <h1 class="heading-2 heading-22">
            About Corporate Events
        </h1>
        <hr style="width:400px; ">
        <hr style="width:200px; ">
    </div>

    <div class="container succes-wedding-card ">
        <div class="row ">
            <div class="col-sm-6 ">
                <img src="assets/images/events/second-corporate1" class="small-image2" />

            </div>
            <div class="col-sm-6 " style="text-align:justify;">
                <h1 class="heading-3 heading-23">Corporate Events</h1>
                <a href="#Inquiry1">   <input type="submit"
                    class="btn  btn-primary btn-send pt-1 mt-4 btn-block button-send-message"
                    value="Enquiry"></a>
                <p class=" para23" style="text-align: justify;">Are you looking to make your corporate event amazingly
                    superior? If yes, after Showtime event is here together with its superior offerings as much a lead
                    corporate event management enterprise in Delhi NCR. We have extreme experience in effectively
                    managing all types of corporate events. Helping our clients according to edit their clients,
                    employees, and other business partners happy with these events, we improve each work in a
                    well-planned manner. With our specialist event organizers or expert management staff, we make sure
                    in conformity with handle all the major activities on you events adequately.</p>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-5 backgroundstyle">
        <img src="assets/images/events/section-title.png"
            style="padding-top:20px; margin-left:48vw;border-radius:5px;box-shadow:5px; " />
        <h1 class="heading-2 heading-23" style="color:white !important;">
            Our Amazing Work
        </h1>
        <hr style="width:400px;">
        <hr style="width:200px;">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <img src="assets/images/events/corportae1.jpg"
                    style="width: 100%; height:300px;margin-top:10px;border-radius:5px;box-shadow:5px;">
                <img src="assets/images/events/corporate5.jpg"
                    style="width: 100%; height:300px;margin-top:10px ;border-radius: 5px;box-shadow:5px;">
            </div>
            <div class="col-sm-4 ">
                <img src="assets/images/events/corporate7.png"
                    style="width: 100%; height:610px;margin-top:10px;border-radius: 5px;box-shadow:5px;">
            </div>
            <div class="col-sm-4 ">
                <div class="d-flex flex-column ">
                    <img src="assets/images/events/crpt.jpg"
                        style="width: 100%; height:300px;margin-top:10px;border-radius: 5px;box-shadow:5px;">
                    <img src="assets/images/events/corporate8"
                        style="width: 100%; height:300px;margin-top:10px;border-radius: 5px;box-shadow:5px;">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-5 backgroundstyle ">
        <img src="assets/images/events/section-title.png" style="padding-top:20px; margin-left:48vw; " />
        <h1 class="heading-2 heading-23" style="color:white !important;">
            What We  Do
        </h1>
        <hr style="width:400px; ">
        <hr style="width:200px; ">
    </div>
    <div id="Section1">
        <div class="container mt-5">
            <div class="row ">
                <div class="col-sm-3 backgroundstyle2">
                   <a href="{{url('/award-ceremonies')}}"> <img src="assets/images/events/awards.jpeg" class="small-image " /></a>
                    <a href="{{url('/award-ceremonies')}}">
                        <h4
                            style="text-align:center; margin-top:10px;color: rgb(3, 3, 3);font-family:Arial, Helvetica, sans-serif;font-weight:600;font-size:20px;  ">
                            AWARD <br> CEREMONIES</h4>
                    </a>

                    <p style="text-align:justify;font-size: 15px;"> Award Ceremonies are a way of rewarding people for
                        the efforts put and also positioning your company to become a thought leader amongst every one
                        in the company eco-system.

                        We work with different industries and companies to organize private and industry award
                        ceremonies for our clients.</p>
                </div>
                <div class="col-sm-3 backgroundstyle2 ">
                   <a href="{{url('/product-launches')}}"> <img src="assets/images/events/product.jpg" class="small-image" /></a>
                    <a href="{{url('/product-launches')}}">
                        <h4
                            style="text-align:center;margin-top:10px;color: rgb(0, 0, 0);font-family:Arial, Helvetica, sans-serif;font-weight:600;font-size:20px; ">
                            PRODUCT <br> LAUNCHES</h4>
                    </a>
                    <p style="text-align:justify;font-size: 15px;">Product Launching is essential for the promotion of
                        your product in public and for growth of the business. Our team of professional planners will
                        design your product launch in a way in which your clients,
                        audience can interact with your product and get to know product better. </p>
                </div>
                <div class="col-sm-3 backgroundstyle2">

                  <a href="{{url('/seminars-conferences')}}">  <img src="assets/images/events/conference.jpg  " class="small-image" /></a>
                    <a href="{{url('/seminars-conferences')}}">
                        <h4
                            style="text-align:center;margin-top:10px;color: rgb(15, 15, 15);font-family:Arial, Helvetica, sans-serif;font-weight:600;font-size:20px; ">
                            SEMINARS & CONFERENCES</h4>
                    </a>
                    <p style="text-align:justify;font-size: 15px;">Our event management fulfills excellent arrangements
                        which include spacious area, degree, secure seats,set up of high best projection displays together
                        with top class honor melody structures, and decent ambiance of formal meeting. </p>

                </div>
                <div class="col-sm-3 backgroundstyle2">

                   <a href="{{url('/parties')}}"> <img src="assets/images/events/party2022.jpg" class="small-image" /></a>
                    <a href="{{url('/parties')}}">
                        <h4
                            style="text-align:center;margin-top:10px;color: rgb(0, 0, 0);font-family:Arial, Helvetica, sans-serif;font-weight:600;font-size:20px;    ">
                            PARTIES & <br> GET-TOGETHER</h4>
                    </a>
                    <p style="text-align:justify;font-size: 15px;"> As one of the premier corporate party organisers in the world,
                        we’ll
                        employment together with your team saving you time and stress – so you can effortlessly host an
                        incredible party your teams will love.
                    </p>
                </div>


            </div>
        </div>
    </div>
    <br style="line-height:200px;">
    <div id="Inquiry1">
        <div class="container mt-5 mb-5">
            <div class="card shadow" style="border-radius:20px;">
                <img src="assets/images/events/section-title.png"
                    style="padding-top:20px; margin-left:32vw;width:80px;height:80px;" />
                <h1 class="heading-2">
                    Enquiry Form
                </h1>
                <div class="row">
                    <div class="col-lg-12 p-2">
                        <div class="card mt-2 text-white mx-auto p-4"
                            style="  background-color: transparent; color:#000 !important; border:none;">
                            <div class="card-body">
                                <div class="container">
                                    <form id="contact-form" role="form">
                                        <div class="controls">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group form-heading"> <label for="form_name">First
                                                            Name *</label>
                                                        <input id="form_name" type="text" name="name"
                                                            class="form-control"
                                                            placeholder="Please enter your firstname *"
                                                            required="required" data-error="Firstname is required.">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group form-heading"> <label for="form_lastname">Last
                                                            Name *</label>
                                                        <input id="form_lastname" type="text" name="surname"
                                                            class="form-control"
                                                            placeholder="Please enter your lastname *" required="required"
                                                            data-error="Lastname is required.">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group form-heading"> <label for="form_email">Email
                                                            *</label> <input id="form_email" type="email"
                                                            name="email" class="form-control"
                                                            placeholder="Please enter your email *" required="required"
                                                            data-error="Valid email is required.">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group form-heading"> <label for="form_phone">Mobile
                                                            *</label> <input id="form_phone" type="tel"
                                                            name="phone" class="form-control"
                                                            placeholder="Please enter your mobile *" required="required"
                                                            data-error="Valid email is required."> </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group form-heading">
                                                        <label for="form_need">Please select your event</label>
                                                        <select id="form_need" name="need" class="form-control"
                                                            required="required" data-error="Please select your visa.">
                                                            <option value="" selected disabled>Choose Event</option>
                                                            <option>Awards</option>
                                                            <option>Product Launch</option>
                                                            <option>Seminars & Conferences</option>
                                                            <option>Corporate parties</option>
                                                            <option>Trade Shows</option>
                                                            <option>Board meetings</option>
                                                        </select>
                                                    </div>
                                                </div>


                                                <div class="col-md-6">
                                                    <div class="form-group form-heading"> <label
                                                            for="form_email">Budget</label> <input id="form_budget"
                                                            type="number" name="budget" class="form-control"
                                                            placeholder="Please enter your Budget" required="required"
                                                            data-error="Valid email is required."> </div>
                                                </div>



                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group form-heading"> <label
                                                            for="form_message">Message *</label>
                                                        <textarea id="form_message" name="message" class="form-control" placeholder="Write your message here."
                                                            rows="4" required="required" data-error="Please, leave us a message."></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12"> <input type="submit"
                                                        class="btn  btn-primary btn-send pt-2 btn-block button-send-message"
                                                        value="Send Message">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
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
