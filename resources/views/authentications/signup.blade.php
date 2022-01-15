@extends('appLayout.base')
@section('cssLinks')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<section id="main">
        <div class="form-page">
            <form action="login.html" method="post">
                <label for="name">Name </label>
                <input type="text" name="name" placeholder="Enter Name">
                <label for="username">Username </label>
                <input type="text" name="username" placeholder="Enter Username">
                <label for="password">Password </label>
                <input type="text" name="password" placeholder="Enter Password">
                <label for="birthdate">Birthdate </label>
                <input type="date" name="birthdate" placeholder="Enter Username">
                
                <input class="login-btn" type="submit" name='submit' value="Signup">
            </form>
        </div>
   </section>

@endsection