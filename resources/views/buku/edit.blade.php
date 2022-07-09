@extends('template.main')
@section('content')
<section class="content-header">
      <h1>
        Edit Data Buku
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Data Buku</li>
      </ol>
</section>
<section class="content">
	<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Horizontal Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
           <form class="form-horizontal" action="{{url('/buku/update/'.$buku->id_buku)}}" method="POST">
              {{csrf_field()}}
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">ID Buku</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="id_buku" id="id_buku
                    " placeholder="ID Buku" value="{{$buku->id_buku}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">No Buku</label>

                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="no_buku" id="no_buku" placeholder="No Buku" value="{{$buku->no_buku}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Judul Buku</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="judul_buku" id="judul_buku" placeholder="Judul Buku" value="{{$buku->judul_buku}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Tahun Terbit</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="tahun_terbit" id="tahun_terbit" placeholder="Tahun Terbit" value="{{$buku->tahun_terbit}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Stok</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="stok" id="stok" placeholder="Stok" value="{{$buku->stok}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">ID Jenis Buku</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="id_jenis_buku" id="id_jenis_buku" placeholder="ID Jenis Buku" value="{{$buku->id_jenis_buku}}">
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