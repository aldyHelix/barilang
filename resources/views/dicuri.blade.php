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
              <h3 class="card-title">Barang Dicuri Info</h3>
            </div>
            <button onclick="location.href='{{url('dicuri/create')}}'" class="btn btn-primary" >Buat Formulir Pencurian Barang</button>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
              	<thead>
              		<tr>
              			<th>ID</th>
              			<th>Nama Barang</th>
              			<th>Tanggal pencurian</th>
              			<th>Nomor Seri</th>
              			<th>Ciri-Ciri</th>
              			<th>Nomor Pemilik</th>
              			<th>Lokasi Pencurian</th>
                    	<th>Deskripsi Barang yang ditemukan</th>
                    	<th></th>
                    	<th></th>
              		</tr>
              	</thead>
              	<tbody>
              		@foreach($dicuris as $dicuri)
              		@php
                    $tgl_dicuri=date('d-m-Y', $dicuri['tgl_dicuri']);
                  @endphp
              	<tr>
              		<td>{{$dicuri['id']}}</td>
              		<td>{{$dicuri['nama_barang']}}</td>
              		<td>{{$tgl_dicuri}}</td>
              		<td>{{$dicuri['nomor_seri']}}</td>
              		<td>{{$dicuri['ciri_ciri']}}</td>
                  	<td>{{$dicuri['nomor_pemilik']}}</td>
              		<td>{{$dicuri['lokasi_pencurian']}}</td>
              		<td>{{$dicuri['deskripsi']}}</td>
              		<td><a href="{{action('DicuriController@edit', $dicuri['id'])}}" class="btn btn-warning">Edit</a></td>
              		<td>
          				<form action="{{action('DicuriController@destroy', $dicuri['id'])}}" method="post">
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
