<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DicuriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dicuris = \App\Dicuri::all();
        return view('dicuri', compact('dicuris'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createdicuri');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dicuri = new \App\Dicuri;
        $dicuri->nama_barang = $request->get('nama_barang');
        $date=date_create($request->get('tgl_dicuri'));
        $format = date_format($date,"d-m-Y");
        $dicuri->tgl_dicuri = strtotime($format);
        $dicuri->nomor_seri = $request->get('nomor_seri');
        $dicuri->ciri_ciri =  $request->get('ciri_ciri');
        $dicuri->nomor_pemilik = $request->get('nomor_pemilik');
        $dicuri->lokasi_pencurian = $request->get('lokasi_pencurian');
        $dicuri->deskripsi = $request->get('deskripsi');
        $dicuri->save();

        return redirect('dicuri')->with('success','data berhasil disimpan!');
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
        $dicuri = \App\Dicuri::find($id);
        return view('editdicuri', compact('dicuri', 'id'));
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
        $dicuri = \App\Dicuri::find($id);
        $dicuri->nama_barang = $request->get('nama_barang');
        $date=date_create($request->get('tgl_dicuri'));
        $format = date_format($date,"d-m-Y");
        $dicuri->tgl_dicuri = strtotime($format);
        $dicuri->nomor_seri = $request->get('nomor_seri');
        $dicuri->ciri_ciri =  $request->get('ciri_ciri');
        $dicuri->nomor_pemilik = $request->get('nomor_pemilik');
        $dicuri->lokasi_pencurian = $request->get('lokasi_pencurian');
        $dicuri->deskripsi = $request->get('deskripsi');
        $dicuri->save();

        return redirect('dicuri')->with('success','data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dicuri = \App\Dicuri::find($id);
        $dicuri->delete();
        return redirect('dicuri')->with('success','data berhasil dihapus!');
    }
}
