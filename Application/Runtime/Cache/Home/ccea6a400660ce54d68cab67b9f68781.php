<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
       <meta charset="utf-8">
		<title>小鑫免费简历网</title>
		<meta content="width=device-width, initial-scale=1.0" name="viewport">
		<meta content="" name="keywords">
		<meta content="" name="description">
		<link href="<?php echo ($name); ?>/public/css/login_style.css" rel="stylesheet" type="text/css" media="all" />

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
		<script>$(document).ready(function(c) {
			$('.alert-close').on('click', function(c){
				$('.message').fadeOut('slow', function(c){
					$('.message').remove();
				});
			});
		});
		</script>
    </head>
    <body>
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
						<li><a href="<?php echo ($name); ?>/home/index/contact">留言板</a></li>
					</ul>
				</nav><!-- #nav-menu-container -->
			</div>
		</header><!-- #header -->
                
                <!--==========================
    Page Banner Section
  ============================-->
		<section id="innerBanner">
			<div class="inner-content">
				<h2><span>登陆</span><br>欢迎登陆小鑫免费简历</h2>
				<div>
				</div>
			</div>
		</section><!-- #Page Banner -->


		<!--=====
		form表单
		=========-->
		<div class="message warning" style="margin-bottom: 50px; margin-top: 50px">
			<div class="inset">
				<form method="post" action="<?php echo ($name); ?>/home/index/login">
					<li>
						<input type="text" name="uername" style="border: none" class="text" value="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '用户名';}"><a href="###" class=" icon user"></a>
					</li>
					<div class="clear"> </div>
					<li>
						<input type="password" name="password" style="border: none" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}"> <a href="###" class="icon lock"></a>
					</li>
					<div class="clear"> </div>
					<li>
						<input type="text" name="yzm" style="border: none" class="text" value="验证码" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '验证码';}">
					</li>
					<div class="clear"> </div>
					<li style="height: 100px">
						<img alt="点击更换" src="<?php echo ($name); ?>/home/index/yzm" style="height: 100px; width: 100%" onclick="this.src=this.src+'?'+Math.random()">
					</li>
					<div class="clear"> </div>
					<div class="submit">
						<input type="submit" style="border: none" onclick="myFunction()" value="Sign in" >
						<h4><a href="<?php echo ($name); ?>/home/index/lostpassword">Lost your Password ?</a></h4>
						<div class="clear">  </div>
					</div>

				</form>
			</div>
		</div>



		<!--==========================
          加入我们
        ============================-->
		<section id="call-to-action" class="wow fadeInUp">
			<div class="container">
				<div class="row">
					<div class="col-lg-9 text-center text-lg-left">
						<h3 class="cta-title">加入我们</h3>
						<p class="cta-text">
							热情招揽PS,HTML5,PHP,JS,CSS等方面的大神。因为我做这个网站是为了服务大家,不会向大家收取任何费用。<br />
							所以也毫无收入可言,因此加入我们的小伙伴们,你们懂的哟,我们的创造的动力源于热情。
						</p>
					</div>
					<div class="col-lg-3 cta-btn-container text-center">
						<a class="cta-btn align-middle" href="###">加入我们</a>
					</div>
				</div>

			</div>
		</section><!-- #call-to-action -->


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