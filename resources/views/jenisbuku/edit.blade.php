@extends('template.main')
@section('content')
<section class="content-header">
      <h1>
        Edit Data Jenis Buku
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Data Jenis Buku</li>
      </ol>
</section>
<section class="content">
	<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Horizontal Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
           <form class="form-horizontal" action="{{url('/jenisbuku/update/'.$jenisbuku->id_jenis_buku)}}" method="POST">
              {{csrf_field()}}
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">ID Jenis Buku</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="id_jenis_buku" id="id_jenis_buku" placeholder="ID Jenis Buku" value="{{$jenisbuku->id_jenis_buku}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Jenis Buku</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="jenis_buku" id="jenis_buku" placeholder="Nama" value="{{$jenisbuku->jenis_buku}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">No Rak</label>

                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="no_rak" id="no_rak" placeholder="No Rak" value="{{$jenisbuku->no_rak}}">
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