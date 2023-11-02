@extends('master.master')

@section('content')

<div class="container">

    <div class="row">

        <div class="col-10 offset-1 shadow p-3">
            <form  method="POST" >
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Project</label>
                    <input type="text" name="project_id" class="form-control" value="{{$data_from_mainTest->project_id}}" >
                  </div>

                <div class="mb-3">
                  <label for="name" class="form-label">Main Test</label>
                  <input type="text" name="name" class="form-control" value="{{$data_from_mainTest->name}}" >
                </div>

                <div class="mb-3">
                    <label for="status">Project Status</label>
                    <select class="custom-select " name="status" id="inputGroupSelect01">
                        <option  disabled >Status</option>
                        <option {{$data_from_mainTest->status == 'To Do' ? 'selected':''}} value="To Do" >To Do</option>
                        <option value="Progress" {{$data_from_mainTest->status == 'Progress' ? 'selected':''}}  >Progress</option>
                        <option value="Done" {{$data_from_mainTest->status == 'Done' ? 'selected':''}} >Done</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="start_date" class="" >Project Start Date</label>
                    <input type="date" name="start_date" class="form-control" value="{{$data_from_mainTest->start_date}}">
                </div>

                <div class="mb-3">
                    <label for="end_date">Project End Date</label>
                    <input type="date" name="end_date" class="form-control" value="{{$data_from_mainTest->end_date}}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{route('main')}}" class="btn btn-primary">Back</a>
              </form>
        </div>

    </div>

</div>

@endsection
