<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\employees\StoreEmployeeRequest;
use App\Http\Requests\employees\UpdateEmployeeRequest;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get all employee under supervisor
        $id = auth()->user()->id;
        
        $employees = DB::table('users')->select('id','name','email','phone')->where('users.supervisor_id',$id)->get();
        // echo ($employees);
        return view('employees.index',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = auth()->user()->id;
        // dd($id);
        // $employee = DB::table('users')->select('id')->
        return view('employees.create',compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEmployeeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmployeeRequest $request)
    {
        $data = $request->except('_token','page','password_confirmation');
        DB::table('users')->insert($data);
        return $this->redirectAccordingToRequest($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show( $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $users = DB::table('users')->where('id',$id)->first();
        return view('employees.edit',compact('users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEmployeeRequest  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmployeeRequest $request, $id)
    {
        $data = $request->except('_token','page','_method');
        DB::table('users')->where('id',$id)->update($data);
        return $this->redirectAccordingToRequest($request);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('users')->where('id',$id)->delete();
        return redirect()->back()->with('success','Successfull Opertaion');
    }
    private function redirectAccordingToRequest($request)
    {
        if($request->page == 'back'){
            return redirect()->back()->with('success','Successfull Opertaion');
        }else{
            return redirect()->route('employees.index')->with('success','Successfull Opertaion');
        }
    }
}
