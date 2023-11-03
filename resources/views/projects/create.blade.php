@extends('master.master')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card shadow-3">
                <div class="card-header d-flex justify-content-between">
                    <div class="card-title col-md-10">
                        <h3>Create Project</h3>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-primary"><a href="{{ url('/') }}" class="text-light">Back</a></button>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ url('store') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="">Name </label>
                            <input type="text" name="name" placeholder="Enter your name" class="form-control mb-3 @error('name') is-invalid @enderror">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Status</label>
                            <select name="status" id="status" class="form-control @error('status') is-invalid @enderror">
                                <option value="">--Select Option--</option>
                                <option value="To Do">To Do</option>
                                <option value="PROGRESS">Progress</option>
                                <option value="DONE">Done</option>
                            </select>
                            @error('status')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div>
                            <label for="" class="form-group">Start Date </label>
                            <input type="date" name="start_date" class="form-control mb-3 @error('start_date') is-invalid @enderror">
                            @error('start_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div>
                            <label for="" class="form-group">End Date </label>
                            <input type="date" name="end_date" class="form-control mb-3 @error('end_date') is-invalid @enderror">
                            @error('end_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div>
                            <input type="submit" value="Submit" class="btn btn-primary ">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection