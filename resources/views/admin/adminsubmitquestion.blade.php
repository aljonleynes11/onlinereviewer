@extends('layouts.app')

@section('content')
@include('admin.app')
<nav>
    <div class="nav-wrapper yellow lighten-2">
      <div class="col s12 ">
        <a href="/home" class="breadcrumb black-text ">Home</a>
        <a href="#" class="breadcrumb black-text ">Admin Submit A Question</a>
      </div>
    </div>
</nav>
<div class="container">
<div class="col m12 s12">
  <div class="center-align section ">
  <h5>Upon submission, the admin will review your submitted question<br>
  Thank you very much for contributing!</h5>
<small>Congratulations we have {{$count}} questions for CSE</small>
  </div>
</div>
@if(Session::has('message'))
  <script>
    $(document).ready(function(){
    M.toast({html: "{{ Session::get('message') }}"}, 5000, 'green') 
    });
  </script>
@endif
@if(count($errors) > 0)
  @foreach($errors->all() as $error)
    <script>
      $(document).ready(function(){
        M.toast({html: "{{$error}}"}, 5000, 'green') 
      });
    </script>
  @endforeach
@endif

<div class="row">
<div class="col m12 s12">

  <div class="section">
    <div class="center-align section">
    <small> Please select exam type </small>
    <form action="submit-question" method="POST" >
    @csrf
      <label>
        <input class="with-gap exam" name="examtype" type="radio" id="cse" value="cse" required/>
        <span>CSE</span>
      </label>
      <label>
        <input class="with-gap exam " disabled name="examtype" type="radio" id="let" value="let"/>
        <span>LET</span>
      </label>
      <label>
        <input class="with-gap exam "  disabled  name="examtype" type="radio" id="upcat" value="upcat"/>
        <span>UPCAT</span>
      </label>
      <label>
        <input class="with-gap exam "  disabled  name="examtype" type="radio" id="napolco" value="napolco"/>
        <span>NAPOLCO</span>
      </label>
        <p></p>
    
        <div id="subject"><p></p>
        <small> Choose Subject </small>
        
        <label>
        <input class="with-gap" name="subject" type="radio"  value="Math" required/>
        <span>Math</span>
      </label>
      <label>
        <input class="with-gap" name="subject" type="radio"  value="english"/>
        <span>English</span>
      </label>
      <label>
        <input class="with-gap" name="subject" type="radio" value="filipino"/>
        <span>Filipino</span>
      </label>
      <label>
        <input class="with-gap" name="subject" type="radio" value="logic"/>
        <span>Logic</span>
      </label>
      <label>
        <input class="with-gap" name="subject" type="radio" value="gen-ed"/>
        <span>General Education</span>
      </label>
        </div>    
    <div id="myform">
       <div class="input-field col s12">
          <input id="question" type="text" class="validate" name="question" required min="15" max="250">
          <label for="question">Question</label>
          <span class="helper-text" data-error="Wrong" data-success="Correct" ></span>
        </div>
      
        <div class="input-field col m6 s12">
          <input id="option1" type="text" class="validate" name="option1" id="option1" required max="25">
          <label for="option1">Choice 1</label>
          <span class="helper-text" data-error="Wrong" data-success="Correct"></span>
        </div>

        <div class="input-field col m6 s12">
          <input id="option2" type="text" class="validate options" name="option2" id="option2"  required max="25">
          <label for="option2">Choice 2</label>
          <span class="helper-text" data-error="Wrong" data-success="Correct"></span>
        </div>

        <div class="input-field col m6 s12">
          <input id="option3" type="text" class="validate options" name="option3" id="option3"  required max="25">
          <label for="option3">Choice 3</label>
          <span class="helper-text" data-error="Wrong" data-success="Correct"></span>
        </div>

        <div class="input-field col m6 s12">
          <input id="option4" type="text" class="validate options" name="option4" id="option4"  required max="25">
          <label for="option4">Choice 4</label>
          <span class="helper-text" data-error="Wrong" data-success="Correct"></span>
        </div>

        <div class="input-field col m6 s12">
          <input id="answer" type="text" class="validate options" name="answer"  required max="25" min="3">
          <label for="answer">Answer</label>
          <span class="helper-text" data-error="Wrong" data-success="Correct" ></span> 
          <small id="smverify" class="red-text"> Make sure one of the options is same with the answer </small>
        </div>

        <input id="publish" type="text" class="validate options" name="publish"  value="1" style="display:none">
        {{-- <div id="input-check">
        <div class="g-recaptcha col m6 s12" data-sitekey="6LdzFb0UAAAAAE4D6p_xIboB2Eb9CtbwmuQPIF6O" required>
        </div>
        
        </div> --}}
        <button id="submit" class="waves-effect waves-dark btn disabled" style="float:right; margin-top:2%;">Submit</a>
        </div>
      </form>
<!-- end form-->




      </div>
    </div>
  </div>
</div>



@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>

$(document).ready(function(){
  
  $(document).keypress(
  function(event){
    if (event.which == '13') {
      event.preventDefault();
    }
});

$("#subject").hide();


$('.exam').click(function() {
   if($('#cse').is(':checked'))
    {
      $("#subject").fadeIn();
      
    }
});

// $('#subject').click(function() {
//    if($('#option1').is(':checked'))
//     {
//       $("#myform").fadeIn();
      
//     }
// });

// $("#check").click(function(){
  $("#answer").change(function(){
    var a=$("#answer").val();
    console.log(a)

  if($("#answer").val()==$("#option1").val() || $("#answer").val()==$("#option2").val() || $("#answer").val()==$("#option3").val() || $("#answer").val()==$("#option4").val())
  {
    $("#submit").removeClass("disabled");
    $("#smverify").addClass("green-text");
  }
   else if($("#answer").val()!=$("#option1").val() || $("#answer").val()!=$("#option2").val() || $("#answer").val()!=$("#option3").val() || $("#answer").val()!=$("#option4").val())
   {
     $("#submit").addClass("disabled");
 
   } 
  else
  {
   M.toast({html: "Please make sure one of the options is same with the answer"}, 5000, 'green') 
  }
  

});

});

window.onload = function() {
    var $recaptcha = document.querySelector('#g-recaptcha-response');

    if($recaptcha) {
        $recaptcha.setAttribute("required", "required");
    }
};

</script>

<style>
#g-recaptcha-response {
    display: block !important;
    position: absolute;
    margin: -78px 0 0 0 !important;
    width: 302px !important;
    height: 76px !important;
    z-index: -999999;
    opacity: 0;
}

</style>