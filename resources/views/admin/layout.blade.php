<!doctype html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>全心科技后台管理系统</title>
    <link rel="stylesheet" type="text/css" href="css/common.css"/>
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a href="{{ URL::route('index') }}" target="_blank">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="{{ URL::route('exit') }}">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <ul class="sub-menu">
                        <li><a href="{{ URL::route('admin') }}"><i class="icon-font">&#xe008;</i>网站信息</a></li>
                        <li><a href="{{ URL::route('message') }}"><i class="icon-font">&#xe004;</i>需求管理</a></li>
                        <li><a href="{{ URL::route('example') }}"><i class="icon-font">&#xe006;</i>项目管理</a></li>
                        <li><a href="{{ URL::route('insert') }}"><i class="icon-font">&#xe005;</i>新增项目</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

@yield('content')
    <!--/sidebar-->

    <!--/main-->
</div>
</body>
</html>