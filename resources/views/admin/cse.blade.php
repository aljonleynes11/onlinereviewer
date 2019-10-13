@extends('layouts.app')

@section('content')
@include('admin.app')


<div class="row">
  <div class="col md12">
    <table>
      <td>  <small>English is : {{$english}}</small></td>
      <td>  <small>Filipino is : {{$filipino}}</small></td>
      <td> <small>General education is : {{$gened}}</small></td>
      <td><small>logic is : {{$logic}}</small></td>
      <td><small>Math is : {{$math}}</small></td>
    </table>
    @if(count($questions) > 0)
      <table>
          <thead>
            <tr>
               
                <th>Question</th>
                <th>Option 1</th>
                <th>Option 2</th>
                <th>Option 3</th>
                <th>Option 4</th>
                <th>Answer</th>
                <th>Subject</th>
                <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($questions as $i=>$quest)
            <tr>
            
              <td>{{$quest->question}}</td>
              <td>{{$quest->option1}}</td>
              <td>{{$quest->option2}}</td>
              <td>{{$quest->option3}}</td>
              <td>{{$quest->option4}}</td>
              <td>{{$quest->answer}}</td>
              <td>{{$quest->subject}}</td>
              
            </tr>
            @endforeach

          </tbody>
        </table>
        {{$questions->links()}}
        @else
        <h3>No unpublish questions</h3>
        @endif
  </div>
</div>
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>





</script>


<style>


</style>