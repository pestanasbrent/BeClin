@extends('layouts.studentmain')
@section('title', 'Homepage')
@section('content')
<style>
div{
 
    color: black;
}

</style>
<div class="jumbotron d-flex align-items-center">
  <div class="container text-center">
<h2 align="center">Clinic Services</h2>
<h5 align="center">Choose what services clinic can accomodate you </h5>
<br/><br/>
<div class="container" align="center">
    
  <div class="row">

    <div class="col-sm">
    <div class="card border-success mb-3" style="max-width: 20rem;">
    <div class="card-header">Request</div>
    <div class="card-body">
        <h4 class="card-title">Medical Certificate</h4>
        <p class="card-text">Request your medical certificate for: </p>
        <ul align="left">
            <li>NSTP</li>
            <li>School Outing</li>
            <li>Local/International OJT</li>
            <li>Other school-related activities</li>
        </ul>
        <!--Dito lalagay link for medical certificate -->
        <form class="border border-light p-4" action="{{ url('/student/request') }}">
    
        <button class="btn btn-success">Request Now</button>
      </form>
        <br/><br/>
    </div>
    </div>
        
    </div>

    <div class="col-sm">
    <div class="card border-success mb-3" style="max-width: 20rem;">
    <div class="card-header">Clinic Status</div>
    <div class="card-body">
        <h4 class="card-title">Opening Hours</h4>
        <p class="card-text">Monday - Saturday</p>
        <p align="left">GENERAL</p>
        <ul>
            <li>Dr. Reyes - 8:00 a.m. - 4:40 p.m.</li>
            <li>Dr. Maron - 2:30 p.m. - 5:00 p.m.</li>
        </ul>
        <p align="left">DENTIST</p>
        <ul>
            <li>Dr. Warner - 10:00 a.m. - 3:00 p.m.</li>
        </ul>
    </div>
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