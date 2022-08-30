@extends('layouts.parent')
@section('h5','Tasks')
@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <div class="row">
                    @forelse($taskOfEmployee as $tasks)
                        <div class="col-lg-12">
                            <div class="card card-widget task-card">
                                <div class="card-body">
                                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <h5 class="mb-2">{{ $tasks->name }}</h5>
                                                <p>{{ $tasks->dascription }}</p>
                                                <p>{{ $tasks->result }}</p>
                                                <div class="media align-items-center">
                                                    <div class="btn bg-body mr-3"><i class="fa-solid fa-calendar mr-2"></i>{{ $tasks->start_date }}</div>
                                                    <div class="btn bg-body mr-3"><i class="fa-solid fa-calendar mr-2"></i>{{ $tasks->end_date }}</div>
                                                    @if($tasks->statue =='On-Progress')
                                                    <div class="btn bg-body mr-3"><i class="fa-solid fa-spinner mr-2"></i>{{ $tasks->statue }}</div>
                                                    @else
                                                    <div class="btn bg-body mr-3"><i class="fa-solid fa-circle-check mr-2"></i>{{ $tasks->statue }}</div>
                                                    @endif
                                                    @if (empty($tasks->result) != NULL)
                                                        <div class="btn-group btn bg-body mr-3" style="padding: 0 !important;">
                                                            <button type="button" class="btn ">Action</button>
                                                            <button type="button" class="btn dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <span class="sr-only">Toggle Dropdown</span>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="{{ route('taskOfEmployee.edit',$tasks->id)}}">View</a>
                                                            </div>
                                                        </div>
                                                        @else
                                                        <div class="btn-group btn bg-body mr-3" style="padding: 0 !important;">
                                                            <button type="button" class="btn ">Mission delivered</button>
                                                        </div>
                                                    @endif
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                    <div class="col-lg-12">
                        <div class="card card-widget task-card">
                            <div class="card-body">
                                <div class="d-flex flex-wrap align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <p>You Don't Have Any Tasks</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforelse
            </div>
        </div>
    </div>
</div>
@endsection