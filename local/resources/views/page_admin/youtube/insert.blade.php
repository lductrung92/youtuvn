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
                                <label class="checkbox-inline">
                                    <input type="checkbox" class="styled" name="is_playlist">
                                    PlayList
                                </label>
                            </div>

                            <div class="form-group">
                                <label>Nhập url video:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="urlVideoYoutube" placeholder="Nhập url video youtube">
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

                                <div class="form-group">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" class="styled" name="video_status" checked>
                                        Hiển thị
                                    </label>
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

                                <div class="form-group" id="sumView">
                                    <label>Tổng lượt truy cập:</label>
                                    <input type="text" class="form-control" name="sumView" placeholder="Tổng lượt xem">
                                </div>

                                <div class="form-group {{ empty($errors->messages()['time_video']) ? '' : 'has-error' }}" id="time_video">
                                    <label>Độ dài video:</label>
                                    <input type="text" class="form-control" name="time_video" placeholder="Độ dài video">
                                    <span class="help-block">{{ empty($errors->messages()['time_video']) ? '' : showError($errors->messages()['time_video']) }}</span>
                                </div>

                                <div class="form-group" id="sumLike">
                                    <label>Like:</label>
                                    <input type="text" class="form-control" name="sumLike" placeholder="Tổng lượt thích">
                                </div>

                                <div class="form-group" id="sumDislike">
                                    <label>Dislike:</label>
                                    <input type="text" class="form-control" name="sumDislike" placeholder="Tổng lượt không thích">
                                </div>

                            </div>

                        </fieldset>
                    </div>
                    <div class="row" id="result_data_02" style="display: none">
                        <div class="col-md-6">
                            <fieldset>
                                <legend class="text-semibold"><i class="icon-feed2"></i></legend>

                                <div class="form-group">
                                    <label>Tên kênh:</label>
                                    <input type="text" class="form-control" name="nameChange" placeholder="Tên kênh youtube">
                                </div>

                                <div class="form-group">
                                    <label>ID Video:</label>
                                    <input type="text" class="form-control" name="id_video" placeholder="ID Video">
                                </div>

                                <div class="form-group" id="id_playlist">
                                    <label>ID PlayList:</label>
                                    <input type="text" class="form-control" name="id_playlist" placeholder="ID PlayList">
                                </div>

                                <div class="form-group" id="count_Video">
                                    <label>Số lượng Video:</label>
                                    <input type="text" class="form-control" name="count_Video" placeholder="Số lượng Video">
                                </div>

                                <div class="form-group {{ empty($errors->messages()['txtLink']) ? '' : 'has-error' }}">
                                    <label>Ngày đăng:</label>
                                    <input type="text" class="form-control" name="timeCreated" placeholder="Ngày đăng">
                                    <span class="help-block">{{ empty($errors->messages()['txtLink']) ? '' : showError($errors->messages()['txtLink']) }}</span>
                                </div>

                                <div class="form-group" id="textDes"> 
                                    <label>Mô tả: </label>
                                    <textarea id="some-textarea" rows="15" class="form-control" name="textDes" placeholder="Nhập mô tả"></textarea>
                                </div>

                                <div class="form-group" id="txtKeyword">
                                    <label>Keyword: </label>
                                    <textarea rows="5" cols="5" class="form-control" name="txtKeyword" placeholder="Nhập keyword"></textarea>
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
                var is_playlist = 0;
                if ($("input[type=checkbox][name=is_playlist]").is(":checked"))
                {
                   is_playlist = 1;
                }

                if(url != null) {
                    var title = $("input[name=txtTitle]");
                    var txtLink = $("input[name=txtLink]");
                    var sumView = $("input[name=sumView]");
                    var sumLike = $("input[name=sumLike]");
                    var sumDislike = $("input[name=sumDislike]");
                    var nameChange = $("input[name=nameChange]");
                    var id_video = $("input[name=id_video]");
                    var timeCreated = $("input[name=timeCreated]");
                    var txtKeyword = $("textarea[name=txtKeyword]");
                    var textDes = $("textarea[name=textDes]");
                    var count_Video = $("input[name=count_Video]");
                    var id_playlist = $("input[name=id_playlist]");

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
                        url: 'administrator/youtube/get_data_video',
                        type: 'GET',
                        data: {url, is_playlist},
                        success: function(data){ 
                            var obj = JSON.parse(data);
                            if(obj["is_playlist"] == 1) {
                                title.val(obj["title"]);
                                txtLink.val(obj["link_custom"]);
                                nameChange.val(obj["author"]);
                                timeCreated.val(obj["published"]);
                                id_video.val(obj["id_video"]);
                                count_Video.val(obj["count_Video"]);
                                id_playlist.val(obj["id_playlist"]);
                                $("#sumView").hide();
                                $("#sumLike").hide();
                                $("#sumDislike").hide();
                                $("#textDes").hide();
                                $("#txtKeyword").hide();
                                $("#time_video").hide();
                                $("#count_Video").show();
                                $("#id_playlist").show();
                            } else {
                                title.val(obj["title"]);
                                txtLink.val(obj["link_custom"]);
                                sumView.val(obj["viewCount"]);
                                sumLike.val(obj["likeCount"]);
                                sumDislike.val(obj["dislikeCount"]);
                                nameChange.val(obj["author"]);
                                id_video.val(obj["id_video"]);
                                timeCreated.val(obj["published"]);
                                txtKeyword.val(obj["keyword"]);
                                $("#some-textarea").data("wysihtml5").editor.setValue(obj["description"]);
                                $("#count_Video").hide();
                                $("#id_playlist").hide();
                                $("#sumView").show();
                                $("#sumLike").show();
                                $("#sumDislike").show();
                                $("#textDes").show();
                                $("#txtKeyword").show();
                                $("#time_video").show();
                            }

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
