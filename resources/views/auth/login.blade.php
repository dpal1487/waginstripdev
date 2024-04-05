<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | XYZ</title>
    <link rel="stylesheet" href="{{ asset('assets/css/loginstyle.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>
</head>
<body>
    
    
    <a href="{{ url('/') }}" class="float-left img-fluid">
        <img src="{{ asset('assets/images/logo.png') }}" class="img-responsive">
    </a>

    @error('password','email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form method="POST" action="{{ route('register') }}" data-parsley-validate>
            @csrf
			<h1>Create Account</h1>
			<span class="marginbottum-20">Enter your details to be a member.</span>
			<input id="name" type="text" placeholder="Enter full name" name="name" value="{{ old('name') }}" required autocomplete="off" 
			{{-- data-parsley-type="alpha" --}}
			pattern="^([a-zA-Z\s]{3,})$"
			/>
        	<input id="email" type="email" name="email" value="{{ old('email') }}" required placeholder="Enter mail id" />
            <input type="hidden" name="role" value="null">
			<input type="text" id="phone" placeholder="Enter Mobile number" name="phone" value="{{ old('phone') }}"  required
			data-parsley-minlength="10" 
			data-parsley-minlength-message="minlength 10 number" 
			data-parsley-type="digits" 
			data-parsley-type-message="only numbers"
			/>
           
			<input id="password1" type="password" placeholder="Enter password" name="password" required
			data-parsley-minlength="8"
			data-parsley-required-message="Please enter your new password"
			/>
           
            <input id="password-confirm" type="password" name="password_confirmation" placeholder="Re - enter pasword" required
			data-parsley-minlength="8"
			data-parsley-required-message="Please re-enter your new password"
			data-parsley-equalto="#password1"
			/>
			<button class="margintop-20"> Register Now </button>
		</form>
	</div>
	
	<div class="form-container sign-in-container">
		
		<form method="POST" action="{{ route('login') }}">
            @csrf
			<h1 class="marginbottum-20">Sign in</h1>
			
			<input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="Enter mail id" />
			<input id="password" type="password" class="@error('password') is-invalid @enderror" placeholder="Enter password" name="password" required/>
			<a href="#">Forgot your password?</a>
			<button>Sign In</button>
            <span class="margintop-20">or use your account</span>
            <div >
				<a href="#" class="social-fb"><i class="fa fa-facebook-f"></i></a>
				<a href="#" class="social-gplus"><i class="fa fa-google-plus"></i></i></a>
				<a href="#" class="social-link"><i class="fa fa-linkedin"></i></a>
			</div>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>If you already have an account ? </p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Register if you don't have an account</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>




<script>
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', function(){
        container.classList.add("right-panel-active");
    });

    signInButton.addEventListener('click', () => {
        container.classList.remove("right-panel-active");
    });
</script>
</body>
</html>