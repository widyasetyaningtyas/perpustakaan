<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kembali extends Model
{
    protected $table='kembali';
    protected $primaryKey='id_kembali';
    public $timestamps = false;
    protected $fillable = array('id_pinjam','no_kembali','aktual_kembali','tgl_kembali','lama_denda','jumlah_denda');

}
