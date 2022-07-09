@extends('template.main')
@section('content')
<section class="content-header">
      <h1>
        Edit Data Pengguna
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Data Pengguna</li>
      </ol>
</section>
<section class="content">
	<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Horizontal Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
           <form class="form-horizontal" action="{{url('/pengguna/update/'.$pengguna->id_pengguna)}}" method="POST">
              {{csrf_field()}}
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">ID Pengguna</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="id_pengguna" id="id_pengguna" placeholder="ID Pengguna" value="{{$pengguna->id_pengguna}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="{{$pengguna->nama}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Username</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="{{$pengguna->username}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10">
                    <input type="Password" class="form-control" name="password" id="password" placeholder="Password" value="{{$pengguna->password}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Level</label>

                  <div class="col-sm-10">
                    <select name="level" class="form-control" id="level" placeholder="Level" value="{{$pengguna->level}}">
                      <option>--pilih--</option>
                      <option value="Admin">Admin</option>
                      <option value="Pengguna">Pengguna</option>
                    </select>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Batal</button>
                <button type="submit" class="btn btn-info pull-right">Simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
</section>
@endsection