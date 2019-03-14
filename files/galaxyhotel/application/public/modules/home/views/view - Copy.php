<section class="section-slider height-v">
		<div class="slider">		
		<div id="about-slider">
			<div id="carousel-slider" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators visible-xs">
					<?php $i=0; foreach($banners as $item){?>
					<li data-target="#carousel-slider" data-slide-to="<?=$i;?>" <?php if($i==0){?>class="active" <?php }?>></li>
					<?php $i++;}?>
				</ol>

				<div class="carousel-inner">
					<?php $i=0; foreach($banners as $item){?>
					<div class="item <?php if($i==0){?>active<?php }?>">						
						<img src="<?=base_url();?>files/banner/<?=$item->img;?>" class="img-responsive" alt=""> 
						<div class="container">
							<div class="carousel-caption ">
								<h1 class="v2"><?=$item->slide_name;?></h1>
								<p class="p-v2"><span class="line-t"></span><?=$item->description;?><span class="line-b"></span></p>
							</div>
						</div>
				    </div>
				   <?php $i++;}?>
				</div>
				<a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
					<div class="owl-nav">
						<div class="owl-prev">prev</div>
					</div>
				</a>
				<a class=" right carousel-control hidden-xs" href="#carousel-slider" data-slide="next">
					<div class="owl-nav">
						<div class="owl-next">next</div>
					</div>
				</a>
				<!--<div class="owl-nav">
					<div class="owl-prev">prev</div>
					<div class="owl-next">next</div>
				</div>-->
			</div> <!--/#carousel-slider-->
		</div><!--/#about-slider-->
	</div><!--/#slider-->
		<!--E Slide-->
        <div class="check-avail">
            <div class="container">
                <div class="arrival date-title ">
                    <label>Từ ngày </label>
                    <div id="datepicker" class="input-group date" data-date-format="dd/mm-/yyyy">
                        <input class="form-control" value="<?=$timeNows;?>" type="text">
                        <span class="input-group-addon"><img src="<?=url_tmpl();?>img/date-icon.png" alt="#"></span>
                    </div>
                </div>
                <div class="departure date-title ">
                    <label>Đến ngày </label>
                    <div id="datepickeri" class="input-group date" data-date-format="dd/mm/yyyy">
                        <input class="form-control" value="<?=$timeNows;?>" type="text">
                        <span class="input-group-addon"><img src="<?=url_tmpl();?>img/date-icon.png" alt="#"></span>
                    </div>
                </div>
                <div class="adults date-title ">
                    <label>Người lớn</label>
                    <form>
                        <div class=" carousel-search">
                            <div class="btn-group">
                                <a class="btn dropdown-toggle " data-toggle="dropdown" href="#">2</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="children date-title ">
                    <label>Trẻ em</label>
                    <form>
                        <div class=" carousel-search">
                            <div class="btn-group">
                                <a class="btn dropdown-toggle " data-toggle="dropdown" href="#">2</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="find_btn date-title">
                    <div class="text-find">
                        Đặt
                        <br>Phòng
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END / SLIDER -->
    <!-- OUR-ROOMS-->
    <section class="rooms">
        <div class="container">
            <h2 class="title-room"><?=$aboutProducts->about_title;?></h2>
            <div class="outline"></div>
            <p class=""><?=$aboutProducts->description_short;?></p>
            <div class="wrap-rooms">
                <div class="row">
                    <div id="rooms" class="owl-carousel owl-theme owl-loaded owl-drag">
                    <div class="owl-stage-outer">
						<div class="owl-stage" style="transform: translate3d(-2400px, 0px, 0px); transition: all 0s ease 0s; width: 8400px;">
							<div class="owl-item cloned" style="width: 1200px;"></div>
							<div class="owl-item cloned" style="width: 1200px;"></div>
							<div class="owl-item" style="width: 1200px;">
								<?php foreach($products as $item){?>
									<div class="item ">
										<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 ">
											<div class="wrap-box">
												<div class="box-img">
													<a href="<?=base_url();?>phong/<?=$item->friendlyurl;?>-<?=$item->id;?>.html"><img src="<?=base_url();?>files/product/thumb/<?=$item->thumb;?>" class="img-responsive" alt="<?=$item->title;?>" title="<?=$item->title;?>">
													</a>
												</div>
												<div class="rooms-content">
													<h4 class="sky-h4"><a href="<?=base_url();?>phong/<?=$item->friendlyurl;?>-<?=$item->id;?>.html"><?=$item->title;?></a></h4>
													<p class="price"><?=number_format($item->price);?> / <?=$item->price_type;?></p>
												</div>
											</div>
										</div>
									</div>
								<?php }?>
							</div>
							</div>
						</div>
					</div>
                </div>
            </div>
        </div>
        <!-- /container -->
    </section>
    <!-- END / ROOMS -->
    <!-- ABOUT-US-->
    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5">
                    <div class="about-centent">
                        <h2 class="about-title">Giới thiệu</h2>
                        <div class="line"></div>
                        <p class="about-p1"><?=$abouts->description_short;?></p>
						<br>
                        <a href="<?=base_url();?>gioi-thieu.html" class="read-more">Xem chi tiết...</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-7 col-lg-7 ">
                    <div class="about-img">
                        <div class="img-1">
							<?php $ids = 0; if(!empty($aboutSlides[0]->id)){
								 $ids = $aboutSlides[0]->id;
								?>
								<a title="<?=$aboutSlides[0]->slide_name;?>" href="<?=$aboutSlides[0]->url;?>"><img src="<?=base_url();?>files/aboutslide/<?=$aboutSlides[0]->img;?>" class="img-responsive" alt="<?=$aboutSlides[0]->slide_name;?>"></a>
							<?php }?>
							<?php $j=2; foreach($aboutSlides as $item){
								if($item->id == $ids){
									continue;
								}
								?>
								<div class="img-<?=$j;?>">
									<a title="<?=$item->slide_name;?>" href="<?=$item->url;?>"><img src="<?=base_url();?>files/aboutslide/<?=$item->img;?>" class="img-responsive" alt="<?=$item->slide_name;?>"></a>
								</div>
							<?php $j++;}?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END/ ABOUT-US-->
    <!-- BEST -->
    <section class="best">
        <div class="container">
            <div class="row">
				<?php foreach($serviceTpyes as $item){?>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <div class="wrap-best">
                        <div class="icon-best">
                            <a href="<?=base_url();?>dich-vu/<?=$item->friendlyurl;?>.html"><img src="<?=base_url();?>files/servicetype/<?=$item->img;?>" class="img-responsive" alt="<?=$item->type_name;?>"></a>
                        </div>
                        <h6 class="sky-h6 mtop10  ptop10">
							<a href="<?=base_url();?>dich-vu/<?=$item->friendlyurl;?>.html">
							<?=$item->type_name;?></a>
						</h6>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </section>
    <!-- END / BEST -->
    <!-- TESTIMONOALS -->
    <!--<section class="testimonials">
        <div class="testimonials-h">
            <div class="testimonials-content">
                <div class="container">
                    <div id="testimonials" class="owl-carousel owl-theme owl-loaded owl-drag">
                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-2400px, 0px, 0px); transition: all 0s ease 0s; width: 8400px;"><div class="owl-item cloned" style="width: 1170px; margin-right: 30px;"><div class="item">
                            <div class="img-testimonials"><img src="<?=url_tmpl();?>img/about-testimonials-img.png" alt="#"></div>
                            <p class="testimonials-p"><span>“</span>​‌ 
Thisis the only place to stay in Catalina! I have stayed in the cheaper 
hotels and they were fine, but this is just the icing onthe cake! After 
spending the day bike riding and hiking to come back and enjoy a glass 
of wine while looking out your <span>​‌​‌”</span> ocean view window and then to top it all off...</p>
                            <h5 class="sky-h5">JULIA ROSE</h5>
                            <p class="testimonials-p1">From Los Angeles, California</p>
                        </div></div></div></div><div class="owl-nav"><div class="owl-prev">prev</div><div class="owl-next">next</div></div><div class="owl-dots"><div class="owl-dot active"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div></div></div>
                </div>
            </div>
        </div>
    </section>-->
    <!-- END / TESTIMONOALS -->
    <!--OUR-EVENTS-->
    <section class="events">
        <div class="container">
            <h2 class="events-title">Tin tức sự kiện</h2>
            <div class="line"></div>
            <div id="events-v2" class="owl-carousel owl-theme owl-loaded owl-drag">
            <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1600px, 0px, 0px); transition: all 0.25s ease 0s; width: 3600px;">
				<div class="owl-item cloned" style="width: 370px; margin-right: 30px;"></div>
				<div class="owl-item cloned" style="width: 370px; margin-right: 30px;"></div>
				<div class="owl-item cloned" style="width: 370px; margin-right: 30px;"></div>
				<div class="owl-item" style="width: 370px; margin-right: 30px;"></div>
				<!---S--->
				<?php foreach($blogs as $item){?>
				<div class="owl-item" style="width: 370px; margin-right: 30px;">
					<div class="item">
						<div class="events-item">
							<div class="events-img">
								<a href="<?=base_url();?>tin-tuc/<?=$item->friendlyurl;?>.html"><img src="<?=base_url();?>files/blog/thumb/<?=$item->thumb;?>" class="img-responsive" alt="<?=$item->title;?>" /></a>
							</div>
							<div class="events-content">
								<a href="<?=base_url();?>tin-tuc/<?=$item->friendlyurl;?>.html" title="<?=$item->title;?>">
									<p class="sky-p"></p>
									<h3 class="sky-h3"><?=$item->title;?></h3>
								</a>
							</div>
						</div>
					</div>
				</div>
				<?php }?>
				<!--E-->
			</div>
        </div>
    </section>
    <!-- END / OUR EVENTS -->
    <!-- OUR-GALLERY-->
    <section class="gallery-our">
        <div class="container-fluid">
            <div class="gallery">
                <h2 class="title-gallery">Thư viện</h2>
                <div class="outline"></div>
                <ul class="nav nav-tabs text-uppercase">
					<?php $i=1; foreach($pictureTypes as $item){?>
                    <li <?php if($i==1){?> class="active" <?php }?>><a data-toggle="tab" href="#menu<?=$i;?>"><?=$item->picturetype_name;?></a></li>
					<?php $i++;}?>
                </ul>
                <br>
                <div class="tab-content">
					<?php $j=1; foreach($pictureTypes as $item){
						$pictures = $this->model->table('galaxy_picture')
												->select('id,title,thumb,image')
												->where('typeid',$item->id)
												->find_all();
						?>
                    <div id="menu<?=$j;?>" class="tab-pane fade <?php if($j==1){?>in active<?php }?>">
                        <div class="product ">
                            <div class="row">
								<?php foreach($pictures as $item){?>
									<div class="gallery_product col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
										<div class="wrap-box">
											<div class="box-img">
												<img src="<?=base_url();?>files/picture/thumb/<?=$item->thumb;?>" class="img-responsive" alt="<?=$item->title;?>" title="<?=$item->title;?>">
											</div>
											<div class="gallery-box-main " title="<?=$item->title;?>">
												<div class="gallery-icon">
													<a class="lightbox " href="<?=base_url();?>files/picture/<?=$item->image;?>" data-littlelightbox-group="gallery" title="<?=$item->title;?>"><i class="ion-ios-plus-empty" aria-hidden="true"></i> </a>
												</div>
											</div>
										</div>
									</div>
								<?php }?>
                            </div>
                        </div>
                    </div>
					<?php $j++;}?>
					<!--E Tab-->
                </div>
                <!-- end-tab-content -->
                <div class="text-center">
                    <button type="button" class="btn btn-default btn-our">VIEW MORE</button>
                </div>
            </div>
            <!-- /gallery -->
        </div>
        <!-- /container -->
    </section>