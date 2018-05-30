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
              <h3 class="card-title">Barang Ditemukan</h3>
            </div>
            <button onclick="location.href='{{url('ditemukan/create')}}'" class="btn btn-primary" >Buat Formulir Penemuan Barang</button>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
              	<thead>
              		<tr>
              			<th>ID</th>
              			<th>Nama Barang</th>
              			<th>Tanggal Ditemukan</th>
              			<th>Jenis Barang</th>
              			<th>Nomor Penemu</th>
              			<th>Lokasi Penemuan</th>
              			<th>Ciri-ciri unik</th>
                    <th>Gambar</th>
                    <th>Deskripsi Barang yang ditemukan</th>
                    <th></th>
                    <th></th>
              		</tr>
              	</thead>
              	<tbody>
              		@foreach($ditemukans as $ditemukan)
              		@php
                    $tgl_ditemukan=date('d-m-Y', $ditemukan['tgl_ditemukan']);
                  @endphp
              	<tr>
              		<td>{{$ditemukan['id']}}</td>
              		<td>{{$ditemukan['nama_barang']}}</td>
              		<td>{{$tgl_ditemukan}}</td>
              		<td>{{$ditemukan['jenis_barang']}}</td>
              		<td>{{$ditemukan['nomor_penemu']}}</td>
                  <td>{{$ditemukan['lokasi_ditemukan']}}</td>
              		<td>{{$ditemukan['ciri_ciri_unik']}}</td>
                  <td><img src="{{url('images/', $ditemukan['file_gambar'])}}" width="10%" height="10%"></td>
              		<td>{{$ditemukan['deskripsi']}}</td>
              		<td><a href="{{action('DitemukanController@edit', $ditemukan['id'])}}" class="btn btn-warning">Edit</a></td>
              		<td>
          				<form action="{{action('DitemukanController@destroy', $ditemukan['id'])}}" method="post">
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
