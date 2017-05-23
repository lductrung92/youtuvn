@extends('page_admin.base.base')
@section('title', 'Cập nhật video')
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
                'title': 'Cập nhật thành công!',
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
    <form action="administrator/youtube/update/{{ $video->id }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">Cập nhật video - <small style="color: red">{{ $video->title }}</small></h5>
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
                            <div id="result_data_01">
                                <div class="form-group" id="selCate">
                                    <label>Chọn danh mục chủ:</label>
                                    <select data-placeholder="Chọn danh mục" name="selCate" class="select">
                                        <option></option>
                                        @if(isset($categories))
                                            @foreach($categories as $category)
                                                @if(count($category->childs) == 0)
                                                    @if($video->category->id == $category->id)
                                                        <option value="{{ $category->id }}" selected="selected">{{ $category->title }}</option>
                                                    @endif
                                                @endif
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group {{ empty($errors->messages()['txtTitle']) ? '' : 'has-error' }}">
                                    <label>Tiêu đề video:</label>
                                    <input type="text" class="form-control" name="txtTitle" value="{{ $video->title }}" placeholder="Nhập tiêu đề video">
                                    <span class="help-block">{{ empty($errors->messages()['txtTitle']) ? '' : showError($errors->messages()['txtTitle']) }}</span>
                                </div>

                                <div class="form-group {{ empty($errors->messages()['txtLink']) ? '' : 'has-error' }}">
                                    <label>Link custom:</label>
                                    <input type="text" class="form-control" name="txtLink" value="{{ $video->alias }}" placeholder="Nhập link custom">
                                    <span class="help-block">{{ empty($errors->messages()['txtLink']) ? '' : showError($errors->messages()['txtLink']) }}</span>
                                </div>

                                <div class="form-group">
                                    <label>Tổng lượt truy cập:</label>
                                    <input type="text" class="form-control" name="sumView" value="{{ $video->viewCount }}" placeholder="Tổng lượt xem">
                                </div>

                                <div class="form-group {{ empty($errors->messages()['time_video']) ? '' : 'has-error' }}">
                                    <label>Độ dài video:</label>
                                    <input type="text" class="form-control" value="{{ $video->time }}"l name="time_video" placeholder="Tên kênh youtube">
                                    
                                    <span class="help-block">{{ empty($errors->messages()['time_video']) ? '' : showError($errors->messages()['time_video']) }}</span>
                                </div>

                                <div class="form-group">
                                    <label>Like:</label>
                                    <input type="text" class="form-control" name="sumLike" value="{{ $video->likeCount }}" placeholder="Tổng lượt thích">
                                </div>

                                <div class="form-group">
                                    <label>Dislike:</label>
                                    <input type="text" class="form-control" name="sumDislike" value="{{ $video->dislikeCount }}" placeholder="Tổng lượt không thích">
                                </div>

                                <div class="form-group">
                                    <label>Tên kênh:</label>
                                    <input type="text" class="form-control" name="nameChange" value="{{ $video->author }}" placeholder="Tên kênh youtube">
                                </div>

                            </div>

                        </fieldset>
                    </div>
                    <div class="row" id="result_data_02">
                        <div class="col-md-6">
                            <fieldset>
                                <legend class="text-semibold"><i class="icon-feed2"></i></legend>

                                <div class="form-group">
                                    <label>ID Video:</label>
                                    <input type="text" class="form-control" name="id_video" value="{{ $video->id_video }}" placeholder="Url video">
                                </div>

                                <div class="form-group {{ empty($errors->messages()['txtLink']) ? '' : 'has-error' }}">
                                    <label>Ngày đăng:</label>
                                    <input type="text" class="form-control" name="timeCreated" value="{{ $video->created_at }}" placeholder="Ngày đăng">
                                    <span class="help-block">{{ empty($errors->messages()['txtLink']) ? '' : showError($errors->messages()['txtLink']) }}</span>
                                </div>

                                <div class="form-group">
                                    <label>Mô tả: </label>
                                    <textarea id="some-textarea" rows="8" class="form-control" name="textDes" placeholder="Nhập mô tả">{{ $video->description }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label>Keyword: </label>
                                    <textarea rows="4" cols="5" class="form-control" name="txtKeyword" placeholder="Nhập keyword">{{ $video->keyword }}</textarea>
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

                    <div class="text-right" id="btn_submit">
                        <button type="submit" class="btn btn-primary">Cập nhật <i class="icon-arrow-right14 position-right"></i></button>
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
            
        });
    </script>
@endsection
