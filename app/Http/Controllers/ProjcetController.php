<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Http\Requests\projects\StoreProjcetRequest;
use App\Http\Requests\projects\UpdateProjcetRequest;
use Illuminate\Support\Facades\DB;

class ProjcetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = auth()->user()->id;
        $projcets = DB::table('tasks')->select('*')->whereNull('task_parent_id')->where('assigner_id',$id)->get();
        return view('projects.index',compact('projcets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = auth()->user()->id;

        return view('projects.create',compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProjcetRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjcetRequest $request)
    {
        $data = $request->except('_token','page');
        DB::table('tasks')->insert($data);
        return $this->redirectAccordingToRequest($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Projcet  $projcet
     * @return \Illuminate\Http\Response
     */
    public function show( $projcet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Projcet  $projcet
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = DB::table('tasks')->where('id',$id)->first();
        return view('projects.edit',compact('project'));
     
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjcetRequest  $request
     * @param  \App\Models\Projcet  $projcet
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjcetRequest $request, $id)
    {
        $data = $request->except('_token','_method','page');
        DB::table('tasks')->where('id',$id)->update($data);
        return $this->redirectAccordingToRequest($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Projcet  $projcet
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
            return redirect()->route('projects.index')->with('success','Successfull Opertaion');
        }
    }
}
