<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('/material/assets/img/apple-icon.png')}}" />
  <link rel="icon" type="image/png" href="{{asset('/material/assets/img/favicon.png')}}" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1 ass" />

  <title>Cari Events | Manage</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="{{asset('/material/assets/css/bootstrap.min.css')}}" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="{{asset('/material/assets/css/material-dashboard.css')}}" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    @yield('head')
</head>

<body>

  <div class="wrapper">

      <div class="sidebar" data-color="blue" data-image="{{ asset('/material/assets/img/sidebar-1.jpg') }}">
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text">
          Cari Events
        </a>
      @yield('sidebar');
      <div class="main-panel">
      <nav class="navbar navbar-transparent navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="material-icons">person</i>
                  <p class="hidden-lg hidden-md">Notifications</p>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="#">Mike John responded to your email</a></li>
                  <li><a href="#">You have 5 new tasks</a></li>
                  <li><a href="#">You're now friend with Andrew</a></li>
                  <li><a href="#">Another Notification</a></li>
                  <li><a href="#">Another One</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    @yield('content')
  
    </div>
  </div>

</body>

  <!--   Core JS Files   -->
  <script src="{{asset('/material/assets/js/jquery-3.1.0.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('/material/assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('/material/assets/js/material.min.js')}}" type="text/javascript"></script>

  <!--  Charts Plugin -->
  <script src="{{asset('/material/assets/js/chartist.min.js')}}"></script>

  <!--  Notifications Plugin    -->
  <script src="{{asset('/material/assets/js/bootstrap-notify.js')}}"></script>

  <!--  Google Maps Plugin    -->
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

  <!-- Material Dashboard javascript methods -->
  <script src="{{asset('/material/assets/js/material-dashboard.js')}}"></script>

</html>
