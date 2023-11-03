<?php

namespace App\Http\Controllers;

use App\Models\SubTask;
use Illuminate\Http\Request;
use App\Http\Requests\SubTaskRequest;

class SubTaskController extends Controller
{
    public function index()
    {
        $subTask = SubTask::all();
        return view("subTask.index",['subTask'=>$subTask]);
    }
   
    public function create()
    {
        return view("subTask.create");
    }
   
    public function store(SubTaskRequest $request)
    {
        // dd("dd");
        $validated = $request->validated();
       
        // dd($validated);
        $validated = $request->safe()->only(['main_task_id','name', 'priority','status','start_date','end_date']);
        $subTask = new SubTask();
        $subTask->main_task_id = $validated['main_task_id'];
        $subTask->name = $validated['name'];
        $subTask->priority = $validated['priority'];
        $subTask->status = $validated['status'];
        $subTask->start_date = $validated['start_date'];
        $subTask->end_date = $validated['end_date'];
        $subTask->save();
        return back()->with("success","Upload Successfully!");
    }
   
    public function show(string $id)
    {
        //
    }

    
    public function edit(string $id)
    {
        $subTask = SubTask::find($id);
        return view("subTask.edit",["subTask"=>$subTask]);
    }

    
    public function update(Request $request, string $id)
    {
        $subTask = SubTask::find($id);
        $subTask->main_task_id = $request->main_task_id;
        $subTask->name = $request->name;
        $subTask->priority = $request->priority;
        $subTask->status = $request->status;
        $subTask->start_date = $request->start_date;
        $subTask->end_date = $request->end_date;
        $subTask->save();

        return redirect('sub-task')->with('update','Update successfully!');
        
    }

    
    public function destroy(string $id)
    {
      SubTask::find($id)->delete();
      return back()->with("delete","Delete Successfully");
    }
}
