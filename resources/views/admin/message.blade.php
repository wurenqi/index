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
@extends('admin/layout')
@section('content')
    <!--/sidebar-->
    <div class="main-wrap">
        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><span class="crumb-name">需求管理</span></div>
        </div>
        <div class="result-wrap">
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th>ID</th>
                            <th>标题</th>
                            <th>姓名</th>
                            <th>手机</th>
                            <th>添加时间</th>
                            <th>操作</th>
                        </tr>
                        @foreach($message as $message)
                            <tr>
                                <td>{{$message['Id']}}</td>
                                <td>{{$message['title']}}</td>
                                <td>{{$message['name']}}</td>
                                <td>{{$message['phone']}}</td>
                                <td>{{date('Y-m-d H:i:s',$message['time'])}}</td>
                                <td>
                                    <a class="link-update" href="{{ URL::route('detail') }}?id={{$message['Id']}}">查看</a>
                                    <a class="link-del" href="{{ URL::route('delete') }}?id={{$message['Id']}}&type=message">删除</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
        </div>
        <div class="result-wrap">
            <div class="crumb-list"><i class="fa fa-trash icon-font" aria-hidden="true"></i><span class="crumb-name">回收站</span></div>
            <div class="result-content"  style="margin-top: 12px;">
                <table class="result-tab" width="100%">
                    <tr>
                        <th>ID</th>
                        <th>标题</th>
                        <th>姓名</th>
                        <th>手机</th>
                        <th>添加时间</th>
                        <th>操作</th>
                    </tr>
                    @foreach($message_del as $message_del)
                        <tr>
                            <td>{{$message_del['Id']}}</td>
                            <td>{{$message_del['title']}}</td>
                            <td>{{$message_del['name']}}</td>
                            <td>{{$message_del['phone']}}</td>
                            <td>{{date('Y-m-d H:i:s',$message_del['time'])}}</td>
                            <td>
                                <a class="link-update" href="{{ URL::route('detail') }}?id={{$message_del['Id']}}">查看</a>
                                <a class="link-del" href="{{ URL::route('delete') }}?id={{$message_del['Id']}}&type=message">删除</a>
                                <a class="link-del" href="{{ URL::route('recovery') }}?id={{$message_del['Id']}}&type=message">恢复</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <!--/main-->
</div>
@stop
</body>
</html>