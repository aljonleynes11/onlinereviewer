@extends('layouts.app')

@section('content')
@include('admin.app')


<div class="row">
  <div class="col md12">
    <small>English is : {{$english}}</small>
    <small>Filipino is : {{$filipino}}</small>
    <small>General education is : {{$gened}}</small>
    <small>Logic is : {{$logic}}</small>
    <small>Math is : {{$math}}</small>
    
    @if(count($questions) > 0)
      <table class="striped table-responsive black white-text">
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
                <th></th>
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
              <td> 
                <a href="/civil-service-examination-review/{{$quest->id}}/edit" class="btn green left-align"> <i class="material-icons">edit</i> </a>
              </td>
              <td> <form method="POST" action="{{ route('civil-service-examination-review.destroy', [$quest->id]) }}" style="">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn red" style="margin-top:20px"><i class="material-icons">delete_sweep</i></button>
              </form></td>
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