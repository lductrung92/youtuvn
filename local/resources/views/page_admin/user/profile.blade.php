@extends('page_admin.base.base')
@section('title', 'Thông tin cá nhân')
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
    <!-- Cover area -->
    <div class="profile-cover">
        <div class="profile-cover-img" style="background-image: url(lib_admin/assets/images/cover.jpg)"></div>
        <div class="media">
            <div class="media-left">
                <a href="#" class="profile-thumb">
                    <img src="lib_admin/assets/images/placeholder.jpg" class="img-circle" alt="">
                </a>
            </div>

            <div class="media-body">
                <h1>Hanna Dorman <small class="display-block">UX/UI designer</small></h1>
            </div>

            <div class="media-right media-middle">
                <ul class="list-inline list-inline-condensed no-margin-bottom text-nowrap">
                    <li><a href="#" class="btn btn-default"><i class="icon-file-picture position-left"></i> Cover image</a></li>
                    <li><a href="#" class="btn btn-default"><i class="icon-file-stats position-left"></i> Statistics</a></li>
                </ul>
            </div>
        </div>
    </div>
   

    <div class="row" style="margin-top: 25px ">
        <div class="tabbable">
            <div class="tab-content">
                <div class="tab-pane fade in active" id="active">
                    <!-- Profile info -->
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h6 class="panel-title">Profile information</h6>
                            <div class="heading-elements">
                                <ul class="icons-list">
                                    <li><a data-action="collapse"></a></li>
                                    <li><a data-action="reload"></a></li>
                                    <li><a data-action="close"></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="panel-body">
                            <form action="#">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Username</label>
                                            <input type="text" value="Eugene" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Full name</label>
                                            <input type="text" value="Kopyov" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Address line 1</label>
                                            <input type="text" value="Ring street 12" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Address line 2</label>
                                            <input type="text" value="building D, flat #67" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>City</label>
                                            <input type="text" value="Munich" class="form-control">
                                        </div>
                                        <div class="col-md-4">
                                            <label>State/Province</label>
                                            <input type="text" value="Bayern" class="form-control">
                                        </div>
                                        <div class="col-md-4">
                                            <label>ZIP code</label>
                                            <input type="text" value="1031" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Email</label>
                                            <input type="text" readonly="readonly" value="eugene@kopyov.com" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Your country</label>
                                            <select class="select">
                                                <option value="germany" selected="selected">Germany</option> 
                                                <option value="france">France</option> 
                                                <option value="spain">Spain</option> 
                                                <option value="netherlands">Netherlands</option> 
                                                <option value="other">...</option> 
                                                <option value="uk">United Kingdom</option> 
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Phone #</label>
                                            <input type="text" value="+99-99-9999-9999" class="form-control">
                                            <span class="help-block">+99-99-9999-9999</span>
                                        </div>

                                        <div class="col-md-6">
                                            <label class="display-block">Upload profile image</label>
                                            <input type="file" class="file-styled">
                                            <span class="help-block">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Save <i class="icon-arrow-right14 position-right"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /profile info -->
                    
                </div>
            </div>
        </div>
    </div>
@endsection


