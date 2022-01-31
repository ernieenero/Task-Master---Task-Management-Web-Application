<!-- @extends('templates.base') -->
@method('PUT')
@section('cssLinks')
    <link rel="stylesheet" href="{{ asset('/css/about.css') }}">
@endsection

@section('content')
<div id="about" class="content">
      <div class="about__left">
        <h1 class="about-title">Task Master About</h1>
        <hr>
        <p>To-do lists can be a great way to prioritize the tasks you need to accomplish, and to think about the time it'll take to do so. As great as a to-do list can be, though, we don't all think about things in the same way, and what works for you in terms of prioritization, and how you proceed through your list, may not work for someone else.
          Having a to-do list seems like living your life according to a rigid system that turns you into a half-robot. If you’re the sort of person who can’t stand having an unfinished item on your to-do list, this could put you off. In reality, to-do lists give you more flexibility. Consider this: 
            Is freedom not the capacity to choose your own actions? The ability to spend your time doing what you want to be doing? To-do lists help you do that. On the other hand, by leaving things to chance, you risk living your life according to other people’s agendas.</p>
      </div>
      <div class="about__right">
        <hr>
              <a class="repo__about" target="_blank" href="https://github.com/ernieenero/web-dev-final-project"><img class="repo_img" src="{{asset('images/github-sign.png')}}" alt=""><h5>Visit Our Repository</h5></a>
              <a class="repo__about" target="_blank" href="http://www.tup.edu.ph/"><img class="repo_img" src="{{asset('images/graduation-hat.png')}}" alt=""><h5>Visit Our University Website</h5></a>
        <hr>
    </div>
  </div>
    
@endsection