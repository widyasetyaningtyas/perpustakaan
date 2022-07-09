@extends('template.main')
@section('content')
	<section class="content-header">
	      <h1>
	        Peminjaman
	        <small>Control panel</small>
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	        <li class="active">Peminjaman</li>
	      </ol>
	</section>
	<section class="content">
		 <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Peminjaman</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
            	<a href="{{url('/pinjam/create')}}" class="btn btn-primary" style="margin:10px;">Tambah Data Peminjaman</a>
              <a href="{{url('pencarian')}}" class="btn btn-info" style="margin: 10px;">Pencarian</a>
              <table class="table table-striped">
                <tr>
                  <th>No</th>
                  <th>ID Pinjam</th>
                  <th>No Pinjam</th>
                  <th>ID Anggota</th>
                  <th>ID Buku</th>
                  <th>ID Pengguna</th>
                  <th>Jumlah Pinjam</th>
                  <th>Tanggl Pinjam</th>
                  <th>Tanggl Kembali</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
                @foreach ($pinjam as $data)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$data->id_pinjam}}</td>
                  <td>{{$data->no_pinjam}}</td>
                  <td>{{$data->id_anggota}}</td>
                  <td>{{$data->id_buku}}</td>
                  <td>{{$data->id_pengguna}}</td>
                  <td>{{$data->jumlah_pinjam}}</td>
                  <td>{{$data->tgl_pinjam}}</td>
                  <td>{{$data->tgl_kembali}}</td>
                  <td>{{$data->status}}</td>
                  <td>
                  	<a href="" class="btn btn-sm btn-warning">Edit</a>
                  	<a href="{{url('/pinjam/destroy/'.$data->id_pinjam)}}" class="btn btn-sm btn-danger">Hapus</a>
                  </td>
                </tr>
                @endforeach
               </table>
              </div>
            <!-- /.box-body -->
          </div>
	</section>
@endsection