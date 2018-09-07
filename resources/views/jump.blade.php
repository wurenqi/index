<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>请求已经接受:）</title>

	</head>
<script type="text/javascript" src="plugins/jquery.min.js"></script>
<script type="text/javascript">
    $(function(){
        var url = "{{$url}}"
        var loginTime = parseInt($('.loginTime').text());
        var time = setInterval(function(){
            loginTime = loginTime-1;
            $('.loginTime').text(loginTime);
            if(loginTime==0){
                clearInterval(time);
                window.location.href=url;
            }
        },1000);
    })
</script>
	<body class="no-trans">
	<div id="applyFor" style="text-align: center; width: 500px; margin: 100px auto;">{{$message}},将在<span class="loginTime" style="color: red">{{$jumpTime}}</span>秒后跳转至<a href="{{$url}}">指定页面</a></div>
	</body>
</html>
