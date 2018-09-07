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
            <div class="crumb-list"><i class="icon-font"></i><span>需求详情</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                    <table class="insert-tab" width="100%">
                        @csrf
                        <input class="common-text required" id="title" name="id" size="50" value="" type="hidden">
                        <tbody><tr>
                            <th width="120">姓名：</th>
                            <td>
                                {{$message['name']}}
                            </td>
                        </tr>
                            <tr>
                                <th>手机：</th>
                                <td>
                                    {{$message['phone']}}
                                </td>
                            </tr>
                            <tr>
                                <th>标题：</th>
                                <td>
                                    {{$message['title']}}
                                </td>
                            </tr>
                            <tr>
                                <th>内容：</th>
                                <td>
                                    {{$message['message']}}
                                </td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <a href="{{ URL::route('message') }}"><input class="btn btn-primary btn6 mr10" value="返回" type="submit"> </a>
                                </td>
                            </tr>
                        </tbody></table>
            </div>
        </div>
    </div>
    <!--/main-->
</div>
@stop
</body>
</html>