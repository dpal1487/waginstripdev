@extends('layouts.master')
@section('title','XYZ')
@section("body")
<div class="pt-6p"></div>

<!-- Breadcrumb -->
<section class="breadcrumb-outer text-center">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>Blogs</h2>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Blogs</li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="section-overlay"></div>
</section>
<!-- BreadCrumb Ends -->

<!-- Listing -->

<section>
    <div class="container boxunder slitxt">
        <div style="padding: 2rem" class="text-center">

            <h4> {{session()->get('email')}} Have A Travel Story To Share? MTT Stories Is All You Need! </h4>
            <p style="text-align:center;"> If you love traveling and have interesting stories to tell, why not share
                them with everyone? With
                MTT Stories, we give you the perfect opportunity to share your travel tales with the world.
                Get your camera out and capture your travel story on video and upload it here. We will be happy to
                feature your tale on our official blog page! </p>
        </div>
        <div class="row">

            <div class="col-md-4 col-xs-12">
                <div class="blog-item">
                    <div class="blog-image">
                        <img src="{{ asset('assets/images/blog/blog1.jpg') }}"
                            style="width:100%">
                    </div>
                    <div class="blog-content">
                        <div class="blog-date">
                            <p><i class="fa fa-clock-o"></i> Posted On : 10 Jan</p>
                        </div>
                        <h4><a href="blog-detail.html">What happened during my first trip
                                alone</a></h4>
                        <p>For my first solo trip I was only 18, just 6 months out of high
                            school! I traveled South America for a year and visited Colombia,
                            Ecuador and Peru.</p>

                        <p> The whole trip was so much more than I could have imagined. I
                            learned Spanish, made some lifelong friends and had some experiences
                            that I will always treasure.</p>

                        <p> That trip really showed me that I can do anything when it comes to
                            travel. Ever since then, I have fit in at least one trip overseas
                            each year, and made travel my priority. Most of those trips have
                            been solo and I wouldn’t have it any other way. I am one of the biggest
                            introverts out there and when I’m traveling,
                            I am rarely alone. Stay in hostels and you will have a whole
                            building of people just like you, ready to meet new people.“</p>
                        <div class="blog-author">
                            <div class="pull-left">
                                <p><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i>
                                        Jack Richard</a></p>
                            </div>
                            <div class="pull-right blog-date-icon">
                                <i class="fa fa-eye" aria-hidden="true"></i> 24
                                <i class="fa fa-heart" aria-hidden="true"></i> 5
                                <i class="fa fa-comment-o" aria-hidden="true"></i> 0
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-4 col-xs-12">
                <div class="blog-item">
                    <div class="blog-image">
                        <img src="{{ asset('assets/images/blog/blog2.jpg') }}"
                            style="width:100%">
                    </div>
                    <div class="blog-content">
                        <div class="blog-date">
                            <p><i class="fa fa-clock-o"></i> Posted On : 12 May</p>
                        </div>
                        <h4><a href="blog-detail.html">Rememnering the road i went through</a>
                        </h4>
                        <p>Travel was my only resort when it came to a peaceful escape from
                            work, daily burdens and mundane life. And, that’s exactly what I
                            missed the most during the whole of the lockdown period.</p>

                        <p>The drive felt all the more refreshing with a few pit stops at the
                            highway Dhabas for some delicious local food along with the
                            “much-needed” travel selfies.</p>


                        <p>By the end of the getaway, I realized that travelling is not the same
                            anymore. The effect of COVID could be vividly felt at every step. I
                            did miss the good old days when I could stop anywhere and enjoy the
                            simplest of things. However, this trip not only rejuvenated my soul
                            but also gave me the confidence to restart travelling, upon adopting
                            new travel norms. Now, nothing can stop the traveller in me from
                            exploring places. Coz, travelling keeps me alive!</p>

                        <div class="blog-author">
                            <div class="pull-left">
                                <p><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i>
                                        Emily Watson</a></p>
                            </div>
                            <div class="pull-right blog-date-icon">
                                <i class="fa fa-eye" aria-hidden="true"></i> 24
                                <i class="fa fa-heart" aria-hidden="true"></i> 5
                                <i class="fa fa-comment-o" aria-hidden="true"></i> 0
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-xs-12">
                <div class="blog-item">
                    <div class="blog-image">
                        <img src="{{ asset('assets/images/blog/blog2.jpg') }}"
                            style="width:100%">
                    </div>
                    <div class="blog-content">
                        <div class="blog-date">
                            <p><i class="fa fa-clock-o"></i> Posted On : 12 May</p>
                        </div>
                        <h4><a href="blog-detail.html">Rememnering the road i went through</a>
                        </h4>
                        <p>Travel was my only resort when it came to a peaceful escape from
                            work, daily burdens and mundane life. And, that’s exactly what I
                            missed the most during the whole of the lockdown period.</p>

                        <p>The drive felt all the more refreshing with a few pit stops at the
                            highway Dhabas for some delicious local food along with the
                            “much-needed” travel selfies.</p>


                        <p>By the end of the getaway, I realized that travelling is not the same
                            anymore. The effect of COVID could be vividly felt at every step. I
                            did miss the good old days when I could stop anywhere and enjoy the
                            simplest of things. However, this trip not only rejuvenated my soul
                            but also gave me the confidence to restart travelling, upon adopting
                            new travel norms. Now, nothing can stop the traveller in me from
                            exploring places. Coz, travelling keeps me alive!</p>

                        <div class="blog-author">
                            <div class="pull-left">
                                <p><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i>
                                        John Walter</a></p>
                            </div>
                            <div class="pull-right blog-date-icon">
                                <i class="fa fa-eye" aria-hidden="true"></i> 24
                                <i class="fa fa-heart" aria-hidden="true"></i> 5
                                <i class="fa fa-comment-o" aria-hidden="true"></i> 0
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-xs-12">
                <div class="blog-item">
                    <div class="blog-image">
                        <img src="{{ asset('assets/images/blog/blog2.jpg') }}"
                            style="width:100%">
                    </div>
                    <div class="blog-content">
                        <div class="blog-date">
                            <p><i class="fa fa-clock-o"></i> Posted On : 12 May</p>
                        </div>
                        <h4><a href="blog-detail.html">Rememnering the road i went through</a>
                        </h4>
                        <p>Travel was my only resort when it came to a peaceful escape from
                            work, daily burdens and mundane life. And, that’s exactly what I
                            missed the most during the whole of the lockdown period.</p>

                        <p>The drive felt all the more refreshing with a few pit stops at the
                            highway Dhabas for some delicious local food along with the
                            “much-needed” travel selfies.</p>


                        <p>By the end of the getaway, I realized that travelling is not the same
                            anymore. The effect of COVID could be vividly felt at every step. I
                            did miss the good old days when I could stop anywhere and enjoy the
                            simplest of things. However, this trip not only rejuvenated my soul
                            but also gave me the confidence to restart travelling, upon adopting
                            new travel norms. Now, nothing can stop the traveller in me from
                            exploring places. Coz, travelling keeps me alive!</p>

                        <div class="blog-author">
                            <div class="pull-left">
                                <p><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i>
                                        Gema Taylor</a></p>
                            </div>
                            <div class="pull-right blog-date-icon">
                                <i class="fa fa-eye" aria-hidden="true"></i> 24
                                <i class="fa fa-heart" aria-hidden="true"></i> 5
                                <i class="fa fa-comment-o" aria-hidden="true"></i> 0
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-xs-12">
                <div class="blog-item">
                    <div class="blog-image">
                        <img src="{{ asset('assets/images/blog/blog2.jpg') }}"
                            style="width:100%">
                    </div>
                    <div class="blog-content">
                        <div class="blog-date">
                            <p><i class="fa fa-clock-o"></i> Posted On : 12 May</p>
                        </div>
                        <h4><a href="blog-detail.html">Rememnering the road i went through</a>
                        </h4>
                        <p>Travel was my only resort when it came to a peaceful escape from
                            work, daily burdens and mundane life. And, that’s exactly what I
                            missed the most during the whole of the lockdown period.</p>

                        <p>The drive felt all the more refreshing with a few pit stops at the
                            highway Dhabas for some delicious local food along with the
                            “much-needed” travel selfies.</p>


                        <p>By the end of the getaway, I realized that travelling is not the same
                            anymore. The effect of COVID could be vividly felt at every step. I
                            did miss the good old days when I could stop anywhere and enjoy the
                            simplest of things. However, this trip not only rejuvenated my soul
                            but also gave me the confidence to restart travelling, upon adopting
                            new travel norms. Now, nothing can stop the traveller in me from
                            exploring places. Coz, travelling keeps me alive!</p>

                        <div class="blog-author">
                            <div class="pull-left">
                                <p><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i>
                                        Gema Taylor</a></p>
                            </div>
                            <div class="pull-right blog-date-icon">
                                <i class="fa fa-eye" aria-hidden="true"></i> 24
                                <i class="fa fa-heart" aria-hidden="true"></i> 5
                                <i class="fa fa-comment-o" aria-hidden="true"></i> 0
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-xs-12">
                <div class="blog-item">
                    <div class="blog-image">
                        <img src="{{ asset('assets/images/blog/blog2.jpg') }}"
                            style="width:100%">
                    </div>
                    <div class="blog-content">
                        <div class="blog-date">
                            <p><i class="fa fa-clock-o"></i> Posted On : 12 May</p>
                        </div>
                        <h4><a href="blog-detail.html">Rememnering the road i went through</a>
                        </h4>
                        <p>Travel was my only resort when it came to a peaceful escape from
                            work, daily burdens and mundane life. And, that’s exactly what I
                            missed the most during the whole of the lockdown period.</p>

                        <p>The drive felt all the more refreshing with a few pit stops at the
                            highway Dhabas for some delicious local food along with the
                            “much-needed” travel selfies.</p>


                        <p>By the end of the getaway, I realized that travelling is not the same
                            anymore. The effect of COVID could be vividly felt at every step. I
                            did miss the good old days when I could stop anywhere and enjoy the
                            simplest of things. However, this trip not only rejuvenated my soul
                            but also gave me the confidence to restart travelling, upon adopting
                            new travel norms. Now, nothing can stop the traveller in me from
                            exploring places. Coz, travelling keeps me alive!</p>

                        <div class="blog-author">
                            <div class="pull-left">
                                <p><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i>
                                        Gema Taylor</a></p>
                            </div>
                            <div class="pull-right blog-date-icon">
                                <i class="fa fa-eye" aria-hidden="true"></i> 24
                                <i class="fa fa-heart" aria-hidden="true"></i> 5
                                <i class="fa fa-comment-o" aria-hidden="true"></i> 0
                            </div>
                        </div>
                    </div>
                </div>
            </div>




        </div>

    </div>


</section>
<!-- Listing Ends -->

<x-frontend.sections.mobile-view-pages />

<!-- Desktop End  -->
<div class="dpnr">
    <x-footer />
</div>
@endsection
