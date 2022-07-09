@extends('template.main')
@section('content')
	<section class="content-header">
	      <h1>
	        Pengguna
	        <small>Control panel</small>
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	        <li class="active">Pengguna</li>
	      </ol>
	</section>
	<section class="content">
		 <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pengguna</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
            	<a href="{{url('/pengguna/create')}}" class="btn btn-primary" style="margin:10px;">Tambah Data Pengguna</a>
              <table class="table table-striped">
                <tr>
                  <th>No</th>
                  <th>ID Pengguna</th>
                  <th>Nama</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Level</th>
                  <th>Aksi</th>
                </tr>
                @foreach ($pengguna as $data)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$data->id_pengguna}}</td>
                  <td>{{$data->nama}}</td>
                  <td>{{$data->username}}</td>
                  <td>{{$data->password}}</td>
                  <td>{{$data->level}}</td>
                  <td>
                  	<a href="{{url('/pengguna/edit/'.$data->id_pengguna)}}" class="btn btn-sm btn-warning">Edit</a>
                  	<a href="{{url('/pengguna/destroy/'.$data->id_pengguna)}}" class="btn btn-sm btn-danger">Hapus</a>
                  </td>
                </tr>
                @endforeach
               </table>
              </div>
            <!-- /.box-body -->
          </div>
	</section>
@endsection