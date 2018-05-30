<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beritas = \App\Berita::all();
        return view('berita', compact('beritas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createberita');
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
        $berita = new \App\Berita;
        $berita->nama_berita = $request->get('nama_berita');
        $date=date_create($request->get('tgl_berita'));
        $format = date_format($date,"d-m-Y");
        $berita->tgl_berita = strtotime($format);
        $berita->jenis_berita = $request->get('jenis_berita');
        $berita->file_gambar = $name;
        $berita->deskripsi = $request->get('deskripsi');
        $berita->save();

        return redirect('berita')->with('success', 'Data Berhasil disimpan!'); 
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
        $beria = \App\Berita::find($id);
        return view('editberita', compact('berita' , 'id'));
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
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
        }
        $berita = \App\Berita::find($id);
        $berita->nama_berita = $request->get('nama_berita');
        $date=date_create($request->get('tgl_berita'));
        $format = date_format($date,"d-m-Y");
        $berita->tgl_berita = strtotime($format);
        $berita->jenis_berita = $request->get('jenis_berita');
        $berita->file_gambar = $name;
        $berita->deskripsi = $request->get('deskripsi');
        $berita->save();

        return redirect('berita')->with('success', 'Data Berhasil diperbarui!'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita = \App\Berita::find($id);
        $berita->delete();
        return redirect('berita')->with('success', 'Data Berhasil dihapus!'); 
    }
}
