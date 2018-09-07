<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>{{$info['name']}}</title>
		<meta name="description" content="{{$info['name']}} a Bootstrap-based, Responsive HTML5 Template">
		<meta name="author" content="htmlcoder.me">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Favicon -->
		<link rel="shortcut icon" href="images/favicon.ico">

		<!-- Web Fonts -->
		{{--<link href='http://fonts.useso.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>--}}
		{{--<link href='http://fonts.useso.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>--}}

		<!-- Bootstrap core CSS -->
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet">

		<!-- Font Awesome CSS -->
		<link href="fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

		<!-- Plugins -->
		<link href="css/animations.css" rel="stylesheet">

		<!-- Worthy core CSS file -->
		<link href="css/style.css" rel="stylesheet">

		<!-- Custom css --> 
		<link href="css/custom.css" rel="stylesheet">
	</head>

	<body class="no-trans">
		<!-- scrollToTop -->
		<!-- ================ -->
		<div class="scrollToTop"><i class="icon-up-open-big"></i></div>

		<!-- header start -->
		<!-- ================ --> 
		<header class="header fixed clearfix navbar navbar-fixed-top">
			<div class="container">
				<div class="row">
					<div class="col-md-4">

						<!-- header-left start -->
						<!-- ================ -->
						<div class="header-left clearfix">

							<!-- logo -->
							<div class="logo smooth-scroll">
								<a href="#banner"><img id="logo" src="images/logo.png" alt="{{$info['name']}}"></a>
							</div>

							<!-- name-and-slogan -->
							<div class="site-name-and-slogan smooth-scroll">
								<div class="site-name"><a href="#banner">{{$info['name']}}</a></div>
								<div class="site-slogan">{{$info['url']}}</div>
							</div>

						</div>
						<!-- header-left end -->

					</div>
					<div class="col-md-8">

						<!-- header-right start -->
						<!-- ================ -->
						<div class="header-right clearfix">

							<!-- main-navigation start -->
							<!-- ================ -->
							<div class="main-navigation animated">

								<!-- navbar start -->
								<!-- ================ -->
								<nav class="navbar navbar-default" role="navigation">
									<div class="container-fluid">

										<!-- Toggle get grouped for better mobile display -->
										<div class="navbar-header">
											<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
												<span class="sr-only">Toggle navigation</span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
											</button>
										</div>

										<!-- Collect the nav links, forms, and other content for toggling -->
										<div class="collapse navbar-collapse scrollspy smooth-scroll" id="navbar-collapse-1">
											<ul class="nav navbar-nav navbar-right">
												<li class="active"><a href="#banner">主页</a></li>
												<li><a href="#about">全心科技</a></li>
												<li><a href="#services">服务项目</a></li>
												<li><a href="#portfolio">合作伙伴</a></li>
												<li><a href="#contact">联系我们</a></li>
											</ul>
										</div>

									</div>
								</nav>
								<!-- navbar end -->

							</div>
							<!-- main-navigation end -->

						</div>
						<!-- header-right end -->

					</div>
				</div>
			</div>
		</header>
		<!-- header end -->

		<!-- banner start -->
		<!-- ================ -->
		<div id="banner" class="banner">
			<div class="banner-image"></div>
			<div class="banner-caption">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 object-non-visible" data-animation-effect="fadeIn">
							<h1 class="text-center"><span>{{$info['name']}}，全心全意</span></h1>
							<p class="lead text-center">{{$info['home_subtitle']}}</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- banner end -->

		<!-- section start -->
		<!-- ================ -->
		<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 id="about" class="title text-center"><span>{{$info['name']}}</span></h1>
						<p class="lead text-center">{{$info['about_subtitle']}}</p>
						<div class="space"></div>
						<div class="row">
							{{--<div class="col-md-6">--}}
								{{--<img src="images/section-image-1.png" alt="">--}}
								{{--<div class="space"></div>--}}
							{{--</div>--}}
							<div class="col-md-12">
								<ul class="list-unstyled" style="text-align:center">
									<li><h4>如果你正有一个伟大的想法</h4></li>
									<li><h4>如果你想要一个自己的程序</h4></li>
									<li><h4>请联系我们！</h4></li>
									<li><h4>我们在等你！</h4></li>
									<li><h4>全心科技，全心为您服务</h4></li>
								</ul>
							</div>
						</div>
						<div class="space"></div>
						{{--<h2>Becessitatibus quae beatae possimus ullam</h2>--}}
						{{--<div class="row">--}}
							{{--<div class="col-md-6">--}}
								{{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi adipisci illo, voluptatum ipsam fuga error commodi architecto, laudantium culpa tenetur at id, beatae placeat deserunt iure quas voluptas fugit eveniet.</p>--}}
								{{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo ducimus explicabo quibusdam temporibus deserunt doloremque pariatur ea, animi a. Delectus similique atque eligendi, enim vel reiciendis deleniti neque aliquid, sit?</p>--}}
								{{--<p>Vitae dolores quam magnam accusantium nam, voluptatibus expedita delectus, dolorum odio magni ut nemo nihil ex earum pariatur molestias velit eveniet, facere autem saepe aut. Ut minima itaque porro facere. Cumque vitae autem, dignissimos molestiae necessitatibus culpa aliquam deleniti soluta sunt voluptatibus tenetur, unde dolorem eligendi doloribus quibusdam facere totam. Possimus atque deserunt numquam aliquam magnam, facilis officiis illo alias ipsa voluptas laborum, praesentium eveniet nobis velit voluptatem odio eligendi, corporis et iste distinctio! Repellendus, id, ad.</p>--}}
							{{--</div>--}}
							{{--<div class="col-md-6">--}}
								{{--<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">--}}
									{{--@foreach($stage as $k => $stage)--}}
									{{--<div class="panel panel-default">--}}
										{{--<div class="panel-heading" role="tab" id="heading{{$stage['num']}}">--}}
											{{--<h4 class="panel-title">--}}
												{{--@if($k==0)--}}
													{{--<a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$stage['num']}}" aria-expanded="true" aria-controls="collapse{{$stage['num']}}">--}}
												{{--@else--}}
													{{--<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$stage['num']}}" aria-expanded="false" aria-controls="collapse{{$stage['num']}}">--}}
												{{--@endif--}}
													{{--{{$stage['title']}}--}}
												{{--</a>--}}
											{{--</h4>--}}
										{{--</div>--}}
										{{--@if($k==0)--}}
											{{--<div id="collapse{{$stage['num']}}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading{{$stage['num']}}">--}}
										{{--@else--}}
											{{--<div id="collapse{{$stage['num']}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{$stage['num']}}">--}}
										{{--@endif--}}
												{{--<div class="panel-body">--}}
													{{--{{$stage['content']}}--}}
												{{--</div>--}}
											{{--</div>--}}
									{{--</div>--}}
									{{--@endforeach--}}
								{{--</div>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</div>--}}
				</div>
			</div>
		</div>
		<!-- section end -->

		<!-- section start -->
		<!-- ================ -->
		<div class="section translucent-bg bg-image-1 blue">
			<div class="container object-non-visible" data-animation-effect="fadeIn">
				<h1 id="services"  class="text-center title">服务项目</h1>
				<div class="space"></div>
				<div class="row">
					<div class="col-sm-6">
						<div class="media" style="float:right;">
							<div class="media-body text-right">
								<h3 class="media-heading">Android 移动端开发</h3>
								<p><h5 style="text-transform:none;">Android 应用程序开发</h5></p>
							</div>
							<div class="media-right">
								<i class="fa fa-android"></i>
							</div>
						</div>
						<div class="media" style="float:right;">
							<div class="media-body text-right">
								<h3 class="media-heading">iOS 移动端开发</h3>
								<p><h5>iPhone、iPad、iWatch应用程序开发</h5></p>
							</div>
							<div class="media-right">
								<i class="fa fa-tablet"></i>
							</div>
						</div>
						<div class="media"style="float:right;">
							<div class="media-body text-right">
								<h3 class="media-heading">Web 应用开发</h3>
								<p><h5>企业官网、CMS、论坛、RESTful API、后台管理系统</h5></p>
							</div>
							<div class="media-right">
								<i class="fa fa-desktop"></i>
							</div>
						</div>
						<div class="media"style="float:right;">
							<div class="media-body text-right">
								<h3 class="media-heading">微信开发</h3>
								<p><h5>微信服务号、企业号、开放平台第三方应用开发</h5></p>
							</div>
							<div class="media-right">
								<i class="fa fa-wechat"></i>
							</div>
						</div>
					</div>
					<div class="space visible-xs"></div>
					<div class="col-sm-6">
						<div class="media">
							<div class="media-left">
								<i class="fa fa-line-chart"></i>
							</div>
							<div class="media-body">
								<h3 class="media-heading">技术咨询</h3>
								<p><h5>提供技术架构、工作流程等解决方案</h5></p>
							</div>
						</div>
						<div class="media">
							<div class="media-left">
								<i class="fa fa-lightbulb-o"></i>
							</div>
							<div class="media-body">
								<h3 class="media-heading">产品设计</h3>
								<p><h5>深入业务，用户研究、产品策略，产品原型图产出</h5></p>
							</div>
						</div>
						<div class="media">
							<div class="media-left">
								<i class="fa fa-magic"></i>
							</div>
							<div class="media-body">
								<h3 class="media-heading">交互与视觉设计</h3>
								<p><h5>为产品与用户之间提供最好最有效的沟通方式</h5></p>
							</div>
						</div>
						<div class="media">
							<div class="media-left">
								<i class="fa fa-heart-o"></i>
							</div>
							<div class="media-body">
								<h3 class="media-heading">精益求精，精诚服务</h3>
								<p><h5>重视服务质量，视交付日期和质量为生命</h5></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- section end -->

		<!-- section start -->
		<!-- ================ -->
		<div class="default-bg space blue">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<h1 class="text-center">Let's Work Together!</h1>
					</div>
				</div>
			</div>
		</div>
		<!-- section end -->
        <div class="copyrights">Collect from </div>

		<!-- section start -->
		<!-- ================ -->
		<div class="section">
			<div class="container">
				<h1 class="text-center title" id="portfolio">合作伙伴</h1>
				<div class="separator"></div>
				<br>
				<div class="row object-non-visible" data-animation-effect="fadeIn">
					<div class="col-md-12">

						<!-- portfolio items start -->
						<div class="isotope-container row grid-space-20">
							@foreach($example as $k => $example)
							<div class="col-sm-6 col-md-3 isotope-item">
								<div class="image-box">
									<div class="overlay-container">
										<img src="{{$example['img']}}" style="width: 345px;height: 230px" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-{{$k+1}}">
											<i class="fa fa-search-plus"></i>
											<span>{{$example['cate']}}</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-{{$k+1}}">{{$example['title']}}</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-{{$k+1}}" tabindex="-1" role="dialog" aria-labelledby="project-{{$k+1}}-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<h4 class="modal-title" id="project-{{$k+1}}-label">{{$example['title']}}</h4>
											</div>
											<div class="modal-body">
												<h3>{{$example['subtitle']}}</h3>
												<div class="row">
													<div class="col-md-6">
														<p>{{$example['content']}}</p>
													</div>
													<div class="col-md-6">
														<img src="{{$example['img']}}" alt="">
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>
							@endforeach
						</div>
						<!-- portfolio items end -->
					
					</div>
				</div>
			</div>
		</div>
		<!-- section end -->


		<!-- footer start -->
		<!-- ================ -->
		<footer id="footer">

			<!-- .footer start -->
			<!-- ================ -->
			<div class="footer section">
				<div class="container">
					<h1 class="title text-center" id="contact">联系我们</h1>
					<div class="space"></div>
					<div class="row">
						<div class="col-sm-6">
							<div class="footer-content">
								<p class="large"><h2>全心生活（北京）科技有限公司</h2></p>
								<ul class="list-icons">
									<li><i class="fa fa-map-marker pr-10"></i>{{$info['address']}}</li>
									<li><i class="fa fa-phone pr-10"></i>{{$info['telphone']}}</li>
									<li><i class="fa fa-fax pr-10"></i>{{$info['phone']}}</li>
									<li><i class="fa fa-envelope-o pr-10"></i>{{$info['email']}}</li>
								</ul>

							</div>
						</div>
						<div class="col-sm-6">
							<div class="footer-content">
								<form role="form" id="footer-form" action="/message" method='POST'>
									<input type="hidden" name="_token" value="{{csrf_token()}}">
									<div class="form-group has-feedback">
										<label class="sr-only" for="name">Name</label>
										<input type="text" class="form-control" id="name2" placeholder="姓名" name="name" required>
										<i class="fa fa-user form-control-feedback"></i>
									</div>
									<div class="form-group has-feedback">
										<label class="sr-only" for="email">phone</label>
										<input type="phone" class="form-control" id="email2" placeholder="手机" name="phone" required>
										<i class="fa fa-phone form-control-feedback"></i>
									</div>
									<div class="form-group has-feedback">
										<label class="sr-only" for="email">title</label>
										<input type="title" class="form-control" id="title2" placeholder="标题" name="title" required>
										<i class="fa fa-envelope form-control-feedback"></i>
									</div>
									<div class="form-group has-feedback">
										<label class="sr-only" for="message">Message</label>
										<textarea class="form-control" rows="8" id="message2" placeholder="需求" name="message" required></textarea>
										<i class="fa fa-pencil form-control-feedback"></i>
									</div>
									<input type="submit" value="Send" class="btn btn-default">
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- .footer end -->

			<!-- .subfooter start -->
			<!-- ================ -->
			<div class="subfooter">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<p class="text-center">Copyright &copy; 2015.Company name All rights reserved.More Templates  - Collect from </p>
						</div>
					</div>
				</div>
			</div>
			<!-- .subfooter end -->

		</footer>
		<!-- footer end -->

		<!-- JavaScript files placed at the end of the document so the pages load faster
		================================================== -->
		<!-- Jquery and Bootstap core js files -->
		<script type="text/javascript" src="plugins/jquery.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

		<!-- Modernizr javascript -->
		<script type="text/javascript" src="plugins/modernizr.js"></script>

		<!-- Isotope javascript -->
		<script type="text/javascript" src="plugins/isotope/isotope.pkgd.min.js"></script>
		
		<!-- Backstretch javascript -->
		<script type="text/javascript" src="plugins/jquery.backstretch.min.js"></script>

		<!-- Appear javascript -->
		<script type="text/javascript" src="plugins/jquery.appear.js"></script>

		<!-- Initialization of Plugins -->
		<script type="text/javascript" src="js/template.js"></script>

		<!-- Custom Scripts -->
		<script type="text/javascript" src="js/custom.js"></script>

	</body>
</html>
