@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <h2>Update Barang Ditemukan</h2>
    <form method="post" action="{{action('DitemukanController@update', $ditemukan['id'])}}" enctype="multipart/form-data">
    	@csrf
        <input type="hidden" name="_method" value="PATCH">
    	<div class="form-group">
    		<label>Nama Barang</label>
    		<input type="text" name="nama_barang" class="form-control" value="{{$ditemukan->nama_barang}}">
    	</div>
    	    	<div class="form-group">
    		<label>Tanggal Ditemukan</label>
    		<input type="text" name="tgl_ditemukan" class="form-control"value="{{$ditemukan->tgl_ditemukan}}">
    	</div>
    	   <div class="form-group">
    		<label>Jenis Barang Hilang</label>
    		<select class="form-control" name="jenis_barang">
    			<option value="Dompet + isi" @if($ditemukan->jenis_barang == "Dompet + isi") selected @endif >Dompet + isi</option>
    			<option value="Tas + Surat - Surat" @if($ditemukan->jenis_barang == "Tas + Surat - Surat") selected @endif>Tas + Surat - Surat</option>
    			<option value="Handphone" @if($ditemukan->jenis_barang == "Handphone") selected @endif>Handphone</option>
    			<option value="Laptop" @if($ditemukan->jenis_barang == "Laptop") selected @endif>Laptop</option>
    			<option value="Kunci" @if($ditemukan->jenis_barang == "Kunci") selected @endif>Kunci</option>
    			<option value="Lain - Lain" @if($ditemukan->jenis_barang == "Lain - Lain") selected @endif>Lain - Lain</option>
    		</select>
    	</div>
    	<div class="form-group">
    		<label>Nomor Penemu</label>
    		<input type="text" name="nomor_penemu" class="form-control" value="{{$ditemukan->nomor_penemu}}">
    	</div>
    	<div class="form-group">
    		<label>Lokasi Ditemukan</label>
    		<input type="text" name="lokasi_ditemukan" class="form-control" value="{{$ditemukan->lokasi_ditemukan}}">
    	</div>
    	<div class="form-group">
    		<label>Ciri - Ciri Unik</label>
    		<input type="text" name="ciri_ciri_unik" class="form-control"value="{{$ditemukan->ciri_ciri_unik}}">
    	</div>
    	<div class="form-group">
    		<label>Upload File gambar</label>
    		<input type="file" name="file_gambar" class="form-control" required>
    	</div>
    	<div class="form-group">
    		<label>Deskripsi Barang</label>
    		<input type="text" name="deskripsi" class="form-control" value="{{$ditemukan->deskripsi}}">
    	</div>
    	<div class="form-group">
    		<button type="submit" class="btn btn-success">UPDATE</button>
    	</div>
    </form>
@stop