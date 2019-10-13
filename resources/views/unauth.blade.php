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

      </div>
    </div>
</nav>


<div class="container section">
<div class="col m12 s12">
	<div class="card white z-depth-5">
    <div class="card-content dark-text center-align">
      <span class="card-title">Civil Service Examination ( CSE )
      <a href="/civil-service-examination" class="right-align waves-effect waves-yellow red lighten-2 btn-small">Take Quiz
      <i class="material-icons right">send</i></a></span>
    </div>
  </div>
</div>

<div class="col m4 s12">
	<div class="card white z-depth-5">
    <div class="card-content dark-text center-align">
      <span class="card-title">Licensure Examination for Teachers ( LET )
      <a href="#" class="right-align waves-effect waves-yellow red lighten-2 btn-small">Coming Soon
      <i class="material-icons right">send</i></a></span>
    </div>
  </div>
</div>

<div class="col m4 s12">
	<div class="card white z-depth-5">
    <div class="card-content dark-text center-align">
      <span class="card-title">UP College Admission Test ( UPCAT )
      <a href="#" class="right-align waves-effect waves-yellow red lighten-2 btn-small">Coming Soon
      <i class="material-icons right">error</i></a></span>
    </div>
  </div>
</div>

<div class="col m4 s12">
	<div class="card white z-depth-5">
    <div class="card-content dark-text center-align">
      <span class="card-title">PNP Entrance Exam <br> ( Napolco )
      <a href="#" class="right-align waves-effect waves-yellow red lighten-2 btn-small">Coming Soon
      <i class="material-icons right">error</i></a></span>
    </div>
  </div>
</div>

</div>

@endsection
