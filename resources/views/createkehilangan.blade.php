@extends('adminlte::page')

@section('title', 'BarIlang')

@section('content_header')

@stop
@section('content')

<div class="col-md-6">
	<div class="box box-warning">
	<div class="box-header with-border">
		<h3 class="box-title">Kehilangan</h3>
	</div>
	<div class="box-body">
    	<h2>Formulir kehilangan barang</h2><br>
    	<form role="form"	method="post" action="{{url('kehilangan')}}" enctype="multipart/form-data">
    		@csrf
    		<div class="form-group">
    			<label>Nama Barang</label>
    			<input class="form-control" type="text" name="nama_barang" placeholder="Masukkan Nama Barang Hilang">
    		</div>
    		<div class="form-group">
    			<label>Tanggal Kehilangan</label>
    				<i class="fa fa-calendar"></i>
    				<input class="date form-control" type="text" id="datepicker" name="tgl_hilang">
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
    			<label>Nomor Pemilik</label>
    			<input class="form-control" type="text" name="nomor_pemilik" placeholder="Masukkan Nomor Pemilik">
    		</div>
    		<div class="form-group">
    			<label>Ciri - Ciri Unik</label>
    			<input class="form-control" type="text" name="ciri_ciri_unik" placeholder="Masukkan Ciri - Ciri">
    		</div>
    		<div class="form-group">
    			<label>Deskripsi Barang</label>
    			<textarea class="form-control" type="text" name="deskripsi" placeholder="deskripsi"></textarea>
    		</div>
    		<div class="form-group col-md-4" style="margin-top:30px">
    			<button type="submit" class="btn btn-success">Submit</button>
    		</div>
		</form>
	</div>
	<script type="text/javascript">  
        $('#datepicker').datepicker({ 
            autoclose: true,   
            format: 'dd-mm-yyyy'  
         });  
    </script>
	</div>
</div>
@stop
