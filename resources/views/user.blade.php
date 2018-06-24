@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- When a user is selected, related conversations are displayed -->

                       <div >
               
                      <label for="user"> SELECT USER </label>
                <select id="user" class="form-control" name="name">
                     @foreach($users as $user)
                     
                    <option value="">  {{ $user->name }} </option>
                        }
                   @endforeach
                </select>
             </div>

                   <div>
                    <a href="{{ route('conversation')}}">Conversation</a>
                    </div>
                    
    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection