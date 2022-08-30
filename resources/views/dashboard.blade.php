@extends('layouts.parent')
@section('h5','Home')
@section('dash')

<div class="col-lg-12">
    <div class="card-transparent mb-0">
        <div class="card-header d-flex align-items-center justify-content-between p-0 pb-3">
            <div class="header-title">
                <h4 class="card-title">Current Projects</h4>
            </div>
            <div class="card-header-toolbar d-flex align-items-center">
                <div id="top-project-slick-arrow" class="slick-aerrow-block">
                </div>
            </div>
        </div>
        <div class="card-body p-0">
            <ul class="list-unstyled row top-projects mb-0">
                @foreach ( $projcets as $project )
                <li class="col-lg-4">
                    <div class="card" style="height: 372px;">
                        <div class="card-body">
                            <h5 class="mb-3">{{ $project->name }}</h5>
                            <p class="mb-3"><i class="las la-calendar-check mr-2"></i>{{ $project->start_date }}</p>
                            <p class="mb-3">{{ $project->dascription }}</p>
                            @if($project->statue =='On-Progress')
                            <div class="btn bg-body mr-3" style="float: right;margin-top: -28px;"><i class="fa-solid fa-spinner mr-2"></i>{{ $project->statue }}</div>
                            @else
                            <div class="btn bg-body mr-3" style="float: right;margin-top: -28px;"><i class="fa-solid fa-circle-check mr-2"></i>{{ $project->statue }}</div>
                            @endif
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
<div class="col-lg-12">
    <div class="card-transparent mb-0">
        <div class="card-header d-flex align-items-center justify-content-between p-0 pb-3">
            <div class="header-title">
                <h4 class="card-title">Current tasks</h4>
            </div>
            <div class="card-header-toolbar d-flex align-items-center">
                <div id="top-project-slick-arrow" class="slick-aerrow-block">
                </div>
            </div>
        </div>
        <div class="card-body p-0">
            <ul class="list-unstyled row top-projects mb-0">
                @foreach ( $tasks as $task )
                <li class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="mb-3">{{ $task->name }}</h5>
                            <p class="mb-3"><i class="las la-calendar-check mr-2"></i>{{ $task->start_date }}</p>
                            <p class="mb-3">{{ $task->dascription }}</p>
                            @if($task->statue =='On-Progress')
                            <div class="btn bg-body mr-3" style="float: right;"><i class="fa-solid fa-spinner mr-2"></i>{{ $task->statue }}</div>
                            @else
                            <div class="btn bg-body mr-3" style="float: right;"><i class="fa-solid fa-circle-check mr-2"></i>{{ $task->statue }}</div>
                            @endif
                            <div class="btn bg-body mr-3"><i class="fa-solid fa-user mr-2"></i>{{ $task->nameOfassigner }}</div>

                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection