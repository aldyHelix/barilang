@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    @php
        $tgl_berita=date('d-m-Y', $berita['tgl_berita']);
    @endphp
    <h2>Update Berita</h2>
    <form method="post" action="{{action('BeritaController@update', $berita['id'])}}" enctype="multipart/form-data">
    	@csrf\
        <input type="hidden" name="_method" value="PATCH">
    	<div class="form-group">
    		<label>Nama Barang</label>
    		<input type="text" name="nama_berita" class="form-control" value="{{$berita->nama_berita}}">
    	</div>
    	<div class="form-group">
    		<label>Tanggal Berita</label>
    		<input type="text" name="tgl_berita" class="date form-control" id="datepicker" value="{{$tgl_berita}}">
    	</div>
    	   <div class="form-group">
    		<label>Jenis Berita</label>
    		<select class="form-control" name="jenis_berita">
    			<option value="Straight News" @if($berita->jenis_berita == "Straight News" ) selected @endif>Straight News</option>
    			<option value="Hard News"@if($berita->jenis_berita == "Hard News" ) selected @endif>Hard News</option>
    			<option value="Soft News"@if($berita->jenis_berita == "Soft News" ) selected @endif>Soft News</option>
    			<option value="Interpretative News"@if($berita->jenis_berita == "Interpretative News" ) selected @endif>Interpretative News</option>
    			<option value="Depth News"@if($berita->jenis_berita == "Depth News" ) selected @endif>Depth News</option>
    			<option value="Intestigation News"@if($berita->jenis_berita == "Intestigation News" ) selected @endif>Intestigation News</option>
    			<option value="Comprehensive News"@if($berita->jenis_berita == "Comprehensive News" ) selected @endif>Comprehensive News</option>
    			<option value="Feature Story"@if($berita->jenis_berita == "Feature Story" ) selected @endif>Feature Story</option>
    			<option value="Editorial Writing"@if($berita->jenis_berita == "Editorial Writing" ) selected @endif>Editorial Writing</option>
    		</select>
    	</div>
    	<div class="form-group">
    		<label>Upload File gambar</label>
    		<input type="file" name="file_gambar" class="form-control" value="{{$berita->file_gambar}}">
    	</div>
    	<div class="form-group">
    		<label>Deskripsi Barang</label>
    		<input type="text" name="deskripsi" class="form-control" value="{{$berita->deskripsi}}">
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