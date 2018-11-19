<div class="footer-top">
  <div class="container">
	<div class="row">
	  <div class="col-lg-3 col-md-6 footer-info">
		<a href="<?=base_url();?>"><img class="footer-logo"  src="<?=url_tmpl();?>img/logo.png" /></a>
		
	  </div>
	  <div class="col-lg-2 col-md-6 footer-links mlefta60">
		<h4><?php echo getLanguagePubic('menu');?></h4>
		<ul>
		  <li><i class="ion-ios-arrow-right"></i> <a title="<?php echo getLanguagePubic('gioi-thieu');?>" href="<?=base_url();?>gioi-thieu/<?=$lang;?>.html"><?php echo getLanguagePubic('gioi-thieu');?></a></li>
		  <li><i class="ion-ios-arrow-right"></i> <a title="<?php echo getLanguagePubic('thiet-ke');?>" href="<?=base_url();?>thiet-ke/0/<?=$lang;?>.html"><?php echo getLanguagePubic('thiet-ke');?></a></li>
		  <li><i class="ion-ios-arrow-right"></i> <a title="<?php echo getLanguagePubic('cong-nghe');?>" href="<?=base_url();?>cong-nghe/0/<?=$lang;?>.html"><?php echo getLanguagePubic('cong-nghe');?></a></li>
		  <li><i class="ion-ios-arrow-right"></i> <a title="<?php echo getLanguagePubic('lien-he');?>" href="<?=base_url();?>lien-he/<?=$lang;?>.html"><?php echo getLanguagePubic('lien-he');?></a></li>
		</ul>
	  </div>
	  <div class="col-lg-4 col-md-6 footer-contact">
		<h4><?=$finds->company_name;?></h4>
		<p>
		  <?php echo getLanguagePubic('dia-chi-cong-ty');?><br>
		  <strong><?php echo getLanguagePubic('dien-thoai');?>:</strong> <?=$finds->phone;?><br>
		  <strong><?php echo getLanguagePubic('email');?>:</strong> <?=$finds->email;?><br>
		  <strong><?php echo getLanguagePubic('skype');?>:</strong> <?=$finds->skype;?><br>
		</p>
	  </div>
	  <div class="col-lg-3 col-md-6 footer-newsletter">
		<h4 class="nowrap"><?php echo getLanguagePubic('ket-noi');?>&nbsp;&nbsp;<?=$finds->company_name;?></h4>
		<div class="social-links">
		  <a href="<?=$finds->url_twitter;?>" class="twitter"><i class="fa fa-twitter"></i></a>
		  <a href="<?=$finds->url_facebook;?>" class="facebook"><i class="fa fa-facebook"></i></a>
		  <a href="<?=$finds->url_google;?>" class="google-plus"><i class="fa fa-google-plus"></i></a>
		  <a href="<?=$finds->url_youtube;?>" class="google-plus"><i class="fa fa-youtube"></i></a>
		</div>
	  </div>
	</div>
  </div>
</div>
<div class="container">
  <div class="copyright">
	&copy; Copyright <strong>Mectronictechnology</strong>. All Rights Reserved  <a class="copy" href="https://firefuma.vn">Design by Firefuma</a> 
  </div>
</div>