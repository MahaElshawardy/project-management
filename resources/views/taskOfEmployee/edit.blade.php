@extends('layouts.parent')
@section('h5','View Task')
@section('content')
<div class="modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header d-block text-center pb-3 border-bttom">
            <h3 class="modal-title" id="exampleModalCenterTitle01">View Task</h3>
        </div>
        <form action="{{ route('taskOfEmployee.update',$tasks->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group mb-3">
                            <label for="exampleInputText01" class="h5">Task Name </label>
                            <p class="form-control" id="exampleInputText01" style="padding-top: 0;">{{$tasks->name}}</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mb-3">
                            <label for="exampleInputText004" class="h5">Start Dates</label>
                            <p class="form-control" id="exampleInputText01" style="padding-top: 0;">{{$tasks->start_date}}</p>
                        </div>
                       
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mb-3">
                            <label for="exampleInputText004" class="h5">End Dates</label>
                            <p class="form-control" id="exampleInputText01" style="padding-top: 0;">{{$tasks->end_date}}</p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group mb-3">
                            <label for="exampleInputText40" class="h5">Solving The Task</label>
                            <textarea class="form-control @error('result') is-invalid @enderror" id="exampleInputText40" rows="2" name="result" placeholder="Textarea"></textarea>
                            <input type="hidden" class="@error('result') is-invalid @enderror" name="statue" value="Done">
                        </div>
                        @error('result')
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
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection