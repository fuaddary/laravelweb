@extends('layouts.master')
@section('head')
<style> 
.navbar-inverse{
  position: absolute;
  z-index: 1; 
  width: 100%; 
  background-color: transparent;
  border:none;}
.
</style>
@endsection
@section('color')
  style="color: white"
@endsection
@section('content')
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <div style="height: 700px ; background-image: url('/head.jpg'); background-size: cover; background-attachment: fixed;">
        </div>
        <div class="carousel-caption " style="margin-bottom: 200px; border-width: 3px; border-color: white; border-radius: 21px; border-style: solid;">
          <h3 style="font-size: 40px;">Temukan Eventmu Sekarang</h3>
          <div class="col-sm-6 col-md-6" style="width: 100%" >
            <form action="{{ url('/search') }}" method="get" class="navbar-form" role="search" >
                <div class="input-group" >
                    <input type="text" class="form-control" placeholder="Search" name="search" style="width: 600px">
                    <div class="input-group-btn" >
                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                </div>
            </form>
        </div>        
        </div>      
      </div>
    </div>

<div class="container text-center">    
  <h2 style="padding: 20px;">KATEGORI</h2><br>
  <div class="row">
    <div class="col-sm-4">
      <img src="/hiburan.jpg" class="img-responsive" style="width:100%; position: cover; ; height: 200px;" alt="Image">
      <p>Hiburan</p>
    </div>
    <div class="col-sm-4"> 
      <img src="/seminar.jpg" class="img-responsive" style="width:100%; position: cover; ; height: 200px;" alt="Image">
      <p>Seminar</p>    
    </div>
    <div class="col-sm-4"> 
      <img src="/sosial.jpg" style="width:100%; position: cover; ; height: 200px;" alt="Image">
      <p>Sosial</p>    
    </div>
     <div class="col-sm-4">
      <img src="/competition.jpg" class="img-responsive" style="width:100%; position: cover; ; height: 200px;" alt="Image">
      <p>Kompetisi</p>
    </div>
    <div class="col-sm-4"> 
      <img src="festival.jpg" class="img-responsive" style="width:100%; position: cover; ; height: 200px;" alt="Image">
      <p>Festifal</p>    
    </div>
    <div class="col-sm-4"> 
      <img src="/other.jpg" class="img-responsive" style="width:100%; position: cover; ; height: 200px;" alt="Image">
      <p>Lainnya</p>    
    </div>

  </div>
</div>

@endsection