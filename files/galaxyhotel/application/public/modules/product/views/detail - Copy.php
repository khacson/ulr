<div class="parallax-mirror" style="visibility: visible; z-index: -100; position: fixed; top: 0px; left: 0px; overflow: hidden; transform: translate3d(0px, 0px, 0px); height: 765px; width: 1349px;"><img class="parallax-slider loaded" src="<?=url_tmpl();?>productdetail/img/2.jpg" style="transform: translate3d(0px, 0px, 0px); position: absolute; top: -59px; left: 0px; height: 758px; width: 1349px; max-width: none;"></div>
    
    <!-- #header -->
    <nav id="navigation_affix" class="scrollspy"><div class="container"><div class="navbar-brand"><a href="#"><img src="<?=url_tmpl();?>img/logo.png" alt="Logo"></a></div>
						<ul class="nav navbar-nav">
							<li class="active"><a href="<?=base_url();?>" class="smooth-scroll">Trang chủ</a></li>
							<li><a href="#features" class="smooth-scroll">Tính năng</a></li>
							<li><a href="#abouts" class="smooth-scroll">Giới thiệu</a></li>
							<li><a href="#pricing" class="smooth-scroll">Báo giá</a></li>
							<?php foreach($linkDemo as $item){?>
								<li class="menu-btn"><a href="#"><?=$item->title;?></a></li>
							<?php }?>
						</ul>
					</div>
					</nav>
					<nav id="navigation_mobile">
						<div class="nav-menu-links">
							<ul>
								<li class="active"><a href="<?=base_url();?>" class="smooth-scroll">Trang chủ</a></li>
								<li><a href="#features" class="smooth-scroll">Tính năng</a></li>
								<li><a href="#abouts" class="smooth-scroll">Giới thiệu</a></li>
								<li><a href="#pricing" class="smooth-scroll">Báo giá</a></li>
								<?php foreach($linkDemo as $item){?>
									<li class="menu-btn"><a href="#"><?=$item->title;?></a></li>
								<?php }?>
							</ul>
						</div>
						<div class="nav-menu-button">
							<button class="nav-menu-toggle"><i class="fa fa-navicon"></i></button>
						</div>
					</nav>
					<header id="header" data-parallax="scroll" data-speed="0.2" data-natural-width="1920" data-natural-height="1080" data-image-src="images/content/bg/1.jpg">
        
        <!-- .header-overlay -->
        <div class="header-overlay">
            <!-- #navigation -->
            <nav id="navigation" class="navbar scrollspy">
                
                <!-- .container -->
                <div class="container">
                    
                    <div class="navbar-brand">
                        <a href="<?=base_url();?>"><img src="<?=url_tmpl();?>img/logo.png" alt="Logo"></a> <!-- site logo -->
                    </div>
                    
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="<?=base_url();?>" class="smooth-scroll">Trang chủ</a></li>
                        <li><a href="#features" class="smooth-scroll">Tính năng</a></li>
                        <li><a href="#abouts" class="smooth-scroll">Giới thiệu</a></li>
                        <li><a href="#pricing" class="smooth-scroll">Báo giá</a></li>
						<?php foreach($linkDemo as $item){?>
							<li class="menu-btn"><a href="#"><?=$item->title;?></a></li>
						<?php }?>
                    </ul>
                    
                </div>
                <!-- .container end -->
                
            </nav>
            <!-- #navigation end -->
            
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
                                    </li>
                                </ul>
                                <form method="post" action="#" class="affa-form-signup">
                                    <input name="name" id="header_form_name" placeholder="Tên công ty, cửa hàng"  type="text">
                                    <input name="email" id="email" placeholder="Email"  type="text">
									<input name="phone" id="phone" placeholder="Số điện thoại"  type="text">
									<input name="password" id="password" placeholder="Mật khẩu"  type="password">
                                    <input name="submit" value="Đăng ký" class="btn-medium" type="submit">
                                </form>
                                <p class="txt-desc">Bạn sẽ được trải nghiệp hệ thống trong 90 ngày</p>
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
    <!-- #features -->
    <div id="features" class="padding-top80">
        <!-- .container -->
        <div class="container">
            <div class="post-heading-center">
            	<h2>Tính năng - ứng dụng</h2>
            </div>
            <!-- .row -->
            <div class="row padding-bottom20">
                <?php foreach($features as $item){?>
                <div class="col-sm-4"> <!-- 1 -->
                	<div class="affa-feature-img">
                    	<img title="<?=$item->title;?>" src="<?=base_url();?>files/feature/thumb/<?=$item->thumb;?>" alt="<?=$item->friendlyurl?>">
                        <h4><?=$item->title;?></h4>
                        <p><?=$item->description_sort;?></p>
                    </div>
                </div>
				<?php }?>
            </div>
		</div>
	</div>
	<div id="abouts" class="padding-top80">
        <!-- .container -->
        <div class="container">
            <!-- .row end -->
			<?php $i=1; foreach($blogProducts as $item){?>
				<?php if($i%2 == 0){?>
					 <!-- .row -->
						<div class="row padding-bottom20">
							<div class="col-sm-6 col-md-5 margin-bottom40">
								<figure><img src="<?=base_url();?>files/blogproduct/thumb/<?=$item->thumb;?>"" title="<?=$item->title;?>" alt="<?=$item->title;?>"></figure>
							</div>
							<div class="col-sm-6 col-md-7 col-lg-6 col-lg-offset-1 margin-bottom20">
								<div class="col-txt100">
									<div class="post-heading-left post-heading-top-desc margin-bottom20">
										<h2><strong><?=$item->title;?></strong><h2>
									</div>
									<?=$item->description_long;?>
								</div>
							</div>
						</div>
						<!-- .row end -->
				<?php }else{?>
					<!-- .row -->
					<div class="row">
						<div class="col-md-6 margin-bottom20">
							<div class="col-txt120">
								<div class="post-heading-left text-center-sm">
									<h2><strong><?=$item->title;?></strong><h2>
								</div>
								<?=$item->description_long;?>
							</div>
						</div>
						<div class="col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-0">
							<figure><img src="<?=base_url();?>files/blogproduct/thumb/<?=$item->thumb;?>" title="<?=$item->title;?>" alt="<?=$item->title;?>"></figure>
						</div>
					</div>
					<!-- .row end -->
				<?php }?>
			<?php $i++;}?>
        </div>
        <!-- .container end -->
    </div>
    <!-- #features end -->   
    <!-- #footer -->
    <footer id="footer">
        <!-- .container -->
        <div class="container">
            <p class="copyright-txt">© 2017 Copyrights by <a href="http://firefuma.vn" >Firefuma</a> - All rights reserved.</p>
            
            <div class="socials">
            	<a href="#" title="Facebook" class="link-facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" title="Twitter" class="link-twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" title="Google Plus" class="link-google-plus"><i class="fa fa-google-plus"></i></a>
            </div>
            
        </div>
        <!-- .container end -->
        
    </footer>
    <!-- #footer end -->

    
    <!--[if lt IE 8]>
    	<div class="browser-notice">
            <div class="container">
            	<div class="text">
                    <h1>Internet Explorer Out To Date</h1>
                    <p>Please update your Internet Explorer browser with a newer version (Internet Explorer 8 above) now!</p>
                    <span>You can download it <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie" target="_blank">here....</a></span>
                </div>
            </div>
        </div>
	<![endif]-->
    
    <!-- JavaScripts -->
	<!--<script type="text/javascript" src="<?=url_tmpl();?>productdetail/js/jquery-1.js"></script>
    <script type="text/javascript" src="<?=url_tmpl();?>productdetail/js/jquery-migrate-1.js"></script>
    <script type="text/javascript" src="<?=url_tmpl();?>productdetail/js/bootstrap.js"></script>
    <script type="text/javascript" src="<?=url_tmpl();?>productdetail/js/jquery_003.js"></script>
    <script type="text/javascript" src="<?=url_tmpl();?>productdetail/js/smoothscroll.js"></script>
	<script type="text/javascript" src="<?=url_tmpl();?>productdetail/js/response.js"></script>
	<script type="text/javascript" src="<?=url_tmpl();?>productdetail/js/jquery_007.js"></script>
	<script type="text/javascript" src="<?=url_tmpl();?>productdetail/js/jquery_004.js"></script>
	<script type="text/javascript" src="<?=url_tmpl();?>productdetail/js/jquery_002.js"></script>
	<script type="text/javascript" src="<?=url_tmpl();?>productdetail/js/waypoints.js"></script>
    <script type="text/javascript" src="<?=url_tmpl();?>productdetail/js/slick.js"></script>
    <script type="text/javascript" src="<?=url_tmpl();?>productdetail/js/jquery_006.js"></script>
    <script type="text/javascript" src="<?=url_tmpl();?>productdetail/js/jquery_005.js"></script>
    <script type="text/javascript" src="<?=url_tmpl();?>productdetail/js/jquery.js"></script>
    <script type="text/javascript" src="<?=url_tmpl();?>productdetail/js/parallax.js"></script>
	<script type="text/javascript" src="<?=url_tmpl();?>productdetail/js/js"></script>
	<script type="text/javascript" src="<?=url_tmpl();?>productdetail/js/script.js"></script>
    -->
	<script type="text/javascript" src="<?=url_tmpl();?>js/jquery-1.js"></script>
	<script type="text/javascript" src="<?=url_tmpl();?>js/waypoints.js"></script>
	<script type="text/javascript" src="<?=url_tmpl();?>js/main.js"></script>
