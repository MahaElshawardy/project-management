@extends('layouts.parent')
@section('h5','New Project')
@section('content')
<div class="modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header d-block text-center pb-3 border-bttom">
            <h3 class="modal-title" id="exampleModalCenterTitle01">New Project</h3>
        </div>
        <form action="{{route('projects.store')}}" method="post">
            @csrf
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group mb-3">
                            <label for="exampleInputText01" class="h5">Project Name </label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name')}}" id="exampleInputText01" placeholder="Project Name">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mb-3">
                            <label for="exampleInputText004" class="h5">Start Dates</label>
                            <input type="date" class="form-control @error('start_date') is-invalid @enderror"value="{{old('start_date')}}" name="start_date" id="exampleInputText004" value="">
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
                            <input type="date" class="form-control @error('end_date') is-invalid @enderror"value="{{old('end_date')}}" name="end_date" id="exampleInputText004" value="">
                        </div>
                        @error('end_date')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group mb-3">
                            <label for="exampleInputText40" class="h5">Description</label>
                            <textarea class="form-control @error('dascription') is-invalid @enderror" id="exampleInputText40" rows="2" name="dascription" placeholder="Textarea">{{old('dascription')}}</textarea>
                        </div>
                        @error('dascription')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <input type="hidden" class="form-control" name="assigner_id" value="{{ $id }}" id="exampleInputText2" placeholder="supervisorID">
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