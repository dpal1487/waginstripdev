@extends('admin.master')
@section('title','hotel offer table')
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
                <h3 class="m-0 font-weight-bold text-primary"> Offer Hotel list </h3>
            </div>
            <div class="col-sm-5">
                <button class="btn btn-sm btn-primary float-right" data-toggle="modal" data-target="#HotelOffer"> <i class="fa fa-plus"></i> Add Hotel </button>
            </div>
        </div>
        
        
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Hotel Name</th>
                        <th>Rating  <i class="fa fa-star"></i> </th>
                        <th>Location</th>
                        <th>Price</th>
                        <th>Room Type</th>
                        <th>Images</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $datas)
                    <tr>
                        <td> {{ucwords($datas['name'])}} </td>
                        <td> {{$datas['rating']}} </td>
                        <td> {{ucwords($datas['location'])}} </td>
                        <td> <i class="fa fa-inr"></i> {{$datas['price']}} </td>
                        <td> {{ucwords($datas['room_type'])}} </td>
                        <td>
                            @foreach(json_decode($datas['images']) as $images)
                            <img src="{{asset('offerUpload/'.$images)}}" alt="" width="50">
                            @endforeach
                        </td>
                        <td> 
                            <a href="{{url('/admin/edithotel/'.$datas['id'])}}" class="btn btn-sm btn-success"> <i class="fa fa-edit"></i> </a>    
                            <a href="{{url('/admin/deletehotel/'.$datas['id'])}}" class="btn btn-sm btn-danger" onclick="return confirm('Do you want to delete this records')"> <i class="fa fa-trash"></i> </a>    
                        </td>
                    </tr>
                    @endforeach
 
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- The Modal -->
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
            <form action="{{url('/admin/posthotel_offer')}}" method="post" enctype="multipart/form-data" data-parsley-validate>
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
                    <input type="text" class="form-control" placeholder="Enter Price" name="price" required data-parsley-type="digits">
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

@endsection

@section('script')
<script src="{{ asset('dashboard/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('dashboard/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('dashboard/js/demo/datatables-demo.js')}}"></script>
@endsection