@extends('layouts.master')
@section('title', 'Wagnistrip')
@section('body')
    <link rel="stylesheet" href="{{ asset('assets/css/events.css') }}">
    <!-- DESKTOP VIEW START  -->

    <div id="carouselExampleControls" class="carousel slide top-container mt-5" data-ride="carousel" data-interval="2000">
        <div class="carousel-inner">
            <div class="carousel-item active"> <img class="d-block w-100" src="assets/images/events/school-event1.jpg"
                    style="height:500px;background-position:100%;background-size:cover;">
                <div class="carousel-caption d-none d-md-block" style="margin-bottom: 230px; font-size: 60px;">
                    <h1 class="font-weight-bold text-muted">
                        We Work Well Together
                    </h1>
                    <h5 class="text-muted">All I Will Say Is That We Work Very Well Together.</h5>
                </div>
            </div>
            <div class="carousel-item"> <img class="d-block w-100" src="assets/images/events/student1.jpg"
                    style="height:500px;background-position:100%;background-size:cover;">
                <div class="carousel-caption d-none d-md-block" style="margin-bottom: 230px;"> </div>
            </div>
            <div class="carousel-item"> <img class="d-block w-100" src="assets/images/events/student2.jpg"
                    style="height:500px;background-position:100%;background-size:cover;">
                <div class="carousel-caption d-none d-md-block" style="margin-bottom: 230px;"> </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"> <span
                class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"> <span
                class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
    </div>
    <div class="container-fluid mt-5 "> <img src="assets/images/events/section-title.png"
            style="padding-top:20px; margin-left:48vw; " />
        <h5 class="heading-2 ">
            About School Events
        </h5>
        <hr style="width:400px; ">
        <hr style="width:200px; ">
    </div>
    <div class="container succes-wedding-card ">
        <div class="row ">
            <div class="col-sm-6 "> <img src="assets/images/events/school-event5.webp" class="small-image2" /> </div>
            <div class="col-sm-6 " style="text-align:center;">
                <h1 class="heading-3 heading-25 ">School Events</h1>
                <hr style="width:100px;height:5px;background-color: #a3888c;border: none;margin:0px;margin-left:40%;">
                <p style="text-align: justify;" class="para26">Some on the most important memories in High School are made
                    at events. Whether it’s Prom, Grad Night, Winter Formal, Homecoming or some other Big event, students
                    choice look lower back at the exclusive moments because of years to come. Our Event company has been
                    planning school events for many years that’s longer than close tournament companies have been among
                    business. We have planned hundreds of excessive faculty events every year across India with special
                    lawful stone venues, magnificent DJ’s, a variety of FUN entertainment, delicious catering, creative
                    Decorations & Props, Rentals, Lounge Furniture, expert security and more……….</p>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-5 "> <img src="assets/images/events/section-title.png"
            style="padding-top:20px; margin-left:48vw;border-radius:5px;box-shadow:5px; " />
        <h1 class="heading-2">
            Our Amazing Work
        </h1>
        <hr style="width:400px;">
        <hr style="width:200px;">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-4"> <img src="assets/images/events/amazing1.jpg"
                    style="width: 100%; height:300px;margin-top:10px;border-radius:5px;box-shadow:5px;"> <img
                    src="assets/images/events/photo-change.jpg"
                    style="width: 100%; height:300px;margin-top:10px ;border-radius: 5px;box-shadow:5px;"> </div>
            <div class="col-sm-4 "> <img src="assets/images/events/annual.jpg"
                    style="width: 100%; height:610px;margin-top:10px;border-radius: 5px;box-shadow:5px;"> </div>
            <div class="col-sm-4 ">
                <div class="d-flex flex-column "> <img src="assets/images/events/amazing3.jpg"
                        style="width: 100%; height:300px;margin-top:10px;border-radius: 5px;box-shadow:5px;"> <img
                        src="assets/images/events/amazing5.jpg"
                        style="width: 100%; height:300px;margin-top:10px;border-radius: 5px;box-shadow:5px;"> </div>
            </div>
        </div>
        <div class="container-fluid mt-5 "> <img src="assets/images/events/section-title.png"
                style="padding-top:20px; margin-left:35vw; " />
            <h1 class="heading-2 ">
                What We  Do
            </h1>
            <hr style="width:400px; ">
            <hr style="width:200px; ">
        </div>
        <div id="Section1">
            <div class="container">
                <div class="row ">
                    <div class="col-sm-3">
                        <div class="card shadow" style=" border:1px solid black;"> 
                            <a href="{{url('/science-exhibition')}}">
                                <img
                                src="assets/images/events/science-exhibition.webp" style="height:200px ; width:247px;" /></a>
                            <div class="card-body" style="height: 330px;">
                                <a href="{{url('/science-exhibition')}}">
                                    <h4
                                        style="text-align:center; margin-top:10px;color: rgb(192, 168, 139);font-family: 'Gill Sans'; ">
                                        Science Exhibition</h4>
                                </a>
                                <p style="text-align:justify;font-size: 15px;"> A science fair is a competitive event,
                                    hosted by schools worldwide. The distinguishing characteristic of a science fair is that
                                    project entries employ the scientific method to test a hypothesis. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card shadow" style=" border:1px solid black;"> 
                            <a href="{{url('/cultural-fest')}}"><img
                                src="assets/images/events/cultural-fest.webp" style="height:200px ; width:247px;" /></a>
                            <div class="card-body" style="height: 330px;">
                                <a href="{{url('/cultural-fest')}}">
                                    <h4
                                        style="text-align:center;margin-top:10px;color: rgb(192, 168, 139);font-family: 'Gill Sans' ">
                                        Cultural Fest</h4>
                                </a>
                                <p style="text-align:justify;font-size: 15px;">Cultural Events are occasions to that
                                    represent a specific culture with music, themes, arts, etc. Every year cultural event
                                    are celebrated with the of spreading "the spirit of the union" together with a vision to
                                    improve our lives and the nation. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card shadow" style=" border:1px solid black;"> 
                            <a href="{{url('/art-competition')}}"><img
                                src="assets/images/events/paint.webp" style="height:200px ; width:247px;" /></a>
                            <div class="card-body" style="height: 330px;">
                                <a href="{{url('/art-competition')}}">
                                    <h4
                                        style="text-align:center;margin-top:10px;color: rgb(192, 168, 139);font-family: 'Gill Sans' ">
                                        Art Competition</h4>
                                </a>
                                <p style="text-align:justify;font-size: 15px;">Wagnistrip encourages its students to
                                    participate in competitions of all types to expand their creative and artistic horizons.
                                    Not only will this assist to them construct their portfolio, but it will also
                                    continuously help develop their artistic and linguistic competencies.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card shadow" style=" border:1px solid black;"> 
                            <a href="{{url('/quiz-competition')}}"><img
                                src="assets/images/events/quiz.jpg" style="height:200px ;width:247px;" /></a>
                            <div class="card-body" style="height: 330px;">
                                <a href="{{url('/quiz-competition')}}">
                                    <h4
                                        style="text-align:center;margin-top:10px;color: rgb(192, 168, 139);font-family: 'Gill Sans' ">
                                        Quiz Competition</h4>
                                </a>
                                <p style="text-align:justify;font-size: 15px;"> We are conducting a city-wise Quiz
                                    competition on 29/06/2022 for Wagnistrip residents across Delhi-NCR, Mumbai and
                                    Punjab. This time, the contest will be organized in different batches. There will be one
                                    winner from each batch who will stands a chance to win Amazon Shopping vouchers worth Rs
                                    10,000*. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br style="line-height:200px; ">
        <div id="Inquiry1">
            <div class="container mt-5 mb-5">
                <div class="card shadow" style="border-radius: 20px;"> <img src="assets/images/events/section-title.png"
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
                                                        <div class="form-group form-heading">
                                                            <label for="form_name">First Name *</label>
                                                            <input id="form_name" type="text" name="name"
                                                                class="form-control"
                                                                placeholder="Please enter your firstname *"
                                                                required="required" data-error="Firstname is required.">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group form-heading">
                                                            <label for="form_lastname">Last Name *</label>
                                                            <input id="form_lastname" type="text" name="surname"
                                                                class="form-control"
                                                                placeholder="Please enter your lastname *"
                                                                required="required" data-error="Lastname is required.">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group form-heading">
                                                            <label for="form_email">Email *</label>
                                                            <input id="form_email" type="email" name="email"
                                                                class="form-control"
                                                                placeholder="Please enter your email *"
                                                                required="required" data-error="Valid email is required.">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group form-heading">
                                                            <label for="form_phone">Mobile *</label>
                                                            <input id="form_phone" type="tel" name="phone"
                                                                class="form-control"
                                                                placeholder="Please enter your mobile *"
                                                                required="required" data-error="Valid phone is required.">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group form-heading">
                                                            <label for="form_need">Please select your event</label>
                                                            <select id="form_need" name="need" class="form-control"
                                                                required="required" data-error="Please select your visa.">
                                                                <option value="" selected disabled>Choose Event
                                                                </option>
                                                                <option>Quiz Competition </option>
                                                                <option>Annual Function</option>
                                                                <option>Art Competition</option>
                                                                <option>Plant Activites</option>
                                                                <option>Science Exhibition</option>
                                                                <option>Prom Night</option>
                                                                <option>Farewell party</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group form-heading">
                                                            <label for="form_budget">Budget</label>
                                                            <input id="form_budget" type="budget" name="budget"
                                                                class="form-control"
                                                                placeholder="Please enter your Budget" required="required"
                                                                data-error="Valid budget is required.">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group form-heading">
                                                            <label for="form_message">Message *</label>
                                                            <textarea id="form_message" name="message" class="form-control" placeholder="Write your message here."
                                                                rows="4" required="required" data-error="Please, leave us a message."></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <input type="submit"
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
    </div>

    <!-- Desktop End View -->
    <x-frontend.sections.mobile-view-pages />
    <div class=" dpnr">
        <x-footer />
    </div>

@endsection
