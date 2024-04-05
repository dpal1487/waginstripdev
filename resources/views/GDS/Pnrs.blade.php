<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>GDS LOGIN!</title>
  </head>
  <body>
    <div class="container">

        <h1>GDS LOGIN!</h1>
        
        
        
            @if($errors->any())
                @if($errors->first() !="Not Updated successfully" )
                    <div class="alert alert-success" role="alert">
                        <h4 class="alert-heading">Well done!</h4>
                        <p> {{$errors->first() }}</p>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @else
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>OOps !!</strong> Not Updated anyone
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            @endif
            
        <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Email</th>
                <th scope="col">Air Pnr</th>
                <th scope="col">Gds Pnr</th>
                <th scope="col">Phone</th>
                <th scope="col">Booking From</th>
                <th scope="col">Ticketed</th>
                <th scope="col">Ticket</th>
              </tr>
            </thead>
            {{-- {{dd($bookings)}} --}}
            <tbody>
                    @foreach ($bookings as  $booking)
                    <tr>
                        <form action="{{url('/GDS/EditPnrs')}}" method="post">
                            @csrf
                            <input type="hidden" name="id" id="id" value="{{$booking['id']}}" />
                        <th scope="row">{{$booking['id']}}</th>
                        <td>{{$booking['email']}}</td>
                        <td>{{$booking['airline_pnr']}}</td>
                        <td>{{$booking['gds_pnr']}}</td>
                        <td>{{$booking['mobile']}}</td>
                        <td>{{$booking['booking_from']}}</td>
                        <td>
                            @if($user->allow_for_edit == 1)
                                @if($booking['IsConfirm'] == 'Confirm')
                                <input type="text" class="form-control" disabled value="Confirm" />
                                @elseif($booking['IsConfirm'] == 'Cancle')
                                <input type="text" class="form-control" disabled value="Cancle" />
                                @else
                                <select name="confirmation" class="form-control"  id="">
                                    <option value="" selected>Hold</option>
                                     <option value="Confirm">Confirme</option>
                                    <option value="Cancle" >Cancle</option>
                                </select>
                                @endif
                            @else
                                @if($booking['IsConfirm'] == 'Confirm')
                                <input type="text" class="form-control" disabled value="Confirm" />
                                @elseif($booking['IsConfirm'] == 'Cancle')
                                <input type="text" class="form-control" disabled value="Cancle" />
                                @else
                                <select name="confirmation" class="form-control" disabled id="">
                                    <option value="" selected>Hold</option>
                                     <option value="Confirm">Confirme</option>
                                    <option value="Cancle" >Cancle</option>
                                </select>
                                @endif
                            @endif
                        
                        </td>
                        @if($user->allow_for_edit == 1)
                        <td><input type="submit" class="btn btn-success" value="Submit" /></td>
                        @else
                        <td><input type="submit" disabled class="btn btn-success" value="Submit" /></td>
                        @endif
                        </form>
                    </tr>
                    @endforeach
                </tbody>
          </table>
             <div class="d-flex justify-content-center mt-5">
             {!! $bookings->links("pagination::bootstrap-4") !!}
           </div>
          <br>
          <br>
          
        <a href="{{route('GDS.Logout')}}">Log Out</a>
          <br>
          <br>
    </div>
        <!-- Optional JavaScript; choose one of the two! -->
        <script>
            setTimeout(() => {
                location.reload();
              console.log("Delayed for 1 second.");
            }, "60000");
        </script>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        
        <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>
</html>