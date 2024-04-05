<!DOCTYPE html>
<html lang="en">
@include('layouts/head')

<body>
    <div id="deskviewsearch">
        @include('sweetalert::alert')
        <!-- desktop view header -->
        @include("layouts/header")
{{-- //// Social Media //// --}}
{{-- 
    <style>
    /* On screens that are 300px wide or less, the background color is blue */
    @media screen and (max-width:300px) {
        span.psw{
        display:block;
        float:none;
    }
        .cancelbtn{
        width:100%;
     }
    }
</style>

<script>
    // var icon_inr = "{{$icon_inr}}";
    // var icon_local = "{{$icon_local}}";
</script>
<div class="media" style="margin-top:100px;">
    <a href="https://www.facebook.com/officialwagnistrip" target="_blank"><ion-icon name="logo-facebook"></ion-icon></a>
            <a href="https://twitter.com/wagnistrip" target="_blank"><ion-icon name="logo-twitter"></ion-icon></a>
            <a href="https://www.instagram.com/wagnistrip/" target="_blank"><ion-icon name="logo-instagram"></ion-icon></a>
            <a href="https://www.linkedin.com/company/88455961/" target="_blank"><ion-icon name="logo-linkedin"></ion-icon></a>
            <a href="https://in.pinterest.com/wagnistrip/" target="_blank"><ion-icon name="logo-pinterest"></ion-icon></a>
            <a href="https://www.youtube.com/channel/UCPlC2b4m9-sJhEh9P1ZF-4A" target="_blank"><ion-icon name="logo-youtube"></ion-icon></a>
</div>
    
--}}
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-KH0518BW10"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-KH0518BW10');
</script>
        {{--<div>
            <x-mobile-menu />
        </div>--}}

        @section('body')
        @show
        
        <script src="//code.jquery.com/jquery-1.10.2.js" ></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js" ></script>
        {{-- <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
        <script  src="{{ asset('assets/js/date.js') }}"></script>
        <script  src="{{ asset('assets/js/cdnjs/select2.min.js') }}" ></script>
        <script  src="{{ asset('assets/js/filter.js') }}"></script>
        <script  src="{{ asset('assets/js/range.js') }}"></script>
        <script  src="{{ asset('assets/js/slick.js') }}"></script>
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3048796980574141"
     crossorigin="anonymous"></script>
        <script  src="{{ asset('assets/js/slick.min.js') }}"></script>
        <script  src="{{ asset('assets/js/responsive.js') }}"></script>
        <script  src="{{ asset('assets/js/search-flight.js') }}"></script>
        <script  src="{{ asset('assets/js/hotel.js') }}"></script>
        @yield('script')
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "TravelAgency",
          "name": "Wagnistrip (OPC) Pvt. Ltd.",
          "image": "https://s4.aconvert.com/convert/p3r68-cdx67/ao5ii-3g0zw.jpg",
          "@id": "",
          "url": "https://www.flight.wagnistrip.com/",
          "telephone": "+91 7669988012",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "5B/13, Najafgarh Rd, Block 5B, Tilak Nagar",
            "addressLocality": "New Delhi",
            "postalCode": "110018",
            "addressCountry": "IN"
          },
          "geo": {
            "@type": "GeoCoordinates",
            "latitude": 28.6404418,
            "longitude": 77.104176
          },
          "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": [
              "Monday",
              "Tuesday",
              "Wednesday",
              "Thursday",
              "Friday",
              "Saturday",
              "Sunday"
            ],
            "opens": "08:00",
            "closes": "23:00"
          },
          "sameAs": [
            "https://www.instagram.com/wagnistrip/",
            "https://www.wagnistrip.com/",
            "https://in.pinterest.com/wagnistrip/",
            "https://www.linkedin.com/company/88455961/",
            "https://www.youtube.com/@wagnistripofficial",
            "https://twitter.com/wagnistrip",
            "https://www.facebook.com/tripwagnis/"
          ] 
        }
        </script>
        <!-- Event snippet for Phone call lead conversion page --> 
        <script> 
        gtag('event', 'conversion', {'send_to': 'AW-11164811187/vPsACIrc8Z0YELP_5csp'}); 
        </script>
        <script>
            $(document).ready(function() {
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                $(document).ready(function() {

                    $(".getLocation").select2({
                        ajax: {
                            url: "/api/airlinecodes",
                            dataType: 'json',
                            delay: 250,
                            data: function(params) {
                                return {
                                    _token: CSRF_TOKEN,
                                    search: params.term // search term
                                };
                            },
                            processResults: function(response) {
                                return {
                                    results: response
                                };
                            },
                            cache: true
                        }
                    });
                });

                $('.js-example-basic-single').select2();

                $('.regular').slick({
                    dots: false,
                    infinite: false,
                    speed: 300,
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    responsive: [{
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 3,
                                infinite: true,
                                dots: false
                            }
                        },
                        {
                            breakpoint: 600,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 2
                            }
                        },
                        {
                            breakpoint: 480,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        }

                    ]
                });
                $('.regular2').slick({
                    dots: false,
                    infinite: true,
                    speed: 300,
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    responsive: [{
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 3,
                                infinite: true,
                                dots: false
                            }
                        },
                        {
                            breakpoint: 600,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 2
                            }
                        },
                        {
                            breakpoint: 480,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        }
                    ]
                });
            });

            function togglePopup() {
                $(".content").toggle();
            }
        </script>
</body>

</html>
