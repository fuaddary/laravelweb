@extends('layouts.master')
@section('content')

{{-- <form action="" method="POST" enctype="multipart/form-data">
  select image to upload 
  <input type="file" name="file" id="file">
  <input type="submit" value="submit" name="submit">
</form>
 --}}

<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Event</label>
    <input type="text" class="form-control" id="nama_event" placeholder="Nama Event">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Deskripsi_Event</label>
    <input type="longtext" class="form-control" id="exampleInputEmail1" placeholder="Deskripsi event">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Lokasi</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Lokasi">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Ulangi</label><br>
    <input type="radio" name="gender" value="1"> Harian<br>
    <input type="radio" name="gender" value="2"> Mingguan<br>
    <input type="radio" name="gender" value="3"> Bulanan<br>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Waktu Mulai</label>
    <input type="datetime-local" class="form-control" id="exampleInputPassword1" placeholder="waktu mulai">
    <label for="exampleInputPassword1">Waktu Selesai</label>
    <input type="datetime-local" class="form-control" id="exampleInputPassword1" placeholder="waktu selesai">
  </div>
  <div class="form-group">
    <label for="exampleInputFile">Gambar</label>
    <input type="file" id="exampleInputFile">
    <p class="help-block">Upload maks 2MB</p>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Organisasi</label>
    <input type="text" class="form-control" id="nama_event" placeholder="Nama Event">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Deskripsi Organisasi</label>
    <input type="text" class="form-control" id="nama_event" placeholder="Nama Event">

  </div>
  
  <button type="submit" class="btn btn-default">Submit</button>
</form>

@endsection