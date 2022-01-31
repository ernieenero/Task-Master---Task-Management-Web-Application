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
          <h3 class="name">Zander Tabelona</h3>
          <h4>Section: BSIS-NS-3C</h4>
          <h4>Status: Student</h4>
        </div>
        <div class="card fade">
          <div class="img_frame">
            <img class="us__img" src="{{asset('images/devs_img/lanon.jpg') }}" alt="your image here">
          </div>
          <h3 class="name">Kimberly Lanon</h3>
          <h4>Section: BSIS-NS-3D</h4>
          <h4>Status: Student</h4>
        </div>
        <div class="card fade">
          <div class="img_frame">
            <img class="us__img" src="{{asset('images/devs_img/jessel.jpg') }}" alt="your image here">
          </div>
          <h3 class="name">Ma. Jessel Quijano</h3>
          <h4>Section: BSIS-NS-3C</h4>
          <h4>Status: Student</h4>
        </div>
        <div class="break"></div>
        <div class="card fade">
        <div class="img_frame">
            <img class="us__img" src="{{asset('images/devs_img/castillo.jpg') }}" alt="your image here">
          </div>
          <h3 class="name">Angelica Castillo</h4>
          <h4>Section: BSIS-NS-3C</h4>
          <h4>Status: Student</h4>
        </div>
        <div class="card fade">
        <div class="img_frame">
            <img class="us__img" src="{{asset('images/devs_img/balderas.jpg') }}" alt="your image here">
          </div>
          <h3 class="name">John Roland Balderas</h3>
          <h4>Section: BSIS-NS-3D</h4>
          <h4>Status: Student</h4>
        </div>
        <div class="card fade">
        <div class="img_frame">
            <img class="us__img" src="{{asset('images/devs_img/enero.jpg') }}" alt="your image here">
          </div>
          <h3 class="name">Enesto Enero</h3>
          <h4>Section: BSIS-NS-3D</h4>
          <h4>Status: Student</h4>
        </div>
        <div class="card fade">
        <div class="img_frame">
            <img class="us__img" src="{{asset('images/devs_img/renald.jpg') }}" alt="your image here">
          </div>
          <h3 class="name">Renald Fernandez</h3>
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