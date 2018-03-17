@extends('layouts.master')
@section('content')
 <div class="container">
		<center><h1>Tambah Data Tamu</h1></center>
		<div class="panel panel-primary" style="background-color: #F0F8FF">
			<div class="panel-heading" style="background-color: #00BFFF">Tambah Data Tamu
		</div>

 			<div class="panel-body">
		<form action="{{route('tamu.store')}}" method="post" enctype="multipart/form-data">
			{{csrf_field()}}
	<div class="panel-body"> 
		   	<div class="form-group">
				<label class="control-lable">Nama</label>
				<input type="type" name="nama" class="form-control" required="nama">
			</div>
			<div class="form-group">
				<label class="control-lable">Jenis Kelamin</label>
				<input type="type" name="jenis_kelamin" value="" class="form-control" required="">
			</div>

			<div class="form-group">
				<label class="control-lable">NoKtp</label>
				<input type="number" name="no_ktp" class="form-control" required="">
			</div>

			<div class="form-group">
				<label class="control-lable">NoTelpon</label>
				<input type="number" name="no_telpon" class="form-control" required="">
			</div>

			<div class="form-group">
				<label class="control-lable">Alamat</label>
				<textarea class="form-control" name="alamat"></textarea>
			</div>

			<div class="pull-right">
			<div class="form-group">
				<button type="submit" class="btn btn-success">Simpan</button>
				<button type="reset" class="btn btn-danger">Reset</button>
			</div>
			</div>


				</div>
		 	</div>
		</div>
 	</div> 
</div>
@endsection
