@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Table Jadwal Harian</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Jadwal</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Jadwal Harian Table</h3>
            <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i> Add Jadwal Harian</button>
          </div>
              <!-- /.card-header -->
          <div class="card-body p-0">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th style="width: 10px">id</th>
                  <th>Kode</th>
                  <th>Nama Jadwal</th>
                  <th>Document</th>
                  <th>Update At</th>
                  <th style="width: 40px">Action</th>
                </tr>
              </thead>
              <tbody>
                   @foreach($listUser as $data)
                      <tr>
                        <td>{{$data->id}}</td>
                        <td>{{$data->kode_jadwal}}</td>
                        <td>{{$data->nama_jadwal}}</td>
                        <td>{{$data->document}}</td>
                        <td>{{$data->updated_at}}</td>
                        <td>
                          <a href="#"
                              <i class="fa fa-edit blue"></i>
                                <a/>
                                  /
                                <a href="#"
                              <i class="fa fa-trash red"></i>
                          <a/>
                        </td>
                      </tr>
                   @endforeach
                </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Jadwal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>

                  <form method="POST" action="{{ route('jadwal.store') }}" role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                      <div class="form-group">
                        <label>Kode Jadwal</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Kode Jadwal" name="kode_jadwal">
                      </div>

                      <div class="form-group">
                        <label>Nama Jadwal</label>
                        <textarea class="form-control" rows="3" placeholder="Nama Jadwal ..." name="nama_jadwal"></textarea>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputFile">Pilih File</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile" name="document">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>

          </div><!-- /.container-fluid -->
    </section>
      <!-- /.content -->
@endsection
