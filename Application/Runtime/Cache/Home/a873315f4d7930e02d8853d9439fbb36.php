<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>小鑫免费简历网</title>
		<meta content="width=device-width, initial-scale=1.0" name="viewport">
		<meta content="" name="keywords">
		<meta content="" name="description">

		<!-- Favicons -->
		<link href="<?php echo ($name); ?>/public/img/favicon.png" rel="icon">
		<link href="<?php echo ($name); ?>/public/img/apple-touch-icon.png" rel="apple-touch-icon">

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700"
		 rel="stylesheet">

		<!-- Bootstrap CSS File -->
		<link href="<?php echo ($name); ?>/public/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<!-- Libraries CSS Files -->
		<link href="<?php echo ($name); ?>/public/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link href="<?php echo ($name); ?>/public/lib/animate/animate.min.css" rel="stylesheet">
		<link href="<?php echo ($name); ?>/public/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
		<link href="<?php echo ($name); ?>/public/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
		<link href="<?php echo ($name); ?>/public/lib/magnific-popup/magnific-popup.css" rel="stylesheet">
		<link href="<?php echo ($name); ?>/public/lib/ionicons/css/ionicons.min.css" rel="stylesheet">

		<!-- Main Stylesheet File -->
		<link href="<?php echo ($name); ?>/public/css/style.css" rel="stylesheet">
	</head>

	<body id="body">

		<!--==========================
    顶栏目
  ============================-->
		<section id="topbar" class="d-none d-lg-block">
			<div class="container clearfix">
				<div class="contact-info float-left">
					<i class="fa fa-envelope-o"></i> <a href="mailto:2013182991@qq.com">2013182991@qq.com</a>
					<i class="fa fa-phone"></i> +182 5582 8479
				</div>
				<div class="social-links float-right">
					<a href="mailto:2013182991@qq.com" class="twitter"><i class="fa fa-twitter"></i></a>
					<a href="mailto:2013182991@qq.com" class="facebook"><i class="fa fa-facebook"></i></a>
					<a href="mailto:2013182991@qq.com" class="google-plus"><i class="fa fa-google-plus"></i></a>
					<a href="mailto:2013182991@qq.com" class="linkedin"><i class="fa fa-linkedin"></i></a>
					<a href="mailto:2013182991@qq.com" class="instagram"><i class="fa fa-instagram"></i></a>
				</div>
			</div>
		</section>
		<!--==========================
    头部
  ============================-->
		<header id="header">
			<div class="container">

				<div id="logo" class="pull-left">
					<h1><a href="#body" class="scrollto"><span>小鑫</span>免费简历网</a></h1>
					<!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
				</div>

				<nav id="nav-menu-container">
					<ul class="nav-menu">
						<li><a href="<?php echo ($name); ?>/home/index/index">首页</a></li>
						<li class="menu-active"><a href="<?php echo ($name); ?>/home/index/contact">留言板</a></li>
					</ul>
				</nav><!-- #nav-menu-container -->
			</div>
		</header><!-- #header -->

		<!--==========================
    Page Banner Section
  ============================-->
		<section id="innerBanner">
			<div class="inner-content">
				<h2><span>留言板</span><br>我们的进步源于你们的支持！</h2>
				<div>
				</div>
			</div>
		</section><!-- #Page Banner -->

		<main id="main">


			<!--==========================
      Contact Section
    ============================-->
			<section id="contact" class="wow fadeInUp">
				<div class="container">
					<div class="row contact-info">
						<div class="col-lg-5">
							<div class="contact-address">
								<i class="ion-ios-location-outline"></i>
								<h3>江苏农林职业技术学院</h3>
								<address>江苏省镇江市句容市文昌东路19号</address>
							</div>
							<div class="contact-phone">
								<i class="ion-ios-telephone-outline"></i>
								<h3>联系我们</h3>
								<p><a href="tel:+155895548855">+182 5582 8479</a></p>
							</div>
							<div class="contact-email">
								<i class="ion-ios-email-outline"></i>
								<h3>邮箱</h3>
								<p><a href="mailto:info@example.com">2013182991@qq.com</a></p>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="container">
								<div class="form">
									<!-- Form itself -->
									<form name="sentMessage" class="well" id="contactForm" novalidate action="<?php echo ($name); ?>/home/index/contact" method="post">
										<div class="control-group">
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Full Name" id="name" required
												 data-validation-required-message="Please enter your name"  name="name"/>
												<p class="help-block"></p>

											</div>
										</div>
										<div class="form-group">
											<div class="controls">
												<input type="email" class="form-control" placeholder="Email" id="email" required
												 data-validation-required-message="Please enter your email" name="email" />
											</div>
										</div>

										<div class="form-group">
											<div class="controls">
												<textarea rows="10" cols="100" class="form-control" placeholder="Message" id="message" required
												 data-validation-required-message="Please enter your message" minlength="5"
												 data-validation-minlength-message="Min 5 characters" maxlength="999" style="resize:none" name="text"></textarea>
											</div>
										</div>
										<div id="success"> </div> <!-- For success/fail messages -->
										<button type="submit" class="btn btn-primary pull-right">发布</button><br />
									</form>
								</div>

							</div>
						</div>


					</div>
				</div>

				<div class="container mb-4 map">
					<iframe src="https://map.baidu.com/poi/%E6%B1%9F%E8%8B%8F%E5%86%9C%E6%9E%97%E8%81%8C%E4%B8%9A%E6%8A%80%E6%9C%AF%E5%AD%A6%E9%99%A2/@13267008.49867052,3736452.3555876683,14.55z?uid=2a7a25ec0d0d27636c3e1bf3&ugc_type=3&ugc_ver=1&device_ratio=2&compat=1&querytype=detailConInfo&da_src=shareurl"
					 width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>

			</section><!-- #contact -->

		</main>

		<!--==========================
    底部
  ============================-->
		<footer id="footer">
			<div class="container">
				<div class="copyright">
					隆鑫工作室 &copy; 2019.11.7 &nbsp;创始人： &nbsp;连思鑫
				</div>
				<div class="credits">
				</div>
			</div>
		</footer><!-- #footer -->

		<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

		<!-- JavaScript  -->
		<script src="<?php echo ($name); ?>/public/lib/jquery/jquery.min.js"></script>
		<script src="<?php echo ($name); ?>/public/lib/jquery/jquery-migrate.min.js"></script>
		<script src="<?php echo ($name); ?>/public/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="<?php echo ($name); ?>/public/lib/easing/easing.min.js"></script>
		<script src="<?php echo ($name); ?>/public/lib/superfish/hoverIntent.js"></script>
		<script src="<?php echo ($name); ?>/public/lib/superfish/superfish.min.js"></script>
		<script src="<?php echo ($name); ?>/public/lib/wow/wow.min.js"></script>
		<script src="<?php echo ($name); ?>/public/lib/owlcarousel/owl.carousel.min.js"></script>
		<script src="<?php echo ($name); ?>/public/lib/magnific-popup/magnific-popup.min.js"></script>
		<script src="<?php echo ($name); ?>/public/lib/sticky/sticky.js"></script>
		<script src="<?php echo ($name); ?>/public/contact/jqBootstrapValidation.js"></script>
		<script src="<?php echo ($name); ?>/public/contact/contact_me.js"></script>
		<script src="<?php echo ($name); ?>/public/js/main.js"></script>
	</body>
</html>