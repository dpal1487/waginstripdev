@extends('layouts.master')
@section('title', 'Wagnistrip')
@section('body')


<style>
    /* about-pages start */

    .masserst5 li {
        list-style-image: url(../images/check1.png);
        line-height: 1.7;
        margin-right: 5px;
    }

    #counter-stats {
        display: flex;
        justify-content: center;
        margin-top: 100px;
        color: #fff;
    }

    .stats {
        text-align: center;
        font-size: 35px;
        font-weight: 700;
        font-family: 'Montserrat', sans-serif;
    }

    .stats .fa {
        color: #fff;
        font-size: 60px;
    }

    .filter-button {
        padding: 8px 25px;

    }


    /* about-pages end */

</style>
<!-- DESKTOP VIEW START  -->

<section class="jumbotron text-center" style="margin-top:80px;">
    <div class="container mobileVes1">
        <h1>ABOUT US</h1>
        <p class="lead text-muted">
            World Best Travel Agency
            Company For You!
        </p>
        <p>
            World Best Travel Agency for You! wagnistrip Private Limited is an online Travel agency
            who partnered with many Destinations Management Companies providing comprehensive
            services to Travel. We design, build and operate accommodation CITY WALK facilities
            across the Globe.
            One of our top priorities is to provide you with a contemporary, pleasant, and connected
            travel experience, therefore we always work to enhance your time spent using our services.
            With the help of our individualised assistance, we specialise in working with our clients and
            bringing value to their experiences.
        </p>
    </div>
</section>

<div class="container mobileVes1 justify-content-center text-center border-bottom mt-5 mb-5">
    <h2 class="font-weight-bold pt-3">What We Do</h2>
    <p class="pb-5">
        Sustained from the seed of a single, inspiring idea to inspire the traveller. XYZ is
        a pioneer in the online global travel industry. XYZ came to life to empower the
        Indian traveller with instant bookings and comprehensive choices. The company initiated its
        journey serving the global tourist market offering a range of great- value products and
        services powered by technology and round- the-clock customer support. After securing its
        place as a company known for its trustworthiness and transparency, XYZ&#39;s journey
        has been driven by the determination and energy of each of its employees, for whom no idea
        was too huge and no issue too delicate.

    </p>
</div>

<section class="py-6 bg-light-primary mt-5 mb-5">
    <div class="container mobileVes1">
        <div class="row justify-content-center text-center mb-4">
            <div class="col-xl-12  col-sm-10">
                <h2 class="font-weight-bold pt-3 pb-1">Our Products & Services</h2>
                <p class="text-muted mb-0">
                    We offer a comprehensive range of travel-related products and services catering to the needs of
                    passengers traveling domestically, as well as traveling to and from international destinations. We
                    provide the customers with various tools and information that they need to research, plan, book and
                    purchase travel products and services in India as well as outside India. We offer our products and
                    services online through our websites and mobile applications, and use data and analytics to
                    personalize the customer experience on our websites and mobile applications, based on past searches
                    and purchasing history, which we believe increases engagement and likelihood of purchase.
                </p>
            </div>
        </div>

        <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 text-center justify-content-center px-xl-6 aos-init aos-animate"
            data-aos="fade-up">
            <div class="col my-3">
                <div class="card p-3 border-hover-primary hover-scale">
                    <div class="card-body">
                        <div class="text-primary mb-4">
                            <img width="80" height="80" src="assets/images/hotel/airport2.png" alt="">
                        </div>
                        <h5 class="font-weight-bold mb-2">Airline</h5>
                        <p class="text-muted mb-0">
                            It consists of the sale of airline tickets as well as airline tickets sold
                        </p>
                    </div>
                </div>
            </div>
            <div class="col my-3">
                <div class="card p-3 border-hover-primary hover-scale">
                    <div class="card-body">
                        <div class="text-primary mb-4">
                            <img width="80" height="80" src="assets/images/hotel/airport3.png" alt="">
                        </div>
                        <h5 class="font-weight-bold mb-2">Hotels</h5>
                        <p class="text-muted mb-0">
                            It consists of standalone sales of hotel rooms as well as travel packages
                        </p>
                    </div>
                </div>
            </div>
            <div class="col my-3">
                <div class="card p-3 border-hover-primary hover-scale">
                    <div class="card-body">
                        <div class="text-primary mb-4">
                            <img width="80" height="80" src="assets/images/hotel/airport1.png" alt="">
                        </div>
                        <h5 class="font-weight-bold mb-2">Holidays</h5>
                        <p class="text-muted mb-0">
                            It consists of standalone sales of hotel rooms as well as travel packages
                        </p>
                    </div>
                </div>
            </div>
            <div class="col my-3">
                <div class="card p-3 border-hover-primary hover-scale">
                    <div class="card-body">
                        <div class="text-primary mb-4">
                            <img width="80" height="80" src="assets/images/hotel/cruise.png" alt="">
                        </div>
                        <h5 class="font-weight-bold mb-2">Cruise</h5>
                        <p class="text-muted mb-0">
                            It consists of the sale of airline tickets as well as airline tickets sold
                        </p>
                    </div>
                </div>
            </div>
            <div class="col my-3">
                <div class="card p-3 border-hover-primary hover-scale">
                    <div class="card-body">
                        <div class="text-primary mb-4">
                            <img width="80" height="80" src="assets/images/hotel/passport.png" alt="">
                        </div>
                        <h5 class="font-weight-bold mb-2">Visa</h5>
                        <p class="text-muted mb-0">
                            It consists of the sale of airline tickets as well as airline tickets sold
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<div class="container mobileVes1  mt-5 mb-5">
    <h2 class="font-weight-bold text-center pt-3 pb-1"> Our Strengths </h2>
    <div class="row mt-3">
        <div class="col-sm-7 p-3">
            <ul class="masserst5">
                <li>One of the top Indian online travel agencies with an engaged customer base
                    including the option of less convenience fee. </li>
                <li>Harmonious track record of economical &amp; efficient operations. </li>
                <li>Extensive distribution network supported by a fusion platform. </li>
                <li>Team with a reputation of performance and unwavering work </li>
               
            </ul>
        </div>
        <div class="col-sm-5  p-3">
            <div class="card roasratr">
                <img src="assets/images/Employee-strength.jpg" style="height:250px;" alt="">
            </div>
        </div>
    </div>
</div>

<div class="container  mobileVes1 mt-5 mb-5">
    <h2 class="font-weight-bold text-center pt-3 pb-1"> Our Vision & Mission </h2>
    <div class="row mt-3">
        <div class="col-sm-5 p-3">
            <div class="card roasratr">
                <img src="assets/images/vision1.jpg" style="height:250px;" alt="">
            </div>
        </div>
        <div class="col-sm-7 p-3">
            <h5 class="font-weight-bold pb-1">Vision</h5>
            <ul class="masserst5">
                <li>Our goal is to lead the way and be creative when it comes to new ideas, positioning
                    our company among the world&#39;s top travel industry companies. </li>
                <li>To become an internationally well-organised sustainable travel agency in the global
                    market. </li>
                <li>To create an unparalleled experience that a customer could rely on. </li>
                <li>To actively involved in and improve travel solutions by incorporating cutting-edge
                    technology into the modern travel business, which will increase the benefits for both
                    our clients and our travel partners. </li>
                <li>We promise to work with you in developing key marketable approaches and
                    strategies intended to give you the best value expansion and administration, which
                    can be utilised in the movement Industry.</li>
                    <li>We want to become a reputable client council, an organisation that can be relied
                        upon for understanding.</li>
            </ul>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-7 p-3">
            <h5 class="font-weight-bold pb-1">Mission</h5>
            <ul class="masserst5">
                <li>  To provide all services at one stop solution</li>
                <li> To provide the maximum of benefits to our customers by providing quality and
                professional services which will enhance each and every traveller’s journey towards
                an unforgettable experience.</li>
                <li> To offer corporate travel solutions &amp; become the biggest travel agency in the world.</li>
                    <li> To promote and support sustainable tourism development through the
                representation, promotion and mutual cooperation of international, national and
                regional for sustainable tourism in the country.</li>
                <li> To perform and convey amazing quality support of our clients. Giving them
                extraordinary travel, agreeable, with ensured administrations that surpass their
                assumptions with this goal, we intend to procure the standing as “Your Preferred
                Travel Agency”.</li>
            </ul>
        </div>
        <div class="col-sm-5 p-3">
            <div class="card roasratr">
                <img src="assets/images/mission1.jpg" style="height:250px;" alt="">
            </div>
        </div>
    </div>
</div>

<div class="container mobileVes1 mt-5 mb-5">
    <h2 class="font-weight-bold text-center pt-3 pb-1">What We Offer </h2>
    <div class="row mt-3">
        <div class="col-sm-12 p-3">
            <ul class="masserst5">
                <li>
                    Corporate Travels
                </li>
                <li>
                    Group Tour
                </li>
                <li>
                    FIT(Free Individual Traveler)
                </li>
                <li>
                    International & Domestic Air Tickets
                </li>
                <li>
                    International & Domestic Hotels
                </li>
                <li>
                    International & Domestic Holiday Packages
                </li>
                <li>Cruises</li>
                <li>
                    Special Tours (Wellness tourism, Medical tourism, Wildlife tourism, Pilgrimage tours, etc.)
                </li>
                <li>Adventure Tours</li>
                <li>Visas</li>
                <li>Car Rental Services</li>
            </ul>
        </div>
    </div>
</div>

<div class="container mobileVes1 stmarrsa mt-5 mb-5">
    <h2 class="font-weight-bold text-center pt-3 pb-1">Core Values </h2>
    <div class="row mt-3">
        <div class="col-sm-4 p-3">
            <div class="card bg-info shadow p-3">
                <h4 class=" m-0 text-white text-center">CUSTOMER FOCUS</h4>
            </div>
        </div>
        <div class="col-sm-4 p-3">
            <div class="card bg-info shadow p-3">
                <h4 class=" text-white m-0 text-center">MUTUAL RESPECT</h4>
            </div>
        </div>
        <div class="col-sm-4 p-3">
            <div class="card bg-info shadow p-3">
                <h4 class=" text-white m-0 text-center">COMMITMENT</h4>
            </div>
        </div>
        <div class="col-sm-4 p-3">
            <div class="card bg-info shadow p-3">
                <h4 class=" text-white m-0 text-center">PURSUIT OF EXCELLIENCE</h4>
            </div>
        </div>
        <div class="col-sm-4 p-3">
            <div class="card bg-info shadow p-3">
                <h4 class="text-white m-0 text-center">DIVERSITY & INCLUSION</h4>
            </div>
        </div>
        <div class="col-sm-4 p-3">
            <div class="card bg-info shadow p-3">
                <h4 class="text-white m-0 text-center">COLLABORATION</h4>
            </div>
        </div>
    </div>
</div>
{{-- 
<div class="container-fluid jumbotron mt-5 pb-5">
    <h2 class="font-weight-bold pb-3 sartaers text-center">Founder of the Company</h2>
    <div class="d-flex justify-content-between">
        <div class="p-2"></div>
        <div class="p-2">
            <div class="col">
                <div class="card maratingars border-0 text-white radius-15">
                    <div class="card-body text-center">
                        <div class="p-4 shadow bg-info border radius-15">
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" width="110" height="110"
                                class="rounded-circle shadow" alt="">
                            <h5 class="mb-0 mt-5">Mr. Deepak Khanna</h5>
                            <p class="mb-3 small">
                                Founder & Director
                                <br>
                                XYZ Private Limited
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-2"></div>
    </div>
</div> --}}
{{-- 
<section id="counter-stats" class="wow fadeInRight container-fluid p-5 mt-n5" data-wow-duration="1.4s"
    style="background-color:#0065a5;">
    <div class="container mobileVes1">
        <div class="row">
            <div class="col-lg-3 stats">
                <i class="fa fa-users" aria-hidden="true"></i>
                <div class="counting" data-count="1000">1000+</div>
                <h5>Employees</h5>
            </div>

            <div class="col-lg-3 stats">
                <i class="fa fa-globe" aria-hidden="true"></i>
                <div class="counting" data-count="280">100K</div>
                <h5>Travel Agents</h5>
            </div>

            <div class="col-lg-3 stats">
                <i class="fa fa-user" aria-hidden="true"></i>
                <div class="counting" data-count="1000000"></div>
                <h5>Users</h5>
            </div>

            <div class="col-lg-3 stats">
                <i class="fa fa-calendar" aria-hidden="true"></i>
                <div class="counting" data-count="10"></div>
                <h5>Years</h5>
            </div>

        </div>
        <!-- end row -->
    </div>
    <!-- end container -->

</section>

<!-- Our Team sections start -->


<section class="team text-center py-5">
    <div class="container mobileVes1">
        <div class="header my-5">
            <h1>Meet our Team </h1>
            <p class="text-muted">Meet and Greet our Team Members</p>
        </div>
        <div class="row text-dark">
            <div class="col-md-6 col-lg-3">
                <div class="img-block border p-3 mb-5">
                    <img src="assets/images/manager.png" class="img-fluid  img-thumbnail rounded-circle" alt="image1">
                    <div class="card-body">
                        <h5 class="font-weight-bold">Nitin Kumar</h5>
                        <h6>Operations head</h6>
                    </div>
                </div>

            </div>
            <div class="col-md-6  col-lg-3 ">
                <div class="img-block border p-3 mb-5">
                    <img src="assets/images/profile.png" class="img-fluid  img-thumbnail rounded-circle" alt="image1">
                    <div class="card-body">
                        <h5 class="font-weight-bold">Akash Kumar</h5>
                        <h6>Operations Manger </h6>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="img-block border p-3 mb-5">
                    <img src="assets/images/profile(1).png" class="img-fluid  img-thumbnail rounded-circle"
                        alt="image1">
                    <div class="card-body">
                        <h5 class="font-weight-bold">Aashi Gulati</h5>
                        <h6>Sr. Travel Executive</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="img-block border p-3 mb-5">
                    <img src="assets/images/profile.png" class="img-fluid  img-thumbnail rounded-circle" alt="image1">
                    <div class="card-body">
                        <h5 class="font-weight-bold">Vivek Sharma</h5>
                        <h6>Travel Executive</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="img-block border p-3 mb-5">
                    <img src="assets/images/man.png" class="img-fluid  img-thumbnail rounded-circle" alt="image1">
                    <div class="card-body">
                        <h5 class="font-weight-bold">Yashwant IT Head</h5>
                        <h6>Travel Executive</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="img-block border p-3 mb-5">
                    <img src="assets/images/business-women.png" class="img-fluid  img-thumbnail rounded-circle"
                        alt="image1">
                    <div class="card-body">
                        <h5 class="font-weight-bold">Shivani Gaur</h5>
                        <h6>SEO</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="img-block border p-3 mb-5">
                    <img src="assets/images/profile(1).png" class="img-fluid  img-thumbnail rounded-circle"
                        alt="image1">
                    <div class="card-body">
                        <h5 class="font-weight-bold">Prachi Rathi</h5>
                        <h6>Web Developer</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="img-block border p-3 mb-5">
                    <img src="assets/images/man.png" class="img-fluid  img-thumbnail rounded-circle" alt="image1">
                    <div class="card-body">
                        <h5 class="font-weight-bold">Shivinder Singh</h5>
                        <h6>Web Developer</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

<!-- Our Team Sections End -->
{{-- 
<!-- Gallery Sectons Start -->
<div class="container mobileVes1 mb-5">
    <h1 class="text-center font-weight-bold pb-5">Our Gallery</h1>
    <div class="filter filter-basic">
        <div class="filter-nav mb-2">
            <button class="btn btn-success active filter-button" data-filter="">All</button>
            <button class="btn btn-primary filter-button" data-filter="nature">Activites</button>
            <button class="btn btn-primary filter-button" data-filter="food">Tour</button>
            <button class="btn btn-primary filter-button" data-filter="architecture">Fundations</button>
        </div>
        <div class="filter-gallery">
            <div class="row">
                <div class="col-md-3 my-1">
                    <div class="" data-category="nature">
                        <div class="item-content">
                            <img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(30).jpg" alt="image"
                                class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 my-1">
                    <div class="" data-category="architecture">
                        <div class="item-content">
                            <img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(1).jpg" alt="image"
                                class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 my-1">
                    <div class="" data-category="food">
                        <div class="item-content">
                            <img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(42).jpg" alt="image"
                                class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 my-1">
                    <div class="" data-category="architecture">
                        <div class="item-content">
                            <img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(2).jpg" alt="image"
                                class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 my-1">
                    <div class="" data-category="nature">
                        <div class="item-content">
                            <img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(114).jpg" alt="image"
                                class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 my-1">
                    <div class="" data-category="architecture">
                        <div class="item-content">
                            <img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(4).jpg" alt="image"
                                class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 my-1">
                    <div class="" data-category="architecture">
                        <div class="item-content">
                            <img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(6).jpg" alt="image"
                                class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 my-1">
                    <div class="" data-category="nature">
                        <div class="item-content">
                            <img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(115).jpg" alt="image"
                                class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 my-1">
                    <div class="" data-category="food">
                        <div class="item-content">
                            <img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(44).jpg" alt="image"
                                class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 my-1">
                    <div class="" data-category="architecture">
                        <div class="item-content">
                            <img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(5).jpg" alt="image"
                                class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 my-1">
                    <div class="" data-category="food">
                        <div class="item-content">
                            <img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(45).jpg" alt="image"
                                class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 my-1">
                    <div class="" data-category="food">
                        <div class="item-content">
                            <img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(46).jpg" alt="image"
                                class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 my-1">
                    <div class="" data-category="food">
                        <div class="item-content">
                            <img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(47).jpg" alt="image"
                                class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 my-1">
                    <div class="" data-category="nature">
                        <div class="item-content">
                            <img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(111).jpg" alt="image"
                                class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 my-1">
                    <div class="" data-category="architecture">
                        <div class="item-content">
                            <img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(3).jpg" alt="image"
                                class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 my-1">
                    <div class="" data-category="nature">
                        <div class="item-content">
                            <img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(112).jpg" alt="image"
                                class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}


<!-- Gallery Section End -->



<script>
    $('.counting').each(function () {
        var $this = $(this),
            countTo = $this.attr('data-count');

        $({
            countNum: $this.text()
        }).animate({
                countNum: countTo
            },

            {

                duration: 3000,
                easing: 'linear',
                step: function () {
                    $this.text(Math.floor(this.countNum));
                },
                complete: function () {
                    $this.text(this.countNum);
                    //alert('finished');
                }

            });


    });

</script>

<script>
    $('.filter-button').on('click', (e) => {
        const filter = $(e.target).attr('data-filter');
        console.log(filter);
        const items = $('.item-content').parent();
        for (item of items) {
            if (filter == '') {

                $(item).addClass('animated zoomIn faster');
                $(item).parent().addClass('animated zoomIn faster');
                $(item).removeClass('d-none');
                $(item).parent().removeClass('d-none');


                console.log('x');
            } else if ($(item).attr('data-category') == filter) {
                $(item).addClass('animated zoomIn faster');
                $(item).parent().addClass('animated zoomIn faster');
                $(item).removeClass('d-none');
                $(item).parent().removeClass('d-none');
            } else {
                $(item).addClass('d-none');
                $(item).parent().addClass('d-none');
                $(item).removeClass('animated zoomIn faster');
                $(item).parent().removeClass('animated zoomIn faster');
            }
        }
    });

</script>

<x-frontend.sections.mobile-view-pages />

<!-- Desktop End  -->
<div class="dpnr">
    <x-footer />
</div>
@endsection
