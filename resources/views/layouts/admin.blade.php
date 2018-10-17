<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('resources/admin/style/css/ch-ui.admin.css')}}">
    <link rel="stylesheet" href="{{asset('resources/admin/style/font/css/font-awesome.min.css')}}">
    <script type="text/javascript" src="{{asset('resources/admin/style/js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('resources/admin/style/js/ch-ui.admin.js')}}"></script>
    <script type="text/javascript" src="{{asset('resources/org/layer/layer.js')}}"></script>
    <!-- 引入 ECharts 文件 -->
    <script src="{{asset('resources/admin/style/js/echarts.min.js')}}"></script>
</head>
<body>
    @yield('content')
</body>
</html>