<section id="main-slider">
        <div class="owl-carousel">
            <div class="item" style="background-image: url(images/slider/bg1.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2><span>Multi</span> is the best Onepage html template</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et  dolore magna incididunt ut labore aliqua. </p>
                                    <a class="btn btn-primary btn-lg" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
             <div class="item" style="background-image: url(images/slider/bg2.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2>Beautifully designed <span>free</span> one page template</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et  dolore magna incididunt ut labore aliqua. </p>
                                    <a class="btn btn-primary btn-lg" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.owl-carousel-->
    </section><!--/#main-slider-->

<section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
		  <?php $i=1; 
			foreach($banners as $item){
				$active = '';
				if($i==1){
					$active = 'active';
				}
				?>
			  <div class="carousel-item <?=$active;?>">
				<div class="/;"><img src="<?=base_url();?>files/banner/<?=$item->img;?>" alt=""></div>
				
			  </div>
		  <?php $i++;}?>
        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->
  <main id="main">
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

      </div>
    </section><!-- #clients -->
  </main>