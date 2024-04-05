@extends('userpages.master')
@section('title','user profile')
@section('body')

<div class="row">
    <div class="col-sm-7"></div>
    <div class="col-sm-5">
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                {{ $error }}
            </div>
        @endforeach
        @if (Session::has('msg'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Success!</strong> {{ session('msg') }}
            </div>
        @endif
    </div>
</div> 
<div class="card fadestyle" id="profilePage">
    <div class="card-body">
        <form method="post" action="{{ url('/profile/all/update') }}" enctype="multipart/form-data"
            data-parsley-validate>
            @csrf
            <div class="row">
                <div class="col-sm-4">
                    @if (empty(Auth::user()->image))
                        @if (Auth::user()->gender == 'MALE')
                            <img src="{{ asset('assets/images/m.jpg') }}"
                                class="rounded-circle imgsize">
                        @else
                            <img src="{{ asset('assets/images/f.jpg') }}"
                                class="rounded-circle imgsize">
                        @endif
                    @else
                        <img src="{{ asset('uploads/' . Auth::user()->image) }}"
                            class="rounded-circle imgsize">
                    @endif
                    <div style="height:0px;overflow:hidden">
                        <input type="file" id="fileInput" name="fileInput" />
                    </div>
                    <button type="button" onclick="chooseFile();" class="uploadbtn"> Choose Photo
                    </button>
                    {{-- <input type="file" name="images" id="images"> --}}
                </div>
                <div class="col-sm-8">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="email" class="formttitle">Name *</label>
                                <input type="text" class="form-control" placeholder="Enter name"
                                    name="name" value="{{ Auth::user()->name }}" id="name">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="email" class="formttitle">Email *</label>
                                <input type="email" class="form-control" placeholder="Enter email"
                                    name="email" value="{{ Auth::user()->email }}" disabled>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group" class="formttitle">
                                <label for="email" class="formttitle">Gender</label>
                                <select class="form-control" name="gender" id="GENDER">
                                    <option value="{{ Auth::user()->gender }}" hidden>
                                        {{ Auth::user()->gender }} </option>
                                    <option value="MALE"> MALE </option>
                                    <option value="FEMALE"> FEMALE </option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="email" class="formttitle"> Phone no * </label>
                                <input type="text" class="form-control" placeholder="Enter phone"
                                    name="phone" value="{{ Auth::user()->phone }}" id="phone">
                            </div>
                        </div>

                    </div>
                    <input type="hidden" value="{{ Auth::user()->id }}" id="id" name="id">
                    <button type="submit" class="btn btn-sm btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div style="display:none" id="passwordSection">
    <div class="card fadestyle">
        <div class="card-body">
            <form method="post" action="{{ url('/profile/change/password') }}" data-parsley-validate>
                @csrf
                <div class="row">
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="email" class="formttitle">Current Password *</label>
                                    <input type="password" class="form-control"
                                        placeholder="current password" name="current_password" required
                                        data-parsley-minlength="8"
                                        data-parsley-required-message="Please enter your current password">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="email" class="formttitle">New Password *</label>
                                    <input type="password" id="password1" class="form-control"
                                        placeholder="new password" name="new_password" required
                                        data-parsley-minlength="8"
                                        data-parsley-required-message="Please enter your new password">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="email" class="formttitle">Confirm Password *</label>
                                    <input type="password" class="form-control"
                                        placeholder="confirm password" name="confirm_password" required
                                        data-parsley-minlength="8"
                                        data-parsley-required-message="Please re-enter your new password"
                                        data-parsley-equalto="#password1">
                                </div>
                            </div>
                        </div>
                        <input type="hidden" value="{{ Auth::user()->id }}" id="id" name="id">
                        <button type="submit" class="btn btn-sm btn-info">Change <i
                                class="fa fa-key"></i> </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

<script>
    function chooseFile() {
        $("#fileInput").click();
    }
</script>