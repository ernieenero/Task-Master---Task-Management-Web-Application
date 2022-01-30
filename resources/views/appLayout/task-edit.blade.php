@extends('templates.formTemp')
@section('cssLinks')
    <link rel="stylesheet" href="{{asset('css/add-task-forms.css')}}">
@endsection
@section('cancelBtn')
@if(Auth::user() == null)
      <a href="{{route('index')}}" class="cancel__button">Cancel</a>
      @else
      <a href="{{route('task-home', [Auth::user()->user_id, $subject_id])}}" class="cancel__button">Cancel</a>
      @endif
@endsection
@section('content')
<div class="content">
    <div class="form-page">
        @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li style="color:red;">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <h2>Create New Task</h2>
        <form method="post" action="{{route('update-task', [Auth::user()->user_id, $subject_id, $task->task_id])}}">
            {{csrf_field()}}
            <input type="text" name="task_name" value="{{$task->task_name}}">
            <input type="text" name="task_detail" value="{{$task->task_detail}}">
            <input type="date" name="task_deadline" value="{{$task->task_deadline}}">

            <input type="submit" name="submit" value="Edit">
        </form>
    </div>
</div>
@endsection