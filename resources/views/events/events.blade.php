@extends('layouts.master')
@section('title', 'Wagnistrip')
@section('body')

    <link rel="stylesheet" href="{{ asset('assets/css/events.css') }}">
    <!-- DESKTOP VIEW START  -->


    <div class="container-fluid p-0">
        <div class="back-image container-first">
            <h3 class="head-4">BEST EVENT PLANNER IN DELHI, INDIA</h3>
            <h2 class="head-2">Top Event Planners</h2>
            <p class="para-0">Welcome to Event Management Company. We're one of the <br> best corporate event
                management company & wedding planner <br> in Delhi, India.</p>
        </div>
    </div>
     
        <div class="container-fluid mt-3 backgroundstyle1">
            <img src="assets/images/events/section-title.png" style="padding-top:20px; margin-left:48vw; " />
            <h1 class="heading-2 heading-22">
                Why Us?
            </h1>
            <hr style="width:400px; ">
            <hr style="width:200px; ">
        </div>
        <div class="container succes-wedding-card ">
            <div class="row">
                <div class="col-sm-6">
                    <img src="assets/images/events/secondiamge.jpg" class="small-image2" />
                </div>
                <div class="col-sm-6 " style="text-align:justify;">
                    <h3 class="heading-3 heading-23 pt-5">Best Event Management Company</h3>
                 <a href="#Inquiry1">   <input type="submit"
                    class="btn  btn-primary btn-send pt-1 mt-4 btn-block button-send-message"
                    value="Enquiry"></a>
                    <p class=" para23" style="text-align: justify;">The best event management companies in India are
                        renowned for their spectacular skills in planning and executing events. To relieve you of the
                        bother about looking out far and wide for the best event management organization in India, Make
                        True Trip has designed the below list. Through that list of about event management services in
                        India, you can view the benefits provided with the aid of numerous groups at once without
                        worrying about the credibility of the source.
                        On top of that, in accordance with the resource selection process, its listing over agencies is
                        accompanied by their respective customer reviews, ratings, or previous tasks and you narrow down
                        the most appropriate event planners in India as much care of their requirements.
                    </p>
                </div>
            </div>
        </div>

    <div class="container-fluid mt-5 backgroundstyle">
        <img src="assets/images/events/section-title.png" style="padding-top:20px; margin-left:48vw; " />
        <h1 class="heading-2 heading-23">
            What We Do
        </h1>
        <hr style="width:400px; ">
        <hr style="width:200px; ">
    </div>


    
    <div id="Section1">
        <div class="container">
            <div class="row ">
                <div class="col-sm-4 backgroundstyle2">
                   <a href=" {{ url('/corporate-events') }}"> <div class="card shadow back2" style="border:none;">
                    <img src="assets/images/events/corporate event-1.jpg" class="small-image" />
                    <div class="overlay">
                        <H1 style="font-style:italic;font-size: 22px; font-family: playfair display;">❝ Where your
                            ideas take off ❞</H1>
                    </div>
                </div></a>
                    <a href="{{ url('/corporate-events') }}" style="text-decoration: none;">
                        <h4 style="text-align:center; margin-top:10px;color: #a3888c;font-family: 'Gill Sans'; ">
                            CORPORATE EVENTS</h4>
                    </a>
                    <p style="text-align:justify;font-size: 15px;"></p>
                </div>
                <div class="col-sm-4">
                  <a href="{{ url('/wedding-events') }}">  <div class="card shadow back1" style="border:none;">
                    <img src="assets/images/events/wedding-event2.jpg" class="small-image" />
                    <div class="overlay2">
                        <H1 style="font-style:italic;font-size: 22px;font-family: playfair display;">❝ A Stylish
                            Wedding Begins <br> with Us ❞</H1>
                    </div>
                </div></a>
                    <a href="{{ url('/wedding-events') }}" style="text-decoration: none;">
                        <h4 style="text-align:center;margin-top:10px;color: #a3888c;font-family: 'Gill Sans' ">
                            WEDDING EVENTS</h4>
                    </a>
                    <p style="text-align:justify;font-size: 15px;"></p>
                </div>
                <div class="col-sm-4 backgroundstyle2">
                   <a href=" {{ url('/school-events') }}"> <div class="card shadow back1" style="border:none;">
                    <img src="assets/images/events/school2.jpg" class="small-image" />
                    <div class="overlay2">
                        <H1 style="font-style:italic;font-size: 22px;font-family: playfair display;">❝ It’s not just
                            an event,<br> it’s an experience ❞</H1>
                    </div>
                </div></a>
                    <a href="{{ url('/school-events') }}" style="text-decoration: none;">
                        <h4 style="text-align:center;margin-top:10px;color: #a3888c;font-family: 'Gill Sans';">
                            SCHOOL EVENTS</h4>
                    </a>
                    <p style="text-align:justify;font-size: 15px;"></p>
                </div>
            </div>
            <div class="container">
                <div class="row card-center">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-4 backgroundstyle2">
                       <a href="{{ url('college-events') }}"> <div class="card shadow back1" style="border:none;">
                        <img src="assets/images/events/school-event.jpg" class="small-image " />
                        <div class="overlay2">
                            <H1 style="font-style:italic;font-size: 22px;font-family: playfair display;">❝ The right
                                path, every time.❞</H1>
                        </div>
                    </div></a>
                        <a href="{{ url('college-events') }}" style="text-decoration: none;">
                            <h4 style="text-align:center; margin-top:10px;color: #a3888c;font-family: 'Gill Sans'; ">
                                COLLEGE EVENTS</h4>
                        </a>
                        <p style="text-align:justify;font-size: 15px;"></p>
                    </div>
                    <div class="col-sm-4 backgroundstyle2 ">
                       <a href="{{ url('sports-events') }}"> <div class="card shadow back1" style="border:none;">
                        <img src="assets/images/events/sports-event.jpg" class="small-image" />
                        <div class="overlay2">
                            <H1 style="font-style:italic;font-size: 22px;font-family: playfair display;">❝ We do it
                                for the Kicks.❞</H1>
                        </div>
                    </div></a>

                        <a href="{{ url('sports-events') }}" style="text-decoration: none;">
                            <h4 style="text-align:center;margin-top:10px;color: #a3888c;font-family: 'Gill Sans' ">
                                SPORTS EVENTS</h4>
                        </a>
                        <p style="text-align:justify;font-size: 15px;"></p>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-sm-6">
                <div class="card shadow" style="border:  none; border-radius: 10px;">
                    <img src="assets/images/events/about.jpg" alt="" style="border-radius: 10px; height: 350px;">
                </div>
            </div>
            <div class="col-sm-6 container-first2" style=" text-align: center;">
                <h3 class=" heading-3 heading-23">About Company</h3>
                <p style="text-align:justify;">Being one of the top event management companies in India we arrange
                    Weddings, Anniversary, Mehndi, Sangeet, Birthday Parties, Exhibitions ,and all other types of
                    events. At Z Plus, we are the leading event planner in India, but beyond that, we are unique
                    organizers in Delhi. We assist families, couples, students and corporate offcials in organizing
                    their events and accordingly supplying them with excellent management services.
                </p>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="pt-5 font-weight-normal" style="font-size:30px;color: rgb(92, 88, 88);">Core Values of
                        our Company</h3>
                    <ul class="mt-4 p-0 ml-5">
                        <li>customer focus</li>
                        <li>accountability & collaboration </li>
                        <li>diversity & inclusion </li>
                        <li>pursuit of excellence</li>
                        <li>commitment</li>
                        <li>mutual respect</li>
                    </ul>

                </div>
                <div class="col-sm-6">
                    <div class="card rounded">
                        <img class="rounded" src="assets/images/events/core-values.jpg" alt="">
                    </div>
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
                                                    <div class="form-group form-heading"> <label for="form_email">Mobile
                                                            *</label> <input id="form_email" type="mobile"
                                                            name="mobile" class="form-control"
                                                            placeholder="Please enter your mobile *" minlength="0" maxlength="10" required="required"
                                                            data-error="Valid mobile number is required."> </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group form-heading">
                                                        <label for="form_need">Please select your event</label>
                                                        <select id="form_need" name="need" class="form-control"
                                                            required="required" data-error="Please select your visa.">
                                                            <option value="" selected disabled>Choose Event</option>
                                                            <option>CORPORATE EVENT </option>
                                                            <option>WEDDING EVENT</option>
                                                            <option>SCHOOL EVENT</option>
                                                            <option>COLLEGE EVENT</option>
                                                            <option>SPORTS EVENT</option>
                                                        </select>
                                                    </div>
                                                </div>


                                                <div class="col-md-6">
                                                    <div class="form-group form-heading"> <label
                                                            for="form_email">Budget</label> <input id="form_email"
                                                            type="budget" name="budget" class="form-control"
                                                            placeholder="Please enter your Budget" required="required"
                                                            data-error="Valid amount is required."> </div>
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


    <!-- Desktop End View -->
    <x-frontend.sections.mobile-view-pages />
    <div class=" dpnr">
        <x-footer />
    </div>

    <script type="text/javascript">
        window.addEventListener("load", function(){
            setTimeout(
                function open(event){
                    document.querySelector(".popup").style.display = "block";
                },
                2000 
            )
        });
        
        
        document.querySelector("#close").addEventListener("click", function(){
            document.querySelector(".popup").style.display = "none";
        });
            </script>

@endsection
