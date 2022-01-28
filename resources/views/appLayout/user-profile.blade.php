@extends('templates/base')
@section('cssLinks')
    <link rel="stylesheet" href="{{asset('css/user-profile.css') }}">
@ensection
@section('content')

<div class="content">
    <div class="pf-box"> 
            <div class="inner-pf-box">
                <img class="user__profile__img" src="{{asset('images/user.png')}}" alt="asdasd">
            </div>
            <div class="line-pf">
                <h2 class="pf-username"><span>{{Auth::user()->name}}</span></h2>
                <div class="pf-address row ">

                    <div class="column">Email:<h4>{{Auth::user()->email}}</h4></div>
                </div>

                <div><a href="{{route('edit', Auth::user()->user_id)}}" class="edit__user">Update User</a></div>
                <!-- <div><h6>Deactivate Account</h6></div> -->
                <form class="logout-form" action="{{route('login.destroy')}}" method="post">
                    @csrf
                    <a class="pf-logout" href="{{route('login.destroy')}}" onclick="event.preventDefault(); this.closest('form').submit();"><h4><strong>LOGOUT</strong></h4></a>
                </form>
            </div>
            

    </div>
</div>
@endsection