@extends('templates.formTemp')
@section('cssLinks')
    <style>
        h1{
            margin: 10px 15px;
        }
        form.edit {
            margin: 10px 15px;
        }
        #edit__button {
            position: absolute;
            top: 270px;
            width: 90px;   
        }
    </style>
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}">
@endsection
@section('content')
<div class="content">
    <div class="form-page">
            <h1 >Edit Subject</h1>
            <form class="edit" action="{{route('subject.update', [Auth::user()->user_id, $subject->subject_id])}}" method="post">
                {{csrf_field()}}
                <div class="right-col">
                <input type="text" name="subject_name" value="{{$subject->subject_name}}" required>
                <input type="text" name="subject_detail" value="{{$subject->subject_detail}}" required>
                </div>
                

                <input id="edit__button" type="submit" name='submit' value="Submit">
                
            </form>
         
        </div>
</div>
@endsection