<header class="navbarStickySlider">
    <div class="container">
        <nav class="navbar navbar-expand-lg flor  navbar-light bg-light">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('assets/images/logo.png') }}" class="img-responsive">
            </a>
            <button class="navbar-toggler navbarToggleBtns" type="button" data-toggle="collapse"
                data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav mr-5">
                    
                    <li class="nav-item ">
                        <a class="nav-link" href="https://wagnistrip.com/hotels"> <i
                                class="fa fa-building-o"></i>
                            Hotels</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('welcome') }}"> <i class="fa fa-plane"></i>
                            Flights</a>
                    </li>
                    
                    <li class="nav-item ">
                        <a class="nav-link" href="https://wagnistrip.com/holidays"> <i class="fa fa-yelp"></i>
                            Holidays</a>
                    </li>

                   {{--  <li class="nav-item ">
                        <a class="nav-link" href="https://wagnistrip.com/cruise"> <i class="fa fa-ship"></i>
                            Cruise</a>
                            
                            
                            
                    </li> --}}
                    
                    
                    
                    
                    
                    
                    
                    
                    
                     <li class="nav-item ">
                    <a class="nav-link" href="https://wagnistrip.com/events"> <i class="fa fa-calendar-o"></i> Events</a>
                </li>
                    
                   {{--  <li class="nav-item ">
                        <a class="nav-link" href="https://wagnistrip.com/visa"> <i
                                class="fa fa-credit-card"></i>
                            Visa</a>
                    </li>
                     <li class="nav-item ">
                    <a class="nav-link" href="{{ route('careers') }}"> <i class="fa fa-ship"></i> Careers</a>
                </li> 
                   <li class="nav-item ">
                    <a class="nav-link" href="{{ route('careerspages') }}"> <i class="fa fa-line-chart"></i> Careers</a>
                </li>  --}}
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"
                            href="#">More</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item"
                                href="{{ route('activities-main') }}">Activities</a>
                            <a class="dropdown-item" href="{{ route('contact-us-form') }}">Customer
                                Support</a>
                        </div>

                    </li>

                </ul>
                <div class="dropdown">

                    <button type="button" class="btn btn-info btn-sm dropdown-toggle bgcolor1" data-toggle="dropdown"
                        aria-expanded="false">
                        <i class="fa fa-user"></i> My Account
                    </button>
                    <div class="dropdown-menu">
                        @guest
                            <a class="dropdown-item" href="https://wagnistrip.com/user/profile"> Login | Sign Up</a>
                        @else
                            <a class="dropdown-item" href="#"> <i class="fa fa-user-circle-o"></i> Hi
                                {{ ucwords(Auth::user()->name) }}</a>
                            <a class="dropdown-item" href="{{ url('/user/profile') }}"> <i
                                    class="fa fa-user-circle-o"></i> Profile </a>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();"> <i class="fa fa-sign-out"></i>
                                Logout </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                class="d-none">
                                @csrf
                            </form>
                        @endguest
                    </div>
                </div>
            </div>

        </nav>
    </div>
</header>
