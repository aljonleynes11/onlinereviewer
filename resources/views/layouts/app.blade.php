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
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	{{-- <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5da5af8dad0f870013829afb&product=inline-share-buttons" async="async"></script> --}}
	<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5da5af8dad0f870013829afb&product=sticky-share-buttons' async='async'></script>
</head>

<body>
	@auth
		@if(auth::user()->role=="admins")
			@include('admin.app')
		@endif
	@endauth
<!-- Dropdown Structure -->
<nav class="blue darken-2">
    <div class="nav-wrapper">
			<a href="/" class="brand-logo" style="padding:0px 0 0 10px;">
				{{ config('app.name', 'Laravel') }}
				{{-- padding:5px 0 0 5px;<img src="/images/logo9.png" class="hide-on-med-and-down "  height="50px" alt="">
				<img src="/images/logo9.png" class="show-on-small hide-on-med-and-up" style="margin: 5px 0 0 5px" height="30px" alt=""> --}}
			</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
	  @guest
		<!-- <li><a class="waves-effect waves-light btn yellow accent-2 black-text modal-trigger" href="#modalRegister">Register</a></li> -->
		<li><a class="waves-effect waves-light btn   red lighten-2 modal-trigger" href="#modalLogin">Login</a></li>
	  @else
		{{-- <li><a class="waves-effect waves-light btn   yellow darken-2" href="/home">Profile</a></li> --}}
		@if(auth::user()->role=='admins')

		<li><a class="waves-effect waves-light btn   green lighten-2" href="/home">Settings</a></li>
			@else 
			<li><a class="waves-effect waves-light btn   green lighten-2" href="/home">Dashboard</a></li>
			@endif
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
	  	<li><a class="waves-effect waves-light btn   green lighten-2" href="/home">Dashboard</a></li>
			<li><a class="waves-effect waves-light btn   red lighten-2" href="/logout">Logout</a></li>
	  @endguest
</ul>

		<div class="row">
		
    <main class="" style="padding-bottom:10vh;">
      @yield('content')
    </main>
    </div>

		<footer class="page-footer blue darken-2" style="margin-top:30vh">
				<div class="container">
					<div class="row">
						<div class="col l4 s12">
							<a href="/">
							<h5 class="white-text" >{{ config('app.name', 'Laravel') }}</h5>
						</a>
							<p class="grey-text text-lighten-4">We value education</p>
						</div>
						<div class="col l4 offset-l1 s12">
							<h5 class="white-text">Links</h5>
							<ul>
									<li><a class="grey-text text-lighten-3" href="/blog">Blogs</a></li>
								<li><a class="grey-text text-lighten-3" href="/civil-service-examination-review">CSE</a></li>
								<li><a class="grey-text text-lighten-3" href="#!">LET</a></li>
								<li><a class="grey-text text-lighten-3" href="#!">UPCAT</a></li>
								<li><a class="grey-text text-lighten-3" href="#!">Napolco</a></li>
								<li><a class="grey-text text-lighten-3" href="/submit-question" >Submit a question</a></li>
							</ul>
						</div>
						<div class="col l3 s12">
								<ul>
									<li><a class="grey-text text-lighten-3" href="/civil-service-examination-review">About us</a></li>
									<li><a class="grey-text text-lighten-3" href="#">Contact us</a></li>
								</ul>
							</div>
					</div>
				</div>
				<div class="footer-copyright red lighten-2">
					<div class="container ">
					<a class="grey-text text-lighten-4 right" href="#!">{{ config('app.name', 'Laravel') }}</a>
					</div>
				</div>
				<div class="footer-copyright yellow lighten-2 black-text">
						<div class="container black-text">
						{{-- ©  - Copyright Text --}}
					{{-- - 	{{ date('Y') }} --}}
					{{ config('app.name', 'Laravel') }}
						</div>
					</div>
			</footer>



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
@if(count($errors) > 0)
  @foreach($errors->all() as $error)
    <script>
      $(document).ready(function(){
        M.toast({html: "{{$error}}"}, 5000, 'green') 
      });
    </script>
  @endforeach
@endif
@if(Session::has('message'))
  <script>
    $(document).ready(function(){
    M.toast({html: "{{ Session::get('message') }}"}, 5000, 'green') 
    });
  </script>
@endif

<script>
$(document).ready(function(){
	M.AutoInit();
	
	});
	</script>

	<style>

@media only screen and (max-width: 1024px) {
  #toast-container {
    top: 0%;
  }
}
	</style>