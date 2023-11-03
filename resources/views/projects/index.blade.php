@extends('master.master')

@section('content')

<div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="card-title col-md-10">
                            <h2 class="pl-5">Project Lists</h2>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-primary btn-lg"><a href="{{ url('create') }}" class="text-light" >Create</a></button>
                        </div>
                    </div>
                    <div class="card-body">
                        @if(Session('success'))
                            <div class="alert alert-info alert-dismissible show fade">
                                <strong>{{ Session('success') }}</strong>
                                <button class="close" data-dismiss="alert">&times;</button>
                            </div>
                        @endif
                        <table class="table table-bordered table-striped" @style('font-size:23px')>
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
                                            <a href="{{ url('/edit/'. $row->id ) }}" class="btn btn-success btn-lg"><i class="bi bi-pencil-square p-2"></i>Edit</a>
                                            <a href="{{ '/delete/'. $row->id }}" class="btn btn-danger btn-lg" onclick="return confirm('Are you sure you want to delete?')"><i class="bi bi-trash3-fill p-2"></i>Delete</a> 
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





