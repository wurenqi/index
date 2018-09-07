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
            <div class="crumb-list"><i class="icon-font"></i></span><span>编辑项目</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="/edit" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        @csrf
                        <input class="common-text required" id="title" name="id" size="50" value="{{$example['Id']}}" type="hidden">
                        <tbody><tr>
                            <th width="120">标题：</th>
                            <td>
                                <input class="common-text required" id="title" name="title" size="50" value="{{$example['title']}}" type="text">
                            </td>
                        </tr>
                            <tr>
                                <th>副标题：</th>
                                <td>
                                    <input class="common-text required" id="subtitle" name="subtitle" size="50" value="{{$example['subtitle']}}" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th>分类：</th>
                                <td><input class="common-text" name="cate" size="50" value="{{$example['cate']}}" type="text"></td>
                            </tr>
                            <tr>
                                <th>是否展示：</th>
                                <td><input class="common-text" name="open" size="50" value="{{$example['open']}}" type="text"></td>
                            </tr>
                            <tr>
                                <th>图片：</th>
                                <td><img src="{{$example['img']}}"/><input name="img" id="" type="file"><!--<input type="submit" onclick="submitForm('/jscss/admin/design/upload')" value="上传图片"/>--></td>
                            </tr>
                            <tr>
                                <th>内容：</th>
                                <td><textarea name="content" class="common-textarea"  id="content" cols="30" style="width: 98%;" rows="10">{{$example['content']}}</textarea></td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                </form>
                                    <a href="{{ URL::route('example') }}"><button  class="btn btn-primary btn6 mr10" type="button">返回</button> </a>
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