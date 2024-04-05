@extends('layouts.master')
@section('title', 'XYZ')
@section('body')
<!-- DESKTOP VIEW START  -->

<div class="full-banner">
</div>

<div class="review-section-1">
    <h4>Review your Booking</h4>
    <div class="review-left-sec">
        <h6>Hotel Information </h6>
    </div>
    <div class="review-right-sec">
        <h6>PRICE BREAK-UP</h6>
    </div>
    <div class="rbt">
        <div class="col-se-1">
            <div class="img-sec1">
                <img src="assets/images/hotel/room-1.png" alt="">
                <h5 class="m-0 pl-4 font-weight-bold">Deluxe AC Room</h5>
            </div>
            <div class="ctn-sec1">
                <h4>Goa Holiday Home</h4>
                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                <i class="fa fa-star-half text-warning" aria-hidden="true"></i>
                <p class="small text-muted"><i class="fa fa-map-marker text-dark" aria-hidden="true"></i> 5B/13, Tilak
                    Nagar, Delhi-18</p>
                <div class="rmt-1">
                    <div class="check-in-1">
                        <h6 class="m-0">Check-In</h6>
                        <h3 class="font-weight-bold m-0">3 Feb 2022</h3>
                        <p class="small text-muted">Thursday, 2 PM</p>
                    </div>
                    <div class="check-out-1">
                        <h6 class="m-0">Check-Out</h6>
                        <h3 class="font-weight-bold m-0">3 Feb 2022</h3>
                        <p class="small text-muted">Saturday, 12 PM</p>
                    </div>
                </div>
                <div class="rmt-2">
                    <h6>1Room &nbsp| &nbsp 2Adult &nbsp |&nbsp 2Nights</h6>
                </div>
                <div class="rmt-3">
                    <span class="small">Breakfast included</span>
                    <span class="small">Non-Refundable</span>
                </div>
            </div>
        </div>
    </div>

    <div class="ctm-frm1">
        <div class="frm-com-1">
            <h5>GUEST DETAILS </h5>
            <h6><span class="text-danger">Login</span> to prefill traveler details and get access to secret deals</h6>
            <div class="ftm-5">
                <div>
                    <label for="title" class="small">Title</label>
                    <br>
                    <select name="" id="title-5">
                        <option value="mr">Mr</option>
                        <option value="mrs">Mrs</option>
                        <option value="ms">Ms</option>
                    </select>
                </div>
                <div>
                    <label for="name" class="small">First Name</label>
                    <br>
                    <input id="firstname" type="text" placeholder="Enter your first name">
                </div>
                <div>
                    <label for="surname" class="small">Last Name</label>
                    <br>
                    <input id="lastname" type="text" placeholder="Enter your last name">
                </div>
                <div id="ftm-6">
                    <div>
                        <label for="contact-details-5" class="small">Email Address</label>
                        <br>
                        <input id="email" type="text" placeholder="Enter your email address">
                    </div>
                    <div>
                        <label for="mobile" class="small">Mobile</label>
                        <br>
                        <select name="" id="cuntry-code-1">
                            <option value="+93">Afghanistan (+93)</option>
                            <option value="+213">Algeria (+213)</option>
                            <option value="+1684">American Samoa (+1684)</option>
                            <option value="+376">Andorra (+376)</option>
                            <option value="+244">Angola (+244)</option>
                            <option value="+1264">Anguilla (+1264)</option>
                            <option value="+672">Antarctica (+672)</option>
                            <option value="+1268">Antigua and Barbuda (+1268)</option>
                            <option value="+54">Argentina (+54)</option>
                            <option value="+374">Armenia (+374)</option>
                            <option value="+297">Aruba (+297)</option>
                            <option value="+61">Australia (+61)</option>
                            <option value="+43">Austria (+43)</option>
                            <option value="+994">Azerbaijan (+994)</option>
                            <option value="+1242">Bahamas (+1242)</option>
                            <option value="+973">Bahrain (+973)</option>
                            <option value="+880">Bangladesh (+880)</option>
                            <option value="+1246">Barbados (+1246)</option>
                            <option value="+32">Belgium (+32)</option>
                            <option value="+501">Belize (+501)</option>
                            <option value="+229">Benin (+229)</option>
                            <option value="+1441">Bermuda (+1441)</option>
                            <option value="+975">Bhutan (+975)</option>
                            <option value="+591">Bolivia (+591)</option>
                            <option value="+267">Botswana (+267)</option>
                            <option value="+55">Brazil (+55)</option>
                            <option value="+246">British Indian Ocean Territory (+246)</option>
                            <option value="+1284">British Virgin Islands (+1284)</option>
                            <option value="+673">Brunei (+673)</option>
                            <option value="+226">Burkina Faso (+226)</option>
                            <option value="+257">Burundi (+257)</option>
                            <option value="+855">Cambodia (+855)</option>
                            <option value="+237">Cameroon (+237)</option>
                            <option value="+1">Canada (+1)</option>
                            <option value="+238">Cape Verde (+238)</option>
                            <option value="+1345">Cayman Islands (+1345)</option>
                            <option value="+236">Central African Republic (+236)</option>
                            <option value="+235">Chad (+235)</option>
                            <option value="+56">Chile (+56)</option>
                            <option value="+86">China (+86)</option>
                            <option value="+61">Christmas Island (+61)</option>
                            <option value="+61">Cocos Islands (+61)</option>
                            <option value="+57">Colombia (+57)</option>
                            <option value="+269">Comoros (+269)</option>
                            <option value="+682">Cook Islands (+682)</option>
                            <option value="+506">Costa Rica (+506)</option>
                            <option value="+599">Curacao (+599)</option>
                            <option value="+357">Cyprus (+357)</option>
                            <option value="+420">Czech Republic (+420)</option>
                            <option value="+45">Denmark (+45)</option>
                            <option value="+253">Djibouti (+253)</option>
                            <option value="+1767">Dominica (+1767)</option>
                            <option value="+18">Dominican Republic (+18)</option>
                            <option value="+670">East Timor (+670)</option>
                            <option value="+593">Ecuador (+593)</option>
                            <option value="+20">Egypt (+20)</option>
                            <option value="+503">El Salvador (+503)</option>
                            <option value="+240">Equatorial Guinea (+240)</option>
                            <option value="+291">Eritrea (+291)</option>
                            <option value="+372">Estonia (+372)</option>
                            <option value="+251">Ethiopia (+251)</option>
                            <option value="+500">Falkland Islands (+500)</option>
                            <option value="+298">Faroe Islands (+298)</option>
                            <option value="+679">Fiji (+679)</option>
                            <option value="+358">Finland (+358)</option>
                            <option value="+33">France (+33)</option>
                            <option value="+689">French Polynesia (+689)</option>
                            <option value="+241">Gabon (+241)</option>
                            <option value="+220">Gambia (+220)</option>
                            <option value="+995">Georgia (+995)</option>
                            <option value="+49">Germany (+49)</option>
                            <option value="+233">Ghana (+233)</option>
                            <option value="+350">Gibraltar (+350)</option>
                            <option value="+30">Greece (+30)</option>
                            <option value="+299">Greenland (+299)</option>
                            <option value="+1473">Grenada (+1473)</option>
                            <option value="+1671">Guam (+1671)</option>
                            <option value="+502">Guatemala (+502)</option>
                            <option value="+441481">Guernsey (+441481)</option>
                            <option value="+224">Guinea (+224)</option>
                            <option value="+245">Guinea-Bissau (+245)</option>
                            <option value="+592">Guyana (+592)</option>
                            <option value="+509">Haiti (+509)</option>
                            <option value="+504">Honduras (+504)</option>
                            <option value="+852">Hong Kong (+852)</option>
                            <option value="+36">Hungary (+36)</option>
                            <option value="+354">Iceland (+354)</option>
                            <option value="+91">India (+91)</option>
                            <option value="+62">Indonesia (+62)</option>
                            <option value="+353">Ireland (+353)</option>
                            <option value="+441624">Isle of Man (+441624)</option>
                            <option value="+972">Israel (+972)</option>
                            <option value="+39">Italy (+39)</option>
                            <option value="+1876">Jamaica (+1876)</option>
                            <option value="+81">Japan (+81)</option>
                            <option value="+441534">Jersey (+441534)</option>
                            <option value="+962">Jordan (+962)</option>
                            <option value="+7">Kazakhstan (+7)</option>
                            <option value="+254">Kenya (+254)</option>
                            <option value="+686">Kiribati (+686)</option>
                            <option value="+965">Kuwait (+965)</option>
                            <option value="+996">Kyrgyzstan (+996)</option>
                            <option value="+856">Laos (+856)</option>
                            <option value="+371">Latvia (+371)</option>
                            <option value="+266">Lesotho (+266)</option>
                            <option value="+423">Liechtenstein (+423)</option>
                            <option value="+370">Lithuania (+370)</option>
                            <option value="+352">Luxembourg (+352)</option>
                            <option value="+853">Macau (+853)</option>
                            <option value="+389">Macedonia (+389)</option>
                            <option value="+261">Madagascar (+261)</option>
                            <option value="+265">Malawi (+265)</option>
                            <option value="+60">Malaysia (+60)</option>
                            <option value="+960">Maldives (+960)</option>
                            <option value="+223">Mali (+223)</option>
                            <option value="+356">Malta (+356)</option>
                            <option value="+692">Marshall Islands (+692)</option>
                            <option value="+222">Mauritania (+222)</option>
                            <option value="+230">Mauritius (+230)</option>
                            <option value="+262">Mayotte (+262)</option>
                            <option value="+52">Mexico (+52)</option>
                            <option value="+691">Micronesia (+691)</option>
                            <option value="+377">Monaco (+377)</option>
                            <option value="+976">Mongolia (+976)</option>
                            <option value="+1664">Montserrat (+1664)</option>
                            <option value="+212">Morocco (+212)</option>
                            <option value="+258">Mozambique (+258)</option>
                            <option value="+95">Myanmar (+95)</option>
                            <option value="+264">Namibia (+264)</option>
                            <option value="+674">Nauru (+674)</option>
                            <option value="+977">Nepal (+977)</option>
                            <option value="+31">Netherlands (+31)</option>
                            <option value="+599">Netherlands Antilles (+599)</option>
                            <option value="+687">New Caledonia (+687)</option>
                            <option value="+64">New Zealand (+64)</option>
                            <option value="+505">Nicaragua (+505)</option>
                            <option value="+227">Niger (+227)</option>
                            <option value="+234">Nigeria (+234)</option>
                            <option value="+683">Niue (+683)</option>
                            <option value="+1670">Northern Mariana Islands (+1670)</option>
                            <option value="+47">Norway (+47)</option>
                            <option value="+968">Oman (+968)</option>
                            <option value="+92">Pakistan (+92)</option>
                            <option value="+680">Palau (+680)</option>
                            <option value="+970">Palestine (+970)</option>
                            <option value="+507">Panama (+507)</option>
                            <option value="+675">Papua New Guinea (+675)</option>
                            <option value="+595">Paraguay (+595)</option>
                            <option value="+51">Peru (+51)</option>
                            <option value="+63">Philippines (+63)</option>
                            <option value="+64">Pitcairn (+64)</option>
                            <option value="+48">Poland (+48)</option>
                            <option value="+351">Portugal (+351)</option>
                            <option value="+1">Puerto Rico (+1)</option>
                            <option value="+974">Qatar (+974)</option>
                            <option value="+262">Reunion (+262)</option>
                            <option value="+7">Russia (+7)</option>
                            <option value="+250">Rwanda (+250)</option>
                            <option value="+590">Saint Barthelemy (+590)</option>
                            <option value="+290">Saint Helena (+290)</option>
                            <option value="+1869">Saint Kitts and Nevis (+1869)</option>
                            <option value="+1758">Saint Lucia (+1758)</option>
                            <option value="+590">Saint Martin (+590)</option>
                            <option value="+508">Saint Pierre and Miquelon (+508)</option>
                            <option value="+1784">Saint Vincent and the Grenadines (+1784)</option>
                            <option value="+685">Samoa (+685)</option>
                            <option value="+378">San Marino (+378)</option>
                            <option value="+239">Sao Tome and Principe (+239)</option>
                            <option value="+966">Saudi Arabia (+966)</option>
                            <option value="+221">Senegal (+221)</option>
                            <option value="+248">Seychelles (+248)</option>
                            <option value="+232">Sierra Leone (+232)</option>
                            <option value="+65">Singapore (+65)</option>
                            <option value="+1721">Sint Maarten (+1721)</option>
                            <option value="+421">Slovakia (+421)</option>
                            <option value="+677">Solomon Islands (+677)</option>
                            <option value="+252">Somalia (+252)</option>
                            <option value="+82">South Korea (+82)</option>
                            <option value="+211">South Sudan (+211)</option>
                            <option value="+94">Sri Lanka (+94)</option>
                            <option value="+47">Svalbard and Jan Mayen (+47)</option>
                            <option value="+268">Swaziland (+268)</option>
                            <option value="+46">Sweden (+46)</option>
                            <option value="+41">Switzerland (+41)</option>
                            <option value="+886">Taiwan (+886)</option>
                            <option value="+992">Tajikistan (+992)</option>
                            <option value="+255">Tanzania (+255)</option>
                            <option value="+66">Thailand (+66)</option>
                            <option value="+228">Togo (+228)</option>
                            <option value="+690">Tokelau (+690)</option>
                            <option value="+676">Tonga (+676)</option>
                            <option value="+1868">Trinidad and Tobago (+1868)</option>
                            <option value="+216">Tunisia (+216)</option>
                            <option value="+90">Turkey (+90)</option>
                            <option value="+993">Turkmenistan (+993)</option>
                            <option value="+1649">Turks and Caicos Islands (+1649)</option>
                            <option value="+688">Tuvalu (+688)</option>
                            <option value="+1340">U.S. Virgin Islands (+1340)</option>
                            <option value="+256">Uganda (+256)</option>
                            <option value="+380">Ukraine (+380)</option>
                            <option value="+971">United Arab Emirates (+971)</option>
                            <option value="+44">United Kingdom (+44)</option>
                            <option value="+1">United States (+1)</option>
                            <option value="+598">Uruguay (+598)</option>
                            <option value="+998">Uzbekistan (+998)</option>
                            <option value="+678">Vanuatu (+678)</option>
                            <option value="+379">Vatican (+379)</option>
                            <option value="+58">Venezuela (+58)</option>
                            <option value="+84">Vietnam (+84)</option>
                            <option value="+681">Wallis and Futuna (+681)</option>
                            <option value="+212">Western Sahara (+212)</option>
                            <option value="+967">Yemen (+967)</option>
                            <option value="+260">Zambia (+260)</option>
                        </select>
                        <input id="number" type="text" placeholder="Enter your mobile number">
                    </div>
                </div>
                <div id="gst-sec">
                    <h6 class="font-weight-bold" style="color:;">GST Details (Optional)</h6>
                    <div>
                        <label for="name" class="email-1 small">Email</label>
                        <br>
                        <input id="firstname" type="text" placeholder="Email">
                    </div>
                    <div>
                        <label for="name" class="mobile-1 small">Mobile</label>
                        <br>
                        <input id="firstname" type="text" placeholder="Mobile">
                    </div>
                    <div>
                        <label for="name" class="gst-1 m-1 small">GST No</label>
                        <br>
                        <input id="firstname" type="text" placeholder="GST No">
                    </div>
                    <div>
                        <label for="name" class="cpn-1 m-1 small">Company Name</label>
                        <br>
                        <input id="firstname" type="text" placeholder="Company name">
                    </div>
                    <div>
                        <label for="name" class="cpn-1 m-1 small">Address</label>
                        <br>
                        <textarea name="" id="address-text" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div id="check-box-5">
                    <input type="checkbox" id="myCheck">
                    <p> I understand agree to the rules of this fare, and the <span style="color:#e56d6d;">Terms &
                            Conditions</span> of XYZ</p>
                </div>
                <button class="paybtn-4">PAY NOW</button>
                <p class="small" style="padding-top:50px;">By proceeding, I agree to XYZ’s <span
                        style="color:#e56d6d;"> User Agreement, Terms of Service and Cancellation & Property Booking
                        Policies.</span></p>
            </div>
        </div>
    </div>

    <div class="ctm-price-left-1">
        <div class="pptm-1">
            <div class="room-nights-1">
                <h6>1Roomx2 Nights</h6>
                <h6 style="float:right;">₹9,500</h6>
            </div>
            <div class="room-nights-2">
                <h6 class="text-success">Total Discount <i class="fa fa-info-circle" aria-hidden="true"></i></h6>
                <h6 class="text-success" style="float:right;">₹1,882</h6>
            </div>
            <div class="room-nights-3">
                <h6>Price after Discount <i class="fa fa-info-circle" aria-hidden="true"></i></h6>
                <h6 style="float:right;">₹7,618</h6>
            </div>
            <div class="room-nights-3">
                <h6>Taxes & Service fees <i class="fa fa-info-circle" aria-hidden="true"></i></h6>
                <h6 style="float:right;">₹1,570</h6>
            </div>
            <div class="room-nights-4">
                <h6>Grand Total</h6>
                <h6 class="text-danger" style="float:right;">₹5,468</h6>
            </div>
        </div>
        <div class="dealCode-1">
            <div class="headDeal">
                <h6>Deal Codes</h6>
            </div>
            <div class="coupanCode-1">
                <input type="text" placeholder="Enter your code" name="search">
                <button class="text-success" type="submit">Apply</button>
            </div>
            <div class="offer-code-5">
                <div>
                    <input class="round-5" type="checkbox">
                    <H6 class="text-success">MTT50</H6>
                    <br>
                    <P class="small text-danger">Use this coupon and get RS.30</P>
                </div>
                <div>
                    <input class="round-5" type="checkbox">
                    <H6 class="text-success">MTT50</H6>
                    <br>
                    <P class="small text-danger">Use this coupon and get RS.30</P>
                </div>
                <div>
                    <input class="round-5" type="checkbox">
                    <H6 class="text-success">MTT50</H6>
                    <br>
                    <P class="small text-danger">Use this coupon and get RS.30</P>
                </div>
                <div>
                    <input class="round-5" type="checkbox">
                    <H6 class="text-success">MTT50</H6>
                    <br>
                    <P class="small text-danger">Use this coupon and get RS.30</P>
                </div>
                <div>
                    <input class="round-5" type="checkbox">
                    <H6 class="text-success">MTT50</H6>
                    <br>
                    <P class="small text-danger">Use this coupon and get RS.30</P>
                </div>
            </div>
        </div>
        <div class="suplogin-1">
            <h6>WHY<span>SIGNUP</span>OR<span>LOGIN</span></h6>
            <p class="small"><i class="fa fa-check text-success" aria-hidden="true"></i>
                Get access to Secret Deals</p>
            <p class="small"><i class="fa fa-check text-success" aria-hidden="true"></i>
                Book Faster</p>
            <p class="small"><i class="fa fa-check text-success" aria-hidden="true"></i>
                Manage your bookings from one place</p>
        </div>
    </div>
</div>

<!--------- Desktop end view ------>
<x-footer />
@endsection
