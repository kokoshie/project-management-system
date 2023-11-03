@extends('master.master');

@section('content')
    <div class="col-3">
    </div>
  
    <div class="col-6">
        <div class="card p-4 shadow">
            <div class="d-flex justify-content-between">
                <h3 class="text-primary mb-4">Edit SubTask</h3>
                <a href="{{url('sub-task/')}}"><i class="bi bi-reply-fill fa-2x"></i></a>
            </div>
            <form action="{{url("sub-task/$subTask->id")}}" method="post">
                @csrf
                <input type="hidden" name="main_task_id" value="1">
                <div class="mb-2">
                <label for="">Name</label>
                <input type="textname" name="name" class="form-control" value="{{$subTask->name}}">
                </div>
                <div class="mb-2">
                    <label for="">Priority</label>
                    <select name="priority" id="" class="form-control">
                        <option value="{{$subTask->priority}}" hidden>{{{$subTask->priority}}}</option>
                        <option value="High">High</option>
                        <option value="Mid">Mid</option>
                        <option value="Low">Low</option>
                    </select>
                </div>
                <div class="mb-2">
                    <label for="">Status</label>
                    <select name="status" class="form-control">
                        <option value="{{$subTask->status}}" hidden>{{$subTask->status}}</option>
                        <option value="To do">To do</option>
                        <option value="Progress">Progress</option>
                        <option value="Done">Done</option>
                    </select>
                </div>
                <div class="mb-2">
                    <label for="">Start-date</label>
                    <input name="start_date" type="date" class="form-control" value="{{$subTask->start_date}}">
                </div>
                <div class="mb-2">
                    <label for="">End-date</label>
                    <input name="end_date" type="date" class="form-control" value="{{$subTask->end_date}}">
                </div>
               
                <div class="">
                    <input type="submit" value="Ok" class="btn btn-primary">
                    <a href="{{url('sub-task/')}}" class="btn btn-success">Cancel</a>
                </div>
            </form>
        </div>
    </div>
    <div class="col-3"></div>
@endsection