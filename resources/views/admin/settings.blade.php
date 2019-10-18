@extends('layouts.app')

@section('content')
@include('admin.app')
<div class=" section">
  <div class="row">
    <div class="col m4 pd-2 s12">
      <h4 class=" mg-t1">CSE</h3>
        <a class="waves-effect waves-light btn red lighten-2" href="/admin-cse-unpublish">CSE Unpublished<i class="material-icons right">error</i></a>
        <a class="waves-effect waves-light btn blue darken-2 mg-t1" href="/admin-cse-publish">CSE Published<i class="material-icons right">done</i></a>
        <div class="divider mg-t2" ></div>
        <h4 class=" mg-t1">LET</h3>
        <a class="waves-effect waves-light btn red lighten-2" href="#!">LET Unpublished<i class="material-icons right">error</i></a>
        <a class="waves-effect waves-light btn blue darken-2 mg-t1" href="#!">LET Published<i class="material-icons right">done</i></a>
        <div class="divider mg-t2" ></div>
        <h4 class=" mg-t1">UPCAT</h3>
        <a class="waves-effect waves-light btn red lighten-2" href="#!">UPCAT Unpublished<i class="material-icons right">error</i></a>
        <a class="waves-effect waves-light btn blue darken-2 mg-t1" href="#!">UPCAT Published<i class="material-icons right">done</i></a>
        <div class="divider mg-t2" ></div>
        <h4 class=" mg-t1">NAPOLCO</h3>
        <a class="waves-effect waves-light btn red lighten-2" href="#!">NAPOLCO Unpublished<i class="material-icons right">error</i></a>
        <a class="waves-effect waves-light btn blue darken-2 mg-t1" href="#!">NAPOLCO Published<i class="material-icons right">done</i></a>
       
      </div>
  
  </div>
</div>
@endsection

<style>
.col.s12 > .btn {
   width: 100%;
}

</style>