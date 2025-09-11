@extends('backend/layout')
@section('content')

      <div class="content">
          <div class="container">
            <div class="page-title">
              <h3>QUẢN LÝ VIỆC LÀM</h3>
              @if (session('success'))
                <div class="alert alert-success">{{session('success')}}</div>
              @endif
            </div>
            <div class="row">
              <div class="col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <a href="{{route('backend.vieclam.create')}}"  class="btn btn-primary mb-3">➕ Thêm Việc Làm</a>
                  </div>
                  <div class="card-body">
                    <p class="card-title"></p>
                    <table
                      class="table table-hover"
                      id="dataTables-example"
                      width="100%"
                    >
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Logo</th>
                          <th>Tiêu đề</th>
                          <th>Công ty</th>
                          <th>Lương</th>
                          <th>Hạn nộp</th>
                          <th>Trạng thái</th>
                          <th>Hành động</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse($vieclams as $vl)
                        <tr>
                          <td>{{$vl->id}}</td>
                          <td>
                              @if($vl->logo)
                                 <img src="{{asset('public/')}}/{{$vl->logo}}" width="100">
                              @else
                                  <span class="text-muted">Không có logo</span>
                              @endif
                          </td>

                          <td>{{ $vl->title }}</td>
                          <td>{{ $vl->company }}</td>
                          <td>{{ number_format($vl->salary_min, 0, ',', '.') }} - {{ number_format($vl->salary_max, 0, ',', '.') }} VNĐ</td>
                          <td>{{ $vl->deadline->format('d/m/Y') }}</td>
                          <td>
                              @if($vl->is_active == 1)
                                  <span class="badge bg-success">Hiển thị</span>
                              @else
                                  <span class="badge bg-secondary">Ẩn</span>
                              @endif
                          </td>
                          <td>
                              <a href="{{ route('backend.vieclam.edit', $vl->id) }}" class="btn btn-sm btn-warning">✏️ Sửa</a>
                              <a href="{{ route('backend.vieclam.delete', $vl->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">
                                  🗑️ Xóa
                              </a>
                          </td>
                        </tr>
                         @empty
                        <tr>
                            <td colspan="7" class="text-center">Chưa có việc làm nào.</td>
                        </tr>
                        @endforelse
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


@endsection