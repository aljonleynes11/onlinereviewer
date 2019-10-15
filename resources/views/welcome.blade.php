@extends('layouts.app')

@section('content')


@if(count($getblog5) > 0)
	 <div class="carousel carousel-slider center">
    <div class="carousel-item red lighten-2 white-text" href="#one!">
    <a href="/blog/{{$getblog5->get(0)->id}}-{{$getblog5->get(0)->title}}" class="white-text">
      <h2>{{$getblog5->get(0)->title}}</h2>
    <p class="white-text">{{str_limit($getblog5->get(0)->title, 100, '  Read more')}}</p>
      </a>
    </div>
    <div class="carousel-item blue darken-2 white-text" href="#two!">
        <a href="/blog/{{$getblog5->get(1)->id}}-{{$getblog5->get(1)->title}}" class="white-text">
      <h2 class="">{{$getblog5->get(1)->title}}</h2>
      <p class="white-text">{{str_limit($getblog5->get(1)->title, 100, '  Read more')}}</p>
        </a>
    </div>
    <div class="carousel-item yellow lighten-2 black-text" href="#three!">
        <a href="/blog/{{$getblog5->get(2)->id}}-{{$getblog5->get(2)->title}}" class="black-text">
      <h2 class="">{{$getblog5->get(2)->title}}</h2>
      <p class="black-text">{{str_limit($getblog5->get(2)->title, 100, '  Read more')}}</p>
        </a>
    </div>
    <div class="carousel-item green darken-3 white-text" href="#four!">
        <a href="/blog/{{$getblog5->get(3)->id}}-{{$getblog5->get(3)->title}}" class="white-text">
      <h2>{{$getblog5->get(3)->title}}</h2>
      <p class="white-text">{{str_limit($getblog5->get(3)->title, 100, '  Read more')}}</p>
        </a>
    </div>
		<div class="carousel-item teal white-text" href="#five!">
        <a href="/blog/{{$getblog5->get(4)->id}}-{{$getblog5->get(4)->title}}" class="white-text">
      <h2>{{$getblog5->get(4)->title}}</h2>
      <p class="white-text">{{str_limit($getblog5->get(4)->title, 100, '  Read more')}}</p>
        </a>
    </div>
  </div> 
@endif
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
        <li><a href="/blog" class="black-text">Blogs</a></li>
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
<div class="col m12 center-align">

<h3>We have {{$count}} questions for you!</h3>

</div>
</div>
@if(count($getblog5) > 0)
<div class="row" style="margin: 3vh 3vw; padding:3vh 3vw;">
  <h3>Blogs</h3>
  <div class="divider" style="margin-bottom:5vh"></div>
  @foreach ($getblog5 as $item)
  <div class="col m4 card s12" style="padding: 2vh 2vw 0 1vw;" >
  <span class="card-title"> {{str_limit($item->title, 30, ' ..' )}} </span>
  {!!str_limit($item->body, 30, ' ..  <span class="blue-text"> Read more </span>' )!!}
  <div class="card-action right">  
  <a href="/blog/{{$item->id}}-{{$item->title}}" class="white-text btn black"> Read </a>
  </div>
  </div>
  
  @endforeach
  @endif


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
.typeString('Civil Service Examination Reviewer (CSE)')
.pauseFor(1500)
.deleteChars(50)
.typeString('Licensure Examination for Teachers Reviewer (LET)')
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


@endsection



<style>

.responsive-img{
  object-fit: scale-down;
	max-height:20vh;
	display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}

a{
  text-decoration:none;
}
</style>