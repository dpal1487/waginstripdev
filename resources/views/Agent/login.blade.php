<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agent Login | Wagnistrip</title>
    <link rel="stylesheet" href="{{ asset('assets/css/loginstyle.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
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
    
    @php
    $right = "";
    @endphp
     @error('email')
     @php
     $right = "right-panel-active";
     @endphp
     @enderror
     
<div class="container {{$right}}" id="container">
	<div class="form-container sign-up-container">
		<form method="POST" action="{{ route('Agent.register') }}" id="openDocPopup" data-parsley-validate>
            @csrf
			<h1 class="heading">Create Account</h1>
			<span class="marginbottum-10">Enter your details to be a member.</span>
			 @error('email')
            <p style="color:red; font-weight:700;" class="marginbottum-10">{{ $message }}</>
            @enderror
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
			<button class="margintop-20 "> Register Now </button>
		</form>
	</div>
	
	<div class="form-container sign-in-container">
		
		<form method="POST" action="{{ route('Agent.login') }}">
            @csrf
			<h1 class="marginbottum-20 heading">Sign in</h1>
			@if (session()->has('Agenterror'))
                <span class="invalid-feedback parsley-errors-list filled" role="alert">
                    <strong>{{ session('Agenterror') }}</strong>
                </span>
            @endif
			<input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="Enter mail id" />
			<input id="password" type="password" class="@error('password') is-invalid @enderror" placeholder="Enter password" name="password" required/>
			{{-- <a href="#">Forgot your password?</a> --}}
			<button>Sign In</button>
            <span class="margintop-20">or use your account</span>
            <div >
				<a href="javascript:void(0)" class="social-fb"><i class="fa fa-facebook-f"></i></a>
				<a href="javascript:void(0)" class="social-gplus"><i class="fa fa-google-plus"></i></i></a>
				<a href="javascript:void(0)" class="social-link"><i class="fa fa-linkedin"></i></a>
			</div>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1 class="heading">Welcome Back!</h1>
				<p>If you already have an account ? </p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1 class="heading">Hello, Friend!</h1>
				<p>Register if you don't have an account</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>
@if($errors->any())
@if($errors->first()!='skip' && $errors->first()!='submitDoc')
@php
 $active = "active";
@endphp
 @error('email')
    @if($message)
    @php
     $active = "a";
    @endphp
    @endif
@enderror
<div class="upoadDocPopup {{$active}}">
    <div class="innrePopup">
        <div class="popupContent">
            <div class="heading"> Upoad Your Documents </div>
            @if($errors->first()!='active')
                <div class="alert alert-danger" role="alert">
                     <p class="" style="color: red;"> {{$errors->first()}}. </p>
                    
                </div>
            @endif
            <div class="inputBox">
                <form action="{{url('/uploaddetail')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <label class="uploadFile">
                        <i class="fas fa-paperclip fa-md mr-2"></i>
                        <span class="filename">Pan Card</span>
                        <input type="file" class="inputfile form-control" name="file[]" required >
                    </label>
                    
                    <label class="uploadFile">
                        <i class="fas fa-paperclip fa-md mr-2"></i>
                        <span class="filename">Tan Number</span>
                        <input type="file" class="inputfile form-control" name="file[]" required >
                    </label>
                    <label class="uploadFile">
                        <i class="fas fa-paperclip fa-md mr-2"></i>
                        <span class="filename">G.S.T. Number</span>
                        <input type="file" class="inputfile form-control" name="file[]" required >
                    </label>
                    <label class="uploadFile">
                        <i class="fas fa-paperclip fa-md mr-2"></i>
                        <span class="filename">Cin Certificat</span>
                        <input type="file" class="inputfile form-control" name="file[]" required >
                        <input type="hidden" name="id" value="{{$errors}}" /> 
                    </label>
                    <div class="btnsDiv">
                        <div>
                            <a href="{{url('/document_skip_for_agent')}}" class="btnbtn skipbtn">Skip</a>
                        </div>
                        <div>
                             <input type="submit" value="Submit" class="btnbtn" /> 
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endif
@endif

@if($errors->any())
@if($errors->first()=='skip')
<div class="upoadDocPopup active">
    <div class="innrePopup">
        <div class="popupContent">
            <div class="heading"> Thank You... </div>
            <div class="textBox">
                <p> Your account has been created, Now you need to submit all the documents on these platforms via <b>WhatsApp:</b> <span class="bluetext">7669988018</span> and <b>Email:</b> <span class="bluetext">wagnistrip@gmail.com</span>  in order to continue (wait for the administrator to <b>activate</b> your account first).</p>
                <div class="btnsDiv" style="justify-content: end;"><a href="{{route('Agent.login')}}" class="btnbtn">OK</a></div>
            </div>
        </div>
    </div>
</div>

@endif
@endif

@if($errors->any())
@if($errors->first()=='submitDoc')
<div class="upoadDocPopup active">
    <div class="innrePopup">
        <div class="popupContent">
            <div class="heading"> Thank You... </div>
            <div class="textBox">
                <p> Your account has been created, you simply need to wait for the admin to <b>activate</b> it.</p>
                <div class="btnsDiv" style="justify-content: end;"><a href="{{route('Agent.login')}}" class="btnbtn">OK</a></div>
            </div>
        </div>
    </div>
</div>

@endif
@endif



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
    
    // $("#openDocPopup").submit(function(){
    //     $(".upoadDocPopup").addClass("active")
    // });
    // $(".skipbtn").click(function(){
    //     $(".upoadDocPopup").removeClass("active")
    // });
    
    
    $("input[type=file]").change(function (e) {
      $(this).parents(".uploadFile").find(".filename").text(e.target.files[0].name);
    });


    
</script>
</body>
</html>