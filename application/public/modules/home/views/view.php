<link href="<?=url_tmpl();?>css/owl.carousel.css" rel="stylesheet">
<link href="<?=url_tmpl();?>css/owl.transitions.css" rel="stylesheet">
<section id="main-slider">
	<div class="owl-carousel">
		<?php $i=1; 
		foreach($banners as $item){
			$arrImg = explode(";",$item->img);
			
			?>
			<div class="item background-item">
				<img src="<?=base_url();?>files/banner/<?=$item->thumb_img;?>" alt="">
				<div class="slider-inner">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<div class="carousel-content">
									<h2 class="banner-title"><span><?=$item->slide_name;?></span></h2>
								</div>
							</div>
							<?php if(count($arrImg) > 0){
								$ii = 1;
								foreach ($arrImg as $k => $v) {
									$classAdd = '';
									$imgLink = '';
									if (!empty($v)){
										$imgLink = base_url().'files/banner/' . $v;
										if ($ii > 1) {
											$classAdd = "hidden-xs hidden-xs-down hidden-sm-up d-none d-sm-block";
										}
									}
									if ($ii > 3) {
										break;
									}
								?>
									<div class="col-sm-4 <?=$ii;?> <?=$classAdd;?>">
										<div class="carousel-content">
											<img class="img-banner" src="<?=$imgLink;?>" />
										</div>
									</div>
							<?php $ii++;}}?>
						</div>
					</div>
				</div>
			</div><!--/.item-->
		<?php }?>
	</div><!--/.owl-carousel-->
</section><!--/#main-slider-->
	<!--Design-->
    <section id="disign" class="disign">
      <div class="container">
        <header class="section-header">
          <h3><?php echo getLanguagePubic('thiet-ke');?></h3>
        </header>
        <div class="row disign-cols">
			  <?php $i=0; foreach($designs as $item){?>
				  <div class="col-md-4 wow fadeInUp" data-wow-delay="0.<?=$i;?>s">
					<div class="disign-col">
					  <div class="img">
						<img src="<?=base_url();?>files/design/thumb/<?=$item->thumb;?>" alt="<?=$item->title;?>" title="<?=$item->title;?>" class="img-fluid">
					  </div>
					  <h2 class="title"><a title="<?=$item->title;?>" href="<?=base_url();?>thiet-ke/<?=$item->friendlyurl;?>/<?=$lang;?>.html"><?=$item->title;?></a></h2>
					  <p>
						<?=$item->description_sort;?>
					  </p>
					</div>
				  </div>
			  <?php $i++;}?>
        </div>
      </div>
    </section><!-- #Design -->
	<!--Portfolio Section-->
    <section id="disign" class="disign">
      <div class="container">
        <header class="section-header">
          <h3><?php echo getLanguagePubic('cong-nghe');?></h3>
        </header>
        <div class="row disign-cols">
			  <?php $i=0; foreach($technologys as $item){?>
				  <div class="col-md-3 wow fadeInUp" data-wow-delay="0.<?=$i;?>s">
					<div class="disign-col">
					  <div class="img">
						<img src="<?=base_url();?>files/technology/thumb/<?=$item->thumb;?>" alt="<?=$item->title;?>" title="<?=$item->title;?>" class="img-fluid">
					  </div>
					  <h2 class="title"><a title="<?=$item->title;?>" href="<?=base_url();?>cong-nghe/<?=$item->friendlyurl;?>/<?=$lang;?>.html"><?=$item->title;?></a></h2>
					  <p>
						<?=$item->description_sort;?>
					  </p>
					</div>
				  </div>
			  <?php $i++;}?>
        </div>
      </div>
    </section><!-- #Design -->
	
    <!--About Us Section-->
    <section id="about" class="about slide_about">
      <div class="container">
        <header class="section-header">
          <h3><?php echo getLanguagePubic('gioi-thieu');?></h3>
          <?php if(!empty($abouts->description_short)){?><p><?=$abouts->description_short;?><?php }?></p>
        </header>
        <div class="row about-cols">
			  <?php $i=0; foreach($slideAbouts as $item){?>
				  <div class="col-md-4 wow fadeInUp" data-wow-delay="0.<?=$i;?>s">
					<div class="about-col">
					  <div class="img">
						<img src="<?=base_url();?>files/aboutslide/thumb/<?=$item->thumb;?>" alt="<?=$item->title;?>" title="<?=$item->title;?>" class="img-fluid">
						<div class="icon"><i class="ion-ios-list-outline"></i></div>
					  </div>
					  <h2 class="title"><a title="<?=$item->title;?>" href="#"><?=$item->title;?></a></h2>
					  <p>
						<?=$item->description_sort;?>
					  </p>
					</div>
				  </div>
			  <?php $i++;}?>
        </div>
      </div>
    </section><!-- #about -->
    <!--Clients Section-->
    <section id="clients" class="wow fadeInUp">
      <div class="container">
        <header class="section-header">
          <h3><?php echo getLanguagePubic('khach-hang');?></h3>
        </header>
        <div class="owl-carousel clients-carousel">
			<?php foreach($customers as $item){?>
				<a href="<?=$item->website;?>" target="_blank"><img src="<?=base_url();?>files/customer/<?=$item->img;?>" alt="<?=$item->customer_name;?>"></a>
			<?php }?>
        </div>
		<div class="row"></div>
      </div>
    </section><!-- #clients -->
