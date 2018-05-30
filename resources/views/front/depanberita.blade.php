@extends('adminlte::front')

@section('title', 'Berita')

@section('content_header')
    <h1>Daftar Berita</h1>
@stop

@section('content')
         @foreach($berita as $berita)
        @php
            $tgl_berita=date('d-m-Y', $berita['tgl_berita']);
        @endphp
        <div class="row">
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
              <img class="img-responsive pad" src="{{url('images/', $berita['file_gambar'])}}" height="auto" width=900px alt="Photo">

              <p>{{$berita['deskripsi']}}</p>
            </div>
          </div>
        </div>
      </div>
      @endforeach
@stop
