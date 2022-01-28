@extends('templates.formTemp')
@section('cssLinks')
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}">
@endsection

@section('content')
<div class="content">
    <div class="form-page">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li style="color:red;">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <h1 class="form__title" >Welcome</h1>
            <form action="/" method="post">
                {{csrf_field()}}
                <div class="right-col">
                <input type="text" name="name" placeholder="Enter Name" required>
                <input type="email" name="email" placeholder="Enter Email" required>
                <input type="password" name="password" placeholder="Enter Password" required>
                </div>
                

                <input class="login-btn" type="submit" name='submit' value="Signup">
                
            </form>
            <a href="{{route('login.create')}}">Already Have an Account?</a>
         
        </div>
        
</div>

@endsection