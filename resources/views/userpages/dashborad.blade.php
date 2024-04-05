@extends('userpages.master')
@section('title','user dashboard')
@section('body')

<div class="row">
  <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="h5 font-weight-bold text-primary text-uppercase mb-1">
                            MTT Team's </div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-ticket fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="h5 font-weight-bold text-primary text-uppercase mb-1">
                        My Confirmed Booking</div>
                </div>
                <div class="col-auto">
                  <i class="fa fa-ticket fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="h5 font-weight-bold text-success text-uppercase mb-1">
                            My Profile</div>
                    </div>
                    <div class="col-auto">
                        <i class="fa fa-user fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="h5 font-weight-bold text-warning text-uppercase mb-1">
                            Wallet</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-wallet fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="h5 font-weight-bold text-info text-uppercase mb-1">PNR
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fa fa-tag fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pending Requests Card Example -->
 </div>

@endsection