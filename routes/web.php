<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/anggota','AnggotaController@index')->name('anggota');
Route::get('/anggota/create','AnggotaController@create');
Route::post('/anggota/store','AnggotaController@store')->name('/anggota/store');
Route::get('/anggota/edit/{id_anggota}','AnggotaController@edit')->name('anggota/edit/{id_anggota}');
Route::post('/anggota/update/{id_anggota}','AnggotaController@update');
Route::get('/anggota/destroy/{id_anggota}','AnggotaController@destroy');

Route::get('/pengguna','PenggunaController@index')->name('pengguna');
Route::get('/pengguna/create','PenggunaController@create');
Route::post('/pengguna/store','PenggunaController@store')->name('/pengguna/store');
Route::get('/pengguna/edit/{id_pengguna}','PenggunaController@edit')->name('pengguna/edit/{id_pengguna}');
Route::post('/pengguna/update/{id_pengguna}','PenggunaController@update');
Route::get('/pengguna/destroy/{id_pengguna}','PenggunaController@destroy');

Route::get('/jenisbuku','JenisbukuController@index')->name('jenisbuku');
Route::get('/jenisbuku/create','JenisbukuController@create');
Route::post('/jenisbuku/store','JenisbukuController@store')->name('/jenisbuku/store');
Route::get('/jenisbuku/edit/{id_jenis_buku}','JenisbukuController@edit')->name('pengguna/edit/{id_pengguna}');
Route::post('/jenisbuku/update/{id_jenis_buku}','JenisbukuController@update');
Route::get('/jenisbuku/destroy/{id_jenis_buku}','JenisbukuController@destroy');

Route::get('/buku','BukuController@index')->name('buku');
Route::get('/buku/create','BukuController@create');
Route::post('/buku/store','BukuController@store')->name('/buku/store');
Route::get('/buku/edit/{id_buku}','BukuController@edit')->name('buku/edit/{id_buku}');
Route::post('/buku/update/{id_buku}','BukuController@update');
Route::get('/buku/destroy/{id_buku}','BukuController@destroy');

Route::get('/pinjam','PinjamController@index')->name('pinjam');
Route::get('/pinjam/create','PinjamController@create')->name('/pinjam/create');
Route::post('/pinjam/store','PinjamController@store');
Route::get('/cari/Anggota','PinjamController@cari')->name('cari');
Route::get('/cary/pengguna','PinjamController@cary')->name('cary');
Route::get('/pinjam/destroy/{id_pinjam}','PinjamController@destroy');

Route::get('/kembali','KembaliController@index')->name('kembali');
Route::get('/kembali/create','KembaliController@create')->name('/kembali/create');
Route::post('/kembali/store','KembaliController@store');