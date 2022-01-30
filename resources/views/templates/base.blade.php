<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    @yield('cssLinks')
    <link rel="stylesheet" href="{{ asset('/css/nav.css') }}">
    <link rel="icon" href="{{asset('images/webicon.ico')}}" type="image/icon type">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>To Do List</title>
  </head>
  <body id="main-page">
    <nav>
      <input type="checkbox" id="check">
      <label class='checkmo'for="check">
        <i class="fa fa-bars"></i>
      </label>
      @if(Auth::user() == null)
        <a href="{{route('index')}}"><img class="logo" src="{{ asset('/images/home-icon.png') }}" alt="logo"></a>
        @else
        <a href="{{route('user-home', Auth::user()->user_id)}}"><img class="logo" src="{{ asset('/images/home-icon.png') }}" alt="logo"></a>
        @endif
      <ul>
        @if(Auth::user() == null)
          <li><a class="nav" href="{{route('index')}}">Home</a></li>
        @else
          <li><a class="nav" href="{{route('user-home', Auth::user()->user_id)}}">Home</a></li>
        @endif
        <li><a class="nav" href="{{route('about')}}">About</a></li>
        <li><a class="nav" href="{{route('us')}}">Us</a></li>
        @if(Auth::user() == null)
          <li><a href="{{route('login.create')}}" class="nav">Login</a></li>
        @else
          <form class="logout-form" action="{{route('login.destroy')}}" method="post">
            @csrf
            <li><a class="nav" href="{{route('login.destroy')}}" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a></li>
          </form>
        @endif
        

      </ul>
    </nav>
    
    @yield('content')


  </body>
  @yield('script')
  
</html>


