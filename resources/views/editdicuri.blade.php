@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    @php
        $tgl_dicuri=date('d-m-Y', $dicuri['tgl_dicuri']);
    @endphp
    <h2>Formulir Barang Ditemukan</h2>
    <form method="post" action="{{action('DicuriController@update', $dicuri['id'])}}" enctype="multipart/form-data">
    	@csrf
    	<input type="hidden" name="_method" value="PATCH">
    	<div class="form-group">
    		<label>Nama Barang</label>
    		<input type="text" name="nama_barang" class="form-control" value="{{$dicuri->nama_barang}}">
    	</div>
    	<div class="form-group">
    		<label>Tanggal Dicuri</label>
    		<input type="text" name="tgl_dicuri" class="date form-control" id="datepicker" value="{{$tgl_dicuri}}">
    	</div>
    	<div class="form-group">
    		<label>Nomor seri</label>
    		<input type="text" name="nomor_seri" class="form-control" value="{{$dicuri->nomor_seri}}">
    	</div>
    	<div class="form-group">
    		<label>Ciri - Ciri</label>
    		<input type="text" name="ciri_ciri" class="form-control" value="{{$dicuri->ciri_ciri}}">
    	</div>
    	<div class="form-group">
    		<label>Nomor Pemilik</label>
    		<input type="text" name="nomor_pemilik" class="form-control" value="{{$dicuri->nomor_pemilik}}">
    	</div>    	    	
    	<div class="form-group">
    		<label>Lokasi Pencurian</label>
    		<input type="text" name="lokasi_pencurian" class="form-control" value="{{$dicuri->lokasi_pencurian}}">
    	</div>
    	<div class="form-group">
    		<label>Deskripsi</label>
    		<input type="text" name="deskripsi" class="form-control" value="{{$dicuri->deskripsi}}">
    	</div>
    	<div class="form-group">
    		<button type="submit" class="btn btn-success">Submit</button>
    	</div>
    </form>
@stop
@section('script')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript">  
        $('#datepicker').datepicker({ 
            autoclose: true,   
            format: 'dd-mm-yyyy'  
         });  
    </script>
@endSection