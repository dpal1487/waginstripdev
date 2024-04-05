<html>

<head>
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Admin | Login</title>
  <style>
    body {
        background-color: #dbdbdb;
        font-family: 'Ubuntu', sans-serif;
    }
    
    .main {
      background-color: #FFFFFF;
      width: 400px;
      height: 350px;
      margin: 7em auto;
      border-radius: 6px;
      box-shadow: 0px 11px 35px 2px rgb(0 0 0 / 14%);
    }
    
    .sign {
        padding-top: 20px;
        color: #096d97;
        font-family: 'Ubuntu', sans-serif;
        font-weight: bold;
        font-size: 23px;
    }
    
    .un {
    width: 76%;
    color: rgb(38, 50, 56);
    font-weight: 700;
    font-size: 14px;
    letter-spacing: 1px;
    background: rgba(136, 126, 126, 0.04);
    padding: 10px 20px;
    border: none;
    border-radius: 20px;
    outline: none;
    box-sizing: border-box;
    border: 2px solid rgba(0, 0, 0, 0.02);
    margin-bottom: 50px;
    margin-left: 46px;
    text-align: center;
    margin-bottom: 27px;
    font-family: 'Ubuntu', sans-serif;
    }
    
    form.form1 {
        padding-top: 5px;
    }
    
    .pass {
    width: 76%;
    color: rgb(38, 50, 56);
    font-weight: 700;
    font-size: 14px;
    letter-spacing: 1px;
    background: rgba(136, 126, 126, 0.04);
    padding: 10px 20px;
    border: none;
    border-radius: 20px;
    outline: none;
    box-sizing: border-box;
    border: 2px solid rgba(0, 0, 0, 0.02);
    margin-bottom: 50px;
    margin-left: 46px;
    text-align: center;
    margin-bottom: 27px;
    font-family: 'Ubuntu', sans-serif;
    }
    
   
    .un:focus, .pass:focus {
        border: 2px solid rgba(0, 0, 0, 0.18) !important;
        
    }
    
    .submit {
      cursor: pointer;
        border-radius: 5em;
        color: #fff;
        background: linear-gradient(to right, #0088d7, #0655b7);
        border: 0;
        padding-left: 40px;
        padding-right: 40px;
        padding-bottom: 10px;
        padding-top: 10px;
        font-family: 'Ubuntu', sans-serif;
        margin-left: 35%;
        font-size: 13px;
        box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.04);
    }
    
    .forgot {
        text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
        color: #E1BEE7;
        padding-top: 15px;
    }
    
    a {
        text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
        color: #0461be;
        text-decoration: none
    }

    .error{
      text-align: center;
      background: #d91515;
      padding: 10px;
      color: #fff;
      font-size: 13px;
      font-weight: 600;
    }
    
    @media (max-width: 600px) {
        .main {
            border-radius: 0px;
        }
      }
  </style>
</head>

<body>
  
  <div class="main">
    @if(Session::has('error'))
    <div class="error"> {{session('error')}} </div>
    @endif
    <p class="sign" align="center"> Admin | Sign in </p>
    <form class="form1" method="POST" action="{{ url('/admin/loginPost') }}">
      @csrf
      <input type=email class="un" name="email" placeholder="Email Address" value="{{ old('email') }}" required autofocus>
      @if ($errors->has('email'))
        <span ><strong>{{ $errors->first('email') }}</strong></span>
      @endif

      <input type=password name="password" class="pass" placeholder="Password" required>
      <button type="submit" class="submit">SIGN IN</button>
      <p class="forgot" align="center"><a href="#">Forgot Password?</p>
    </form>     
                
    </div>
     
</body>

</html>