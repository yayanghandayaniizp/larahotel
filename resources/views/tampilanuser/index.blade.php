@extends('layouts.app')
@section('content')
<form enctype="multipart/form-data">
          <div class="col-md-12">
            @foreach($daftarmobil as $data)
          <div class="col-md-4">
                <div class="well">
                  <a href="#"><img class="thumbnail img-responsive" src="{{asset('/img/'.$data->fotomobil.'')}}" /></a>
                  <center><font size="4px">{{$data->merk}}<br>" {{$data->plat_no}} "</font></center><br>
                </div>
            </div>
          @endforeach
          </div>
          
          </form>
@endsection