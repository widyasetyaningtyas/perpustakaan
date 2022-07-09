@extends('template.main')
@section('content')
<section class="content-header">
      <h1>
        Edit Data Peminjaman
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Data Peminjaman</li>
      </ol>
</section>
<section class="content">
	<div class="box">
        <div class="box-body">
        	<div class="row">
        		<form action="{{url('/pinjam/store')}}"method="POST">
                    {{csrf_field()}}
        			<div class="col-md-12">
                        <h2 style="text-align: center; font-family: serif;"><b>Peminjaman</b></h2>
            			<div class="form-group">
            				<label>ID Pinjam</label>
            				<input type="text" id="id_pinjam" name="id_pinjam" class="form-control" value="{{$nomat}}" placeholder="">
            			</div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>No Anggota</label>
                            <input type="text" name="no_anggota" class="form-control" id="no_anggota" placeholder="No Anggota" onkeyup="anggota()">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Nama Anggota</label>
                            <input type="text" name="nama_anggota" class="form-control" id="nama_anggota" placeholder="Nama Anggota">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>No Buku</label>
                            <input type="text" name="no_buku" class="form-control" id="no_buku" placeholder="No Buku" onkeyup="buku()">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Nama Buku</label>
                            <input type="text" name="judul_buku" class="form-control" id="judul_buku" placeholder="Nama Buku">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Stok</label>
                            <input type="text" name="stok" class="form-control" id="stok" placeholder="Stok">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Jumlah Pinjam</label>
                            <input type="text" name="jumlah_pinjam" class="form-control" id="jumlah_pinjam" placeholder="Jumlah Pinjam">
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Tanggal Pinjam</label>
                            <input type="text" name="tgl_pinjam" class="form-control" value="{{date('d-m-Y')}}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Tanggal Kembali</label>
                            <input type="text" name="tgl_kembali" class="form-control" id="tgl_kembali" 
                                value="<?php
                                        $pinjam            = date("d-m-Y");
                                        $tujuh_hari        = mktime(0,0,0,date("n"),date("j")+7,date("Y"));
                                        $kembali           = date("d-m-Y", $tujuh_hari);
                                        echo "$kembali";
                                    ?>">
                                
                        </div>
                    </div>
        			<input type="hidden" name="id_pinjam" id="id_pinjam">
        			<input type="hidden" name="id_anggota" id="id_anggota">
        		</div>
        		<div class="box-footer">
        			<button type="submit" class="btn btn-default">Cancel</button>
        			<button type="submit" class="btn btn-info pull-right">Simpan</button>
        		</div>
        		</form>
        	</div>
        </div>
    </div>
</section>
@endsection

@push('js')
<script type="text/javascript">
    function anggota(){
        iddd = $("#no_anggota").val()
        if (iddd==''){
            $('#nama_anggota').val('');
            $('#alamat').val('');
        }
        $.ajax({
            url:"{{route('cari')}}",
            type:"GET",
            dataType:"json",
            data:{
                id:$("#no_anggota").val()
            },
            success: function(hasil) {
               if(hasil.val==0) {
                //alert('data tidak ditemukan');
                $('#nama_anggota').val('');
                $('#alamat').val('');

                }else if(hasil.val==2){
                //alert('data tidak ditemukan 2');
                $('#nama_anggota').val('');
                $('#alamat').val('');
                }else{
                //alert('data tidak ditemukan 3');
                $('#nama_anggota').val(hasil.data.nama_anggota);
                $('#alamat').val(hasil.data.alamat);
                }
            } 
        });
    }

    function buku(){
        iddd = $("#no_buku").val()
        if (iddd==''){
            $('#judul_buku').val('');
            $('#stok').val('');
        }
        $.ajax({
            url:"{{route('cary')}}",
            type:"GET",
            dataType:"json",
            data:{
                id:$("#no_buku").val()
            },
            success: function(hasil) {
               if(hasil.val==0) {
                //alert('data tidak ditemukan');
                $('#judul_buku').val('');
                $('#stok').val('');

                }else if(hasil.val==2){
                //alert('data tidak ditemukan 2');
                $('#judul_buku').val('');
                $('#stok').val('');
                }else{
                //alert('data tidak ditemukan 3');
                $('#judul_buku').val(hasil.data.judul_buku);
                $('#stok').val(hasil.data.stok);
                }
            } 
        });
    }        
</script>
