@extends('adminlte::page')

@section('title', 'BarIlang')

@section('content_header')
    <h1></h1>
@stop

@section('content')
    <p>list Kehilangan</p>
    <!-- Main content -->
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
              <h3 class="card-title">Barang barang Hilang</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
              	<thead>
              		<tr>
              			<th>ID</th>
              			<th>Nama Barang</th>
              			<th>Tanggal Hilang</th>
              			<th>Jenis Barang</th>
              			<th>Nomor Pemilik</th>
              			<th>ciri ciri unik</th>
              			<th>deskripsi</th>
              		</tr>
              	</thead>
              	<tbody>
              		@foreach($kehilangans as $kehilangan)
              		
              	<tr>
              		<td>{{$kehilangan['id']}}</td>
              		<td>{{$kehilangan['nama_barang']}}</td>
              		<td>{{$kehilangan['tgl_hilang']}}</td>
              		<td>{{$kehilangan['jenis_barang']}}</td>
              		<td>{{$kehilangan['nomor_pemilik']}}</td>
              		<td>{{$kehilangan['ciri_ciri_unik']}}</td>
              		<td>{{$kehilangan['deskripsi']}}</td>
              		<td><a href="{{action('KehilanganController@edit', $kehilangan['id'])}}" class="btn btn-warning">Edit</a></td>
              		<td>
          				<form action="{{action('KehilanganController@destroy', $kehilangan['id'])}}" method="post">
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