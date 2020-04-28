<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>@yield('title') - WEBDEVT FINAL PROJECT</title>
  <!-- MDB icon -->
  <link rel="icon" href="{{ asset('/assets/img/mdb-favicon.ico')}}" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="{{ asset('/assets/css/mdb.min.css') }}">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">

  <!-- <link rel="stylesheet" href="{{ asset('/assets/vendor/bootstrap/bootstrap.min.css') }}"> -->
  <link rel="stylesheet" href="{{ asset('/assets/vendor/select2/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/assets/vendor/owlcarousel/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/assets/vendor/lightcase/lightcase.css') }}">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <link href="https://fonts.googleapis.com/css?family=Lato:300,400|Work+Sans:300,400,700" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/css/style.min.css') }}">
    <!-- <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> -->

    <!-- Modernizr JS for IE8 support of HTML5 elements and media queries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>


  </head>
<body>

  <!-- Start your project here-->  
  
  <!-- End your project here-->
  @include('layouts.studentnavbar')

  @yield('content')

  @include('layouts.footer')

  
  <!-- jQuery -->
  <script type="text/javascript" src="{{ asset('/assets/js/jquery.min.js') }}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{ asset('/assets/js/popper.min.js') }}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{ asset('/assets/js/mdb.min.js') }}"></script>
  <!-- Your custom scripts (optional) -->

  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
  <script type="text/javascript" src="{{ asset('/assets/vendor/bootstrap/popper.min.js') }}"></script>
    <!-- <script type="text/javascript" src="{{ asset('/assets/vendor/bootstrap/bootstrap.min.js') }}"></script> -->
  <script type="text/javascript" src="{{ asset('/assets/vendor/select2/select2.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/assets/vendor/owlcarousel/owl.carousel.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/assets/vendor/stellar/jquery.stellar.js') }}" charset="utf-8"></script>
  <script type="text/javascript" src="{{ asset('/assets/vendor/isotope/isotope.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/assets/vendor/lightcase/lightcase.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/assets/vendor/waypoints/waypoint.min.js') }}"></script>
   <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
   
  <!-- Main JS -->
  <script type="text/javascript" src="{{ asset('/assets/js/app.min.js') }}"></script>
  
</body>
</html>
