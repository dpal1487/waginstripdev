@extends('layouts.master')
@section('title', 'Wagnistrip')
@section('body')
    <link rel="stylesheet" href="{{ asset('assets/css/events.css') }}">
    <!-- DESKTOP VIEW START  -->

    <div id="carouselExampleControls" class="carousel mt-5 slide top-container" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="assets/images/events/banner1.png"
                    style="height:500px;background-position:100%;background-size:cover;">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/images/events/caraousel-1.jpg"
                    style="height:500px;background-position:100%;background-size:cover;">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/images/events/wedding_change2.jpg"
                    style="height:500px;background-position:100%;background-size:cover;">
            </div>

            <div class="carousel-item">
                <img class="d-block w-100" src="assets/images/events/wedding_change3.jpg"
                    style="height:500px;background-position:100%;background-size:cover;">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/images/events/wed1.jpg"
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
    <div class="container-fluid mt-5 ">
        <img src="assets/images/events/section-title.png" style="padding-top:20px; margin-left:48vw; " />
        <h1 class="heading-2 ">
            What We  Do
        </h1>
        <hr style="width:400px; ">
        <hr style="width:200px; ">
    </div>
    <div id="Section1">
        <div class="container">
            <div class="row ">
                <div class="col-sm-3 ">
                 <a href="{{url('/event-planning')}}">   <img src="assets/images/events/event-planning.jpg" class="small-image " /></a>
                    <a href="{{url('/event-planning')}}">
                        <h4 style="text-align:center; margin-top:10px;color: rgb(192, 168, 139);font-family: 'Gill Sans'; ">
                            Event Planning</h4>
                    </a>
                </div>
                <div class="col-sm-3 ">
              <a href=" {{url('/cake-design')}}"><img src="assets/images/events/cake.design.jpg" class="small-image" /></a>
                    <a href="{{url('/cake-design')}}">
                        <h4 style="text-align:center;margin-top:10px;color: rgb(192, 168, 139);font-family: 'Gill Sans' ">
                            Cake Design</h4>
                    </a>
                </div>
                <div class="col-sm-3 ">
                   <a href="{{url('/floral-design')}}"> <img src="assets/images/events/floral design.jpg" class="small-image" /></a>
                    <a href="{{url('/floral-design')}}">
                        <h4 style="text-align:center;margin-top:10px;color: rgb(192, 168, 139);font-family: 'Gill Sans' ">
                            Floral Design</h4>
                    </a>

                </div>
                <div class="col-sm-3 ">
                    <a href="{{url('/photography')}}">  <img src="assets/images/events/photography1 (2).jpg" class="small-image" /></a>
                    <a href="{{url('/photography')}}">
                        <h4 style="text-align:center;margin-top:10px;color: rgb(192, 168, 139);font-family: 'Gill Sans' ">
                            Photography</h4>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container succes-wedding-card ">
        <div class="row ">
            <div class="col-sm-6 ">
                <img src="assets/images/events/corousel5.jpg" class="small-image2" />
            </div>
            <div class="col-sm-6 " style="text-align:center;">
                <h1 class="heading-3 pt-5">Wedding Ceremony Traditions You Need to Know</h1>
                <p class="para24" style="text-align: justify;">Weddings are vibrant, intricately planned, culture-rich
                    festivities perfect about get together or tradition. While the very existence of a wedding function
                    is the physical, spiritual,
                    or emotional union regarding pair people; it is also in regard to the coming together on two
                    families through prayer or celebration. "A wedding ceremony lies somewhere in the couple’s
                    expectations whilst blending theirs family traditions," "With deep part or slightly ceremonies
                    administration in conformity with the fundamental celebration day, it binds the couple and both
                    families for eternity."</p>
            </div>
        </div>
    </div>
    <div class="container-fluid p-0 mt-5">
        <div class="container text-center">
            <div class="container-fluid mt-5 ">
                <img src="assets/images/events/section-title.png" style="padding-top:20px; margin-left:5vw; " />
                <h1 class="heading-2">
                    Some Additional services
                </h1>
                <hr style="width:400px; ">
                <hr style="width:200px; ">
            </div>
            <div class="row mt-5">
                <div class="col-sm-2">
                    <div class="card shadow p-3">
                        <img src="assets/images/events/catering.png" style="margin:auto">
                        <h6 class="pt-3">CATERERS</h6>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="card shadow p-3">
                        <img src="assets/images/events/wedding-arch.png" style="margin:auto">
                        <h6 class="pt-3">DECORATIONS</h6>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="card shadow p-3">
                        <img src="assets/images/events/management.png" style="margin:auto">
                        <h6 class="pt-3">WEDDING</h6>

                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="card shadow p-3">
                        <img src="assets/images/events/make-up.png" style="margin:auto">
                        <h6 class="pt-3">MAKEUP</h6>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="card shadow p-3">
                        <img src="assets/images/events/cake.png" style="margin:auto">
                        <h6 class="pt-3">CAKES</h6>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="card shadow p-3">
                        <img src="assets/images/events/wedding-invitation.png" style="margin:auto">
                        <h6 class="pt-3">CARDS</h6>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-sm-2">
                    <div class="card shadow p-3">
                        <img src="assets/images/events/flower.png" style="margin:auto">
                        <h6 class="pt-3">FLORISTS</h6>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="card shadow p-3">
                        <img src="assets/images/events/mehndi.png" style="margin:auto">
                        <h6 class="pt-3">MEHANDI</h6>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="card shadow p-3">
                        <img src="assets/images/events/dress.png" style=" margin:auto">
                        <h6 class="pt-3">DRESS</h6>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="card shadow p-3">
                        <img src="assets/images/events/photography.png" style="margin:auto">
                        <h6 class="pt-3">PHOTOGRAPHY </h6>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="card shadow p-3">
                        <img src="assets/images/events/cocktail.png" style="margin:auto">
                        <h6 class="pt-3">COCKTAILS</h6>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="card shadow p-3">
                        <img src="assets/images/events/policeman.png" style=" margin:auto">
                        <h6 class="pt-3">SECURITY</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-5 ">
        <img class="rounded mx-auto d-block" src="assets/images/events/section-title.png"
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
                <img src="assets/images/events/couple98.jpg"
                    style="width: 100%; height:300px;margin-top:10px;border-radius:5px;box-shadow:5px;">
                <img src="assets/images/events/pacakage1.jpg"
                    style="width: 100%; height:300px;margin-top:10px ;border-radius: 5px;box-shadow:5px;">
            </div>
            <div class="col-sm-4 ">
                <img src="assets/images/events/wedding-21.jpg"
                    style="width: 100%; height:610px;margin-top:10px;border-radius: 5px;box-shadow:5px;">
            </div>
            <div class="col-sm-4 ">
                <div class="d-flex flex-column ">
                    <img src="assets/images/events/package2.jpg"
                        style="width: 100%; height:300px;margin-top:10px;border-radius: 5px;box-shadow:5px;">
                    <img src="assets/images/events/succesfullweding.jpg"
                        style="width: 100%; height:300px;margin-top:10px;border-radius: 5px;box-shadow:5px;">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-5 ">
        <img class="rounded mx-auto d-block" src="assets/images/events/section-title.png "
            style="padding-top:20px; margin-left:32vw; ">
        <h1 class="heading-24">
            Meet Our Planners
        </h1>
        <hr style="width:400px; ">
        <hr style="width:200px; ">
    </div>

    <div class="container">
        <div class="row ">
            <div class="col-sm-3">
                <div class="card">
                    <img src="https://wpocean.com/html/tf/feelings/assets/images/team/img-1.jpg ">
                    <h4 style="text-align:center; margin-top:10px;color: rgb(192, 168, 139);font-family: 'Gill Sans'; ">
                        Event Planner</h4>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <img src="https://wpocean.com/html/tf/feelings/assets/images/team/img-1.jpg ">
                    <h4 style="text-align:center; margin-top:10px;color: rgb(192, 168, 139);font-family: 'Gill Sans'; ">
                        Event Planner</h4>
                </div>
            </div>
            <div class="col-sm-3 ">
                <div class="card">
                    <img src="https://wpocean.com/html/tf/feelings/assets/images/team/img-1.jpg ">
                    <h4 style="text-align:center; margin-top:10px;color: rgb(192, 168, 139);font-family: 'Gill Sans'; ">
                        Event Planner</h4>
                </div>

            </div>
            <div class="col-sm-3 ">
                <div class="card">
                    <img src="https://wpocean.com/html/tf/feelings/assets/images/team/img-1.jpg ">
                    <h4 style="text-align:center; margin-top:10px;color: rgb(192, 168, 139);font-family: 'Gill Sans'; ">
                        Event Planner</h4>
                </div>

            </div>
        </div>
    </div>

    <div class="container mt-5">
        <img src="assets/images/events/section-title.png" class="img-fluid" style="margin-left: 33vw;">
        <h1 class="heading-2">What Our Clients Say</h1>
        <hr style="width:400px;">
        <hr style="width:200px;">
        <div class="row">
            <div class="col-sm-6 justify-content-center">
                <img src="https://wpocean.com/html/tf/feelings/assets/images/testimonial/img-2.jpg"
                    class="rounded mx-auto d-block" alt="..." style="width: 150px; height:150px;border-radius:5px;">
                <p class=" para-54">"Thanks so much for your work - we love them!
                    You’ve captured some wonderful moments for us and really appreciate everything" </p>
            </div>
            <div class="col-sm-6">
                <img src="https://wpocean.com/html/tf/feelings/assets/images/testimonial/img-1.jpg"
                    class="rounded mx-auto d-block" alt="..." style="width: 150px; height:150px;border-radius:5px;">
                <p class="para-54"> "Thank you so so so so much!! The photos are absolutely beautiful! We love every
                    single one of them. Thank you so much for capturing the day so perfectly! It is incredible
                    "</p>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-5 ">
        <img class="rounded mx-auto d-block" src="assets/images/events/section-title.png" style="padding-top:20px;" />
        <h1 class="heading-2 ">
            Our Perfect Pricing Plan
        </h1>
        <hr style="width:400px;">
        <hr style="width:200px;">
    </div>


    <div class="container pricing-plan-cont">
        <div class="row ">
            <div class="col-sm-3">
                <div class="card p-2 shadow" style="border-radius:15px;margin-top:50px;height:400px;">
                    <div class="card">
                        <img src="assets/images/events/decor-1.jpeg" />
                    </div>
                    <h4 class="m-0 pt-3" style="text-align:center; color: rgb(192, 168, 139);font-family: 'Gill Sans'; ">
                        BASIC <br> PACKAGE</h4>
                    <p class="para-new "><span class="para-span "></span>Exlusive packages starting from <br> ₹5
                        Lakhs
                    </p>
                    <p class="para-last"></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card p-2 shadow" style="border-radius:15px;margin-top:50px;height:400px;">
                    <div class="card">
                        <img src="assets/images/events/decor-2.jpeg" />
                    </div>
                    <h4 class="m-0 pt-3" style="text-align:center; color: rgb(192, 168, 139);font-family: 'Gill Sans'; ">
                        STANDARD <br> PACKAGE</h4>
                    <p class="para-new "><span class="para-span "></span>Exlusive packages starting from <br> ₹15
                        Lakhs
                    </p>
                    <p class="para-last "></p>
                </div>
            </div>
            <div class="col-sm-3 ">
                <div class="card p-2 shadow" style="border-radius:15px; margin-top:50px;height:400px;">
                    <div class="card">
                        <img src="assets/images/events/decor-3.jpeg" style="height: 156px;" />
                    </div>
                    <h4 class="m-0 pt-3" style="text-align:center; color: rgb(192, 168, 139);font-family: 'Gill Sans'; ">
                        LUXARY <br> PACKAGE</h4>
                    <p class="para-new "><span class="para-span "></span>Exlusive packages starting from <br> ₹35
                        Lakhs
                    </p>
                    <p class="para-last "></p>
                </div>
            </div>
            <div class="col-sm-3 ">
                <div class="card p-2 shadow" style="border-radius:15px;margin-top:50px;height:400px;">
                    <div class="card">
                        <img src="assets/images/events/customise.jpg" style="height: 156px;" />
                    </div>
                    <h4 class="m-0 pt-3" style="text-align:center; color: rgb(192, 168, 139);font-family: 'Gill Sans'; ">
                        PERSONALIZE YOUR WEDDING</h4>
                    <p class="para-new "><span class="para-span "></span>You can customize your own wedding as per
                        your requirements
                    </p>
                    <p class="para-last "></p>
                </div>
            </div>

        </div>
    </div>

    <div class="container-fluid mt-3 ">
        <img class="rounded mx-auto d-block" src="assets/images/events/section-title.png" style="padding-top:20px;" />
        <h1 class="heading-2 ">
            Latest News
        </h1>
        <hr style="width:400px; ">
        <hr style="width:200px; ">
    </div>

    <div class="container">

        <div class="row ">
            <div class="col-sm-4">
                <img src="assets/images/events/gifft.jpg" class="small-image" />
                <h4 style="text-align:center; margin-top:10px;color: rgb(192, 168, 139);font-family: 'Gill Sans'; ">
                    Top 10 wedding gifts.</h4>
                <hr>
                <p class="para-last ">Wedding gift ideas don't need to be super-expensive. Even the most unique
                    wedding gift ideas can be built from scratch or gotten from a dollar store.
                </p>
            </div>
            <div class="col-sm-4 ">
                <img src="assets/images/events/photography.jpg" class="small-image" />
                <h4 style="text-align:center; margin-top:10px;color: rgb(192, 168, 139);font-family: 'Gill Sans'; ">
                    Best Photography Idea.</h4>
                <hr>
                <p class="para-last ">Looking for photoshoot ideas? We've got dozens of tips, tutorials and
                    inspirational projects to get you started
                </p>
            </div>
            <div class="col-sm-4 ">
                <img src="assets/images/events/flower.jpg" class="small-image" />
                <h4 style="text-align:center; margin-top:10px;color: rgb(192, 168, 139);font-family: 'Gill Sans'; ">
                    Wedding Flower Collect.</h4>
                <hr>
                <p class="para-last ">Elegant and Affordable Wedding Flower Ideas We Love
                </p>
            </div>
        </div>
    </div>

    <br style="line-height:200px; ">

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
                                                            *</label> <input id="form_phone" type="phone"
                                                            name="tel" class="form-control"
                                                            placeholder="Please enter your mobile *" required="required"
                                                            data-error="Valid phone is required."> </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group form-heading">
                                                        <label for="form_need">Please select your
                                                            Occasion</label>
                                                        <select id="form_need" name="need" class="form-control"
                                                            required="required" data-error="Please select your visa.">
                                                            <option value="" selected disabled>Choose Occasion
                                                            </option>
                                                            <option>Welcome Dinner </option>
                                                            <option>Mehendi/Sangeet</option>
                                                            <option>Varghodo</option>
                                                            <option>Wedding Day</option>
                                                            <option>Reception</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group form-heading"> <label
                                                            for="form_budget">Budget</label> <input id="form_budget"
                                                            type="budget" name="budget" class="form-control"
                                                            placeholder="Please enter your Budget" required="required"
                                                            data-error="Valid budget is required."> </div>
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

@endsection
