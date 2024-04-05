<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>partner-agent</title>
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
        <div class="headerStyleLogoandSingi">
            <a href="#whyMyPartner">Why mypartner?</a>
            <a href="#productHighlight">Product highlights</a>
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

    <div class="subscripationss1">
        <div class="get-startedmtt">
            <h1>Get Started</h1>
            <p>Log in or create an account using your mobile number</p>
            <div class="subBox1">
                <img class="flagIndian1" src="assets/images/india.png" alt="">
                <p>+91</p>
                <input type="text" placeholder="Enter Mobile Number" maxlength="10" value="">
            </div>
            <button>CONTINUE</button>
            <div class="promotional-1">
                <div class="boxspclanna">
                    <p>Special Offer</p>
                </div>
                <h6>Earn Promotional Discount* on Every Booking!</h6>
                <span>Limited time offer on flight & hotel bookings</span>
            </div>
        </div>
        <div class="subsliderpartnersheading">
            <div id="carouselExampleSlidesOnly" class="carousel slide sldsardersize" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <h1>The Smart Way to </h1>
                        <h2 class="font-weight-bold">Grow Your Business</h2>
                        <p>Get access to 300+ airline carriers and maximize your earnings with the best deals, cool
                            promotional discounts and easy post-booking modifications.</p>
                    </div>
                    <div class="carousel-item">
                        <h1>The Smart Way to </h1>
                        <h2 class="font-weight-bold">Book Flights</h2>
                        <p>Get access to 300+ airline carriers and maximize your earnings with the best deals, cool
                            promotional discounts and easy post-booking modifications.</p>
                    </div>
                    <div class="carousel-item">
                        <h1>The Smart Way to </h1>
                        <h2 class="font-weight-bold">Book Hotels</h2>
                        <p>Get access to 300+ airline carriers and maximize your earnings with the best deals, cool
                            promotional discounts and easy post-booking modifications.</p>
                    </div>
                    <div class="carousel-item">
                        <h1>The Smart Way to </h1>
                        <h2 class="font-weight-bold">Book Holidays</h2>
                        <p>Get access to 300+ airline carriers and maximize your earnings with the best deals, cool
                            promotional discounts and easy post-booking modifications.</p>
                    </div>
                    <div class="carousel-item">
                        <h1>The Smart Way to </h1>
                        <h2 class="font-weight-bold">Book Cruise</h2>
                        <p>Get access to 300+ airline carriers and maximize your earnings with the best deals, cool
                            promotional discounts and easy post-booking modifications.</p>
                    </div>
                    <div class="carousel-item">
                        <h1>The Smart Way to </h1>
                        <h2 class="font-weight-bold">Book Visa</h2>
                        <p>Get access to 300+ airline carriers and maximize your earnings with the best deals, cool
                            promotional discounts and easy post-booking modifications.</p>
                    </div>
                </div>
            </div>
            <div class="flights5144">
                <p><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Get the Best Deals on <strong>Flights</strong>
                </p>
            </div>
            <div class="hotel51455">
                <p><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Get the Best Deals on <strong>Hotels</strong>
                </p>
            </div>
            <div class="bxssmpr-1">
                <div></div>
            </div>
            <div class="bxssmpr-2"></div>
            <div class="bxssmpr-3"></div>
        </div>
    </div>

    <div class="whymyPartner">
        <div class="leftWhyMypartner">
            <h1 class="font-weight-bold" id="whyMyPartner">Why myPartner?</h1>
            <p>Join us to discover the smart way to grow your business</p>
            <div class="boxwhyMypartner1">
                <div><i class="fa fa-tag" aria-hidden="true"></i></div>
                <h5>best ever rates</h5>
                <h6>Exclusive rates for our partners</h6>
            </div>
            <div class="boxwhyMypartner2">
                <div><i class="fa fa-phone" aria-hidden="true"></i></div>
                <h5>Express Care</h5>
                <h6>Exclusive rates for our partners</h6>
            </div>
            <div class="boxwhyMypartner3">
                <div><i class="fa fa-list-ul" aria-hidden="true"></i></div>
                <h5>WIDEST INVENTORY</h5>
                <h6>Exclusive rates for our partners</h6>
            </div>
            <div class="boxwhyMypartner4">
                <div><i class="fa fa-lock" aria-hidden="true"></i></div>
                <h5>CONFIDENTIALITY</h5>
                <h6>Exclusive rates for our partners</h6>
            </div>
        </div>
        <div class="rightWhyMypartner">

        </div>
    </div>

    <div class="myPartner-Advantages1" id="productHighlight">
        <div class="leftmyPartnerAdv1">
        </div>
        <div class="rightmyPartnerAdv1">
            <h1>myPartner Advantages</h1>
            <p>It is a feature loaded platform!</p>
            <ul>
                <li><i class="fa fa-credit-card-alt pr-2" aria-hidden="true"></i>
                    Get easy access to booking and payment records</li>
                <li><i class="fa fa-book pr-2" aria-hidden="true"></i> Manage easy post-booking modifications on flights
                </li>
                <li><i class="fa fa-check-square-o pr-2" aria-hidden="true"></i> Safe and hygienic stays with MySafety
                    compliant properties</li>
                <li><i class="fa fa-info-circle pr-2" aria-hidden="true"></i> Enjoy the best-in-class cancellation
                    policies on hotels</li>
                <li><i class="fa fa-share-square-o pr-2" aria-hidden="true"></i> Share options directly with your
                    audience on WhatsApp</li>
                <li><i class="fa fa-check-circle-o pr-2" aria-hidden="true"></i> Get booking confirmations printed under
                    your agency’s logo</li>
            </ul>
        </div>
    </div>

    <div class="partnerAgentFeedBack1">
        <h1>People love myPartner</h1>
        <h5>See some of the stories</h5>
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

    <div class="b2bSingup">
        <div class="leftb2bsingup">
            <div>
                <a href="#loginBtn55444">
                    <button>SIGN UP NOW</button>
                </a>
            </div>
        </div>
        <h1 class="pt-5">Start a Profitable Business Today with the</h1>
        <h1>Best B2B Travel Portal in India!</h1>
        <p>It is a feature loaded platform!</p>
    </div>

    <div class="mySafety125">
        <h1>The MySafety Assurance</h1>
        <h5>Offer stays with the best safety and hygiene standards to your clients:</h5>
        <div class="mysafetybox1">
            <img src="assets/images/bed.png" alt="">
            <h5>Hygienic Rooms</h5>
            <p>Thoroughly disinfected with provisions for face masks & gloves</p>
        </div>
        <div class="mysafetybox1">
            <img src="assets/images/team.png" alt="">
            <h5>Trained Staff</h5>
            <p>Strict regulation of hygiene & social distancing protocols</p>
        </div>
        <div class="mysafetybox1">
            <img src="assets/images/liquid-soap.png" alt="">
            <h5>Sanitized Indoors</h5>
            <p>Daily disinfection of common areas & regular temperature checks for all</p>
        </div>
        <div class="mysafetybox1">
            <img src="assets/images/dining.png" alt="">
            <h5>Safe Dining</h5>
            <p>Regular sanitization of kitchen, staff and supplies</p>
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
        <h1>Don’t wait, start growing your business with myPartner today!</h1>
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
