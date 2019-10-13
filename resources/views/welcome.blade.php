<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>{{ config('app.name', 'Laravel') }}</title>
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<link rel="shortcut icon" href="images/logo.ico" type="image/x-icon"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
</head>
@if(auth::user()->role=="admins")
  @include('admin.app')
@endif
<body>
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
      <li class=""><a class="btn" href="#">{{auth::user()->name}}</a></li>
	    <li><a class="waves-effect waves-light btn   green lighten-2" href="/home">Settings</a></li>
		<li><a class="waves-effect waves-light btn   red lighten-2" href="/logout">Logout</a></li>
	  @endguest
      </ul>
    </div>
  </nav>
<ul class="sidenav" id="mobile-demo">
		@guest
			<!-- <li><a class="waves-effect waves-light btn yellow accent-2 black-text modal-trigger" href="#modalRegister">Register</a></li> -->
			<li><a class="waves-effect waves-light btn   red lighten-2 modal-trigger" href="#modalLogin">Login</a></li>
	  @else
          {{-- <li><a class="waves-effect waves-light btn   yellow darken-2" href="/home">Profile</a></li> --}}
          <li class=""><a class="btn" href="#">{{auth::user()->name}}</a></li>
	     	<li><a class="waves-effect waves-light btn   green lighten-2" href="/home">Settings</a></li>
			<li><a class="waves-effect waves-light btn   red lighten-2" href="/logout">Logout</a></li>
	  @endguest
</ul>

	 <div class="carousel carousel-slider center">
    <div class="carousel-item red lighten-2 white-text" href="#one!">
      <h2>News 1</h2>
      <p class="white-text">This is your first panel</p>
    </div>
    <div class="carousel-item blue darken-2 white-text" href="#two!">
      <h2 class="">News 2</h2>
      <p class="white-text">This is your second panel</p>
    </div>
    <div class="carousel-item yellow lighten-2 black-text" href="#three!">
      <h2 class="">News 3</h2>
      <p class="black-text">This is your third panel</p>
    </div>
    <div class="carousel-item green darken-3 white-text" href="#four!">
      <h2>News 4</h2>
      <p class="white-text">This is your fourth panel</p>
    </div>
		<div class="carousel-item teal white-text" href="#five!">
      <h2>News 5</h2>
      <p class="white-text">This is your Fifth panel</p>
    </div>
  </div> 
  {{-- <div class="carousel">
      <a class="carousel-item" href="#one!"><img src="https://lorempixel.com/250/250/nature/1"></a>
      <a class="carousel-item" href="#two!"><img src="https://lorempixel.com/250/250/nature/2"></a>
      <a class="carousel-item" href="#three!"><img src="https://lorempixel.com/250/250/nature/3"></a>
      <a class="carousel-item" href="#four!"><img src="https://lorempixel.com/250/250/nature/4"></a>
      <a class="carousel-item" href="#five!"><img src="https://lorempixel.com/250/250/nature/5"></a>
    </div> --}}
<nav>
    <div class="nav-wrapper red lighten-2">
      <a href="#" class="brand-logo right hide-on-med-and-down">{{ config('app.name', 'Laravel') }}</a>
      <ul id="nav-mobile" class="left ">
        <li><a href="/civil-service-examination">CSE</a></li>
        <li><a href="#">LET</a></li>
        <li><a href="#">UPCAT</a></li>
		<li><a href="#">Napolcom</a></li>
      </ul>
    </div>
  </nav>
  <nav>
    <div class="nav-wrapper yellow lighten-2">
      
      <ul id="nav-mobile black-text" class="left ">
        <li><a href="/submit-question" class="black-text">Submit a Question</a></li>
        <li><a href="#" class="black-text">Blogs</a></li>
      </ul>
    </div>
  </nav>


<div class="row " style="margin-top:10vh">
<!-- <div class="col m12 sm12 " style=" padding-bottom: 15rem;background-image: linear-gradient(-20deg, #2b5876 0%, #4e4376 100%);" id="wavy2">
		<h1>asdfasdfasdfasdf</h1>
	</div> -->
  <div class="col m4 center-align">
	<h3>Want to help and submit a question?</h3>
  <a href="/submit-question" class="waves-effect waves-red yellow lighten-2 black-text btn-large z-depth-5 ">
  Submit now!
  <i class="material-icons right">add</i></a>
	</div>

  <div class="col m4 center-align">
  <h3>Looking for PH Exams Reviewer Online?</h3>
  <p></p>
  <a href="/get-started" class=" waves-effect waves-red red lighten-2 btn-large z-depth-5 "> 
  Take Quiz
  <i class="material-icons right">send</i></a>
 </div>

 <div class="col m4 center-align">
  <h3>Review Materials for PH Exams?</h3>
  <p></p>
  <a href="#" class=" waves-effect waves-red blue lighten-2 btn-large z-depth-5 "> 
  Review
  <i class="material-icons right">send</i></a>
 </div>

<div class="divider"></div>

 <div class="col m12 center-align" style="margin-top:10vh; padding-bottom:10vh;">
    <h4 id="typehere" class="" style="text-shadow: 40px -29px 4px #1976D2, 40px 28px 4px #E57373;"></h4>
   </div>
  
  
<!--start modal register-->


<!-- end modal -->
</div>
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
<script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script> 
<script>
 
	$(document).ready(function(){
		$('.carousel').carousel();
		setInterval(function() {
    $('.carousel').carousel('next');
  }, 4500); // every 2 seconds
  M.AutoInit()
		 
		$('.carousel.carousel-slider').carousel({

	});
	
var app = document.getElementById('typehere');

var typewriter = new Typewriter(app, {
  loop: true,
  delay: 35,
});

typewriter
.pauseFor(1500)
.typeString('Civil Service Examination Review (CSE)')
.pauseFor(1500)
.deleteChars(50)
.typeString('Licensure Examination Reviewer (LET)')
.pauseFor(1500)
.deleteChars(50)
.typeString('PNP Entrance Exam Reviewer (NAPOLCO)')
.pauseFor(1500)
.deleteChars(50)
.typeString('UP College Admission Test Reviewer (UPCAT)')
.pauseFor(1500)
.deleteChars(50)

.pauseFor(1000)
.start();
	});
	



</script>
</body>
</html>

<style>

.responsive-img{
  object-fit: scale-down;
	max-height:20vh;
	display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}


</style>