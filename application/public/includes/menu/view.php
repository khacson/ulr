<nav class="menu">
	<div class="container">
		<div class="brand" style="width:200px;">
			<a href="<?=base_url();?>" >
				<img class="main-logo" src="<?=url_tmpl();?>images/logo3.png" alt="Logo">
			</a>
		</div>
		<div class="mobile-toggle">
			<a href="#" data-toggle="menu" data-target="#menu-list"><i class="ion-navicon-round"></i></a>
		</div>
		<div class="mobile-toggle">
			<a href="#" data-toggle="sidebar" data-target="#sidebar"><i class="ion-ios-arrow-left"></i></a>
		</div>
		<div id="menu-list">
			<ul class="nav-list">
				<li class="for-tablet nav-title"><a>Menu</a></li>
				<li class="for-tablet"><a href="login">Login</a></li>
				<li class="for-tablet"><a href="register">Register</a></li>
				<!--<li><a href="category">Standard</a></li>-->
				<li class="dropdown magz-dropdown">
					<a href="#">Bán <i class="ion-ios-arrow-right"></i></a>
					<ul class="dropdown-menu">
						<?php foreach($sellCatalogs as $item){?>
							<li><a href="<?=base_url();?>ban/<?=$item->friendlyurl;?>"><?=$item->catalog_name;?></a></li>
						<?php }?>
					</ul>
				</li>
				<li class="dropdown magz-dropdown"><a href="<?=base_url();?>cho-thue">Cho thuê <i class="ion-ios-arrow-right"></i></a>
					<ul class="dropdown-menu">
						<?php foreach($leaseCatalogs as $item){?>
							<li><a href="<?=base_url();?>cho-thue/<?=$item->friendlyurl;?>"><?=$item->catalog_name;?></a></li>
						<?php }?>
					</ul>
				</li>
				<li class="dropdown magz-dropdown"><a href="<?=base_url();?>sang-mat-bang">San mặt bằng <i class="ion-ios-arrow-right"></i></a>
					<ul class="dropdown-menu">
						<?php foreach($transferCatalogs as $item){?>
							<li><a href="<?=base_url();?>sang-mat-bang/<?=$item->friendlyurl;?>"><?=$item->catalog_name;?></a></li>
						<?php }?>
					</ul>
				</li>
				<li class="dropdown magz-dropdown"><a href="<?=base_url();?>du-an">Dự án <i class="ion-ios-arrow-right"></i></a>
					<ul class="dropdown-menu">
						<?php foreach($projectCatalogs as $item){?>
							<li><a href="<?=base_url();?>du-an/<?=$item->friendlyurl;?>"><?=$item->catalog_name;?></a></li>
						<?php }?>
					</ul>
				</li>
				<li ><a href="<?=base_url();?>tin-tuc">Tin tức</a>
					
				</li>
				<li class="dropdown magz-dropdown"><a href="<?=base_url();?>danh-ba">Danh bạ<i class="ion-ios-arrow-right"></i></a>
					<ul class="dropdown-menu">
						<?php foreach($menusCatalogs as $item){?>
							<li><a href="<?=base_url();?>danh-ba/<?=$item->friendlyurl;?>"><?=$item->catalog_name;?></a></li>
						<?php }?>
					 </ul>
				</li>
				<li class="dropdown"><a href="<?=base_url();?>tu-van">Tư vấn <i class="ion-ios-arrow-right"></i></a>
					<ul class="dropdown-menu">
						<?php foreach($advisoryCatalogs as $item){?>
							<li><a href="<?=base_url();?>tu-van/<?=$item->friendlyurl;?>"><?=$item->catalog_name;?></a></li>
						<?php }?>
						<li><a href="<?=base_url();?>tu-van/dat-cau-hoi">Đặt câu hỏi</a></li>
					</ul>
				</li>
				
				<li class="fright"><a href="<?=base_url();?>dang-ky">
				<i class="ion-android-add"></i>
				Đăng ký</a></li>
				<li class="fright"><a href="<?=base_url();?>dang-nhap">
				<i class="ion-person-add"></i> 
				Đăng nhập </a></li>
			</ul>
		</div>
	</div>
</nav>