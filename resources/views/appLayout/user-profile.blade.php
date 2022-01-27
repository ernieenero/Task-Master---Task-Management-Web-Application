@extends('templates/base')
@section('cssLinks')
    <link rel="stylesheet" href="{{asset('css/user-profile.css') }}">
@ensection
@section('content')

<div id="user__profile" class="content">
    <div class="user__card">
        <h3 id="user__name">{{$user->name}}</h3>
        <h3 id="user__email">{{$user->email}}</h3>
        
        <a href="{{route('edit', [Auth::user()->user_id])}}">Edit Profile</a>
        <a href="">Deactivate Account</a>
    </div>
    
</div>
@endsection