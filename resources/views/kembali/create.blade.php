@extends('template.main')
@section('content')
<section class="content-header">
      <h1>
        Edit Data Pengembalian
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Data Pengembalian</li>
      </ol>
</section>
<section class="content">
	<div class="box">
        <div class="box-body">
        	<div class="row">
        		<form action="{{url('/kembali/store')}}"method="POST">
                    {{csrf_field()}}
        			<div class="col-md-12">
                        <h2 style="text-align: center; font-family: serif;"><b>Pengembalian</b></h2>
            			<div class="form-group">
            				<label>No Pinjam</label>
            				<input type="text" name="no_pinjam" class="form-control" value="{{$nomat}}">
            			</div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>ID Kembali</label>
                            <input type="text" name="id_kembali" class="form-control" id="id_kembali" placeholder="ID Kembali" onkeyup="Anggota()">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Nama Anggota</label>
                            <input type="text" name="nama_anggota" class="form-control" id="nama_anggota" placeholder="Nama Anggota" onkeyup="Anggota()">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Buku</label>
                            <input type="text" name="buku" class="form-control" id="buku" placeholder="Buku">
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
                            <label>Jumlah Pinjam</label>
                            <input type="text" name="jumlah_pinjam" class="form-control" id="jumlah_pinjam" placeholder="Jumlah Pinjam">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Tanggal Pinjam</label>
                            <input type="text" name="tgl_pinjam" class="form-control" id="tgl_pinjam" placeholder="Tanggal Pinjam">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Tanggal Kembali</label>
                            <input type="text" name="tgl_kembali" class="form-control" id="tgl_kembali" placeholder="Tanggal Kembali">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Aktual Kembali</label>
                            <input type="text" name="aktual_kembali" class="form-control" id="aktual_kembali" placeholder="Aktual Kembali">
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Lama Denda</label>
                            <input type="text" name="lama_denda" class="form-control" placeholder="Lama Denda">
                        </div>
                    </div>
        			<input type="hidden" name="id_kembali" id="id_kembali">
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
    function Anggota(){
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
</script>
