@extends('admin.master')
@section('title','flight offer table')
@section('body')

<div class="card shadow mb-4">
    @if(Session::has('msg'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Success!</strong> {{session('msg')}}
    </div>
    @endif
    @if(Session::has('danger'))
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong> <i class="fa fa-trash"></i> </strong> {{session('danger')}}
    </div>
    @endif
    <div class="card-header py-3">
        <div class="row">
            <div class="col-sm-7">
                <h3 class="m-0 font-weight-bold text-primary"> Airline offer list </h3>
            </div>
            <div class="col-sm-5">
                <button class="btn btn-sm btn-primary float-right" data-toggle="modal" data-target="#AirlineOffer"> <i class="fa fa-plus"></i> Add Airline </button>
            </div>
        </div>
        
        
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#Sr no</th>
                        <th>OB | Trip Type</th>
                        <th>OB | Ticket Type</th>
                        <th>OB | Airline</th>
                        <th>OB | Flight no</th>
                        <th>OB | Connection</th>
                        <th>OB | Departure</th>
                        <th>OB | Arrivel</th>
                        <th>OB | Date | Time</th>
                        <th>OB | Duration</th>

                        <th>IB | Airline</th>
                        <th>IB | Flight no</th>
                        <th>IB | Connection</th>
                        <th>IB | Departure</th>
                        <th>IB | Arrivel</th>
                        <th>IB | Date | Time</th>
                        <th>IB | Duration</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $sr =1; ?>
                    @foreach($datas as $data)
                    <tr>
                        <td>{{$sr++}}</td>
                        <td>{{ucwords($data['ttype'])}}</td>
                        <td>{{ucwords($data['ticktype'])}}</td>
                        <td>{{ucwords($data['airline'])}}</td>
                        <td>{{$data['flight']}}</td>
                        <td>{{ucwords($data['connection'])}}</td>
                        <td>{{ucwords($data['departure'])}}</td>
                        <td>{{$data['arrival']}}</td>
                        <td>{{$data['dates']}} | {{$data['times']}}</td>
                        <td>{{$data['duration']}}</td>
                        <td>{{$data['roundairline']}}</td>
                        <td>{{$data['roundflight']}}</td>
                        <td>{{$data['roundconnection']}}</td>
                        <td>{{$data['rounddeparture']}}</td>
                        <td>{{$data['roundarrival']}}</td>
                        
                        <td>{{$data['rounddates']}} | {{$data['roundtimes']}}</td>
                        <td>{{$data['roundduration']}}</td>
                        <td>
                            <a href="{{url('/admin/airline-offer-edit/'.$data['id'])}}" class="btn btn-sm btn-success"> <i class="fa fa-edit"></i> </a>
                            <a href="{{url('/admin/airline-offer-delete/'.$data['id'])}}" class="btn btn-sm btn-danger" onclick="return confirm('Do you want to DELETE This Record !')"> <i class="fa fa-trash"></i> </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- The Modal -->
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
            <form action="{{url('/admin/postAirline_offer')}}" method="post" data-parsley-validate>
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
                            <input type="text" class="form-control" placeholder="Connection" name="connection" required>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="email"> Departure :</label>
                            <input type="text" class="form-control" placeholder="Departure" name="departure" required>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="email"> Arrival :</label>
                            <input type="text" class="form-control" placeholder="Arrival" name="arrival" required>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="email"> Date  :</label>
                            <input type="date" class="form-control" placeholder="Date" name="dates" required>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="email"> Time  :</label>
                            <input type="text" class="form-control" placeholder="Time" name="times" required>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="email"> Duration :</label>
                            <input type="text" class="form-control" placeholder="duration" name="duration" required>
                        </div>
                    </div>
                </div>
                <div id="roundTrip" style="display: none">
                    <div style="border: 1px rgb(0, 0, 0) solid; width:100%; margin-bottom: 20px;"></div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="email"> Airline :</label>
                                <input type="text" class="form-control" placeholder="Airline" name="roundairline">
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
                                <input type="text" class="form-control" placeholder="Connection" name="roundconnection">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="email"> Departure :</label>
                                <input type="text" class="form-control" placeholder="Departure" name="rounddeparture">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="email"> Arrival :</label>
                                <input type="text" class="form-control" placeholder="Arrival" name="roundarrival">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="email"> Date  :</label>
                                <input type="date" class="form-control" placeholder="Date" name="rounddates">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="email"> Time  :</label>
                                <input type="text" class="form-control" placeholder="Time" name="roundtimes">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="email"> Duration :</label>
                                <input type="text" class="form-control" placeholder="duration" name="roundduration">
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

@section('script')
<script src="{{ asset('dashboard/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('dashboard/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('dashboard/js/demo/datatables-demo.js')}}"></script>
@endsection