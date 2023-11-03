@extends('master.master')

@section('content')
    <div class="col-3">
    </div>

         @php 
         $error = [];
         if($errors->any()){
            $error = $errors->all();
         }
         @endphp      
    
    <div class="col-6">
        <div class="card p-4 shadow border-0">
            <div class="d-flex justify-content-between">
                <h3 class="text-primary mb-4">Add SubTask</h3>
                <a href="{{url('sub-task/')}}"><i class="bi bi-reply-fill fa-2x"></i></a>
            </div>
            @if (session('success'))
                <div class="alert alert-success mb-3">
                    {{ session('success') }}
                </div>
            @endif
            <form action="{{url("sub-task/create")}}" method="post">
                @csrf
                <input type="hidden" name="main_task_id" value="1">
                <div class="mb-2">
                <label for="">Name</label>
                <input type="textname" name="name" class="form-control">
                @if($error)
                    <span class="text-danger">{{$error[0]}}</span>
                @endif    
                </div>
                <div class="mb-2">
                    <label for="">Priority</label>
                    <select name="priority" id="" class="form-control">
                        <option value="" hidden>--select option--</option>
                        <option value="High">High</option>
                        <option value="Mid">Mid</option>
                        <option value="Low">Low</option>
                    </select>
                @if($error)
                    <span class="text-danger">{{$error[1]}}</span>
                @endif 
                </div>
                <div class="mb-2">
                    <label for="">Status</label>
                    <select name="status" class="form-control">
                        <option value="" hidden>--select option--</option>
                        <option value="To do">To do</option>
                        <option value="Progress">Progress</option>
                        <option value="Done">Done</option>
                    </select>
                    @if($error)
                        <span class="text-danger">{{$error[2]}}</span>
                    @endif 
                </div>
                <div class="mb-2">
                    <label for="">Start-date</label>
                    <input name="start_date" type="date" class="form-control">
                    @if($error)
                        <span class="text-danger">{{$error[3]}}</span>
                    @endif 
                </div>
                <div class="mb-2">
                    <label for="">End-date</label>
                    <input name="end_date" type="date" class="form-control">
                    @if($error)
                        <span class="text-danger fst-italic">{{$error[4]}}</span>
                    @endif 
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