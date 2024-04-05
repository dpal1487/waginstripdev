@extends('admin.master')
@section('title','Airline offer edit')
@section('body')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row">
            <div class="col-sm-7">
                <h4 class="m-0 font-weight-bold text-primary"> Offer Airline Update </h4>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form action="{{url('/admin/postAirlineofferUpdate')}}" method="post" data-parsley-validate>
            @csrf
            <div class="form-group">
                <label for="email"> Trip Type :</label>
                <select id="tripType" name="ttype" class="form-control" required>
                    <option value="{{$data['ttype']}}" hidden> {{ucwords($data['ttype'])}} </option>
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
                            <option value="{{$data['ticktype']}}" hidden> {{ucwords($data['ticktype'])}} </option>
                            <option value="domastic"> Domastic </option>
                            <option value="international"> International </option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="email"> Airline :</label>
                        <input type="text" class="form-control" placeholder="Airline" value="{{$data['airline']}}" name="airline" required>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="email"> Flight no :</label>
                        <input type="text" class="form-control" placeholder="flight" value="{{$data['flight']}}" name="flight" required>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="email"> Connection :</label>
                        <input type="text" class="form-control" placeholder="Connection" value="{{$data['connection']}}" name="connection" required>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="email"> Departure :</label>
                        <input type="text" class="form-control" placeholder="Departure" value="{{$data['departure']}}" name="departure" required>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="email"> Arrival :</label>
                        <input type="text" class="form-control" placeholder="Arrival" value="{{$data['arrival']}}" name="arrival" required>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="email"> Date  :</label>
                        <input type="date" class="form-control" placeholder="Date" value="{{$data['dates']}}" name="dates" required>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="email"> Time  :</label>
                        <input type="text" class="form-control" placeholder="Time" value="{{$data['times']}}" name="times" required>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="email"> Duration :</label>
                        <input type="text" class="form-control" placeholder="duration" value="{{$data['duration']}}" name="duration" required>
                    </div>
                </div>
            </div>
            <div id="roundTrip" style="display: none">
                <div style="border: 1px rgb(0, 0, 0) solid; width:100%; margin-bottom: 20px;"></div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="email"> Airline :</label>
                            <input type="text" class="form-control" placeholder="Airline" value="{{$data['roundairline']}}" name="roundairline">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="email"> Flight no :</label>
                            <input type="text" class="form-control" placeholder="flight" value="{{$data['roundflight']}}" name="roundflight">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="email"> Connection :</label>
                            <input type="text" class="form-control" placeholder="Connection" value="{{$data['roundconnection']}}" name="roundconnection">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="email"> Departure :</label>
                            <input type="text" class="form-control" placeholder="Departure" value="{{$data['rounddeparture']}}" name="rounddeparture">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="email"> Arrival :</label>
                            <input type="text" class="form-control" placeholder="Arrival" value="{{$data['roundarrival']}}" name="roundarrival">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="email"> Date  :</label>
                            <input type="date" class="form-control" placeholder="Date" value="{{$data['rounddates']}}" name="rounddates">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="email"> Time  :</label>
                            <input type="text" class="form-control" placeholder="Time" value="{{$data['roundtimes']}}" name="roundtimes">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="email"> Duration :</label>
                            <input type="text" class="form-control" placeholder="duration" value="{{$data['roundduration']}}" name="roundduration">
                        </div>
                    </div>
                </div> 
            </div>
            <input type="hidden" name="hid" value="{{$data['id']}}">
              
            <button type="submit" class="btn btn-primary"> Update </button>
        </form>
    </div>
</div>

<script>
    $(function(){
        $( window ).on("load", function() {
            var checkval = $("select#tripType").val();
            if(checkval == "roundtrip"){
                $('div#roundTrip').show();
            } else {
                $('div#roundTrip').hide();
            }
        });
    });
</script>

@endsection

