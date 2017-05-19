<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{{ asset('/') }}" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="fav/favicon.ico" rel="shortcut icon" />
    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="lib_admin/assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="lib_admin/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="lib_admin/assets/css/core.css" rel="stylesheet" type="text/css">
    <link href="lib_admin/assets/css/components.css" rel="stylesheet" type="text/css">
    <link href="lib_admin/assets/css/colors.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="lib_admin/assets/js/plugins/loaders/pace.min.js"></script>
    <script type="text/javascript" src="lib_admin/assets/js/core/libraries/jquery.min.js"></script>
    <script type="text/javascript" src="lib_admin/assets/js/core/libraries/bootstrap.min.js"></script>
    <script type="text/javascript" src="lib_admin/assets/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    @yield('js_plugin')
    <script type="text/javascript" src="lib_admin/assets/js/core/app.js"></script>
    @yield('js_custom')
    <!-- /theme JS files -->

</head>

<body>

@include('page_admin.base.header')


<!-- Page container -->
<div class="page-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main sidebar -->
        @include('page_admin.base.sidebar')
        <!-- /main sidebar -->


        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Content area -->
            <div class="content">

                @yield('content')

                <!-- Footer -->
                <div class="footer text-muted">
                    &copy; 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
                </div>
                <!-- /footer -->

            </div>
            <!-- /content area -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</div>
<!-- /page container -->
@yield('js')
</body>
</html>
