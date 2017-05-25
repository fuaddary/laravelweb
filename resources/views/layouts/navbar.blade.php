
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a @yield ('color') href="#">Home</a></li>
        <li><a @yield ('color') href="#">About</a></li>
        <li><a @yield ('color') href="#">Projects</a></li>
        <li><a @yield ('color') href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a @yield ('color') href="{{ url('/login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <li><a @yield ('color') href="{{ url('/register') }}"><span class="glyphicon glyphicon-log-in"></span> Register</a></li>
      </ul>
    </div>
  </div>
</nav>
