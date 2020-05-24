@extends('layout.master')

@section('content')
<div class="main">
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">Edit data siswa</h3>
            </div>
            <div class="panel-body">
              <form action="/siswa/{{$siswa->id}}/update" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama"
                    value="{{$siswa->nama}}">
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <textarea name='alamat' class="form-control"
                    placeholder="Masukan Alamat">{{$siswa->alamat}}</textarea>
                </div>
                <div>
                  <a href="/siswa" class="btn btn-secondary">Cancel</a>
                  <button type="submit" class="btn btn-warning">Update</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@stop


@section('content')
@if(session('sukses'))
<div class="alert alert-success" role="alert">
  {{session('sukses')}}
</div>
@endif
<div class="row mt-4">
  <div class="col-12">
    <h1>Edit data siswa</h1>
    <form action="/siswa/{{$siswa->id}}/update" method="POST">
      {{csrf_field()}}
      <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama"
          value="{{$siswa->nama}}">
      </div>
      <div class="form-group">
        <label>Alamat</label>
        <textarea name='alamat' class="form-control" placeholder="Masukan Alamat">{{$siswa->alamat}}</textarea>
      </div>
      <div>
        <a href="/siswa" class="btn btn-secondary">Cancel</a>
        <button type="submit" class="btn btn-warning">Update</button>
      </div>
    </form>
  </div>
</div>
</div>
@endsection