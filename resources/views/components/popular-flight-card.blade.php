
<div class="container FlightRoutesContainer">
    <div class="row">
        <div class="col-sm-6 col_flight-page" >
           <div class="card p-4">
             <h3 class="m-0 text-center font-weight-bold flight_cartd-h3">Popular Domestic Flights</h3>
               <table class="table table-bordered mt-4 text-center">
                  <tbody>
                         <tr>
                            <td class="con_tain">Albany International Airport To Albuquerque International Airport (ALB-ABQ)</td>
                            <td>
                                <a id="domestic-air-1" href="#" class="btn btn_1280 btn-primary btn-sm">Search Now</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="con_tain">Alexandria International Airport To Allegheny County Airport (AEX-AGC)</td>
                            <td>
                                <a id="domestic-air-2" href="#" class="btn btn_1280 btn-primary btn-sm">Search Now</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="con_tain">Seattle Tacoma International Airport To Bradley International Airport (SEA-BDL)</td>
                            <td>
                                <a id="domestic-air-3" href="#" class="btn btn_1280 btn-primary btn-sm">Search Now</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="con_tain">Sky Harbor International Airport To Alexandria International Airport (PHX-AEX)</td>
                
                            <td>
                                <a id="domestic-air-4" href="#" class="btn btn_1280 btn-primary btn-sm">Search Now</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="con_tain">Sloulin Field International Airport To South Padre Is International Airport (ISN-BRO)</td>
                            <td>
                                <a id="domestic-air-5" href="#" class="btn btn_1280 btn-primary btn-sm">Search Now</a>
                            </td>
                        </tr>
                         
                        
                    </tbody>
                </table>
             </div>
        </div>
        <div class="col-sm-6  col_flight-page flight-page-right">
           
            <div class="card p-4">
                <h3 class="m-0 text-center font-weight-bold flight_cartd-h3">Popular International Flights</h3>
                 <table class="table table-bordered mt-4 text-center">
                
                    <tbody>
                         <tr>
                            <td class="con_tain">Albuquerque International Airport To Indira Gandhi International Airport (ABQ-DEL)</td>
                            <td>
                                <a id="internatinal-air-1" href="#" class="btn btn_1280 btn-primary btn-sm">Search Now</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="con_tain">Seattle Tacoma International Airport To Dubai Airport (SEA-DXB)</td>
                            <td>
                                <a id="internatinal-air-2" href="#" class="btn btn_1280 btn-primary btn-sm">Search Now</a>
                            </td>
                        </tr>
                         <tr>
                            <td class="con_tain">Arcata Airport To London Heathrow Airport (ACV-LHR)</td>
                           
                            <td>
                                <a id="internatinal-air-3" href="#" class="btn btn_1280 btn-primary btn-sm">Search Now</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="con_tain">Austin bergstrom International Airport To Suvarnabhumi International Airport (AUS-BKK)</td>
                            <td>
                                <a id="internatinal-air-4" href="#" class="btn btn_1280 btn-primary btn-sm">Search Now</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="con_tain">Baltimore Washington International Thurgood Marshall Airport To Changi Airport (BWI-SIN)</td>
                            <td>
                                <a id="internatinal-air-5" href="#" class="btn btn_1280 btn-primary btn-sm">Search Now</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    //  == = == start popular flight Scripts == = = //
    const months = ["+Jan+", "+Feb+", "+Mar+", "+Apr+", "+May+", "+Jun+", "+Jul+", "+Aug+", "+Sep+", "+Oct+", "+Nov+", "+Dec+"];
    const d = new Date()
    let year = d.getFullYear();
    let date = d.getDate();
    const currentMonth = new Date();
    let startdate = date + months[currentMonth.getMonth()] + year ;
    
    let newMonth = new Date();
    newMonth.setDate(d.getDate() + 3);
    date = newMonth.getDate();
    let enddate = date + months[newMonth.getMonth()] + year ;
    
    // domestic
    document.getElementById("domestic-air-1").href="flight/search?trip-type=oneway&departure=ALB&arrival=AGC&departDate="+enddate+"+&returnDate="+enddate+"&noOfAdults=1&noOfChilds=0&noOfInfants=0&cabinClass=Y&fare=Regular+Fares";
    document.getElementById("domestic-air-2").href="flight/search?trip-type=oneway&departure=AEX&arrival=AGC&departDate="+enddate+"+&returnDate="+enddate+"&noOfAdults=1&noOfChilds=0&noOfInfants=0&cabinClass=Y&fare=Regular+Fares";
    document.getElementById("domestic-air-3").href="flight/search?trip-type=oneway&departure=SEA&arrival=BDL&departDate="+enddate+"+&returnDate="+enddate+"&noOfAdults=1&noOfChilds=0&noOfInfants=0&cabinClass=Y&fare=Regular+Fares";
    document.getElementById("domestic-air-4").href="flight/search?trip-type=oneway&departure=PHX&arrival=AEX&departDate="+enddate+"+&returnDate="+enddate+"&noOfAdults=1&noOfChilds=0&noOfInfants=0&cabinClass=Y&fare=Regular+Fares";
    document.getElementById("domestic-air-5").href="flight/search?trip-type=oneway&departure=ISN&arrival=BRO&departDate="+enddate+"+&returnDate="+enddate+"&noOfAdults=1&noOfChilds=0&noOfInfants=0&cabinClass=Y&fare=Regular+Fares";
    
    // domestic
    document.getElementById("internatinal-air-1").href="flight/search?trip-type=oneway&departure=ABQ&arrival=DEL&departDate="+enddate+"+&returnDate="+enddate+"&noOfAdults=1&noOfChilds=0&noOfInfants=0&cabinClass=Y&fare=Regular+Fares";
    document.getElementById("internatinal-air-2").href="flight/search?trip-type=oneway&departure=SEA&arrival=DXB&departDate="+enddate+"+&returnDate="+enddate+"&noOfAdults=1&noOfChilds=0&noOfInfants=0&cabinClass=Y&fare=Regular+Fares";
    document.getElementById("internatinal-air-3").href="flight/search?trip-type=oneway&departure=ACV&arrival=LHR&departDate="+enddate+"+&returnDate="+enddate+"&noOfAdults=1&noOfChilds=0&noOfInfants=0&cabinClass=Y&fare=Regular+Fares";
    document.getElementById("internatinal-air-4").href="flight/search?trip-type=oneway&departure=AUS&arrival=BKK&departDate="+enddate+"+&returnDate="+enddate+"&noOfAdults=1&noOfChilds=0&noOfInfants=0&cabinClass=Y&fare=Regular+Fares";
    document.getElementById("internatinal-air-5").href="flight/search?trip-type=oneway&departure=BWI&arrival=SIN&departDate="+enddate+"+&returnDate="+enddate+"&noOfAdults=1&noOfChilds=0&noOfInfants=0&cabinClass=Y&fare=Regular+Fares";
</script>


