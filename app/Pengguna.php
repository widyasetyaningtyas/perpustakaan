<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $table='pengguna';
    protected $primaryKey='id_pengguna';
    public  $timestamps = false;
    protected $fillable=array('nama','username','password','level');
}
