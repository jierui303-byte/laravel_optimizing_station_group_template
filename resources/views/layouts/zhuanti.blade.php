<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="{{asset('resources/views/home/bootstrap-3.3.7-dist/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>


<div class="row">
    <div class="col-lg-3">
        <ul class="list-group">
            <li class="list-group-item">php简介</li>
            <li class="list-group-item">PHP安装</li>
            <li class="list-group-item">PHP基础语法</li>
            <li class="list-group-item">PHP变量</li>
            <li class="list-group-item">PHP函数</li>
            <li class="list-group-item">PHP数组</li>
            <li class="list-group-item">PHP对象</li>
            <li class="list-group-item">PHP接口</li>
            <li class="list-group-item">PHP文件操作</li>
            <li class="list-group-item">PHP常量</li>
        </ul>
    </div>
    <div class="col-lg-9">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Panel title</h3>
            </div>
            <div class="panel-body">
                Panel content body
                <h4>被删除的文本</h4>
                <del>This line of text is meant to be treated as deleted text.</del>
                <h4>用户输入</h4>
                <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                </blockquote>
                To switch directories, type <kbd>cd</kbd> followed by the name of the directory.<br>
                To edit settings, press <kbd><kbd>ctrl</kbd> + <kbd>,</kbd></kbd>

            </div>
            <div class="panel-footer">Panel footer</div>
        </div>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{asset('resources/views/home/bootstrap-3.3.7-dist/js/bootstrap.min.js')}}"></script>
</body>
</html>