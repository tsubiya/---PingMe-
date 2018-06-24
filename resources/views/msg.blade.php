@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <!-- Sends messages within given conditions/validations -->

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


        <form action="{{ route('sendMessage') }}" method="post" enctype="multipart/form-data">

            {{ csrf_field() }}


            <div class="form-group">
                <label for="user"> SELECT USER</label>
                <select id="user" class="form-control" name="name">
                     @foreach($users as $user)
                     if($user!=$from_user_id){
                    <option value="">  {{ $user->name }} </option>
                        }endif
                   @endforeach
                </select>
             </div>


             if (msg!=(preg_match('/^\s/'),$message) {
              <div class="form-group">
                <label for="message">Message</label>
                <input type="text" id="msg" class="form-control" name="msg"> 
             </div>
              }endif
              <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success" type="submit">Send</button>
                </div>
            </div>
             


        </form>

    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
