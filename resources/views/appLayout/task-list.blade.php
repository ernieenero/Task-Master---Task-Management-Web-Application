@extends('templates.base')
@section('cssLinks')
    <link rel="stylesheet" href="{{ asset('/css/calendar.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/base.css') }}">
@endsection
@section('content')

<div class="content">

  <div class="inner">
    <div class="left-col">
      <h2 class="Title">Task Master Home - {{$subjects->subject_name}}</h2>
      <hr>
      <div class="inner-content">
        <div class="fields">
          <h3 class="task__name">Task Name</h3>
          <h3 class="task__detail">Task Detail</h3>
          <h3 class="task_deadline">Due Date</h3>
          <h3 class="action">Action</h3>
        </div>
        <hr>
        <div class="task__list__content">
          @foreach($subjects->tasks as $task)
            <div class="fields-content">
            <h4 class="task__name">{{$task->task_name}}</h4>
            <h4 class="task__detail">{{$task->task_detail}}</h4>
            <h4 class="due__date">{{$task->task_deadline}}</h4>
            <div class="action">
              <a href="{{route('edit-task', [Auth::user()->user_id, $subject_id, $task->task_id])}}"><img class="task-list-img" src="{{asset('images/edit.png')}}" alt=""></a>
              <a href="{{route('delete-task', [Auth::user()->user_id, $subject_id, $task->task_id])}}" onclick="return confirm('You Want To Delete Task: {{$task->task_name}}')"><img class="task-list-img" src="{{asset('images/another (1).png')}}" alt=""></a>
            </div>
            </div>
            
          @endforeach
        </div>
        <a href="{{route('add-task', [Auth::user()->user_id, $subject_id])}}" class="add__task"><strong>+</strong>Add</a>
      </div>
    </div>

  <div class="right-col">
        <div class="calendar fade">
          <div class="month-header">
              <a class="prev">&#10094;</a>
  
              <div class="current-date">
                  <h1 class="currMonth">May</h1>
                  <h3 class="weekDate">Fri. May 01, 2020</h3>
              </div>
              
              <a class="next">&#10095;</a>
          </div>
          <div class="days">
              <div>Sun</div>
              <div>Mon</div>
              <div>Tue</div>
              <div>Wed</div>
              <div>Thu</div>
              <div>Fri</div>
              <div>Sat</div>
          </div>
          <div class="num-date">
              
          </div>
      </div>
  </div>
  
    
      
</div>
@endsection


@section('script')
<script src="{{ asset('/js/calendar.js') }}"></script>
@endsection