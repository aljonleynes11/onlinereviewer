@extends('layouts.app')

@section('content')
<nav>
  <div class="nav-wrapper red lighten-2">
    <div class="col s12">
      <a href="/" class="breadcrumb">Home</a>
      <a href="/blog" class="breadcrumb">Blogs</a>
    </div>
  </div>
</nav>
 <div class="row" style="padding: 7vh 7vw">
  <H3>ABSOLUTE GRID</H3>  
  @foreach ($blogs as $blog)
    
      <div class="col m8 card s12" style="padding: 3vh 3vw 0 3vw">
      <span class="card-title"> {{str_limit($blog->title, 30, ' .. ' )}} </span>
        {!!str_limit($blog->body, 100, ' ..  <span class="blue-text"> Read more </span>' )!!}
      
    <div class="card-action right">  
      @php
        $url=str_replace(' ', '-', urldecode($blog->title))
       @endphp
      <a href="/blog/{{$blog->id}}-{{$url}}" class="white-text btn black"> Read </a>
    </div>
  </div>
   
  @endforeach
  <div class="col m3">
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non molestias ex architecto voluptatibus vero. Voluptatum, dolore! Magni quo vel praesentium!
    </div>

 </div>
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>

</script>



<style>
div.absolute {
  position: absolute;
  top: 80px;
  right: 0;
  width: 200px;
  height: 100px;
  border: 3px solid #73AD21;
}
  </style>