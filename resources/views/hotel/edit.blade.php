@extends('layouts.master')
@section('content')
	<div class="container">
		<center><h1>Edit Data hotel</h1></center>
		<div class="panel panel-primary" style="background-color: #F0F8FF">
			<div class="panel-heading" style="background-color: #00BFFF">Edit Data Hotel
		</div>
	
	<div class="panel-body">
		<form action="{{route('hotel.update',$hotel->id)}}" method="post" enctype="multipart/form-data">
			<input type="hidden" name="_method" value="PUT">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<input type="hidden" name="id" value="{{$hotel->id}}">
			{{csrf_field()}}

			<div class="form-group">
				<label class="control-lable">Nama Hotel</label>
				<input type="text" name="nama" class="form-control" required="" value="{{$hotel->nama}}">
			</div>

			<div class="form-group">
				<label class="control-lable">Kelas</label>
				<input type="text" name="kelas" class="form-control" required=""
				value="{{$hotel->kelas}}">
			</div>

			<div class="form-group">
				<label class="control-lable">Lokasi</label>
				<textarea class="form-control" name="lokasi">{{$hotel->lokasi}}</textarea>
			</div>

			<div class="form-group">
				<label class="control-lable">Type Kamar</label>
				<input  value="{{$hotel->type_kamar}}" type="type" name="type_kamar" class="form-control" required="" >
			</div>

			<div class="form-group">
				<label class="control-lable">no kamar</label>
				<input value="{{$hotel->no_kamar}}" type="number" name="no_kamar" class="form-control" required="">
			</div>


			<div class="form-group">
				<label class="control-lable">Fasilitas</label><br>
				<img src="{{asset('/img/'.$hotel->fasilitas.'')}}" width="170dp" height="120dp"><br><br>
				<input type="file" name="fasilitas" class="form-control" value="{{asset('/img/'.$hotel->fasilitas.'')}}">
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