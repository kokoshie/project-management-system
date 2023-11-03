@extends('master.master')

@section('content')

<div class="col-3"></div>
<div class="col-6">
    @if (session('delete'))
        <div class="alert alert-success mb-3">
            {{ session('delete') }}
        </div>
    @endif
    @if (session('update'))
    <div class="alert alert-success mb-3">
        {{ session('update') }}
    </div>
@endif
    <div class="card p-2 shadow">
        <a href="{{url("sub-task/create")}}" class="d-flex flex-row-reverse mb-2"><i class="bi bi-plus-circle fa-2x me-1"></i></a>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Priority</th>
                    <th>Status</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($subTask as $item)
                    <tr>
                        <td>{{$item->name}}</td>
                        <td>{{$item->priority}}</td>
                        <td>{{$item->status}}</td>
                        <td>{{$item->start_date}}</td>
                        <td>{{$item->end_date}}</td>
                        <td class="d-flex">
                            <a href="{{url("/sub-task/$item->id")}}" @style('margin-right:10px') ><i class="bi bi-box-arrow-in-down-left"></i></a>
                            <a href="{{url("/sub-task/delete/$item->id")}}" @class('text-danger')><i class="bi bi-trash3"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="col-3"></div>
    
@endsection