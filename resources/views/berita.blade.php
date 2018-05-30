@extends('adminlte::page')

@section('title', 'BarIlang')

@section('content_header')
    <h1></h1>
@stop

@section('content')
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Berita</h3>
            </div>
            <button onclick="location.href='{{url('berita/create')}}'" class="btn btn-primary" >Buat Berita</button>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
              	<thead>
              		<tr>
              			<th>ID</th>
              			<th>Nama Berita</th>
              			<th>Jenis Berita</th>
              			<th>Tanggal Berita</th>
              			<th>Ciri-Ciri</th>
              			<th>Gambar</th>
                    	<th>Deskripsi Barang yang ditemukan</th>
                    	<th></th>
                    	<th></th>
              		</tr>
              	</thead>
              	<tbody>
              		@foreach($beritas as $berita)
              		@php
                    $tgl_berita=date('d-m-Y', $berita['tgl_berita']);
                  @endphp
              	<tr>
              		<td>{{$berita['id']}}</td>
              		<td>{{$berita['nama_berita']}}</td>
                  <td>{{$berita['jenis_berita']}}</td>
              		<td>{{$tgl_berita}}</td>
					<td><img src="{{url('images/', $berita['file_gambar'])}}" width="10%" height="10%"></td>
              		<td>{{$berita['deskripsi']}}</td>
              		<td><a href="{{action('BeritaController@edit', $berita['id'])}}" class="btn btn-warning">Edit</a></td>
              		<td>
          				<form action="{{action('BeritaController@destroy', $berita['id'])}}" method="post">
            			@csrf
           					<input name="_method" type="hidden" value="DELETE">
            				<button class="btn btn-danger" type="submit">Delete</button>
          				</form>
        			</td>
              	</tr>
              	@endforeach
              	</tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
         </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@stop
