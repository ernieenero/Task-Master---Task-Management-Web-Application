@extends('templates.base')
@section('cssLinks')
<link rel="stylesheet" href="{{asset('/css/us.css')}}">
@endsection

@section('content')
<div id="us__page"class="content">
      <div class="Deck">
        <div class="card fade">
          <div class="img_frame">
            <img class="us__img" src="{{asset('images/devs_img/tabellona.png') }}" alt="your image here">
          </div>
          <h4>Name: Zander Tabelona</h4>
          <h4>Section: BSIS-NS-3C</h4>
          <h4>Status: Student</h4>
        </div>
        <div class="card fade">
          <div class="img_frame">
            <img class="us__img" src="{{asset('images/devs_img/tabellona.png') }}" alt="your image here">
          </div>
          <h4>Name: Kimberly Lanon</h4>
          <h4>Section: BSIS-NS-3D</h4>
          <h4>Status: Student</h4>
        </div>
        <div class="card fade">
        <div class="img_frame">
            <img class="us__img" src="{{asset('images/devs_img/jessel.jpg') }}" alt="your image here">
          </div>
          <h4>Name: Ma. Jessel Quijano</h4>
          <h4>Section: BSIS-NS-3C</h4>
          <h4>Status: Student</h4>
        </div>
        <div class="break"></div>
        <div class="card fade">
        <div class="img_frame">
            <img class="us__img" src="{{asset('images/devs_img/castillo.jpg') }}" alt="your image here">
          </div>
          <h4>Name: Angelica Castillo</h4>
          <h4>Section: BSIS-NS-3C</h4>
          <h4>Status: Student</h4>
        </div>
        <div class="card fade">
        <div class="img_frame">
            <img class="us__img" src="{{asset('images/devs_img/tabellona.png') }}" alt="your image here">
          </div>
          <h4>Name: John Roland Balderas</h4>
          <h4>Section: BSIS-NS-3D</h4>
          <h4>Status: Student</h4>
        </div>
        <div class="card fade">
        <div class="img_frame">
            <img class="us__img" src="{{asset('images/devs_img/enero.jpg') }}" alt="your image here">
          </div>
          <h4>Name: Enesto Enero</h4>
          <h4>Section: BSIS-NS-3D</h4>
          <h4>Status: Student</h4>
        </div>
        <div class="card fade">
        <div class="img_frame">
            <img class="us__img" src="{{asset('images/devs_img/renald.jpg') }}" alt="your image here">
          </div>
          <h4>Name: Renald Fernandez</h4>
          <h4>Section: BSIS-NS-3D</h4>
          <h4>Status: Student</h4>
        </div>
  
        <a class="prev">&#10094;</a>
        <a class="next">&#10095;</a>
      </div>
    
      <div class="radio">
        <span class="circle"></span>
        <span class="circle"></span>
        <span class="circle"></span>
        <span class="circle"></span>
        <span class="circle"></span>
        <span class="circle"></span>
        <span class="circle"></span>
      </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('/js/slides.js') }}"></script>
@endsection