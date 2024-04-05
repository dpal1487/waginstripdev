<!-- FLIGHT MOBILE VIEW START -->
<div id="flightofmobileview">
    <header class="stickyheader">
        <nav class="navbar navbar-expand-sm bg-light navbar-light"  id="mobile_navbar-12">
            <div class="container">
                <span class="menubar" onclick="openNav()"><i class="fa fa-bars"
                        aria-hidden="true"></i></span>
     <a href="{{url('/')}}" class="float-left img-fluid" >

                    <img src="{{ asset('assets/images/logo.png') }}" alt="logo" class="img-responsive">
                </a> 
                <span class="usericon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>
            </div>
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="https://www.wagnistrip.com/user/dashboard"> <i class="fa fa-user-circle-o"></i> <span class="spaceicon"> Login | Sign up
                        Now</span>
                </a>
                <a href="https://flight.wagnistrip.com/"> <i class="fa fa-plane"></i> <span class="spaceicon">Flights</span> </a>
                <a href="https://wagnistrip.com/hotels"> <i class="fa fa-building-o"></i> <span class="spaceicon"> Hotels </span> </a>
                <a href="https://wagnistrip.com/holidays"> <i class="fa fa-yelp"></i> <span class="spaceicon"> Holidays </span></a>
                {{-- <!-- <a href="#"> <i class="fa fa-bus"></i> <span class="spaceicon"> Bus </span></a>
                <a href="#"> <i class="fa fa-cab"></i> <span class="spaceicon"> Cabs </span></a> 
                <a href="https://wagnistrip.com/visa"> <i class="fa fa-book"></i> <span class="spaceicon"> Visa </span></a>  -->--}}
                <a href="https://wagnistrip.com/customer-support"> <i class="fa fa-phone"></i> <span class="spaceicon"> Customer Support </span></a>
                {{--<a href="https://wagnistrip.com/cruise"> <i class="fa fa-ship"></i> <span class="spaceicon"> Cruise </span></a>
                <!--<a href="{{url('contact')}}"> <i class="fa fa-phone"></i> <span class="spaceicon"> Contact Us </span></a>--> --}}
                {{--<a class="dropdown-item effects" href="https://wagnistrip.com/passport">Passport</a>--}}
                 <a class="dropdown-item effects" href="https://www.wagnistrip.com/events">Events</a>
                <a class="dropdown-item effects" href="https://wagnistrip.com/travel-insurance">Travel Insurance</a>
            </div>
        </nav>
    </header>
</div>