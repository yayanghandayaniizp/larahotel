@extends('layouts.master')
@section('content')
	<div class="container">
		<center><h1>Edit Data hotel</h1></center>
		<div class="panel panel-primary" style="background-color: #F0F8FF">
			<div class="panel-heading" style="background-color: #00BFFF">Edit Data Hotel
		</div>
	
	<div class="panel-body">
		<form action="{{route('tamu.update',$tamu->id)}}" method="post" enctype="multipart/form-data">
			<input type="hidden" name="_method" value="PUT">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<input type="hidden" name="id" value="{{$tamu->id}}">
			{{csrf_field()}}
			<div class="form-group">
				<label class="control-lable">Nama Tamu</label>
				<input type="text" name="nama" class="form-control" required="" value="{{$tamu->nama}}">
			</div>
			<div class="form-group">
				<label class="control-lable">Jenis Kelamin</label>
				<input type="type" name="jenis_kelamin" class="form-control" required="" value="{{$tamu->jenis_kelamin}}">
			</div>

			<div class="form-group">
				<label class="control-lable">NoKtp</label>
				<input value="{{$tamu->no_ktp}}" type="number" name="no_ktp" class="form-control" required="">
			</div>


			<div class="form-group">
				<label class="control-lable">NoTelpon</label>
				<input value="{{$tamu->no_telpon}}" type="number" name="no_telpon" class="form-control" required="">
			</div>

			<div class="form-group">
				<label class="control-lable">Alamat</label>
				<textarea class="form-control" name="alamat">{{$tamu->alamat}}</textarea>
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