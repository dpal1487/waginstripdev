<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>air-tickets</title>
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

<body style="background-color:#fff !important;">

    <!-- Desktop View Pages -->

    <div class="ticketDetails124">
        <h1>E-Ticket</h1>
        <h6>PNR: <strong>GGTL2H/SG</strong></h6>
        <h6>XYZ Booking Ref.No: <strong>MTT568S/SG</strong></h6>
        <h6>Booking Date-Fri, 21 Jun 2021</h6>
        <h6 class="pt-3 font-weight-bold">Status: <span>Confirmed</span></h6>
        <img src="assets/images/logo.png" alt="">
        <hr>
        <div class="barcodeticketnumber">
            <img src="assets/images/flights/barcode.gif" alt="">
        </div>
        <h2>Itinerary and Reservation Details</h2>
        <div class="ticketNumber1">
            <div class="mtimg1">
                <img src="assets/images/flight/SG.png" alt="">
            </div>
            <div class="mtimg2">
                <h6>Departing Flight: 6E2032(A320)</h6>
            </div>
            <div class="mtimg3">
                <h6>&#9679; 07 Mar 2022</h6>
            </div>

            <div class="mtimg4">
                <h6>&#9679; Check-in Closes: 16:25 hrs</h6>
            </div>
            <div class="flightDetailswithtime">
                <table id="customers">
                    <tr>
                        <th>DATE</th>
                        <th>FROM</th>
                        <th>TO</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="font-weight-bold">Delhi</td>
                        <td class="font-weight-bold">Amritsar</td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">07 Mar 2022</td>
                        <td class="font-weight-bold">17:25 hrs</td>
                        <td class="font-weight-bold">18:25 hrs</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>DEL - Indira Gandhi International Airport</td>
                        <td>ATQ - Sri Guru Ram Dass Jee International Airport</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>(Terminal 1)</td>
                        <td></td>
                    </tr>
                </table>
            </div>
        </div>
        <p class="m-0 pt-2">* Booking Date reflects in UTC (Coordinated Universal Time), all other timings mentioned are
            as per local TIME</p>
        <h2 class="m-0 pt-5">Passenger Information</h2>
        <div class="passengerDetails12">
            <table id="pasgnerall">
                <tr>
                    <th>Passenger Name</th>
                    <th>Type</th>
                    <th>Sector</th>
                    <th>Seat</th>
                    <th>Add-ons</th>
                    <th>Class</th>
                    <th>Baggages</th>
                </tr>
                <tr>
                    <td class="font-weight-bold">MR. PINTAR SHARMA</td>
                    <td>Adult</td>
                    <td class="font-weight-bold">DEL-ATQ</td>
                    <td class="font-weight-bold">1F (Window)</td>
                    <td class="font-weight-bold">Non-Veg</td>
                    <td>Economy</td>
                    <td class="font-weight-bold">15KG / 7KG</td>
                </tr>
            </table>
        </div>
        <h6 class="m-0 pb-3"><strong>Baggage Info: Permitted hand baggage: </strong> 1 piece of up to 7 kg.
            <strong>Permitted check-in baggage: </strong> 1 piece
            of up to 15 kg, additional 10 kg for student bookings.Power banks/portable mobile chargers are allowed ONLY
            in hand baggage.
        </h6>

        <h2 class="m-0 pt-3">Payment Information</h2>
        <div class="paymentinfoddd5">
            <div class="lftpaytm1">
                <table id="airfareprice1">
                    <h4 class="font-weight-bold">Fare Details</h4>
                    <tr>
                        <th>Fare + Airline fuel charge + CUTE Fee</th>
                        <th class="text-right">6,500.00 INR</th>
                    </tr>
                    <tr>
                        <th>Seat Charges</th>
                        <th class="text-right">500.00 INR</th>
                    </tr>
                    <tr>
                        <th>Food Charges (Veg/Non-Veg)</th>
                        <th class="text-right">500.00 INR</th>
                    </tr>
                    <tr>
                        <th>Passenger Service Fee</th>
                        <th class="text-right">500.00 INR</th>
                    </tr>
                    <tr>
                        <th>User Development Fee</th>
                        <th class="text-right">300.00 INR</th>
                    </tr>
                    <tr>
                        <th>Aviation Security Fee</th>
                        <th class="text-right">750.00 INR</th>
                    </tr>
                    <tr>
                        <th>RCS Provision Fees</th>
                        <th class="text-right">290.00 INR</th>
                    </tr>
                    <tr>
                        <th>SGST</th>
                        <th class="text-right">120.00 INR</th>
                    </tr>
                    <tr>
                        <th>CGST</th>
                        <th class="text-right">120.00 INR</th>
                    </tr>
                    <tr style="border-bottom:1px solid #000;">
                        <th>Discounts</th>
                        <th class="text-right">520.00 INR</th>
                    </tr>
                    <tr>
                        <th class="font-weight-bold">Total</th>
                        <th class="text-right font-weight-bold">15,000.00 INR</th>
                    </tr>
                </table>
            </div>

            <div class="rightpaytm1">
                <h4 class="font-weight-bold">Contact Details</h4>
                <h6>Address</h6>
                <h5>5B/13, Near Subhash Nagar Metro Station, Tilak Nagar, Delhi-110092</h5>
                <h6>Company Name</h6>
                <h5>XYZ Private Limited</h5>
                <h6>Passenger Mobile Number</h6>
                <h5>+91 7669988012</h5>
                <h6>Email ID</h6>
                <h5>customersupport@xyz.com</h5>
                <h4 class="m-0 pt-1 pb-1 font-weight-bold">GST Information</h4>
                <h6>GST Company Name</h6>
                <h5>XYZ Private Limited</h5>
                <h6>GST Number</h6>
                <h5>07AAOCM4506G1ZF</h5>
            </div>
        </div>

        <h5 class="m-0 pt-3 pb-1 font-weight-bold" style="text-decoration: underline;">Notes:</h5>
        <ul>
            <li>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla nostrum quidem ducimus autem, velit obcaecati illum impedit maiores, repudiandae alias in, architecto quod? In ipsum amet, corporis omnis minus quaerat.
            </li>
            <li>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias unde, ex, voluptates esse, quo voluptate incidunt saepe cum temporibus tenetur provident debitis distinctio maxime nulla! Qui culpa quasi temporibus! Cupiditate!
            </li>
            <li>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis error natus nostrum quos perspiciatis nihil, ea rem cum illo quidem consequatur suscipit, ab maxime magnam enim odio nulla. Expedita, voluptates!
            </li>
            <li>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum enim repellat reiciendis voluptatem a, at quo recusandae quam reprehenderit, quibusdam tempore sed soluta voluptatum exercitationem ipsa est velit sequi officiis!
            </li>
        </ul>

        <h5 class="m-0 pt-3 pb-1 font-weight-bold" style="text-decoration: underline;">Terms and Conditions</h5>
        <p class="font-weight-bold pl-2">DGCA mandates all passengers to w ear masks and to maintain social distancing
            norms at all times during their
            trav el. All
            passengers must ensure strict compliance of Cov id-19 protocols. DGCA Order for Cov id-19 protocols can be
            checked at <a href="http://www.xyz.com" target="_blank"
                rel="noopener noreferrer">www.xyz.com</a>
        </p>

        <h6 class="font-weight-bold m-0 pb-2">Baggage:</h6>
        <ol>
            <li><strong>Hand Baggage Allowance (Domestic and International):</strong> 
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam neque exercitationem commodi esse sit deserunt libero pariatur totam provident quod eligendi, adipisci tenetur nemo molestiae minima nostrum, labore nisi facere.
            </li>
            <li>
                <strong>Checked-in Baggage Allowance:</strong>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem laudantium qui harum minima eligendi velit pariatur doloremque minus quod quae cumque omnis illo neque voluptatibus totam nulla, ducimus nostrum corrupti?
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur, similique? Ipsum nemo ratione recusandae nulla excepturi, eum quaerat accusamus magnam sapiente earum beatae corrupti ullam placeat incidunt tempore at est!
            </li>
            <p class="font-weight-bold m-0 pt-1">Connecting Flight Baggage Policy:</p>
            <li>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolor aperiam vitae voluptas sequi nam aut magni exercitationem laudantium similique minima, blanditiis corporis quod veniam! Nemo nulla ipsum distinctio inventore.
            </li>
            <li>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem repellendus quos veritatis blanditiis, ullam, eveniet sed nulla maxime rem, unde accusamus dolor corporis adipisci quisquam quam dolorum eos nihil porro!
            </li>
            <p class="font-weight-bold m-0 pt-1">Check-in:</p>
            <li>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio molestias eligendi atque repellendus optio consequatur magnam. Fugiat, quae eos culpa minus, voluptatum ad quam sequi quasi minima nobis laborum magni.
            </li>
            <li>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem libero sit quos exercitationem minima iste accusamus iusto sint enim dolorem dolores tempora, corrupti, blanditiis beatae consequuntur cumque quisquam omnis velit.
            </li>
            <li>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere, repellendus. Ex hic vero sint fugiat, perspiciatis neque, nobis error labore repudiandae eveniet officiis ducimus in expedita numquam odio veniam. Illum.
            </li>
            <p class="font-weight-bold m-0 pt-1"> Payment by foreign credit cards:</p>
            <li>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident, mollitia similique modi magnam quidem ut temporibus repudiandae earum dolor ducimus itaque eligendi iure vitae ratione sit ipsum accusamus ipsa inventore?
            </li>
            <li>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium adipisci explicabo itaque quas quasi architecto suscipit perferendis distinctio sit. Vitae illum ut perspiciatis facilis beatae vel assumenda praesentium ex nisi.
            </li>
            <p class="font-weight-bold m-0 pt-1">Cancellations and Rescheduling Initiated by Passengers:</p>
            <li>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga totam beatae similique magni ad vel deserunt fugiat corporis, vitae officiis aut temporibus, possimus, dignissimos reprehenderit ut commodi labore ab dicta!
            </li>
            <li>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias natus tempora enim vero laborum esse odio, consectetur aperiam blanditiis, explicabo ex illum sint ab? Minima quod aliquid nihil asperiores maxime!
            </li>
            <p class="font-weight-bold m-0 pt-1"> Passenger Handling during Flight Delays, Cancellations, and Missed Connections:</p>
            <li>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto ea, nihil molestias deleniti atque excepturi numquam aperiam velit incidunt nobis veritatis eligendi sequi ut inventore asperiores architecto reprehenderit quam vitae?
            </li>
            <p class="font-weight-bold m-0 pt-1"> Unacceptable behaviour:</p>
            <li>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque veritatis autem accusantium! Voluptatibus porro ducimus praesentium quasi rerum officia, natus blanditiis maxime vel corporis in repellat provident expedita quis esse?
            </li>
           
            <p class="font-weight-bold m-0 pt-1"> Additional Terms and Conditions</p>
            <li>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente animi adipisci quasi eius voluptate praesentium nihil provident illum? Fugit veniam ratione dolore rem nemo veritatis magnam natus in recusandae molestias?
            </li>
            <li>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquam voluptates tempora autem, beatae quisquam consectetur quis nobis ad dolor expedita eligendi fugit voluptate est harum facere veritatis facilis enim officiis!
            </li>
            <li>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium, deserunt! Itaque, quam sit. Excepturi, exercitationem est. Quae, beatae? Cumque tempore itaque autem quaerat laborum vel architecto hic harum fuga maiores!
            </li>
            <li>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit amet, dolores dolore ratione soluta iusto impedit velit delectus ut corporis architecto eos expedita atque quibusdam, fugit officiis cumque ea rem.
            </li>
            <li>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus vitae odit doloremque voluptatem sequi beatae, soluta nobis aliquam. Non laboriosam aliquid laborum delectus excepturi voluptates doloremque atque nesciunt quidem sint.
            </li>

            <li>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id molestias itaque aperiam cum necessitatibus sed. Optio ea sequi est dicta ut aperiam excepturi tempora, voluptas debitis eius ducimus modi distinctio?
            </li>
           
        </ol>

        <h6 class="font-weight-bold text-center m-0 pb-2" style="text-decoration: underline;">Restricted Articles</h6>
       <div class="restsss5">
       <img src="assets/images/ticketscheck.jpg" alt="">
       </div>
    </div>

    <!-- Desktop End View -->
    <script>

    </script>
</body>

</html>
