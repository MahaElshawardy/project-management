@extends('layouts.parent')
@section('h5','New Project')
@section('items')
@section('url')
 {{ route('projects.create')}}
@endsection
<div class="list-grid-toggle d-flex align-items-center mr-3">
        <div data-toggle-extra="tab" data-target-extra="#grid" class="active">
            <div class="grid-icon mr-3">
                <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect>
                </svg>
            </div>
        </div>
        <div data-toggle-extra="tab" data-target-extra="#list">
            <div class="grid-icon">
                <svg  width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="21" y1="10" x2="3" y2="10"></line><line x1="21" y1="6" x2="3" y2="6"></line><line x1="21" y1="14" x2="3" y2="14"></line><line x1="21" y1="18" x2="3" y2="18"></line>
                </svg>
            </div>
        </div>
    </div>
@endsection
@section('content')
                <div id="grid" class="item-content animate__animated animate__fadeIn active" data-toggle-extra="tab-content">
                    <div class="row">
                        @foreach ( $projcets as $project )
                        <div class="col-lg-4 col-md-6">
                            <div class="card card-block card-stretch card-height">
                                <div class="card-body">
                                    <h5 class="mb-1">{{ $project->name }}</h5>
                                    <p class="mb-3">{{ $project->dascription }}</p>
                                    <div class="d-flex align-items-center flex-row-reverse" style="margin-top: -52px;margin-right: -34px;">
                                            <a href="{{ route('projects.edit',$project->id)}}" class="text-body p-2"><i class="las la-pen mr-3"></i></a>
                                            <form action="{{route('projects.destroy',$project->id)}}" method="post" class="d-inline">
                                                @method('DELETE')
                                                @csrf
                                                <button class="text-body p-2" style="background-color: unset;border: unset;padding: 0;color: #615d8d;"><i class="las la-trash-alt mr-0"></i></button>
                                            </form>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between pt-3 border-top">
                                        <p class="btn btn-white text-primary link-shadow" style="font-size: 15px;">Start Date :{{ $project->start_date }}</p>
                                        <p class="btn btn-white text-primary link-shadow" style="font-size: 15px;">End Date :{{ $project->end_date }}</p>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- list of project -->
                <div id="list" class="item-content animate__animated animate__fadeIn" data-toggle-extra="tab-content">
                    <div class="row">
                        @foreach ( $projcets as $project )
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <div class="d-flex align-items-center">
                                                <div class="ml-3">
                                                    <h5 class="mb-1">{{ $project->name }}</h5>
                                                    <p class="mb-0">{{ $project->dascription }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 text-sm-right mt-3 mt-sm-0">
                                            <p class="btn btn-white text-primary link-shadow" style="font-size: 14px;">Start Date :{{ $project->start_date }}</p>
                                            <p class="btn btn-white text-primary link-shadow" style="font-size: 14px;">End Date :{{ $project->end_date }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- Page end  -->
@endsection