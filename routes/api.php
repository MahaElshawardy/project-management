<?php

use App\Http\Controllers\Api\EmployeeController;
use App\Http\Controllers\Api\TaskController;
use App\Http\Controllers\Api\ProjectController;
// use App\Http\Controllers\Api\ProjectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix'=>'employees'],function () {
    Route::get('/show/{id}',[EmployeeController::class,'show']);
    Route::get('/create',[EmployeeController::class,'create']);
    Route::post('/store',[EmployeeController::class,'store']);
    Route::get('/edit/{id}',[EmployeeController::class,'edit']);
    Route::post('/update/{id}',[EmployeeController::class,'update']);
    Route::post('/destroy/{id}',[EmployeeController::class,'destroy']);
});

Route::group(['prefix'=>'tasks'],function () {
    Route::get('/',[TaskController::class,'index']);
    Route::get('/show/{id}',[TaskController::class,'show']);
    Route::get('/create',[TaskController::class,'create']);
    Route::post('/store',[TaskController::class,'store']);
    Route::get('/edit/{id}',[TaskController::class,'edit']);
    Route::post('/update/{id}',[TaskController::class,'update']);
    Route::post('/destroy/{id}',[TaskController::class,'destroy']);
});

Route::group(['prefix'=>'projects'],function () {
    Route::get('/',[ProjectController::class,'index']);
    Route::get('/show/{id}',[ProjectController::class,'show']);
    Route::get('/create',[ProjectController::class,'create']);
    Route::post('/store',[ProjectController::class,'store']);
    Route::get('/edit/{id}',[ProjectController::class,'edit']);
    Route::post('/update/{id}',[ProjectController::class,'update']);
    Route::post('/destroy/{id}',[ProjectController::class,'destroy']);
});
Route::group(['prefix'=>'tasksOfEmployee'],function () {
    Route::get('/',[ProjectController::class,'index']);
    Route::get('/show/{id}',[ProjectController::class,'show']);
    Route::get('/edit/{id}',[ProjectController::class,'edit']);
    Route::post('/update/{id}',[ProjectController::class,'update']);
});