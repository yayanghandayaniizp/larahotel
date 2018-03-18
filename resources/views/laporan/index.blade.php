@extends('layouts.master')
@section('content')
	<div class="container">
		<center><h1><b>Data Laporan</b></h1></center>
		<div class="panel panel-primary" style="background-color: #F0F8FF">
			<div class="panel-heading" style="background-color: #00BFFF">
				<div class="panel-title pull-ringht"><a href="{{ route('laporan.create') }} ">tambah laporan</a>
	</div>
	</div>
	<div class="panel-body">
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>No Kamar</th>
					<th>Nama hotel</th>
					<th>Tanggal Masuk</th>
					<th>Tanggal Keluar</th>
				</tr>
			</thead>
			<tbody>
				@php $no=1 @endphp
				@foreach($laporan as $data)
				<tr>
					<td>{{$no++}}</td>
					<td>{{$data->hotel->no_kamar}}</td>
					<td>{{$data->hotel->nama}}</td>
					<td>{{$data->booking->check_in}}</td>
					<td>{{$data->booking->check_out}}</td>
					<td>
					</td>
					<td>
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