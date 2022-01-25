@extends('templates.formTemp')
@section('cssLinks')
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}">
@endsection

@section('content')
<div class="content">
<div class="form-page">
            <h1 style="justify-content: left;">Welcome</h1>
            <form action="/" method="post">
                {{csrf_field()}}
                <div class="right-col">
                <input type="text" name="username" placeholder="Enter Username">

                <input type="text" name="password" placeholder="Enter Password">

                <input type="text" name="first_name" placeholder="Enter First Name">

                <input type="text" name="last_name" placeholder="Enter Last Name">
                </div>

                <div class="left-col">
                <input type="number" name="age" placeholder="Enter Age" min="0" max="100">

                <select name="gender" id="gender__input" >
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                </select>

                <input type="date" name="birthdate" placeholder="Enter Birthdate">
                <label style="font-size: smaller;" for="birthdate">Birthdate</label>
                </div>

                <input class="login-btn" type="submit" name='submit' value="Signup">
            </form>
            <a href="{{route('login')}}">Already Have an Account?</a>
        </div>
</div>
        

@endsection