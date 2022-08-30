<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\traits\ApiTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\employees\StoreEmployeeRequest;
use App\Http\Requests\employees\UpdateEmployeeRequest;

class EmployeeController extends Controller
{
    use ApiTrait;
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        // $id = auth()->user()->id;
        $users = User::select('id','position')->get();
        return $this->Data(compact('users','user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEmployeeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmployeeRequest $request)
    {
        $data = $request->collect();
        User::create($data);
        return $this->SuccessMessage("product created successfully",201); // return success message
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */    
    public function show($id)
    {
        $data = Session::get('user', 'id');
        $employees = User::select('id','name','email','phone')->where('users.supervisor_id',$id)->get();
        return $this->Data(compact('employees'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::findOrFail($id);
        $user = User::select('name','email','phone')->get();
        return $this->Data(compact('users','user'));
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
        $data = $request->except('_method');
        User::where('id',$id)->update($data);
        return $this->SuccessMessage('Employee updated successfully');
    }

}
