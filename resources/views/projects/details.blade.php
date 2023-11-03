@extends('master.master')

@section('content')


<div class="container-fluid">
        <div class="row">
            <div class="col-md-6 mx-auto" style="height: 50px">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="card-title col-md-10">
                            <h3 class="pl-5">Details</h3>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-primary "><a href="{{ url('/') }}" class="text-light" >Back</a></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div>
                            Project Name => {{ $detail_data->name }}
                        </div>

                        <div>
                            Project Status => {{ $detail_data->status }}
                        </div>

                        <div>
                            Project Start Date => {{ $detail_data->start_date }}
                        </div> 

                        <div>
                            Project End Date => {{ $detail_data->start_date }}
                        </div> 
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection





