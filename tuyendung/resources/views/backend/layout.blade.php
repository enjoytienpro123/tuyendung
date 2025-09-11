<!doctype html>
<!-- 
* Bootstrap Simple Admin Template
* Version: 2.1
* Author: Alexis Luna
* Website: https://github.com/alexis-luna/bootstrap-simple-admin-template
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>QUẢN LÍ TUYỂN DỤNG</title>
    <link href="{{asset('public/backend')}}/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="{{asset('public/backend')}}/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
    <link href="{{asset('public/backend')}}/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
    <link href="{{asset('public/backend')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('public/backend')}}/css/master.css" rel="stylesheet">
    <link href="{{asset('public/backend')}}/vendor/flagiconcss/css/flag-icon.min.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" >
            <div class="sidebar-header">
                <img src="assets/img/bootstraper-logo.png" alt="bootraper logo" class="app-logo">
            </div>
            <ul class="list-unstyled components text-secondary">
                <li>
                    <a href="{{route('quanli')}}"><i class="fas fa-home"></i> Quản lí </a>
                </li>
                <li>
                    <a href="{{route('quanlivieclam')}}"><i class="fas fa-file-alt"></i> QL Việc Làm</a>
                </li>
                <li>
                    <a href="{{route('quanlicv')}}"><i class="fas fa-table"></i> QUẢN LÍ CV</a>
                </li>
                <li>
                    <a href="{{route('quanlinhatuyendung')}}"><i class="fas fa-chart-bar"></i> QL Nhà Tuyển Dụng</a>
                </li>
                <li>
                    <a href="{{route('quanliuser')}}"><i class="fas fa-user-friends"></i> QL USERS</a>
                </li>
                <li>
                    <a href="#authmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-user-shield"></i> QL BẢO MẬT</a>
                    <ul class="collapse list-unstyled" id="authmenu">
                        <li>
                            <a href="{{route('quanlidangnhap')}}"><i class="fas fa-lock"></i>QL Login</a>
                        </li>
                        <li>
                            <a href="{{route('quanlidangki')}}"><i class="fas fa-user-plus"></i>QL Signup</a>
                        </li>
                        <li>
                            <a href="{{route('quanlipass')}}"><i class="fas fa-user-lock"></i>QL Forgot password</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="body" >
            <!-- navbar navigation component -->
            <nav class="navbar navbar-expand-lg navbar-white bg-white">
                <button type="button" id="sidebarCollapse" class="btn btn-light">
                    <i class="fas fa-bars"></i><span></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <div class="nav-dropdown">
                                <a href="{{route('home')}}"  class="nav-item nav-link dropdown-toggle text-secondary">
                                    <i class="fas fa-eye"></i> <span>View Web</span> </i>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <div class="nav-dropdown">
                                <a href="#" id="nav1" class="nav-item nav-link dropdown-toggle text-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-link"></i> <span>More</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end nav-link-menu" aria-labelledby="nav1">
                                    <ul class="nav-list">
                                        <li><a href="{{route('home')}}" class="dropdown-item"><i class="fas fa-eye"></i></i> HOME</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-list"></i> Access Logs</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-database"></i> Back ups</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-cloud-download-alt"></i> Updates</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-user-shield"></i> Roles</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <div class="nav-dropdown">
                                <a href="#" id="nav2" class="nav-item nav-link dropdown-toggle text-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-user"></i> <span>John Doe</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end nav-link-menu">
                                    <ul class="nav-list">
                                        <li><a href="" class="dropdown-item"><i class="fas fa-address-card"></i> Profile</a></li>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-envelope"></i> Messages</a></li>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-cog"></i> Settings</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- end of navbar navigation -->
                @yield('content')
        </div>
    </div>
    <script src="{{asset('public/backend')}}/vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('public/backend')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('public/backend')}}/vendor/chartsjs/Chart.min.js"></script>
    <script src="{{asset('public/backend')}}/js/dashboard-charts.js"></script>
    <script src="{{asset('public/backend')}}/js/script.js"></script>
    <script src="{{asset('public/backend')}}/vendor/datatables/datatables.min.js"></script>
    <script src="{{asset('public/backend')}}/js/initiate-datatables.js"></script>
    
</body>

</html>
