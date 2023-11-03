<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MainTest;
use Hamcrest\Arrays\IsArray;
use PhpParser\Node\Expr\Cast\String_;
use PHPUnit\TextUI\Help;

class MainTestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas_from_mainTest = MainTest::all();
        return view('mainTest.index',compact('datas_from_mainTest'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mainTest.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       return insert($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data_from_mainTest = MainTest::findOrFail($id);

        return view('mainTest.show',compact('data_from_mainTest'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mainTest = new MainTest();
        $data_from_mainTest = $mainTest->find($id);
        return view('mainTest.edit',compact('data_from_mainTest'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       return update($request,$id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        return delete($id);
    }
}



function insert(Request $request)
{
    MainTest::create([
        'project_id'=>$request->project_id,
        'name'=>$request->name,
        'start_date'=>$request->start_date,
        'end_date'=>$request->end_date,
        'status'=>$request->status,
    ]);
    return redirect(route('main'));
}

function delete(String $id)
{
    $mainTest = new MainTest();
    $mainTest->destroy($id);

    return redirect(route('main'));
}

function update(Request $request, String $id)
{

    $MainTest = MainTest::findOrFail($id);
    $MainTest->name = $request->name;
    $MainTest->project_id = $request->project_id;
    $MainTest->status = $request->status;
    $MainTest->start_date = $request->start_date;
    $MainTest->end_date = $request->end_date;
    $MainTest->save();
    return redirect(route('main'));
}

function show($id)
{
    $data = MainTest::findOrFail($id);
}



