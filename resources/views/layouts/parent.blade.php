<!doctype html>
<html lang="en">
    <head>
         <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Project Management</title>
         <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <!-- Favicon -->
        <link rel="shortcut icon" href="{{url('images/70486931.svg')}}" />
        <link rel="stylesheet" href="{{ url('css/backend-plugin.min.css') }}">
        <link rel="stylesheet" href="{{ url('css/backend.css?v=1.0.0') }}">
        <link rel="stylesheet" href="{{ url('vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ url('vendor/remixicon/fonts/remixicon.css') }}">
        <script src="https://kit.fontawesome.com/fc1c29f8a3.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{ url('vendor/tui-calendar/tui-calendar/dist/tui-calendar.css') }}">
        <link rel="stylesheet" href="{{ url('vendor/tui-calendar/tui-date-picker/dist/tui-date-picker.css') }}">
        <link rel="stylesheet" href="{{ url('vendor/tui-calendar/tui-time-picker/dist/tui-time-picker.css') }}">  

    </head>
  <body class="  ">
    <!-- loader Start -->
    <div id="loading">
          <div id="loading-center">
          </div>
    </div>
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">
      <!--vertical  navbar -->
      <div class="iq-sidebar  sidebar-default ">
          <div class="iq-sidebar-logo d-flex align-items-center">
              <a href="{{route('dashboard')}}" class="header-logo">
                  <img src="{{ url('images/70486931.svg') }}" alt="logo">
                  <h3 class="logo-title light-logo">Project Management</h3>
              </a>
          </div>
          <div class="data-scrollbar" data-scroll="1">
              <nav class="iq-sidebar-menu">
                @if ( Auth::user()->position == 'Supervisor')
                  <ul id="iq-sidebar-toggle" class="iq-menu">
                      <li class="active">
                          <a href="{{route('dashboard')}}" class="svg-icon">                        
                              <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                  <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                  <polyline points="9 22 9 12 15 12 15 22"></polyline>
                              </svg>
                              <span class="ml-4">Dashboards</span>
                          </a>
                      </li>
                      <li class="">
                          <a href="{{ route('projects.index') }}" class="svg-icon">                        
                              <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                  <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                  <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                                  <rect x="6" y="14" width="12" height="8"></rect>
                              </svg>
                              <span class="ml-4">Projects</span>
                          </a>
                      </li>
                      <li class="">
                          <a href="{{ route('tasks.index')}}" class="svg-icon">                        
                              <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                  <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                                  <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                              </svg>
                              <span class="ml-4">Task</span>
                          </a>
                      </li>
                      <li class="">
                          <a href="{{ route('employees.index') }}" class="svg-icon">                        
                              <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                  <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle>
                              </svg>
                              <span class="ml-4">Employees</span>
                          </a>
                      </li></ul>
                  @else
                  <ul id="iq-sidebar-toggle" class="iq-menu">
                  <li class="active">
                          <a href="{{ route('taskOfEmployee.index')}}" class="svg-icon">                        
                              <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                  <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                                  <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                              </svg>
                              <span class="ml-4">Task</span>
                          </a>
                      </li>
                    </ul>
                  @endif
              </nav>
              <div class="pt-5 pb-2"></div>
          </div>
      </div>      
      <!-- navbar acount user -->
      <div class="iq-top-navbar">
          <div class="iq-navbar-custom">
              <nav class="navbar navbar-expand-lg navbar-light p-0">
                  <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
                      <i class="ri-menu-line wrapper-menu"></i>
                      <a href="{{ route('dashboard')}}" class="header-logo">
                          <h4 class="logo-title text-uppercase">Project Management</h4>
      
                      </a>
                  </div>
                  <div class="navbar-breadcrumb">
                      <h5>Dashboard</h5>
                  </div>
                  <div class="d-flex align-items-center">
                      <button class="navbar-toggler" type="button" data-toggle="collapse"
                          data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                          aria-label="Toggle navigation">
                          <i class="ri-menu-3-line"></i>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <ul class="navbar-nav ml-auto navbar-list align-items-center">
                              <li class="nav-item nav-icon dropdown caption-content">
                                  <a href="#" class="search-toggle dropdown-toggle  d-flex align-items-center" id="dropdownMenuButton4"
                                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                      <img src="{{ url('images/user/1.jpg') }}" class="img-fluid rounded-circle" alt="user">
                                      <div class="caption ml-3">
                                          <h6 class="mb-0 line-height"> {{ Auth::user()->name }} <i class="las la-angle-down ml-2"></i></h6>
                                      </div>
                                  </a>                            
                                  <ul class="dropdown-menu dropdown-menu-right border-none" aria-labelledby="dropdownMenuButton">
                                     <li class="dropdown-item d-flex svg-icon">
                                          <svg class="svg-icon mr-0 text-primary" id="h-02-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                          </svg>
                                          <a href="../app/user-profile-edit.html">Edit Profile</a>
                                      </li>
                                      <li class="dropdown-item  d-flex svg-icon border-top">
                                          <svg class="svg-icon mr-0 text-primary" id="h-05-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                          </svg>
                                          <a href="{{ route('logout') }}"onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">Logout</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                            </form>
                                      </li>
                                  </ul>
                              </li>
                          </ul>
                      </div>
                  </div>
              </nav>
          </div>
      </div>  
      <div class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-wrap align-items-center justify-content-between breadcrumb-content">
                                <h5>@yield('h5')</h5>
                                <div class="d-flex flex-wrap align-items-center justify-content-between">
                                    @yield('items')
                                    <div class="pl-3 border-left btn-new">
                                        <a href="@yield('url')" class="btn btn-Secondary">@yield('h5')</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @yield('dash')
            </div>
        </div>    
      @yield('content')
    </div>
    <!-- Wrapper End-->
    <!-- Backend Bundle JavaScript -->
    <script src="{{ url('js/backend-bundle.min.js') }}"></script>
    
    <!-- Table Treeview JavaScript -->
    <script src="{{ url('js/table-treeview.js') }}"></script>
    
    <!-- Chart Custom JavaScript -->
    <script src="{{ url('js/customizer.js') }}"></script>
    
    <!-- Chart Custom JavaScript -->
    <script async src="{{ url('js/chart-custom.js') }}"></script>
    <!-- Chart Custom JavaScript -->
    <script async src="{{ url('js/slider.js') }}"></script>
    
    <!-- app JavaScript -->
    <script src="{{ url('js/app.js') }}"></script>
    
    <script src="{{ url('vendor/moment.min.js') }}"></script>
  </body>
</html>