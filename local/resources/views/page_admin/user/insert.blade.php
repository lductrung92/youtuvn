@extends('page_admin.base.base')
@section('title', 'Thêm user')
@section('js_plugin')
    <script type="text/javascript" src="lib_admin/assets/js/plugins/forms/selects/select2.min.js"></script>
    <script type="text/javascript" src="lib_admin/assets/js/plugins/forms/styling/uniform.min.js"></script>
    <script src="lib_admin/jAlert/dist/jAlert.min.js"></script>
    <script src="lib_admin/jAlert/dist/jAlert-functions.min.js"></script>
@endsection
@section('js_custom')
    <script type="text/javascript" src="lib_admin/assets/js/pages/form_layouts.js"></script>
@endsection
@section('content')

    @if(session('success'))
        <script>
            $.jAlert({
                'title': 'Thêm thành công!',
                'content': 'Nhấn "Yes" để xem toàn bộ danh sách - "No" để tiếp tục thêm',
                'theme': 'green',
                'size': 'md',
                'showAnimation': 'fadeInUp',
                'hideAnimation': 'fadeOutDown',
                'type': 'confirm',
                'onConfirm' : function(e, btn){
                    e.preventDefault();
                    window.location.href = "http://localhost/youtuvn/administrator/youtube/list";
                    return false;
                }
            });
        </script>
    @endif

    <!-- Highlighting rows and columns -->
    <form action="administrator/user/insert" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">Thêm user</h5>
                <a href="administrator/user/list">Danh sách</a>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li style="display: none"><a data-action="reload"></a></li>
                    </ul>
                </div>
            </div>

            <div class="panel-body">
                <div class="row">
                    <div class="col-md-6">
                        <fieldset>
                            <legend class="text-semibold"><i class="icon-user-plus"></i> User</legend>
                            <div class="form-group {{ empty($errors->messages()['selRole']) ? '' : 'has-error' }}">
                                <label>Chọn role:</label>
                                <select data-placeholder="Chọn quyền user" name="selRole" class="select">
                                    <option></option>
                                    @if(isset($roles) && count($roles) > 0)
                                        @foreach($roles as $role)
                                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>

                            <div class="form-group {{ empty($errors->messages()['txtName']) ? '' : 'has-error' }}">
                                <label>Họ tên:</label>
                                <input type="text" class="form-control" name="txtName" placeholder="Nhập vào họ tên">
                                <span class="help-block">{{ empty($errors->messages()['txtName']) ? '' : showError($errors->messages()['txtName']) }}</span>
                            </div>
                            <div class="form-group {{ empty($errors->messages()['txtEmail']) ? '' : 'has-error' }}">
                                <label>E-mail:</label>
                                <input type="email" class="form-control" name="txtEmail" placeholder="Nhập vào email">
                                <span class="help-block">{{ empty($errors->messages()['txtEmail']) ? '' : showError($errors->messages()['txtEmail']) }}</span>
                            </div>
                            <div class="form-group {{ empty($errors->messages()['txtPass']) ? '' : 'has-error' }}">
                                <label>Password:</label>
                                <input type="password" class="form-control" name="txtPass" placeholder="Nhập vào password">
                                <span class="help-block">{{ empty($errors->messages()['txtPass']) ? '' : showError($errors->messages()['txtPass']) }}</span>
                            </div>
                            <div class="form-group {{ empty($errors->messages()['txtConfirmPass']) ? '' : 'has-error' }}">
                                <label>Confirm password:</label>
                                <input type="password" class="form-control" name="txtConfirmPass" placeholder="Nhập lại password">
                                <span class="help-block">{{ empty($errors->messages()['txtConfirmPass']) ? '' : showError($errors->messages()['txtConfirmPass']) }}</span>
                            </div>
                            
                        </fieldset>
                        <div class="text-right" id="btn_submit">
                            <button type="submit" class="btn btn-primary">Thêm <i class="icon-arrow-right14 position-right"></i></button>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </form>
    <!-- /highlighting rows and columns -->
@endsection


