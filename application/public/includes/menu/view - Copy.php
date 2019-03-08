<!-- Start nav -->
<nav class="menu">
	<div class="container">
		<div class="brand">
			<a href="#">
				<a href="<?=base_url();?>home.html"><img class="logo-company" src="<?=url_tmpl();?>images/logo.png" alt="Magz Logo"></a>
			</a>
		</div>
		<div class="mobile-toggle">
			<a href="#" data-toggle="menu" data-target="#menu-list"><i class="ion-navicon-round"></i></a>
		</div>
		<div class="mobile-toggle">
			<a href="#" data-toggle="sidebar" data-target="#sidebar"><i class="ion-ios-arrow-left"></i></a>
		</div>
		<div id="menu-list">
			<ul class="nav-list pull-left">
				<li class="for-tablet nav-title"><a>Menu</a></li>
				<li class="for-tablet"><a href="login.php">Login</a></li>
				<li class="for-tablet"><a href="register.php">Register</a></li>
				<li class="dropdown">
					<a href="<?=base_url();?>ban.html">Bán<i class="ion-ios-arrow-right"></i></a>
					<ul class="dropdown-menu">
						<li><a href="<?=base_url();?>ban/ban-nha.html">Bán nhà</a></li>
						<li><a href="<?=base_url();?>ban.html">Căn hộ chung cư</a></li>
						<li><a href="<?=base_url();?>ban.html">Biệt thự liền kề</a></li>
						<li><a href="<?=base_url();?>ban.html">Đất nền dự án</a></li>
						<li><a href="<?=base_url();?>ban.html">Trang trại, khu nghỉ dưỡng</a></li>
						<li><a href="<?=base_url();?>ban.html">Kho, nhà xưởng</a></li>
						<li><a href="<?=base_url();?>ban.html">Bất động sản khác</a></li>
					</ul>
				</li>
				<li class="dropdown"><a href="<?=base_url();?>cho-thue.html">Cho thuê <i class="ion-ios-arrow-right"></i></a>
					<ul class="dropdown-menu">
						<li><a href="<?=base_url();?>cho-thue.html">Cho thuê </a></li>
						<li><a href="<?=base_url();?>cho-thue.html">Căn hộ chung cư</a></li>
						<li><a href="<?=base_url();?>cho-thue.html">Cho thuê văn phòng</a></li>
						<li><a href="<?=base_url();?>cho-thue.html">Nhà trọ, phòng trọ</a></li>
						<li><a href="<?=base_url();?>cho-thue.html">Cửa hàng - ki ốt</a></li>
						<li><a href="<?=base_url();?>cho-thue.html">Kho, nhà xưởng, đất</a></li>
						<li><a href="<?=base_url();?>cho-thue.html">Cho thuê khác</a></li>
					</ul>
				</li>
				
				<li class="dropdown"><a href="<?=base_url();?>du-an.html">San mặt bằng <i class="ion-ios-arrow-right"></i></a>
					<ul class="dropdown-menu">
						<li><a href="<?=base_url();?>du-an.html"></a></li>
						<li><a href="<?=base_url();?>du-an.html">Quán cà phê</a></li>
						<li><a href="<?=base_url();?>du-an.html">Shop thời trang</a></li>
						<li><a href="<?=base_url();?>du-an.html">Nhà hàng, quán ăn</a></li>
					</ul>
				</li>
				<li class="dropdown"><a href="<?=base_url();?>xay-dung.html">Xây dựng <i class="ion-ios-arrow-right"></i></a>
					<ul class="dropdown-menu">
						<li><a href="#">Giải pháp xây dựng</a></li>
						<li><a href="#">Vật liệu xây dựng</a></li>
					</ul>
				</li>
				<li class="dropdown"><a href="<?=base_url();?>noi-ngoai-that.html">Nội - ngoại thất<i class="ion-ios-arrow-right"></i></a>
					<ul class="dropdown-menu">
						<li><a href="#">Giải pháp xây dựng</a></li>
						<li><a href="#">Vật liệu xây dựng</a></li>
					</ul>
				</li>
				<li class="dropdown"><a href="<?=base_url();?>danh-ba.html">Danh bạ<i class="ion-ios-arrow-right"></i></a>
					<ul class="dropdown-menu">
						<li><a href="<?=base_url();?>ban.html">Chủ đầu tư</a></li>
						<li><a href="<?=base_url();?>ban.html">Thi công xây dựng</a></li>
						<li><a href="<?=base_url();?>ban.html">Tư vấn thiết kế</a></li>
						<li><a href="<?=base_url();?>ban.html">Sàn bất động sản</a></li>
						<li><a href="<?=base_url();?>ban.html">Trang trí nội thất</a></li>
						<li><a href="<?=base_url();?>ban.html">Vật liệu xây dựng</a></li>
						<li><a href="<?=base_url();?>ban.html">Thiết bị vệ sinh - bếp</a></li>
						<li><a href="<?=base_url();?>ban.html">Tài chính pháp lý</a></li>
						<li><a href="<?=base_url();?>ban.html">Nhà môi giới</a></li>
					 </ul>
				</li>
				<li class="dropdown"><a href="<?=base_url();?>tu-van.html">Tư vấn <i class="ion-ios-arrow-right"></i></a>
					<ul class="dropdown-menu">
						<li><a href="#">Đặt câu hỏi</a></li>
						<li><a href="#">Tư vấn thiết kế</a></li>
						<li><a href="#">Văn bản luật</a></li>
						<li><a href="#">Mua bán, cho thuê</a></li>
						<li><a href="#">Khác</a></li>
					</ul>
				</li>
				<li class="fright"><a href="<?=base_url();?>post.html"><i class="ion-edit"></i><img class="img_post" src="<?=url_tmpl();?>icon/post.png"/> Đăng tin </a></li>
				<li class="fright"><a href="<?=base_url();?>account/register.html"><i class="ion-person-add"></i><img class="img_register" src="<?=url_tmpl();?>icon/register.png"/> Đăng ký</a></li>
			</ul>
		</div>
	</div>
</nav>
<!-- End nav -->

