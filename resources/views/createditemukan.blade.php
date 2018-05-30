@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

    <h2>Formulir Barang Ditemukan</h2>
    <form method="post" action="{{url('ditemukan')}}" enctype="multipart/form-data">
    	@csrf
    	<div class="form-group">
    		<label>Nama Barang</label>
    		<input type="text" name="nama_barang" class="form-control">
    	</div>
    	<div class="form-group">
    		<label>Tanggal Ditemukan</label>
    		<input type="text" name="tgl_ditemukan" class="date form-control" id="datepicker">
    	</div>
    	   <div class="form-group">
    		<label>Jenis Barang Hilang</label>
    		<select class="form-control" name="jenis_barang">
    			<option value="Dompet + isi ">Dompet + isi</option>
    			<option value="Tas + Surat - Surat">Tas + Surat - Surat</option>
    			<option value="Handphone">Handphone</option>
    			<option value="Laptop">Laptop</option>
    			<option value="Kunci">Kunci</option>
    			<option value="Lain - Lain">Lain - Lain</option>
    		</select>
    	</div>
    	<div class="form-group">
    		<label>Nomor Penemu</label>
    		<input type="text" name="nomor_penemu" class="form-control">
    	</div>
    	<div class="form-group">
    		<label>Lokasi Ditemukan</label>
    		<input type="text" name="lokasi_ditemukan" class="form-control">
    	</div>
    	<div class="form-group">
    		<label>Ciri - Ciri Unik</label>
    		<input type="text" name="ciri_ciri_unik" class="form-control">
    	</div>
    	<div class="form-group">
    		<label>Upload File gambar</label>
    		<input type="file" name="file_gambar" class="form-control">
    	</div>
    	<div class="form-group">
    		<label>Deskripsi Barang</label>
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