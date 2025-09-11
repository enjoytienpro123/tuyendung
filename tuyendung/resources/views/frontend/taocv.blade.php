@extends('frontend/layout')
@section('content')
    <div class="cv-form">
        <div class="row mb-4">
            <div class="col-md-6 text-center">
                <!-- Khung ảnh đại diện lớn hơn -->
                <div class="position-relative d-inline-block" style="width: 150px; height: 150px;">
                    <img id="preview-avatar" src="{{asset('public/frontend')}}/img/banner1.png" alt="Ảnh đại diện"
                        style="width: 100%; height: 100%; object-fit: cover; border-radius: 50%; border: 3px solid #d90000; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">

                    <!-- Nút camera đặt chính giữa ảnh -->
                    <label for="avatar" class="position-absolute bottom-0 start-50 translate-middle-x bg-danger text-white  p-2 cursor-pointer"
                        style="width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; z-index: 10;">
                        <i class="fas fa-camera"></i>
                    </label>

                    <input type="file" id="avatar" name="avatar" class="d-none" accept="image/*">
                </div>
            </div>
            <div class="col-md-6">
                <h2 class="text-danger mt-3">HỒ SƠ ỨNG TUYỂN</h2>
                <p class="text-muted">Vị trí ứng tuyển:
                    <input type="text" class="form-control w-75 d-inline-block" placeholder="Nhập vị trí ứng tuyển" name="job_title">
                </p>
            </div>
        </div>

        <form action="" method="POST" enctype="multipart/form-data">

            <!-- Thông tin cá nhân -->
            <div class="row mb-4">
                <div class="col-md-6">
                    <h5 class="section-title">THÔNG TIN CÁ NHÂN</h5>
                    <div class="mb-3">
                        <label for="date_of_birth" class="form-label">Ngày sinh</label>
                        <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="eprojectbeginner@gmail.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Số điện thoại</label>
                        <input type="tel" class="form-control" id="phone" name="phone" value="0123 456 789" required>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Địa chỉ</label>
                        <input type="text" class="form-control" id="address" name="address" value="Quận A, thành phố Hà Nội" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <h5 class="section-title">HỌC VẤN</h5>
                    <div class="mb-3">
                        <label for="school" class="form-label">Tên trường học</label>
                        <input type="text" class="form-control" id="school" name="school" required>
                    </div>
                    <div class="mb-3">
                        <label for="major" class="form-label">Ngành học / Môn học</label>
                        <input type="text" class="form-control" id="major" name="major" required>
                    </div>
                    <div class="mb-3">
                        <label for="education_period" class="form-label">Bắt đầu – Kết thúc</label>
                        <input type="text" class="form-control" id="education_period" name="education_period" required>
                    </div>
                    <div class="mb-3">
                        <label for="education_description" class="form-label">Mô tả quá trình học tập hoặc thành tích</label>
                        <textarea class="form-control" id="education_description" name="education_description" rows="3"></textarea>
                    </div>
                </div>
            </div>

            <!-- Chứng chỉ -->
            <div class="row mb-4">
                <div class="col-md-6">
                    <h5 class="section-title">CHỨNG CHỈ</h5>
                    <div class="mb-3">
                        <label for="certificate_time" class="form-label">Thời gian</label>
                        <input type="text" class="form-control" id="certificate_time" name="certificate_time">
                    </div>
                    <div class="mb-3">
                        <label for="certificate_name" class="form-label">Tên chứng chỉ</label>
                        <input type="text" class="form-control" id="certificate_name" name="certificate_name">
                    </div>
                </div>
            </div>
           <!-- Kinh nghiệm làm việc -->
            <div class="row mb-4">
                <div class="col-12">
                    <h5 class="section-title">KINH NGHIỆM LÀM VIỆC</h5>
                    <div id="experience-container">
                        <!-- Kinh nghiệm mẫu -->
                        <div class="experience-item mb-4 p-3 border rounded">
                            <div class="mb-3">
                                <label class="form-label">Bắt đầu – Kết thúc</label>
                                <input type="text" class="form-control" name="job_start_end[]" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tên công ty</label>
                                <input type="text" class="form-control" name="company[]" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Vị trí công việc</label>
                                <input type="text" class="form-control" name="job_position[]" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Mô tả kinh nghiệm làm việc</label>
                                <textarea class="form-control" name="job_description[]" rows="3"></textarea>
                            </div>
                            <button type="button" class="btn btn-sm btn-outline-danger remove-experience">Xóa</button>
                        </div>
                    </div>
                    <button type="button" id="add-experience" class="btn btn-sm btn-outline-primary mb-3">
                        <i class="fas fa-plus"></i> Thêm kinh nghiệm mới
                    </button>
                </div>
            </div>

            <!-- Kỹ năng -->
            <div class="row mb-4">
                <div class="col-md-6">
                    <h5 class="section-title">KỸ NĂNG</h5>
                    <div class="mb-3">
                        <label for="skill_1" class="form-label">Tên kỹ năng</label>
                        <input type="text" class="form-control" id="skill_1" name="skills[]">
                    </div>
                    <div class="mb-3">
                        <label for="skill_desc_1" class="form-label">Mô tả kỹ năng</label>
                        <textarea class="form-control" id="skill_desc_1" name="skill_descriptions[]" rows="2"></textarea>
                    </div>
                </div>

                <div class="col-md-6">
                    <h5 class="section-title">DANH HIỆU VÀ GIẢI THƯỞNG</h5>
                    <div class="mb-3">
                        <label for="award_time" class="form-label">Thời gian</label>
                        <input type="text" class="form-control" id="award_time" name="award_time">
                    </div>
                    <div class="mb-3">
                        <label for="award_name" class="form-label">Tên giải thưởng</label>
                        <input type="text" class="form-control" id="award_name" name="award_name">
                    </div>
                </div>
            </div>

            <!-- Hoạt động -->
            <div class="row mb-4">
                <div class="col-12">
                    <h5 class="section-title">HOẠT ĐỘNG</h5>
                    <div class="mb-3">
                        <label for="activity_start_end" class="form-label">Bắt đầu – Kết thúc</label>
                        <input type="text" class="form-control" id="activity_start_end" name="activity_start_end">
                    </div>
                    <div class="mb-3">
                        <label for="activity_organization" class="form-label">Tên tổ chức</label>
                        <input type="text" class="form-control" id="activity_organization" name="activity_organization">
                    </div>
                    <div class="mb-3">
                        <label for="activity_role" class="form-label">Vị trí của bạn</label>
                        <input type="text" class="form-control" id="activity_role" name="activity_role">
                    </div>
                    <div class="mb-3">
                        <label for="activity_description" class="form-label">Mô tả hoạt động</label>
                        <textarea class="form-control" id="activity_description" name="activity_description" rows="3"></textarea>
                    </div>
                </div>
            </div>

            <!-- Sở thích -->
            <div class="row mb-4">
                <div class="col-md-6">
                    <h5 class="section-title">SỞ THÍCH</h5>
                    <div class="mb-3">
                        <label for="hobbies" class="form-label">Điền các sở thích của bạn</label>
                        <textarea class="form-control" id="hobbies" name="hobbies" rows="3"></textarea>
                    </div>
                </div>

                <div class="col-md-6">
                    <h5 class="section-title">NGƯỜI GIỚI THIỆU</h5>
                    <div class="mb-3">
                        <label for="referrer_info" class="form-label">Thông tin người tham chiếu bao gồm tên, chức vụ và thông tin liên hệ</label>
                        <textarea class="form-control" id="referrer_info" name="referrer_info" rows="3"></textarea>
                    </div>
                </div>
            </div>

            <!-- Thông tin thêm -->
            <div class="row mb-4">
                <div class="col-12">
                    <h5 class="section-title">THÔNG TIN THÊM</h5>
                    <div class="mb-3">
                        <label for="additional_info" class="form-label">Điền thông tin thêm nếu có</label>
                        <textarea class="form-control" id="additional_info" name="additional_info" rows="3"></textarea>
                    </div>
                </div>
                <div class="col-12 text-center ">
                    <button type="submit" class="btn btn-primary w-30">Lưu CV</button>    
                </div>
            </div>
        </form>
    </div>
    @push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const container = document.getElementById('experience-container');
    const addBtn = document.getElementById('add-experience');

    addBtn.addEventListener('click', function () {
        const newItem = container.firstElementChild.cloneNode(true);
        const inputs = newItem.querySelectorAll('input, textarea');
        inputs.forEach(input => input.value = '');
        container.appendChild(newItem);
    });

    container.addEventListener('click', function (e) {
        if (e.target.classList.contains('remove-experience')) {
            if (container.children.length > 1) {
                e.target.closest('.experience-item').remove();
            } else {
                alert('Bạn phải giữ lại ít nhất một kinh nghiệm.');
            }
        }
    });
});
</script>
<script>
document.getElementById('avatar').addEventListener('change', function(e) {
    const file = e.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('preview-avatar').src = e.target.result;
        }
        reader.readAsDataURL(file);
    }
});
</script>
@endpush
@endsection