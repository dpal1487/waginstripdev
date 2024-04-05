@extends('layouts.master')
@section('title', 'Wagnistrip')
@section('body')
<link rel="stylesheet" href="{{ asset('assets/css/events.css') }}">
    <!-- DESKTOP VIEW START  -->
    <div id="carouselExampleControls" class="carousel slide mt-5 top-container" data-ride="carousel" data-interval="2000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="assets/images/events/col12.jpg"
                    style="height:500px;background-position:100%;background-size:cover;">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/images/events/c0l134.jpg"
                    style="height:500px;background-position:100%;background-size:cover;">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/images/events/col135.jpg"
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

    <div class="container succes-wedding-card ">
        <div class="row ">
            <div class="col-sm-6 ">
                <div class="card bg-transparent shadow" style="border-radius: 10px; border:none;">
                    <img src="assets/images/events/colgeevnt.webp" class="small-image2"
                        style="height: 370px; border-radius: 15px;">
                </div>
            </div>
            <div class="col-sm-6 " style="text-align:center;">
                <h1 class="heading-3 ">College Events</h1>
                <p style="text-align:justify;">College events are the type about activities as are organized because the
                    purpose of entertainment, appreciation, or drive on the students then the staff.
                    These events are majorly executed as farewells, annual days, university fests, trend shows, award
                    nights etc. If you are planning to organize any tremendous university events, you should contact the
                    best college event organisers in Delhi, Noida, Gurgaon, Faridabad. Wagnistrip event is providing
                    the applications as much a college event's organizer will full decicaiton and hand work. Our
                    functions are length in all type on events company but we deal very great with college events.
                    Our staff always comes with the modern ideas and set up to make every college event unique and
                    different from others.
                </p>
            </div>
        </div>

    </div>
    <div class="container-fluid mt-5 ">
        <img src="assets/images/events/section-title.png" style="padding-top:20px; margin-left:48vw; " />
        <h1 class="heading-2 ">
            What We Can Do
        </h1>
        <hr style="width:400px; ">
        <hr style="width:200px; ">
    </div>
    <div id="Section1">
        <div class="container">
            <div class="row ">
                <div class="col-sm-3 ">
                    <div class="card shadow" style="border:  none; border-radius: 10px;height:440px;">
                        <img src="assets/images/events/fsh.jpg" class="small-image" style="width: 254px; height: 200px;" />
                        <a href="">
                            <h4
                                style="text-align:center; margin-top:10px;color: rgb(192, 168, 139);font-family: 'Gill Sans'; ">
                                Fashion Show</h4>
                        </a>
                        <p class="para-098 para-spacing">It’s an event that combines different design, culture, beauty and
                            glamour from all across the globe. We as a company provide you with all the above from the best
                            places in the country with cost effectiveness and amazing experience.We will be happy to assist
                            you in all that you need.</p>
                    </div>
                </div>
                <div class="col-sm-3 ">
                    <div class="card shadow" style="border:  none; border-radius: 10px;height:440px;">
                        <img src="assets/images/events/marketing.jpg" class="small-image" style="height: 200px;">
                        <a href="">
                            <h4
                                style="text-align:center;margin-top:10px;color: rgb(192, 168, 139);font-family: 'Gill Sans' ">
                                Marketing</h4>
                        </a>
                        <p class="para-098 para-spacing">As we all know, Marketing is one of the greatest needs of the times
                            for all products, people, political parties market themselves on different platforms for the
                            purpose of maximize their reach therefore we provide you a platform for the same.</p>
                    </div>
                </div>
                <div class="col-sm-3 ">
                    <div class="card shadow" style="border:  none; border-radius: 10px;height:440px;">
                        <img src="assets/images/events/onlineevent.jpeg" class="small-image" style="height: 200px;">
                        <a href="">
                            <h4
                                style="text-align:center;margin-top:10px;color: rgb(192, 168, 139);font-family: 'Gill Sans' ">
                                Online Event</h4>
                        </a>
                        <p class="para-098 para-spacing">Power and reach of online is far known by the world therefore
                            online events are one of the features that we present as our product for the desired audience as
                            after the pandemic online event has also being popularized.</p>
                    </div>
                </div>
                <div class="col-sm-3 ">
                    <div class="card shadow" style="border:  none; border-radius: 10px;height:440px;">
                        <img src="assets/images/events/culturalevent.jpeg" class="small-image" style="height: 200px;">
                        <a href="">
                            <h4
                                style="text-align:center;margin-top:10px;color: rgb(192, 168, 139);font-family: 'Gill Sans' ">
                                Cultural Competition</h4>
                        </a>
                        <p class="para-098 para-spacing">A Place where people from many cultures may learn from and interact
                            with one another, resulting in a knowledge hub.This in total enhances the growth of all the
                            participants.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-5 ">
        <img src="assets/images/events/section-title.png"
            style="padding-top:20px; margin-left:48vw;border-radius:5px;box-shadow:5px; " />
        <h1 class="heading-2">
            Our Amazing Work
        </h1>
        <hr style="width:400px;">
        <hr style="width:200px;">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="card shadow" style="border:  none; border-radius:10px;">
                    <img src="assets/images/events/college5.jpg"
                        style="width: 100%; height:300px; border-radius:5px;box-shadow:5px;">
                </div>
                <div class="card  shadow" style="border:  none; border-radius:10px; margin-top: 10px;">
                    <img src="assets/images/events/college4.jpg"
                        style="width: 100%; height:300px; border-radius: 5px;box-shadow:5px;">
                </div>
            </div>
            <div class="col-sm-4 ">
                <img src="assets/images/events/collegeevent3.jpeg"
                    style="width: 100%; height:610px; border-radius: 5px;box-shadow:5px;">
            </div>
            <div class="col-sm-4 ">
                <div class="d-flex flex-column ">
                    <div class="card  shadow" style="border:  none; border-radius:10px">
                        <img src="assets/images/events/collegeevent4.jpeg"
                            style="width: 100%; height:300px; border-radius: 5px;box-shadow:5px;">
                    </div>
                    <div class="card  shadow" style="border:  none; border-radius:10px; margin-top: 10px;">
                        <img src="assets/images/events/last1.jpg" style="width: 100%; height:300px; border-radius: 5px;">
                    </div>
                </div>
            </div>
        </div>
        <div id="Inquiry1">
            <div class="container mt-5 mb-5">
                <div class="card shadow" style="border-radius: 20px;">
                    <img src="assets/images/events/section-title.png"
                        style="padding-top:20px; margin-left:32vw;width:80px;height:80px; " />
                    <h1 class="heading-2 ">
                        Enquiry Form
                    </h1>
                    <div class="row">
                        <div class=" col-lg-12 p-2">
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
                                                        <div class="form-group form-heading"> <label
                                                                for="form_lastname">Last Name *</label>
                                                            <input id="form_lastname" type="text" name="surname"
                                                                class="form-control"
                                                                placeholder="Please enter your lastname *"
                                                                required="required" data-error="Lastname is required.">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group form-heading"> <label
                                                                for="form_email">Email *</label> <input id="form_email"
                                                                type="email" name="email" class="form-control"
                                                                placeholder="Please enter your email *"
                                                                required="required" data-error="Valid email is required.">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group form-heading"> <label
                                                                for="form_email">Mobile *</label> <input id="form_email"
                                                                type="email" name="email" class="form-control"
                                                                placeholder="Please enter your mobile *"
                                                                required="required" data-error="Valid email is required.">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group form-heading">
                                                            <label for="form_need">Please select your
                                                                Events</label>
                                                            <select id="form_need" name="need" class="form-control"
                                                                required="required" data-error="Please select your visa.">
                                                                <option value="" selected disabled>Choose Event
                                                                </option>
                                                                <option>Fashion show</option>
                                                                <option>Marketing & selling</option>
                                                                <option>Online Event</option>
                                                                <option>Cultural Event</option>
                                                                <option>Blood donation</option>

                                                            </select>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6">
                                                        <div class="form-group form-heading"> <label
                                                                for="form_email">Budget</label> <input id="form_email"
                                                                type="email" name="email" class="form-control"
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
                            </div> <!-- /.8 -->
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
