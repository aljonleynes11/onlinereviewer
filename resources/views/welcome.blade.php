@extends('layouts.app')

@section('content')


@if(count($getblog5) > 0)
   {{-- <div class="carousel carousel-slider center " style="height:25vh;">
    <div class="carousel-item red lighten-2 white-text" href="#one!">
    <a href="/blog/{{$getblog5->get(0)->id}}-{{$getblog5->get(0)->title}}" class="white-text">
      <h2>{{$getblog5->get(0)->title}}</h2>
    <p class="white-text">{{str_limit($getblog5->get(0)->title, 100, '  Read more')}}</p>
      </a>
    </div>
    <div class="carousel-item blue darken-2 white-tex " href="#two!">
        <a href="/blog/{{$getblog5->get(1)->id}}-{{$getblog5->get(1)->title}}" class="white-text">
      <h2 class="">{{$getblog5->get(1)->title}}</h2>
      <p class="white-text">{{str_limit($getblog5->get(1)->title, 100, '  Read more')}}</p>
        </a>
    </div>
    <div class="carousel-item yellow lighten-2 black-text " href="#three!">
        <a href="/blog/{{$getblog5->get(2)->id}}-{{$getblog5->get(2)->title}}" class="black-text">
      <h2 class="">{{$getblog5->get(2)->title}}</h2>
      <p class="black-text">{{str_limit($getblog5->get(2)->title, 100, '  Read more')}}</p>
        </a>
    </div>
    <div class="carousel-item green darken-3 white-text " href="#four!">
        <a href="/blog/{{$getblog5->get(3)->id}}-{{$getblog5->get(3)->title}}" class="white-text">
      <h2>{{$getblog5->get(3)->title}}</h2>
      <p class="white-text">{{str_limit($getblog5->get(3)->title, 100, '  Read more')}}</p>
        </a>
    </div>
		<div class="carousel-item teal white-text " href="#five!">
        <a href="/blog/{{$getblog5->get(4)->id}}-{{$getblog5->get(4)->title}}" class="white-text">
      <h2>{{$getblog5->get(4)->title}}</h2>
      <p class="white-text">{{str_limit($getblog5->get(4)->title, 100, '  Read more')}}</p>
        </a>
    </div>
  </div>  --}}
  <div class="slider">
    <ul class="slides">
     
      <li class="teal">
          
        <a href="/blog/{{$getblog5->get(2)->id}}-{{$url2}}">
        <!--  <img src="http://lorempixel.com/580/250/nature/1"> -- random image -->
          <div class="caption center-align">
            <h3>{{str_limit($getblog5->get(2)->title, 100, '... ')}} </h3>
            <h5 class="light grey-text text-lighten-3">{!!str_limit($getblog5->get(2)->body, 100, '...  Read more ')!!}</h5>
          </div>
        </a>
      </li>
   
      <li class="blue darken-2">
          {{-- @php
          $url=str_replace(' ', '-', urldecode($getblog5->get(0)->title))
         @endphp --}}
          <a href="/blog/{{$getblog5->get(0)->id}}-{{$url0}}">
       <!-- <img src="http://lorempixel.com/580/250/nature/2">  random image -->
        <div class="caption left-align">
          <h3>{{str_limit($getblog5->get(0)->title, 100, '... ')}}</h3>
          <h5 class="light grey-text text-lighten-3">{!!str_limit($getblog5->get(0)->body, 100, '...  Read more ')!!}</h5>
        </div>
      </a>
      </li>

      <li class="red lighten-2">
          {{-- @php
          $url1=str_replace(' ', '-', urldecode($getblog5->get(1)->title))
         @endphp --}}
      <a href="/blog/{{$getblog5->get(1)->id}}-{{$url1}}">
     <!--   <img src="http://lorempixel.com/580/250/nature/3">  random image -->
        <div class="caption right-align ">
          <h3 class="">{{str_limit($getblog5->get(1)->title, 100, '... ')}}</h3>
          <h5 class="">{!!str_limit($getblog5->get(1)->body, 100, '...  Read more ')!!}</h5>
        </div>
      </a>
      </li>

       <li class="orange darken q-2">
          
          <a href="/blog/{{$getblog5->get(3)->id}}-{{$url3}}">
          <!--  <img src="http://lorempixel.com/580/250/nature/1"> -- random image -->
            <div class="caption center-align">
              <h3>{{str_limit($getblog5->get(3)->title, 100, '... ')}} </h3>
              <h5 class="light grey-text text-lighten-3">{!!str_limit($getblog5->get(3)->body, 100, '...  Read more ')!!}</h5>
            </div>
          </a>
        </li>

        <li class="green darken-2">
         
            <a href="/blog/{{$getblog5->get(4)->id}}-{{$url4}}">
         <!-- <img src="http://lorempixel.com/580/250/nature/2">  random image -->
          <div class="caption left-align">
            <h3>{{str_limit($getblog5->get(4)->title, 100, '... ')}}</h3>
            <h5 class="light grey-text text-lighten-3">{!!str_limit($getblog5->get(4)->body, 100, '...  Read more ')!!}</h5>
          </div>
        </a>
        </li> 

    </ul>
  </div>
@endif
<nav style="">
    <div class="nav-wrapper red lighten-2 t">
      <a href="#" class="brand-logo right hide-on-med-and-down" style="padding 0 10px 0 0">{{ config('app.name', 'Laravel') }}</a> 
      {{-- <a href="#" class="brand-logo right " style="padding:5px 0 0 5px;"><img src="/images/logo9.png" class="hide-on-med-and-down" height="50px" alt=""></a> --}}
      <ul id="nav-mobile" class="left ">
        <li><a href="/civil-service-examination-review" class="">CSE</a></li>
        <li><a href="#!" class="" onclick="M.toast({html: 'Coming Soon'})">LET</a></li>
        <li><a href="#!" class="" onclick="M.toast({html: 'Coming Soon'})">UPCAT</a></li>
		<li><a href="#!" onclick="M.toast({html: 'Coming Soon'})">Napolcom</a></li>
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
  <a href="/submit-question" class="waves-effect waves-red yellow  lighten-2 black-text btn-large z-depth-5 ">
  Submit now!
  <i class="material-icons right">add</i></a>
	</div>

  <div class="col m4 center-align">
  <h3>Looking for PH Exams Reviewer Online?</h3>
  <p></p>
  <a href="/get-started" class=" waves-effect waves-red red pulse lighten-2 btn-large z-depth-5 "> 
  Take Quiz
  <i class="material-icons right">send</i></a>
 </div>

 <div class="col m4 center-align">
  <h3>Review Materials for PH Exams?</h3>
  <p></p>
  <a href="#" class=" waves-effect waves-red blue lighten-2  btn-large z-depth-5 "> 
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
<div class="row section " style="margin: 3vh 3vw; padding:3vh 3vw;">
<h3>Blogs</h3>
<div class="divider" style="margin-bottom:5vh"></div>

@foreach ($getblog5 as $item)
<div class="col m5 card section container" id="mobile1">
<span class="card-title">    {{str_limit($item->title, 30, ' ..' )}} </span>
  {{-- <div class="col m5 card s12" id="mobile1">
  <span class="card-title"> {{str_limit($item->title, 30, ' ..' )}} </span>
  {!!str_limit($item->body, 30, ' ..  <span class="blue-text"> Read more </span>' )!!}
 
  </div> --}}
  <div class="card-action right-align">  
    @php
    $url=str_replace(' ', '-', urldecode($item->title))
   @endphp
<a href="/blog/{{$item->id}}-{{$url}}" class="white-text btn black"> Read </a>
</div>
    
 
</div>
@endforeach
@endif

</div>





</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
<script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script> 
<script>


	$(document).ready(function(){
    $('.slider').slider();
    $('.slider').slider('next');
		setInterval(function() {
    $('.slider').slider('next');
 
  }, 2500); // every 2 seconds
  M.AutoInit()
  $('.slider').slider({
    indicators: false
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

.slider .indicators .indicator-item {
  background-color: #666666;
  border: 3px solid #ffffff;
  
}
.slider .indicators .indicator-item.active {
  background-color: #ffffff;

}
.slider {
  width: 20vw;
  margin: 0 auto;
  
}
.slider .indicators {
  z-index: 100;
  /* text-align: left; */

}
#mobile1{
  padding: 3vh 2vw 3vh 2vw; margin: 2vh 2vw
}

@media only screen and (max-width: 600px) {
  #mobile1{
  padding: 3vh 2vw 0 5vw; margin: 2vh 2vw
}

}
</style>