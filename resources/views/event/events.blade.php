@extends('layouts.master')
@section('head')
<link rel="stylesheet" type="text/css" href="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/css/mdb3/mdb.min.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/css/mdb3/style.min.css">
<link rel="stylesheet" type="text/css" href="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/css/mdb3/prism.css">
<link rel="stylesheet" type="text/css" href="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/css/mdb3/site.css">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
@endsection
@section('content')

<div class="col-md-4">

    <div class="container">
        <div class="col-md-4">
            <!-- It can be fixed with bootstrap affix http://getbootstrap.com/javascript/#affix-->
            {{-- <div id="sidebar" class="well sidebar-nav">
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
            </div> --}}
        </div>
    </div>
</div>
<div class="col-md-12">
    @foreach($events as $key=>$event)
    <div class="col-md-4">
        <div class="elegant-card z-depth-1 hoverable" style="max-height: 500">
            <!-- Image wrapper -->
            <div class="card-up view overlay hm-white-slight" style="height: 200px;">
                <h5 class="card-label"> <span class="label rgba-black-light">{{$event->kategori}}</span></h5>
                <a><img src="{{url("download/" .$event->id.'.jpg')}}" class="img-responsive"></a>
                <div class="mask waves-effect waves-light"> </div>
            </div>

            <!-- Button -->
            <a class="btn-floating btn-large waves-effect waves-light stylish-color" href=" {{ url('event/detail/'.$event->id) }}"><i class="fa fa-chevron-right"></i></a>
            <!-- Content -->
            <div class="card-content" style="height: 200px;">
                <h5>{{$event->nama_event}}</h5>
                <h4>{{$event->lokasi}}</h4>
            </div>



            <!-- Footer -->
            <div class="card-footer">
                <ul class="list-inline">
                    <li><i class="fa fa-clock-o"></i>{{$event->start}}</li>
                </ul>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection