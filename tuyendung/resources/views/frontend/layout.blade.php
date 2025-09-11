<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MYCODE-VIỆC LÀM</title>
    <link href="{{asset('public/frontend')}}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('public/frontend')}}/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('public/frontend')}}/css/home.css">
    <link rel="stylesheet" href="{{asset('public/frontend')}}/css/dangki.css">
    <link rel="stylesheet" href="{{asset('public/frontend')}}/css/dangnhap.css">
    <link rel="stylesheet" href="{{asset('public/frontend')}}/css/quenmatkhau.css">
</head>



<body>
    <div class="sticky-top">
        <div>
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <div class="container">
                    <a class="navbar-brand" href="{{route('home')}}">MYCODE-VIỆC LÀM</a>
                    <div class="navbar-nav ms-auto">
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle"  id="jobDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Việc làm
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="jobDropdown">
                                    <li><a class="dropdown-item" href="{{route('job')}}">Việc làm Lập trình viên PHP</a></li>
                                    <li><a class="dropdown-item" href="#">Việc làm Lập trình viên Java</a></li>
                                    <li><a class="dropdown-item" href="#">Việc làm Frontend Developer</a></li>
                                    <li><a class="dropdown-item" href="#">Việc làm Backend Developer</a></li>
                                    <li><a class="dropdown-item" href="#">Việc làm Fullstack Developer</a></li>
                                    <li><a class="dropdown-item" href="#">Việc làm Tester / QA</a></li>
                                    <li><a class="dropdown-item" href="#">Việc làm DevOps</a></li>
                                    <li><a class="dropdown-item" href="#">Việc làm Thực tập sinh IT</a></li>
                                    <li><a class="dropdown-item" href="#">Việc làm Kỹ sư phần mềm</a></li>
                                </ul>
                            </div>
                        
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="cvDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Tạo CV
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="cvDropdown">
                                <li><a class="dropdown-item" href="{{route('taocv')}}">Tạo CV</a></li>
                                <li><a class="dropdown-item" href="#">Tải CV lên</a></li>
                                <li><a class="dropdown-item" href="#">Hướng dẫn viết CV</a></li>
                            </ul>
                        </div>
                                
                        <a class="nav-link" href="{{route('dangtin')}}">Nhà tuyển dụng Đăng tin</a>
                        <a class="nav-link" href="{{route('home')}}"> Đăng xuất</a>
                        <a class="nav-link" href="{{route('dangnhap')}}">Đăng nhập</a>
                        <a class="nav-link" href="{{route('dangki')}}">Đăng ký</a>
                            
                    </div>
                </div>
                
            </nav>

            <!-- Search Form -->
            <div class="container mt-2 bg-info py-1 rounded-pill  ">
                <form class="d-flex flex-column flex-md-row gap-2 mb-0">
                    <input type="text" class="form-control m-3 rounded-pill border border-secondary" placeholder="Vị trí, công ty, từ khóa...">
                    <input type="text" class="form-control m-3 rounded-pill border border-secondary" placeholder="Tất cả địa điểm">
                    <button class="btn btn-primary btn-lg  m-3 rounded-pill border border-secondary">Tìm</button>
                </form>
            </div>
        </div>
    </div>
    
    <!-- Content Container -->
    <div class="container mt-4">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        @yield('content')
    </div>

    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <a href="{{route('home')}}">
                        <h5>MYCODE-VIỆC LÀM</h5>
                    </a>
                    <p>Nền tảng tuyển dụng hàng đầu Việt Nam. Kết nối nhà tuyển dụng và ứng viên một cách nhanh chóng, hiệu quả.</p>
                </div>
                <div class="col-md-4">
                    <h5>Liên kết nhanh</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{route('home')}}" class="text-white text-decoration-none">Trang chủ</a></li>
                        <li><a href="{{route('job')}}" class="text-white text-decoration-none">Việc làm</a></li>
                        @auth
                            <li><a href="{{route('dangtin')}}" class="text-white text-decoration-none">Đăng tin</a></li>
                            <li><a href="" class="text-white text-decoration-none">Hồ sơ của tôi</a></li>
                        @endauth
                    </ul>
                </div>
                
                <div class="col-md-4">
                    <h5>Liên hệ</h5>
                    <address>
                        📍 123 Đường Laravel, Quận 12, TP.HCM<br>
                        📞 0123 456 789<br>
                        ✉️ contact@jobfinder.com
                    </address>
                </div>
            </div>
            <hr class="bg-light">
            <div class="text-center">
                <small>&copy; {{ date('Y') }} JobFinder. All rights reserved.</small>
            </div>
        </div>
    </footer>

    <script src="{{asset('public/frontend')}}/js/bootstrap.bundle.min.js"></script>
</body>


</html>