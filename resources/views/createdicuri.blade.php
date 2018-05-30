@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

    <h2>Formulir Barang Ditemukan</h2>
    <form method="post" action="{{url('dicuri')}}" enctype="multipart/form-data">
    	@csrf
    	<div class="form-group">
    		<label>Nama Barang</label>
    		<input type="text" name="nama_barang" class="form-control">
    	</div>
    	<div class="form-group">
    		<label>Tanggal Dicuri</label>
    		<input type="text" name="tgl_dicuri" class="date form-control" id="datepicker">
    	</div>
    	<div class="form-group">
    		<label>Nomor seri</label>
    		<input type="text" name="nomor_seri" class="form-control">
    	</div>
    	<div class="form-group">
    		<label>Ciri - Ciri</label>
    		<input type="text" name="ciri_ciri" class="form-control">
    	</div>
    	<div class="form-group">
    		<label>Nomor Pemilik</label>
    		<input type="text" name="nomor_pemilik" class="form-control">
    	</div>    	    	
    	<div class="form-group">
    		<label>Lokasi Pencurian</label>
    		<input type="text" name="lokasi_pencurian" class="form-control">
    	</div>
    	<div class="form-group">
    		<label>Deskripsi</label>
    		<input type="text" name="deskripsi" class="form-control">
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