<!DOCTYPE html>
<html class="no-js" lang="en-US">

<head>
    <base href="{{ asset('/') }}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link rel="icon" href="http://democdn.mythemeshop.com/video/files/2014/12/favicon.png" type="image/x-icon" />

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>Home Page</title>

    <link rel='stylesheet' href='lib_home/assets/tipsy/tipsy.css' type='text/css' media='all' />
    <link rel='stylesheet' href='lib_home/css/wp-shortcode.css' type='text/css' media='all' />
    <link rel='stylesheet' href='lib_home/css/style.css' type='text/css' media='all' />
    <link rel='stylesheet' href='lib_home/css/video-styleshee.css' type='text/css' media='all' />
    <link rel='stylesheet' id='fontawesome-css'  href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='responsive-css'  href='lib_home/css/responsive.css' type='text/css' media='all' />

    <script type='text/javascript' src='lib_home/js/jquery-1.12.4.min.js'></script>
    <script type='text/javascript' src='lib_home/js/jquery-migrate-1.4.1.min.js'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var mts_customscript = {"responsive":"1","like":"1","ajaxurl":"","nav_menu":"primary"};
        /* ]]> */
    </script>
    <script type='text/javascript' src='lib_home/js/custom.js'></script>
    <script type='text/javascript' src='lib_home/assets/tipsy/jquery.tipsy.js'></script>
    <script type='text/javascript' src='lib_home/js/wp-shortcode.js'></script>

    <link href="//fonts.googleapis.com/css?family=Roboto:700|Roboto:normal&amp;subset=latin" rel="stylesheet" type="text/css">
    <link rel='stylesheet' href='lib_home/css/custom.css' type='text/css' media='all' />
</head>

<body>

<div class="main-container">
    
    @include('page_home.base.header')

    <div id="page">
        @yield('content')
    </div><!--#page-->

    @include('page_home.base.footer')
</div><!--.main-container-->

</body>
</html>