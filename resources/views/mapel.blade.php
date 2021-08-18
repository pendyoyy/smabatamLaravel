@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Table Mata Pelajaran</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Mapel</li>
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
            <h3 class="card-title">Mata Pelajaran</h3>
            <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i> Add Mapel</button>
          </div>
              <!-- /.card-header -->
          <div class="card-body p-0">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th style="width: 10px">id</th>
                  <th>Nama Mapel</th>
                  <th>Update At</th>
                  <th style="width: 40px">Action</th>
                </tr>
              </thead>
              <tbody>
                   @foreach($listUser as $data)
                      <tr>
                        <td>{{$data->id}}</td>
                        <td>{{$data->nama_mapel}}</td>
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
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Mapel</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>

                  <form method="POST" action="{{ route('mapel.store') }}" role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                      <div class="form-group">
                        <label>Nama Mapel</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Mapel" name="nama_mapel">
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
