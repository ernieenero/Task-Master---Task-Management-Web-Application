@extends('templates.base')
@section('cssLinks')
<link rel="stylesheet" href="{{ asset('css/subject-list.css') }}">
@endsection
@section('content')
<div id="subject-list" class="content">
    <a class="user__profile__button" href="{{route('profile', ['id'=>Auth::user()->user_id])}}"><img class="profile" src="{{asset('images/user.png') }}" alt=""><span><h3 style="color: black;">{{Auth::user()->name}}</h3></span></a>
    
    <h1 style="font-size: xx-large;">Task Master</h1>
    <form class="subject__form" method="post" action="{{route('subject.store', Auth::user()->user_id)}}">
        {{csrf_field()}}
            <input class="subject__input" type="text" name='subject_name' placeholder="Enter Subject Name">
            <input class="subject__input"type="text" name='subject_detail' placeholder="Enter Subject Description">
            <input class="subject__input"type="submit" name='submit' value="Add Subject">
        </form>

    <div class="subject__list__content">
        @foreach($user->subjects as $subject)
            <div class="subject__content">
                <div class="card__content">
                    <a href="{{route('task-home', [Auth::user()->user_id, $subject->subject_id])}}" class="subject__name">{{$subject->subject_name}}</a>
                    <h4 class="subject__desc">{{$subject->subject_detail}}</h4>
    
                    <a class="edit__subject" href="{{route('subject.edit', [Auth::user()->user_id, $subject->subject_id])}}"><img src="{{asset('images/pen.png')}}" alt=""></a>
                    <a class="delete__subject" onclick="return confirm('You Want To Delete Subject: {{$subject->subject_name}}')" href="{{route('subject.destroy', [Auth::user()->user_id, $subject->subject_id])}}"><img src="{{asset('images/trash.png')}}" alt=""></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

