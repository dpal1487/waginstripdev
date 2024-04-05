{{-- @extends('errors::minimal')

@section('title', __('Not Found'))
@section('code', '404')
@section('message', __('Not Found')) --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> 500 Serve Error</title>
</head>
<style>
     @import url('https://fonts.googleapis.com/css2?family=Merriweather:wght@900&display=swap');

body{
    font-family: 'Merriweather', serif;
    margin: 0;
    background-color: #9cc3d5;
    text-align: center;
    color: white;
    user-select: none;
    padding-top: 18vh;
}
.container{
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
    background-color: #5ca3dd93;
}
h2{
    font-size: 150px;
    margin: 0;
    text-shadow: 15px 5px 2px black;
}
h3{
    font-size: 40px;
    margin: 20px;
}
p{
    font-size: 18px;
    margin: 5px;
}
p:last-of-type{
    margin-bottom: 35px;
}
a{
    text-decoration: none;
    
}
</style>
   <script>window.location = "/";</script>
    <p>Please Check the URL</p>
<body>
    <div class="container">
    <!--<h2>500</h2>-->
    <h4>Oops, flight no longer available please <a href="{{url('/')}}">Click here</a>click here</p> to search agen.</h4>
    <!--<h4>OR, its seems like our script has failed.</h4>-->
    <p>Otherwise, <a href="{{url('/')}}">Click here</a> to redirect to homepage.</p>
</div>
</body>
</html>