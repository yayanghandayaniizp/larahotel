@extends('layouts.master')
@section('content')
	<div class="container">
		<center><h1><b>Data Hotel</b></h1></center>
		<div class="panel panel-primary" style="background-color: #F0F8FF  ">
			<div class="panel-heading" style="background-color: #00BFFF">
				<div class="panel-title pull-ringht"><a href="{{ route('hotel.create') }} ">Tambah Data Hotel</a>
	</div>
	</div>
	<tbody bgcolor="aqua">
	<div class="panel-body">
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Hotel</th>
					<th>Kelas</th>
					<th>Lokasi</th>
					<th>Type Kamar</th>
					<th>Fasilitas</th>
					<th>No Kamar</th>
					<th colspan="3">Action</th>
				</tr>
			</thead>
			<body>
			@php $no=1 @endphp
				@foreach($hotel as $data)
				<tr>
					<td>{{$data->id}}</td>
					<td>{{$data->nama}}</td>
					<td>{{$data->kelas}}</td>
					<td>{{$data->lokasi}}</td>
					<td>{{$data->type_kamar}}</td>
					<td><img src="{{asset('/img/'.$data->fasilitas.'')}}" width="200px" height="100px" /></td>
					<td>{{$data->no_kamar}}</td>
					<td>
						<a class="btn btn-warning" href="/hotel/{{$data->id}}/edit">Edit</a>
					</td>
					<td>
					<form action="{{route('hotel.destroy',$data->id)}}" method="post">
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