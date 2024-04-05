<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myPartner - Travel agent booking platform by XYZ</title>
    <link rel="shortcut icon" type="image/x-icon"
        href="{{ asset('assets/images/logo/favicon.png') }}">
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="{{ asset('assets/css/select2.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/date.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/hover-min.css') }}">
</head>

<body>
    <div class="partnerAgentProductLogo">
        <div class="brandlogoi1">
            <img src="assets/images/logo.png" alt="">
        </div>

        <div class="loginTabSide1">
            <p>Already a member?</p>
            <button id="loginBtn55444"><i class="fa fa-sign-in" aria-hidden="true"></i>
                LOGIN</button>
        </div>
    </div>

    <div id="loginDisplayBtna" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h3>Login to your account</h3>
            <p>Enter Password to continue</p>
            <form action="">
                <label for="Mobilenumber">Mobile Number</label>
                <input type="text" placeholder="Username (Mobile Number)">
                <label for="Password">Password</label>
                <input type="password" value="Password" placeholder="Password" id="myInput"><br><br>
                <input class="passwordchecked" type="checkbox" onclick="myFunction()">
                <p>Show Password</p>
                <div class="passwordforget1">
                    <a href="#">Forgot Password?</a>
                </div>
                <div class="loginwithotp">
                    <a href="#">Login with OTP</a>
                </div>
                <button>Login</button>
            </form>
        </div>
    </div>

    <div class="signupgetstarted1">
        <div class="signupgetstarted">
            <div class="leftsignupform">
                <div class="signupform-1">
                    <h6>STEP <strong>1 </strong> OF 3 </h6>
                    <hr>
                    <h3>Signup & Get Started!</h3>
                    <h5>Start your myPartner journey in just 3 simple steps!</h5>
                    <div class="formsignup-1">
                        <form action="">
                            <select id="NameTitle">
                                <option>Title</option>
                                <option value="mr">Mr.</option>
                                <option value="ms">Ms.</option>
                                <option value="mrs">Mrs.</option>
                            </select>
                            <div class="fullName_signup-1">
                                <input type="text" placeholder="Your Full Name">
                            </div>
                            <div class="emailId_signup-1">
                                <input type="text" placeholder="Email">
                            </div>
                            <div class="contary-codeSignup">
                                <p>+91</p>
                            </div>

                            <div class="mobile-number-1">
                                <input type="text" value="10" placeholder="Mobile Number">
                            </div>
                            <button>Next</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="rightsideimges">
                <img src="assets/images/23973179.jpg" alt="">
                <div class="intro-12">
                    <h3>Introducing Flights on myPartner</h3>
                    <p>Everything Here is Just One Click Away!</p>
                </div>
            </div>
        </div>
    </div>

    <div class="needPlatforms1">
        <div class="needsPlatformss1">
            <h1>All Your Business Needs On One Platform! </h1>
            <div class="leftVboxfa">
                <div class="leftImg15">
                    <div>Flight</div>
                </div>
                <ul>
                    <li>Best ever rates</li>
                    <li>300+ Airline carriers</li>
                    <li>Easy & quick post booking modifications</li>
                </ul>
            </div>
            <div class="rightVboxfa">
                <div class="leftImg15">
                    <div>Hotels</div>
                </div>
                <ul>
                    <li>Exclusive rates</li>
                    <li>8 lac+ Hotels properties</li>
                    <li>Best-in-class free-cancellation policies</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="whymyPartner-sections">
        <h1>Why myPartner?</h1>
        <h6>Join us to discover the smart way to grow your business</h6>
        <div class="pstmsom_whymy-1">
            <div class="leftMypst-1">
                <div><i class="fa fa-tag" aria-hidden="true"></i></div>
                <h5>BEST EVER RATES</h5>
                <h6>Exclusive rates for our partners</h6>
            </div>
            <div class="leftMypst-2">
                <div><i class="fa fa-list-ul" aria-hidden="true"></i></div>
                <h5>WIDEST INVENTORY</h5>
                <h6>Exclusive rates for our partners</h6>
            </div>
        </div>
        <div class="pstmsom_whymy-2">
            <div class="leftMypst-1">
                <div><i class="fa fa-handshake-o" aria-hidden="true"></i></div>
                <h5>Never before deals</h5>
                <h6>Exclusive rates for our partners</h6>
            </div>
            <div class="leftMypst-2">
                <div><i class="fa fa-phone" aria-hidden="true"></i></div>
                <h5>Express Care</h5>
                <h6>Exclusive rates for our partners</h6>
            </div>
        </div>
        <div class="pstmsom_whymy-3">
            <div class="leftMypst-1">
                <div><i class="fa fa-lock" aria-hidden="true"></i></div>
                <h5>CONFIDENTIALITY ASSURED</h5>
                <h6>Exclusive rates for our partners</h6>
            </div>

        </div>
    </div>

    <div class="advantagesbannr pt-4 pb-3">
        <div class="myPartner-Advantages1" id="productHighlight">
            <div class="leftmyPartnerAdv1">
            </div>
            <div class="rightmyPartnerAdv1">
                <h1>myPartner Advantages</h1>
                <p>It is a feature loaded platform!</p>
                <ul>
                    <li><i class="fa fa-credit-card-alt pr-2" aria-hidden="true"></i>
                        Get easy access to booking and payment records</li>
                    <li><i class="fa fa-book pr-2" aria-hidden="true"></i> Manage easy post-booking modifications on
                        flights
                    </li>
                    <li><i class="fa fa-check-square-o pr-2" aria-hidden="true"></i> Safe and hygienic stays with
                        MySafety
                        compliant properties</li>
                    <li><i class="fa fa-info-circle pr-2" aria-hidden="true"></i> Enjoy the best-in-class cancellation
                        policies on hotels</li>
                    <li><i class="fa fa-share-square-o pr-2" aria-hidden="true"></i> Share options directly with your
                        audience on WhatsApp</li>
                    <li><i class="fa fa-check-circle-o pr-2" aria-hidden="true"></i> Get booking confirmations printed
                        under
                        your agency’s logo</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="partnerAgentFeedBack1 pt-5">
        <h1>15,000+ Agents Love myPartner</h1>
        <h5>Testimonials</h5>
        <div class="myPartnerBtn1">
            <span href="#customerFeedBack1" role="button" data-slide="prev"><i class="fa fa-angle-left"
                    aria-hidden="true"></i></span>
            <span href="#customerFeedBack1" role="button" data-slide="next"><i class="fa fa-angle-right"
                    aria-hidden="true"></i></span>
        </div>
        <div class="partnerAgentSliderCard1">
            <div id="customerFeedBack1" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="customerCardFeed1">
                            <img src="assets/images/user.png" alt="">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit architecto
                                totam saepe autem odit, corporis cumque enim nostrum at eius nulla obcaecati
                                quibusdam laudantium doloribus explicabo nihil dolorum molestias? Molestiae!
                            </p>
                            <h4>YASHWANT GUPTA</h4>
                            <h6>XYZ Pvt. Ltd</h6>
                        </div>
                        <div class="customerCardFeed2">
                            <img src="assets/images/user.png" alt="">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit architecto
                                totam saepe autem odit, corporis cumque enim nostrum at eius nulla obcaecati
                                quibusdam laudantium doloribus explicabo nihil dolorum molestias? Molestiae!
                            </p>
                            <h4>DEEPAK KHANNA</h4>
                            <h6>XYZ Pvt. Ltd</h6>
                        </div>
                        <div class="customerCardFeed3">
                            <img src="assets/images/user.png" alt="">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit architecto
                                totam saepe autem odit, corporis cumque enim nostrum at eius nulla obcaecati
                                quibusdam laudantium doloribus explicabo nihil dolorum molestias? Molestiae!
                            </p>
                            <h4>YASHWANT GUPTA</h4>
                            <h6>XYZ Pvt. Ltd</h6>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="customerCardFeed1">
                            <img src="assets/images/user.png" alt="">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit architecto
                                totam saepe autem odit, corporis cumque enim nostrum at eius nulla obcaecati
                                quibusdam laudantium doloribus explicabo nihil dolorum molestias? Molestiae!
                            </p>
                            <h4>YASHWANT GUPTA</h4>
                            <h6>XYZ Pvt. Ltd</h6>
                        </div>
                        <div class="customerCardFeed2">
                            <img src="assets/images/user.png" alt="">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit architecto
                                totam saepe autem odit, corporis cumque enim nostrum at eius nulla obcaecati
                                quibusdam laudantium doloribus explicabo nihil dolorum molestias? Molestiae!
                            </p>
                            <h4>DEEPAK KHANNA</h4>
                            <h6>XYZ Pvt. Ltd</h6>
                        </div>
                        <div class="customerCardFeed3">
                            <img src="assets/images/user.png" alt="">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit architecto
                                totam saepe autem odit, corporis cumque enim nostrum at eius nulla obcaecati
                                quibusdam laudantium doloribus explicabo nihil dolorum molestias? Molestiae!
                            </p>
                            <h4>DEEPAK KHANNA</h4>
                            <h6>XYZ Pvt. Ltd</h6>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="customerCardFeed1">
                            <img src="assets/images/user.png" alt="">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit architecto
                                totam saepe autem odit, corporis cumque enim nostrum at eius nulla obcaecati
                                quibusdam laudantium doloribus explicabo nihil dolorum molestias? Molestiae!
                            </p>
                            <h4>DEEPAK KHANNA</h4>
                            <h6>XYZ Pvt. Ltd</h6>
                        </div>
                        <div class="customerCardFeed2">
                            <img src="assets/images/user.png" alt="">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit architecto
                                totam saepe autem odit, corporis cumque enim nostrum at eius nulla obcaecati
                                quibusdam laudantium doloribus explicabo nihil dolorum molestias? Molestiae!
                            </p>
                            <h4>DEEPAK KHANNA</h4>
                            <h6>XYZ Pvt. Ltd</h6>
                        </div>
                        <div class="customerCardFeed3">
                            <img src="assets/images/user.png" alt="">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit architecto
                                totam saepe autem odit, corporis cumque enim nostrum at eius nulla obcaecati
                                quibusdam laudantium doloribus explicabo nihil dolorum molestias? Molestiae!
                            </p>
                            <h4>DEEPAK KHANNA</h4>
                            <h6>XYZ Pvt. Ltd</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="customerNeeds1">
        <div class="customerNeedsBox1">
            <h1>Everything Your Customer Needs!</h1>
            <h5>Helping you find a perfect stay for everyone.</h5>
            <div class="custmbox1">
                <img src="assets/images/flight/flights.jpg" alt="">
                <h4>Flights</h4>
            </div>
            <div class="custmbox2">
                <img src="assets/images/hotel/hotel2.jpg" alt="">
                <h4>Hotel</h4>
            </div>
            <div class="custmbox3">
                <img src="assets/images/holiday/goa3.jpg" alt="">
                <h4>Holiday</h4>
            </div>
            <div class="custmbox4">
                <img src="assets/images/cruise/dubai.jpg" alt="">
                <h4>Cruise </h4>
            </div>
            <div class="custmbox5">
                <img src="assets/images/visa/img1.jpg" alt="">
                <h4>Visa</h4>
            </div>
        </div>

    </div>

    
    <div class="sinupbuttonpartenr1">
        <h1>So what are you waiting for?</h1>
        <a href="#loginBtn55444">
            <button><i class="fa fa-sign-in" aria-hidden="true"></i> SIGN UP NOW</button>
        </a>
        <h6>&copy; 2022 XYZ Private Limited</h6>
    </div>

    <script>
        var modal = document.getElementById("loginDisplayBtna");
        var btn = document.getElementById("loginBtn55444");
        var span = document.getElementsByClassName("close")[0];

        btn.onclick = function () {
            modal.style.display = "block";
        }
        span.onclick = function () {
            modal.style.display = "none";
        }
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        function myFunction() {
            var x = document.getElementById("myInput");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }

    </script>
</body>

</html>
