@extends('admin.master')
@section('title','hotel offer table')
@section('body')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row">
            <div class="col-sm-7">
                <h4 class="m-0 font-weight-bold text-primary"> Offer Hotel Update </h4>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form action="{{url('/admin/updatePostHotelOffer')}}" method="post" enctype="multipart/form-data" data-parsley-validate>
            @csrf
            <div class="form-group">
              <label for="email"> Name :</label>
              <input type="text" class="form-control" placeholder="Enter Name" value="{{$datas['name']}}" name="name" required>
            </div>
            <div class="form-group">
                <label for="email"> Rating :</label>
                <input type="text" class="form-control" placeholder="Enter Rating" value="{{$datas['rating']}}" name="rate" required>
            </div>
            <div class="form-group">
                <label for="email"> Location :</label>
                <input type="text" class="form-control" placeholder="Enter Location" value="{{$datas['location']}}" name="location" required>
            </div>
            <div class="form-group">
                <label for="email"> Price :</label>
                <input type="text" class="form-control" placeholder="Enter Price" value="{{$datas['price']}}" name="price" required data-parsley-type="digits">
            </div>
            <div class="form-group">
                <label for="email"> Room Type :</label>
                <select name="room_type" class="form-control">
                    <option value="{{$datas['room_type']}}" hidden>{{ucwords($datas['room_type'])}}</option>
                    <option value="standard room">Standard Room</option>
                    <option value="deluxe room">Deluxe Room</option>
                    <option value="excutive room">Excutive Room</option>
                </select>
            </div>
            <div class="form-group">
                <label for="email"> Images :</label>
                <input type="file" class="form-control" name="image[]" multiple>
            </div>
            <input type="hidden" name="hid" value="{{$datas['id']}}">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

@endsection