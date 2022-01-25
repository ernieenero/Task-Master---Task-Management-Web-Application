@extends('appLayout.base')
@section('cssLinks')
    
    <link rel="stylesheet" href="{{ asset('/css/calendar.css') }}">
@endsection
@section('content')
  <section id="main">
  <div class="container">
        <div class="header">
          <div class="title">
              To Do List
              </div>
        </div>
        <div class="new-task">
          <div class="checkbox">
            <div class="checkmark">
            </div>
          </div>
          <div class="new-task-input">
            <form onsubmit="" method="post">
              <input type="text" placeholder="Create new task..."/>
              <input type="text" name="" value="" placeholder="Task Description">
              <input class="date-picker" type="date" name="" value="1999-12-31" min="1970-12-31" max="2030-12-31">
            </form>
          </div>
        </div>
        <input class='sub-btn' type="submit" name="Add New Task" value="Add New Task">

        <div class="task-list">
          <div class="task-card">
            
          </div>
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
    
      <div class="pending-task">
        <h3>Pending Task</h3>
        <ul class="pending-list">
          <li class="pending-item">
            <div class="item">
              <h4>Request Sender</h4>
              <h6>Request Description</h6>
            </div>
            
            <div class="request-option">
              <a  href=""><img class="option" src="{{ asset('/images/check.png') }}" alt=""></a>
              <a href=""><img class="option" src="{{ asset('/images/delete.png') }}" alt=""></a>
            </div>
          </li>
        </ul>
      </div>
      </div>
  </section>   
@endsection


@section('script')
<script src="{{ asset('/js/calendar.js') }}"></script>
@endsection