@extends('master.master')

@section('content')



<div class="d-flex justify-content-end w-100">
   <a href="/main-test/create" class="btn btn-primary mb-1"> Create Project </a>
</div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Project Name</th>
        <th scope="col">Main Task</th>
        <th scope="col">status</th>
        <th scope="col">Start Date</th>
        <th scope="col">End Date</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>

        <?php $i=1 ?>

        @foreach ( $datas_from_mainTest  as $data_from_mainTest  )


        <tr>
            <th scope="row">{{$i++}}</th>
            <td> {{ $data_from_mainTest->project->name }} </td>
            <td>  {{ $data_from_mainTest->name }} </td>
            <td>  <span class="bg-warning rounded p-1">{{ $data_from_mainTest->status }} </span> </td>
            <td>  {{ $data_from_mainTest->start_date }} </td>
            <td> {{ $data_from_mainTest->end_date }} </td>
            <td class="d-flex gap-4">
                <a href="{{route('main-show',['id'=>$data_from_mainTest->id])}}" >
                    <svg   xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                    </svg>
                </a>
                <a href="{{route('main-edit', ['id'=>$data_from_mainTest->id])}}" class="text-success">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square " viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                        </svg>
                </a>
                <div>
                    <form action="{{route('main-delete',['id'=>$data_from_mainTest->id ])}}" method="POST" >
                        @csrf
                        @method('DELETE')
                        <button class="border-0 text-danger p-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi  bi-trash3-fill  " viewBox="0 0 16 16">
                                <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                            </svg>
                        </button>
                    </form>
                </div>
            </td>
          </tr>

        @endforeach


    </tbody>
  </table>

@endsection
