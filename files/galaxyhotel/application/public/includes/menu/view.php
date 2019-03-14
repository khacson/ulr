<!---header top---->
<div class="top-header">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
			   <a href="#"></a>
				<div class="info-block"><i class="fa fa-map"></i><?=$finds->address;?>  <i class="fa fa-phone"></i><?=$finds->hotline;?></div>
			</div>
			<div class="col-md-6">
				<div class="social-grid">
					<ul class="list-unstyled text-right">
						<li><a target="_blank" href="<?=$finds->url_facebook;?>"><i class="fa fa-facebook"></i></a></li>
						<li><a target="_blank" href="<?=$finds->url_twitter;?>"><i class="fa fa-twitter"></i></a></li>
						<li class="dropdown"><a target="_blank" href="<?=$finds->url_google;?>" title="google"><i class="fa fa-google" aria-hidden="true"></i></a></li>
						<li class="dropdown"><a target="_blank" href="<?=$finds->url_youtube;?>" title="youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!--header--->
<header class="header-container">
	<div class="container">
		<div class="top-row">
			<div class="row">
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div id="logo">
					   <a href="<?=base_url();?>trang-chu.html"><img class="logo-header" src="<?=base_url();?>files/logo/<?=$finds->logo;?>" alt="#"> <span>Galaxy </span>Hotel</a>
					</div>                       
				</div>
				<div class="col-sm-6 visible-sm">
					<div class="text-right"><button type="button" class="book-now-btn">Đặt phòng</button></div>
				</div>
				<div class="col-md-8 col-sm-12 col-xs-12 remove-padd">
					<nav class="navbar navbar-default">
						<div class="navbar-header page-scroll">
							<button data-target=".navbar-ex1-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="collapse navigation navbar-collapse navbar-ex1-collapse remove-space">
							<ul class="list-unstyled nav1 cl-effect-10">
								<li><a  data-hover="Trang chủ" href="<?=base_url()?>trang-chu.html"><span>Trang chủ</span></a></li>
								<li><a data-hover="Giới thiệu"  href="<?=base_url()?>gioi-thieu.html"><span>Giới thiệu</span></a></li>
								<li><a data-hover="Phòng"  href="<?=base_url()?>phong.html"><span>Phòng</span></a></li>
								<li><a data-hover="Hình ảnh"  href="<?=base_url()?>hinh-anh.html"><span>Hình ảnh</span></a></li>
								<li><a data-hover="Dịch vụ" href="<?=base_url()?>dich-vu.html"><span>Dịch vụ</span></a></li>
								<li><a data-hover="Tin tức" href="<?=base_url()?>tin-tuc.html"><span>Tin tức</span></a></li>
								<li><a data-hover="Liên hệ" href="<?=base_url()?>lien-he.html"><span>Liên hệ</span></a></li>
							</ul>
						</div>
					</nav>
				</div>
				<div class="col-md-1  col-sm-4 col-xs-12 hidden-sm">
					<div class="text-right"><button id="click_booking" type="button" class="book-now-btn">Đặt phòng</button></div>
				</div>
			</div>
		</div>
	</div>
</header>