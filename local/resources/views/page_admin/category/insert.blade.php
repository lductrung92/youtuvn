@extends('page_admin.base.base')
@section('title', 'Thêm danh mục')
@section('js_plugin')
    <script type="text/javascript" src="lib_admin/assets/js/plugins/forms/selects/select2.min.js"></script>
    <script type="text/javascript" src="lib_admin/assets/js/plugins/forms/styling/uniform.min.js"></script>
@endsection
@section('js_custom')
    <script type="text/javascript" src="lib_admin/assets/js/pages/form_layouts.js"></script>
@endsection
@section('content')



    <!-- Highlighting rows and columns -->
    <form action="administrator/category/insert" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">Thêm danh mục</h5>
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
                                    <input type="checkbox" class="styled" name="cate_pid">
                                    Danh mục chủ
                                </label>
                            </div>

                            <div class="form-group" id="selCate">
                                <label>Chọn danh mục chủ:</label>
                                <select data-placeholder="Chọn danh mục" name="selCate" class="select">
                                    <option></option>
                                    @if(isset($categories) && count($categories) > 0)
                                        <optgroup label="Alaskan/Hawaiian Time Zone">
                                            <option value="AK">Alaska</option>
                                            <option value="HI">Hawaii</option>
                                        </optgroup>
                                    @endif
                                </select>
                            </div>

                            <div class="form-group {{ empty($errors->messages()['txtName']) ? '' : 'has-error' }}">
                                <label>Tên danh mục:</label>
                                <input type="text" class="form-control" name="txtName" placeholder="Nhập tên danh mục">
                                <span class="help-block">{{ empty($errors->messages()['txtName']) ? '' : showError($errors->messages()['txtName']) }}</span>
                            </div>

                            <div class="form-group">
                                <label>Keyword: </label>
                                <textarea rows="5" cols="5" class="form-control" name="textKeyword" placeholder="Nhập keyword"></textarea>
                            </div>

                            <div class="form-group">
                                <label class="checkbox-inline">
                                    <input type="checkbox" class="styled" name="cate_status" checked>
                                    Hiển thị
                                </label>
                            </div>
                        </fieldset>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Thêm <i class="icon-arrow-right14 position-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- /highlighting rows and columns -->
@endsection

@section('js')
    <script type="text/javascript">
        $('input[name=cate_pid]').change(function() {
            if($(this).is(":checked")) {
                $('#selCate').hide(700);
            }
            else {
                $('#selCate').show(700);
            }
        });
    </script>
@endsection
