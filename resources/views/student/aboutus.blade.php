@extends('layouts.studentmain')
@section('content')
<style>
div{
 
 color: black;
}
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
</style>
<div class="jumbotron d-flex align-items-center">
  <div class="container text-center">
    <h3 class="display-1 mb-4">About Us</h3>
    <h5>Clinic Amenities</h5>
    <div class="container">
  <div class="row">
    <div class="col-sm">
      <div class="card mb-3">
        <div class="card-body">
          <h5 class="card-title">Rooms</h5>
        </div>
        <img style="height: 200px; width: 90%; display: block;" src="https://www.hfmmagazine.com/ext/resources/images/2017/HFM-magazine/July/0717_design_clevelandClinic_Avon_patientRoom1.jpg" alt="Card image" class="center">
        <div class="card-body">
          <p class="card-text">Rooms that are airconditioned and nurses that ready to assist you just visit us @ 
              <ul align="left">
                <li>AKIC, SDA and Taft Campus </li>
              </ul>  
              </p>
        </div>
       
      </div>
    </div>

    <div class="col-sm">
    <div class="card mb-3">
        <div class="card-body">
          <h5 class="card-title">Dentists</h5>
        </div>
        <img style="height: 200px; width: 90%; display: block;" src="https://images.unsplash.com/photo-1445527815219-ecbfec67492e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Card image" class="center">
        <div class="card-body">
          <p class="card-text">Dentist equipments are ready, just go to our clinic and schedule to our dentist!</p>
        </div>
       
      </div>
    </div>

    <div class="col-sm">
    <div class="card mb-3">
        <div class="card-body">
          <h5 class="card-title">Consulations</h5>
        </div> 
        <img style="height: 200px; width: 90%; display: block;" src="https://todaymiddleware.mims.com/resource/image/07A258CE-BDC4-4E0C-A3C4-A7AD00B6D998/OriginalThumbnail/THUMBNAIL_consultation.jpg" alt="Card image" class="center">
        <div class="card-body">
          <p class="card-text">With our doctors, you're health is always on the right track. Consult now and it is free no need to go to a hospital</p>
        </div>
      </div>
    </div>

  </div>
  <p align="right">*Pictures are from the internet</p>
</div>
<h2>Who are we? - Behind BeClin</h2>

<div class="container">
  <div class="row">
    <div class="col-sm">
      <div class="card mb-3">
        <h3 class="card-header">Leader</h3>
        <div class="card-body">
          <h5 class="card-title">Gian Carlo Austria</h5>
        </div>
        <img style="height: 200px; width: 90%; display: block;" src="{{asset('assets/img/gian.JPEG')}}" alt="Card image" class="center">
        <div class="card-body">
          <p class="card-text">One who manages and coordinates with the team to finish and deliver the project on-time.  
              </p>
        </div>
       
      </div>
    </div>

    <div class="col-sm">
    <div class="card mb-3">
        <h3 class="card-header">Designer</h3>
        <div class="card-body">
          <h5 class="card-title">Aleeza China Ulang</h5>
        </div>
        <img style="height: 200px; width: 90%; display: block;" src="{{asset('assets/img/LEEZ.jpg')}}" alt="Card image" class="center">
        <div class="card-body">
          <p class="card-text">Assistant to the leader but manages the design well if it is incorporated well with the color of the school and for the users.</p>
        </div>
       
      </div>
    </div>

    <div class="col-sm">
    <div class="card mb-3">
        <h3 class="card-header">Programmer</h3>
        <div class="card-body">
          <h5 class="card-title">Adrian Peter Go</h5>
        </div>
        <img style="height: 200px; width: 90%; display: block;" src="{{asset('/assets/img/adri.jpg')}}" alt="Card image" class="center">
        <div class="card-body">
          <p class="card-text">Web-developer, helps the main developer to see if there are errors after the developing of the system.</p>
        </div>
       
      </div>
    </div>
    <div class="col-sm">
    <div class="card mb-3">
        <h3 class="card-header">Programmer</h3>
        <div class="card-body">
          <h5 class="card-title">Brent  Pestañas</h5>
        </div> 
        <img style="height: 200px; width: 200px; display: block;" src="{{asset('/assets/img/brent.jpg')}}" alt="Card image" class="center">
        <div class="card-body">
          <p class="card-text">Head Programmer, he is the head of back-end developers, see to it that the functions needed are complete.</p>
        </div>

      </div>
    </div>

  </div>
  <p>Template Credit to <a href="https://freehtml5.co">FreeHTML5</a></p>
</div>


  </div>
  <div class="rectangle-1"></div>
  <div class="rectangle-2"></div>
  <div class="rectangle-transparent-1"></div>
  <div class="rectangle-transparent-2"></div>
  <div class="circle-1"></div>
  <div class="circle-2"></div>
  <div class="circle-3"></div>
  <div class="triangle triangle-1">
  	<img src="{{ URL::to('/assets/img/obj_triangle.png') }}" alt="">
  </div>
  <div class="triangle triangle-2">
  <img src="{{ URL::to('/assets/img/obj_triangle.png') }}" alt="">
  </div>
  <div class="triangle triangle-3">
  <img src="{{ URL::to('/assets/img/obj_triangle.png') }}" alt="">
  </div>
  <div class="triangle triangle-4">
  <img src="{{ URL::to('/assets/img/obj_triangle.png') }}" alt="">
  </div>
</div>

@endsection