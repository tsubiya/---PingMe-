@extends('layouts.app')

@section('content')

<!--Displays all messages -->
       
              
<div class="card card-default">
  <div class="card-heading">All Messages</div>
  <div class="card-body">
<table class="table table-hover">
  <thead>
    <th>User</th>
    <th>Message</th>    
    <th>timestamp</th> 
  
  </thead>
  <tbody>
    @if($messages->count() >0)

    @foreach($messages as $message)
    <tr>
     <td>
      {{$user->name}}
    </td>
    
     
    <td>
      {{ $message->msg }}
    </td>
     
    <td>
       {{ $first_message->created_at->toFormattedDateString() }}
    </td>
    
    
  </tr>
    @endforeach

@else

<tr>
  <th colspan="5" class="text-center">No Messages</th>s
</tr>
@endif


  </tbody>
  
</table>
</div>
</div>





@stop

         
@endsection