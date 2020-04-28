@extends('layouts.main')
@section('title', 'Homepage')
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
  <div class="container">
  <div class="row">
    <div class="col-sm">
      <div class="card mb-3">
        <h3 class="card-header">Check this out!</h3>
        <div class="card-body">
          <h5 class="card-title">Clinic Services</h5>
          <h6 class="card-subtitle text-muted">By: Gian Austria</h6>
        </div>
        <img style="height: 200px; width: 100%; display: block;" src="{{asset('/assets/img/clinic.jpg')}}" alt="Card image">
        <div class="card-body">
          <p class="card-text">With the new and improved clinic services, you can now easily check your health at our clinic! Visit us @ 
              <ul align="left">
                <li>S103, Greenway Square, Taft Campus </li>
                <li> I714, 7th Floor, AKIC Campus </li>
                <li> A304, 3rd Floor, SDA Campus </li> 
              </ul>  
              </p>
        </div>
        <ul class="list-group list-group-flush" align="left">
          <li class="list-group-item">Medical Certificate</li>
          <li class="list-group-item">Check-Up</li>
          <li class="list-group-item">Medicines and Rest</li>
        </ul>
      </div>
    </div>

    <div class="col-sm">
    <div class="card mb-3">
        <h3 class="card-header">What's New?</h3>
        <div class="card-body">
          <h5 class="card-title">Launch of BeClin</h5>
          <h6 class="card-subtitle text-muted">By: Aleeza Ulang</h6>
        </div>
        <img style="height: 200px; width: 90%; display: block;" src="{{asset('/assets/img/beclin.png')}}" alt="Card image" class="center">
        <div class="card-body">
          <p class="card-text">Made by our very own students, this new website will help the students to request their medical certificate rather than lining Up
                             This also will help the clinic to check their inventory and check the students going into the clinic.</p>
          <br/><br/>
        </div>
        <ul class="list-group list-group-flush" align="left">
          <li class="list-group-item">Fast</li>
          <li class="list-group-item">Reliable</li>
          <li class="list-group-item">No More Lines!</li>
        </ul>
      </div>
    </div>

    <div class="col-sm">
    <div class="card mb-3">
        <h3 class="card-header">Fresh from the press!</h3>
        <div class="card-body">
          <h5 class="card-title">Benilde's COVID19 Response</h5>
          <h6 class="card-subtitle text-muted">By: Brent Pestañas and Adrian Go</h6>
        </div> 
        <img style="height: 200px; width: 200px; display: block;" src="https://upload.wikimedia.org/wikipedia/en/1/10/DLS-CSB_Seal.png" alt="Card image" class="center">
        <div class="card-body">
          <p class="card-text">With the recent Global Pandemic - COVID19, the Philippines have already made measures to flatten the curve. With this Benilde acted with their students
                            to check their temperature as always. Alcohol dispenser are scattered throughout the building and soon hoping that the students will be tested 
                            like what is happening in South Korea. #stay@home #flattenthecurve. </p>
        </div>
        <ul class="list-group list-group-flush" align="left">
          <li class="list-group-item">Alcohols</li>
          <li class="list-group-item">Temperatures</li>
          <li class="list-group-item">Soon Mass Testing</li>
        </ul>
      </div>
    </div>

  </div>
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