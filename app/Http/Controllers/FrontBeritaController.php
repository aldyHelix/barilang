<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontBeritaController extends Controller
{
    public function index()
    {
    	$berita = \App\Berita::all();
    	$pencurian = \App\Dicuri::all();
        return view('front.depanberita', compact('berita','pencurian'));
    }
}
