<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kehilangan;

class KehilanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kehilangans= \App\Kehilangan::all();
        return view('kehilangan', compact('kehilangans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createkehilangan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kehilangan = new \App\Kehilangan;
        $kehilangan->nama_barang = $request->get('nama_barang');
        $date=date_create($request->get('tgl_hilang'));
        $format = date_format($date,"d-m-Y");
        $kehilangan->tgl_hilang = strtotime($format);
        $kehilangan->jenis_barang = $request->get('jenis_barang');
        $kehilangan->nomor_pemilik = $request->get('nomor_pemilik');
        $kehilangan->ciri_ciri_unik = $request->get('ciri_ciri_unik');
        $kehilangan->deskripsi = $request->get('deskripsi');
        $kehilangan->save();

        return redirect('kehilangan')->with('success', 'Data berhasil disimpan');
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
        $kehilangan = \App\Kehilangan::find($id);
        return view('editkehilangan' ,compact('kehilangan','id'));
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
        $kehilangan = \App\Kehilangan::find($id);
        $kehilangan->nama_barang = $request->get('nama_barang');
        $date=date_create($request->get('tgl_hilang'));
        $format = date_format($date,"d-m-Y");
        $kehilangan->tgl_hilang = strtotime($format);
        $kehilangan->jenis_barang = $request->get('jenis_barang');
        $kehilangan->nomor_pemilik = $request->get('nomor_pemilik');
        $kehilangan->ciri_ciri_unik = $request->get('ciri_ciri_unik');
        $kehilangan->deskripsi = $request->get('deskripsi');
        $kehilangan->save();

        return redirect('kehilangan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kehilangan = \App\Kehilangan::find($id);
        $kehilangan->delete();
        return redirect('kehilangan')->with('success','Data Berhasil Di Hapus');
    }
}
