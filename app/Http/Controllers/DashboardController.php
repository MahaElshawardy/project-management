<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    public function index()
    {
        $id = auth()->user()->id;
        $projcets = DB::table('tasks')->select('*')->whereNull('task_parent_id')->where('assigner_id',$id)->get();
        $tasks = DB::table('tasks')->select('tasks.*','users.name as nameOfassigner','tasks.task_parent_id as nameOfProject',DB::raw('(SELECT tasks.name FROM tasks WHERE id = nameOfProject) as nameOf1Project'))->where('assigner_id',$id)->join('users','users.id','=','tasks.assigner_to_id')->get();
        return view('dashboard',compact('projcets','tasks'));
    }
    
}
