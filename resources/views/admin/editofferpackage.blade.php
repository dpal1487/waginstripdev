@extends('admin.master')
@section('title', 'offer package edit')
@section('body')
@if(Session::has('msg'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Success!</strong> {{session('msg')}}
</div>
@endif
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="m-0 font-weight-bold text-primary"> Offer Package Add </h3>
                </div>
                
            </div>
        </div>
        <div class="card-body">
            <form action="{{ url('/admin/postOfferPackagesUpdate') }}" enctype="multipart/form-data" method="post"
                data-parsley-validate>
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="email"> Package Name :</label>
                            <input type="text" class="form-control" placeholder="Package Name" value="{{$datas['pname']}}" name="pname" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="email"> Duration :</label>
                            <input type="text" class="form-control" placeholder="Duration" value="{{$datas['duration']}}" name="duration" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="email"> Package Type :</label>
                            <input type="text" class="form-control" placeholder="Package Type" value="{{$datas['package_type']}}" name="ptype" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="email"> Location :</label>
                            <input type="text" class="form-control" placeholder="Location" value="{{$datas['location']}}" name="location" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="email"> Get Hotel here :</label>
                            <select class="js-example-basic-single form-control" name="hotel_id" required>
                                <option value="{{$datas['hotel_id']}}" hidden> Get hotel here </option>
                                @foreach($hotelData as $datass)
                                <option value="{{$datass['id']}}"> {{$datass['name']}} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="email"> Get Airline here :</label>
                            <select class="js-example-basic-single form-control" name="airline_id" required>
                                <option value="{{$datas['flight_id']}}" hidden> Get Airline here </option>
                                @foreach($airlineData as $datass)
                                <option value="{{$datass['id']}}"> {{$datass['airline']}} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="email"> Passanger :</label>
                            <input type="text" class="form-control" placeholder="Passanger" value="{{$datas['passanger']}}" name="passanger" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="email"> Meal :</label>
                            <input type="text" class="form-control" placeholder="Meal" value="{{$datas['meal']}}" name="meal" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="email"> Transfer :</label>
                            <input type="text" class="form-control" placeholder="Transfer" value="{{$datas['transfer']}}" name="transfer" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="email"> Images :</label>
                            <input type="file" class="form-control" name="image[]" multiple>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="email"> Activities :</label>
                            <textarea name="activities" id="activities" class="form-control">{!! $datas['activities'] !!}</textarea>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="email"> Summry :</label>
                            <textarea name="summry" id="summry" class="form-control">{!! $datas['sumry'] !!}</textarea>
                        </div>
                    </div>
                   
                    <input type="hidden" name="hid" value="{{$datas['id']}}">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>



    


@endsection



