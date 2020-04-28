<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark success-color">

  <!-- Navbar brand -->
  <a class="navbar-brand" href="{{ url('/') }}">BeClin</a>

  <!-- Collapse button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="basicExampleNav">

    <!-- Links -->
    <ul class="navbar-nav mr-auto">
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Activity Log</a>
          <span class="sr-only">(current)</span>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="{{ url('/log/index') }}">Logs </a>
          <a class="dropdown-item" href="{{ url('/log/create') }}">Add Logs </a>         
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Medicine Inventory</a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
          
          <a class="dropdown-item" href="{{ url('/inventory/index') }}">View Medicine Inventory</a>
          <a class="dropdown-item" href="{{ url('/inventory/create') }}">Add a Medicine</a>
         
        </div>
      </li>

    </ul>
    <!-- Links -->

    <form class="form-inline">
      <div class="md-form my-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      </div>
    </form>
  </div>
  <!-- Collapsible content -->

</nav>
<!--/.Navbar-->