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
		<meta property="og:image" content="https://raw.githubusercontent.com/nauvalazhar/Magz/master/<?=url_tmpl();?>images/preview.png" />
		<title>Template</title>
		<!-- Bootstrap -->
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
	<body class="skin-orange">
		<header class="primary">
			<?php include('header.php');?>
		</header>
		  <!-- #intro -->
		 <section id="intro">
			<div class="intro-content">
				<div class="container">
					<div class="col-md-7"></div>
					<div class="col-md-5 col-sm-12 col-xs-12">
						<div class="header-form">
							<ul class="nav nav-tabs" style="margin-top:-10px;">
							  <li class="active "><a data-toggle="tab" href="#menu1">Nhà đất bán</a></li>
							  <li class=""><a data-toggle="tab" href="#menu2">Cho thuê</a></li>
							  <!--<li class=""><a data-toggle="tab" href="#menu3">Menu 3</a></li>-->
							</ul>
							<div class="tab-content">
								<div id="menu1" class="tab-pane fade in active">
									<!--S Tab1-->
									<div class="submit-status"></div> <!-- submit status -->
										<div class="col-md-12 col-sm-12 col-xs-12">
											<div class="row mtop10">
												<select class="select2me form-control forms" id="provinceid" name="provinceid" data-placeholder="Chọn tỉnh thành phố" >
													<option value=""></option>
													<option value="1">A</option>
												</select>
											</div>
											<div class="row mtop10">
												<select class="select2me form-control forms" id="dictricid" name="dictricid" data-placeholder="Chọn quận huyện" >
													<option value=""></option>
													<option value="1">A</option>
												</select>
											</div>
											<div class="row mtop10">
												<select class="select2me form-control forms" id="acreage" name="acreage" data-placeholder="Chọn diện tích" >
													<option value=""></option>
													<option value="1">A</option>
												</select>
											</div>
											<div class="row mtop10">
												<select class="select2me form-control forms" id="price" name="price" data-placeholder="Chọn mức giá" >
													<option value=""></option>
													<option value="1">A</option>
												</select>
											</div>
											<div class="row mtop10">
												<a href="" class="btn btn-info btn-sm btn-rounded w100pt"><i class="ion-search"></i> Tìm kiếm</a>
											</div>
										</div>
									<p class="txt-desc"></p>
									<!--E Tab1-->
								</div>
								<div id="menu2" class="tab-pane fade">
									<!--S Tab1-->
									<div class="submit-status"></div> <!-- submit status -->
										<div class="col-md-12 col-sm-12 col-xs-12">
											<div class="row mtop10">
												<select class="select2me form-control forms" id="provinceid" name="provinceid" data-placeholder="Chọn tỉnh thành phố" >
													<option value=""></option>
													<option value="1">A</option>
												</select>
											</div>
											<div class="row mtop10">
												<select class="select2me form-control forms" id="dictricid" name="dictricid" data-placeholder="Chọn quận huyện" >
													<option value=""></option>
													<option value="1">A</option>
												</select>
											</div>
											<div class="row mtop10">
												<select class="select2me form-control forms" id="acreage" name="acreage" data-placeholder="Chọn diện tích" >
													<option value=""></option>
													<option value="1">A</option>
												</select>
											</div>
											<div class="row mtop10">
												<select class="select2me form-control forms" id="price" name="price" data-placeholder="Chọn mức giá" >
													<option value=""></option>
													<option value="1">A</option>
												</select>
											</div>
											<div class="row mtop10">
												<a href="" class="btn btn-info btn-sm btn-rounded w100pt"><i class="ion-search"></i> Tìm kiếm</a>
											</div>
										</div>
									<p class="txt-desc"></p>
									<!--E Tab1-->
								</div>
							</div>
						</div>
					</div>
				 </div>
			</div>
			<div id="intro-carousel" class="owl-carousel" >
			  <div class="item" style="background-image: url('<?=url_tmpl();?>images/intro-carousel/1.jpg');"></div>
			  <div class="item" style="background-image: url('<?=url_tmpl();?>images/intro-carousel/2.jpg');"></div>
			  <div class="item" style="background-image: url('<?=url_tmpl();?>images/intro-carousel/3.jpg');"></div>
			  <div class="item" style="background-image: url('<?=url_tmpl();?>images/intro-carousel/4.jpg');"></div>
			  <div class="item" style="background-image: url('<?=url_tmpl();?>images/intro-carousel/5.jpg');"></div>
			</div>
		</section>
		<!-- #intro -->
		<section class="home">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-sm-12 col-xs-12">
						<div class="line" style="margin-top:120px;">
							<div>Bất động sản mới</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="row">
									<article class="article col-md-12">
										<div class="inner">
											<figure>
												<a href="detail.php">
													<img src="<?=url_tmpl();?>images/news/img10.jpg" alt="Sample Article">
												</a>
											</figure>
											<div class="padding">
												<div class="detail">
													<div class="time">December 10, 2016</div>
													<!--<div class="category"><a href="detail.php">Healthy</a></div>-->
												</div>
												<h2><a href="detail.php">Bán nhà Quận 2, phường Bình Trưng Tây, mặt đường ô tô, DT 78.3m2, 2 lầu</a></h2>
												<ul class="price">
													<li>Giá:  4.85 tỷ</li>
													<li>Diện tích: 78.3 m²</li>
													<li> Quận 2, Hồ Chí Minh</li>
												</ul>
												<p></p>
												<footer>
													<a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>1263</div></a>
													<a class="btn btn-primary more" href="detail.php">
														<div>Xem thêm</div>
														<div><i class="ion-ios-arrow-thin-right"></i></div>
													</a>
												</footer>
											</div>
										</div>
									</article>
									<article class="article col-md-12">
										<div class="inner">
											<figure>
												<a href="detail.php">
													<img src="<?=url_tmpl();?>images/news/img06.jpg" alt="Sample Article">
												</a>
											</figure>
											<div class="padding">
												<div class="detail">
													<div class="time">December 22, 2016</div>
													<!--<div class="category"><a href="detail.php">Healthy</a></div>-->
												</div>
												<h2><a href="detail.php">Bán nhà Quận 2, phường Bình Trưng Tây, mặt đường ô tô, DT 78.3m2, 2 lầu</a></h2>
												<ul class="price">
													<li>Giá:  4.85 tỷ</li>
													<li>Diện tích: 78.3 m²</li>
													<li> Quận 2, Hồ Chí Minh</li>
												</ul>
												<p></p>
												<footer>
													<a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>327</div></a>
													<a class="btn btn-primary more" href="detail.php">
														<div>Xem thêm</div>
														<div><i class="ion-ios-arrow-thin-right"></i></div>
													</a>
												</footer>
											</div>
										</div>
									</article>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="row">
									<article class="article col-md-12">
										<div class="inner">
											<figure>                                
												<a href="detail.php">
													<img src="<?=url_tmpl();?>images/news/img05.jpg" alt="Sample Article">
												</a>
											</figure>
											<div class="padding">
												<div class="detail">
													<div class="time">December 09, 2016</div>
													<!--<div class="category"><a href="detail.php">Lifestyle</a></div>-->
												</div>
												<h2><a href="detail.php">Bán nhà Quận 2, phường Bình Trưng Tây, mặt đường ô tô, DT 78.3m2, 2 lầu</a></h2>
												<ul class="price">
													<li>Giá:  4.85 tỷ</li>
													<li>Diện tích: 78.3 m²</li>
													<li> Quận 2, Hồ Chí Minh</li>
												</ul>
												<p></p>
												<footer>
													<a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>1083</div></a>
													<a class="btn btn-primary more" href="detail.php">
														<div>Xem thêm</div>
														<div><i class="ion-ios-arrow-thin-right"></i></div>
													</a>
												</footer>
											</div>
										</div>
									</article>
									<article class="article col-md-12">
										<div class="inner">
											<figure>
												<a href="detail.php">
													<img src="<?=url_tmpl();?>images/news/img07.jpg" alt="Sample Article">
												</a>
											</figure>
											<div class="padding">
												<div class="detail">
													<div class="time">December 21, 2016</div>
													<!--<div class="category"><a href="detail.php">Sport</a></div>-->
												</div>
												<h2><a href="detail.php">Bán nhà Quận 2, phường Bình Trưng Tây, mặt đường ô tô, DT 78.3m2, 2 lầu</a></h2>
												<ul class="price">
													<li>Giá:  4.85 tỷ</li>
													<li>Diện tích: 78.3 m²</li>
													<li> Quận 2, Hồ Chí Minh</li>
												</ul>
												<p></p>
												<footer>
													<a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>980</div></a>
													<a class="btn btn-primary more" href="detail.php">
														<div>Xem thêm</div>
														<div><i class="ion-ios-arrow-thin-right"></i></div>
													</a>
												</footer>
											</div>
										</div>
									</article>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="row">
									<article class="article col-md-12">
										<div class="inner">
											<figure>                                
												<a href="detail.php">
													<img src="<?=url_tmpl();?>images/news/img05.jpg" alt="Sample Article">
												</a>
											</figure>
											<div class="padding">
												<div class="detail">
													<div class="time">December 09, 2016</div>
												</div>
												<h2><a href="detail.php">Bán nhà Quận 2, phường Bình Trưng Tây, mặt đường ô tô, DT 78.3m2, 2 lầu</a></h2>
												<ul class="price">
													<li>Giá:  4.85 tỷ</li>
													<li>Diện tích: 78.3 m²</li>
													<li> Quận 2, Hồ Chí Minh</li>
												</ul>
												<p></p>
												<footer>
													<a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>1083</div></a>
													<a class="btn btn-primary more" href="detail.php">
														<div>Xem thêm</div>
														<div><i class="ion-ios-arrow-thin-right"></i></div>
													</a>
												</footer>
											</div>
										</div>
									</article>
									<article class="article col-md-12">
										<div class="inner">
											<figure>
												<a href="detail.php">
													<img src="<?=url_tmpl();?>images/news/img07.jpg" alt="Sample Article">
												</a>
											</figure>
											<div class="padding">
												<div class="detail">
													<div class="time">December 21, 2016</div>
												</div>
												<h2><a href="detail.php">Bán nhà Quận 2, phường Bình Trưng Tây, mặt đường ô tô, DT 78.3m2, 2 lầu</a></h2>
												<ul class="price">
													<li>Giá:  4.85 tỷ</li>
													<li>Diện tích: 78.3 m²</li>
													<li> Quận 2, Hồ Chí Minh</li>
												</ul>
												<p></p>
												<footer>
													<a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>980</div></a>
													<a class="btn btn-primary more" href="detail.php">
														<div>Xem thêm</div>
														<div><i class="ion-ios-arrow-thin-right"></i></div>
													</a>
												</footer>
											</div>
										</div>
									</article>
								</div>
							</div>
						</div>
						<div class="banner">
							<a href="#">
								<img src="<?=url_tmpl();?>images/ads.png" alt="Sample Article">
							</a>
						</div>
						<div class="line transparent little"></div>
						<div class="row">
							<div class="col-md-6 col-sm-6 trending-tags">
								<h1 class="title-col">Tư vấn
									<div class="carousel-nav" id="hot-news-nav2">
										<div class="prev">
											<i class="ion-ios-arrow-left"></i>
										</div>
										<div class="next">
											<i class="ion-ios-arrow-right"></i>
										</div>
									</div>
								</h1>
								<div class="body-col vertical-slider" data-max="4" data-nav="#hot-news-nav2" data-item="article">
									<article class="article-mini">
										<div class="inner">
											<figure>
												<a href="detail.php">
													<img src="<?=url_tmpl();?>images/news/img09.jpg" alt="Sample Article">
												</a>
											</figure>
											<div class="padding">
												<h1><a href="detail.php">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
												<div class="detail">
													<div class="category"><a href="detail.php">Lifestyle</a></div>
													<div class="time">December 22, 2016</div>
												</div>
											</div>
										</div>
									</article>
									<article class="article-mini">
										<div class="inner">
											<figure>
												<a href="detail.php">
													<img src="<?=url_tmpl();?>images/news/img01.jpg" alt="Sample Article">
												</a>
											</figure>
											<div class="padding">
												<h1><a href="detail.php">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
												<div class="detail">
													<div class="category"><a href="detail.php">Lifestyle</a></div>
													<div class="time">December 22, 2016</div>
												</div>
											</div>
										</div>
									</article>
									<article class="article-mini">
										<div class="inner">
											<figure>
												<a href="detail.php">
													<img src="<?=url_tmpl();?>images/news/img05.jpg" alt="Sample Article">
												</a>
											</figure>
											<div class="padding">
												<h1><a href="detail.php">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
												<div class="detail">
													<div class="category"><a href="detail.php">Lifestyle</a></div>
													<div class="time">December 22, 2016</div>
												</div>
											</div>
										</div>
									</article>
									<article class="article-mini">
										<div class="inner">
											<figure>
												<a href="detail.php">
													<img src="<?=url_tmpl();?>images/news/img02.jpg" alt="Sample Article">
												</a>
											</figure>
											<div class="padding">
												<h1><a href="detail.php">Fusce ullamcorper elit at felis cursus suscipit</a></h1>
												<div class="detail">
													<div class="category"><a href="detail.php">Travel</a></div>
													<div class="time">December 21, 2016</div>
												</div>
											</div>
										</div>
									</article>
									<article class="article-mini">
										<div class="inner">
											<figure>
												<a href="detail.php">
													<img src="<?=url_tmpl();?>images/news/img13.jpg" alt="Sample Article">
												</a>
											</figure>
											<div class="padding">
												<h1><a href="detail.php">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
												<div class="detail">
													<div class="category"><a href="detail.php">International</a></div>
													<div class="time">December 20, 2016</div>
												</div>
											</div>
										</div>
									</article>
									<article class="article-mini">
										<div class="inner">
											<figure>
												<a href="detail.php">
													<img src="<?=url_tmpl();?>images/news/img08.jpg" alt="Sample Article">
												</a>
											</figure>
											<div class="padding">
												<h1><a href="detail.php">Aliquam et metus convallis tincidunt velit ut rhoncus dolor</a></h1>
												<div class="detail">
													<div class="category"><a href="detail.php">Computer</a></div>
													<div class="time">December 19, 2016</div>
												</div>
											</div>
										</div>
									</article>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<h1 class="title-col">
									Tin tức
									<div class="carousel-nav" id="hot-news-nav">
										<div class="prev">
											<i class="ion-ios-arrow-left"></i>
										</div>
										<div class="next">
											<i class="ion-ios-arrow-right"></i>
										</div>
									</div>
								</h1>
								<div class="body-col vertical-slider" data-max="4" data-nav="#hot-news-nav" data-item="article">
									<article class="article-mini">
										<div class="inner">
											<figure>
												<a href="detail.php">
													<img src="<?=url_tmpl();?>images/news/img09.jpg" alt="Sample Article">
												</a>
											</figure>
											<div class="padding">
												<h1><a href="detail.php">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
												<div class="detail">
													<div class="category"><a href="detail.php">Lifestyle</a></div>
													<div class="time">December 22, 2016</div>
												</div>
											</div>
										</div>
									</article>
									<article class="article-mini">
										<div class="inner">
											<figure>
												<a href="detail.php">
													<img src="<?=url_tmpl();?>images/news/img01.jpg" alt="Sample Article">
												</a>
											</figure>
											<div class="padding">
												<h1><a href="detail.php">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
												<div class="detail">
													<div class="category"><a href="detail.php">Lifestyle</a></div>
													<div class="time">December 22, 2016</div>
												</div>
											</div>
										</div>
									</article>
									<article class="article-mini">
										<div class="inner">
											<figure>
												<a href="detail.php">
													<img src="<?=url_tmpl();?>images/news/img05.jpg" alt="Sample Article">
												</a>
											</figure>
											<div class="padding">
												<h1><a href="detail.php">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
												<div class="detail">
													<div class="category"><a href="detail.php">Lifestyle</a></div>
													<div class="time">December 22, 2016</div>
												</div>
											</div>
										</div>
									</article>
									<article class="article-mini">
										<div class="inner">
											<figure>
												<a href="detail.php">
													<img src="<?=url_tmpl();?>images/news/img02.jpg" alt="Sample Article">
												</a>
											</figure>
											<div class="padding">
												<h1><a href="detail.php">Fusce ullamcorper elit at felis cursus suscipit</a></h1>
												<div class="detail">
													<div class="category"><a href="detail.php">Travel</a></div>
													<div class="time">December 21, 2016</div>
												</div>
											</div>
										</div>
									</article>
									<article class="article-mini">
										<div class="inner">
											<figure>
												<a href="detail.php">
													<img src="<?=url_tmpl();?>images/news/img13.jpg" alt="Sample Article">
												</a>
											</figure>
											<div class="padding">
												<h1><a href="detail.php">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
												<div class="detail">
													<div class="category"><a href="detail.php">International</a></div>
													<div class="time">December 20, 2016</div>
												</div>
											</div>
										</div>
									</article>
									<article class="article-mini">
										<div class="inner">
											<figure>
												<a href="detail.php">
													<img src="<?=url_tmpl();?>images/news/img08.jpg" alt="Sample Article">
												</a>
											</figure>
											<div class="padding">
												<h1><a href="detail.php">Aliquam et metus convallis tincidunt velit ut rhoncus dolor</a></h1>
												<div class="detail">
													<div class="category"><a href="detail.php">Computer</a></div>
													<div class="time">December 19, 2016</div>
												</div>
											</div>
										</div>
									</article>
								</div>
							</div>
						</div>
						<div class="line top">
							<div>Dự án</div>
						</div>
						<div class="row">
							<article class="col-md-12 article-list">
								<div class="inner">
									<figure>
										<a href="detail.php">
											<img src="<?=url_tmpl();?>images/news/img11.jpg" alt="Sample Article">
										</a>
									</figure>
									<div class="details">
										<div class="detail">
											<div class="category">
												<a href="#">Film</a>
											</div>
											<div class="time">December 19, 2016</div>
										</div>
										<h1><a href="detail.php">Donec consequat arcu at ultrices sodales quam erat aliquet diam</a></h1>
										<p>
										Donec consequat, arcu at ultrices sodales, quam erat aliquet diam, sit amet interdum libero nunc accumsan nisi.
										</p>
										<footer>
											<a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>273</div></a>
											<a class="btn btn-primary more" href="detail.php">
												<div>Xem thêm</div>
												<div><i class="ion-ios-arrow-thin-right"></i></div>
											</a>
										</footer>
									</div>
								</div>
							</article>
							<article class="col-md-12 article-list">
								<div class="inner">
									<div class="badge">
										Sponsored
									</div>
									<figure>
										<a href="detail.php">
											<img src="<?=url_tmpl();?>images/news/img02.jpg" alt="Sample Article">
										</a>
									</figure>
									<div class="details">
										<div class="detail">
											<div class="category">
												<a href="#">Travel</a>
											</div>
											<div class="time">December 18, 2016</div>
										</div>
										<h1><a href="detail.php">Maecenas accumsan tortor ut velit pharetra mollis</a></h1>
										<p>
											Maecenas accumsan tortor ut velit pharetra mollis. Proin eu nisl et arcu iaculis placerat sollicitudin ut est. In fringilla dui.
										</p>
										<footer>
											<a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>4209</div></a>
											<a class="btn btn-primary more" href="detail.php">
												<div>Xem thêm</div>
												<div><i class="ion-ios-arrow-thin-right"></i></div>
											</a>
										</footer>
									</div>
								</div>
							</article>
							<article class="col-md-12 article-list">
								<div class="inner">
									<figure>
										<a href="detail.php">
											<img src="<?=url_tmpl();?>images/news/img03.jpg" alt="Sample Article">
										</a>
									</figure>
									<div class="details">
										<div class="detail">
											<div class="category">
											<a href="#">Travel</a>
											</div>
											<div class="time">December 16, 2016</div>
										</div>
										<h1><a href="detail.php">Nulla facilisis odio quis gravida vestibulum Proin venenatis pellentesque arcu</a></h1>
										<p>
											Nulla facilisis odio quis gravida vestibulum. Proin venenatis pellentesque arcu, ut mattis nulla placerat et.
										</p>
										<footer>
											<a href="#" class="love active"><i class="ion-android-favorite"></i> <div>302</div></a>
											<a class="btn btn-primary more" href="detail.php">
												<div>Xem thêm</div>
												<div><i class="ion-ios-arrow-thin-right"></i></div>
											</a>
										</footer>
									</div>
								</div>
							</article>
							<article class="col-md-12 article-list">
								<div class="inner">
									<figure>
										<a href="detail.php">
											<img src="<?=url_tmpl();?>images/news/img09.jpg" alt="Sample Article">
										</a>
									</figure>
									<div class="details">
										<div class="detail">
											<div class="category">
												<a href="#">Healthy</a>
											</div>
											<div class="time">December 16, 2016</div>
										</div>
										<h1><a href="detail.php">Maecenas blandit ultricies lorem id tempor enim pulvinar at</a></h1>
										<p>
											Maecenas blandit ultricies lorem, id tempor enim pulvinar at. Curabitur sit amet tortor eu ipsum lacinia malesuada.
										</p>
										<footer>
											<a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>783</div></a>
											<a class="btn btn-primary more" href="detail.php">
												<div>Xem thêm</div>
												<div><i class="ion-ios-arrow-thin-right"></i></div>
											</a>
										</footer>
									</div>
								</div>
							</article>
						</div>
					</div>
					<div class="col-xs-6 col-md-4 sidebar" id="sidebar" style="margin-top:120px;">
						<div class="sidebar-title for-tablet">Sidebar</div>
						<aside>
							<div class="aside-body">
								<div class="featured-author">
									<div class="featured-author-inner">
										<div class="featured-author-cover" style="background-image: url('<?=url_tmpl();?>images/duan.jpg');">
											<div class="badges">
												<div class="badge-item"><i class="ion-star"></i> Dự án mới</div>
											</div>
											<div class="featured-author-center">
												<!--<figure class="featured-author-picture">
													<img src="<?=url_tmpl();?>images/duan.jpg" alt="Sample Article">
												</figure>-->
												<div class="featured-author-info">
													<h2 class="name">John Doe</h2>
													<div class="desc">@JohnDoe</div>
												</div>
											</div>
										</div>
										<div class="featured-author-body">
											<div class="featured-author-count">
												<div class="item">
													<a href="#">
														<div class="name">Posts</div>
														<div class="value">208</div>														
													</a>
												</div>
												<div class="item">
													<a href="#">
														<div class="name">Stars</div>
														<div class="value">3,729</div>														
													</a>
												</div>
												<div class="item">
													<a href="#">
														<div class="icon">
															<div>Xem thêm</div>
															<i class="ion-chevron-right"></i>
														</div>														
													</a>
												</div>
											</div>
											<!--<div class="featured-author-quote">
												"Eur costrict mobsa undivani krusvuw blos andugus pu aklosah"
											</div>-->
											<div class="block">
												<!--<h2 class="block-title">Photos</h2>-->
												<div class="block-body">
													<ul class="item-list-round" data-magnific="gallery">
														<li><a href="<?=url_tmpl();?>images/news/img06.jpg" style="background-image: url('<?=url_tmpl();?>images/news/img06.jpg');"></a></li>
														<li><a href="<?=url_tmpl();?>images/news/img07.jpg" style="background-image: url('<?=url_tmpl();?>images/news/img07.jpg');"></a></li>
														<li><a href="<?=url_tmpl();?>images/news/img08.jpg" style="background-image: url('<?=url_tmpl();?>images/news/img08.jpg');"></a></li>
														<li><a href="<?=url_tmpl();?>images/news/img09.jpg" style="background-image: url('<?=url_tmpl();?>images/news/img09.jpg');"></a></li>
														<li><a href="<?=url_tmpl();?>images/news/img10.jpg" style="background-image: url('<?=url_tmpl();?>images/news/img10.jpg');"></a></li>
														<li><a href="<?=url_tmpl();?>images/news/img11.jpg" style="background-image: url('<?=url_tmpl();?>images/news/img11.jpg');"></a></li>
														<li><a href="<?=url_tmpl();?>images/news/img12.jpg" style="background-image: url('<?=url_tmpl();?>images/news/img12.jpg');"><div class="more">+2</div></a></li>
														<li class="hidden"><a href="<?=url_tmpl();?>images/news/img13.jpg" style="background-image: url('<?=url_tmpl();?>images/news/img13.jpg');"></a></li>
														<li class="hidden"><a href="<?=url_tmpl();?>images/news/img14.jpg" style="background-image: url('<?=url_tmpl();?>images/news/img14.jpg');"></a></li>
													</ul>
												</div>
											</div>
											<div class="featured-author-footer">
												<a href="#">Xem thêm</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</aside>
						<aside>
							<h1 class="aside-title">Xem nhiều <a href="#" class="all">Xem thêm<i class="ion-ios-arrow-right"></i></a></h1>
							<div class="aside-body">
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="detail.php">
												<img src="<?=url_tmpl();?>images/news/img07.jpg" alt="Sample Article">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="detail.php">Fusce ullamcorper elit at felis cursus suscipit</a></h1>
										</div>
									</div>
								</article>
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="detail.php">
												<img src="<?=url_tmpl();?>images/news/img14.jpg" alt="Sample Article">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="detail.php">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
										</div>
									</div>
								</article>
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="detail.php">
												<img src="<?=url_tmpl();?>images/news/img09.jpg" alt="Sample Article">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="detail.php">Aliquam et metus convallis tincidunt velit ut rhoncus dolor</a></h1>
										</div>
									</div>
								</article>
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="detail.php">
												<img src="<?=url_tmpl();?>images/news/img11.jpg" alt="Sample Article">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="detail.php">dui augue facilisis lacus fringilla pulvinar massa felis quis velit</a></h1>
										</div>
									</div>
								</article>
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="detail.php">
												<img src="<?=url_tmpl();?>images/news/img06.jpg" alt="Sample Article">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="detail.php">neque est semper nulla, ac elementum risus quam a enim</a></h1>
										</div>
									</div>
								</article>
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="detail.php">
												<img src="<?=url_tmpl();?>images/news/img03.jpg" alt="Sample Article">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="detail.php">Morbi vitae nisl ac mi luctus aliquet a vitae libero</a></h1>
										</div>
									</div>
								</article>
							</div>
						</aside>
						<aside>
							<div class="aside-body">
								<form class="newsletter">
									<div class="icon">
										<i class="ion-ios-email-outline"></i>
										<h1>Newsletter</h1>
									</div>
									<div class="input-group">
										<input type="email" class="form-control email" placeholder="Your mail">
										<div class="input-group-btn">
											<button class="btn btn-primary"><i class="ion-paper-airplane"></i></button>
										</div>
									</div>
									<p>By subscribing you will receive new articles in your email.</p>
								</form>
							</div>
						</aside>
						<aside>
							<ul class="nav nav-tabs nav-justified" role="tablist">
								<li class="active">
									<a href="#recomended" aria-controls="recomended" role="tab" data-toggle="tab">
										<i class="ion-android-star-outline"></i> Recomended
									</a>
								</li>
								<li>
									<a href="#comments" aria-controls="comments" role="tab" data-toggle="tab">
										<i class="ion-ios-chatboxes-outline"></i> Comments
									</a>
								</li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane active" id="recomended">
									<article class="article-fw">
										<div class="inner">
											<figure>
												<a href="detail.php">
													<img src="<?=url_tmpl();?>images/news/img16.jpg" alt="Sample Article">
												</a>
											</figure>
											<div class="details">
												<div class="detail">
													<div class="time">December 31, 2016</div>
													<div class="category"><a href="detail.php">Sport</a></div>
												</div>
												<h1><a href="detail.php">Donec congue turpis vitae mauris</a></h1>
												<p>
													Donec congue turpis vitae mauris condimentum luctus. Ut dictum neque at egestas convallis. 
												</p>
											</div>
										</div>
									</article>
									<div class="line"></div>
									<article class="article-mini">
										<div class="inner">
											<figure>
												<a href="detail.php">
													<img src="<?=url_tmpl();?>images/news/img05.jpg" alt="Sample Article">
												</a>
											</figure>
											<div class="padding">
												<h1><a href="detail.php">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
												<div class="detail">
													<div class="category"><a href="detail.php">Lifestyle</a></div>
													<div class="time">December 22, 2016</div>
												</div>
											</div>
										</div>
									</article>
									<article class="article-mini">
										<div class="inner">
											<figure>
												<a href="detail.php">
													<img src="<?=url_tmpl();?>images/news/img02.jpg" alt="Sample Article">
												</a>
											</figure>
											<div class="padding">
												<h1><a href="detail.php">Fusce ullamcorper elit at felis cursus suscipit</a></h1>
												<div class="detail">
													<div class="category"><a href="detail.php">Travel</a></div>
													<div class="time">December 21, 2016</div>
												</div>
											</div>
										</div>
									</article>
									<article class="article-mini">
										<div class="inner">
											<figure>
												<a href="detail.php">
													<img src="<?=url_tmpl();?>images/news/img10.jpg" alt="Sample Article">
												</a>
											</figure>
											<div class="padding">
												<h1><a href="detail.php">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
												<div class="detail">
													<div class="category"><a href="detail.php">Healthy</a></div>
													<div class="time">December 20, 2016</div>
												</div>
											</div>
										</div>
									</article>
								</div>
								<div class="tab-pane comments" id="comments">
									<div class="comment-list sm">
										<div class="item">
											<div class="user">                                
												<figure>
													<img src="<?=url_tmpl();?>images/img01.jpg" alt="User Picture">
												</figure>
												<div class="details">
													<h5 class="name">Mark Otto</h5>
													<div class="time">24 Hours</div>
													<div class="description">
														Lorem ipsum dolor sit amet, consectetur adipisicing elit.
													</div>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="user">                                
												<figure>
													<img src="<?=url_tmpl();?>images/img01.jpg" alt="User Picture">
												</figure>
												<div class="details">
													<h5 class="name">Mark Otto</h5>
													<div class="time">24 Hours</div>
													<div class="description">
														Lorem ipsum dolor sit amet, consectetur adipisicing elit.
													</div>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="user">                                
												<figure>
													<img src="<?=url_tmpl();?>images/img01.jpg" alt="User Picture">
												</figure>
												<div class="details">
													<h5 class="name">Mark Otto</h5>
													<div class="time">24 Hours</div>
													<div class="description">
														Lorem ipsum dolor sit amet, consectetur adipisicing elit.
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</aside>
						<aside>
							<h1 class="aside-title">Videos
								<div class="carousel-nav" id="video-list-nav">
									<div class="prev"><i class="ion-ios-arrow-left"></i></div>
									<div class="next"><i class="ion-ios-arrow-right"></i></div>
								</div>
							</h1>
							<div class="aside-body">
								<ul class="video-list" data-youtube='"carousel":true, "nav": "#video-list-nav"'>
									<li><a data-youtube-id="SBjQ9tuuTJQ" data-action="magnific"></a></li>
									<li><a data-youtube-id="9cVJr3eQfXc" data-action="magnific"></a></li>
									<li><a data-youtube-id="DnGdoEa1tPg" data-action="magnific"></a></li>
								</ul>
							</div>
						</aside>
						<aside id="sponsored">
							<h1 class="aside-title">Sponsored</h1>
							<div class="aside-body">
								<ul class="sponsored">
									<li>
										<a href="#">
											<img src="<?=url_tmpl();?>images/sponsored.png" alt="Sponsored">
										</a>
									</li> 
									<li>
										<a href="#">
											<img src="<?=url_tmpl();?>images/sponsored.png" alt="Sponsored">
										</a>
									</li> 
									<li>
										<a href="#">
											<img src="<?=url_tmpl();?>images/sponsored.png" alt="Sponsored">
										</a>
									</li> 
									<li>
										<a href="#">
											<img src="<?=url_tmpl();?>images/sponsored.png" alt="Sponsored">
										</a>
									</li> 
								</ul>
							</div>
						</aside>
					</div>
				</div>
			</div>
		</section>

		<section class="best-of-the-week">
			<div class="container">
				<h1><div class="text">Nhà môi giới tiêu biểu</div>
					<div class="carousel-nav" id="best-of-the-week-nav">
						<div class="prev">
							<i class="ion-ios-arrow-left"></i>
						</div>
						<div class="next">
							<i class="ion-ios-arrow-right"></i>
						</div>
					</div>
				</h1>
				<div class="owl-carousel owl-theme carousel-1">
					<article class="article">
						<div class="inner">
							<figure>
								<a href="detail.php">
									<img src="<?=url_tmpl();?>images/news/img03.jpg" alt="Sample Article">
								</a>
							</figure>
							<div class="padding">
								<div class="detail">
										<div class="time">December 11, 2016</div>
										<div class="category"><a href="detail.php">Travel</a></div>
								</div>
								<h2><a href="detail.php">tempor interdum Praesent tincidunt</a></h2>
								<p>Praesent tincidunt, leo vitae congue molestie.</p>
							</div>
						</div>
					</article>
					<article class="article">
						<div class="inner">
							<figure>
								<a href="detail.php">
									<img src="<?=url_tmpl();?>images/news/img16.jpg" alt="Sample Article">
								</a>
							</figure>
							<div class="padding">
								<div class="detail">
									<div class="time">December 09, 2016</div>
									<div class="category"><a href="detail.php">Sport</a></div>
								</div>
								<h2><a href="detail.php">Maecenas porttitor sit amet turpis a semper</a></h2>
								<p> Proin vulputate, urna id porttitor luctus, dui augue facilisis lacus.</p>
							</div>
						</div>
					</article>
					<article class="article">
						<div class="inner">
							<figure>
								<a href="detail.php">
									<img src="<?=url_tmpl();?>images/news/img15.jpg" alt="Sample Article">
								</a>
							</figure>
							<div class="padding">
								<div class="detail">
									<div class="time">December 26, 2016</div>
									<div class="category"><a href="detail.php">Lifestyle</a></div>
								</div>
								<h2><a href="detail.php">Fusce ac odio eu ex volutpat pellentesque</a></h2>
								<p>Vestibulum ante ipsum primis in faucibus orci luctus</p>
							</div>
						</div>
					</article>
					<article class="article">
						<div class="inner">
							<figure>
								<a href="detail.php">
									<img src="<?=url_tmpl();?>images/news/img14.jpg" alt="Sample Article">
								</a>
							</figure>
							<div class="padding">
								<div class="detail">
									<div class="time">December 26, 2016</div>
									<div class="category"><a href="detail.php">Travel</a></div>
								</div>
								<h2><a href="detail.php">Nulla facilisis odio quis gravida vestibulum</a></h2>
								<p>Proin venenatis pellentesque arcu, ut mattis nulla placerat et.</p>
							</div>
						</div>
					</article>
					<article class="article">
						<div class="inner">
							<figure>
								<a href="detail.php">
									<img src="<?=url_tmpl();?>images/news/img01.jpg" alt="Sample Article">
								</a>
							</figure>
							<div class="padding">
								<div class="detail">
									<div class="time">December 26, 2016</div>
									<div class="category"><a href="detail.php">Travel</a></div>
								</div>
								<h2><a href="detail.php">Fusce Ullamcorper Elit At Felis Cursus Suscipit</a></h2>
								<p>Proin venenatis pellentesque arcu, ut mattis nulla placerat et.</p>
							</div>
						</div>
					</article>
					<article class="article">
						<div class="inner">
							<figure>
								<a href="detail.php">
									<img src="<?=url_tmpl();?>images/news/img11.jpg" alt="Sample Article">
								</a>
							</figure>
							<div class="padding">
								<div class="detail">
									<div class="time">December 26, 2016</div>
									<div class="category"><a href="detail.php">Travel</a></div>
								</div>
								<h2><a href="detail.php">Donec consequat arcu at ultrices sodales</a></h2>
								<p>Proin venenatis pellentesque arcu, ut mattis nulla placerat et.</p>
							</div>
						</div>
					</article>
				</div>
			</div>
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