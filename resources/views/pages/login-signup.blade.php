<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login-signup</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/logo/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</head>


<body>
    <div class="container mobileVes1 mt-5">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <div class="card p-3 bg-primary">
                    <h3 class="font-weight-bold m-0 pt-3 pb-3 text-center text-white">Login/Signup</h3>
                    <form>
                        <label for="" class="text-white">Email or Mobile Number</label>
                        <input class="inputholder" type="text" placeholder="Enter email or mobile number">
                        <span id="error"></span>
                        <button type="button" class="loginbutton_s fetch_email_number">CONTINUE</button>
                    </form>
                    <h5 class="m-0 pt-4 text-center text-white">OR</h5>
                    <a href="#">
                        <button type="submit" class="googlebutton">
                            <i class="fa fa-google" aria-hidden="true"></i>
                            Sign in with Google
                        </button>
                    </a>
                    <a href="#">
                        <button type="submit" class="facebookbutton">
                            <i class="fa fa-facebook-official" aria-hidden="true"></i>
                            Sign in with Facebook
                        </button>
                    </a>
                    <p class="tremssecsbtn">By proceeding, you agree to XYZ.com, <a href="#" class="text-danger">Privacy
                            Policy</a>, <a href="#" class="text-danger">User Agreement</a> and <a href="#"
                            class="text-danger">T&Cs</a>
                    </p>
                </div>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
</body>


</html>
