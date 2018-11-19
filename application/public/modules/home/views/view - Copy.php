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
				<div class="carousel-background"><img src="<?=base_url();?>files/banner/<?=$item->img;?>" alt=""></div>
				<div class="carousel-container">
				  <div class="carousel-content">
					<!--<h2><?=$item->title;?></h2>
					<p><?=$item->description_sort;?></p>
					<a href="<?=base_url();?>files/design/<?=$item->friendlyurl;?>" class="btn-get-started scrollto">Xem</a>-->
				  </div>
				</div>
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
          <h3>Thiết kế</h3>
        </header>
        <div class="row disign-cols">
			  <?php $i=0; foreach($designs as $item){?>
				  <div class="col-md-4 wow fadeInUp" data-wow-delay="0.<?=$i;?>s">
					<div class="disign-col">
					  <div class="img">
						<img src="<?=base_url();?>files/design/thumb/<?=$item->thumb;?>" alt="<?=$item->title;?>" title="<?=$item->title;?>" class="img-fluid">
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
    </section><!-- #Design -->
	<!--Portfolio Section-->
    <section id="portfolio"  class="portfolio" >
      <div class="container">
        <header class="section-header">
          <h3 class="section-title ">Công nghệ</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Tất cả</li>
			  <?php foreach($technologys as $item){?>
				<li data-filter=".filter-<?=$item->id;?>"><?=$item->title;?></li>
			  <?php }?>
            </ul>
          </div>
        </div>
        <div class="row portfolio-container">
			 <?php foreach($pictures as $item){
				 $picturetype_name = 'Hình ảnh';
				  if(!empty($item->video)){
					  $picturetype_name = 'Video';
				  }
				 ?>
			  <div class="col-lg-4 col-md-6 portfolio-item filter-<?=$item->typeid;?> wow fadeInUp" data-wow-delay="0.1s">
				<div class="portfolio-wrap">
				  <figure>
					<img src="<?=base_url();?>files/picture/thumb/<?=$item->thumb;?>" class="img-fluid" alt="<?=$item->title;?>" title="<?=$item->title;?>">
					<a href="<?=base_url();?>files/picture/<?=$item->image;?>" class="link-preview" data-lightbox="portfolio" data-title="<?=$item->title;?>" title="Preview"><i class="ion ion-eye"></i></a>
					<a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
				  </figure>
				  <div class="portfolio-info">
					<h4><a target="_blank" href="<?=$item->linkweb;?>"><?=$item->title;?></a></h4>
					<p><?=$picturetype_name;?></p>
				  </div>
				</div>
			  </div>
			 <?php }?>
        </div>
      </div>
    </section><!-- #portfolio -->
    <!--About Us Section-->
    <section id="about" class="about slide_about">
      <div class="container">
        <header class="section-header">
          <h3>Giới thiệu</h3>
          <p><?=$abouts->description_short;?></p>
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
          <h3>Đối tác</h3>
        </header>

        <div class="owl-carousel clients-carousel">
			<?php foreach($customers as $item){?>
				<a href="<?=$item->website;?>" target="_blank"><img src="<?=base_url();?>files/customer/<?=$item->img;?>" alt="<?=$item->customer_name;?>"></a>
			<?php }?>
        </div>

      </div>
    </section><!-- #clients -->

    <!--==========================
      Clients Section
    ============================-->
    <!--<section id="testimonials" class="section-bg wow fadeInUp">
      <div class="container">
        <header class="section-header">
          <h3>Họ nói về chúng tôi</h3>
        </header>
        <div class="owl-carousel testimonials-carousel">
          <div class="testimonial-item">
            <img src="<?=url_tmpl();?>img/testimonials.png" class="testimonial-img" alt="">
            <h3>Mrs. Thanh</h3>
            <p>
              <img src="<?=url_tmpl();?>img/quote-sign-left.png" class="quote-sign-left" alt="">
              Ban đầu mình rất phân vân giữa việc bỏ phần mềm offline đang sử dụng để triển khai phần mềm online. Giờ thì mình có thể nói là đã quyết định đúng đắn.
              <img src="<?=url_tmpl();?>img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>
          <div class="testimonial-item">
            <img src="<?=url_tmpl();?>img/testimonials.png" class="testimonial-img" alt="">
            <h3>Mrs. Thu</h3>
            <p>
              <img src="<?=url_tmpl();?>img/quote-sign-left.png" class="quote-sign-left" alt="">
              Mình thấy hiệu quả rỏ rệt khi áp dụng phần mềm vào quán cà phê của mình. Mình có thể xem báo cáo dù bất cứ nơi đâu ngay cả khi mình đi công tác
              <img src="<?=url_tmpl();?>img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>
        </div>
      </div>
    </section>-->
	<!-- #testimonials -->

    <!--==========================
      Team Section
    ============================-->
    <!--<section id="team">
      <div class="container">
        <div class="section-header wow fadeInUp">
          <h3>Nhân sự</h3>
          <p>Firefuma là một đội ngũ các chuyên gia CNTT với các kỹ sư giàu kinh nghiệm cũng với sự năng động, đầy nhiệt huyết của các bạn trẻ.</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="<?=url_tmpl();?>img/nhansu1.png" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Mr. Son Nguyen</h4>
                  <span>Manager</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="<?=url_tmpl();?>img/nhansu1.png" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Mr. Ben Nguyen</h4>
                  <span>Manager</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="<?=url_tmpl();?>img/nhansu1.png" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Mr. Vuong Nguyen</h4>
                  <span>Developer</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="<?=url_tmpl();?>img/nhansu2.png" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Miss. Nhung Nguyen</h4>
                  <span>Accountant</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>--><!-- #team -->
  </main>