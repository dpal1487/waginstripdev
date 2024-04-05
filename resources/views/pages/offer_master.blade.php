<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width">
    <title> @yield('title') </title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/logo/favicon.png') }}">
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
    .mySlides {display:none}
    .mySlidesT {display:none}
    .w3-left, .w3-right, .w3-badge {cursor:pointer}
    .w3-badge {height:13px;width:13px;padding:0}
    .rightArrow{
        background: #ffffff96;
        padding: 0px 16px;
        font-size: 20px;
        color: #0a0a0a;
        border-radius: 5px;
        box-shadow: 0 1px 6px 0 rgb(0 0 0 / 20%);
    }
    .leftArrow{
        background: #ffffff96;
        padding: 0px 16px;
        font-size: 20px;
        color: #0a0a0a;
        border-radius: 5px;
        /* border: 1px white solid; */
        box-shadow: 0 1px 6px 0 rgb(0 0 0 / 20%);
    }
    .imagetitle{
        background: #ffffffb5;
        font-size: 11px;
        padding: 3px 15px;
        color: #000;
        border-radius: 19px;
    }
    </style>
    
</head>

<body> 
    
    <div id="deskheader">
        <x-header />
    </div>
    <x-mobile-menu /> 

    @section("body")
    @show
    
    <footer class="bg-footer-offer">
        <div class="container topborderfooter">
            <span class="footext">Copyright © 2021 XYZ PVT. LTD.</span>
            <span class="footext float-right">
                We Accept |
                <img src="{{ asset('assets/images/payment1.png') }}" class="imgw-30" alt="">
                <img src="{{ asset('assets/images/payment2.png') }}" class="imgw-30" alt="">
                <img src="{{ asset('assets/images/payment3.png') }}" class="imgw-30" alt="">
                <img src="{{ asset('assets/images/payment4.png') }}" class="imgw-30" alt="">
            </span>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="{{ asset('assets/js/slick.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>

    
</body>

</html>
