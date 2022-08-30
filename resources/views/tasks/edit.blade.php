@extends('layouts.parent')
@section('h5','Edit Task')
@section('content')
<div class="modal-dialog-centered" >
            <div class="modal-content">
                <div class="modal-header d-block text-center pb-3 border-bttom">
                    <h3 class="modal-title" id="exampleModalCenterTitle03">Edit Task</h3>
                </div>
                <form action="{{route('tasks.update',$getTask->id)}}" method="post" enctype="multipart/form-data">
                    @csrf                 
                    @method('PUT')
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label for="exampleInputText03" class="h5">Task Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="exampleInputText03" value="{{ $getTask->name }}" placeholder="Enter task Name">
                                    <a href="#" class="task-edit text-body"></a>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label for="exampleInputText2" class="h5">Assigned to</label>
                                    <select name="assigner_to_id" class="selectpicker form-control @error('assigner_to_id') is-invalid @enderror" data-style="py-0">
                                        <option selected>Select one</option>
                                        @foreach ( $users as $user ) 
                                            <option {{ $user->id == $user->id ? 'selected' : '' }}  value="{{$user->id}}"> {{ $user->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('assigner_to_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label for="exampleInputText004" class="h5">Start Dates</label>
                                    <input type="date" class="form-control @error('start_date') is-invalid @enderror" name="start_date" id="exampleInputText004" value="{{$getTask->start_date}}">
                                </div> 
                                    @error('start_date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror                        
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label for="exampleInputText004" class="h5">End Dates</label>
                                    <input type="date" class="form-control @error('end_date') is-invalid @enderror" name="end_date" id="exampleInputText004" value="{{$getTask->end_date}}">
                                </div> 
                                    @error('end_date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror                       
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label for="exampleInputText2" class="h5">Project Name</label>
                                    <select name="task_parent_id" class="selectpicker form-control @error('task_parent_id') is-invalid @enderror" data-style="py-0">
                                        <option selected>Select one</option>
                                        @foreach ( $task as $tasks )
                                        <option {{ $tasks->id == $tasks->id ? 'selected' : '' }}  value="{{$tasks->id}}">{{$tasks->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('task_parent_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror  
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label for="exampleInputText40" class="h5">Description</label>
                                    <textarea class="form-control @error('dascription') is-invalid @enderror" id="exampleInputText40" rows="2" name="dascription" placeholder="Textarea">{{ $getTask->dascription }}</textarea>
                                </div>
                                     @error('dascription')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror  
                            </div>
                            
                            <div class="col-lg-12">
                                <div class="d-flex flex-wrap align-items-ceter justify-content-center mt-4">
                                    <div class="btn btn-dark mr-3" data-dismiss="modal">
                                        <button class="btn btn-dark" name="page" value="index">Save</button>
                                    </div>
                                    <div class="btn btn-dark mr-3" data-dismiss="modal">
                                        <button class="btn btn-dark" name="page" value="back">Back</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection