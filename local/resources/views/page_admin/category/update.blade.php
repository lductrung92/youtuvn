@extends('page_admin.base.base')
@section('title', 'Cập nhật danh mục - ' . $cate->title)
@section('js_plugin')
    <link href="lib_admin/treeview/treeview.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="lib_admin/assets/js/plugins/forms/selects/select2.min.js"></script>
    <script type="text/javascript" src="lib_admin/assets/js/plugins/forms/styling/uniform.min.js"></script>
    <script src="lib_admin/jAlert/dist/jAlert.min.js"></script>
    <script src="lib_admin/jAlert/dist/jAlert-functions.min.js"></script>
    <script src="lib_admin/treeview/treeview.js"></script>
@endsection
@section('js_custom')
    <script type="text/javascript" src="lib_admin/assets/js/pages/form_layouts.js"></script>
@endsection
@section('content')

    @if(session('success'))
        <script>
            $.jAlert({
                'title': 'Cập nhật thành công!',
                'content': 'Nhấn "Yes" để xem toàn bộ danh sách - "No" để tiếp tục thêm',
                'theme': 'green',
                'size': 'md',
                'showAnimation': 'fadeInUp',
                'hideAnimation': 'fadeOutDown',
                'type': 'confirm',
                'onConfirm' : function(e, btn){
                    e.preventDefault();
                    window.location.href = "http://localhost/youtuvn/administrator/category/list";
                    return false;
                }
            });
        </script>
    @endif

    <!-- Highlighting rows and columns -->
    <form action="administrator/category/update/{{ $cate->id }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">Cập nhật danh mục - <small style="color: red">{{ $cate->title }}</small> </h5>
                <a href="administrator/category/list">Danh sách</a>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                    </ul>
                </div>
            </div>

            <div class="panel-body">
                <div class="row">
                    <div class="col-md-6">
                        <fieldset>
                            <legend class="text-semibold"><i class="icon-lan"></i> Danh mục</legend>

                            <div class="form-group">
                                <label class="checkbox-inline">
                                    <input type="checkbox" class="styled" name="cate_pid" @if($cate->pid == 0) checked @endif>
                                    Danh mục chủ
                                </label>
                            </div>

                            <div class="form-group" id="selCate">
                                <label>Chọn danh mục chủ:</label>
                                <select data-placeholder="Chọn danh mục" name="selCate" class="select">
                                    <option></option>
                                    @if(isset($categories) && count($categories) > 0)
                                        @foreach($categories as $category)
                                            <optgroup label="{{ $category->title }}">
                                                @if(count($category->childs))
                                                    @include('page_admin.category.cate_childs', ['childs' => $category->childs])
                                                @endif
                                                <option value="{{ $category->id }}"  @if(isset($cate->parent) && $category->id == $cate->parent->id) selected @endif>Danh mục {{ $category->title }}</option>
                                            </optgroup>
                                        @endforeach
                                    @endif
                                </select>
                            </div>

                            <div class="form-group {{ empty($errors->messages()['txtName']) ? '' : 'has-error' }}">
                                <label>Tên danh mục:</label>
                                <input type="text" class="form-control" name="txtName" placeholder="Nhập tên danh mục" value="{{ $cate->title }}">
                                <span class="help-block">{{ empty($errors->messages()['txtName']) ? '' : showError($errors->messages()['txtName']) }}</span>
                            </div>

                            <div class="form-group" id="stt_ht" style="display: none">
                                <label>Thứ tự hiển thị:</label>
                                <input type="text" class="form-control" name="txt_stt" value="{{ $cate->stt }}" placeholder="Nhập thứ tự hiển thị">
                            </div>

                            <div class="form-group">
                                <label>Keyword: </label>
                                <textarea rows="5" cols="5" class="form-control" name="textKeyword" placeholder="Nhập keyword">{{ $cate->keyword }}</textarea>
                            </div>

                            <div class="form-group">
                                <label class="checkbox-inline">
                                    <input type="checkbox" class="styled" name="cate_status" @if($cate->status == 1) checked @endif>
                                    Hiển thị
                                </label>
                            </div>
                        </fieldset>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Cập nhật <i class="icon-arrow-right14 position-right"></i></button>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <fieldset>
                            <legend class="text-semibold"><i class="icon-lan"></i> Cây danh mục</legend>

                            <div class="box-body">
                                <ul id="tree1" class="tree">
                                    @foreach($categories as $category)
                                        <li>
                                            <a id="{{ $category->id }}">{{ $category->title }}</a>
                                            @if(count($category->childs))
                                                @include('page_admin.category.tree',['childs' => $category->childs])
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- /highlighting rows and columns -->
@endsection

@section('js')
    <script type="text/javascript">

        if($('input[name=cate_pid]').is(":checked")) {
            $('#selCate').hide();
            $('#stt_ht').show();
        }

        $('input[name=cate_pid]').change(function() {
            if($(this).is(":checked")) {
                $('#selCate').hide(700);
            }
            else {
                $('#selCate').show(700);
            }
        });
        $('#tree1').treed();

    </script>
@endsection
