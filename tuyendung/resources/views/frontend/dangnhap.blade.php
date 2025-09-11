@extends('frontend/layout')
@section('content')

  <div class="login-card">
        <!-- Header -->
        <div class="login-header">
            <h2><i class="fas fa-sign-in-alt me-2"></i>Đăng nhập</h2>
            <p>Chào mừng trở lại! Vui lòng đăng nhập để tiếp tục.</p>
        </div>

        <!-- Body -->
        <div class="login-body">
            <!-- Login Form -->
            <form>
                <!-- Email -->
                <div class="mb-3">
                <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                <input type="email" class="form-control" id="email" placeholder="example@email.com" required>
                </div>

                <!-- Password -->
                <div class="mb-3 password-wrapper">
                <label for="password" class="form-label">Mật khẩu <span class="text-danger">*</span></label>
                <!-- <input type="password" class="form-control" id="password" placeholder="Nhập mật khẩu của bạn" required>
                <i class="fas fa-eye eye-icon" id="togglePassword"></i> -->
                <div class="input-group">
                    <input type="password" class="form-control" id="password" placeholder="Nhập mật khẩu của bạn" required>
                    <button type="button" class="btn btn-outline-secondary" id="togglePassword">
                        <i class="fas fa-eye"></i>
                    </button>
                </div>
                </div>

                <!-- Forgot Password -->
                <div class="forgot-link">
                <a href="{{route('quenmatkhau')}}">Quên mật khẩu?</a>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary w-100 mb-3">
                <i class="fas fa-sign-in-alt me-2"></i>Đăng nhập
                </button>

                <!-- Register Link -->
                <div class="register-link">
                Chưa có tài khoản? <a href="{{route('dangki')}}">Đăng ký ngay</a>
                </div>
            </form>
        </div>
  </div>

  <!-- Toggle Password Script -->
  <script>
    // Toggle cho ô mật khẩu
    document.getElementById('togglePassword').addEventListener('click', function () {
        const passwordInput = document.getElementById('password');
        const icon = this.querySelector('i');
        if (passwordInput.getAttribute('type') === 'password') {
            passwordInput.setAttribute('type', 'text');
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        } else {
            passwordInput.setAttribute('type', 'password');
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        }
    });
  </script>

@endsection