<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Http\Requests\tasks\StoreTaskRequest;
use App\Http\Requests\tasks\UpdateTaskRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TaskController extends Controller
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
        $tasks = DB::table('tasks')->select('tasks.*','users.name as nameOfassigner','tasks.task_parent_id as nameOfProject',DB::raw('(SELECT tasks.name FROM tasks WHERE id = nameOfProject) as nameOf1Project'))->where('assigner_id',$id)->join('users','users.id','=','tasks.assigner_to_id')->get();
        return view('tasks.index',compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * from tasks
     */
     public function create()
     {
        $id = auth()->user()->id;
        $users = DB::table('users')->select('*')->where('users.supervisor_id',$id)->get();
        $task = DB::table('tasks')->select('tasks.*')->where('users.id',$id)->join('users','users.id','=','tasks.assigner_id')->get();
        return view('tasks.create',compact('users','task'));
     }
     /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\tasks\StoreTaskRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTaskRequest $request)
    {
        $data = $request->except('_token','page');
        DB::table('tasks')->insert($data);
        return $this->redirectAccordingToRequest($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id1 = auth()->user()->id;
        $users = DB::table('users')->select('*')->where('users.supervisor_id',$id1)->get();
        $task = DB::table('tasks')->select('tasks.*')->where('users.id',$id1)->join('users','users.id','=','tasks.assigner_id')->get();
        $getTask = DB::table('tasks')->where('id',$id)->first();
        return view('tasks.edit',compact('getTask','users','task'));
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
        return $this->redirectAccordingToRequest($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tasks')->where('id',$id)->delete();
        return redirect()->back()->with('success','Successfull Opertaion');
    }
    private function redirectAccordingToRequest($request)
    {
        if($request->page == 'back'){
            return redirect()->back()->with('success','Successfull Opertaion');
        }else{
            return redirect()->route('tasks.index')->with('success','Successfull Opertaion');
        }
    }
}
