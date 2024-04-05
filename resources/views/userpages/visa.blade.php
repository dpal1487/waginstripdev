@extends('userpages.master')
@section('title', 'user dashboard')
@section('body')
<h1>Visa Inquiry</h1>
<div class="row">

    <div class="col-sm-12">
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Visa Name</th>
                    <th>Message</th>
                    <th>Status</th>
                </tr>
            </thead>
            @php $s=1;@endphp
            @foreach($visa as $c)
            <tbody>
                <tr>
                    <td>{{$s++}}</td>
                    <td>{{ $c->name }} {{ $c->surname }}</td>
                    <td>{{ $c->email }}</td>
                    <td>{{ $c->mobile }}</td>
                    <td>{{ $c->needvisa }}</td>
                    <td>{{ $c->message }}</td>
                    <td>{{ $c->created_at }}</td>
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


