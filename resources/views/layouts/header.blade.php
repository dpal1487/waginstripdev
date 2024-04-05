<style>
    #progress {
        background: rgba(255,255,255,0.1);
        justify-content: flex-start;
        border-radius: 100px;
        align-items: center;
        position: fixed;
        z-index: 9999;
        display: flex;
        height: 3px;
        width: 100%;
        top: 0;
    }

    .progress-value {
        animation: load 2s linear;
        box-shadow: 0 10px 40px -10px #fff;
        border-radius: 100px;
        background: #c4302b;
        height: 3px;
        width: 0;
    }

    @keyframes load {
        0% { width: 0; }
        50% { width: 40%; }
        75% { width: 65%; }
        100% { width: 100%; }
    }

    #loader {
      position: fixed;
      z-index: 9999;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: #ffffff;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    
    .loading-animation {
      border: 8px solid #f3f3f3;
      border-top: 8px solid #555;
      border-radius: 50%;
      width: 50px;
      height: 50px;
      animation: spin 1s linear infinite;
    }
    
    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }
    
    .more-effects:is(:link, :active, :visited).act {
    background-color: #8de9a2 !important;
    border-radius: 10px !important;
    }
    a:is(:link, :active, :visited).act {
    background-color: #8de9a2 !important;
    border-radius: 10px !important;
    }
    .hovereffect{
        padding: 9px;
        height: 50px;
    }
    .more-effects{
        margin-top: 9px;
        cursor: pointer;
    }

    .more-effects:hover{
        background-color: rgb(176, 243, 159);
        border-radius: 10px;
    }

    .effects:hover{
        background-color: rgb(176, 243, 159);
        border-radius: 9px;
    }
    .hovereffect :hover {
        background-color: rgb(176, 243, 159);
        border-radius: 9px;
        /* color: white; */
    }
     .contectheader{
        gap:0 10px;
    }
    .tollfreeno a{
        font-size:19px;
    }
    .conText{
        font-size:20px;
    }
    @media screen and (max-width: 576px){
        .MobileQueryNav{
            display: none;
        }
        .mylivechat_collapsed_text{
            font-size: 50px !important;
        }
    }
        
</style>
<style>
    .boxss{
            margin-top: 20px;
            border-radius: 12px;
            padding: 30px
        }
    .logoss{
        text-align: center
    }
    .boxss h1{
        text-align: center;
        margin-bottom: 18px;
    }

    .inputss {
      width: 100%;
      padding: 10px;
      margin: 20px 0;
      border: 2px solid black;
      border-radius: 6px;
      transition: all 0.1s;
      font-size: 20px;
    }

    .groupss {
      position: relative;
    }

    .inputss+label {
      border: 1px solid black;
      position: absolute;
      top: -7px;
      left: 20px;
      transition: all 0.1s ease;
      opacity: 1;
      background: white;
      border-width: 0 2px 0 2px;
      padding: 0 5px;
      transform: translateY(calc(50% + 4px));
    }

    .inputss:placeholder-shown+label {
      opacity: 0;
      transform: translateY(100%);
    }

    .inputss:focus {
      outline: 0;
      border-color: #6D79FF;
    }

    .inputss:focus+label {
      border-color: #6D79FF;
    }

    article {
      width: 100%;
      padding: 40px 0;
      max-width: 500px;
      margin: 0 auto;
    }

    .borss {
      display: flex;
      align-items: center;
      font-size: 16px;
      font-weight: 700;
    }

    .borss:before,
    .borss:after {
      content: "";
      width: 50%;
      height: 1px;
      background: #000;
    }

    .borss:before{
      margin: 0 20px 0 0;
    }

    .borss:after{
      margin: 0 0 0 20px;
    }
    
    .errss{
        color: red;
        font-weight: 700px;
        margin: 0;
        padding: 0;
    }

    #staticBackdrop .modal-dialog, #staticBackdropOTP .modal-dialog{
          display: flex;
      justify-content: center;
      align-content: center;
      height: 100%;
    }
    
    #staticBackdrop .modal-content, #staticBackdropOTP .modal-content{
        position: relative;
        background-color: #fefefe;
        margin: auto;
        padding: 0;
        width: 35%;
        max-width: 1200px;
        height: fit-content;
    }
</style>

<style>
    .overlay.active {
          background: rgba(0, 0, 0, 0.8);
          position: fixed;
          display: block;
          width: 100%;
          height: 100%;
          z-index: 999;
          left: 0;
          top: 0;
          opacity: 70%;
          -webkit-transition: all 0.4s ease;
          transition: all 0.4s ease;
    }
    .humbergermenu{
        display:none;
    }
        
@media (max-width: 576px) {
    .cMenu{
        position:fixed;
        left:-100%;
        top:0;
        bottom:0;
        width:0;
        transition:all 0.4s ease-in-out;
        display:block !important;
        height:100%;
        z-index:9999;
        background:#ffff;
    }
    .cMenu.active{
        left:0;
        width:75%;
    }
    .applogo img{
        width: 370px;
        height: 217px;
    }
    .humbergermenu{
        display:block;
    }
    .humbergermenu i{
       font-size:95px;
    }
    .ul.navbar-nav{
        flex-direction:column !important;
    }
    .navbar ul li{
        width:100%;
        padding:20px 0 34px 0;
        border-bottom:1px solid #ddd;
    }
    .navbar-nav .nav-link{
        padding: 17px;
    }
    .cMenu .contectheader{
        width: 100%;
        padding: 38px;
    }
    .cMenu .dropdown-toggle, 
    .navbar ul li a,
    #flightLoginBtncc .dropdown-item,
    .pLogin,
    .borss,
    .tollfreeno a,
    .navbar-nav .nav-link{
        font-size:55px;
    }
    
    .conText{
        font-size:70px;
    }
    .noDiv b{
        display:block;
        padding:15px 0 15px 0;
        border-bottom:1px solid #ddd;
    }
    
    .tollfreeno a svg{
        width: 61px;
         height: 63px;
    }
    
    #staticBackdrop {
        background:#fff;
    }
    #staticBackdrop .modal-content, #staticBackdropOTP .modal-content{
        width: 97%;
        max-width: 97%;
        height: 100%;
    }
    .inputss {
         padding: 35px;
      }
      .inputss, .inputss+label {
          font-size:45px;
      }
     #staticBackdrop .modal-content .btn.btn-primary {
        font-size: 45px;
    }
    .conText, .modal-title {
        font-size: 70px;
    }
    .modal-header .close {
        font-size: 96px;
    }
    .inputss + label{
        top:-60px;
    }
}
</style>

<div class="overlay" onclick="headerCloser()"></div>
<header class="stickyheader">
    
      @php
        use App\Models\Agent\Agent;
        $Agent = Session()->get("Agent");
            $cncode = !empty(Session::get('country_code')) ? Session::get('country_code') : [];
            $cncode = !empty($cncode[0]) ?  $cncode[0] : 'IN';
      @endphp
    {{-- <div id="progress" >
        <div class="progress-value"></div>
      </div> --}}
     {{--<div id="loader">
        <div class="loading-animation"></div>
    </div>--}}
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <div class="container">
            <a href="{{ url('/') }}" class="float-left img-fluid applogo" id="home">
                <img src="{{ asset('assets/images/logo.png') }}" class="img-responsive" alt="logo">
            </a>
            <div class="cMenu d-flex align-items-center">
                <ul class="navbar-nav">
                
                <li class="nav-item ">
                    <a class="nav-link effects act" href="https://www.flight.wagnistrip.com/"> <i class="fa fa-plane"></i> Flights</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link effects" href="https://www.wagnistrip.com/hotels"> <i class="fa fa-building-o"></i>
                        Hotels</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link effects" href="https://www.wagnistrip.com/holidays"> <i class="fa fa-yelp"></i>
                        Holidays</a>
                </li>

                {{-- <li class="nav-item">
                    <a class="nav-link effects" href="https://www.wagnistrip.com/cruise"> <i class="fa fa-ship"></i> Cruise</a>
                </li> --}}
                
                 <li class="nav-item">
                    <a class="nav-link effects" href="https://www.wagnistrip.com/events"> <i class="fa fa-calendar-o"></i> Events</a>
                </li>
                
                
                
                
                {{-- <li class="nav-item">
                    <a class="nav-link effects" href="https://www.wagnistrip.com/visa"> <i class="fa fa-book"></i> Visa</a>
                </li> --}}

                <li class="nav-item">
                    <a class="nav-link dropdown-toggle effects" id="moreBTN" data-toggle="dropdown" aria-expanded="false">More</a>
                    <div class="dropdown-menu">
                        {{-- <a class="dropdown-item effects" href="https://www.wagnistrip.com/passport">Passport</a> --}}
                        <a class="dropdown-item effects" href="https://www.wagnistrip.com/customer-support">Customer Care</a>
                        <a class="dropdown-item effects" href="https://www.wagnistrip.com/travel-insurance">Travel Insurance</a>
                    </div>
                </li>
                @if($Agent != null)
                <!--<li class="nav-item"><a class="nav-link effects" href="{{url('/group-fare')}}"> <i class="fa fa-users"></i>Group Fare</a></li>-->
                @endif
               
            </ul>
            <div class="float-right d-flex align-items-center contectheader">
                <div class="dropdown">
                    <button type="button" onclick="ChkIsLogin()" class="btn btn-info btn-sm dropdown-toggle bgcolor" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-user"></i> My Account </button>
                    
                    <div class="dropdown-menu">
                        
                        <div id="afterLoginContent">
                      
                        @if($Agent != null)
                            @php
                                $mail = $Agent->email;
                                $Agent = Agent::where('email', '=', $mail)->first();
                            @endphp
                                    <!--<a class="dropdown-item" href="https://www.flight.wagnistrip.com/Agent/Dashboard"> -->
                                    <!--<i class="fa fa-user-circle-o"></i> Profile </a>-->
                                    <a class="dropdown-item" href="https://www.flight.wagnistrip.com/Agent/Dashboard">
                                         <i class="fa fa-tachometer"></i>Patner Dashboard 
                                    </a>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                         <i class="fa fa-tachometer"></i> Fund {{$Agent->state}} 
                                    </a>
                                         <a class="dropdown-item" href="https://www.flight.wagnistrip.com/Agent/LogOut" >
                                        <i class="fa fa-sign-out">
                                            
                                        </i> Logout </a>
                        @else
                        <div id="flightLoginBtncc"></div>
                        <div id="afterLoginContentcc"></div>
                            <a class="dropdown-item pLogin" href="https://www.flight.wagnistrip.com/Agent/login">
                                          <i class="fa fa-sign-out"></i> Patner Login or singup 
                                    </a>
                                    
                        @endif
                        </div>
                    </div>
                    
                    
                    <!--<div class="dropdown-menu">-->
                    <!--    @guest-->
                    <!--    <button type="button" class="btn btn-primary dropdown-item"  data-toggle="modal" data-target="#staticBackdrop">-->
                    <!--      Login | Sign Up-->
                    <!--    </button>-->
                    <!--        {{-- <a class="dropdown-item" href="https://www.wagnistrip.com/user/dashboard"> Login | Sign Up</a> --}}-->
                    <!--    @else-->
                    <!--        <a class="dropdown-item" href="https://www.wagnistrip.com/user/dashboard"> <i-->
                    <!--                class="fa fa-user-circle-o"></i> Profile </a>-->
                    <!--        <a class="dropdown-item" href="https://www.wagnistrip.com/user-dashboard"> <i-->
                    <!--                class="fa fa-tachometer"></i> Dashboard </a>-->
                    <!--        <a class="dropdown-item" href="https://www.wagnistrip.com/login" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">-->
                    <!--            <i class="fa fa-sign-out"></i> Logout </a>-->
                    <!--        <form id="logout-form" action="https://www.wagnistrip.com/login" method="POST" class="d-none">-->
                    <!--            @csrf-->
                    <!--        </form>-->
                    <!--    @endguest-->
                    <!--</div>-->
                </div>
                <div class="tollfreeno d-flex align-items-center">
                    <!--<b>Toll free :<a href="tel:+918069145571">+91 8069145571</a></b><br>-->
                    <b class="conText">Toll free  </b>
                    
                    <div class="noDiv ml-2">
                        @if($cncode == 'IN')
                        <b> <a href="tel:8069145571" title="8069145571"> <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="20" height="20" x="0" y="0" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M512 200.093H0V97.104a8.829 8.829 0 0 1 8.828-8.828h494.345a8.829 8.829 0 0 1 8.828 8.828L512 200.093z" style="" fill="#fab446" data-original="#fab446" class=""></path><path d="M503.172 423.725H8.828A8.829 8.829 0 0 1 0 414.897V311.909h512v102.988a8.828 8.828 0 0 1-8.828 8.828z" style="" fill="#73af00" data-original="#73af00" class=""></path><path d="M0 200.091h512v111.81H0z" style="" fill="#f5f5f5" data-original="#f5f5f5" class=""></path><path d="M256 303.449c-26.164 0-47.448-21.284-47.448-47.448s21.284-47.448 47.448-47.448 47.448 21.284 47.448 47.448-21.284 47.448-47.448 47.448zm0-86.069c-21.298 0-38.621 17.323-38.621 38.621 0 21.298 17.323 38.621 38.621 38.621s38.621-17.323 38.621-38.621c0-21.298-17.323-38.621-38.621-38.621z" style="" fill="#41479b" data-original="#41479b"></path><circle cx="256" cy="256.001" r="5.379" style="" fill="#41479b" data-original="#41479b"></circle><path d="m256 256.808-13.67 1.38-29.364-1.38v-1.614l29.364-1.38 13.67 1.38zM256 256.808l13.67 1.38 29.364-1.38v-1.614l-29.364-1.38-13.67 1.38z" style="" fill="#41479b" data-original="#41479b"></path><path d="m255.193 256.001-1.38-13.67 1.38-29.364h1.614l1.38 29.364-1.38 13.67zM255.193 256.001l-1.38 13.67 1.38 29.364h1.614l1.38-29.364-1.38-13.67z" style="" fill="#41479b" data-original="#41479b"></path><path d="m255.43 256.571-10.642-8.689L225 226.142l1.141-1.141 21.74 19.788 8.689 10.642z" style="" fill="#41479b" data-original="#41479b"></path><path d="m255.43 256.571 8.689 10.642 21.74 19.788L287 285.86l-19.788-21.74-10.642-8.689z" style="" fill="#41479b" data-original="#41479b"></path><path d="m255.43 255.431 8.689-10.642 21.74-19.788 1.141 1.141-19.788 21.74-10.642 8.689zM255.43 255.431l-10.642 8.689L225 285.86l1.141 1.141 21.74-19.788 8.689-10.642z" style="" fill="#41479b" data-original="#41479b"></path><path d="m256.309 256.747-12.102 6.506-27.656 9.962-.618-1.491 26.601-12.512 13.157-3.957z" style="" fill="#41479b" data-original="#41479b"></path><path d="m256.309 256.747 13.157-3.957 26.601-12.512-.618-1.491-27.656 9.962-12.102 6.506z" style="" fill="#41479b" data-original="#41479b"></path><path d="m255.254 256.31-6.506-12.102-9.962-27.656 1.491-.618 12.512 26.601 3.957 13.157z" style="" fill="#41479b" data-original="#41479b"></path><path d="m255.254 256.31 3.957 13.157 12.512 26.601 1.491-.618-9.962-27.656-6.506-12.102z" style="" fill="#41479b" data-original="#41479b"></path><path d="m255.691 256.747-13.157-3.957-26.601-12.512.618-1.491 27.656 9.962 12.102 6.506zM255.691 256.747l12.102 6.506 27.656 9.962.618-1.491-26.601-12.512-13.157-3.957z" style="" fill="#41479b" data-original="#41479b"></path><path d="m255.254 255.692 3.957-13.157 12.512-26.601 1.491.618-9.962 27.656-6.506 12.102z" style="" fill="#41479b" data-original="#41479b"></path><path d="m255.254 255.692-6.506 12.102-9.962 27.656 1.491.618 12.512-26.601 3.957-13.157z" style="" fill="#41479b" data-original="#41479b"></path><circle cx="256" cy="256.001" r="7.256" style="" fill="#f5f5f5" data-original="#f5f5f5" class=""></circle><circle cx="256" cy="256.001" r="4.351" style="" fill="#41479b" data-original="#41479b"></circle></g></svg> : 8069145571</a></b><br>
                        <b> <a href="tel:8009965152"> <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="20" height="20" x="0" y="0" viewBox="0 0 64 64" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path fill="#ecf0f1" d="m0 34 1-19h28l35 3v28l-32 1-32-1z" data-original="#ecf0f1" class=""></path><path fill="#e74c3c" d="M30 14h34v4H29zm-1 12h35v-4H29zm35 4H29l1 4h34zM0 42h64v-4H0zm64 4H0v4h64z" data-original="#e74c3c" class=""></path><path fill="#2980b9" d="M0 14h30v20H0zm3.3 2.2c-.1-.3-.6-.3-.7 0 0 .1-.2.2-.3.2-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6 0 .1-.1 0-.2-.2zm0 4c-.1-.3-.6-.3-.7 0 0 .1-.2.2-.3.2-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6 0 .1-.1 0-.2-.2zm-1 4.3c-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6-.1 0-.3-.1-.3-.2-.1-.3-.6-.3-.7 0 .1.1 0 .2-.2.2zm1 3.7c-.1-.3-.6-.3-.7 0 0 .1-.2.2-.3.2-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6 0 .1-.1 0-.2-.2zm5-11.7c-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6-.1 0-.3-.1-.3-.2-.1-.3-.6-.3-.7 0 .1.1 0 .2-.2.2zm1 3.7c-.1-.3-.6-.3-.7 0 0 .1-.2.2-.3.2-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6 0 .1-.1 0-.2-.2zm-1 4.3c-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6-.1 0-.3-.1-.3-.2-.1-.3-.6-.3-.7 0 .1.1 0 .2-.2.2zm1 3.7c-.1-.3-.6-.3-.7 0 0 .1-.2.2-.3.2-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6 0 .1-.1 0-.2-.2zm-4-9.7c-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6-.1 0-.3-.1-.3-.2-.1-.3-.6-.3-.7 0 .1.1 0 .2-.2.2zm1 3.7c-.1-.3-.6-.3-.7 0 0 .1-.2.2-.3.2-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6 0 .1-.1 0-.2-.2zm-1 4.3c-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6-.1 0-.3-.1-.3-.2-.1-.3-.6-.3-.7 0 .1.1 0 .2-.2.2zm1 3.7c-.1-.3-.6-.3-.7 0 0 .1-.2.2-.3.2-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6 0 .1-.1 0-.2-.2zm8-13.7c-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6-.1 0-.3-.1-.3-.2-.1-.3-.6-.3-.7 0 .1.1 0 .2-.2.2zm1 3.7c-.1-.3-.6-.3-.7 0 0 .1-.2.2-.3.2-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6 0 .1-.1 0-.2-.2zm-1 4.3c-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6-.1 0-.3-.1-.3-.2-.1-.3-.6-.3-.7 0 .1.1 0 .2-.2.2zm1 3.7c-.1-.3-.6-.3-.7 0 0 .1-.2.2-.3.2-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6 0 .1-.1 0-.2-.2zm-4-9.7c-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6-.1 0-.3-.1-.3-.2-.1-.3-.6-.3-.7 0 .1.1 0 .2-.2.2zm1 3.7c-.1-.3-.6-.3-.7 0 0 .1-.2.2-.3.2-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6 0 .1-.1 0-.2-.2zm-1 4.3c-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6-.1 0-.3-.1-.3-.2-.1-.3-.6-.3-.7 0 .1.1 0 .2-.2.2zm1 3.7c-.1-.3-.6-.3-.7 0 0 .1-.2.2-.3.2-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6 0 .1-.1 0-.2-.2zm8-13.7c-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6-.1 0-.3-.1-.3-.2-.1-.3-.6-.3-.7 0 .1.1 0 .2-.2.2zm1 3.7c-.1-.3-.6-.3-.7 0 0 .1-.2.2-.3.2-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6 0 .1-.1 0-.2-.2zm-1 4.3c-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6-.1 0-.3-.1-.3-.2-.1-.3-.6-.3-.7 0 .1.1 0 .2-.2.2zm1 3.7c-.1-.3-.6-.3-.7 0 0 .1-.2.2-.3.2-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6 0 .1-.1 0-.2-.2zm-4-9.7c-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6-.1 0-.3-.1-.3-.2-.1-.3-.6-.3-.7 0 .1.1 0 .2-.2.2zm1 3.7c-.1-.3-.6-.3-.7 0 0 .1-.2.2-.3.2-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6 0 .1-.1 0-.2-.2zm-1 4.3c-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6-.1 0-.3-.1-.3-.2-.1-.3-.6-.3-.7 0 .1.1 0 .2-.2.2zm1 3.7c-.1-.3-.6-.3-.7 0 0 .1-.2.2-.3.2-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6 0 .1-.1 0-.2-.2zm8-13.7c-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6-.1 0-.3-.1-.3-.2-.1-.3-.6-.3-.7 0 .1.1 0 .2-.2.2zm1 3.7c-.1-.3-.6-.3-.7 0 0 .1-.2.2-.3.2-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6 0 .1-.1 0-.2-.2zm-1 4.3c-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6-.1 0-.3-.1-.3-.2-.1-.3-.6-.3-.7 0 .1.1 0 .2-.2.2zm1 3.7c-.1-.3-.6-.3-.7 0 0 .1-.2.2-.3.2-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6 0 .1-.1 0-.2-.2zm-4-9.7c-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6-.1 0-.3-.1-.3-.2-.1-.3-.6-.3-.7 0 .1.1 0 .2-.2.2zm1 3.7c-.1-.3-.6-.3-.7 0 0 .1-.2.2-.3.2-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6 0 .1-.1 0-.2-.2zm-1 4.3c-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6-.1 0-.3-.1-.3-.2-.1-.3-.6-.3-.7 0 .1.1 0 .2-.2.2zm1 3.7c-.1-.3-.6-.3-.7 0 0 .1-.2.2-.3.2-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6 0 .1-.1 0-.2-.2z" data-original="#2980b9" class=""></path></g></svg> : 18009965152</a></b><br>
                        <b> <a href="tel:18009965152" title="18009965152"> <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M0 85.333h512V426.67H0z" style="" fill="#f0f0f0" data-original="#f0f0f0" class=""></path><path d="M288 85.33h-64v138.666H0v64h224v138.666h64V287.996h224v-64H288z" style="" fill="#d80027" data-original="#d80027" class=""></path><path d="M393.785 315.358 512 381.034v-65.676zM311.652 315.358 512 426.662v-31.474l-143.693-79.83zM458.634 426.662l-146.982-81.664v81.664z" style="" fill="#0052b4" data-original="#0052b4" class=""></path><path d="M311.652 315.358 512 426.662v-31.474l-143.693-79.83z" style="" fill="#f0f0f0" data-original="#f0f0f0" class=""></path><path d="M311.652 315.358 512 426.662v-31.474l-143.693-79.83z" style="" fill="#d80027" data-original="#d80027" class=""></path><path d="M90.341 315.356 0 365.546v-50.19zM200.348 329.51v97.151H25.491z" style="" fill="#0052b4" data-original="#0052b4" class=""></path><path d="M143.693 315.358 0 395.188v31.474l200.348-111.304z" style="" fill="#d80027" data-original="#d80027" class=""></path><path d="M118.215 196.634 0 130.958v65.676zM200.348 196.634 0 85.33v31.474l143.693 79.83zM53.366 85.33l146.982 81.664V85.33z" style="" fill="#0052b4" data-original="#0052b4" class=""></path><path d="M200.348 196.634 0 85.33v31.474l143.693 79.83z" style="" fill="#f0f0f0" data-original="#f0f0f0" class=""></path><path d="M200.348 196.634 0 85.33v31.474l143.693 79.83z" style="" fill="#d80027" data-original="#d80027" class=""></path><path d="M421.659 196.636 512 146.446v50.19zM311.652 182.482V85.331h174.857z" style="" fill="#0052b4" data-original="#0052b4" class=""></path><path d="M368.307 196.634 512 116.804V85.33L311.652 196.634z" style="" fill="#d80027" data-original="#d80027" class=""></path></g></svg> : 18009965152</a></b>
                        @else
                        <b> <a href="tel:8009965152"> <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="20" height="20" x="0" y="0" viewBox="0 0 64 64" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path fill="#ecf0f1" d="m0 34 1-19h28l35 3v28l-32 1-32-1z" data-original="#ecf0f1" class=""></path><path fill="#e74c3c" d="M30 14h34v4H29zm-1 12h35v-4H29zm35 4H29l1 4h34zM0 42h64v-4H0zm64 4H0v4h64z" data-original="#e74c3c" class=""></path><path fill="#2980b9" d="M0 14h30v20H0zm3.3 2.2c-.1-.3-.6-.3-.7 0 0 .1-.2.2-.3.2-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6 0 .1-.1 0-.2-.2zm0 4c-.1-.3-.6-.3-.7 0 0 .1-.2.2-.3.2-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6 0 .1-.1 0-.2-.2zm-1 4.3c-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6-.1 0-.3-.1-.3-.2-.1-.3-.6-.3-.7 0 .1.1 0 .2-.2.2zm1 3.7c-.1-.3-.6-.3-.7 0 0 .1-.2.2-.3.2-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6 0 .1-.1 0-.2-.2zm5-11.7c-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6-.1 0-.3-.1-.3-.2-.1-.3-.6-.3-.7 0 .1.1 0 .2-.2.2zm1 3.7c-.1-.3-.6-.3-.7 0 0 .1-.2.2-.3.2-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6 0 .1-.1 0-.2-.2zm-1 4.3c-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6-.1 0-.3-.1-.3-.2-.1-.3-.6-.3-.7 0 .1.1 0 .2-.2.2zm1 3.7c-.1-.3-.6-.3-.7 0 0 .1-.2.2-.3.2-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6 0 .1-.1 0-.2-.2zm-4-9.7c-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6-.1 0-.3-.1-.3-.2-.1-.3-.6-.3-.7 0 .1.1 0 .2-.2.2zm1 3.7c-.1-.3-.6-.3-.7 0 0 .1-.2.2-.3.2-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6 0 .1-.1 0-.2-.2zm-1 4.3c-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6-.1 0-.3-.1-.3-.2-.1-.3-.6-.3-.7 0 .1.1 0 .2-.2.2zm1 3.7c-.1-.3-.6-.3-.7 0 0 .1-.2.2-.3.2-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6 0 .1-.1 0-.2-.2zm8-13.7c-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6-.1 0-.3-.1-.3-.2-.1-.3-.6-.3-.7 0 .1.1 0 .2-.2.2zm1 3.7c-.1-.3-.6-.3-.7 0 0 .1-.2.2-.3.2-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6 0 .1-.1 0-.2-.2zm-1 4.3c-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6-.1 0-.3-.1-.3-.2-.1-.3-.6-.3-.7 0 .1.1 0 .2-.2.2zm1 3.7c-.1-.3-.6-.3-.7 0 0 .1-.2.2-.3.2-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6 0 .1-.1 0-.2-.2zm-4-9.7c-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6-.1 0-.3-.1-.3-.2-.1-.3-.6-.3-.7 0 .1.1 0 .2-.2.2zm1 3.7c-.1-.3-.6-.3-.7 0 0 .1-.2.2-.3.2-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6 0 .1-.1 0-.2-.2zm-1 4.3c-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6-.1 0-.3-.1-.3-.2-.1-.3-.6-.3-.7 0 .1.1 0 .2-.2.2zm1 3.7c-.1-.3-.6-.3-.7 0 0 .1-.2.2-.3.2-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6 0 .1-.1 0-.2-.2zm8-13.7c-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6-.1 0-.3-.1-.3-.2-.1-.3-.6-.3-.7 0 .1.1 0 .2-.2.2zm1 3.7c-.1-.3-.6-.3-.7 0 0 .1-.2.2-.3.2-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6 0 .1-.1 0-.2-.2zm-1 4.3c-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6-.1 0-.3-.1-.3-.2-.1-.3-.6-.3-.7 0 .1.1 0 .2-.2.2zm1 3.7c-.1-.3-.6-.3-.7 0 0 .1-.2.2-.3.2-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6 0 .1-.1 0-.2-.2zm-4-9.7c-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6-.1 0-.3-.1-.3-.2-.1-.3-.6-.3-.7 0 .1.1 0 .2-.2.2zm1 3.7c-.1-.3-.6-.3-.7 0 0 .1-.2.2-.3.2-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6 0 .1-.1 0-.2-.2zm-1 4.3c-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6-.1 0-.3-.1-.3-.2-.1-.3-.6-.3-.7 0 .1.1 0 .2-.2.2zm1 3.7c-.1-.3-.6-.3-.7 0 0 .1-.2.2-.3.2-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6 0 .1-.1 0-.2-.2zm8-13.7c-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6-.1 0-.3-.1-.3-.2-.1-.3-.6-.3-.7 0 .1.1 0 .2-.2.2zm1 3.7c-.1-.3-.6-.3-.7 0 0 .1-.2.2-.3.2-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6 0 .1-.1 0-.2-.2zm-1 4.3c-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6-.1 0-.3-.1-.3-.2-.1-.3-.6-.3-.7 0 .1.1 0 .2-.2.2zm1 3.7c-.1-.3-.6-.3-.7 0 0 .1-.2.2-.3.2-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6 0 .1-.1 0-.2-.2zm-4-9.7c-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6-.1 0-.3-.1-.3-.2-.1-.3-.6-.3-.7 0 .1.1 0 .2-.2.2zm1 3.7c-.1-.3-.6-.3-.7 0 0 .1-.2.2-.3.2-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6 0 .1-.1 0-.2-.2zm-1 4.3c-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6-.1 0-.3-.1-.3-.2-.1-.3-.6-.3-.7 0 .1.1 0 .2-.2.2zm1 3.7c-.1-.3-.6-.3-.7 0 0 .1-.2.2-.3.2-.3 0-.5.4-.2.6.1.1.2.3.1.4-.1.3.3.6.5.4.1-.1.3-.1.4 0 .3.2.6-.1.5-.4 0-.1 0-.3.1-.4.3-.2.1-.6-.2-.6 0 .1-.1 0-.2-.2z" data-original="#2980b9" class=""></path></g></svg> : 18009965152</a></b>
                        @endif
                        
                    </div>
                </div>
            </div>
            </div>
            <div class="humbergermenu" onclick="headerOpner()">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </div>
        </div>
    </nav>
</header>


@php
    $er = '';
@endphp
@if (isset($error))
    @php
         
        $er = $error;
    @endphp
@endif
<!-- Modal -->
<div style="z-index:1000000;" class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Login / Register</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="boxss">
            <h1>Login / Register</h1>
            <form method="Post" action="{{url('/')}}/api/logins"  id="userLoginSignInForm">
               @csrf
                <div class="mb-3 groupss">
                    <input type="text" class="inputss" id="email" name="email" placeholder="Email or Mobile Number" required>
                    <label for="email" class="form-label email" >Email or Mobile Number</label>
                </div>
                <p class="errss ">{{$er}}</p>
                <button type="submit" class="btn btn-primary w-100 p-2">CONTINUE</button>
            </form>
            <article>
                <p class="borss">Login/Register</p>
              </article>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">function add_chatinline(){var hccid=74316815;var nt=document.createElement("script");nt.async=true;nt.src="https://mylivechat.com/chatinline.aspx?hccid="+hccid;var ct=document.getElementsByTagName("script")[0];ct.parentNode.insertBefore(nt,ct);} add_chatinline();</script>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3048796980574141"
     crossorigin="anonymous"></script>
<script>

    function ChkIsLogin() {
        let url = 'https://www.wagnistrip.com/api/IsLogin';
        fetch(url, {
            method: 'GET',
        }).then(res => res.json())
        .then((res) => {
            console.log(res)
            if (res.status === true) {
                document.getElementById("afterLoginContentcc").innerHTML = `<a class="dropdown-item" href="https://www.wagnistrip.com/user/dashboard"> <i class="fa fa-user-circle-o"></i> Profile </a><a class="dropdown-item" href="https://www.wagnistrip.com/user-dashboard"> <i class="fa fa-tachometer"></i> Dashboard </a><a class="dropdown-item" href="https://www.wagnistrip.com/login" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> Logout </a>`;
            } else if (res.status === false) {
                document.getElementById("flightLoginBtncc").innerHTML = `<button type="button" class="btn btn-primary dropdown-item"  data-toggle="modal" data-target="#staticBackdrop">User Login | Sign Up</button>`;
            }
        })
    }
    
    let cMenu = $(".cMenu");
    let overlay = $(".overlay");
    function headerOpner(){
        cMenu.addClass("active");
        overlay.addClass("active");
    }
    function headerCloser(){
        cMenu.removeClass("active");
        overlay.removeClass("active");
    }
    
    
    // let userLoginFunc = () =>{
    //     let userLoginForm = document.getElementByID("userLoginSignInForm");
    //     userLoginForm.addEventListener('submit', (e) =>{
    //         e.preventDefault();
    //         let formData = new formData(userLoginForm);
    //         let PlainFormData = Object.fromEntries(formData.entries());
    //         let formDataJsonString = JSON.stringify(PlainFormData);
    //         let url = 'https://www.wagnistrip.com/api/IsLogin';
    //         fetch(url, {
    //             method: "Post",
    //             headers: {
    //                 "Content-Type": "application/json"
    //             },
    //             body: formDataJsonString
    //         }).then(res = res.json())
    //         .then((res)=>{
    //             if(res.status == true){
    //                 $("#staticBackdrop").modal("hide");
    //                 $("#staticBackdropOTP").modal("show");
    //             }else {
    //                 alert("unknown situation");
    //             }
    //         }).catch((error) => console.log(error));
    //     });
    // }
    // userLoginFunc();
    
    
</script>


