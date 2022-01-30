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
        <form method="post" action="{{route('store-task', [Auth::user()->user_id, $subject_id])}}">
            {{csrf_field()}}
            <input type="text" name="task_name" placeholder="Task Name">
            <input type="text" name="task_detail" placeholder="Task Detail">
            <input type="date" name="task_deadline">

            <input type="submit" name="submit" value="Create">
        </form>
    </div>
</div>
@endsection