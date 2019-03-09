<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
		<meta name="description" content="<?=$description; ?>">
		<meta name="author" content="<?=$author; ?>">
		<meta name="keyword" content="<?=$keywords; ?>">
		<!-- Shareable -->
		<meta property="og:title" content="<?=$title; ?>" />
		<meta property="og:type" content="article" />
		<meta property="og:url" content="<?=$url; ?>" />
		<meta property="og:image" content="<?=$image; ?>" />
		<title><?=$title; ?></title>
		
		
		<!-- Bootstrap -->
		<link rel="stylesheet" href="scripts/bootstrap/bootstrap.min.css">
		<!-- IonIcons -->
		<link rel="stylesheet" href="<?=url_tmpl();?>css/font-awesome.min.css">
		<!-- Toast -->
		<link rel="stylesheet" href="scripts/toast/jquery.toast.min.css">
		<!-- OwlCarousel -->
		<link rel="stylesheet" href="scripts/owlcarousel/dist/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="scripts/owlcarousel/dist/assets/owl.theme.default.min.css">
		<!-- Magnific Popup -->
		<link rel="stylesheet" href="scripts/magnific-popup/dist/magnific-popup.css">
		<link rel="stylesheet" href="scripts/sweetalert/dist/sweetalert.css">
		<!-- Custom style -->
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/skins/all.css">
		<link rel="stylesheet" href="css/demo.css">
	</head>

	<body>
		<header class="primary">
			<?php include('header.php');?>
		</header>
		<section class="page">
			<div class="container">
				<div class="row" style="margin-top:120px;">
					<div class="col-md-12">
						<div class="page-description">
							<h4>Giới thiệu</h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
							<h4>Tầm nhìn</h4>
							<p>
								Nulla facilisi. Donec mollis laoreet diam. Nullam suscipit pretium turpis at pellentesque. Donec suscipit libero nec pellentesque fringilla. Etiam dictum ut nulla eu vehicula. Nullam sed ultricies nisi. Etiam dapibus diam vitae gravida sagittis.
							</p>
							<h4>Sứ mệnh</h4>
							<p>
								Nulla ante nulla, aliquet vel gravida non, finibus vel eros. Vestibulum lectus augue, placerat ac tincidunt rhoncus, vehicula ac tellus. Nullam a cursus ipsum. Pellentesque ornare mi sit amet nibh euismod gravida. Quisque in tempus odio. Fusce porttitor dolor ut tortor tristique, ut rhoncus nunc cursus. Morbi placerat lorem vel dictum maximus. Vivamus at sollicitudin turpis. Sed eu porta sem, et elementum tellus.
							</p>
							<p>
								Sed nec feugiat sem, nec ultrices orci. Duis ultrices ultricies fringilla. Aliquam convallis diam eu lectus porta, sit amet viverra nibh tincidunt. Etiam et luctus nisi. Integer posuere, augue at elementum aliquet, mauris ante dictum dui, eu pellentesque arcu ante eget libero. Sed consectetur fermentum felis sit amet eleifend.
							</p>
							<div class="question">
								Have a question? <a href="#" class="btn btn-primary">Contact Us</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Start footer -->
		<footer class="footer">
			<div class="footer-area">
				<?=$this->load->inc('footer');?>
			</div>
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