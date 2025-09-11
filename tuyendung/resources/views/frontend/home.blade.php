@extends('frontend.layout')
@section('content')

<!-- Hero Section (Banner Slide) -->
<section class="bg-white text-black py-5">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6 text-center">
                <h1 class="display-4 fw-bold">Tìm việc làm phù hợp với bạn</h1>
                <p class="lead mb-4">Khám phá hàng nghìn cơ hội nghề nghiệp từ các công ty hàng đầu Việt Nam</p>

                <!-- Tags / Skills -->
                <div class="d-flex flex-wrap justify-content-center gap-2">
                    @foreach(['ReactJS', 'NodeJS', 'Marketing', 'Sales', 'Designer', 'Python', 'Java', 'Business Analyst'] as $tag)
                        <a href="#" class="btn btn-outline-light btn-sm rounded-pill px-3 py-1">{{ $tag }}</a>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-6 d-none d-lg-block">
                <img src="{{asset('public/frontend')}}/img/banner1.png" alt="IT Job" class="img-fluid rounded shadow">
            </div>
        </div>
    </div>
</section>

<!-- Hot Jobs for Interns & Fresh Graduates -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Việc làm HOT dành cho sinh viên & thực tập sinh</h2>

        <div class="row g-4">
            @foreach ($vieclam as $job)
            <div class="col-md-6 col-lg-4">
                <div class="job-card card h-100 shadow-sm border-0">
                    <div class="card-body">
                        <!-- <div class="d-flex align-items-center  ">
                            @if($job->logo)
                                <img src="{{asset('public/')}}/{{$job->logo}}"  alt="{{ $job->company }}" class="rounded-circle me-3 " style="width: 200px; height: 200px; object-fit: cover;">
                            @else
                            <img src="{{asset('public/frontend')}}/img/it1.png" alt="Company" class="rounded-circle me-3" style="width: 40px; height: 40px; object-fit: cover;">
                            @endif
                            <p class="text-muted small">{{ $job->company }}</p>
                        </div>
                        <hr>
                        <h5 class="mb-0">{{ $job->title }}</h5> -->
                    

                        <div class="position-relative">
                            <span class="badge bg-danger position-absolute top-0 end-0 p-2">HOT</span>
                            
                            <div class="text-center mb-3">
                                @if($job->logo)
                                    <img src="{{asset('public/')}}/{{$job->logo}}" 
                                        alt="{{ $job->company }}" 
                                        class="rounded-circle mb-2" 
                                        style="width: 180px; height: 180px; object-fit: cover;">
                                @else
                                    <img src="{{asset('public/frontend')}}/img/it1.png" 
                                        alt="Company" 
                                        class="rounded-circle mb-2" 
                                        style="width: 180px; height: 180px; object-fit: cover;">
                                @endif
                                <p class="text-muted small mb-0" style="font-size: 1rem;">{{ $job->company }}</p>
                            </div>
                            <hr>
                            <h5 class="mb-0">{{ $job->title }}</h5>  
                        </div>

                        <div class="d-flex justify-content-between align-items-center mt-2">
                            <!-- <span class="badge bg-danger">HOT</span> -->
                            <span class="text-muted small"> <i class="fas fa-map-pin"></i> {{ $job->location }}</span>
                        </div>
                        <div class="mt-2">
                            <small class="text-muted"> <i class="fas fa-dollar-sign"></i> {{ number_format($job->salary_min) }} - {{ number_format($job->salary_max) }} triệu</small><br>
                            <small class="text-muted">{{$job->type}}</small>
                        </div>
                        <a href="#" class="btn btn-primary w-100 mt-3">Ứng tuyển</a>
                    </div>
                </div>
            </div>
            @endforeach
            <em class="text-muted text-center ">
                Hiển thị {{ $vieclam->firstItem() }} - {{ $vieclam->lastItem() }} trong tổng số {{ $vieclam->total() }} việc làm
            </em>
        </div>

        
        <div class="text-center mt-4">
            <a href="{{ route('job') }}" class="btn btn-primary px-5">Xem tất cả việc làm</a>
        </div>
    </div>
</section>

<!-- Popular Companies -->
<section class="py-5 bg-white">
    <div class="container">
        <h2 class="text-center mb-4">Các công ty nổi bật</h2>
        <div class="row g-4">
            @foreach(['FPT Software', 'Grab Vietnam', 'Meta Corporation', 'TikTok', 'VNG Corp', 'Shopee Vietnam'] as $company)
                <div class="col-md-4">
                    <div class="card text-center border-0 shadow-sm">
                        <div class="card-body">
                            <h5 class="mb-2">{{ $company }}</h5>
                            <p class="text-muted small">500 - 1.000+ nhân viên</p>
                            <p class="text-muted small">25 việc làm</p>
                            <a href="{{route('chitietcongty')}}" class="btn btn-outline-primary btn-sm">Xem công ty</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="text-center mt-4">
            <a href="#" class="btn btn-outline-primary px-5">Xem tất cả công ty</a>
        </div>
    </div>
</section>


@endsection