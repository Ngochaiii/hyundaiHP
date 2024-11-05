@extends('backend.layouts.master')
@section('content')
<div class="content">
    <form action="{!!route('admin.product.update', ['id' => $record->id])!!}" method="POST" enctype="multipart/form-data">
        <div class="card">
            <div class="card-header header-elements-inline">
                <h6 class="card-title">Cập nhật</h6>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <ul class="nav nav-tabs nav-tabs-highlight">
                    <li class="nav-item"><a href="#left-icon-tab1" class="nav-link active" data-toggle="tab"><i class="icon-menu7 mr-2"></i> Thông tin cơ bản</a></li>
                    <li class="nav-item"><a href="#left-icon-tab2" class="nav-link" data-toggle="tab"><i class="icon-stack2 mr-2"></i> Thuộc tính sản phẩm</a></li>
                    <li class="nav-item"><a href="#left-icon-tab3" class="nav-link" data-toggle="tab"><i class="icon-mention mr-2"></i> Thẻ meta</a></li>

                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="left-icon-tab1">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group row">
                                    <div class="col-md-2">
                                        <label class="text-right">Base URL của ảnh 360° <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="text" id="base_360_url" name="base_360_url" class="form-control"
                                               placeholder="Ví dụ: https://hyundai-api.thanhcong.vn/threesixty/uploads/product/94/blocks/5/QYYvSnuRHSiMcJy/QYYvSnuRHSiMcJyphantom-black"
                                               value="{{ $record->base_360_url }}">
                                               <small class="form-text text-muted">Hệ thống sẽ tự thêm _{số}.png vào cuối URL</small>
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <div class="col-md-2">
                                        <label class="text-right">Số frame <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="number" name="total_frames" class="form-control" value="{{ $record->total_frames }}" min="1" max="72">
                                        <small class="form-text text-muted">Tổng số ảnh trong bộ 360°</small>
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <div class="col-md-2">
                                        <label class="text-right">Link youtube <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="text" name="youtube_link" class="form-control" value="{{ $record->youtube_link }}">
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
                                <fieldset>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label text-right">Tiêu đề <span class="text-danger">*</span></label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="title" value="{!!is_null(old('title'))?$record->title:old('title')!!}" required="">
                                            {!! $errors->first('title', '<span class="text-danger">:message</span>') !!}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label text-right">Url <span class="text-danger">*</span></label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" readonly="" name="alias" value="{!!is_null(old('alias'))?$record->alias:old('alias')!!}" required>
                                            {!! $errors->first('alias', '<span class="text-danger">:message</span>') !!}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label text-right">Danh mục <span class="text-danger">*</span></label>
                                        <div class="col-md-10">
                                            <select class="select-search form-control" name="category_id[]"data-placeholder="Chọn danh mục" multiple="" required>
                                                {!!$category_html!!}
                                            </select>
                                            {!! $errors->first('category_id', '<span class="text-danger">:message</span>') !!}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label text-right">Mô tả </label>
                                        <div class="col-md-10">
                                            <textarea class="form-control" name="description">{!!is_null(old('description'))?$record->description:old('description')!!}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 required control-label text-right text-semibold" for="images">Hình ảnh:</label>
                                        <div class="col-lg-10 div-image">
                                            <div class="file-input file-input-ajax-new">
                                                <div class="file-preview ">
                                                    <div class=" file-drop-zone">
                                                    </div>
                                                </div>
                                                <div class="input-group file-caption-main">
                                                    <div class="file-caption form-control kv-fileinput-caption" tabindex="500">
                                                    </div>
                                                    <div class="input-group-btn input-group-append">
                                                        <div tabindex="500" class="btn btn-primary btn-file"><i class="icon-folder-open"></i>&nbsp; <span class="hidden-xs">Chọn</span>
                                                            <input type="file" id="images" class="upload-images" name="file_upload[]" multiple="multiple" data-fouc="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" name="images" class="image_data" value="{{$record->images}}">
                                            <span class="help-block">Chỉ cho phép các file ảnh có đuôi <code>jpg</code>, <code>gif</code> và <code>png</code>. File có dung lượng tối đa 20M.</span>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group row">
                                    <label class="col-form-label col-md-4 text-left">Giá (triệu) </label>
                                    <div class="col-md-7">
                                        <input type="text" name="price" class="form-control touchspin text-center" value="{!!is_null(old('price'))?$record->price:old('price')!!}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-4 text-left">Giá khuyến mãi </label>
                                    <div class="col-md-7">
                                        <input type="text" name="sale_price" class="form-control touchspin text-center" value="{!!is_null(old('sale_price'))?$record->sale_price:old('sale_price')!!}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="form-check-label col-md-4  text-left">Hẹn ngày đăng </label>
                                    <div class="input-group col-md-7">
                                        <span class="input-group-prepend">
                                            <span class="input-group-text"><i class="icon-calendar5"></i></span>
                                        </span>
                                        <input type="text" class="form-control pickadate" placeholder="Ngày đăng" name="post_schedule" value="{!!is_null(old('post_schedule'))?$record->getPostSchedule():old('post_schedule')!!}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-left">Từ khóa <span class="text-danger">*</span></label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control tokenfield" name="keywords" data-fouc value="{!!is_null(old('keywords'))?$record->keywords:old('keywords')!!}" required="">
                                        {!! $errors->first('keywords', '<span class="text-danger">:message</span>') !!}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-4 text-left">Thứ tự </label>
                                    <div class="col-md-5">
                                        <input type="text" name="ordering" class="form-control touchspin text-center" value="{!!is_null(old('ordering'))?$record->ordering:old('ordering')!!}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="form-check col-md-6 form-check-right">
                                        <label class="form-check-label float-right">
                                            Hiển thị
                                            <input type="checkbox" class="form-check-input-styled" name="status" data-fouc="" @if($record->status) checked @endif>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="form-check col-md-6 form-check-right">
                                        <label class="form-check-label float-right">
                                            Sản phẩm nổi bật
                                            <input type="checkbox" class="form-check-input-styled" name="is_hot" data-fouc="" @if($record->is_hot) checked @endif>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="form-check col-md-6 form-check-right">
                                        <label class="form-check-label float-right">
                                            Sản phẩm mới
                                            <input type="checkbox" class="form-check-input-styled" name="is_new" data-fouc="" @if($record->is_new) checked @endif>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">

                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label text-right">Đánh giá chi tiết </label>
                                    <div class="col-md-12">
                                        <textarea class="form-control ckeditor" id="content" name="content">{!!$record->content!!}</textarea>
                                    </div>
                                </div>

                                {{-- Content --}}
                                {{-- <div class="form-group row">
                                    <label class="col-md-2  control-label text-right text-semibold" for="images">Slide thư viện <span class="text-danger">*</span></label>
                                    <div class="col-lg-12 div-image">
                                        <div class="file-input file-input-ajax-new">
                                            <div class="file-preview ">
                                                <div class=" file-drop-zone">
                                                </div>
                                            </div>
                                            <div class="input-group file-caption-main">
                                                <div class="file-caption form-control kv-fileinput-caption" tabindex="500">
                                                </div>
                                                <div class="input-group-btn input-group-append">
                                                    <div tabindex="500" class="btn btn-primary btn-file"><i class="icon-folder-open"></i>&nbsp; <span class="hidden-xs">Chọn</span>
                                                        <input type="file" id="images" class="upload-images" name="file_upload[]" multiple="multiple" data-fouc="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="library_slide" class="image_data" value="{{$record->library_slide}}">
                                        <span class="help-block">Chỉ cho phép các file ảnh có đuôi <code>jpg</code>, <code>gif</code> và <code>png</code>. File có dung lượng tối đa 20M.</span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label text-right">Ngoại thất content </label>
                                    <div class="col-md-12">
                                        <textarea class="form-control ckeditor" id="exterior_content" name="exterior_content">{!!is_null(old('exterior_content'))?$record->exterior_content:old('exterior_content')!!}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-2  control-label text-right text-semibold" for="images">Ngoại thất slide  <span class="text-danger">*</span></label>
                                    <div class="col-lg-12 div-image">
                                        <div class="file-input file-input-ajax-new">
                                            <div class="file-preview ">
                                                <div class=" file-drop-zone">
                                                </div>
                                            </div>
                                            <div class="input-group file-caption-main">
                                                <div class="file-caption form-control kv-fileinput-caption" tabindex="500">
                                                </div>
                                                <div class="input-group-btn input-group-append">
                                                    <div tabindex="500" class="btn btn-primary btn-file"><i class="icon-folder-open"></i>&nbsp; <span class="hidden-xs">Chọn</span>
                                                        <input type="file" id="images" class="upload-images" name="file_upload[]" multiple="multiple" data-fouc="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="exterior_slide" class="image_data" value="{{$record->exterior_slide}}">
                                        <span class="help-block">Chỉ cho phép các file ảnh có đuôi <code>jpg</code>, <code>gif</code> và <code>png</code>. File có dung lượng tối đa 20M.</span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label text-right">Nội thất content </label>
                                    <div class="col-md-12">
                                        <textarea class="form-control ckeditor" id="interior_content" name="interior_content">{!!is_null(old('interior_content'))?$record->interior_content:old('interior_content')!!}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-2  control-label text-right text-semibold" for="images">Nội thất slide  <span class="text-danger">*</span></label>
                                    <div class="col-lg-12 div-image">
                                        <div class="file-input file-input-ajax-new">
                                            <div class="file-preview ">
                                                <div class=" file-drop-zone">
                                                </div>
                                            </div>
                                            <div class="input-group file-caption-main">
                                                <div class="file-caption form-control kv-fileinput-caption" tabindex="500">
                                                </div>
                                                <div class="input-group-btn input-group-append">
                                                    <div tabindex="500" class="btn btn-primary btn-file"><i class="icon-folder-open"></i>&nbsp; <span class="hidden-xs">Chọn</span>
                                                        <input type="file" id="images" class="upload-images" name="file_upload[]" multiple="multiple" data-fouc="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="interior_slide" class="image_data" value="{{$record->interior_slide}}">
                                        <span class="help-block">Chỉ cho phép các file ảnh có đuôi <code>jpg</code>, <code>gif</code> và <code>png</code>. File có dung lượng tối đa 20M.</span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label text-right">Vận hành content </label>
                                    <div class="col-md-12">
                                        <textarea class="form-control ckeditor" id="operate_content" name="operate_content">{!!is_null(old('operate_content'))?$record->operate_content:old('operate_content')!!}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-2  control-label text-right text-semibold" for="images">Vận hành slide  <span class="text-danger">*</span></label>
                                    <div class="col-lg-12 div-image">
                                        <div class="file-input file-input-ajax-new">
                                            <div class="file-preview ">
                                                <div class=" file-drop-zone">
                                                </div>
                                            </div>
                                            <div class="input-group file-caption-main">
                                                <div class="file-caption form-control kv-fileinput-caption" tabindex="500">
                                                </div>
                                                <div class="input-group-btn input-group-append">
                                                    <div tabindex="500" class="btn btn-primary btn-file"><i class="icon-folder-open"></i>&nbsp; <span class="hidden-xs">Chọn</span>
                                                        <input type="file" id="images" class="upload-images" name="file_upload[]" multiple="multiple" data-fouc="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="operate_slide" class="image_data" value="{{$record->operate_slide}}">
                                        <span class="help-block">Chỉ cho phép các file ảnh có đuôi <code>jpg</code>, <code>gif</code> và <code>png</code>. File có dung lượng tối đa 20M.</span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label text-right">An toàn content </label>
                                    <div class="col-md-12">
                                        <textarea class="form-control ckeditor" id="safe_content" name="safe_content">{!!is_null(old('safe_content'))?$record->safe_content:old('safe_content')!!}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-2  control-label text-right text-semibold" for="images">An toàn slide  <span class="text-danger">*</span></label>
                                    <div class="col-lg-12 div-image">
                                        <div class="file-input file-input-ajax-new">
                                            <div class="file-preview ">
                                                <div class=" file-drop-zone">
                                                </div>
                                            </div>
                                            <div class="input-group file-caption-main">
                                                <div class="file-caption form-control kv-fileinput-caption" tabindex="500">
                                                </div>
                                                <div class="input-group-btn input-group-append">
                                                    <div tabindex="500" class="btn btn-primary btn-file"><i class="icon-folder-open"></i>&nbsp; <span class="hidden-xs">Chọn</span>
                                                        <input type="file" id="images" class="upload-images" name="file_upload[]" multiple="multiple" data-fouc="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="safe_slide" class="image_data" value="{{$record->safe_slide}}">
                                        <span class="help-block">Chỉ cho phép các file ảnh có đuôi <code>jpg</code>, <code>gif</code> và <code>png</code>. File có dung lượng tối đa 20M.</span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label text-right">Thông số kỹ thuật </label>
                                    <div class="col-md-12">
                                        <textarea class="form-control ckeditor" id="specifications" name="specifications">{!!is_null(old('specifications'))?$record->specifications:old('specifications')!!}</textarea>
                                    </div>
                                </div> --}}


                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="left-icon-tab2">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                @foreach ($attributes as $key => $val)
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label text-right">{{$val->title}}</label>
                                    <div class="col-md-9">
                                        @if ($val->type == \App\Models\Attribute::TYPE_SELECT)
                                        <select name="attribute_select[]" class="select-search" data-placeholder="Chọn">
                                            <option></option>
                                            @foreach ($val->children as $k => $v)
                                            <option value="{{$v->id}}" @if(in_array($v->id, $product_attribute_ids)) selected @endif>{{$v->title}}</option>
                                            @endforeach
                                        </select>
                                        @else
                                        <input type="text" class="form-control" name="attribute[{{$val->id}}]" value="{!!(in_array($val->id, $product_attribute_ids))?$product_attribute[$val->id]:''!!}">
                                        @endif
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="left-icon-tab3">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label text-right">Thẻ tiêu đề (SEO)</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="meta_title" value="{!!is_null(old('meta_title'))?$record->meta_title:old('meta_title')!!}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label text-right">Thẻ từ khóa (SEO) </label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" name="meta_keywords">{!!is_null(old('meta_keywords'))?$record->meta_keywords:old('meta_keywords')!!}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label text-right">Thẻ mô tả (SEO) </label>
                                    <div class="col-md-9">
                                        <textarea class="form-control maxlength-label-position" maxlength="255" name="meta_description">{!!is_null(old('meta_description'))?$record->meta_description:old('meta_description')!!}</textarea>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            <a type="button" href="{{route('admin.product.index')}}" class="btn btn-secondary legitRipple">Hủy</a>
                            <button type="submit" class="btn btn-primary legitRipple">Lưu lại <i class="icon-arrow-right14 position-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@stop
@section('script')
@parent
<script src="{!! asset('assets/global_assets/js/plugins/forms/selects/select2.min.js') !!}"></script>

<script src="{!! asset('assets/global_assets/js/plugins/forms/styling/uniform.min.js') !!}"></script>
<script src="{!! asset('assets/global_assets/js/plugins/forms/styling/switchery.min.js') !!}"></script>
<script src="{!! asset('assets/global_assets/js/plugins/forms/styling/switch.min.js') !!}"></script>
<script src="{!! asset('assets/global_assets/js/plugins/forms/validation/validate.min.js') !!}"></script>
<script src="{!! asset('assets/global_assets/js/plugins/forms/inputs/touchspin.min.js') !!}"></script>

<script src="{!! asset('assets/global_assets/js/plugins/uploaders/fileinput/plugins/purify.min.js') !!}"></script>
<script src="{!! asset('assets/global_assets/js/plugins/uploaders/fileinput/plugins/sortable.min.js') !!}"></script>
<script src="{!! asset('assets/global_assets/js/plugins/uploaders/fileinput/fileinput.min.js') !!}"></script>
<!-- Theme JS files -->
<script src="{!! asset('assets/global_assets/js/plugins/forms/tags/tagsinput.min.js') !!}"></script>
<script src="{!! asset('assets/global_assets/js/plugins/forms/tags/tokenfield.min.js') !!}"></script>
<script src="{!! asset('assets/global_assets/js/plugins/forms/inputs/typeahead/typeahead.bundle.min.js') !!}"></script>
<script src="{!! asset('assets/global_assets/js/plugins/ui/prism.min.js') !!}"></script>

<!-- Theme JS files -->
<script src="{!! asset('assets/global_assets/js/plugins/ui/moment/moment.min.js') !!}"></script>
<script src="{!! asset('assets/global_assets/js/plugins/pickers/daterangepicker.js') !!}"></script>
<script src="{!! asset('assets/global_assets/js/plugins/pickers/anytime.min.js') !!}"></script>
<script src="{!! asset('assets/global_assets/js/plugins/pickers/pickadate/picker.js') !!}"></script>
<script src="{!! asset('assets/global_assets/js/plugins/pickers/pickadate/picker.date.js') !!}"></script>
<script src="{!! asset('assets/global_assets/js/plugins/pickers/pickadate/picker.time.js') !!}"></script>
<script src="{!! asset('assets/global_assets/js/plugins/pickers/pickadate/legacy.js') !!}"></script>
<script src="{!! asset('assets/global_assets/js/plugins/notifications/jgrowl.min.js') !!}"></script>
{{-- <script src="{!! asset('assets/backend/ckeditor/ckeditor.js') !!}"></script> --}}
<script src="{!! asset('assets/backend/js/custom.js') !!}"></script>

<script>
    var options = {
      filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
      filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
      filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
      filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
    };
    CKEDITOR.config.allowedContent=true;
    CKEDITOR.replace('content', options);
    // CKEDITOR.replace('exterior_content', options);
    // CKEDITOR.replace('interior_content', options);
    // CKEDITOR.replace('operate_content', options);
    // CKEDITOR.replace('slide_content', options);

  </script>

@stop
