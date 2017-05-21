@extends('page_admin.base.base')
@section('title', 'Thêm video')
@section('js_plugin')
    <script type="text/javascript" src="lib_admin/assets/js/plugins/forms/selects/select2.min.js"></script>
    <script type="text/javascript" src="lib_admin/assets/js/plugins/forms/styling/uniform.min.js"></script>
    <script type="text/javascript" src="lib_admin/assets/js/plugins/editors/wysihtml5/wysihtml5.min.js"></script>
    <script type="text/javascript" src="lib_admin/assets/js/plugins/editors/wysihtml5/toolbar.js"></script>
    <script type="text/javascript" src="lib_admin/assets/js/plugins/editors/wysihtml5/parsers.js"></script>
    <script type="text/javascript" src="lib_admin/assets/js/plugins/editors/wysihtml5/locales/bootstrap-wysihtml5.ua-UA.js"></script>
    <script src="lib_admin/jAlert/dist/jAlert.min.js"></script>
    <script src="lib_admin/jAlert/dist/jAlert-functions.min.js"></script>
@endsection
@section('js_custom')
    <script type="text/javascript" src="lib_admin/assets/js/pages/form_layouts.js"></script>
@endsection
@section('content')
    
    @if($errors->any())
       
        <?php
            $e = '';
            foreach ($errors->all() as $error) {
                $e = $e . $error . ' ';
            }
        ?>
        <script>
            var info = '{{ $e }}'; 
            $.jAlert({
                'title': 'Errors!',
                'content': info,
                'theme': 'red',
                'size': 'md',
                'showAnimation': 'fadeInUp',
                'hideAnimation': 'fadeOutDown',
            });
        </script>
    @endif

   

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
    <form action="administrator/youtube/insert" method="post" id="form_get_video">
        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">Thêm video</h5>
                <a href="administrator/youtube/list">Danh sách</a>
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
                            <legend class="text-semibold"><i class="icon-youtube3"></i> Video</legend>
                            <div class="form-group">
                                <label>Nhập id video:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="urlVideoYoutube" placeholder="Nhập id video youtube">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button" id="getData">Lấy data</button>
                                    </span>
                                </div>
                            </div>

                            <div id="result_data_01" style="display: none">
                                <div class="form-group" id="selCate">
                                    <label>Chọn danh mục chủ:</label>
                                    <select data-placeholder="Chọn danh mục" name="selCate" class="select">
                                        <option></option>
                                        @if(isset($categories))
                                            @foreach($categories as $category)
                                                @if(count($category->childs) == 0)
                                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                                                @endif
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group {{ empty($errors->messages()['txtTitle']) ? '' : 'has-error' }}">
                                    <label>Tiêu đề video:</label>
                                    <input type="text" class="form-control" name="txtTitle" placeholder="Nhập tiêu đề video">
                                    <span class="help-block">{{ empty($errors->messages()['txtTitle']) ? '' : showError($errors->messages()['txtTitle']) }}</span>
                                </div>

                                <div class="form-group {{ empty($errors->messages()['txtLink']) ? '' : 'has-error' }}">
                                    <label>Link custom:</label>
                                    <input type="text" class="form-control" name="txtLink" placeholder="Nhập link custom">
                                    <span class="help-block">{{ empty($errors->messages()['txtLink']) ? '' : showError($errors->messages()['txtLink']) }}</span>
                                </div>

                                <div class="form-group">
                                    <label>Tổng lượt truy cập:</label>
                                    <input type="text" class="form-control" name="sumView" placeholder="Tổng lượt xem">
                                </div>

                                <div class="form-group">
                                    <label>Like:</label>
                                    <input type="text" class="form-control" name="sumLike" placeholder="Tổng lượt thích">
                                </div>

                                <div class="form-group">
                                    <label>Dislike:</label>
                                    <input type="text" class="form-control" name="sumDislike" placeholder="Tổng lượt không thích">
                                </div>

                                <div class="form-group">
                                    <label>Tên kênh:</label>
                                    <input type="text" class="form-control" name="nameChange" placeholder="Tên kênh youtube">
                                </div>

                                <div class="form-group">
                                    <label>Url image:</label>
                                    <input type="text" class="form-control" name="imgUrl" placeholder="Url hình ảnh">
                                </div>
                                
                            </div>

                        </fieldset>
                    </div>
                    <div class="row" id="result_data_02" style="display: none">
                        <div class="col-md-6">
                            <fieldset>
                                <legend class="text-semibold"><i class="icon-feed2"></i></legend>
                                <div class="form-group {{ empty($errors->messages()['txtLink']) ? '' : 'has-error' }}">
                                    <label>Ngày đăng:</label>
                                    <input type="text" class="form-control" name="timeCreated" placeholder="Ngày đăng">
                                    <span class="help-block">{{ empty($errors->messages()['txtLink']) ? '' : showError($errors->messages()['txtLink']) }}</span>
                                </div>

                                <div class="form-group">
                                    <label>Mô tả: </label>
                                    <textarea id="some-textarea" rows="15" class="form-control" name="textDes" placeholder="Nhập mô tả"></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Keyword: </label>
                                    <textarea rows="6" cols="5" class="form-control" name="txtKeyword" placeholder="Nhập keyword"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" class="styled" name="video_status" checked>
                                        Hiển thị
                                    </label>
                                </div>
                            </fieldset>
                        </div>
                    </div>

                    <div class="text-right" id="btn_submit" style="display: none">
                        <button type="submit" class="btn btn-primary">Thêm <i class="icon-arrow-right14 position-right"></i></button>
                    </div>
                </div>
                
            </div>
        </div>
    </form>
    <!-- /highlighting rows and columns -->
@endsection

@section('js')
    <script type="text/javascript">
        $('#some-textarea').wysihtml5();
        $(document).ready(function () {
            $("#getData").click(function () {
                var url = $("input[name=urlVideoYoutube]").val();
                var videoid = url.match(/(?:https?:\/{2})?(?:w{3}\.)?youtu(?:be)?\.(?:com|be)(?:\/watch\?v=|\/)([^\s&]+)/);
                if(videoid != null) {
                    var title = $("input[name=txtTitle]");
                    var txtLink = $("input[name=txtLink]");
                    var sumView = $("input[name=sumView]");
                    var sumLike = $("input[name=sumLike]");
                    var sumDislike = $("input[name=sumDislike]");
                    var nameChange = $("input[name=nameChange]");
                    var imgUrl = $("input[name=imgUrl]");
                    var timeCreated = $("input[name=timeCreated]");
                    var txtKeyword = $("textarea[name=txtKeyword]");
                    var textDes = $("textarea[name=textDes]");
                    $("#form_get_video").block({ 
                        message: '<i class="icon-spinner2 spinner"></i>',
                        overlayCSS: {
                            backgroundColor: '#fff',
                            opacity: 0.8,
                            cursor: 'wait',
                            'box-shadow': '0 0 0 1px #ddd'
                        },
                        css: {
                            border: 0,
                            padding: 0,
                            backgroundColor: 'none'
                        }
                    });
                    $.ajax({
                        url: 'administrator/youtube/get_data_video/'+videoid[1],
                        type: 'GET',
                        success: function(data){ 
                            var obj = JSON.parse(data);
                            title.val(obj["title"]);
                            txtLink.val(obj["link_custom"]);
                            sumView.val(obj["viewCount"]);
                            sumLike.val(obj["likeCount"]);
                            sumDislike.val(obj["dislikeCount"]);
                            nameChange.val(obj["author"]);
                            imgUrl.val(obj["url_image"]);
                            timeCreated.val(obj["published"]);
                            txtKeyword.val(obj["keyword"]);
                            $("#some-textarea").data("wysihtml5").editor.setValue(obj["description"]);

                            $("#result_data_01").show();
                            $("#result_data_02").show();
                            $("#btn_submit").show();
                            window.setTimeout(function () {
                               $("#form_get_video").unblock();
                            }, 500); 
                        },
                        error: function(data) {
                            $.jAlert({
                                'title': 'Error',
                                'content': 'Xảy ra lỗi',
                                'theme': 'red',
                                'size': 'md',
                                'showAnimation': 'fadeInUp',
                                'hideAnimation': 'fadeOutDown',
                            });
                            window.setTimeout(function () {
                               $("#form_get_video").unblock();
                            }, 500); 
                        }
                    });
                } else { 
                    $.jAlert({
                        'title': 'Error',
                        'content': 'Url video không tồn tại',
                        'theme': 'red',
                        'size': 'md',
                        'showAnimation': 'fadeInUp',
                        'hideAnimation': 'fadeOutDown',
                    });
                }
            });
        });
    </script>
@endsection
