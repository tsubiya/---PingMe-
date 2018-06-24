@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">All conversation </div>
                <!-- dsiplaying conversations on page -->

               
         @forelse($conversation as $msg)
         <div id="message_{{ $msg->id }}" class="{{ $msg->from_user_id === Auth::user()->id ? 'sent_message' : 'received_message' }}"> {{ $msg->message }} </div>
       @empty
    No messages!
     @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
