@extends('layouts.master')
@section('title', 'wagnistrip')
@section('body')
    <!-- Desktop View Start -->

    <div class="jumbotron samarser jumbotron-fluid mb-5" style="margin-top:80px;">
        <div class="container mobileVes1">
            <h1 class="display-4 text-white">Blog list</h1>
        </div>
    </div>

    <div class="container mb-5 mobileVes1">
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top" src="assets/images/blog/blod-1.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold">Kedarnath yatra 2022</h5>
                    <p class="card-text">
                        Regardless of how testing the objective of Kedarnath is, the profound tornado and the feel of the
                        spot is to such an extent that lovers can't avoid themselves to come here for divine elegance of
                        Lord Shiva. It is one of the Chota Char Dhams...
                        <a href="{{url('blog-details')}}">Read More</a>
                    </p>
                    <p class="card-text"><small class="text-muted">Last updated 2 months ago</small></p>
{{session()->get('email')}}
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="assets/images/blog/blog-2.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold">Best Things to Do, See, And Explore in Istanbul</h5>
                    <p class="card-text">
                        Istanbul is a diverse city that’s complete of adventures to discover. You can find something interesting
                        and a laugh to do at any time of the day! For instance, you can climb the Galata Tower, keep on the
                        Grand Bazaar, indulge in drinks at Kadıköy Bar avenue, and on and on..
                        <a href="{{url('blog-details2')}}">Read More</a>
                    </p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="assets/images/blog/blog-3.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold">Best Places to Visit in Spain.</h5>
                    <p class="card-text">
                        Located at the Iberian Peninsula in Europe, Spain, formally the Kingdom of Spain is a beautiful brimming
                        with complete of incredible places. With its remarkable cities, dramatic coastlines, charming landscapes
                        and incredible architectural monuments, Spain held the second places after France in the list of
                        maximums visited nations in the world.
                        <a href="{{url('blog-details3')}}">Read More</a>
                    </p>
                    <p class="card-text"><small class="text-muted">Last updated 3 months ago</small></p>
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
