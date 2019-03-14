<link rel="stylesheet" href="<?=url_tmpl();?>productdetail/css/style.css">
<div class="parallax-mirror">
	<img class="parallax-slider loaded parallax-mirror-img" src="<?=url_tmpl();?>productdetail/img/1_003.jpg">
</div>
<header id="headerdetail" >
        <!-- .header-overlay -->
        <div class="header-overlay">
            <!-- .header-content -->
            <div class="header-content">
                <!-- .container -->
                <div class="container">
                    <!-- .row -->
                    <div class="row">
                        <div class="col-sm-6 col-md-7 col-lg-6">
                        	<div class="header-txt">
                            	<h1><?=$finds->title;?></h1>
                                <h4><?=$finds->description_sort;?></h4>
                                <div class="header-txt-btn">
                                	<a href="#" class="btn-play fancybox-media" title="Play Video" rel="media-gallery"><i class="fa fa-play"></i></a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-6 col-md-5 col-lg-offset-1">
                            <div class="header-form">
                            	<div class="submit-status"></div> <!-- submit status -->
                                <ul class="header-form-heading">
                                    <li>
                                        <i class="fa fa-send-o"></i>
                                        <p>ĐĂNG KÝ TÀI KHOẢN DÙNG THỬ</p>
										 <p class="txt-desc">Bạn được trải nghiệp hệ thống trong 30 ngày</p>
                                    </li>
                                </ul>
								<?php 
									$link = '#';
									if($finds->id ==  258){
										$link = 'http://hotel.firefuma.vn/';
									}
								?>
                                <form method="post" action="#" class="affa-form-signup">
                                    <input name="name" id="header_form_name" placeholder="Tên công ty/doanh nghiệp"  type="text">
									<input name="phone" id="phone" placeholder="Điện thoại"  type="text">
									<input name="password" id="password" placeholder="Mật khẩu"  type="password">
                                    <input name="email" id="email" placeholder="Email"  type="text">
                                    <input name="submit" value="Đăng ký" class="btn-medium" type="button">
									<a target="_blank" href="<?=$link;?>"><input name="submit" value="Xem demo" class="btn-medium demo-detail" type="button" title="xem demo"></a>
                                </form>
                                <p class="txt-desc"></p>
                            </div>
                        </div>
                    </div>
                    <!-- .row end -->
                </div>
                <!-- .container end -->
            </div>
            <!-- .header-content end -->
        </div>
        <!-- .header-overlay end -->
    </header>
    <!-- #header end -->	

    <div id="features" class="padding-top30">
        <!-- .container -->
        <div class="container">
            <div class="post-heading-center">
            	<h2>Tính năng sản phẩm</h2>
            </div>
            <!-- .row -->
            <div class="row padding-bottom20">
                 <?php foreach($features as $item){?>
						<div class="col-sm-4"> <!-- 1 -->
							<div class="affa-feature-img">
								<img src="<?=base_url();?>files/feature/<?=$item->image;?>" alt="<?=$item->title;?>" title="<?=$item->title;?>">
								<h4><?=$item->title;?></h4>
								<p><?=$item->description_sort;?></p>
							</div>
						</div>
				 <?php }?>
                
            </div>
            <!-- .row end -->
            <!-- .row -->
            <!--<div class="row padding-bottom20">
                <div class="col-sm-6 col-md-5 margin-bottom40">
                	<figure><img src="<?=url_tmpl();?>productdetail/img/apple-devices.png" alt="Image"></figure>
                </div>
                <div class="col-sm-6 col-md-7 col-lg-6 col-lg-offset-1 margin-bottom20">
                	<div class="col-txt100">
                        <div class="post-heading-left post-heading-top-desc margin-bottom20">
                            <h2>How does this <strong>Conversi</strong> work</h2>
                        </div>
                        
                        <p>Lorem ipsum dolor sit amet, consectetur 
adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore 
magna aliqua uta enim ad minim veniam, quis nostrud exercitation ullamco
 laboris justo duo dolores et ea rebum.</p>
                        <div class="list-icon">
                            <ul>
                                <li><i class="fa fa-check-square-o"></i> Reliable and secure platform</li>
                                <li><i class="fa fa-check-square-o"></i> Everything is perfectly orgainized for future</li>
                                <li><i class="fa fa-check-square-o"></i> Attach large files easily</li>
                                <li><i class="fa fa-check-square-o"></i> Forwarding email accounts for free</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 margin-bottom20">
                	<div class="col-txt120">
                        <div class="post-heading-left text-center-sm">
                        	<h2><strong>Great support.</strong> We'll help you!</h2>
                            <p>Our customer service won’t leave you alone</p>
                        </div>
                        <p class="margin-bottom20 text-center-sm">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempam justo duo dolores aliqua dolore rebum.</p>
                        <div class="row">
                        	<div class="col-sm-6">
                            	<div class="affa-col-txt">
                                    <h4>Support step 1</h4>
                                    <p>Duis aute dolor reprehende ritin voluptate cillum dolore fugiatos pariatur sint occaecat est.</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                            	<div class="affa-col-txt">
                                    <h4>Support step 2</h4>
                                    <p>Duis aute dolor reprehende ritin voluptate cillum dolore fugiatos pariatur sint occaecat est.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        	<div class="col-sm-6">
                            	<div class="affa-col-txt">
                                    <h4>Support step 3</h4>
                                    <p>Duis aute dolor reprehende ritin voluptate cillum dolore fugiatos pariatur sint occaecat est.</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                            	<div class="affa-col-txt">
                                    <h4>Support step 4</h4>
                                    <p>Duis aute dolor reprehende ritin voluptate cillum dolore fugiatos pariatur sint occaecat est.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-0">
                    <figure><img src="<?=url_tmpl();?>productdetail/img/great-support.png" alt="Image"></figure>
                </div>
            </div>-->
        </div>
    </div>
    <!-- #features end -->
   
    <!-- #pricing -->
    <div id="pricing" class="wrap-container8040">  	
        <!-- .container -->
        <div class="container">
            
            <div class="post-heading-center">
            	<h2>Bảng giá dịch vụ</h2>
            </div>
            
            <div class="affa-tbl-prc tbl-prc-recommended">
            	<div class="row">
                	<?php foreach($priceDetail as $item){
						$price = number_format($item->price);
						if(empty($item->price)){
							$price = 'Liên hệ';
						}
						?>
						<div class="col-sm-4"> <!-- 1 -->
							<div class="tbl-prc-col">
								<div class="tbl-prc-heading">
									<h4><?=$item->title;?></h4>
									<div class="tbl-prc-price">
										<h5><?=$price;?><span><br>vnđ</span></h5>
										<p>Một tháng</p>
									</div>
								</div>
								<?=$item->description_sort;?>
								<div class="tbl-prc-footer">
									<a href="<?=base_url();?>san-pham/dang-ky/<?=$item->id;?>" class="btn-custom">Đăng ký</a>
								</div>
							</div>
						</div>
                    <?php }?>
                </div>
            </div>
            
        </div>
        <!-- .container end -->
        
    </div>
    <!-- #pricing end -->
    
    <!-- #faq -->
    <!--<div id="faq" class="bg-grey wrap-container80 text-center-xs">
        <div class="container">
            <div class="post-heading-center">
            	<h2>Frequently Asked Questions</h2>
                <p>Got questions? We have got the best answers for you.</p>
            </div>
            <div class="row">
                
                <div class="col-sm-6">
                	<div class="affa-faq">
                    	<h4>Question about our product 1</h4>
                        <p>Aenean dictum pharetra nibh, sodales luctus 
felis aliquet vulputate venenatis orci, a laoreet libero vehicula duis 
tempor rhoncus quam, occaecat cupidatat non proident. Enim ad minim 
veniam, quis nostrud exercitation ullamco consequat.</p>
                    </div>
                </div>
                
                <div class="col-sm-6">
                	<div class="affa-faq">
                    	<h4>Question about our product 2</h4>
                        <p>Aenean dictum pharetra nibh, sodales luctus 
felis aliquet vulputate venenatis orci, a laoreet libero vehicula duis 
tempor rhoncus quam, occaecat cupidatat non proident. Enim ad minim 
veniam, quis nostrud exercitation ullamco consequat.</p>
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-sm-6">
                	<div class="affa-faq">
                    	<h4>Question about our product 3</h4>
                        <p>Aenean dictum pharetra nibh, sodales luctus 
felis aliquet vulputate venenatis orci, a laoreet libero vehicula duis 
tempor rhoncus quam, occaecat cupidatat non proident. Enim ad minim 
veniam, quis nostrud exercitation ullamco consequat.</p>
                    </div>
                </div>
                <div class="col-sm-6">
                	<div class="affa-faq">
                    	<h4>Question about our product 4</h4>
                        <p>Aenean dictum pharetra nibh, sodales luctus 
felis aliquet vulputate venenatis orci, a laoreet libero vehicula duis 
tempor rhoncus quam, occaecat cupidatat non proident. Enim ad minim 
veniam, quis nostrud exercitation ullamco consequat.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6"> 
                	<div class="affa-faq">
                    	<h4>Question about our product 5</h4>
                        <p>Aenean dictum pharetra nibh, sodales luctus 
felis aliquet vulputate venenatis orci, a laoreet libero vehicula duis 
tempor rhoncus quam, occaecat cupidatat non proident. Enim ad minim 
veniam, quis nostrud exercitation ullamco consequat.</p>
                    </div>
                </div>
                <div class="col-sm-6"> 
                	<div class="affa-faq">
                    	<h4>Question about our product 6</h4>
                        <p>Aenean dictum pharetra nibh, sodales luctus 
felis aliquet vulputate venenatis orci, a laoreet libero vehicula duis 
tempor rhoncus quam, occaecat cupidatat non proident. Enim ad minim 
veniam, quis nostrud exercitation ullamco consequat.</p>
                    </div>
                </div>
                
            </div>
            <h4 class="affa-faq-link">
            	<a href="https://twitter.com/affapress" target="_blank">Still have questions? Tweet @affapress for answers!</a>
            </h4>
            
        </div>
    </div>-->
    <!-- #faq -->

