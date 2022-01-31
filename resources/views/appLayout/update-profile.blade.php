@extends('templates.formTemp')
@section('cssLinks')
    <style>
        h1{
            margin: 10px 15px;
        }
        form.edit {
            margin: 10px 15px;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}">
@endsection

@section('cancelBtn')
@if(Auth::user() == null)
      <a href="{{route('index')}}" class="cancel__button">Cancel</a>
      @else
      <a href="{{route('profile', Auth::user()->user_id)}}" class="cancel__button">Cancel</a>
      @endif
@endsection
@section('content')
<div class="content">
    <div class="form-page">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li style="color:red;">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <h1 >Edit Profile</h1>
            <form class="edit" action="{{route('update', [Auth::user()->user_id])}}" method="post">
                {{csrf_field()}}
                <div class="right-col">
                <input type="text" name="name" value="{{$user['name']}}" required>
                <input type="email" name="email" value="{{$user['email']}}" required>
                </div>
                

                <input id="edit__button" type="submit" name='submit' value="Submit">
                
            </form>
         
        </div>
        
</div>

@endsection