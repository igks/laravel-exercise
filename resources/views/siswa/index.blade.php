    @extends('layout.master')

    @section('content')
    <div class="main">
      <div class="main-content">
        <div class="container-fluid">
          <div class="row">
            <div class="panel">
              <div class="panel-heading">
                <h2 class="panel-title">Data Siswa</h2>
                <div class="right">
                  <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i
                      class="lnr lnr-plus-circle" style="font-size: 24px;"></i></button>
                </div>

              </div>
              <div class="panel-body">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data_siswa as $siswa)
                    <tr>
                      <td> <a href="/siswa/{{$siswa->id}}/profile"> {{$siswa->nama}} </a></td>
                      <td> {{$siswa->alamat}}</td>
                      <td>
                        <a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning">Edit</a>
                        <a href="/siswa/{{$siswa->id}}/delete" class="btn btn-danger"
                          onclick="return confirm('yakin mau di hapus')">Delete</a>
                      </td>

                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class=" modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah data siswa</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="/siswa/create" method="POST">
              {{csrf_field()}}
              <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama">
              </div>
              <div class="form-group">
                <label>Alamat</label>
                <textarea name='alamat' class="form-control" placeholder="Masukan Alamat"></textarea>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
          </form>
        </div>
      </div>
    </div>

    @endsection