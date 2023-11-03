<?php

namespace App\Http\Controllers\Projects;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;    
use App\Models\Projects\Project;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Project::all();
        return view('projects.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([    
            'name'=> 'required',
            'status'=> 'required',
            'start_date'=> 'required',
            'end_date'=> 'required',
        ]);
        Project::create([
            'name'=> $request->name,  
            'status'=>$request->status,  
            'start_date'=> $request->start_date,
            'end_date'=> $request->end_date
        ]);
        return redirect('/')->with('success', 'You have successfully created!');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Project::find($id);
        return view('projects.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Project::find($id)->update([    
            'name'=>$request->name,
            'status'=>$request->status,
            'start_date'=> $request->start,
            'end_date'=> $request->end
        ]) ;
        return redirect('/')->with('success', 'You have successfully update!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Project::find($id)->delete();
        return redirect('/')->with('success', 'You have successfully deleted!');
    }
}
