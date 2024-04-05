@php
//    $keyword_string = '';
//    $get_keywords = session()->get('keyword_string');
//    if(!empty($get_keywords)){
//        if(!empty($get_keywords['keyword_lenth'])){
//            $keylenth = $get_keywords['keyword_lenth'];
//            $keyword_string = implode(',' , $get_keywords['data']);
//        }
//    }
@endphp
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width">
    
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/logo/favicon.png') }}">
    <script src="{{ asset('assets/js/jquery.min.js') }}" ></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}" ></script>
    <script src="{{ asset('assets/js/popper.min.js') }}" ></script>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="{{ asset('assets/css/select2.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/date.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/hover-min.css') }}">
     <link rel="stylesheet" href="{{ asset('assets/css/materialStyles.css') }}">
    
    <title> @yield('title') </title>
    <meta name="description" content="@yield('Description')">
    <meta name="keywords" content="@yield('Keywords')">
    {{--<meta name="keywords" content="{{$keyword_string}}">--}}
    <meta  name="keywords" content="@include('layouts.Keywords')">
    <!--<meta name="keywords" content="Indigo,Vistara,Cheap_flight,flight_goa_delhi,flight_mumbai_delhi,flight_Delhi_dubai,cheap_flight,flight_delhi_kolkatta,flight_delhi_jaipur,air_india">-->
    
    <meta name="language" content="english" />
    <meta property="og:type" content="article" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Wagnistrip" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="googlebot-news" content="nosnippet">
    <meta name="viewport" content="width=device-width">
    <meta name="robots" content="INDEX , FOLLOW">
    <meta name="rating" content="General"/>
    <meta name="page-type" content="content"/>
    <meta name="subject" content="Tour and Travel"/>
    <meta name="audience" content="all"/>
    <link rel="canonical" href="https://www.flight.wagnistrip.com/" />
    
    
     <!-- Twitter Card data -->
    <meta name="twitter:card" content="Wagnistrip">
    <meta name="twitter:site" content="Wagnistrip">
    <meta name="twitter:title" content=" @yield('title')">
    <meta name="twitter:description" content="@yield('Description')">
    <meta name="twitter:creator" content="Wagnistrip">
    <meta name="twitter:image" content="banner_images/5d28299d0ffee154_s2.jpg">
    
    <!-- Open Graph data -->
    <meta property="og:title" content=" @yield('title')" />
    <meta property="og:type" content="product" />
    <meta property="og:url" content="https://www.flight.wagnistrip.com/" />
    <meta property="og:image" content="banner_images/5d28299d0ffee154_s2.jpg" />
    <meta property="og:description" content="@yield('Description')" />
    <meta property="og:description" content="@yield('Keywords')" />
    <meta property="og:site_name" content="Wagnistrip" />
    <meta property="fb:app_id" content="tripwagnis" />
    
    <meta name="msvalidate.01" content="FA401EE74B72AC9DF1CF9CC3A43BA494" />
    <meta name="google-site-verification" content="xEksSEKrZM7fZ6zALH8x9qssDN9kOWHcrn9Xzmu7twQ" />

    <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-G3H9YH1FYC"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'G-G3H9YH1FYC');
        </script>
    <!-- Google tag (gtag.js) --> 
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11164811187"></script> 
    <script> 
        window.dataLayer = window.dataLayer || []; 
        function gtag(){
            dataLayer.push(arguments);
        } 
        gtag('js', new Date()); 
        gtag('config', 'AW-11164811187'); 
    </script>
    @yield('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
</head>
