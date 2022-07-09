<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table='buku';
    protected $primaryKey='id_buku';
    public  $timestamps = false;
    protected $fillable=array('no_buku','judul_buku','tahun_terbit','stok','id_jenis_buku');

    
    public function pinjam(){
    	return $this->belongsTo('App\Pinjam','id_pinjam');
    }
    public function pengguna(){
    	return $this->hasMany('App\Pengguna','id_pengguna');
    }
}
	