@extends('admin.master')
@section('title', 'offer package table')
@section('body')
    @if (Session::has('msg'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Success!</strong> {{ session('msg') }}
        </div>
    @endif
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="m-0 font-weight-bold text-primary"> Offer Package Add </h3>
                </div>
                <div class="col-sm-3">
                    <button class="btn btn-sm btn-info btn-block" data-toggle="modal" data-target="#AirlineOffer"> <i
                            class="fa fa-plus"></i> Add Airline <i class="fa fa-plane"></i> </button>
                </div>
                <div class="col-sm-3">
                    <button class="btn btn-sm btn-primary btn-block" data-toggle="modal" data-target="#HotelOffer"> <i
                            class="fa fa-plus"></i> Add Hotel <i class="fa fa-hotel"></i> </button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ url('/admin/postOfferPackages') }}" enctype="multipart/form-data" method="post"
                data-parsley-validate>
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="email"> Package Name :</label>
                            <input type="text" class="form-control" placeholder="Package Name" name="pname" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="email"> Duration :</label>
                            <input type="text" class="form-control" placeholder="Duration" name="duration" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="email"> Package Type :</label>
                            <input type="text" class="form-control" placeholder="Package Type" name="ptype" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="email"> Location :</label>
                            <input type="text" class="form-control" placeholder="Location" name="location" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="email"> Get Hotel here :</label>
                            <select class="js-example-basic-single form-control" name="hotel_id" required>
                                {{-- <option value=" " hidden> Get hotel here </option> --}}
                                @foreach ($hotelData as $datas)
                                    <option value="{{ $datas['id'] }}"> {{ $datas['name'] }} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="email"> Get Airline here :</label>
                            <select class="js-example-basic-single form-control" name="airline_id" required>
                                {{-- <option value=" " hidden> Get Airline here </option> --}}
                                @foreach ($airlineData as $datas)
                                    <option value="{{ $datas['id'] }}"> {{ $datas['airline'] }} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="email"> Passanger :</label>
                            <input type="text" class="form-control" placeholder="Passanger" name="passanger" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="email"> Meal :</label>
                            <input type="text" class="form-control" placeholder="Meal" name="meal" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="email"> Transfer :</label>
                            <input type="text" class="form-control" placeholder="Transfer" name="transfer" required>
                        </div>
                    </div>

                   
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="email"> Images :</label>
                            <input type="file" class="form-control" name="image[]" multiple required>
                        </div>
                    </div>
                    
                </div>

                <div class="add_field">
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="email"> Activities :</label>
                            <textarea name="activities" id="activities" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="email"> Summry :</label>
                            <textarea name="summry" id="summry" class="form-control"></textarea>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <div class="modal" id="HotelOffer">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h5 class="modal-title"> Hotel Offers </h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <form action="{{ url('/admin/posthotel_offer') }}" method="post" enctype="multipart/form-data"
                        data-parsley-validate>
                        @csrf
                        <div class="form-group">
                            <label for="email"> Name :</label>
                            <input type="text" class="form-control" placeholder="Enter Name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email"> Rating :</label>
                            <input type="text" class="form-control" placeholder="Enter Rating" name="rate" required>
                        </div>
                        <div class="form-group">
                            <label for="email"> Location :</label>
                            <input type="text" class="form-control" placeholder="Enter Location" name="location" required>
                        </div>
                        <div class="form-group">
                            <label for="email"> Price :</label>
                            <input type="text" class="form-control" placeholder="Enter Price" name="price" required
                                data-parsley-type="digits">
                        </div>
                        <div class="form-group">
                            <label for="email"> Room Type :</label>
                            <select name="room_type" class="form-control">
                                <option value="standard room">Standard Room</option>
                                <option value="deluxe room">Deluxe Room</option>
                                <option value="excutive room">Excutive Room</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="email"> Images :</label>
                            <input type="file" class="form-control" name="image[]" multiple required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

            </div>
        </div>
    </div>


    <div class="modal" id="AirlineOffer">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h5 class="modal-title"> Airline Offers </h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="{{ url('/admin/postAirline_offer') }}" method="post" data-parsley-validate>
                        @csrf
                        <div class="form-group">
                            <label for="email"> Trip Type :</label>
                            <select id="tripType" name="ttype" class="form-control" required>
                                <option value="oneway"> Oneway </option>
                                <option value="roundtrip"> Round Trip </option>
                                <option value="multicity"> Multi City </option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="email"> Ticket Type :</label>
                                    <select name="ticktype" class="form-control" required>
                                        <option value="domastic"> Domastic </option>
                                        <option value="international"> International </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="email"> Airline :</label>
                                    <input type="text" class="form-control" placeholder="Airline" name="airline" required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="email"> Flight no :</label>
                                    <input type="text" class="form-control" placeholder="flight" name="flight" required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="email"> Connection :</label>
                                    <input type="text" class="form-control" placeholder="Connection" name="connection"
                                        required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="email"> Departure :</label>
                                    <input type="text" class="form-control" placeholder="Departure" name="departure"
                                        required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="email"> Arrival :</label>
                                    <input type="text" class="form-control" placeholder="Arrival" name="arrival"
                                        required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="email"> Date :</label>
                                    <input type="date" class="form-control" placeholder="Date" name="dates" required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="email"> Time :</label>
                                    <input type="text" class="form-control" placeholder="Time" name="times" required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="email"> Duration :</label>
                                    <input type="text" class="form-control" placeholder="duration" name="duration"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div id="roundTrip" style="display: none">
                            <div style="border: 1px rgb(0, 0, 0) solid; width:100%; margin-bottom: 20px;"></div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="email"> Airline :</label>
                                        <input type="text" class="form-control" placeholder="Airline"
                                            name="roundairline">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="email"> Flight no :</label>
                                        <input type="text" class="form-control" placeholder="flight" name="roundflight">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="email"> Connection :</label>
                                        <input type="text" class="form-control" placeholder="Connection"
                                            name="roundconnection">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="email"> Departure :</label>
                                        <input type="text" class="form-control" placeholder="Departure"
                                            name="rounddeparture">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="email"> Arrival :</label>
                                        <input type="text" class="form-control" placeholder="Arrival"
                                            name="roundarrival">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="email"> Date :</label>
                                        <input type="date" class="form-control" placeholder="Date" name="rounddates">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="email"> Time :</label>
                                        <input type="text" class="form-control" placeholder="Time" name="roundtimes">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="email"> Duration :</label>
                                        <input type="text" class="form-control" placeholder="duration"
                                            name="roundduration">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

            </div>
        </div>
    </div>


@endsection
