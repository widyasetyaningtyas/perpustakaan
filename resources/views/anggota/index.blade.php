@extends('template.main')
@section('content')
<section class="content-header">
	    <h1>
	       Anggota
	       <small>Control panel</small>
	    </h1>
	    <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	        <li class="active">Anggota</li>
	    </ol>
</section>
<section class="content">
		 <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Anggota</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
            	<a href="{{url('/anggota/create')}}" class="btn btn-primary" style="margin:10px;">Tambah Data anggota</a>
              <table class="table table-striped">
                <tr>
                  <th>No</th>
                  <th>ID Anggota</th>
                  <th>No Anggotaa</th>
                  <th>Nama Anggota</th>
                  <th>Alamat</th>
                  <th>no_hp</th>
                  <th>Aksi</th>
                </tr>
                @foreach ($anggota as $data)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$data->id_anggota}}</td>
                  <td>{{$data->no_anggota}}</td>
                  <td>{{$data->nama_anggota}}</td>
                  <td>{{$data->alamat}}</td>
                  <td>{{$data->no_hp}}</td>
                  <td>
                  	<a href="{{url('/anggota/edit/'.$data->id_anggota)}}" class="btn btn-sm btn-warning">Edit</a>
                  	<a href="{{url('/anggota/destroy/'.$data->id_anggota)}}" class="btn btn-sm btn-danger">Hapus</a>
                  </td>
                </tr>
                @endforeach
               </table>
              </div>
            <!-- /.box-body -->
          </div>
</section>
@endsection