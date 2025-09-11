@extends('frontend.layout')

@section('content')
  <!-- Main Content -->
  <div class="container mt-4">
    <div class="row">
      <!-- Job Detail -->
      <div class="col-md-12">
        <div class="job-detail-card">
          <!-- Hot Tag -->
          <div class="hot-badge">Hot</div>

          <!-- Header -->
          <div class="d-flex align-items-center justify-content-between mb-3">
                <div class="d-flex align-items-center">
                     @if($vieclam->logo)
                                <img src="{{asset('public/')}}/{{$vieclam->logo}}"  alt="{{ $vieclam->company }}" class="rounded-circle me-3 " style="width: 200px; height: 200px; object-fit: cover;">
                            @else
                            <img src="{{asset('public/frontend')}}/img/it1.png" alt="Company" class="rounded-circle me-3" style="width: 40px; height: 40px; object-fit: cover;">
                            @endif
                    <div>
                            <h3 class="mb-0">{{ $vieclam->title }}</h3>
                            <p class="text-muted mb-0">{{ $vieclam->company }}</p>
                    </div>
                </div>
                 <!-- Right side: Match & Heart -->
                <div class="d-flex align-items-center gap-2">
                    <span class="badge bg-success text-white small">92% phù hợp</span>
                    <button class="btn btn-link p-0"><i class="fas fa-heart"></i></button>
                </div>
          </div>

            <!-- Info Row -->
            <div class="d-flex flex-wrap gap-3 mb-3 text-muted small">
                    <span><i class="fas fa-map-marker-alt info-icon"></i> {{ $vieclam->location }}</span>
                    <span class="job-salary"><i class="fas fa-dollar-sign info-icon"></i> 
                        {{ number_format($vieclam->salary_min) }} - {{ number_format($vieclam->salary_max) }} triệu
                    </span>
                    <span><i class="fas fa-clock info-icon"></i> {{ $vieclam->type }}</span>
                    <span><i class="fas fa-calendar info-icon"></i> {{ $vieclam->created_at->diffForHumans() }}</span>
                    <span><i class="fas fa-eye info-icon"></i> {{$vieclam->deadline}}</span>
            </div>

            <!-- Description -->
            <p class="text-muted mb-4">
                {{ ($vieclam->description) }}
            </p>

            <!-- Skills Tags -->
            <!-- <div class="d-flex flex-wrap gap-2 mb-4">
                @foreach(explode(',', $vieclam->requirements) as $req)
                    <span class="badge bg-light text-dark border">{{ trim($req) }}</span>
                @endforeach
            </div>  -->
            
            <!-- Skills Tags fix-->
            <div class="d-flex flex-wrap gap-2 mb-4">
                @foreach(explode(',', $vieclam->requirements) as $req)
                    <span class="badge bg-light text-dark border" 
                        style="white-space: normal; word-wrap: break-word; max-width: 80%;">
                        {{ trim($req) }}
                    </span>
                @endforeach
            </div>

            <!-- Benefits -->
            <div class="d-flex flex-wrap gap-2 mb-4">
                @foreach(explode(',', $vieclam->benefits) as $req)
                    <span class="badge bg-light text-dark border">{{ trim($req) }}</span>
                @endforeach
            </div>    

            <hr class="my-4">

            <!-- Chi tiết công việc -->
            <div class="row">
                    <!-- <div class="col-md-6">
                        <h5><i class="fas fa-tasks me-2"></i>Mô tả công việc</h5>
                        <ul class="text-muted">
                                <li>{{ ($vieclam->description) }}</li>
                        </ul>
                    </div> -->
                    <div class="col-md-6">
                        <h5><i class="fas fa-tasks me-2"></i>Mô tả công việc</h5>
                        <ul class="text-muted">
                            @foreach (explode("\n", $vieclam->description) as $line)
                                <li>{{ e(trim($line)) }}</li>
                            @endforeach
                        </ul>
                    </div>   

                    <div class="col-md-6">
                        <h5><i class="fas fa-clipboard-check me-2"></i>Yêu cầu ứng viên</h5>
                        <ul class="text-muted">
                            @foreach (explode("\n", $vieclam->requirements) as $line)
                                <li>{{ e(trim($line)) }}</li>
                            @endforeach
                        </ul>
                    </div>
            </div>

            <div class="mt-4">
                    <h5><i class="fas fa-gift me-2"></i>Quyền lợi</h5>
                    <ul class="text-muted">
                            @foreach (explode("\n", $vieclam->benefits) as $line)
                                <li><i class="fas fa-coins me-1"></i>{{ e(trim($line)) }}</li>
                            @endforeach
                    </ul>
            </div>

            <div class="mt-4">
                    <h5><i class="fas fa-building me-2"></i>Thông tin công ty</h5>
                    <div class="d-flex align-items-start">
                         @if($vieclam->logo)
                                <img src="{{asset('public/')}}/{{$vieclam->logo}}"  alt="{{ $vieclam->company }}" class="rounded-circle me-3 " style="width: 200px; height: 200px; object-fit: cover;">
                            @else
                            <img src="{{asset('public/frontend')}}/img/it1.png" alt="Company" class="rounded-circle me-3" style="width: 40px; height: 40px; object-fit: cover;">
                            @endif
                        <div>
                                <h6>{{ $vieclam->company }}</h6>
                                <!-- <p class="text-muted small mb-1">{{$vieclam->company_info}}</p> -->
                                @foreach (explode("\n", $vieclam->company_info) as $line)
                                    <p class="text-muted small mb-1">{{ e(trim($line)) }}</p>
                                @endforeach
                                <p class="text-muted small mb-0"><i class="fas fa-map-marker-alt me-1"></i> {{ $vieclam->location }}</p>
                        </div>
                    </div>
            </div>

            <!-- Nút Ứng tuyển -->
            <div class="mt-5 d-flex justify-content-end">
                    <a href="#" class="btn btn-primary btn-lg mx-2">Ứng tuyển ngay</a>
                    <a href="#" class="btn btn-info btn-lg mx-2">Lưu tin</a>
            </div>
        </div>

            <!-- Việc làm liên quan -->
            <div class="similar-jobs">
                <h1><i class="fas fa-sync-alt me-2"></i>Việc làm liên quan</h1>
                <div class="row">
                        @foreach($relatedJobs as $job)
                        <div class="col-md-6">
                            <div class="job-card-vl">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <div class="d-flex align-items-center">
                                       @if($job->logo)
                                            <img src="{{asset('public/')}}/{{$job->logo}}"  alt="{{ $job->company }}" class="rounded-circle me-3 " style="width: 200px; height: 200px; object-fit: cover;">
                                        @else
                                        <img src="{{asset('public/frontend')}}/img/it1.png" alt="Company" class="rounded-circle me-3" style="width: 40px; height: 40px; object-fit: cover;">
                                        @endif
                                        <div>
                                        <h5 class="mb-0">{{ $job->title }}</h5>
                                        <p class="text-muted mb-0">{{ $job->company }}</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="badge bg-success text-white small">90% phù hợp</span>
                                        <button class="btn btn-link p-0"><i class="fas fa-heart"></i></button>
                                    </div>
                                </div>
                                 <div class="d-flex flex-wrap gap-2 mb-2 text-muted small">
                                    <span><i class="fas fa-map-marker-alt"></i> {{ $job->location }}</span>
                                    <span><i class="fas fa-dollar-sign"></i> {{ number_format($job->salary_min) }} - {{ number_format($job->salary_max) }} triệu</span>
                                    <span><i class="fas fa-clock"></i> {{ $job->type }}</span>
                                    <span><i class="fas fa-calendar"></i> {{ $job->created_at->diffForHumans() }}</span>
                                </div>
                                <p class="text-muted small mb-3">{{ Str::limit($job->description, 80) }}</p>
                                <div class="d-flex flex-wrap gap-2 mb-3">
                                    @foreach(explode(',', $job->requirements) as $req)
                                        <span class="badge bg-light text-dark border"
                                            style="white-space: normal; word-wrap: break-word; max-width: 80%;">
                                            {{ trim($req) }} 
                                        </span>
                                    @endforeach
                                </div>
                                <div class="d-flex justify-content-end gap-2">
                                    <a href="{{route('chitietvieclam',$job->id)}}" class="btn btn-outline-primary btn-sm">Xem chi tiết</a>
                                    <a href="#" class="btn btn-primary btn-sm">Ứng tuyển ngay</a>
                                </div>
                                <div class="position-absolute top-0 end-0 mt-2 me-2">
                                    <span class="badge bg-danger text-white rounded-pill">Hot</span>
                                </div>
                            </div>
                        </div>
                         @endforeach
                </div>
            </div>
      </div>
    </div>
  </div>

@endsection