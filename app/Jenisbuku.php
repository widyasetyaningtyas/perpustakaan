<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenisbuku extends Model
{
    protected $table='jenisbuku';
    protected $primaryKey='id_jenis_buku';
    public  $timestamps = false;
    protected $fillable=array('jenis_buku','no_rak');
}
