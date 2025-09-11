@extends('frontend/layout')
@section('content')

    <div class="container">
        <div class="forgot-card">
            <!-- Header -->
            <div class="forgot-header">
            <h2><i class="fas fa-key me-2"></i>Quên mật khẩu?</h2>
            <p class="mb-0">Nhập email của bạn để nhận liên kết đặt lại mật khẩu</p>
            </div>

            <!-- Body -->
            <div class="forgot-body">
            <div class="alert alert-info">
                <i class="fas fa-info-circle me-2"></i>
                Chúng tôi sẽ gửi một email chứa hướng dẫn để bạn đặt lại mật khẩu.
            </div>

            <form class="forgot-form">
                <div class="mb-3">
                <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                <input type="email" class="form-control" id="email" placeholder="example@email.com" required>
                </div>

                <button type="submit" class="btn btn-primary w-100 mb-3">Gửi yêu cầu</button>

                <div class="text-center">
                <a href="{{ route('dangnhap') }}" class="text-decoration-none">
                    <i class="fas fa-arrow-left me-1"></i> Quay lại đăng nhập
                </a>
                </div>
            </form>
            </div>
        </div>
    </div>

@endsection