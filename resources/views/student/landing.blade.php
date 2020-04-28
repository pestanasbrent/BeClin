@extends('layouts.studentmain')
@section('content')

<div class="jumbotron d-flex align-items-center">
  <div class="container text-center">
    <h1 class="display-1 mb-4">Be<br>Clin</h1>
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