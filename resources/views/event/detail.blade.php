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
        <div style="margin: 0px 100px 0px 100px; ">
        <h4><small></small></h4>
          <hr>
          <h2>{{$event->nama_event}}</h2>
          <div >
            <img src="{{url("/upload/images/" .$event->id.'.jpg')}}" width="400" height="300" class="img-responsive" style=" display: block ;margin-left: auto; margin-right:auto; ">
          </div>
          <br>
          <p>{{$event->deskripsi_event}}</p>
          <br><br>
        </div>
    @endforeach
@endsection