@extends('templates.formTemp')
@section('cssLinks')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection
@section('cancelBtn')
@if(Auth::user() == null)
      <a href="{{route('index')}}" class="cancel__button">Cancel</a>
      @else
      <a href="{{route('/')}}" class="cancel__button">Cancel</a>
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
            <h1 class="title__login">Login Moto</h1>
   <form action="{{route('login.store')}}" method='post'>
        {{csrf_field()}}
        <label for="email">Email </label>
        <input type="text" name="email" placeholder="Enter Email">
        <label for="password">Password </label>
        <input type="password" name="password" placeholder="Enter Password">

        <input class="login-btn" type="submit" name='submit' value="Login">

        
   </form>
    <hr>    
    or
    <a href="{{route('create')}}">Signup Here</a>
    </div>
</div>
        
@endsection