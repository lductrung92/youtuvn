<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
<head>
    <base href="{{ asset('/') }}">
    <meta charset="UTF-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="fav/favicon.ico" rel="shortcut icon" />
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <title>HomePage</title>

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'
          type='text/css' media='all'/>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel='stylesheet' href='//fonts.googleapis.com/css?family=Lato%3A300%2C400%2C700%2C900&#038;ver=4.7.5'
          type='text/css' media='all'/>
    <link rel='stylesheet' href='lib_home/css/style.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css'
          type='text/css' media='all'/>
    <link rel='stylesheet' href='lib_home/video-embed-thumbnail-generator/video-js/video-js.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='lib_home/video-embed-thumbnail-generator/video-js/kg-video-js-skin.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/dashicons/0.1.0/css/dashicons.min.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='lib_home/video-embed-thumbnail-generator/css/kgvid_styles.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='lib_home/css/style-front-end.css' type='text/css' media='all'/>

    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js'></script>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/1.4.1/jquery-migrate.min.js'></script>


</head>
<body>
    <!--header-->
   @include('page_home.base.header')
    <!-- /#header -->

    <!--menu-->
    @include('page_home.base.main_menu')
    <!-- menu -->
   @yield('slide')

    <div class="container">
        <div class="row">
            @yield('content')
            
            @include('page_home.base.content_right')
        </div><!-- /.row -->
    </div><!-- /.container -->

    @include('page_home.base.footer')


    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
    <script type='text/javascript'
            src='https://cdnjs.cloudflare.com/ajax/libs/jquery-placeholder/2.3.1/jquery.placeholder.min.js'></script>
    <script type='text/javascript'
            src='https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js'></script>
    <script type='text/javascript' src='lib_home/js/functions.js'></script>
    <script type='text/javascript' src='lib_home/js/custom.js'></script>
    <script type='text/javascript'
            src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.min.js'></script>
    <script type='text/javascript'
            src='https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.1/jquery.form.min.js'></script>
    <script type='text/javascript' src='lib_home/js/ajax_handled.js'></script>
    <script type="text/javascript" src="lib_home/theia-sticky-sidebar/dist/ResizeSensor.min.js"></script>
    <script type="text/javascript" src="lib_home/theia-sticky-sidebar/dist/theia-sticky-sidebar.min.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('.main-content, .sidebar').theiaStickySidebar({
                additionalMarginTop: 30
            });
        });
    </script>
</body>
</html>
