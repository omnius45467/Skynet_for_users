<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Uno</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/img/favicon.ico" rel="shortcut icon">
    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/jquery.pagepiling.css" rel="stylesheet">
    <link href="/css/selectik.css" rel="stylesheet">
    <link href="/css/jquery.mCustomScrollbar.css" rel="stylesheet">
    <link href="/css/jquery.fancybox.css" rel="stylesheet">
    <link href="/css/owl.carousel.css" rel="stylesheet">
    <link href="/css/animate.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
</head>
<body class="classic-template">
@include('components/loader')
@include('components/backend_header')

<div class="general-block pagepiling">
    @yield('content')

</div><!-- general-block -->

<!--[if (!IE)|(gt IE 8)]><!-->
<script src="/js/jquery-2.1.3.min.js"></script>
<!--<![endif]-->

<!--[if lte IE 8]>
<script src="/js/jquery-1.9.1.min.js"></script>
<![endif]-->
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.carouFredSel-6.2.1-packed.js"></script>
<script src="/js/jquery.fancybox.js"></script>
<script src="/js/jquery.mCustomScrollbar.js"></script>
<script src="/js/jquery.mousewheel.js"></script>
<script src="/js/jquery.pagepiling.js"></script>
<script src="/js/jquery.selectik.min.js"></script>
<script src="/js/jquery.touchwipe.min.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/responsiveslides.min.js"></script>
<script src="/js/main.js"></script>
</body>
</html>
