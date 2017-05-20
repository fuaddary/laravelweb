@extends('layouts.master')
@section('content')

{{-- <form action="" method="POST" enctype="multipart/form-data">
  select image to upload 
  <input type="file" name="file" id="file">
  <input type="submit" value="submit" name="submit">
</form>
 --}}

<form action="{{ url('events/create')}}" method="POST">
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
    <input type="radio" name="repeat" value="Harian"> Harian<br>
    <input type="radio" name="repeat" value="Mingguan"> Mingguan<br>
    <input type="radio" name="repeat" value="Bulanan"> Bulanan<br>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Waktu Mulai</label>
    <input type="datetime-local" class="form-control" name="start" placeholder="waktu mulai">
    <label for="exampleInputPassword1">Waktu Selesai</label>
    <input type="datetime-local" class="form-control" name="end" placeholder="waktu selesai">
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

@endsection