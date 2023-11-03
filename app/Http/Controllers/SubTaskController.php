<?php

namespace App\Http\Controllers;

use App\Models\MainTest;
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
        $main_test = MainTest::all();
        return view("subTask.create",['main_test'=>$main_test]);
    }
   
    public function store(SubTaskRequest $request)
    {
        $validated = $request->validated();
        $mainTask = MainTest::find($validated['main_task_id']);
        if ($mainTask->start_date <= $validated['start_date'] && $validated['start_date'] < $mainTask->end_date && $mainTask->start_date <= $validated['end_date'] && $validated['end_date'] <= $mainTask->end_date) {
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
        
        return back()->with('date_error',"Date must be between $mainTask->start_date and $mainTask->end_date");
       
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
        $mainTask = MainTest::find($request['main_task_id']);

        if ($mainTask->start_date <= $request['start_date'] && $request['start_date'] < $mainTask->end_date && $mainTask->start_date <= $request['end_date'] && $request['end_date'] <= $mainTask->end_date) {
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
        
        return back()->with('date_error',"Date must be between $mainTask->start_date and $mainTask->end_date");



       
        
    }

    
    public function destroy(string $id)
    {
      SubTask::find($id)->delete();
      return back()->with("delete","Delete Successfully");
    }
}
