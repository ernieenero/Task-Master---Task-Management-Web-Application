<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    @yield('cssLinks')
    <link rel="stylesheet" href="{{ asset('/css/base.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>To Do List</title>
    <style>
      nav {
        width: 100%;
      }
      .cancel__button {
        position: absolute;
        right: 50px;
        top: 40px;
        padding: 7px 15px;
        background-color: #F2CA63;
        border-radius: 20px;
        color: black;
        transition: .15s ease-in;
      }
      .cancel__button:hover {
        background-color: rgba(0, 0, 0, 0.2);
        color: white;
        box-shadow: 2px 3px rgba(255, 255, 255, 0.8)
      }
    </style>
  </head>
  <body id="main-page">
    <nav>
      @if(Auth::user() == null)
        <a href="{{route('index')}}"><img class="logo" src="{{ asset('/images/temp-logo.png') }}" alt="logo"></a>
      @else
        <a href="{{route('user-home', Auth::user()->user_id)}}"><img class="logo" src="{{ asset('/images/temp-logo.png') }}" alt="logo"></a>
      @endif

      @if(Auth::user() == null)
      <a href="{{route('index')}}" class="cancel__button">Cancel</a>
      @else
      <a href="{{route('user-home', Auth::user()->user_id)}}" class="cancel__button">Cancel</a>
      @endif
      
    </nav>
    
    @yield('content')


  </body>
  @yield('script')
  
</html>
