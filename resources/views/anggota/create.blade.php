@extends('template.main')
@section('content')
<section class="content-header">
      <h1>
        Tambah Data Anggota
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tambah Data Anggota</li>
      </ol>
</section>
<section class="content">
	<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Horizontal Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="{{url('/anggota/store')}}" method="POST">
            	{{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">ID Anggota</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="id_anggota" id="id_anggota" placeholder="ID Anggota">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">No Anggota</label>

                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="no_anggota" id="no_anggota" placeholder="No Anggota">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Anggota</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_anggota" id="nama_anggota" placeholder="Nama Anggota">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">No HP</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="No HP">
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