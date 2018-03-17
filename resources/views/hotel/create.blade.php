@extends('layouts.master')
@section('content')
	<div class="container">
		<center><h1>Tambah Data hotel</h1></center>
		<div class="panel panel-primary" style="background-color: #F0F8FF">
			<div class="panel-heading" style="background-color: #00BFFF">Tambah Data Hotel
		</div>
	
	<div class="panel-body">
		<form action="{{route('hotel.store')}}" method="post" enctype="multipart/form-data">
			{{csrf_field()}}
			<div class="form-group">
				<label class="control-lable">Nama Hotel</label>
				<input type="text" name="nama" class="form-control" required="">
			</div>

			<div class="form-group">
				<label class="control-lable">Kelas</label>
				<input type="text" name="kelas" class="form-control" required="">
			</div>

			<div class="form-group">
				<label class="control-lable">Lokasi</label>
				<textarea class="form-control" name="lokasi"></textarea>
			</div>

			<div class="form-group">
				<label class="control-lable">Type Kamar</label>
				<input type="type" name="type_kamar" class="form-control" required="">
			</div>

			<div class="form-group">
				<label class="control-lable">Fasilitas</label>
				<input type="file" name="fasilitas" class="form-control" required="">
			</div>

			<div class="form-group">
				<label class="control-lable">no kamar</label>
				<input type="type" name="no_kamar" class="form-control" required="">
			</div>

			

			<div class="form-group">
				<button type="submit" class="btn btn-success">Simpan</button>
				<button type="reset" class="btn btn-danger">Reset</button>
			</div>
			<br><br><br><br><br><br><br><br><br><br><br><br>
		</form>
	</div>
	</div>
	<br><br><br>
	</div>
	</div>
@endsection