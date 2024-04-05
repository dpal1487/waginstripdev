@extends('layouts.master')
@section('title', 'XYZ')
@section('body')
    <!-- Desktop View Start -->

    <div class="jumbotron samarser jumbotron-fluid mb-5" style="margin-top:80px;">
        <div class="container mobileVes1">
            <h1 class="display-4 text-white">Best Things to Do, See, And Explore in Istanbul</h1>
        </div>
    </div>

    <div class="container mobileVes1 hotel_offerssect mt-n4 p-0">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('blog-page') }}">Blog</a></li>
                <li class="breadcrumb-item active" aria-current="page">Best Things to Do, See, And Explore in Istanbul.</li>
            </ol>
        </nav>
    </div>

    <div class="container mobileVes1 blogsliders mb-5">
        <h4 class="card-title font-weight-bold">Best Things to Do, See, And Explore in Istanbul</h4>
        <div class="row">
            <div class="col-sm-7">
                <p>
                    We’ve worked to put together the final Istanbul guide with those top things to do in Istanbul from
                    seeing the maximum superb mosques to trying delicious street food. You’ll have trouble selecting
                    amongst all of the places on this listing as you decide how to get the most out of you experience in
                    Istanbul.
                    While touring the locations in this listing, you can also encounter new areas to explore since Istanbul is a
                    big city. However, we’ll provide plenty of tips about the encircling location in addition to the specific
                    destination, so keep your notes handy. Here are the things activities in Istanbul!
                    Get Romantic at The Galata Tower
                    The Galata Tower is a top local and tourist attraction for an extensive variety of people in Istanbul, and
                    The Galata Tower is very romantic and definitely to go together with a person special. There is even a
                    famous legendary love story in Turkey based on the Galata Tower.
                    Although first built as a watchtower against invaders, the Galata Tower now serves as a museum and
                    main attraction. It additionally offers tourists a valuable possibility to see a 360-degree view of Istanbul.
                    And if you’re unsure about climbing to the pinnacle, don’t worry, there are elevators present in the
                    tower on your convenience. If you&#39;ve got time, you should enjoy delicious Turkish food on the Galata
                  <h6>  Tower’s café or restaurant.</h6>
    
                    Taste True Istanbul Street Food
                    Since the 1980s, Kızılkayalar has been a local and traveler preferred in the heart of Istanbul’s Taksim
                    Square. Loved via way of means of youngsters and elderly, this area is valuable for many reasons.
                    However, one particular reason strikes the maximum that is Kızılkayalar’s speciality: the Islak Hamburger
                    (Wet Hamburger). Islak Hamburger is one of the most famous street foods in Istanbul. It’s made out of
                    a special tomato sauce bun and the burger is ready in a griddle.
                    
                    The best and authentic place (among many places) to try Islak Hamburger is here. Eating this hamburger
                    after a few drinks is highly recommended, as this tasty hamburger soaks up all your troubles. Of course,
                    there are plenty other delicious selections to eat from toast and Turkish sandwiches.
                    This restaurant has a few franchises all over Istanbul, but this is the original shop in an iconic (and
                    busiest) location.
                    The Most Historic Hotels
                    If you seek a hotel with an historical ambiance and a luxurious, elegant touch, the 127-year-vintage Pera
                    Palace Hotel is the right selection. This stylish 5-star hotel is truly suggested as the best place to stay
                    since it incorporates Istanbul’s history with Turkish neo-classical design. This superb vintage splendor
                    actually survived the fall of the Ottoman Empire and thrived because the New Turkish Empire rose.
                    The Pera Palace Hotel clearly stands out from other hotels, not only in the Beyoğlu area, but also in
                    Istanbul. 
                    <a href="https://www.xyz.com/">XYZ</a>.

                </p>

            </div>
            <div class="col-sm-5">
                <div class="card">
                    <img src="assets/images/blog/blog-11.jpg" alt="">
                </div>
                <div class="card mt-3">
                    <img src="assets/images/blog/blog-12.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 p-4">
                <div class="card">
                    <img src="assets/images/blog/blog-14.jpg" alt="">
                </div>
            </div>
            <div class="col-sm-6 p-4">
                <div class="card">
                    <img src="assets/images/blog/blog-18.jpg" alt="">
                </div>
            </div>
        </div>
    </div>


    <x-frontend.sections.mobile-view-pages />
    <!-- Desktop End  -->
    <div class="dpnr">
        <x-footer />
    </div>
@endsection
