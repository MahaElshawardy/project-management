@extends('layouts.parent')
@section('h5','New Employee')
@section('content')
<div class="modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header d-block text-center pb-3 border-bttom">
            <h3 class="modal-title" id="exampleModalCenterTitle02">New User</h3>
        </div>
        <div class="modal-body">
            <form action="{{route('employees.store')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group mb-3">
                            <label for="exampleInputText2" class="h5">Full Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="exampleInputText2" placeholder="Enter your full name">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mb-3">
                            <label for="exampleInputText006" class="h5">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="exampleInputText006" placeholder="Enter your Email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mb-3">
                            <label for="exampleInputText04" class="h5">Phone Number</label>
                            <input type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" id="exampleInputText04" placeholder="Enter phone number">
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <input type="hidden" value="Employee" class="form-control @error('position') is-invalid @enderror" name="position" id="exampleInputText04" placeholder="position">
                    <div class="col-lg-6">
                        <div class="form-group mb-3">
                            <label for="pass" class="h5">Password</label>
                            <input type="password" name="password" class="form-control @error('position') is-invalid @enderror" id="pass" placeholder="Enter your Password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mb-3">
                            <label for="rpass" class="h5">Repeat Password</label>
                            <input type="password" name="password_confirmation" class="form-control" id="rpass" placeholder="New Password">
                            @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <input type="hidden" class="form-control" name="supervisor_id" value="{{ $id }}" id="exampleInputText2" placeholder="supervisorID">
                </div>
                <div class="col-lg-12">
                    <div class="d-flex flex-wrap align-items-ceter justify-content-center mt-2">
                        <div class="btn btn-dark mr-3" data-dismiss="modal">
                            <button class="btn btn-dark" name="page" value="index">Save</button>
                        </div>
                        <div class="btn btn-dark mr-3" data-dismiss="modal">
                            <button class="btn btn-dark" name="page" value="back">Back</button>
                        </div>
                    </div>
                </div>
        </div>
        </form>
    </div>
</div>

@endsection