@extends('backend.layouts.master')
@section('content')
<div class="card">
    <div class="card-header">
        <h5 class="mb-0">Danh sách Google Tracking</h5>
    </div>

    <div class="card-body">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Tracking Code</th>
                    <th>Trạng thái</th>
                    <th style="width: 150px;">Thao tác</th>
                </tr>
            </thead>
            <tbody>
                @forelse($trackings as $tracking)
                    <tr>
                        <td>
                            <code style="white-space: pre-wrap;">{{ $tracking->tracking_code }}</code>
                        </td>
                        <td>
                            <span class="badge {{ $tracking->is_active ? 'badge-success' : 'badge-danger' }}">
                                {{ $tracking->is_active ? 'Đang kích hoạt' : 'Đã tắt' }}
                            </span>
                        </td>
                        <td>
                            <a href="{{ route('admin.google_tracking.edit', $tracking->id) }}"
                               class="btn btn-primary btn-sm">
                                Sửa
                            </a>

                            <a href="javascript:void(0);"
                               onclick="if(confirm('Bạn có chắc muốn xóa?')) { document.getElementById('delete-form-{{ $tracking->id }}').submit(); }"
                               class="btn btn-danger btn-sm">
                                Xóa
                            </a>

                            <form id="delete-form-{{ $tracking->id }}"
                                  action="{{ route('admin.google_tracking.destroy', $tracking->id) }}"
                                  method="POST"
                                  style="display: none;">
                                @csrf
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center">Chưa có dữ liệu</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="mt-3">
            <a href="{{ route('admin.google_tracking.create') }}" class="btn btn-success">Thêm mới</a>
        </div>
    </div>
</div>
@endsection
