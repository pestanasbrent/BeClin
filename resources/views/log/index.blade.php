<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>View List - BeClin</title>
  <!-- MDB icon -->
  <link rel="icon" href="{{ asset('/assets/img/mdb-favicon.ico') }}" type="image/x-icon">
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
</head>
<body>

  <!-- Start your project here-->  
 @include('layouts.adminnavbar')

 @yield('content')
 <div class="container-fluid">
    @if(session('successMsg'))
        <div class="alert alert-success">
          {{ session('successMsg')}}
        </div>
    @endif
    <table class="table">
      <thead>
        <th>Log #</th>
        <th>ID No.</th>
        <th>Concern</th>
        <th>Medicine / Note</th>
        <th>Date Added</th>
        <th>Last Updated</th>
        <th>Actions</th>
      </thead>
      <tbody>
          @foreach($records as $item)
            <tr>
              <td>{{ $item->id }}</td>
              <td>{{ $item->id_no }}</td>
              <td>{{ $item->concern }}</td>
              <td>{{ $item->notes }}</td>
              <td>{{ $item->created_at }}</td>
              <td>{{ $item->updated_at }}</td>

              <td><a href="{{ route('log_edit', $item->id) }}" class="btn btn-sm btn-info">
                            <i class="fa fa-edit"></i>
                        </a>

              <form method="POST"
                        action="{{ route('log_delete', $item->id) }}">
                        {{ csrf_field() }}
                        {{ method_field('delete') }}
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?');">
                            <i class="fa fa-trash"></i>
                        </button>
                        </form>

              </td>
            </tr>
          @endforeach
      </tbody>
    </table>
 </div>
 @include('layouts.footer')
  <!-- End your project here-->

  <!-- jQuery -->
  <script type="text/javascript" src="{{ asset('/assets/js/jquery.min.js') }}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{ asset('/assets/js/popper.min.js') }}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{ asset('/assets/js/mdb.min.js') }}"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>

</body>
</html>
