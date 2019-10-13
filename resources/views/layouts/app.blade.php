<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>{{ config('app.name', 'Laravel') }}</title>
	<link rel="shortcut icon" href="images/logo.ico" type="image/x-icon"/>
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
		@if(auth::user()->role=="admins")
		@include('admin.app')
	@endif
<!-- Dropdown Structure -->
<nav class="blue darken-2">
    <div class="nav-wrapper">
      <a href="/" class="brand-logo">{{ config('app.name', 'Laravel') }}</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
	  @guest
		<!-- <li><a class="waves-effect waves-light btn yellow accent-2 black-text modal-trigger" href="#modalRegister">Register</a></li> -->
		<li><a class="waves-effect waves-light btn   red lighten-2 modal-trigger" href="#modalLogin">Login</a></li>
	  @else
		{{-- <li><a class="waves-effect waves-light btn   yellow darken-2" href="/home">Profile</a></li> --}}
	    <li><a class="waves-effect waves-light btn   green lighten-2" href="/home">Settings</a></li>
		<li><a class="waves-effect waves-light btn   red lighten-2" href="/logout">Logout</a></li>
	  @endguest
      </ul>
    </div>
  </nav>
<ul class="sidenav grey darken-5" id="mobile-demo">
		@guest
			<!-- <li><a class="waves-effect waves-light btn yellow accent-2 black-text modal-trigger" href="#modalRegister">Register</a></li> -->
			<li><a class="waves-effect waves-light btn   red lighten-2 modal-trigger" href="#modalLogin">Login</a></li>
	  @else
			{{-- <li><a class="waves-effect waves-light btn   yellow darken-2" href="/home">Profile</a></li> --}}
	  	<li><a class="waves-effect waves-light btn   green lighten-2" href="/home">Settings</a></li>
			<li><a class="waves-effect waves-light btn   red lighten-2" href="/logout">Logout</a></li>
	  @endguest
</ul>

		<div class="row">
		
    <main class="" style="padding-bottom:10vh;">
      @yield('content')
    </main>
    </div>


	<div id="modalLogin" class="modal">
<div class="modal-content">
	<h4>Login</h4>
	<div class="row">
<form class="col s12" method="POST" action="{{ route('login') }}">
  @csrf
<label for="email">{{ __('E-Mail Address') }}</label>
  <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    @error('email')
    	<span class="invalid-feedback" role="alert">
    	    <strong>{{ $message }}</strong>
			</span>
			<br>
    @enderror
<br>
<label for="password">{{ __('Password') }}</label>
  <input id="password" type="password" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
		@error('password')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
			</span>
			<br>
		@enderror
</div>
  <div class="modal-footer">
	<button type="submit" class="waves btn ">
      {{ __('Login') }}
  </button>
</form>
  </div>
	</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>   
</body>
</html>


<script>
$(document).ready(function(){
	M.AutoInit()
	
	});
	</script>