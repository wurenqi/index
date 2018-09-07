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
            <div class="crumb-list"><i class="icon-font"></i><span class="crumb-name">项目管理</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <table class="result-tab" width="100%">
                    <tr>
                        <th>ID</th>
                        <th>标题</th>
                        <th>副标题</th>
                        <th>图片地址</th>
                        <th>分类</th>
                        <th>是否展示</th>
                        <th>更新时间</th>
                        <th>操作</th>
                    </tr>
                    @foreach($example as $example)
                        <tr>
                            <td>{{$example['Id']}}</td>
                            <td>{{$example['title']}}</td>
                            <td>{{$example['subtitle']}}</td>
                            <td><img src ="{{$example['img']}}" style="height: 40px"/></td>
                            <td>{{$example['cate']}}</td>
                            <td>{{$example['open']}}</td>
                            <td>{{date('Y-m-d H:i:s',$example['time'])}}</td>
                            <td>
                                <a class="link-update" href="{{ URL::route('edit') }}?id={{$example['Id']}}">编辑</a>
                                <a class="link-del" href="{{ URL::route('delete') }}?id={{$example['Id']}}&type=example">删除</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
        <div class="result-wrap">
            <div class="crumb-list"><i class="fa fa-trash icon-font" aria-hidden="true"></i><span class="crumb-name">回收站</span></div>
            <div class="result-content" style="margin-top: 12px;">
                <table class="result-tab" width="100%">
                    <tr>
                        <th>ID</th>
                        <th>标题</th>
                        <th>副标题</th>
                        <th>图片地址</th>
                        <th>分类</th>
                        <th>是否展示</th>
                        <th>更新时间</th>
                        <th>操作</th>
                    </tr>
                    @foreach($example_del as $example_del)
                        <tr>
                            <td>{{$example_del['Id']}}</td>
                            <td>{{$example_del['title']}}</td>
                            <td>{{$example_del['subtitle']}}</td>
                            <td><img src ="{{$example_del['img']}}" style="height: 40px"/></td>
                            <td>{{$example_del['cate']}}</td>
                            <td>{{$example_del['open']}}</td>
                            <td>{{date('Y-m-d H:i:s',$example_del['time'])}}</td>
                            <td>
                                <a class="link-update" href="{{ URL::route('edit') }}?id={{$example_del['Id']}}">编辑</a>
                                <a class="link-del" href="{{ URL::route('delete') }}?id={{$example_del['Id']}}&type=example">删除</a>
                                <a class="link-del" href="{{ URL::route('recovery') }}?id={{$example_del['Id']}}&type=example">恢复</a>
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