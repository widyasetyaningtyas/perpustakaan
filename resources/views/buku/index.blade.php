@extends('template.main')
@section('content')
	<section class="content-header">
	      <h1>
	        Buku
	        <small>Control panel</small>
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	        <li class="active">Buku</li>
	      </ol>
	</section>
	<section class="content">
		 <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Buku</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
            	<a href="{{url('/buku/create')}}" class="btn btn-primary" style="margin:10px;">Tambah Data Buku</a>
              <table class="table table-striped">
                <tr>
                  <th>No</th>
                  <th>ID Buku</th>
                  <th>No Buku</th>
                  <th>Judul Buku</th>
                  <th>Tahun Terbit</th>
                  <th>Stok</th>
                  <th>ID Jenis Buku</th>
                  <th>Aksi</th>
                </tr>
                @foreach ($buku as $data)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$data->id_buku}}</td>
                  <td>{{$data->no_buku}}</td>
                  <td>{{$data->judul_buku}}</td>
                  <td>{{$data->tahun_terbit}}</td>
                  <td>{{$data->stok}}</td>
                  <td>{{$data->id_jenis_buku}}</td>
                  <td>
                  	<a href="{{url('/buku/edit/'.$data->id_buku)}}" class="btn btn-sm btn-warning">Edit</a>
                  	<a href="{{url('/buku/destroy/'.$data->id_buku)}}" class="btn btn-sm btn-danger">Hapus</a>
                  </td>
                </tr>
                @endforeach
               </table>
              </div>
            <!-- /.box-body -->
          </div>
	</section>
@endsection