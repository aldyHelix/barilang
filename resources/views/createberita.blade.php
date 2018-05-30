@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

    <h2>Berita Baru</h2>
    <form method="post" action="{{url('berita')}}" enctype="multipart/form-data">
    	@csrf
    	<div class="form-group">
    		<label>Nama Barang</label>
    		<input type="text" name="nama_berita" class="form-control">
    	</div>
    	<div class="form-group">
    		<label>Tanggal Berita</label>
    		<input type="text" name="tgl_berita" class="date form-control" id="datepicker">
    	</div>
    	   <div class="form-group">
    		<label>Jenis Berita</label>
    		<select class="form-control" name="jenis_berita">
    			<option value="Straight News">Straight News</option>
    			<option value="Hard News">Hard News</option>
    			<option value="Soft News">Soft News</option>
    			<option value="Interpretative News">Interpretative News</option>
    			<option value="Depth News">Depth News</option>
    			<option value="Intestigation News">Intestigation News</option>
    			<option value="Comprehensive News">Comprehensive News</option>
    			<option value="Feature Story">Feature Story</option>
    			<option value="Editorial Writing">Editorial Writing</option>
    		</select>
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