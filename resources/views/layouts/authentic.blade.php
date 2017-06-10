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


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="{{ url('/') }}">CariEvent</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
    </div>
  </div>
</nav>


    @yield('content')

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
