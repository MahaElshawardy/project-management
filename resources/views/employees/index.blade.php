@extends('layouts.parent')
@section('h5','New Employee')
@section('items')
@section('url')
 {{ route('employees.create')}}
@endsection
<div class="list-grid-toggle d-flex align-items-center mr-3">
    <div data-toggle-extra="tab" data-target-extra="#grid" class="active">
        <div class="grid-icon mr-3">
            <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <rect x="3" y="3" width="7" height="7"></rect>
                <rect x="14" y="3" width="7" height="7"></rect>
                <rect x="14" y="14" width="7" height="7"></rect>
                <rect x="3" y="14" width="7" height="7"></rect>
            </svg>
        </div>
    </div>
    <div data-toggle-extra="tab" data-target-extra="#list">
        <div class="grid-icon">
            <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="21" y1="10" x2="3" y2="10"></line>
                <line x1="21" y1="6" x2="3" y2="6"></line>
                <line x1="21" y1="14" x2="3" y2="14"></line>
                <line x1="21" y1="18" x2="3" y2="18"></line>
            </svg>
        </div>
    </div>
</div>
@endsection
@section('content')
<div id="grid" class="item-content animate__animated animate__fadeIn active" data-toggle-extra="tab-content">
    <div class="row">
        @foreach ( $employees as $employee )
        <div class="col-lg-4 col-md-6">
            <div class="card-transparent card-block card-stretch card-height">
                <div class="card-body text-center p-0">
                    <div class="item">
                        <div class="odr-content rounded">
                            <h4 class="mb-2">{{ $employee->name }}</h4>
                            <p class="mb-3">{{ $employee->email }}</p>
                            <ul class="list-unstyled mb-3">
                                <a href="mailto:{{ $employee->email }}"><li class="bg-secondary-light rounded-circle iq-card-icon-small mr-4"><i class="ri-mail-open-line m-0"></i></li></a>
                                <a href="https://wa.me/+2{{ $employee->phone }}"><li class="bg-primary-light rounded-circle iq-card-icon-small mr-4"><i class="ri-chat-3-line m-0"></i></li></a>
                                <a href="tel:+2{{ $employee->phone }}"><li class="bg-success-light rounded-circle iq-card-icon-small"><i class="ri-phone-line m-0"></i></li></a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<div id="list" class="item-content animate__animated animate__fadeIn" data-toggle-extra="tab-content">
    <div class="table-responsive rounded bg-white mb-4">
        <table class="table mb-0 table-borderless tbl-server-info">
            <tbody>
            @foreach ( $employees as $employee )
                <tr>
                    <td>
                        <div class="media align-items-center">
                            <h5 class="ml-3">{{ $employee->name }}</h5>
                        </div>
                    </td>
                    <td>{{ $employee->email }}</td>
                    <td>
                        <div class="media align-items-center">
                            <div class="bg-secondary-light rounded-circle iq-card-icon-small mr-3"> <a href="mailto:{{ $employee->email }}"><i class="ri-mail-open-line m-0"></i></a></div>
                            <div class="bg-primary-light rounded-circle iq-card-icon-small mr-3"><a href="https://wa.me/+2{{ $employee->phone }}"><i class="ri-chat-3-line m-0"></i></a></div>
                            <div class="bg-success-light rounded-circle iq-card-icon-small"><a href="tel:+2{{ $employee->phone }}"><i class="ri-phone-line m-0"></i></a></div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex align-items-center">
                            <a href="{{ route('employees.edit',$employee->id)}}" class="text-body"><i class="las la-pen mr-3"></i></a>
                            <form action="{{route('employees.destroy',$employee->id)}}" method="post" class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button class="text-body" style="background-color: unset;border: unset;padding: 0;color: #615d8d;"><i class="las la-trash-alt mr-0"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection