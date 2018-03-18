@extends('layouts.master')
@section('content')
	<div class="container">
		<center><h1>Tambah Data Laporan</h1></center>
		<div class="panel panel-primary" style="background-color: #F0F8FF">
			<div class="panel-heading" style="background-color: #00BFFF">Tambah Data Laporan
		</div>
	
	<div class="panel-body">
		<form action="{{route('laporan.store')}}" method="post" enctype="multipart/form-data">
			{{csrf_field()}}
			<div class="form-group">
				<label class="control-lable">Nama Hotel</label>
				<select class="form-control" name="nama">
					@foreach($hotel as $data)
					<option value="{{$data->id}}">{{$data->nama}} | No Kamar : {{$data->no_kamar}}</option>
					@endforeach
				</select>
			</div>

			<div class="form-group">
				<label class="control-lable">Tanggal</label>
				<select class="form-control" name="booking_id">
					@foreach($laporan as $data)
					<option value="{{$data->id}}">{{$data->check_in}} | : {{$data->check_out}}</option>
					@endforeach
				</select>
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