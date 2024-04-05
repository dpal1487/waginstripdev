@extends('userpages.master')
@section('title', 'user dashboard')
@section('body')

<div class="row">
   
    <div class="col-sm-12">
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th> Booking Form </th>
                    <th> Booking ID  </th>
                    <th> User Id</th>
                    <th> Email  </th>
                    <th> Mobile  </th>
                    <th> Trip  </th>
                    <th> Trip Type  </th>
                    <th> Stop Trip  </th>
                    <th> Fare  </th>
                    <th> Status  </th>
                </tr>
            </thead>
            @php $s=1;@endphp
            @foreach($hotelbook as $c)
            <tbody>
                <tr>
                    <td>{{$s++}}</td>
                    <td>{{ $c->booking_from }}</td>
                    <td>{{ $c->booking_id }}</td>
                    <td>{{ $c->user_id}}</td>
                    <td>{{ $c->email }}</td>
                    <td>{{ $c->mobile }}</td>
                    <td>{{ $c->trip }}</td>
                    <td>{{ $c->trip_type }}</td>
                    <td>{{ $c->trip_stop }}</td>
                    <td>{{ $c->fare }}</td>
                    <td><a class="btn btn-primary" href="#"> View Details</a></td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
</div>

@endsection

</style>

{{-- <script>
$(function() {
    $('#printTicket').click(function() {
        alert('Download');
    });
});
</script> --}}


