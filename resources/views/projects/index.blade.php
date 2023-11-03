@extends('master.master')

@section('content')

<div class="container-fluid">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="card-title col-md-10">
                            <h3 class="pl-5">Project Lists</h3>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-primary "><a href="{{ url('create') }}" class="text-light" >Create</a></button>
                        </div>
                    </div>
                    <div class="card-body">
                        @if(Session('success'))
                            <div class="alert alert-info alert-dismissible show fade">
                                <strong>{{ Session('success') }}</strong>
                                <button class="close" data-dismiss="alert">&times;</button>
                            </div>
                        @endif
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr class="text-center">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $row)
                                    <tr>
                                        <td>{{ $row->id }}</td>
                                        <td>{{ $row->name }}</td>
                                        <td>{{ $row->status }}</td>
                                        <td>{{ $row->start_date }}</td>
                                        <td>{{ $row->end_date }}</td>
                                        <td class="text-center">
                                            <a href="{{ url('/show/details/'. $row->id ) }}" class="btn btn-info"><i class="bi bi-ticket-detailed-fill"></i></a>
                                            <a href="{{ url('/edit/'. $row->id ) }}" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                                            <a href="{{ '/delete/'. $row->id }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?')"><i class="bi bi-trash3-fill "></i></a> 
                                        </td>
                                    </tr> 
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection





