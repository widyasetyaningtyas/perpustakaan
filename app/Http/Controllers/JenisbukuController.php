<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jenisbuku;

class JenisbukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['jenisbuku']= Jenisbuku::get();
        return view('jenisbuku.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jenisbuku.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jenisbuku = new Jenisbuku;
        $jenisbuku->fill($request->all());
        $jenisbuku->save();
        return redirect('jenisbuku');
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
    public function edit($id_jenis_buku)
    {
        $data['jenisbuku']= Jenisbuku::find($id_jenis_buku);
        return view('jenisbuku.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_jenis_buku)
    {
        $jenisbuku=  Jenisbuku::find($id_jenis_buku);
        $jenisbuku->fill($request->all());
        $jenisbuku->update();
        return redirect('jenisbuku');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_jenis_buku)
    {
        $jenisbuku = Jenisbuku::find($id_jenis_buku)->delete();
        return redirect('jenisbuku');
    }
}
