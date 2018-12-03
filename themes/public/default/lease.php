<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="Magz is a HTML5 & CSS3 magazine template is based on Bootstrap 3.">
		<meta name="author" content="">
		<meta name="keyword" content="">
		<!-- Shareable -->
		<meta property="og:title" content="" />
		<meta property="og:type" content="article" />
		<meta property="og:url" content="" />
		<meta property="og:image" content="" />
		<title>Catalog</title>
		<link rel="stylesheet" href="<?=url_tmpl();?>scripts/bootstrap/bootstrap.min.css">
		<!-- IonIcons -->
		<link rel="stylesheet" href="<?=url_tmpl();?>scripts/ionicons/<?=url_tmpl();?>css/ionicons.min.css">
		<!-- Toast -->
		<link rel="stylesheet" href="<?=url_tmpl();?>scripts/toast/jquery.toast.min.css">
		<!-- OwlCarousel -->
		<link rel="stylesheet" href="<?=url_tmpl();?>scripts/owlcarousel/dist/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="<?=url_tmpl();?>scripts/owlcarousel/dist/assets/owl.theme.default.min.css">
		<!--<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">-->
		<!-- Magnific Popup -->
		<link rel="stylesheet" href="<?=url_tmpl();?>scripts/magnific-popup/dist/magnific-popup.css">
		<link rel="stylesheet" href="<?=url_tmpl();?>scripts/sweetalert/dist/sweetalert.css">
		<!-- Custom style -->
		<link rel="stylesheet" href="<?=url_tmpl();?>css/style.css">
		<link rel="stylesheet" href="<?=url_tmpl();?>css/skins/all.css">
		<link rel="stylesheet" href="<?=url_tmpl();?>css/custom.css">
		<link rel="stylesheet" type="text/css" href="<?=url_tmpl();?>scripts/select2/select2.css"/>
		<link rel="stylesheet" type="text/css" href="<?=url_tmpl();?>scripts/select2/select2-metronic.css"/>
		<script type="text/javascript" src="<?=url_tmpl();?>js/jquery.js"></script>
		<style>
			.nav-tabs > li {
				opacity: 0.8;
			}
		</style>
	</head>

	<body>
		<header class="primary">
			<?=$this->load->inc('menu'); ?>
		</header>
		<section class="category">
			<?=$content; ?>
		</section>

		<!-- Start footer -->
		<footer class="footer">
			<?php include('footer.php');?>
		</footer>
		<!-- End Footer -->

		<!-- JS -->
		<script src="<?=url_tmpl();?>js/jquery.migrate.js"></script>
		<script src="<?=url_tmpl();?>scripts/bootstrap/bootstrap.min.js"></script>
		<script>var $target_end=$(".best-of-the-week");</script>
		<script src="<?=url_tmpl();?>scripts/jquery-number/jquery.number.min.js"></script>
		<!--<script src="lib/owlcarousel/owl.carousel.min.js"></script>-->
		<script src="<?=url_tmpl();?>scripts/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
		<script src="<?=url_tmpl();?>scripts/easescroll/jquery.easeScroll.js"></script>
		<script src="<?=url_tmpl();?>scripts/sweetalert/dist/sweetalert.min.js"></script>
		<script src="<?=url_tmpl();?>scripts/toast/jquery.toast.min.js"></script>
		<script src="<?=url_tmpl();?>js/e-magz.js"></script>
		<script src="<?=url_tmpl();?>scripts/owlcarousel/dist/owl.carousel.min.js"></script>
		<script type="text/javascript" src="<?=url_tmpl();?>scripts/select2/select2.min.js"></script>
		<script type="text/javascript" src="<?=url_tmpl();?>js/main.js"></script>
		<script type="text/javascript">
			handleSelect2();
		</script>
	</body>
</html>