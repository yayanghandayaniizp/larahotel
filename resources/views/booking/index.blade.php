@extends('layouts.master')
@section('content')
	<div class="container">
		<center><h1><b>Data Booking</b></h1></center>
		<div class="panel panel-primary" style="background-color: #F0F8FF ">
			<div class="panel-heading" style="background-color: #00BFFF">
				<div class="panel-title pull-ringht"><a href="{{ route('booking.create') }} ">Tambah Data Booking</a>
	</div>
	</div>
	<tbody bgcolor="aqua">
	<div class="panel-body">
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Tamu</th>	
					<th>Nama Hotel</th>
					<th>No Kamar</th>
					<th>Harga</th>
					<th>Tanggal masuk</th>
					<th>Durasi</th>
					<th>Tanggal keluar</th>
					<th colspan="3">Action</th>
				</tr>
			</thead>
			<body>
			@php $no=1 @endphp
				@foreach($booking as $data)
				<tr>
					<td>{{$data->id}}</td>
					<td>{{$data->tamu->nama}}</td>
					<td>{{$data->hotel->nama}}</td>
					<td>{{$data->hotel->no_kamar}}</td>
					<td>{{$data->harga}}</td>
					<td>{{$data->check_in}}</td>
					<td>{{$data->durasi}}</td>
					<td>{{$data->check_out}}</td>
					<td>
						<a class="btn btn-warning" href="/booking/{{$data->id}}/edit">Edit</a>
					</td>
					<td>
					<form action="{{route('booking.destroy',$data->id)}}" method="post">
						<input type="hidden" name="_method" value="Delete">
						<input type="hidden" name="_token">
						<input type="submit" value="Delete" class="btn btn-danger">
						{{csrf_field()}}
					</form>
					</td>
				</tr>
				@endforeach
			</tbody>
			</tbody>
		</table>
	</div>
	</div>
	<br><br><br>
	</div>
@endsection