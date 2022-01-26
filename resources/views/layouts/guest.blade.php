<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Task ') }}</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        
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

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
    <nav>
      <a href="index.html"><img class="logo" src="{{ asset('/images/temp-logo.png') }}" alt="logo"></a>
      <a href="{{route('index')}}" class="cancel__button">Cancel</a>
    </nav>
         
      @yield('content')

      @yield('footer')
    </body>

</html>
