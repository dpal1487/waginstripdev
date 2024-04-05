// console.log('hello flight filter log');

// setTimeout(() => {
//     var scrollfix  = document.getElementById('scrollfix');
//     var cardlist = document.getElementsByClassName("cardlist");
    
//     var cardlistarray = [];
    
//     for (var j = 0; j < cardlist.length; j++) {
//         let TotalFare = document.getElementsByClassName("TotalFare");
//         let obj = {
//             total : TotalFare[j].innerHTML,
//         };
//         cardlistarray.push(obj);
//     }
//     cardlist =  cardlistarray.sort( (a,b) => a.total - b.total );
//     console.table(cardlistarray);
//     // sort(cardlistarray);
// },5000);
function sort(cardlistarray){
    scrollfix.innerHTML= '';
    
    for (var i = 0; i < cardlistarray.length; i++) {
        var htmltxt = `
                                    <div class="pb-10 airline_hide 1-Stop AI MAA ">
                                        <div class="boxunder">
                                            <div class="row">
                                                <div class="col-6 col-md-6 col-sm-6">
                                                    <div class="row ranjepp">
    
                                                        <div class="col-sm-2">
                                                            <img src="https://flights.wagnistrip.com/assets/images/flight/AI.png" alt="" width="40px" height="40px">
                                                        </div>
                                                        <div class="col-8 col-md-8 col-sm-6">
                                                            <div class="owstitle">
                                                                AI
                                                            </div>
                                                            <div class="owstitle">
                                                                AI-540
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-6 col-sm-6">
                                                    <div class="float-right ranjepp">
                                                        <form action="https://flights.wagnistrip.com/Galileo/Pricing" method="POST">
                                                            <input type="hidden" name="_token" value="mYLPQN6POkaaoxI5C0Ld9H6hC4SIfmaPEFMckFIF">
                                                            <input type="hidden" name="trip" value="Oneway">
                                                            <input type="hidden" name="travellers" value="{&quot;noOfAdults&quot;:&quot;1&quot;,&quot;noOfChilds&quot;:&quot;0&quot;,&quot;noOfInfants&quot;:&quot;0&quot;}">
                                                            <input type="hidden" name="SessionID" value="E0D9A90E-B1C8-446A-8208-C96A7E692900">
                                                            <input type="hidden" name="Key" value="3c6aded3-7427-4804-a622-7b8c6aa8ca08">
                                                            <input type="hidden" name="Pricingkey" value="540EconomyAI1-Stop202301152023011622100115NRMFalseFalse571EconomyAI1-Stop202301162023011607551000NRMFalseFalse">
                                                            <input type="hidden" name="Provider" value="1G">
                                                            <input type="hidden" name="ResultIndex" value="12">
                                                            <span class="fontsize-22"><i class="fa fa-rupee"></i>
                                                                `+cardlistarray[i].total+`
                                                            </span>
                                                            <a class="btn btn-primary btn-sm submit-btn">Book Now</a>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="boxunder">
                                                <div class="row">
                                                    <div class="col-5 col-md-5 col-sm-5 text-center">
                                                        <div class="searchtitle">
                                                            New Delhi (DEL)
                                                             22:10
                                                        </div>
                                                        <div class="searchtitle colorgrey">
                                                            Sun, 15 Jan 2023
                                                        </div>
                                                    </div>
                                                    <div class="col-2 col-md-2 col-sm-2 text-center">
                                                        <div class="searchtitle text-center">
                                                            11:50
                                                        </div>
                                                        <div class="borderbotum"></div>
                                                        <div class="searchtitle colorgrey  text-center">
                                                            1-Stop
                                                        </div>
                                                    </div>
                                                    <div class="col-5 col-md-5 col-sm-5">
                                                        <div class="text-center">
                                                            <div class="searchtitle">
                                                                Mumbai (BOM)
                                                                 10:00
                                                            </div>
                                                            <div class="searchtitle colorgrey">
                                                               Mon, 16 Jan 2023
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="container pt-10 pb-10">
                                                <span class="onewflydetbtn">Refundable</span>
                                                <span data-toggle="collapse" data-target="#flight-details`+i+`" class="onewflydetbtn float-right" aria-expanded="true">Flight Details</span>
                                            </div>
                                            <div id="flight-details`+i+`" class="collapse show" style="">
                                                <div class="container">
                                                    <ul class="nav nav-tabs">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" data-toggle="tab" href="#Information`+i+`"> Flight
                                                                Information </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#Details`+i+`"> Fare
                                                                Details </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#Baggage`+i+`">Baggage Information </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#Cancellation`+i+`">Cancellation Rules </a>
                                                        </li>
                                                    </ul>
    
                                                    <!-- Tab panes -->
                                                    <div class="tab-content">
                                                        <div class="tab-pane container active" id="Information`+i+`">
                                                            <div class="row">
                                                                <div class="col-4 col-md-4 col-sm-4">
                                                                    <div class="pt-10">
                                                                        <span class="searchtitle">DEL-&gt;MAA
                                                                        </span>
                                                                        <span class="onwfnt-11">Sun, 15 Jan 2023</span>
                                                                        <div>
                                                                            <img src="https://flights.wagnistrip.com/assets/images/flight/AI.png" alt="fligt" width="40px" height="40px">
                                                                            <span class="onwfnt-11">AI-540</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-4 col-md-4 col-sm-4">
                                                                    <div class="pt-10 text-center">
                                                                        <div class="searchtitle">
                                                                            22:10
                                                                        </div>
                                                                        <div class="owstitle">
                                                                            New Delhi(DEL)
                                                                        </div>
                                                                        <div class="owstitle">
                                                                            Sun, 15 Jan 2023
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
    
                                                                <div class="col-4 col-md-4 col-sm-4">
                                                                    <div class="pt-10 float-right">
                                                                        <div class="searchtitle">
                                                                            01:15
                                                                        </div>
                                                                        <div class="owstitle">
                                                                            Chennai/Madras(MAA)
                                                                        </div>
                                                                        <div class="owstitle">
                                                                           Mon, 16 Jan 2023
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-md-12 col-sm-12">
                                                                    <div class="pt-10 text-center">
                                                                        <div class="owstitle">
                                                                            11:50
                                                                        </div>
                                                                        <div class="flh"></div>
                                                                        <div class="owstitle">By: Air</div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-4 col-md-4 col-sm-4">
                                                                    <div class="pt-10">
                                                                        <span class="searchtitle">MAA-&gt;BOM
                                                                        </span>
                                                                        <span class="onwfnt-11">Mon, 16 Jan 2023</span>
                                                                        <div>
                                                                            <img src="https://flights.wagnistrip.com/assets/images/flight/AI.png" alt="fligt" width="40px" height="40px">
                                                                            <span class="onwfnt-11">AI-571</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-4 col-md-4 col-sm-4">
                                                                    <div class="pt-10 text-center">
                                                                        <div class="searchtitle">
                                                                            07:55
                                                                        </div>
                                                                        <div class="owstitle">
                                                                            Chennai/Madras(MAA)
                                                                        </div>
                                                                        <div class="owstitle">
                                                                            Mon, 16 Jan 2023
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
    
                                                                <div class="col-4 col-md-4 col-sm-4">
                                                                    <div class="pt-10 float-right">
                                                                        <div class="searchtitle">
                                                                           10:00
                                                                        </div>
                                                                        <div class="owstitle">
                                                                            Mumbai(BOM)
                                                                        </div>
                                                                        <div class="owstitle">
                                                                           Mon, 16 Jan 2023
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane container fade" id="Details`+i+`">
    
                                                            <div class="onwfntrespons-11">
                                                                <span class="text-left"> Fare Rules :</span>
                                                                <span class="text-right">
                                                                    Refundable
                                                                </span>
    
                                                            </div>
                                                            <table class="table table-bordered">
                                                                <tbody class="onwfntrespons-11"> 
                                                                    <tr>
                                                                        <td class="onwfnt-11">1 Adult</td>
                                                                        <td class="text-right"> <i class="fa fa-inr"></i>
                                                                            10980
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="onwfnt-11">Total (Base Fare)</td>
                                                                        <td class="text-right"> <i class="fa fa-inr"></i>
                                                                            10980
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="onwfnt-11">Total Tax +</td>
                                                                        <td class="text-right"> <i class="fa fa-inr"></i>
                                                                            1296
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="onwfnt-11">Total (Fee &amp; Surcharge)</td>
                                                                        <td class="text-right"> <i class="fa fa-inr"></i>
                                                                            12276
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
    
                                                        </div>
                                                        <div class="tab-pane container fade" id="Baggage`+i+`">
                                                            <table class="table table-bordered">
                                                                <thead class="onwfntrespons-11">
                                                                    <tr>
                                                                        <th>Airline</th>
                                                                        <th>Check-in Baggage</th>
                                                                        <th>Cabin Baggage</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
    
    
                                                                    <tr>
                                                                        <td> <img src="https://flights.wagnistrip.com/assets/images/flight/AI.png" alt="" width="40px" height="40px">
                                                                            <span class="onwfnt-11">AI-540</span>
                                                                        </td>
                                                                        <td class="onwfnt-11">
                                                                            25KG
                                                                        </td>
    
                                                                        <td class="onwfnt-11">
                                                                            7KG
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td> <img src="https://flights.wagnistrip.com/assets/images/flight/AI.png" alt="" width="40px" height="40px">
                                                                            <span class="onwfnt-11">AI-540</span>
                                                                        </td>
                                                                        <td class="onwfnt-11">
                                                                            25KG
                                                                        </td>
    
                                                                        <td class="onwfnt-11">
                                                                            7KG
                                                                        </td>
                                                                    </tr>
    
                                                                </tbody>
                                                            </table>
                                                            <span class="onwfnt-11 font-weight-bold">Terms &amp; Conditions</span>
                                                            <ul class="onwfnt-11">
                                                                <li>Total Rescheduling Charges Airlines Rescheduling fees Fare
                                                                    Difference if applicable + WT Fees.</li>
                                                                <li>The airline cancel reschedule fees is indicative and can be
                                                                    changed without any prior notice by the airlines..</li>
                                                                <li>WT does not guarantee the accuracy of cancel
                                                                    reschedule
                                                                    fees..</li>
                                                                <li>Partial cancellation is not allowed on the flight tickets
                                                                    which
                                                                    are book under special round trip discounted fares..</li>
                                                                <li>Airlines doesnt allow any additional baggage allowance for
                                                                    any
                                                                    infant added in the booking</li>
                                                                <li>In certain situations of restricted cases, no amendments and
                                                                    cancellation is allowed</li>
                                                                <li>Airlines cancel reschedule should be reconfirmed before
                                                                    requesting for a cancellation or amendment</li>
                                                            </ul>
                                                        </div>
                                                        <div class="tab-pane container fade" id="Cancellation`+i+`">
                                                            <table class="table table-bordered">
                                                                <tbody class="onwfntrespons-11">
                                                                    <tr>
                                                                        <td> <b>Time Frame to Reissue</b>
                                                                            <div class="onwfnt-11">(Before scheduled
                                                                                departure time)
                                                                            </div>
                                                                        </td>
                                                                        <td> <b>Airline Fees</b>
                                                                            <div class="onwfnt-11"> (per passenger) </div>
                                                                        </td>
                                                                        <td> <b>WT Fees</b>
                                                                            <div class="onwfnt-11"> (per passenger) </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="onwfnt-11">Cancel Before 4 hours of
                                                                            departure time.</td>
                                                                        <td> As Per Airline Policy</td>
                                                                        <td> <i class="fa fa-inr"></i> 500</td>
                                                                    </tr>
    
                                                                    <tr>
                                                                        <td> <b>Time Frame to cancel</b>
                                                                            <div class="onwfnt-11">(Before scheduled
                                                                                departure time)
                                                                            </div>
                                                                        </td>
                                                                        <td> <b>Airline Fees</b>
                                                                            <div class="onwfnt-11"> (per passenger) </div>
                                                                        </td>
                                                                        <td> <b>WT Fees</b>
                                                                            <div class="onwfnt-11"> (per passenger) </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="onwfnt-11">Cancel Before 4 hours of
                                                                            departure time.</td>
                                                                        <td> As Per Airline Policy</td>
                                                                        <td> <i class="fa fa-inr"></i> 500</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <span class="onwfnt-11 font-weight-bold">Terms &amp; Conditions</span>
                                                            <ul class="onwfnt-11">
                                                                <li>Total Rescheduling Charges Airlines Rescheduling fees Fare
                                                                    Difference if applicable + WT Fees.</li>
                                                                <li>The airline cancel reschedule fees is indicative and can be
                                                                    changed without any prior notice by the airlines..</li>
                                                                <li>WT does not guarantee the accuracy of cancel
                                                                    reschedule
                                                                    fees..</li>
                                                                <li>Partial cancellation is not allowed on the flight tickets
                                                                    which
                                                                    are book under special round trip discounted fares..</li>
                                                                <li>Airlines doesnt allow any additional baggage allowance for
                                                                    any
                                                                    infant added in the booking</li>
                                                                <li>In certain situations of restricted cases, no amendments and
                                                                    cancellation is allowed</li>
                                                                <li>Airlines cancel reschedule should be reconfirmed before
                                                                    requesting for a cancellation or amendment</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
        `;
        scrollfix.innerHTML += htmltxt;
    
        
    }
}