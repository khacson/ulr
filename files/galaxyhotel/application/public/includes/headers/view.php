<div class="container">
	<!--HEADER-TOP-->
	<div class="header-top no-border header-top-menu">
		<div class="header-top-left">
			<span><i class="fa fa-map-marker" aria-hidden="true"></i> <?=$finds->address;?></span>
			<span><i class="fa fa-phone" aria-hidden="true"></i> <?=$finds->phone;?></span>
		</div>
		<div class="header-top-right">
			<ul>	
				<li class="dropdown"><a target="_blank" href="<?=$finds->url_facebook;?>" title="Facebook"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
				<li class="dropdown"><a target="_blank" href="<?=$finds->url_twitter;?>" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li class="dropdown"><a target="_blank" href="<?=$finds->url_google;?>" title="google"><i class="fa fa-google" aria-hidden="true"></i></a></li>
				<li class="dropdown"><a target="_blank" href="<?=$finds->url_youtube;?>" title="youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>
	<!-- END/HEADER-TOP -->
</div>
<!-- MENU-HEADER -->
<div class="menu-header">
	<nav class="navbar navbar-fixed-top ">
		<div class="container">
			<div class="navbar-header ">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar "></span>
					<span class="icon-bar "></span>
					<span class="icon-bar "></span>
				</button>
				<a class="navbar-brand" href="<?=base_url();?>" title="Skyline"><img src="<?=base_url();?>files/logo/<?=$finds->logo;?>" alt="#"></a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown ">
						<a href="<?=base_url();?>" title="Trang chủ">Trang chủ</a>
					</li>
					<li class="dropdown ">
						<a href="<?=base_url();?>phong.html" title="Phòng" class="dropdown-toggle" data-toggle="dropdown">Phòng khách sạn<b class="caret"></b></a>
						<ul class="dropdown-menu icon-fa-caret-up submenu-hover">
							<?php foreach($productTypes as $item){?>
								<li><a href="<?=base_url();?>phong/<?=$item->friendlyurl;?>.html" title="<?=$item->producttype_name;?>"><?=$item->producttype_name;?></a></li>
							<?php }?>
						</ul>
					</li>
					<li class="dropdown ">
						<a href="<?=base_url();?>dich-vu.html" title="Dịch vụ" class="dropdown-toggle" data-toggle="dropdown">Dịch vị<b class="caret"></b></a>
						<ul class="dropdown-menu icon-fa-caret-up submenu-hover">
							<?php foreach($serviceTypes as $item){?>
								<li><a href="<?=base_url();?>dich-vu/<?=$item->friendlyurl;?>.html" title="<?=$item->type_name;?>"><?=$item->type_name;?></a></li>
							<?php }?>
						</ul>
					</li>
					<li class="dropdown ">
						<a href="<?=base_url();?>thu-vien.html" title="Thư viện">Thư viện</a>
					</li>
					<li><a href="<?=base_url();?>gioi-thieu.html" title="Giới thiệu">Giới thiệu</a></li>
					<li><a href="<?=base_url();?>lien-he.html" title="Liên hệ">Liên hệ</a></li>
				</ul>
			</div>
		</div>
	</nav>
</div>