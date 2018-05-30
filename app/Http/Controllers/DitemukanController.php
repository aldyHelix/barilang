<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ditemukan;

class DitemukanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ditemukans = \App\Ditemukan::all();
        return view('ditemukan', compact('ditemukans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createditemukan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasfile('file_gambar')){
            $file = $request->file('file_gambar');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
        }
        $ditemukan = new \App\Ditemukan;
        $ditemukan->nama_barang = $request->get('nama_barang');
        $date=date_create($request->get('tgl_ditemukan'));
        $format = date_format($date,"d-m-Y");
        $ditemukan->tgl_ditemukan = strtotime($format);
        $ditemukan->jenis_barang = $request->get('jenis_barang');
        $ditemukan->nomor_penemu = $request->get('nomor_penemu');
        $ditemukan->lokasi_ditemukan = $request->get('lokasi_ditemukan');
        $ditemukan->ciri_ciri_unik = $request->get('ciri_ciri_unik');
        $ditemukan->file_gambar = $name;
        $ditemukan->deskripsi = $request->get('deskripsi');
        $ditemukan->save();

        return redirect('ditemukan')->with('success','Data Berhasil Disimpan!');
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
        $ditemukan = \App\Ditemukan::find($id);
        return view('editditemukan', compact('ditemukan', 'id'));
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
        if($request->hasfile('file_gambar')){
            $file = $request->file('file_gambar');
            $name= $file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
        }
        $ditemukan =  \App\Ditemukan::find($id);
        $ditemukan->nama_barang = $request->get('nama_barang');
        $date=date_create($request->get('tgl_ditemukan'));
        $format = date_format($date,"d-m-Y");
        $ditemukan->tgl_ditemukan = strtotime($format);
        $ditemukan->jenis_barang = $request->get('jenis_barang');
        $ditemukan->nomor_penemu = $request->get('nomor_penemu');
        $ditemukan->lokasi_ditemukan = $request->get('lokasi_ditemukan');
        $ditemukan->ciri_ciri_unik = $request->get('ciri_ciri_unik');
        $ditemukan->file_gambar = $name;
        $ditemukan->deskripsi = $request->get('deskripsi');
        $ditemukan->save();

        return redirect('ditemukan')->with('success','Data Berhasil Disimpan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ditemukan = \App\Ditemukan::find($id);
        $ditemukan->delete();
        return redirect('ditemukan')->with('success','Data Berhasil Di Hapus');
    }
}
