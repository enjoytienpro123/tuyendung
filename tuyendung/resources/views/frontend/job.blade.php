@extends('frontend.layout')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Main Content -->
        <div class="col-md-12">
            <div class="bg-white shadow-sm rounded p-4 mb-4">
                <h1 class="mb-4">Việc làm phù hợp với bạn</h1>
                <!-- Job List -->
                <div class="row g-3">
                        @foreach($vieclam as $v)
                        <div class="job-card-vl">
                            <!-- Header -->
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <div class="d-flex align-items-center">
                                    @if($v->logo)
                                        <img src="{{asset('public/')}}/{{$v->logo}}"  alt="{{ $v->company }}" class="rounded-circle me-3 " style="width: 100px; height: 100px; object-fit: cover;">
                                    @else
                                    <img src="{{asset('public/frontend')}}/img/it1.png" alt="Company" class="rounded-circle me-3" style="width: 40px; height: 40px; object-fit: cover;">
                                    @endif
                                    <div>
                                        <h5 class="mb-0">{{ $v->title }}</h5>
                                        <p class="text-muted mb-0">{{$v->company}}</p>
                                    </div>
                                </div>
                               <!-- Right side: Match & Heart -->
                                <div class="d-flex align-items-center gap-2">
                                    <span class="badge bg-success text-white small">92% phù hợp</span>
                                    <button class="btn btn-link p-0"><i class="fas fa-heart"></i></button>
                                </div>
                            </div>

                            <!-- Info Row -->
                            <div class="d-flex flex-wrap gap-2 mb-2 text-muted small">
                                <span><i class="fas fa-map-marker-alt"></i> {{ $v->location }}</span><br>
                                <span><i class="fas fa-dollar-sign"></i> {{ number_format($v->salary_min) }} - {{ number_format($v->salary_max) }} triệu</span><br>
                                <span><i class="fas fa-clock"></i> {{$v->type}}</span>
                                
                            </div>
                            <div>
                                <span><i class="fas fa-calendar"></i>
                                    {{ $v->created_at->diffForHumans() }}
                                </span>
                                <span><i class="fas fa-eye"></i> 189 lượt xem</span>
                            </div>

                            <!-- Description -->
                            <!-- <p class="text-muted small mb-3">
                               {{ preg_replace('/\. /', '.<br>', $v->description) }}
                            </p> -->


                            <!-- Skills Tags -->
                            <!-- <div class="d-flex flex-wrap gap-2 mb-3">
                                @foreach(explode(',', $v->requirements) as $req)
                                    <span class="badge bg-light text-dark border me-1">{{ trim($req) }}</span>
                                @endforeach
                            </div> -->

                            
                            <!-- Skills Tags fix-->
                            <div class="d-flex flex-wrap gap-2 mb-3">
                                @foreach(explode(',', $v->requirements) as $req)
                                    <span class="badge bg-light text-dark border me-1"
                                        style="white-space: normal; word-wrap: break-word; max-width: 80%;">
                                        {{ trim($req) }}
                                    </span>
                                @endforeach
                            </div>



                            <!-- Benefits -->
                            <!-- <div class="d-flex flex-wrap gap-3 mb-3">
                                <div class="d-flex align-items-center text-muted small">
                                    <i class="fas fa-coins me-1"></i> {{preg_replace('/\. /', '.<br>',$v->benefits)}}
                                </div>
                            </div> -->

                            <!-- Buttons -->
                            <div class="d-flex justify-content-end gap-2">
                                <a href="{{route('chitietvieclam',$v->id)}}" class="btn btn-outline-primary btn-sm">Xem chi tiết</a>
                                <a href="#" class="btn btn-primary btn-sm">Ứng tuyển ngay</a>
                            </div>

                            <!-- Hot Tag -->
                            <div class="position-absolute top-0 end-0 mt-2 me-2">
                                <span class="badge bg-danger text-white rounded-pill">Hot</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
               <!-- Hiển thị nút phân trang tự động từ Laravel -->
                   <div class="d-flex justify-content-center mt-4">
                        <ul class="pagination"> 
                            <!-- Previous Page Link -->
                            @if ($vieclam->onFirstPage())
                                <li class="page-item disabled">
                                    <span class="page-link">«</span>
                                </li>
                            @else
                                <li class="page-item">
                                    <a class="page-link" href="{{ $vieclam->previousPageUrl() }}">«</a>
                                </li>
                            @endif

                            <!-- Page Numbers -->
                            @for ($i = 1; $i <= $vieclam->lastPage(); $i++)
                                @if ($i == $vieclam->currentPage())
                                    <li class="page-item active">
                                        <span class="page-link">{{ $i }}</span>
                                    </li>
                                @else
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $vieclam->url($i) }}">{{ $i }}</a>
                                    </li>
                                @endif
                            @endfor

                            <!-- Next Page Link -->
                            @if ($vieclam->hasMorePages())
                                <li class="page-item">
                                    <a class="page-link" href="{{ $vieclam->nextPageUrl() }}">»</a>
                                </li>
                            @else
                                <li class="page-item disabled">
                                    <span class="page-link">»</span>
                                </li>
                            @endif
                        </ul> 
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection