@extends('layouts.master')
@section('title', 'Something went wrong')
@section('body')
@include('sweetalert::alert')
    <div class="container pt-20 pt-6p">
        <div class="boxunder text-center" style="height: 500px;padding-top:17%;">
            <div class="row">
                <div class="col-sm-12">
                    @if (Session::has('message'))
                    <div class="fnt20">
                        <div class="alert alert-danger">
                            {{ Session::get('message') }}
                        </div>
                    </div>
                    @elseif (Session::has('msg'))
                        <div class="fnt20">
                            <div class="alert alert-danger">
                                {{ Session::get('msg') }}
                            </div>
                        </div>
                    @endif
                    <br><br>
                    <a href="{{ url('/') }}" class="btn btn-info btn-sm" role="button"> GO BACK | TRY ANOTHER FLIGHTS |
                        <i class="fa fa-plane"></i> </a>
                    <div class="pb-20"></div>
                </div>
            </div>
        </div>
    </div>

@endsection
