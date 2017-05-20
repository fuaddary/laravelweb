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

    @foreach($events as $key=>$event)
        <div class="col-md-4">
                <div class="elegant-card z-depth-1 hoverable">
                    <!-- Image wrapper -->
                    <div class="card-up view overlay hm-white-slight">
                        <h5 class="card-label"> <span class="label rgba-black-light">{{$event->kategori}}</span></h5>
                        <a><img src="https://mdbootstrap.com/images/regular/nature/img%20(48).jpg" class="img-responsive"></a>
                        <div class="mask waves-effect waves-light"> </div>
                    </div>

                    <!-- Button -->
                    <a class="btn-floating btn-large waves-effect waves-light stylish-color"><i class="fa fa-chevron-right"></i></a>
                    <!-- Content -->
                    <div class="card-content">
                        <h5>{{$event->nama_event}}</h5>
                        <p style="word-wrap: break-word;">{{$event->deskripsi_event}}</p>
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

@endsection