@extends('layouts.parent')
@section('h5','New Task')
@section('content')
@section('url')
 {{ route('tasks.create')}}
@endsection
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <div class="row">
                @foreach($tasks as $task)
                    <div class="col-lg-12">
                        <div class="card card-widget task-card">
                            <div class="card-body">
                                <div class="d-flex flex-wrap align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <h5 class="mb-2">{{ $task->name }}</h5>
                                            <label style="font-size: 12px !important;"> Name Of Project: {{ $task->nameOf1Project }}</label>
                                            <p>{{ $task->dascription }}</p>
                                            <div class="media align-items-center">
                                                <div class="btn bg-body mr-3"><i class="fa-solid fa-user mr-2"></i>{{ $task->nameOfassigner }}</div>
                                                <div class="btn bg-body mr-3"><i class="fa-solid fa-calendar mr-2"></i>{{ $task->start_date }}</div>
                                                <div class="btn bg-body mr-3"><i class="fa-solid fa-calendar mr-2"></i>{{ $task->end_date }}</div>
                                                @if($task->statue =='On-Progress')
                                                <div class="btn bg-body mr-3"><i class="fa-solid fa-spinner mr-2"></i>{{ $task->statue }}</div>
                                                @else
                                                <div class="btn bg-body mr-3"><i class="fa-solid fa-circle-check mr-2"></i>{{ $task->statue }}</div>
                                                @endif
                                                <!-- <div class="btn bg-body mr-3"><i class="fa-solid fa-circle-check mr-2"></i><div class="btn-group"> -->
                                                <div class="btn-group btn bg-body mr-3" style="padding: 0 !important;">
                                                    <button type="button" class="btn ">Action</button>
                                                    <button type="button" class="btn dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="{{ route('tasks.edit',$task->id) }}">Edit</a>
                                                        <form action="{{route('tasks.destroy',$task->id)}}" method="post" class="d-inline">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button class="dropdown-item">Delete</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection