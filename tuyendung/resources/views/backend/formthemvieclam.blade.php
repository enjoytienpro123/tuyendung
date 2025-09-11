@extends('backend/layout')
@section('content')

    <div class="container mt-4 mb-5   ">
        <h2>➕ Thêm Việc Làm Mới</h2>

        <form action="{{ route('backend.vieclam.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="title" class="form-label">Tiêu đề *</label>
                        <input type="text" name="title" id="title" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="company" class="form-label">Công ty *</label>
                        <input type="text" name="company" id="company" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="logo" class="form-label">Logo công ty</label>
                        <input type="file" name="logo" id="logo" class="form-control">
                        <small class="text-muted">Chỉ chấp nhận file: jpg, png, gif (tối đa 2MB)</small>
                    </div>

                    <div class="mb-3">
                        <label for="location" class="form-label">Địa điểm *</label>
                        <input type="text" name="location" id="location" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="type" class="form-label">Loại hình *</label>
                        <select name="type" id="type" class="form-control" required>
                            <option value="fulltime">Full-time</option>
                            <option value="parttime">Part-time</option>
                            <option value="remote">Remote</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="salary_min" class="form-label">Lương tối thiểu (VNĐ) *</label>
                        <input type="number" name="salary_min" id="salary_min" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="salary_max" class="form-label">Lương tối đa (VNĐ) *</label>
                        <input type="number" name="salary_max" id="salary_max" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="deadline" class="form-label">Hạn nộp *</label>
                        <input type="date" name="deadline" id="deadline" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Trạng thái hiển thị</label>
                        <div class="form-check">
                            <input type="radio" name="is_active" id="is_active_yes" class="form-check-input" value="1" {{ old('is_active', true) == 1 ? 'checked' : '' }}>
                            <label class="form-check-label" for="is_active_yes">Hiển thị</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="is_active" id="is_active_no" class="form-check-input" value="0" {{ old('is_active', true) == 0 ? 'checked' : '' }}>
                            <label class="form-check-label" for="is_active_no">Ẩn</label>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="description" class="form-label">Mô tả công việc *</label>
                        <textarea name="description" id="description" class="form-control" rows="4" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="requirements" class="form-label">Yêu cầu ứng viên *</label>
                        <textarea name="requirements" id="requirements" class="form-control" rows="4" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="benefits" class="form-label">Quyền lợi *</label>
                        <textarea name="benefits" id="benefits" class="form-control" rows="4" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="company_info" class="form-label">Thông tin công ty *</label>
                        <textarea name="company_info" id="company_info" class="form-control" rows="4" required></textarea>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-success">✅ Lưu Việc Làm</button>
            <a href="{{ route('quanlivieclam') }}" class="btn btn-secondary">🔙 Quay lại</a>
        </form>
    </div>

@endsection