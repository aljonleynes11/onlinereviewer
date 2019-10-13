@extends('layouts.app')

@section('content')

<nav>
    <div class="nav-wrapper yellow darken-2">
      <div class="col s12 ">
        <a href="/" class="breadcrumb black-text ">Home</a>
        <a href="#" class="breadcrumb black-text ">Submit A Question</a>
      </div>
    </div>
</nav>
<div class="container">
<div class="col m12 s12">
  <div class="center-align section ">
  <h5>Upon submission, the admins will review your submitted question<br>
  Thank you very much for contributing!</h5>

  </div>
</div>

<div class="row">
<div class="col m12 s12">
  <div class="section">
    <div class="center-align section">
    <small> Please select question type </small>
    <form action="#">
      <label>
        <input class="with-gap" name="group3" type="radio" id="cse" />
        <span>CSE</span>
      </label>
      <label>
        <input class="with-gap" name="group3" type="radio" id="let"/>
        <span>LET</span>
      </label>
      <label>
        <input class="with-gap" name="group3" type="radio" id="upcat" />
        <span>UPCAT</span>
      </label>
      <label>
        <input class="with-gap" name="group3" type="radio" id="napolco" />
        <span>NAPOLCO</span>
      </label>
    </form>
    <form id="cseform">
       <div class="input-field col s12">
          <input id="question" type="text" class="validate" data-length="10">
          <label for="question">Question</label>
          <span class="helper-text" data-error="wrong" data-success="right" ></span>
        </div>
      
        <div class="input-field col s6">
          <input id="option1" type="text" class="validate">
          <label for="option1">Choice 1</label>
          <span class="helper-text" data-error="wrong" data-success="right"></span>
        </div>

        <div class="input-field col s6">
          <input id="option2" type="text" class="validate">
          <label for="option2">Choice 2</label>
          <span class="helper-text" data-error="wrong" data-success="right"></span>
        </div>

        <div class="input-field col s6">
          <input id="option3" type="text" class="validate">
          <label for="option3">Choice 3</label>
          <span class="helper-text" data-error="wrong" data-success="right"></span>
        </div>

        <div class="input-field col s6">
          <input id="option4" type="text" class="validate">
          <label for="option4">Choice 4</label>
          <span class="helper-text" data-error="wrong" data-success="right"></span>
        </div>

        <button id="submit" class="waves-effect waves-dark btn" style="float:right; margin-top:8%;">Submit</a>
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
  

});

</script>