@extends('layouts.event_view')
@section('sidebar')
        <div class="col-md-3">
            <!-- It can be fixed with bootstrap affix http://getbootstrap.com/javascript/#affix-->
            <div id="sidebar" class="well sidebar-nav">
                <h5><i class="glyphicon glyphicon-home"></i>
                    <small><b>MANAGEMENT</b></small>
                </h5>
                <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Add</a></li>
                    <li><a href="#">Search</a></li>
                </ul>
                <h5><i class="glyphicon glyphicon-user"></i>
                    <small><b>USERS</b></small>
                </h5>
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="#">List</a></li>
                    <li><a href="#">Manage</a></li>
                </ul>
            </div>
           

    </div>
@endsection

@section('detail')
    @foreach($events as $key=>$event)
        <h4><small></small></h4>
          <hr>
          <h2>{{$event->nama_event}}</h2>
          <h5><span class="glyphicon glyphicon-time"></span> </h5>
          <h5><span class="label label-danger"></span> <span class="label label-primary">Ipsum</span></h5><br>
          <p>{{$event->deskripsi_event}}</p>
          <br><br>
          
          {{-- <h4><small>RECENT POSTS</small></h4>
          <hr>
          <h2>Officially Blogging</h2>
          <h5><span class="glyphicon glyphicon-time"></span> Post by John Doe, Sep 24, 2015.</h5>
          <h5><span class="label label-success">Lorem</span></h5><br>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <hr>

          <h4>Leave a Comment:</h4>
          <form role="form">
            <div class="form-group">
              <textarea class="form-control" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
          </form>
          <br><br>
          
          <p><span class="badge">2</span> Comments:</p><br>
          
          <div class="row">
            <div class="col-sm-2 text-center">
              <img src="bandmember.jpg" class="img-circle" height="65" width="65" alt="Avatar">
            </div>
            <div class="col-sm-10">
              <h4>Anja <small>Sep 29, 2015, 9:12 PM</small></h4>
              <p>Keep up the GREAT work! I am cheering for you!! Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <br>
            </div>
            <div class="col-sm-2 text-center">
              <img src="bird.jpg" class="img-circle" height="65" width="65" alt="Avatar">
            </div>
            <div class="col-sm-10">
              <h4>John Row <small>Sep 25, 2015, 8:25 PM</small></h4>
              <p>I am so happy for you man! Finally. I am looking forward to read about your trendy life. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <br>
              <p><span class="badge">1</span> Comment:</p><br>
              <div class="row">
                <div class="col-sm-2 text-center">
                  <img src="bird.jpg" class="img-circle" height="65" width="65" alt="Avatar">
                </div>
                <div class="col-xs-10">
                  <h4>Nested Bro <small>Sep 25, 2015, 8:28 PM</small></h4>
                  <p>Me too! WOW!</p>
                  <br>
                </div>
              </div>
            </div>
          </div> --}}
    @endforeach
@endsection