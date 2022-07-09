<?php

namespace App\Http\Controllers;

use Request;
use App\Pinjam;
use App\Anggota;
use App\Pengguna;
use App\Buku;
use App\Jenisbuku;
use App\Kembali;

class PinjamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function NoPinjam(){
        $tgl = date('Y-m-d');
        $number = Pinjam::where("created_at","like","%".$tgl."%")->count();
        $angka = $number +1;
        $codes = str_pad($angka, 5, rand(11111,99999), STR_PAD_LEFT);
        $code = 'BUKU-'.date('ymd').$codes;
        return $code;
    }


    public function index()
    {
        $data['pinjam']= Pinjam::get();
        return view('pinjam.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['nomat'] = self::NoPinjam();
        return view('pinjam.create',$data);
        
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_pinjam = new \App\Pinjam;
        $new_pinjam->id_pinjam = self::NoPinjam();
        $new_pinjam->id_pengguna = ('1');
        $new_pinjam->id_anggota = Request::get('id_anggota');
        $new_pinjam->nama = Request::get('nama');
        $new_pinjam->alamat = Request::get('alamat');
        $new_pinjam->no_buku = Request::get('no_buku');
        $new_pinjam->judul_buku = Request::get('judul_buku');
        $new_pinjam->stok = Request::get('stok');
        $new_pinjam->jumlah_pinjam = Request::get('jumlah_pinjam');
        $new_pinjam->tgl_pinjam = Request::get('tgl_pinjam');
        $new_pinjam->tgl_kembali = Request::get('tgl_kembali');
        $new_pinjam->save();
        return redirect('pinjam');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pinjam =Pinjam::find($id)->delete();
        return redirect('pinjam');
    }

    public function cari(){
        $id = Request::get('id');
        if ($id=='') {
            $data['val'] = 2;
        }else{
            $isi = Anggota::where('no_anggota','=',$id)->first();
            if (empty($isi)) {
                $data['val'] = 0;
            }else{
                $data['val'] = 1;
                $data['data'] = $isi;
            }
        }

        return response($data);
    }

    public function cary(){
        $id = Request::get('id');
        if ($id=='') {
            $data['val'] = 2;
        }else{
            $isi = Buku::where('no_buku','=',$id)->first();
            if (empty($isi)) {
                $data['val'] = 0;
            }else{
                $data['val'] = 1;
                $data['data'] = $isi;
            }
        }

        return response($data);
    }
}
