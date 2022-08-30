<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Requests\taskOfEmployee\UpdateTaskRequest;
use Illuminate\Support\Facades\DB;

class TaskOfEmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all tasks
        $id = auth()->user()->id;
        $taskOfEmployee = DB::table('tasks')->select('*')->where('assigner_to_id',$id)->get();
        return view('taskOfEmployee.index',compact('taskOfEmployee'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id = auth()->user()->id;
        $tasks = DB::table('tasks')->select('*')->where('assigner_to_id',$id)->first();
        // dd($tasks);
       return view('taskOfEmployee.edit',compact('tasks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTaskRequest  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTaskRequest $request, $id)
    {
        $data = $request->except('_token','_method','page');
        DB::table('tasks')->where('id',$id)->update($data);
        return redirect()->route('taskOfEmployee.index')->with('success','Successfull Opertaion');   
    }

}
