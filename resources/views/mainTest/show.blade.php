@extends('master.master')

@section('content')

<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h1 class="card-title"> {{$data_from_mainTest->project_id}} </h1>

      <h4 class="card-subtitle mb-2 text-muted">{{$data_from_mainTest->name}}</h4>
      <p class="card-text">{{ $data_from_mainTest->start_date}}</p>
      <p class="card-text">{{ $data_from_mainTest->end_date}}</p>
      <a href="{{route('main')}}" class="card-link btn btn-primary" >Back</a>

    </div>
  </div>



@endsection
