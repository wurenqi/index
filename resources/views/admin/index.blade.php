<!doctype html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>全心科技后台管理系统</title>
    <link rel="stylesheet" type="text/css" href="css/common.css"/>
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
</head>
<body>
@extends('admin/layout')
@section('content')
    <!--/sidebar-->
    <div class="main-wrap">
        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font">&#xe06b;</i><span>欢迎进入全心科技后台管理系统</span></div>
        </div>
        <div class="result-wrap">
            <form action="/info_ed" method="post" id="myform" name="myform">
                @csrf
                <div class="config-items">
                    <div class="config-title">
                        <h1><i class="icon-font">&#xe00a;</i>网站信息设置</h1>
                    </div>
                    <div class="result-content">
                        <table width="100%" class="insert-tab">
                            <tbody><tr>
                                <th width="15%">域名：</th>
                                <td><input type="text" id="" value="{{$info['url']}}" size="85" name="url" class="common-text"></td>
                            </tr>
                            <tr>
                                <th width="15%">联系邮箱：</th>
                                <td><input type="text" id="" value="{{$info['email']}}" size="85" name="email" class="common-text"></td>
                            </tr>
                            <tr>
                                <th>联系电话：</th>
                                <td><input type="text" id="" value="{{$info['phone']}}" size="85" name="phone" class="common-text"></td>
                            </tr>
                            <tr>
                                <th>联系手机：</th>
                                <td><input type="text" id="" value="{{$info['telphone']}}" size="85" name="telphone" class="common-text"></td>
                            </tr>
                            <tr>
                                <th>联系地址：</th>
                                <td><input type="text" id="" value="{{$info['address']}}" size="85" name="address" class="common-text"></td>
                            </tr>
                            <tr>
                                <th>站点标题：</th>
                                <td><input type="text" id="" value="{{$info['name']}}" size="85" name="name" class="common-text"></td>
                            </tr>
                            <tr>
                                <th>主页副标题：</th>
                                <td><input type="text" id="" value="{{$info['home_subtitle']}}" size="85" name="home_subtitle" class="common-text"></td>
                            </tr>
                            <tr>
                                <th>关于页副标题：</th>
                                <td><input type="text" id="" value="{{$info['about_subtitle']}}" size="85" name="about_subtitle" class="common-text"></td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <input type="hidden" value="siteConf.inc.php" name="file">
                                    <input type="submit" value="提交" class="btn btn-primary btn6 mr10">
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
</div>
@stop
</body>
</html>