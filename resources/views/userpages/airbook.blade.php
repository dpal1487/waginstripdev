@extends('userpages.master')
@section('title', 'user dashboard')
@section('body')

<div class="row">
   
    <div class="col-sm-12">
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Flight</th>
                    <th>Status</th>
                </tr>
            </thead>
            @php $s=1;@endphp
            @foreach($airbook as $c)
            <tbody>
                <tr>
                    <td>{{$s++}}</td>
                    <td>{{ $c->name }}</td>
                    <td>{{ $c->email }}</td>
                    <td>{{ $c->phone }}</td>
                    <td>{{ $c->flight }}</td>
                    <td>{{ $c->status }}</td>
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


