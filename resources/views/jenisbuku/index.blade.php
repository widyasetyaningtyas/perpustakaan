@extends('template.main')
@section('content')
	<section class="content-header">
	      <h1>
	        Jenis Buku
	        <small>Control panel</small>
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	        <li class="active">Jenis Buku</li>
	      </ol>
	</section>
	<section class="content">
		 <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Jenis Buku</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
            	<a href="{{url('/jenisbuku/create')}}" class="btn btn-primary" style="margin:10px;">Tambah Data Jenis Buku</a>
              <table class="table table-striped">
                <tr>
                  <th>No</th>
                  <th>ID Jenis Buku</th>
                  <th>Jenis Buku</th>
                  <th>No Rak</th>
                  <th>Aksi</th>
                </tr>
                @foreach ($jenisbuku as $data)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$data->id_jenis_buku}}</td>
                  <td>{{$data->jenis_buku}}</td>
                  <td>{{$data->no_rak}}</td>
                  <td>
                  	<a href="{{url('/jenisbuku/edit/'.$data->id_jenis_buku)}}" class="btn btn-sm btn-warning">Edit</a>
                  	<a href="{{url('/jenisbuku/destroy/'.$data->id_jenis_buku)}}" class="btn btn-sm btn-danger">Hapus</a>
                  </td>
                </tr>
                @endforeach
               </table>
              </div>
            <!-- /.box-body -->
          </div>
	</section>
@endsection