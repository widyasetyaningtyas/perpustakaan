@extends('template.main')
@section('content')
	<section class="content-header">
	      <h1>
	        Pengembalian
	        <small>Control panel</small>
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	        <li class="active">Pengembalian</li>
	      </ol>
	</section>
	<section class="content">
		 <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Peminjaman</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
            	<a href="{{url('/kembali/create')}}" class="btn btn-primary" style="margin:10px;">Tambah Data Pengembalian</a>
              <a href="{{url('pencarian')}}" class="btn btn-info" style="margin: 10px;">Pencarian</a>
              <table class="table table-striped">
                <tr>
                  <th>No</th>
                  <th>ID Kembali</th>
                  <th>ID Pinjam</th>
                  <th>No Kembali</th>
                  <th>Aktual Kembali</th>
                  <th>Tanggal Kembali</th>
                  <th>Lama Denda</th>
                  <th>Jumlah Denda</th>
                  <th>Aksi</th>
                </tr>
                @foreach ($kembali as $data)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$data->id_kembali}}</td>
                  <td>{{$data->id_pinjam}}</td>
                  <td>{{$data->no_kembali}}</td>
                  <td>{{$data->aktual_kembali}}</td>
                  <td>{{$data->tgl_kembali}}</td>
                  <td>{{$data->lama_denda}}</td>
                  <td>{{$data->jumlah_denda}}</td>
                  <td>
                  	<a href="" class="btn btn-sm btn-warning">Edit</a>
                  	<a href="{{url('/kembali/destroy/'.$data->id_pinjam)}}" class="btn btn-sm btn-danger">Hapus</a>
                  </td>
                </tr>
                @endforeach
               </table>
              </div>
            <!-- /.box-body -->
          </div>
	</section>
@endsection