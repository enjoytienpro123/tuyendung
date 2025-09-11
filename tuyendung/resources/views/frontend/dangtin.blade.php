@extends('frontend.layout')

@section('title', 'Đăng Tin Tuyển Dụng - JobFinder')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">📝 Đăng Tin Tuyển Dụng Mới</h4>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                      

                        <!-- Tiêu đề -->
                        <div class="mb-3">
                            <label for="title" class="form-label">Tiêu đề công việc <span class="text-danger">*</span></label>
                            <input type="text" 
                                   class="form-control @error('title') is-invalid @enderror" 
                                   id="title" 
                                   name="title" 
                                   value="" 
                                   placeholder="Ví dụ: Lập trình viên PHP Laravel" 
                                   required>
                          
                                <div class="invalid-feedback"></div>
                           
                        </div>

                        <!-- Tên công ty -->
                        <div class="mb-3">
                            <label for="company" class="form-label">Tên công ty <span class="text-danger">*</span></label>
                            <input type="text" 
                                   class="form-control @error('company') is-invalid @enderror" 
                                   id="company" 
                                   name="company" 
                                   value="" 
                                   placeholder="Ví dụ: Công ty TNHH ABC" 
                                   required>
                           
                                <div class="invalid-feedback"></div>
                            
                        </div>

                        <!-- Mô tả công việc -->
                        <div class="mb-3">
                            <label for="description" class="form-label">Mô tả công việc <span class="text-danger">*</span></label>
                            <textarea class="form-control @error('description') is-invalid @enderror" 
                                      id="description" 
                                      name="description" 
                                      rows="6" 
                                      placeholder="Mô tả chi tiết công việc, yêu cầu, quyền lợi..." 
                                      required></textarea>
                           
                                <div class="invalid-feedback"></div>
                           
                        </div>

                        <!-- Địa điểm -->
                        <div class="mb-3">
                            <label for="location" class="form-label">Địa điểm làm việc <span class="text-danger">*</span></label>
                            <input type="text" 
                                   class="form-control @error('location') is-invalid @enderror" 
                                   id="location" 
                                   name="location" 
                                   value="" 
                                   placeholder="Ví dụ: Quận 1, TP.HCM" 
                                   required>
                           
                                <div class="invalid-feedback"></div>
                           
                        </div>

                        <!-- Mức lương -->
                        <div class="mb-3">
                            <label for="salary" class="form-label">Mức lương (VND)</label>
                            <input type="number" 
                                   class="form-control @error('salary') is-invalid @enderror" 
                                   id="salary" 
                                   name="salary" 
                                   value="" 
                                   placeholder="Ví dụ: 15000000" 
                                   min="0">
                           
                                <div class="invalid-feedback"></div>
                            
                            <div class="form-text">Để trống nếu muốn hiển thị "Thỏa thuận"</div>
                        </div>

                        <!-- Loại hình làm việc -->
                        <div class="mb-3">
                            <label class="form-label">Loại hình làm việc <span class="text-danger">*</span></label>
                            <div class="row">
                               
                                    <div class="col-sm-4">
                                        <div class="form-check">
                                            <input class="form-check-input @error('type') is-invalid @enderror" 
                                                   type="radio" 
                                                   name="type" 
                                                   id="" 
                                                   value="" 
                                                  
                                                   required>
                                            <label class="form-check-label" for="">
                                              
                                            </label>
                                        </div>
                                    </div>
                             
                            </div>
                            
                                <div class="invalid-feedback d-block"></div>
                           
                        </div>

                        <!-- Ngành nghề -->
                        <div class="mb-3">
                            <label for="category" class="form-label">Ngành nghề</label>
                            <input type="text" 
                                   class="form-control @error('category') is-invalid @enderror" 
                                   id="category" 
                                   name="category" 
                                   value="" 
                                   placeholder="Ví dụ: IT, Marketing, Sales, Nhân sự...">
                           
                                <div class="invalid-feedback"></div>
                           
                            <div class="form-text">Giúp ứng viên dễ dàng tìm kiếm theo ngành</div>
                        </div>

                        <!-- Nút hành động -->
                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary flex-grow-1">
                                <i class="fas fa-paper-plane me-2"></i>Đăng tin ngay
                            </button>
                            <a href="{{ route('job') }}" class="btn btn-outline-secondary">
                                <i class="fas fa-times me-2"></i>Hủy
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection