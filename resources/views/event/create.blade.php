@extends('layouts.admin')
@section('head')

<link rel="stylesheet" type="text/css" href="{{asset('dist/css/jquery.datetimepicker.css')}}" >

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="{{asset('dist/js/jquery.datetimepicker.full.js')}}" ></script>  
<script type="text/javascript" src="{{asset('dist/js/jquery.datetimepicker.full.min.js')}}" ></script> 

@endsection
@section('sidebar')
      </div>
        <div class="sidebar-wrapper">
              <ul class="nav">
                  <li class="active">
                      <a href="#">
                          <i class="material-icons">event</i>
                          <p>Create Event</p>
                      </a>
                  </li>
                  <li>
                      <a href="{{ url('/events/manage') }}">
                          <i class="material-icons">content_paste</i>
                          <p>Manage Event</p>
                      </a>
                  </li>
              </ul>
        </div>
      </div>
@endsection
@section('content')

<div class="content" >
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header" data-background-color="blue">
            <h4 class="title">Create Event</h4>
          </div>
          <div class="card-content">
            <form action="{{ url('manager/create')}}" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group label-floating">
                    <label class="control-label">Nama Event</label>
                    <input type="text" class="form-control" name="nama_event" >
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Deskripsi Event</label>
                    <div class="form-group label-floating">
                      <textarea class="form-control" rows="5" name="deskripsi_event"></textarea>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group label-floating">
                    <label class="control-label">Lokasi</label>
                    <input type="text" class="form-control" name="lokasi">
                  </div>
                </div>
              </div>

              <div class="row">
              <div class="col-md-6">
                  <label for="exampleInputEmail1">Ulangi</label><br>
                  <input type="radio" name="repeat" value="1"> Harian<br>
                  <input type="radio" name="repeat" value="2"> Mingguan<br>
                  <input type="radio" name="repeat" value="3"> Bulanan<br>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group label-floating">
                    <label class="control-label">Waktu mulai</label>
                    <input type="text" class="datetimepicker" name="start" style="width: 100%;">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group label-floating">
                    <label class="control-label">Waktu Selesai</label>
                    <input type="text" class="datetimepicker" name="end" style="width: 100%;">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <label for="exampleInputFile">Gambar</label>
                  <input class="btn btn-primary" type="file" name="image" data-background-color="blue">
                  <p class="help-block">Upload maks 2MB</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group label-floating">
                    <label class="control-label">Nama Organisasi</label>
                    <input type="text" class="form-control" name="nama_org">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Deskripsi Organisasi</label>
                    <div class="form-group label-floating">
                      <textarea class="form-control" rows="5" name="deskripsi_org"></textarea>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <label for="exampleInputEmail1">kategori</label><br>
                  <input type="checkbox" name="kategori" value="Hiburan"> Hiburan<br>
                  <input type="checkbox" name="kategori" value="Sosial"> Sosial<br>
                  <input type="checkbox" name="kategori" value="Kompetisi"> Kompetisi<br>
                  <input type="checkbox" name="kategori" value="Seminar"> Seminar<br>
                  <input type="checkbox" name="kategori" value="Festifal"> Festifal<br>
                  <input type="checkbox" name="kategori" value="Lainnya"> Lainnya<br>
                </div>
              </div>
              
              <button type="submit" class="btn btn-primary pull-right" data-background-color="blue">Create</button>
              <div class="clearfix"></div>
            </form>
          </div>
        </div>
      </div>

    </div>

  <script>
    $(".datetimepicker").datetimepicker();
  </script>
  @endsection