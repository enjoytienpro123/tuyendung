@extends('frontend/layout')
@section('content')

    <!-- Breadcrumb -->
    <div class="container mt-4">
        <nav aria-label="breadcrumb">
            <div class="breadcrumb-item active" aria-current="page">Thông tin công ty & tin tuyển dụng từ CÔNG TY TNHH DỊCH VỤ CÔNG NGHỆ THÔNG TIN HOÀNG HUY</div>
        </nav>
    </div>

    <!-- Company Header -->
    <div class="container py-4">
        <div class="company-header">
        <div class="company-header-content d-flex align-items-center">
            <img src="{{asset('public/frontend')}}/img/banner1.png" alt="Logo" class="company-logo" />
            <div>
            <h1 class="company-name">CÔNG TY TNHH DỊCH VỤ CÔNG NGHỆ THÔNG TIN HOÀNG HUY</h1>
            <p class="company-size"><i class="fas fa-users"></i> 10-24 nhân viên</p>
            </div>
            <button class="btn btn-follow"><i class="fas fa-plus"></i> Theo dõi công ty</button>
        </div>
        </div>

        <!-- Main Content -->
        <div class="row">
        <!-- Left Column -->
        <div class="col-md-8">
            <!-- Introduction -->
            <div class="section-title">Giới thiệu công ty</div>
            <div class="section-body">
            <p>H2TECH - công ty Công Nghệ có 12 năm kinh nghiệm làm trong lĩnh vực Giáo dục, tài liệu số, sách số, hệ thống quản lý nhà trường, lớp học, hệ thống học trực tuyến, các ứng dụng nâng cao hiệu quả giảng dạy, học tập, liên lạc cho Trường và các Tổ chức Giáo dục.</p>
            <p>Tự hào là đơn vị Công Nghệ Giáo Dục có hệ sinh thái sản phẩm rộng lớn, đáp ứng nhu cầu quản lý, dạy, học của bất kỳ Nhà trường nào, H2TECH đã phục vụ hơn 150,000 người dùng từ các đối tác Trường và Tổ chức Giáo Dục tại Việt Nam từ 2017.</p>
            </div>

            <!-- Job Listings -->
            <div class="section-title">Tuyển dụng</div>
            <div class="section-body">
            <div class="d-flex gap-2 mb-3">
                <input type="text" class="form-control" placeholder="Tên công việc, vị trí ứng tuyển..." />
                <select class="form-select" style="width: 200px;">
                <option>Tất cả tỉnh/thành phố</option>
                <option>Hà Nội</option>
                <option>TP. HCM</option>
                </select>
                <button class="btn btn-info"><i class="fas fa-search"></i> Tìm kiếm</button>
            </div>

            <!-- Job Card 1 -->
            <div class="job-card">
                <div class="d-flex justify-content-between align-items-start">
                <div>
                    <h5>Hành Chính Văn Phòng</h5>
                    <p class="job-location">Hồ Chí Minh</p>
                    <p class="job-time">Còn 28 ngày để ứng tuyển</p>
                </div>
                <div class="job-salary">8 - 11 triệu</div>
                </div>
                <div class="d-flex justify-content-end gap-2 mt-2">
                <button class="btn btn-apply">Ứng tuyển</button>
                <button class="btn btn-favorite"><i class="far fa-heart"></i></button>
                </div>
            </div>

            <!-- Job Card 2 -->
            <div class="job-card">
                <div class="d-flex justify-content-between align-items-start">
                <div>
                    <h5>Frontend Developer (Up To 19M)</h5>
                    <p class="job-location">Hồ Chí Minh</p>
                    <p class="job-time">Còn 28 ngày để ứng tuyển</p>
                </div>
                <div class="job-salary">Thỏa thuận</div>
                </div>
                <div class="d-flex justify-content-end gap-2 mt-2">
                <button class="btn btn-apply">Ứng tuyển</button>
                <button class="btn btn-favorite"><i class="far fa-heart"></i></button>
                </div>
            </div>
            </div>
        </div>

        <!-- Right Column -->
        <div class="col-md-4">
            <!-- Contact Info -->
            <div class="section-title">Thông tin liên hệ</div>
                <div class="section-body">
                    <div class="mb-3">
                        <i class="fas fa-map-marker-alt me-2"></i>
                        <strong>Địa chỉ công ty</strong>
                        <p>Tôn Thất Đạm, Phường Nguyễn Thái Bình, Quận 1, TP.HCM</p>
                    </div>

                    <div class="map-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.834478700237!2d106.6975993146479!3d10.76495699225453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175274a8d272257%3A0x1458451881188d66!2sT%C3%B4n%20Th%E1%BA%A3t%20%C4%90%E1%BA%A1m%2C%20Ph%C6%B0%E1%BB%9Dng%20Nguy%E1%BB%85n%20Th%E1%BA%A1i%20B%C3%ACnh%2C%20Qu%E1%BA%ADn%201%2C%20H%E1%BB%93%20Ch%C3%AD%20Minh!5e0!3m2!1svi!2s!4v1700000000000!5m2!1svi!2s" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <!-- Top Companies -->
        <div class="top-companies">
        <h4 class="text-center mb-3">Thương hiệu lớn tiêu biểu cùng lĩnh vực</h4>
        <div class="row g-3">
            <div class="col-md-6">
            <div class="top-company-item">
                <img src="{{asset('public/frontend')}}/img/it1.png" alt="MISA" class="top-company-logo" />
                <div>
                <div class="top-company-name">CÔNG TY CỔ PHẦN MISA</div>
                <div class="top-company-industry">IT - Phần mềm</div>
                </div>
            </div>
            </div>
            <div class="col-md-6">
            <div class="top-company-item">
                <img src="{{asset('public/frontend')}}/img/it2.png" alt="FPT IS" class="top-company-logo" />
                <div>
                <div class="top-company-name">FPT IS</div>
                <div class="top-company-industry">IT - Phần mềm</div>
                </div>
            </div>
            </div>
            <div class="col-md-6">
            <div class="top-company-item">
                <img src="{{asset('public/frontend')}}/img/it3.jpg" alt="FPT Education" class="top-company-logo" />
                <div>
                <div class="top-company-name">PHÂN HIỆU TRƯỜNG ĐẠI HỌC FPT TẠI THÀNH PHỐ...</div>
                <div class="top-company-industry">Giáo dục / Đào tạo</div>
                </div>
            </div>
            </div>
            <div class="col-md-6">
            <div class="top-company-item">
                <img src="{{asset('public/frontend')}}/img/it4.png" alt="Phú Cường" class="top-company-logo" />
                <div>
                <div class="top-company-name">CÔNG TY TNHH MÁY TÍNH PHÚ CƯỜNG</div>
                <div class="top-company-industry">IT - Phần cứng</div>
                </div>
            </div>
            </div>
            <div class="col-md-6">
            <div class="top-company-item">
                <img src="{{asset('public/frontend')}}/img/it5.png" alt="IRIS" class="top-company-logo" />
                <div>
                <div class="top-company-name">CÔNG TY CỔ PHẦN TRUYỀN THÔNG IRIS</div>
                <div class="top-company-industry">IT - Phần mềm</div>
                </div>
            </div>
            </div>
            <div class="col-md-6">
            <div class="top-company-item">
                <img src="{{asset('public/frontend')}}/img/it1.png" alt="HPT" class="top-company-logo" />
                <div>
                <div class="top-company-name">CÔNG TY CỔ PHẦN DỊCH VỤ CÔNG NGHỆ TIN HỌC...</div>
                <div class="top-company-industry">IT - Phần mềm</div>
                </div>
            </div>
            </div>
            <div class="col-md-6">
            <div class="top-company-item">
                <img src="{{asset('public/frontend')}}/img/it2.png" alt="FPT Education" class="top-company-logo" />
                <div>
                <div class="top-company-name">TỔ CHỨC GIÁO DỤC FPT</div>
                <div class="top-company-industry">Giáo dục / Đào tạo</div>
                </div>
            </div>
            </div>
            <div class="col-md-6">
            <div class="top-company-item">
                <img src="{{asset('public/frontend')}}/img/it4.png" alt="Viettel Digital" class="top-company-logo" />
                <div>
                <div class="top-company-name">VIETTEL DIGITAL</div>
                <div class="top-company-industry">IT - Phần mềm</div>
                </div>
            </div>
            </div>
        </div>
        <div class="text-center mt-3">
            <a href="{{route('job')}}" class="view-more-btn">Tìm hiểu thêm về việc làm <i class="fas fa-arrow-right"></i></a>
        </div>
        </div>
    </div>

@endsection