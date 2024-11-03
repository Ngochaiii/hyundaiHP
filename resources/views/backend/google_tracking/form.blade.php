@extends('backend.layouts.master')
@section('content')
<div class="container-fluid">
    <!-- Breadcrumb -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0">{{ isset($tracking) ? 'Chỉnh sửa' : 'Thêm mới' }} Google Tracking</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Google Tracking</a></li>
                        <li class="breadcrumb-item active">{{ isset($tracking) ? 'Chỉnh sửa' : 'Thêm mới' }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Form Card -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ isset($tracking) ? route('admin.google_tracking.update', $tracking->id) : route('admin.google_tracking.store') }}"
                          method="POST"
                          id="trackingForm">
                        @csrf
                        @if(isset($tracking))
                            @method('POST')
                        @endif

                        <div class="row">
                            <!-- Campaign Name -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="campaign_name" class="form-label">
                                        Tên chiến dịch
                                        <small class="text-muted">(không bắt buộc)</small>
                                    </label>
                                    <input type="text"
                                           class="form-control @error('campaign_name') is-invalid @enderror"
                                           id="campaign_name"
                                           name="campaign_name"
                                           value="{{ old('campaign_name', $tracking->campaign_name ?? '') }}"
                                           placeholder="Ví dụ: Campaign Zalo">
                                    @error('campaign_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Conversion ID -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="conversion_id" class="form-label">
                                        Conversion ID
                                        <small class="text-muted">(không bắt buộc)</small>
                                    </label>
                                    <input type="text"
                                           class="form-control @error('conversion_id') is-invalid @enderror"
                                           id="conversion_id"
                                           name="conversion_id"
                                           value="{{ old('conversion_id', $tracking->conversion_id ?? '') }}"
                                           placeholder="Ví dụ: AW-10966315732">
                                    @error('conversion_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Conversion Label -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="conversion_label" class="form-label">
                                        Conversion Label
                                        <small class="text-muted">(không bắt buộc)</small>
                                    </label>
                                    <input type="text"
                                           class="form-control @error('conversion_label') is-invalid @enderror"
                                           id="conversion_label"
                                           name="conversion_label"
                                           value="{{ old('conversion_label', $tracking->conversion_label ?? '') }}"
                                           placeholder="Ví dụ: gXMFCMXW-74ZENTlku0o">
                                    @error('conversion_label')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Status -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label d-block">Trạng thái</label>
                                    <div class="form-check form-switch form-switch-md">
                                        <input type="checkbox"
                                               class="form-check-input"
                                               id="is_active"
                                               name="is_active"
                                               value="1"
                                               {{ old('is_active', $tracking->is_active ?? true) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="is_active">Kích hoạt</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Tracking Code -->
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="tracking_code" class="form-label">
                                        Tracking Code
                                        <small class="text-muted">(không bắt buộc)</small>
                                    </label>
                                    <textarea class="form-control code-editor @error('tracking_code') is-invalid @enderror"
                                              id="tracking_code"
                                              name="tracking_code"
                                              rows="10"
                                              placeholder="<!-- Dán mã tracking vào đây -->">{{ old('tracking_code', $tracking->tracking_code ?? '') }}</textarea>
                                    @error('tracking_code')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-12">
                                <div class="d-flex gap-2">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="mdi mdi-content-save me-1"></i>
                                        {{ isset($tracking) ? 'Cập nhật' : 'Thêm mới' }}
                                    </button>
                                    <a href="{{ route('admin.google_tracking.index') }}" class="btn btn-secondary">
                                        <i class="mdi mdi-arrow-left me-1"></i>
                                        Quay lại
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div> <!-- end row -->
</div>
<style>
    .CodeMirror {
        height: 300px;
        border: 1px solid #ddd;
    }
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/codemirror.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/mode/xml/xml.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/mode/javascript/javascript.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Khởi tạo CodeMirror cho textarea
    var editor = CodeMirror.fromTextArea(document.getElementById('tracking_code'), {
        mode: "xml",
        htmlMode: true,
        lineNumbers: true,
        theme: "default",
        lineWrapping: true,
        autoCloseTags: true,
        autoCloseBrackets: true,
        matchBrackets: true
    });

    // Cập nhật nội dung textarea khi submit form
    document.getElementById('trackingForm').addEventListener('submit', function() {
        document.getElementById('tracking_code').value = editor.getValue();
    });
});
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/codemirror.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/theme/default.min.css">
@endsection
