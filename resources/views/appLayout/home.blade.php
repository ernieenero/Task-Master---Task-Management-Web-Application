@extends('appLayout.base')

@section('links')
<link rel="stylesheet" href="{{ asset('/css/base.css') }}">
@endsection
@section('content')


<div class="content">
<div class="right-col-base">
    <h1>Think of Design Here</h1>
    </div>
    <div class="left-col-base">
        <a class="started__button" href="{{route('create')}}">Let's Get Started!</a>
        
    </div>
    
    
</div>
@endsection