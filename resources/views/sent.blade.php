@extends('layouts.app')

@section('content')
       
              
<div class="card card-default">
  <div class="card-heading">All Sent Messages</div>
 

<table class="table table-inbox table-hover">
     @if($messages->count() >0)
      @foreach($messages as $message)
        <tbody>
           <tr class="unread">
             <td class="inbox-small-cells">
                <input type="checkbox" class="mail-checkbox">
             </td>
             <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
             <td class="view-message dont-show">{{ $message->from_user_id}}</td>
             <td class="view-message dont-show">{{ $user->name }}</td>
             <td class="view-message view-message"><p>{{ $message->msg}}</p></td>
             <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
             <td class="view-message text-right">{{ $message->created_at }}</td>
            </tr>
        </tbody>
     @endforeach
    
     @else

        <tr>
          <td colspan="5" class="text-center">No Sent Messages</td>
        </tr>
        @endif

 </table> 

@stop

         
@endsection