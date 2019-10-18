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


<div class="row">
<div class="col m12 s12">

  <div class="section">
    <div class="center-align section">
    <small> Please select exam type </small>
    <form action="/civil-service-examination-review/{{$myquestion->id}}" method="POST">
      @method('PATCH')

      @csrf
    <div id="myform">
       <div class="input-field col s12">
          <input id="question" type="text" class="validate" name="question" value="{{$myquestion->question}}"required min="15" max="250">
          <label for="question">Question</label>
          <span class="helper-text" data-error="Wrong" data-success="Correct" ></span>
        </div>
      
        <div class="input-field col m6 s12">
          <input id="option1" type="text" class="validate" name="option1" id="option1" value="{{$myquestion->option1}}" required >
          <label for="option1">Choice 1</label>
          <span class="helper-text" data-error="Wrong" data-success="Correct"></span>
        </div>

        <div class="input-field col m6 s12">
          <input id="option2" type="text" class="validate options" name="option2" id="option2" value="{{$myquestion->option2}}" required >
          <label for="option2">Choice 2</label>
          <span class="helper-text" data-error="Wrong" data-success="Correct"></span>
        </div>

        <div class="input-field col m6 s12">
          <input id="option3" type="text" class="validate options" name="option3" id="option3" value="{{$myquestion->option3}}" required >
          <label for="option3">Choice 3</label>
          <span class="helper-text" data-error="Wrong" data-success="Correct"></span>
        </div>

        <div class="input-field col m6 s12">
          <input id="option4" type="text" class="validate options" name="option4" id="option4" value="{{$myquestion->option4}}" required >
          <label for="option4">Choice 4</label>
          <span class="helper-text" data-error="Wrong" data-success="Correct"></span>
        </div>

        <div class="input-field col m6 s12">
          <input id="answer" type="text" class="validate options" name="answer"  required  min="3" value="{{$myquestion->answer}}">
          <label for="answer">Answer</label>
          <span class="helper-text" data-error="Wrong" data-success="Correct" ></span> 
          <small id="smverify" class="red-text"> Make sure one of the options is same with the answer </small>
        </div>

        <input id="publish" type="text" class="validate options" name="publish"  value="1" style="display:none">
        {{-- <div id="input-check">
        <div class="g-recaptcha col m6 s12" data-sitekey="6LdzFb0UAAAAAE4D6p_xIboB2Eb9CtbwmuQPIF6O" required>
        </div>
        
        </div> --}}
        <button id="submit" class="waves-effect waves-dark btn" style="float:right; margin-top:2%;">Submit</a>
        </div>
      </form>
<!-- end form-->




      </div>
    </div>
  </div>
</div>



@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
