@extends('admin.master')
@section('title', 'offer package table')
@section('body')

    <div class="card shadow mb-4">
        @if (Session::has('msg'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Success!</strong> {{ session('msg') }}
            </div>
        @endif
        @if (Session::has('danger'))
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong> <i class="fa fa-trash"></i> </strong> {{ session('danger') }}
            </div>
        @endif
        <div class="card-header py-3">
            <div class="row">
                <div class="col-sm-7">
                    <h3 class="m-0 font-weight-bold text-primary"> Offer Package List </h3>
                </div>
                <div class="col-sm-5">
                    <a href="{{url('/admin/addofferpackage')}}" class="btn btn-sm btn-primary float-right"> <i
                            class="fa fa-plus"></i> Add Offer Package </a>
                </div>
            </div>


        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#Sr no</th>
                            <th>Package Name</th> 
                            <th>Duration</th>
                            <th>Package Type</th>
                            <th>Location</th>
                            <th>Passanger</th>
                            <th>Flight</th>
                            <th>Hotel</th>
                            <th>Meal</th>
                            <th>Trasfer</th>
                            <th>Summery</th>
                            <th>Activities</th>
                            <th>Images</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $sr = 1; ?>
                        @foreach($offferArray as $datas)
                        <tr>
                            <td>{{$sr++}}</td>
                            <td>{{ucwords($datas['package_name'])}}</td>
                            <td>{{$datas['duration']}}</td>
                            <td>{{ucwords($datas['package_type'])}}</td>
                            <td>{{ucwords($datas['location'])}}</td>
                            <td>{{$datas['passanger']}}</td>
                            <td class="wd300">
                              <ul>
                                  @if($datas['ttype'] == "roundtrip")
                                    <li class="flitexttitle">OB Flight | {{ucwords($datas['flightname'])}} </li> 
                                    <li class="flitexttitle">OB Trip Type | {{ucwords($datas['ttype'])}} </li> 
                                    <li class="flitexttitle">OB Ticket Type | {{ucwords($datas['ticktype'])}} </li> 
                                    <li class="flitexttitle">OB Departure | {{ucwords($datas['departure'])}} </li> 
                                    <li class="flitexttitle">OB Arrival | {{ucwords($datas['arrival'])}} </li> 
                                    <li class="flitexttitle">OB Date | {{ucwords($datas['dates'])}} </li> 
                                    <li class="flitexttitle">OB Time | {{ucwords($datas['times'])}} </li> 
                                    <li class="flitexttitle">OB Duration | {{ucwords($datas['duration'])}} </li> 
                                    <li class="flitexttitle">IB Flight | {{ucwords($datas['roundairline'])}} </li>
                                    <li class="flitexttitle">IB Departure | {{ucwords($datas['rounddeparture'])}} </li> 
                                    <li class="flitexttitle">IB Arrival | {{ucwords($datas['roundarrival'])}} </li> 
                                    <li class="flitexttitle">IB rounddates | {{ucwords($datas['rounddates'])}} </li>
                                  @else
                                    <li class="flitexttitle">OB Flight | {{ucwords($datas['flightname'])}} </li> 
                                    <li class="flitexttitle">OB Trip Type | {{ucwords($datas['ttype'])}} </li> 
                                    <li class="flitexttitle">OB Ticket Type | {{ucwords($datas['ticktype'])}} </li> 
                                    <li class="flitexttitle">OB Departure | {{ucwords($datas['departure'])}} </li> 
                                    <li class="flitexttitle">OB Arrival | {{ucwords($datas['arrival'])}} </li> 
                                    <li class="flitexttitle">OB Date | {{ucwords($datas['dates'])}} </li> 
                                    <li class="flitexttitle">OB Time | {{ucwords($datas['times'])}} </li> 
                                    <li class="flitexttitle">OB Duration | {{ucwords($datas['duration'])}} </li>
                                  @endif
                              </ul> 
                            </td>
                            <td class="wd300">
                                <ul>                              
                                    <li class="flitexttitle"> Hotel Name | {{ucwords($datas['hotelname'])}} </li> 
                                    <li class="flitexttitle"> Rating | {{ucwords($datas['rating'])}} <i class="fa fa-star"></i> </li> 
                                    <li class="flitexttitle"> Location | {{ucwords($datas['location'])}} </li> 
                                    <li class="flitexttitle"> Price | <i class="fa fa-inr"></i>{{ucwords($datas['price'])}} </li> 
                                    <li class="flitexttitle"> Room Type | {{ucwords($datas['room_type'])}} </li> 
                                </ul> 
                            </td>
                            <td>{{ucwords($datas['meal'])}}</td>
                            <td>{{ucwords($datas['transfer'])}}</td>
                            <td> {!! $datas['sumry'] !!} </td>
                            <td>{!! $datas['activities'] !!}</td>
                            <td>
                                @foreach(json_decode($datas['images']) as $images)
                                <img src="{{asset('offerUpload/'.$images)}}" alt="" width="50">
                                @endforeach
                            </td>
                            <td>
                                <a href="{{url('/admin/editofferpackage/'.$datas['id'])}}" class="btn btn-sm btn-success"> <i class="fa fa-edit"></i> </a>
                                <a href="{{url('/admin/deleteofferpackage/'.$datas['id'])}}" onclick="return confirm('Do u want to delete this record')" class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

   

@endsection

@section('script')
    <script src="{{ asset('dashboard/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('dashboard/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/demo/datatables-demo.js') }}"></script>
    <style>
        .flitexttitle{
            font-size: 11px;
            margin-left: -33px;
            font-weight: 600;
            color: #000;
        }
        .wd300{
            width: 200px;
        }
    </style>
@endsection
