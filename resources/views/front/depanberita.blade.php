@extends('adminlte::front')

@section('title', 'Berita')

@section('content_header')
    <h1>Daftar Berita</h1>
@stop

<style type="text/css">
table {
	border-spacing: 15px;
	width: auto;
}
</style>

@section('content')
<div class="row">		        
         @foreach($berita as $berita)
        @php
            $tgl_berita=date('d-m-Y', $berita['tgl_berita']);
        @endphp
        <div class="col-md-6">
          <div class="box box-widget">
            <div class="box-header with-border">
              <div class="user-block">
              	<span class="username">{{$berita['nama_berita']}}</span>
                <span class="description">{{$tgl_berita}} - {{$berita['jenis_berita']}}</span>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <img class="img-responsive pad" src="{{url('images/', $berita['file_gambar'])}}" height="auto" width=500px alt="Photo">
              <div class="box-body">
              <dl>
                <dt>Deskripsi :</dt>
                <dd>{{$berita['deskripsi']}}</dd>
              </dl>
             </div>
            </div>
          </div>
        </div>
      @endforeach

      @foreach($pencurian as $curian)
              @php
            $tgl_dicuri=date('d-m-Y', $curian['tgl_dicuri']);
        @endphp
        <div class="col-md-4">
          <div class="box box-solid">
            <div class="box-header with-border">
              <i class="fa fa-text-width"></i>
              <h3 class="box-title">Barang Dicuri</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <blockquote class="pull-right">
              	<h3>Nama Barang dicuri : {{$curian['nama_barang']}}</h3>
                <p>Nomor Unik / Ciri khas : {{$curian['nomor_seri']}} <br>
                	Hubungi : {{$curian['nomor_pemilik']}} <br>
                </p>
                <small>Lokasi dan Tanggal Hilang : {{$curian['lokasi_pencurian']}} <cite title="Source Title">, {{$tgl_dicuri}}</cite></small>
              </blockquote>
          </div>
          <div class="box-body">
          	<table>
          		<tr>
          			<td width="90">Ciri - ciri</td>
          			<td width="30"> :</td>
          			<td>{{$curian['ciri_ciri']}}</td>
          		</tr>
          		<tr>
          			<td width="90">Deskripsi</td>
          			<td width="30"> :</td>
          			<td>{{$curian['deskripsi']}}</td>
          		</tr>
          	</table>
          </div>

          
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        @endforeach
    </div>

@stop
