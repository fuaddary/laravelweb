@extends('layouts.master')
@section('head')

<link rel="stylesheet" type="text/css" href="{{asset('dist/css/jquery.datetimepicker.css')}}" >

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="{{asset('dist/js/jquery.datetimepicker.full.js')}}" ></script>  
<script type="text/javascript" src="{{asset('dist/js/jquery.datetimepicker.full.min.js')}}" ></script> 

@endsection
@section('content')

<div class="container">
  <form action="{{ url('events/create')}}" method="POST" enctype="multipart/form-data">

  {{csrf_field()}}
    <div class="form-group">
      <label for="exampleInputEmail1">Nama Event</label>
      <input type="text" class="form-control" name="nama_event" placeholder="Nama Event">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Deskripsi_Event</label>
      <input type="longtext" class="form-control" name="deskripsi_event" placeholder="Deskripsi event">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Lokasi</label>
      <input type="text" class="form-control" name="lokasi" placeholder="Lokasi">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Ulangi</label><br>
      <input type="radio" name="repeat" value="1"> Harian<br>
      <input type="radio" name="repeat" value="2"> Mingguan<br>
      <input type="radio" name="repeat" value="3"> Bulanan<br>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Waktu Mulai</label>
      <input type="text" class="datetimepicker" name="start">
      <label for="exampleInputPassword1">Waktu Selesai</label>
      <input type="text" class="datetimepicker" name="end">
    </div>
    <div class="form-group">
      <label for="exampleInputFile">Gambar</label>
      <input type="file" name="image">
      <p class="help-block">Upload maks 2MB</p>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Nama Organisasi</label>
      <input type="text" class="form-control" name="nama_org" placeholder="Nama Event">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Deskripsi Organisasi</label>
      <input type="text" class="form-control" name="deskripsi_org" placeholder="Deskripsi">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">kategori</label><br>
      <input type="checkbox" name="kategori" value="Hiburan"> Hiburan<br>
      <input type="checkbox" name="kategori" value="Sosial"> Sosial<br>
      <input type="checkbox" name="kategori" value="Kompetisi"> Kompetisi<br>
      <input type="checkbox" name="kategori" value="Seminar"> Seminar<br>
      <input type="checkbox" name="kategori" value="Festifal"> Festifal<br>
      <input type="checkbox" name="kategori" value="Lainnya"> Lainnya<br>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

<form action="#" method="post">
                <div class="form-group">
                  <input type="email" class="form-control" name="emailto" placeholder="Email to:">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" placeholder="Subject">
                </div>
                <div>
                  <textarea class="textarea" placeholder="Message" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
              </form>

<script>
  $(".datetimepicker").datetimepicker();
</script>

<script src="{{asset('bower_components/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}">
</script>
<link rel="stylesheet" href="{{asset('bower_components/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">

@endsection