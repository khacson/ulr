<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-6 col-xs-12 width-set-50">
				<div class="footer-details">
					<h4>Galaxy Hotel</h4>
					<div class="row">
						<a href="<?=base_url();?>trang-chu.html" title="Skyline"><img class="logo-foter"  src="<?=base_url();?>files/logo/<?=$finds->logo;?>" alt="#"></a>
					</div>
					<ul class="list-unstyled footer-contact-list">
						<li>
							<i class="fa fa-map-marker fa-lg"></i>
							<p><?=$finds->address;?></p>
						</li>
						<li>
							<i class="fa fa-phone fa-lg"></i>
							<p><a href="tel:<?=$finds->phone;?>"> <?=$finds->phone;?></a></p>
						</li>
						<li>
							<i class="fa fa-envelope-o fa-lg"></i>
							<p><a href="mailto:<?=$finds->email;?>"> <?=$finds->email;?></a></p>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="footer-details">
					<h4>Menu</h4>
					<ul class="list-unstyled footer-links">
						<li><a href="<?=base_url()?>trang-chu.html">Trang chủ</a></li>
						<li><a href="<?=base_url()?>gioi-thieu.html">Giới thiệu</a></li>
						<li><a href="<?=base_url()?>phong.html">Phòng</a></li>
						<li><a href="<?=base_url()?>hinh-anh.html">Hình ảnh</a></li>
						<li> <a href="<?=base_url()?>tin-tuc.html">Tin tức</a></li>
						<li> <a href="<?=base_url()?>lien-he.html">Liên hệ</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-3 col-sm-12 col-xs-12">
				<div class="footer-details">
					<h4>Kết nối</h4>
					<div class="row">
						<div class="col-md-12">
							<div class="input-group" id="subscribe">
								<input type="text" class="form-control subscribe-box" value="" name="subscribe" placeholder="Đan ký nhận khuyến mải">
								<span class="input-group-btn">
									<button type="button" class="btn subscribe-button"><i class="fa fa-paper-plane fa-lg"></i></button>
								</span>
							</div>
						</div>
					</div>
					<div class="footer-social-icon">
						<a target="_blank" href="<?=$finds->url_facebook;?>"><i class="fa fa-facebook"></i></a>
						<a target="_blank" href="<?=$finds->url_twitter;?>"><i class="fa fa-twitter"></i></a>
						<a target="_blank" href="<?=$finds->url_google;?>"><i class="fa fa-google"></i></a>
						<a target="_blank" href="<?=$finds->url_youtube;?>"><i class="fa fa-youtube"></i></a>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright">
			&copy; 2018 All right reserved. Designed by <a href="http://firefuma.vn/" target="_blank">Firefuma</a>
		</div>
	</div>
</footer>