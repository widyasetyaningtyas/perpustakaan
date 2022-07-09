<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pinjam extends Model
{
    protected $table='pinjam';
    protected $primaryKey='id_pinjam';
    public $timestamps = false;
    protected $fillable = array('no_pinjam','id_anggota','id_buku','id_pengguna','jumlah_pinjam','tgl_pinjam','tgl_kembali','status');

    public function Anggota(){
    	return $this->hasMany('App\Anggota','no_anggota');
    }
    public function Buku(){
    	return $this->belongsTo('App\buku','no_buku');
    }
}
