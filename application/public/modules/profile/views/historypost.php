<section class="search">
			<div class="container">
				<div class="row">
					<div class="col-md-3 sidebar-profile">
						<?=$this->load->inc('profile');?>
					</div>
					<div class="col-md-9 content-profile">
						<div class="nav-tabs-group">
							<ul class="nav-tabs-list">
								<li ><a href="<?=base_url();?>profile/2">Thông tin hồ sơ</a></li>
								<li class="active"><a href="<?=base_url();?>profile/historypost/2">Tin đã đăng (20)</a></li>
								<li><a href="<?=base_url();?>profile/approved/2">Tin được duyệt (15)</a></li>
								<li><a href="<?=base_url();?>profile/waiting/2">Tin chưa duyệt (1)</a></li>
								<li><a href="<?=base_url();?>profile/expired/2">Tin hết hạn (4)</a></li>
							</ul>
						</div>
						
						<div class="row mtop10">
							<div class="col-md-12">
								<!--S Nội dung-->
								<?php for($i=1; $i< 20; $i++) {?>
									<article class="article-list">
										<div class="inner">
										  <figure>
											  <a href="detail.php">
												<img src="<?=url_tmpl();?>images/news/img01.jpg">
											</a>
										  </figure>
										  <div class="details">
											<div class="detail">
											  <div class="time">December 26, 2018</div>
											</div>
											<h1><a href="detail.php">Bán nhà Quận 2, phường Bình Trưng Tây, mặt đường ô tô, DT 78.3m2, 2 lầu, mặt đường ô tô, DT 78.3m2, 2 lầu</a></h1>
											<ul class="price">
												<li>Giá:  4.85 tỷ</li>
												<li>Diện tích: 78.3 m²</li>
												<li> Quận 2, Hồ Chí Minh</li>
											</ul>
											<p></p>
											<footer>
											  <a class="btn btn-primary more" href="detail.php">
												<div>Xem hiển thị</div>
												<div><i class="ion-ios-arrow-thin-right"></i></div>
											  </a>
											  <a class="btn btn-primary more" href="detail.php">
												<div>Sửa tin</div>
												<div><i class="ion-ios-arrow-thin-right"></i></div>
											  </a>
											</footer>
										  </div>
										</div>
									  </article>
								<?php }?>
								<!--E Nội dung-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
