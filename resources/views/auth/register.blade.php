@extends('layouts.app')
<style>
    .lock-icon{
	position: relative;
	float: right;
	right: 10px;
	top: -30px;
}
.unlock-icon{
	display: none;

	position: relative;
	float: right;
	right: 10px;
	top: -30px;
}
.lock-icon_1{
	position: relative;
	float: right;
	right: 10px;
	top: -30px;
}
.unlock-icon_1{
	display: none;
	position: relative;
	float: right;
	right: 10px;
	top: -30px;
}
</style>
@section('content')


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav mr-auto">

                            </ul>

                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ml-auto">
                                <!-- Authentication Links -->

                                @guest
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else

                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest

                            </ul>
                        </div>
                    </div>
                </nav>
<div class="container-fluid">
    <div class="row">
		<div class="col-md-8 p-0">
			<img src="assets/img/bg-img.png" alt=""  style="height:100vh; width:100%;">
		</div>
        <div class="col-md-4 d-flex justify-content-center align-items-center" style="background: #050a24;color: white;">
            <div>
                <div class="mb-4"> <h4 style="color:white;">{{ __('Register') }}</h4></div>

                <div class="col-md-11 d-flex justify-content-center">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group ">
                            <label for="name" class=" col-form-label text-md-right ">{{ __('Name') }}</label>

                            <div class=" p-0">
                                <input id="name" type="text" class="form-control name @error('name') is-invalid @enderror mb-0" name="name" value="{{ old('name') }}"  autocomplete="name" >
                            <div class="d-flex" >
								<img src="assets/img/warning.png" class="img-fluid company-save-error" style=" height:13.12px; width:13.12px; margin-right: 5px; margin-top: 4px; display:none;">
								<p class="company-save-error" style="color:#E0B719; margin-bottom: 0; display:none; font-size:12px;">Enter a Name</p>
							</div>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="role" class=" col-form-label text-md-right">{{ __('Role') }}</label>

                            <div class=" p-0">
                                <select class="form-control role @error('name') is-invalid @enderror mb-0" name="role" value="{{ old('role') }}"  autocomplete="role" >
                                    <option value="" disabled selected>Choose option</option>
                                    <option value="customer">Customer</option>
                                    <option value="barber">Barber</option>

                                </select>
								<div class="d-flex" >
								<img src="assets/img/warning.png" class="img-fluid company-save-error" style=" height:13.12px; width:13.12px; margin-right: 5px; margin-top: 4px; display:none;">
								<p class="company-save-error" style="color:#E0B719; margin-bottom: 0; display:none; font-size:12px;">Choose a Role</p>
							</div>


                                @error('role')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class=" col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class=" p-0">
                                <input id="email" type="email" class="form-control email @error('email') is-invalid @enderror mb-0" name="email" value="{{ old('email') }}"  autocomplete="email" required="required">
                            <div class="d-flex" >
								<img src="assets/img/warning.png" class="img-fluid email-error" style=" height:13.12px; width:13.12px; margin-right: 5px; margin-top: 4px; display:none;">
								<p class="email-error" style="color:#E0B719; margin-bottom: 0; display:none; font-size:12px;">Enter a Email</p>
							</div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class=" col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class=" p-0">
                                <input id="password" type="password" class="form-control password @error('password') is-invalid @enderror mb-0" name="password"  autocomplete="new-password">
                                <img src="assets/img/hide.png" class="lock-icon abc" width="18px" height="20px">
							    <img src="assets/img/show.png" class="unlock-icon abc" width="18px" height="20px" >
                                <div class="d-flex">
								<img src="assets/img/warning.png" class="img-fluid password-error" style=" height:13.12px; width:13.12px; margin-right: 5px; margin-top: 4px; display:none;">
								<p class="password-error" style="color:#E0B719; margin-bottom: 0; display:none; font-size:12px;">Enter a Password</p>
							</div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class=" col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class=" p-0">
                                <input id="password-confirm" type="password" class="form-control conpassword confirmPassword mb-0" name="password_confirmation"  autocomplete="new-password">
                                <img  src="assets/img/hide.png" class="lock-icon_1 abc_1" width="18px" height="20px">
							    <img  src="assets/img/show.png" class="unlock-icon_1 abc_1" width="18px" height="20px">
                                <div class="d-flex">
								<img  src="assets/img/warning.png" class="img-fluid conpassword-error" style=" height:13.12px; width:13.12px; margin-right: 5px; margin-top: 4px; display:none;">
								<p class="conpassword-error" style="color:#E0B719; margin-bottom: 0; display:none; font-size:12px;">Enter a Confirm Password</p>
							</div>

							<div class="d-flex" style="margin-top: 5px; ">
								<img src="assets/img/warning.png" class="img-fluid matchpassword-error" style=" height:13.12px; width:13.12px; margin-right: 5px; margin-top: 4px; display:none;">
								<p class="matchpassword-error" style="color:#E0B719; margin-bottom: 0; display:none; font-size:12px;">Password is not match</p>
							</div>
							<span id="show-msg" ></span>
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-12 ">
                                <button type="submit " class="btn btn-primary reasign-done form-control">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
	$(document).ready(function () {
		$('.reasign-done').click(function () {


			var name = $('.name').val();
			if (name == '') {
				$('.reasign-done').attr('type', 'button');
				$('.company-save-error').show();
				$('.name').css("border", "1.5px solid #E0B719");
				$('.name').css("background", "#FFF9E3");
				return false;
			} else {
				$('.reasign-done').attr('type', 'submit');
				$('.company-save-error').hide();
				$('.name').css("border", "1.5px solid #37B34A");
				$('.name').css("background", "white");
			}

			var name = $('.role').val();
			if (name == '') {
				$('.reasign-done').attr('type', 'button');
				$('.roleerror').show();
				$('.role').css("border", "1.5px solid #E0B719");
				$('.role').css("background", "#FFF9E3");
				return false;
			} else {
				$('.reasign-done').attr('type', 'submit');
				$('.roleerror').hide();
				$('.role').css("border", "1.5px solid #37B34A");
				$('.role').css("background", "white");
			}

			var email = $('.email').val();
			if (email == '') {
				$('.reasign-done').attr('type', 'button');
				$('.email-error').show();
				$('.email').css("border", "1.5px solid #E0B719");
				$('.email').css("background", "#FFF9E3");
				return false;
			} else {
				$('.reasign-done').attr('type', 'submit');
				$('.email-error').hide();
				$('.email').css("border", "1.5px solid #37B34A");
				$('.email').css("background", "white");
			}

			var password = $('.password').val();
			if (password == '') {
				$('.reasign-done').attr('type', 'button');
				$('.password-error').show();
				$('.password').css("border", "1.5px solid #E0B719");
				$('.password').css("background", "#FFF9E3");
				return false;
			} else {
				$('.reasign-done').attr('type', 'submit');
				$('.password-error').hide();
				$('.password').css("border", "1.5px solid #37B34A");
				$('.password').css("background", "white");
			}
			var conpassword = $('.conpassword').val();
			if (conpassword == '') {
				$('.reasign-done').attr('type', 'button');
				$('.conpassword-error').show();
				$('.conpassword').css("border", "1.5px solid #E0B719");
				$('.conpassword').css("background", "#FFF9E3");
				return false;
			} else {
				$('.reasign-done').attr('type', 'submit');
				$('.conpassword-error').hide();
				$('.conpassword').css("border", "1.5px solid #37B34A");
				$('.conpassword').css("background", "white");
			}

			// var matchpassword = $('.matchpassword').val();
			if (password != conpassword) {
				$('.reasign-done').attr('type', 'button');
				$('.matchpassword-error').show();
				$('.matchpassword').css("border", "1.5px solid #E0B719");
				$('.matchpassword').css("background", "#FFF9E3");
				return false;
			} else {
				$('.reasign-done').attr('type', 'submit');
				$('.matchpassword-error').hide();
				$('.matchpassword').css("border", "1.5px solid #37B34A");
				$('.matchpassword').css("background", "white");
			}

			var minNumberofChars = 8;

			if(password.length < minNumberofChars ){
				document.getElementById("show-msg").innerHTML = "Password must contain atleast 8 character";
                $('#show-msg').css('color','#E0B719');
                $('#show-msg').css('margin-bottom','0px');
                $('#show-msg').css('font-size','12px;');

				return false;
			}


		});
	});
</script>

<!-- ---------------------hide show password---------------------------->
<script>
	$("body").on('click', '.lock-icon, .unlock-icon', function() {
		$(this).toggleClass("abc");
		var input = $("#password");
		if (input.attr("type") === "password") {
			input.attr("type", "text");
			$('.unlock-icon').show();
			$('.lock-icon').hide();
		} else {
			input.attr("type", "password");
			$('.unlock-icon').hide();
			$('.lock-icon').show();
		}
	});

	$("body").on('click', '.lock-icon_1, .unlock-icon_1', function() {
		$(this).toggleClass("abc_1");
		var input = $(".confirmPassword");
		if (input.attr("type") === "password") {
			input.attr("type", "text");
			$('.unlock-icon_1').show();
			$('.lock-icon_1').hide();
		} else {
			input.attr("type", "password");
			$('.unlock-icon_1').hide();
			$('.lock-icon_1').show();
		}
	});
</script>


<!-- -------------------end------------------------------ -->
@endsection
