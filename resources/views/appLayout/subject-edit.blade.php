@extends('templates.formTemp')
@section('cssLinks')
    <style>
        h1{
            margin: 10px 15px;
        }
        form.edit {
            margin: 10px 15px;
            width: 70%;
        }
        .right-col label{
           text-align: left;
           font-size: small;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}">
@endsection
@section('cancelBtn')
@if(Auth::user() == null)
      <a href="{{route('index')}}" class="cancel__button">Cancel</a>
      @else
      <a href="{{route('user-home', Auth::user()->user_id)}}" class="cancel__button">Cancel</a>
      @endif
@endsection
@section('content')
<div class="content">
    <div class="form-page">
            <h1 >Edit Subject</h1>
            <form class="edit" action="{{route('subject.update', [Auth::user()->user_id, $subject->subject_id])}}" method="post">
                {{csrf_field()}}
                <div class="right-col">
                    <label for="subject_name">Subject Name</label>
                    <input type="text" name="subject_name" value="{{$subject->subject_name}}" required>
                    <label for="subject_detail">Subject Detail</label>
                    <input type="text" name="subject_detail" value="{{$subject->subject_detail}}" required>
                </div>
                

                <input id="edit__button" type="submit" name='submit' value="Submit">
                
            </form>
         
        </div>
</div>
@endsection