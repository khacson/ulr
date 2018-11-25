<div class="firstbar">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<div class="row">
					<ul class="nav-icons pull-left">
						<li>
							<a href="register.php">
								<i class="ion-social-facebook"></i>
							</a>
						</li>
						<li>
							<a href="register.php">
								<i class="ion-social-googleplus"></i>
							</a>
						</li>
						<li>
							<a href="register.php">
								<i class="ion-social-youtube-outline"></i>
							</a>
						</li>
						<li>
							<a href="register.php">
								<i class="ion-social-skype"></i>
							</a>
						</li>
						<li><a class="mtop3" href="#">Hotline: 028 56789 888 - 0827 533 555</li>
					</ul>	
				</div>	
			</div>
			<div class="col-md-6 col-sm-12 text-right">
				<ul class="nav-icons">
					<li><a href="<?=base_url();?>post.html"><i class="ion-edit"></i><div>&nbsp;Đăng tin </div></a></li>
					<li><a href="<?=base_url();?>account/register.html"><i class="ion-person-add"></i><div>&nbsp;Đăng ký</div></a></li>
					<li><a href="<?=base_url();?>account/login.html"><i class="ion-person"></i><div>&nbsp;Đăng nhập</div></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<!-- Start nav -->
<nav class="menu">
	<div class="container">
		<div class="brand">
			<a href="#">
				<a href="index.php"><img style="height:45px; margin-top:10px;" src="images/logo.png" alt="Magz Logo"></a>
			</a>
		</div>
		<div class="mobile-toggle">
			<a href="#" data-toggle="menu" data-target="#menu-list"><i class="ion-navicon-round"></i></a>
		</div>
		<div class="mobile-toggle">
			<a href="#" data-toggle="sidebar" data-target="#sidebar"><i class="ion-ios-arrow-left"></i></a>
		</div>
		<div id="menu-list">
			<ul class="nav-list pull-right">
				<li class="for-tablet nav-title"><a>Menu</a></li>
				<li class="for-tablet"><a href="login.php">Login</a></li>
				<li class="for-tablet"><a href="register.php">Register</a></li>
				<li class="dropdown magz-dropdown">
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
				<li class="dropdown magz-dropdown"><a href="<?=base_url();?>cho-thue.html">Cho thuê <i class="ion-ios-arrow-right"></i></a>
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
				
				<li class="dropdown magz-dropdown"><a href="<?=base_url();?>du-an.html">Dự án <i class="ion-ios-arrow-right"></i></a>
					<ul class="dropdown-menu">
						<li><a href="<?=base_url();?>du-an.html">Căn hộ, Chung cư</a></li>
						<li><a href="<?=base_url();?>du-an.html">Cao ốc văn phòng</a></li>
						<li><a href="<?=base_url();?>du-an.html">Trung tâm thương mại</a></li>
						<li><a href="<?=base_url();?>du-an.html">Khu đô thị mới</a></li>
						<li><a href="<?=base_url();?>du-an.html">Khu phức hợp</a></li>
						<li><a href="<?=base_url();?>du-an.html">Nhà ở xã hội</a></li>
						<li><a href="<?=base_url();?>du-an.html">Khu nghỉ dưỡng</a></li>
						<li><a href="<?=base_url();?>du-an.html">Khu công nghiệp</a></li>
						<li><a href="<?=base_url();?>du-an.html">Biệt thự, liền kề</a></li>
						<li><a href="<?=base_url();?>du-an.html">Dự án khác</a></li>
					</ul>
				</li>
				<li class="dropdown magz-dropdown"><a href="<?=base_url();?>kien-truc.html">Kiến trúc <i class="ion-ios-arrow-right"></i> <!--<div class="badge">Hot</div></a>-->
					<ul class="dropdown-menu">
						<li><a href="#">Tư vấn thiết kế</a></li>
						<li><a href="#">Căn hộ chung cư</a></li>
						
					</ul>
				</li>
				<li class="dropdown magz-dropdown"><a href="<?=base_url();?>xay-dung.html">Xây dựng <i class="ion-ios-arrow-right"></i></a>
					<ul class="dropdown-menu">
						<li><a href="#">Giải pháp xây dựng</a></li>
						<li><a href="#">Vật liệu xây dựng</a></li>
					</ul>
				</li>
				<li class="dropdown magz-dropdown"><a href="<?=base_url();?>noi-ngoai-that.html">Nội - ngoại thất<i class="ion-ios-arrow-right"></i></a>
					<ul class="dropdown-menu">
						<li><a href="#">Giải pháp xây dựng</a></li>
						<li><a href="#">Vật liệu xây dựng</a></li>
					</ul>
				</li>
				<li class="dropdown magz-dropdown"><a href="<?=base_url();?>danh-ba.html">Danh bạ<i class="ion-ios-arrow-right"></i></a>
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
				<li class="dropdown magz-dropdown"><a href="<?=base_url();?>tu-van.html">Tư vấn <i class="ion-ios-arrow-right"></i></a>
					<ul class="dropdown-menu">
						<li><a href="#">Đặt câu hỏi</a></li>
						<li><a href="#">Tư vấn thiết kế</a></li>
						<li><a href="#">Văn bản luật</a></li>
						<li><a href="#">Mua bán, cho thuê</a></li>
						<li><a href="#">Khác</a></li>
					</ul>
				</li>
				
			</ul>
		</div>
	</div>
</nav>
<!-- End nav -->

