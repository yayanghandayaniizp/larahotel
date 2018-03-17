@extends('layouts.master')
@section('content')
  <div class="container">
    <center><h1><b>Data Tamu</b></h1></center>
    <div class="panel panel-primary" style="background-color: #F0F8FF  ">
      <div class="panel-heading" style="background-color: #00BFFF">
        <div class="panel-title pull-ringht"><a href="{{ route('tamu.create') }} ">Tambah Data tamu</a>
  </div>
  </div>
  
  <div class="panel-body">
    <table class="table">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Jenis Kelamin</th>
          <th>No Ktp</th>
          <th>No Telpon</th>
          <th>Alamat</th>
          <th colspan="3">Action</th>
        </tr>
      </thead>
      <tbody>
      @php $no=1 @endphp
        @foreach($tamu as $data)
        <tr>
          <td>{{$data->id}}</td>
          <td>{{$data->nama}}</td>
          <td>{{$data->jenis_kelamin}}</td>
          <td>{{$data->no_ktp}}</td>
          <td>{{$data->no_telpon}}</td>
          <td>{{$data->alamat}}</td>
          <td>
            <a class="btn btn-warning" href="/tamu/{{$data->id}}/edit">Edit</a>
          </td>
          <td>
          <form action="{{route('tamu.destroy',$data->id)}}" method="post">
            <input type="hidden" name="_method" value="Delete">
            <input type="hidden" name="_token">
            <input type="submit" value="Delete" class="btn btn-danger">
            {{csrf_field()}}
          </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  </div>
  <br><br><br>
  </div>
@endsection