@extends('Agent.layout.header')


@section('body')

    <div class="container agentMainDiv">
         @if($errors->any())
                @if($errors->first() !="Payment Success" )
                    <div class="alert alert-danger" role="alert">
                         <button type="button" class="close text-dark" data-dismiss="alert">&times;</button>
                         <strong></strong> {{$errors->first()}} .
                    </div>
                @else
                    <div class="alert alert-success" role="alert">
                         <button type="button" class="close text-dark" data-dismiss="alert">&times;</button>
                         <strong></strong> {{$errors->first()}} .
                    </div>
                @endif
            @endif
        <div class="flexDiv commonFlexClass itemsCenter">
            <div class="flexBox">
                <h1 class="name font-22">Hii {{$Agent->name}}!</h1>
                <h2 class="descText">Welcome To agent dashboard</h2>
            </div>
            <div class="flexBox priceBox">
                <p class="descText">Amount in your Account</p>
                <b class="price font-22">{{$Agent->state}} /-</b>
            </div>
            <!--<div class="flexBox avtarDiv">-->
            <!--    <img src="{{'https://www.wagnistrip.com/assets/images/airr.jpg'}}">-->
            <!--</div>-->
        </div>
    </div>
    
    {{--{{dd($Agent)}}--}}
    
    <section class="tablecotainer container" style="display:non">
        <div class="responsiveTable p-3" style="border-radius: 25px;">
            <h2 class="text-center">Your Ticket Booking Details</h2>
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>Id</th>
                        <th>Email</th>
                        <th>PNR</th>
                        <th>Mobile</th>
                        <th>Price</th>
                        <th>Booking Id</th>
                        <th>Travel Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                     @php
                    if(isset($_GET['page'])){
                        if($_GET['page'] == 1){
                            $i = 1;
                        }else{
                            $c = $_GET['page']-1;
                            $i = $c*10+1;
                        }
                    }else{
                        $i = 1;
                    }
                    @endphp
                    @if(!$booking->isEmpty())
                    @foreach($booking as $bookings)
                    @php
                    $fare = json_decode($bookings->A, true);
                    if(is_array($fare)){
                      $price = $fare[0]['PaxTotalFare'];
                    }else{
                      $price = $fare;
                    }
                    @endphp
                    @php
                    $itinerary = json_decode($bookings->itinerary, true);
                    
                    $dates = $itinerary[0];
                    $datess = $dates['DepartDateTime'];
                    $dateTime = new DateTime($datess);
                    $formattedDate = $dateTime->format('Y-m-d H:i:s');
                        
                    @endphp
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$bookings->email}}</td>
                        <td>{{$bookings->airline_pnr}}</td>
                        <td>{{$bookings->mobile}}</td>
                        <td><b>₹</b> {{$price}}</td>
                        <td>{{$bookings->booking_id}}</td>
                        <td>{{$formattedDate}}</td>
                        <td>
                            <a href="javascript:void(0)" class="btn mb-1" style="background:#0164b7; color:#fff; font-weight:600; display:block">Print Ticket Without Price</a>
                            <a href="javascript:void(0)" class="btn" style="background:#0164b7; color:#fff; font-weight:600;  display:block">Print Ticket With Price</a>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <th colspan="8">No Booking Details</th>
                    </tr>
                    @endif
                </tbody>
            </table>
     <div class="d-flex justify-content-center mt-5">
             {!! $booking->links("pagination::bootstrap-4") !!}
           </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        if( {{$Agent->status}} == 1){
            console.log( {{$Agent->status}});
        }
        

    </script>
@endsection

 