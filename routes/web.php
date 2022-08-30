<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ProjcetController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TaskOfEmployeeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['prefix'=>'dashboard','middleware'=>['auth','verified']],function(){
    Route::get('/',[DashboardController::class,'index'])->name('dashboard');

    Route::group(['prefix'=>'projects','as'=>'projects.'],function(){
        Route::get('/',[ProjcetController::class,'index'])->name('index');
        Route::get('/create',[ProjcetController::class,'create'])->name('create');
        Route::post('/store',[ProjcetController::class,'store'])->name('store');
        Route::get('/edit/{id}',[ProjcetController::class,'edit'])->name('edit');
        Route::put('/update/{id}',[ProjcetController::class,'update'])->name('update');
        Route::delete('/destroy/{id}',[ProjcetController::class,'destroy'])->name('destroy');
    });
    Route::group(['prefix'=>'tasks','as'=>'tasks.'],function(){
        Route::get('/',[TaskController::class,'index'])->name('index');
        Route::get('/create',[TaskController::class,'create'])->name('create');
        Route::post('/store',[TaskController::class,'store'])->name('store');
        Route::get('/edit/{id}',[TaskController::class,'edit'])->name('edit');
        Route::put('/update/{id}',[TaskController::class,'update'])->name('update');
        Route::delete('/destroy/{id}',[TaskController::class,'destroy'])->name('destroy');

    });
    Route::group(['prefix'=>'employees','as'=>'employees.'],function(){
        Route::get('/',[EmployeeController::class,'index'])->name('index');
        Route::get('/create',[EmployeeController::class,'create'])->name('create');
        Route::post('/store',[EmployeeController::class,'store'])->name('store');
        Route::get('/edit/{id}',[EmployeeController::class,'edit'])->name('edit');
        Route::put('/update/{id}',[EmployeeController::class,'update'])->name('update');
        Route::delete('/destroy/{id}',[EmployeeController::class,'destroy'])->name('destroy');

    });

    Route::group(['prefix'=>'taskOfEmployee','as'=>'taskOfEmployee.'],function(){
        Route::get('/',[TaskOfEmployeeController::class,'index'])->name('index');
        Route::get('/edit/{id}',[TaskOfEmployeeController::class,'edit'])->name('edit');
        Route::put('/update/{id}',[TaskOfEmployeeController::class,'update'])->name('update');
    });
});

Auth::routes(['verify'=> true]);
