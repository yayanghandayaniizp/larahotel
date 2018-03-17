@extends('layouts.master')
@section('content')
	<div class="container">
		<center><h1>Edit Data Booking</h1></center>
		<div class="panel panel-primary" style="background-color: #F0F8FF">
			<div class="panel-heading" style="background-color: #00BFFF">Edit Data Booking
		</div>
	
	<div class="panel-body">
		<form action="{{route('booking.update',$booking->id)}}" method="post" enctype="multipart/form-data">
			<input type="hidden" name="_method" value="PUT">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<input type="hidden" name="id" value="{{$booking->id}}">
			{{csrf_field()}}
			<div class="form-group">
				<div class="form-group">
				<label class="control-lable">Tanggal Masuk</label>
				<input type="date" name="check_in" class="form-control" required="" value="{{$booking->check_in}}">
			</div>

			<div class="form-group">
				<label class="control-lable">Durasi</label>
				<input type="type" name="durasi" class="form-control" required="" value="{{$booking->durasi}}">
			</div>

		<div class="form-group">
				<label class="control-lable">Tanggal Keluar</label>
				<input type="date" name="check_out" class="form-control" required="" value="{{$booking->check_out}}">
			</div>

			<div class="form-group">
				<label class="control-lable">Harga</label>
				<input type="Rp" name="harga" class="form-control" required="" value="{{$hotel->
				harga}}">
			</div>
			
			<div class="form-group">
				<label class="control-lable">Nama Tamu</label>
				<select class="form-control" name="tamu_id">
					@foreach($tamu as $data)
					<option value="{{$data->id}}">{{$data->nama}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label class="control-lable">Nama Hotel</label>
				<select class="form-control" name="hotel_id">
					@foreach($hotel as $data)
					<option value="{{$data->id}}">{{$data->nama}} | No Kamar : {{$data->no_kamar}}</option>
					@endforeach
				</select>
			</div>

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