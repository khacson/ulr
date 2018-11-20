<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="Magz is a HTML5 & CSS3 magazine template is based on Bootstrap 3.">
		<meta name="author" content="Kodinger">
		<meta name="keyword" content="magz, html5, css3, template, magazine template">
		<!-- Shareable -->
		<meta property="og:title" content="HTML5 & CSS3 magazine template is based on Bootstrap 3" />
		<meta property="og:type" content="article" />
		<meta property="og:url" content="http://github.com/nauvalazhar/Magz" />
		<meta property="og:image" content="https://raw.githubusercontent.com/nauvalazhar/Magz/master/images/preview.png" />
		<title>Đăng ký</title>
		<!-- Bootstrap -->
		<link rel="stylesheet" href="scripts/bootstrap/bootstrap.min.css">
		<!-- IonIcons -->
		<link rel="stylesheet" href="scripts/ionicons/css/ionicons.min.css">
		<!-- Toast -->
		<link rel="stylesheet" href="scripts/toast/jquery.toast.min.css">
		<!-- OwlCarousel -->
		<link rel="stylesheet" href="scripts/owlcarousel/dist/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="scripts/owlcarousel/dist/assets/owl.theme.default.min.css">
		<!--<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">-->
		<!-- Magnific Popup -->
		<link rel="stylesheet" href="scripts/magnific-popup/dist/magnific-popup.css">
		<link rel="stylesheet" href="scripts/sweetalert/dist/sweetalert.css">
		<!-- Custom style -->
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/skins/all.css">
		<link rel="stylesheet" href="css/custom.css">
		<link rel="stylesheet" type="text/css" href="scripts/select2/select2.css"/>
		<link rel="stylesheet" type="text/css" href="scripts/select2/select2-metronic.css"/>
		<script type="text/javascript" src="js/jquery.js"></script>
		<style>
			.nav-tabs > li {
				opacity: 0.8;
			}
		</style>
	</head>
	<body>
		<header class="primary">
			<?php include('header.php');?>
		</header>
		<section class="login first grey">
			<div class="container">
				<div class="box-wrapper">				
					<div class="box box-border">
						<div class="box-body form-register">
							<h4>Đăng nhập</h4>
							<form>
								<div class="form-group">
									<label>Số điện thoại hoạc email</label>
									<input type="text" name="username" class="form-control">
								</div>
								<div class="form-group">
									<label class="fw">Mật khẩu
										<a href="forgot.html" class="pull-right">Quên mật khẩu?</a>
									</label>
									<input type="password" name="password" class="form-control">
								</div>
								<div class="form-group text-right">
									<button class="btn btn-primary btn-block">Đăng nhập</button>
								</div>
								<div class="form-group text-center">
									<span class="text-muted">Bạn chưa có tài khoản?</span> <a href="register.html">Tạo tài khoản</a>
								</div>
								<div class="title-line">
									Hoạc
								</div>
								<div class="row">
									<div class="col-md-6">
										<a href="#" class="btn btn-social btn-block facebook"><i class="ion-social-facebook"></i>Facebook</a>
									</div>
									<div class="col-md-6">
										<a href="#" class="btn btn-social btn-block googleplus "><i class="ion-social-googleplus"></i> Google+</a>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Start footer -->
		<footer class="footer">
			<?php include('footer.php');?>
		</footer>
		<!-- End Footer -->
		<!-- JS -->
		<script src="js/jquery.migrate.js"></script>
		<script src="scripts/bootstrap/bootstrap.min.js"></script>
		<script>var $target_end=$(".best-of-the-week");</script>
		<script src="scripts/jquery-number/jquery.number.min.js"></script>
		<!--<script src="lib/owlcarousel/owl.carousel.min.js"></script>-->
		<script src="scripts/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
		<script src="scripts/easescroll/jquery.easeScroll.js"></script>
		<script src="scripts/sweetalert/dist/sweetalert.min.js"></script>
		<script src="scripts/toast/jquery.toast.min.js"></script>
		<script src="js/e-magz.js"></script>
		<script src="scripts/owlcarousel/dist/owl.carousel.min.js"></script>
		<script type="text/javascript" src="scripts/select2/select2.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		<script type="text/javascript">
			handleSelect2();
		</script>
	</body>
</html>