@extends('layouts.app')

@section('content')
<script src="https://cdn.ckeditor.com/ckeditor5/12.4.0/classic/ckeditor.js"></script>
<div class="container" style="margin-top:5vh">
<form action="/blog/create" method="POST">
    @csrf
    <input placeholder="Title" type="text" name="title"><br><br><br> 
    <textarea name="body" id="editor" rows="12" name="body">
        <p>asdfasdf</p>
    </textarea>
  
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script> 



  <button id="submit" class="waves-effect waves-dark btn" style="float:right; margin-top:2%;">Submit</a>
 </form>
</div>
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>

</script>