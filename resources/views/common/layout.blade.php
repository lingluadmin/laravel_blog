<!doctype html>
<html>
<head>
    <title>FIGHT_ZERO | PAPA篮球赛 | @LU-BLOG </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description"  content="">
    <meta name="keywords"     content="">
    <meta name="viewport"     content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="renderer"     content="webkit">
    <meta http-equiv="Cache-Control"            content="no-siteapp"/>
    <meta name="mobile-web-app-capable"         content="yes">
    <meta name="apple-mobile-web-app-capable"   content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Amaze UI"/>
    <meta name="msapplication-TileImage"    content="assets/img/app-icon72x72@2x.png">
    <meta name="msapplication-TileColor"    content="#0e90d2">
    <link rel="icon" type="image/png"       href="assets/img/favicon.png">
    <link rel="icon" sizes="192x192"        href="assets/img/app-icon72x72@2x.png">
    <link rel="apple-touch-icon-precomposed"href="assets/img/app-icon72x72@2x.png">
    <link rel="stylesheet" href="assets/css/amazeui.min.css">
    <link rel="stylesheet" href="assets/css/app.css">

    <!-- include libraries(jQuery, bootstrap) -->
    <link   href="assets/css/bootstrap.css" rel="stylesheet">


    <!-- include summernote css/js-->
    <link   href="assets/css/summernote.css" rel="stylesheet">


    <!--[if (gte IE 9)|!(IE)]><!-->
    <script src="assets/js/jquery.min.js"></script>
    <!--<![endif]-->
    <!--[if lte IE 8 ]>
    <!--<script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script> -->
    <script src="assets/js/modernizr.js"></script>
    <script src="assets/js/amazeui.ie8polyfill.min.js"></script>
    <![endif]-->
    <script src="assets/js/amazeui.min.js"></script>
    <!--
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.7/summernote.js"></script>
    -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/summernote.js"></script>
</head>

<body id="blog">

    @yield('content')

    @section('footer')
        @include('common/footer')
    @show

</body>
</html>





