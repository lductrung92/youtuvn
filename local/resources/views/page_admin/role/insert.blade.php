@extends('page_admin.base.base')
@section('title', 'Thêm quyền')
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
    <form action="administrator/role/insert" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">Thêm role</h5>
                <a href="administrator/role/list">Danh sách</a>
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
                            <legend class="text-semibold"><i class="icon-user-plus"></i> Role</legend>
                            <div class="form-group {{ empty($errors->messages()['txtRole']) ? '' : 'has-error' }}">
                                <label>Quyền truy cập:</label>
                                <input type="text" class="form-control" name="txtRole" placeholder="Nhập quyền truy cập user">
                                <span class="help-block">{{ empty($errors->messages()['txtRole']) ? '' : showError($errors->messages()['txtRole']) }}</span>
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


