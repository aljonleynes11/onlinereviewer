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
      </div>
    </div>
</nav>
<div class="row section">
  <div class="col m3 pd-1 mg-t2 s12">
    
  </div>
    <div class="col m6 pd-1 mg-t2 s12">
<table>
  <tr>
      <div class="card white z-depth-5">
          <div class="card-content dark-text">
            <span class="card-title">English</span>
           
          </div>
          <div class="card-action right-align">
          @auth
            
            @endauth
            <a href="/civil-service-examination-review-english" class="waves-effect waves-yellow red Lighten-2 btn-small">Take Quiz
            <i class="material-icons right">send</i></a>
          </div>
        </div>
  </tr>

  <tr>
      <div class="card  white z-depth-5">
          <div class="card-content dark-text">
            <span class="card-title">General Education</span>
           
          </div>
          <div class="card-action right-align">
          
            <a href="/civil-service-examination-review-general-education" class="waves-effect waves-light red Lighten-2 btn-small">Take Quiz
            <i class="material-icons right">send</i></a>
          </div>
        </div>

  </tr>

  <tr>
      <div class="card grey darken-1  z-depth-5">
          <div class="card-content black-text">
            <span class="card-title">Math</span>
           
          </div>
          <div class="card-action right-align">
         
            <a href="/civil-service-examination-review-math" class="waves-effect waves-yellow red Lighten-2 btn-small">Unavailable
            <i class="material-icons right">error</i></a>
          </div>
        </div>

  </tr>

  <tr>

      <div class="card grey darken-1  z-depth-5">
          <div class="card-content dark-text">
            <span class="card-title">Filipino</span>
           
          </div>
          <div class="card-action right-align">
         
            <a href="/civil-service-examination-review-filipino" class="waves-effect waves-light red Lighten-2 btn-small">Not Enough Questions
            <i class="material-icons right">error</i></a>
          </div>
        </div>
  </tr>

  <tr>
    	<div class="card grey darken-1  z-depth-5">
          <div class="card-content dark-text">
            <span class="card-title">Logic</span>
           
          </div>
          <div class="card-action right-align">
         
            <a href="#" class="waves-effect waves-light red Lighten-2 btn-small"
            onclick="M.toast({html: 'Coming Soon'})">Not Enough Questions
            <i class="material-icons right">error</i></a>
          </div>
        </div>
  </tr>

  <tr>
      <div class="card grey darken-1  z-depth-5">
          <div class="card-content dark-text">
            <span class="card-title">Mockup Exam</span>
           
          </div>
          <div class="card-action right-align">
         
            @auth
            <a href="civil-service-examination-review-mockup-quiz" class="waves-effect waves-light red Lighten-2 btn-small  modal-trigger">Not Enough Questions 
               
               {{-- <a href="#modalMockup" class="waves-effect waves-light red Lighten-2 btn-small  modal-trigger">Not Enough Questions  --}}
            @else
            <a href="#modalLogin" class="waves-effect waves-light red Lighten-2 btn-small  modal-trigger">Not Enough Questions
            @endauth 
            
            
              <i class="material-icons right">error</i></a>
          </div>
        </div>
  </tr>

  <tr>
      <div class="card  white z-depth-5">
          <div class="card-content dark-text">
            <span class="card-title">Review Materials</span>
           
          </div>
          <div class="card-action right-align">
         
            <a href="#" class="waves-effect waves-light red Lighten-2 btn-small"
            onclick="M.toast({html: 'Coming Soon'})">Go
            <i class="material-icons right">send</i></a>
          </div>
        </div>
    
  </tr>

  <tr>
      <div class="card z-depth-3 red lighten-2 center-align section ">
          <div class="card z-depth-5 ">
          <span class="card-title">Taking these quizzes won't guarantee of you passing the Exam<br>
          Hence, It will only increase your chance of passing the exam. Goodluck!</span>
          </div>
          </div>
  </tr>

  <tr>
      <div class="card-panel z-depth-3">
          <h3>CSE Requirements</h3>
          <ul>
            <li> Must be Filipino citizens</li>
            <li>At least 18 years old</li>
            <li>Good moral character and have no criminal record or have not been convicted by final judgment of an offense or crime involving moral turpitude;</li>
            <li>Have not been dishonorably discharged from military service or dismissed for cause from any civilian position in the government</li>
            <li>Have not taken the same level of CS exam within 3 months from last examination taken.</li>
            <br><li><strong><b>Everyone can apply regardless of educational attainment</strong></b></li><br>
            <li>The law has changed and it is great news now that regardless of college degree or education attainment, anyone who meet the requirements can apply.</li>
          </ul>
        </div>
  </tr>

  <tr>
      <div class="card-panel z-depth-3">
          <h3>Documents Requirements</h3>
            <ul>
              <li>Application Form called CSC Form 100 and fill it out with your personal information</li>
              <li>4 pieces of (4.5 cm x 3.5 cm or 1.8 inches x 1.4 inches) Passport Sized Photos with name tag and signature, taken at the recent 3 months from the time of application</li>
              <li>Exam Fees – P500 for PPT; P600 for COMEX (as of 2019)</li>
              <li>Valid IDs – Driver’s License, SSS, GSIS, Philhealth, UMID, current Company/Office ID, current School ID, Postal ID, BIR ID, Barangay ID, Voter’s ID, Valid Passport, or Police Clearance</li>
              <li>Appointment Letter received through email – for CSC-COMEX only</li>
            </ul>
          </div>
        </div>
  </tr>
</table>
</div>
<div class="col m3 pd-1 mg-t2 s12">
  
</div>

</div>
<!-- Modal Trigger -->


<!-- Modal Structure -->
{{-- <div id="modalMockup" class="modal">
  <div class="modal-content">
    <h4>Verification</h4>
    <div class="col m12 center-align" style="margin: 3vh 1vw; padding:1vh 1vw">
      <form action="">
      <div class="g-recaptcha " data-sitekey="6LdzFb0UAAAAAE4D6p_xIboB2Eb9CtbwmuQPIF6O" required></div>
    </div>
  </div>

  </div>
</div>
         --}}


@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
   $(document).ready(function(){

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