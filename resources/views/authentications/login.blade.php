@extends('templates.formTemp')
@section('cssLinks')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<div class="content">
    <div class="form-page"> 
        <form action="login.html" method="post">
                <label for="username">Username </label>
                <input type="text" name="username" placeholder="Enter Username">
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