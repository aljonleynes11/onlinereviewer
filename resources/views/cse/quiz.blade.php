@extends('layouts.app')

@section('content')
<nav>
    <div class="nav-wrapper red lighten-2">
      <div class="col s12">
	  <a href="/" class="breadcrumb">Home</a>
			@auth
        <a href="/home" class="breadcrumb">Exams</a>
				@else
				<a href="/get-started" class="breadcrumb">Exams</a>
				@endauth
        <a href="civil-service-examination" class="breadcrumb">CSE</a>
				<a href="#" class="breadcrumb">{{$page}}</a>
      </div>
    </div>
</nav>


<div class="container" style="margin-top:8%">
<div class="card-panel center-align  grey  lighten-5" id="score" style="display:none">
<h4 id="showmyscore"></h4>
<a href="/civil-service-examination-{{$page}}" class="waves-effect waves-purple btn-small z-depth-5">Try again</a>
</div>
<div id="questions">
<div class="row">
		@foreach($myquestions as $i=>$questions)
		<form action="">
		<div class="card-panel  grey z-depth-5 lighten-5" id="hover">
			<h5>{{$i+1}}.)      {{$questions->question}}</h5>	
			<label class=""><input name="options{{$i}}" type="radio" id="optionsA{{$i}}" value="{{$questions->option1}}" class="option required with-gap" required/><span class="dark-text with-gap">{{$questions->option1}}</span></label>
			<div class="divider "></div>
			<label class=""><input name="options{{$i}}" type="radio" id="optionsB{{$i}}" value="{{$questions->option2}}" class="option required with-gap"/><span class="dark-text with-gap">{{$questions->option2}}</span></label>
			<div class="divider "></div>
			<label class=""><input name="options{{$i}}" type="radio" id="optionsC{{$i}}" value="{{$questions->option3}}" class="option required with-gap"/><span class="dark-text with-gap">{{$questions->option3}}</span></label>
			<div class="divider "></div>
			<label class=""><input name="options{{$i}}" type="radio" id="optionsD{{$i}}" value="{{$questions->option4}}" class="option required with-gap"/><span class="dark-text with-gap">{{$questions->option4}}</span></label>
			<div class="divider "></div>
			 <p id="answer{{$i}}" class="answer" style="display:none">{{$questions->answer}}</p>
		</div>
		</form>
		
		@endforeach
		</div>
	<button id="submit" class="waves-effect waves-dark btn" style="float:right; margin-top:8%;">Submit</a>
</div>
</div>
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
	var questionslength = {!! json_encode($myquestions->count()) !!};

$(document).ready(function(){

	var score=0;
	var storeanswer = [];
	var myans = [];
	for (i = 0; i < questionslength; i++) {
		storeanswer.push([$("#answer"+i).text()]);
	}
	console.log(storeanswer[0]);
	console.log(storeanswer[1]);
	$("#submit").click(function(){
	$(':radio:checked').each(function(){
			myans.push($(this).val());
	});
	console.log(myans);
	for (i = 0; i < storeanswer.length; i++) {
		if( storeanswer[i] == myans[i])
		{
		score++
		}
	}
	console.log(score);

	$("#score").fadeIn(2500);
	$(".answer").show();
	$("#submit").hide();
	window.scrollTo({ top: 0, behavior: 'smooth' });

	if(score>=8)
		{
			$("#showmyscore").text("Congratulations your score is "+score)
		}
	else
		{
			$("#showmyscore").text("Your score is "+score)
		}
	});

});


</script>


<style>

[type="radio"]:checked + span:after,
 
[type="radio"].with-gap:checked + span:before,
 
[type="radio"].with-gap:checked + span:after {
 
  border: 2px solid #ef5350;
 
}
</style>