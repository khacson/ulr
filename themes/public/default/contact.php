<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		
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
		<header>
			<?php include('header.php');?>
		</header>

		<section class="page">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="page-description">
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<h3>Contact</h3>
									<p>
										Aliquam in maximus massa. In magna dolor, efficitur vitae faucibus sagittis, elementum quis lacus. Aliquam pretium sem lectus, vitae gravida ex efficitur vitae.
									</p>
									<p>
										Phone: <span class="bold">+123 45 678 9</span> <br>
										Email: <span class="bold">hi@yourcompany.com</span>
										<br>
										<br>
										Syarifuddin Street<br>
										Indonesia, Bogor Barat 16115
									</p>
								</div>
								<div class="col-md-6 col-sm-6">
									<form class="row contact" id="contact-form">
										<div class="col-md-6">
											<div class="form-group">
												<label>Name <span class="required"></span></label>
												<input type="text" class="form-control" name="name" required="">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Email <span class="required"></span></label>
												<input type="text" class="form-control" name="email" required="">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label>Subject</label>
												<input type="text" class="form-control" name="subject">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label>Your message <span class="required"></span></label>
												<textarea class="form-control" name="message" required=""></textarea>
											</div>
										</div>
										<div class="col-md-12">
											<button class="btn btn-primary">Send Message</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="maps">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7927.32512614206!2d106.75366058323345!3d-6.564206896052583!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1377e9bdc02eea68!2zNsKwMzMnNDkuOCJTIDEwNsKwNDUnMjAuNiJF!5e0!3m2!1sen!2sid!4v1495165466482" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</section>
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