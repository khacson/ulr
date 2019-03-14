<!--end-->
<div id="myCarousel1" class="carousel slide" data-ride="carousel"> 
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<?php $i=0; foreach($banners as $item){?>
		<li data-target="#myCarousel1" data-slide-to="<?=$i;?>" <?php if($i==0){?>class="active" <?php }?>></li>
		<?php $i++;}?>
	</ol>
	<div class="carousel-inner">
		<?php $i=0; foreach($banners as $item){?>
		<div class="item <?php if($i==0){?>active <?php }?> "> 
			<img src="<?=base_url();?>files/banner/<?=$item->img;?>" style="width:100%; height: 105vh" alt="Slide">
			<div class="carousel-caption">
				<h1><?=$item->slide_name;?></h1>
			</div>
		</div>
		<?php $i++;}?>
	</div>
	<a class="left carousel-control" href="#myCarousel1" data-slide="prev"> 
	<img src="<?=url_tmpl();?>images/icons/left-arrow.png" onmouseover="this.src = '<?=url_tmpl();?>images/icons/left-arrow-hover.png'" onmouseout="this.src = '<?=url_tmpl();?>images/icons/left-arrow.png'" alt="left"></a>
	<a class="right carousel-control" href="#myCarousel1" data-slide="next"><img src="<?=url_tmpl();?>images/icons/right-arrow.png" onmouseover="this.src = '<?=url_tmpl();?>images/icons/right-arrow-hover.png'" onmouseout="this.src = '<?=url_tmpl();?>images/icons/right-arrow.png'" alt="left"></a>

</div>
<div class="clearfix"></div>

<!--service block--->
<section class="service-block">
	<div class="container">
		<div class="row">
			<?php foreach($services as $item){?>
				<div class="col-md-3 col-sm-3 col-xs-6 width-50">
					<div class="service-details text-center">
						<div class="service-image">
							<img alt="image" class="img-responsive" src="<?=base_url();?>files/service/thumb/<?=$item->thumb;?>">
						</div>
						<h4><a href="<?=base_url();?>dich-vu/<?=$item->friendlyurl;?>.html"><?=$item->title;?></a></h4>
					</div>
				</div>
			<?php }?>
		</div>
	</div>
</section>
<!--offer block-->
<section class="vacation-offer-block">
	<div class="vacation-offer-bgbanner">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-sm-6 col-xs-12">
					<div class="vacation-offer-details">
						<h1>Galaxy Hotel</h1>
						<h4>Được phục vụ bạn là niềm hạnh phúc của chúng tôi</h4>
						<button type="button" id="click_bookings" class="btn btn-default">Đặt phòng</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End-->

<!----resort-overview--->
 <section class="resort-overview-block">
	<div class="container">
		<div class="row">
			<?php $i = 1; 
				foreach($productLists as $item){	
					if( $i == 1){
				
				?>
				<div class="col-md-6 col-sm-12 col-xs-12 remove-padd-right">
					<div class="side-A">
						<div class="product-thumb">
							<div class="image">
								<a title="<?=$item->title;?>" href="<?=base_url();?>phong/<?=$item->friendlyurl;?>-<?=$item->id;?>.html"><img class="img-responsive" src="<?=base_url();?>files/product/thumb/<?=$item->thumb;?>" title="<?=$item->title;?>" alt="<?=$item->title;?>"></a>
							</div>
						</div>
					</div>
					<div class="side-B">
						<div class="product-desc-side">
							<h3><a href="<?=base_url();?>phong/<?=$item->friendlyurl;?>-<?=$item->id;?>.html"><?=$item->title;?></a></h3>
							<p><?=$item->description_sort;?></p>
							<div class="links"><a href="<?=base_url();?>phong/<?=$item->friendlyurl;?>-<?=$item->id;?>.html">Xem chi tiết</a></div>
						</div>
					</div>
				</div>
				<?php }$i++;}?>
			<div class="clear"></div>
			<?php $j = 1; 
				foreach($productLists as $item){	
					if( $j == 2){
				
				?>
				<div class="col-md-6 col-sm-12 col-xs-12 remove-padd-left">
					<div class="side-A">
						<div class="product-thumb">
							<div class="image">
								<a title="<?=$item->title;?>" href="<?=base_url();?>phong/<?=$item->friendlyurl;?>-<?=$item->id;?>.html"><img class="img-responsive" src="<?=base_url();?>files/product/thumb/<?=$item->thumb;?>" title="<?=$item->title;?>" alt="<?=$item->title;?>"></a>
							</div>
						</div>
					</div>
					<div class="side-B">
						<div class="product-desc-side">
							<h3><a href="<?=base_url();?>phong/<?=$item->friendlyurl;?>-<?=$item->id;?>.html"><?=$item->title;?></a></h3>
							<p><?=$item->description_sort;?></p>
							<div class="links"><a href="">Xem chi tiết</a></div>
						</div>
					</div>
				</div>
			<?php }$j++;}?>
			<div class="clear"></div>
			<div class="col-md-12 offspace-45"></div>
			<?php $j = 1; 
				foreach($productLists as $item){	
					if( $j == 3){
				
				?>
				<div class="col-md-6 col-sm-12 col-xs-12 remove-padd-right">
					<div class="side-A">
						<div class="product-desc-side">
							<h3><a href="<?=base_url();?>phong/<?=$item->friendlyurl;?>-<?=$item->id;?>.html"><?=$item->title;?></a></h3>
							<p><?=$item->description_sort;?></p>
							<div class="links"><a href="<?=base_url();?>phong/<?=$item->friendlyurl;?>-<?=$item->id;?>.html">Xem chi tiết</a></div>
						</div>
					</div>

					<div class="side-B">
						<div class="product-thumb">
							<div class="image txt-rgt">
								<a title="<?=$item->title;?>" href="<?=base_url();?>phong/<?=$item->friendlyurl;?>-<?=$item->id;?>.html"><img class="img-responsive" src="<?=base_url();?>files/product/thumb/<?=$item->thumb;?>" title="<?=$item->title;?>" alt="<?=$item->title;?>"></a>
							</div>
						</div>
					</div>
				</div>
			<?php }$j++;}?>
			<div class="clear"></div>
			<?php $j = 1; 
				foreach($productLists as $item){	
					if( $j == 4){
				
				?>
				<div class="col-md-6 col-sm-12 col-xs-12 remove-padd-left">
					<div class="side-A">
						<div class="product-desc-side">
							<h3><a href="<?=base_url();?>phong/<?=$item->friendlyurl;?>-<?=$item->id;?>.html"><?=$item->title;?></a></h3>
							<p><?=$item->description_sort;?></p>
							<div class="links"><a href="<?=base_url();?>phong/<?=$item->friendlyurl;?>-<?=$item->id;?>.html">Xem chi tiết</a></div>
						</div>
					</div>

					<div class="side-B">
						<div class="product-thumb txt-rgt">
							<div class="image">
								
								<a title="<?=$item->title;?>" href="<?=base_url();?>phong/<?=$item->friendlyurl;?>-<?=$item->id;?>.html"><img class="img-responsive" src="<?=base_url();?>files/product/thumb/<?=$item->thumb;?>" title="<?=$item->title;?>" alt="<?=$item->title;?>"></a>
							</div>
						</div>
					</div>
				</div>
			<?php }$j++;}?>
			<div class="clearfix"></div>
		</div>
	</div>
</section>
<!-----blog slider----->
<!--blog trainer block-->
            <section class="blog-block-slider">
                <div class="blog-block-slider-fix-image">
                    <div id="myCarousel2" class="carousel slide" data-ride="carousel">
                        <div class="container">
                            <!-- Wrapper for slides -->
                            <ol class="carousel-indicators">
								<?php $i = 0; 
								foreach($posts as $item){
									$active = "";
									if( $i == 0){
										$active = "active";
									}
								?>
									<li data-target="#myCarousel2" data-slide-to="<?=$i;?>" class="<?=$active;?>"></li>
								<?php $i++;}?>
                            </ol>
                            <div class="carousel-inner" role="listbox">
								<?php $i = 0; 
								foreach($posts as $item){
									$active = "";
									if( $i == 0){
										$active = "active";
									}
									
								?>
                                <div class="item <?=$active;?>">
                                    <div class="blog-box">
                                        <p><?=$item->description_long;?></p>
                                    </div>
                                    <div class="blog-view-box">
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="<?=url_tmpl();?>images/client1.png" class="media-object">
                                            </div>
                                            <div class="media-body">
                                                <h3 class="media-heading blog-title"><?=$item->title;?></h3>
                                                <h5 class="blog-rev"></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<?php $i++;}?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </section>
		<!---blog block--->
		<section class="blog-block">
			<div class="container">
				 <div class="row">
					<?php foreach($blogs as $item){
						$arrDes = explode(' ',$item->description_sort);
							$totals = count($arrDes);
							$str = "";
							for($ii = 0; $ii< $totals; $ii++){
								if(isset($arrDes[$ii])){
									$str.=' '.$arrDes[$ii];
								}
								if($ii > 30){
									break;
								}
							}
						?>
                        <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-right">
                            <div class="side-A">
                                <div class="product-thumb">
                                    <div class="image">
										<a href="<?=base_url();?>tin-tuc/<?=$item->friendlyurl;?>.html"><img src="<?=base_url();?>files/blog/thumb/<?=$item->thumb;?>" class="img-responsive" alt="<?=$item->title;?>" /></a>
                                    </div>
                                </div>
                            </div>
                            <div class="side-B">
                                <div class="product-desc-side">
                                    <h4><a href="<?=base_url();?>tin-tuc/<?=$item->friendlyurl;?>.html"><?=$item->title;?></a></h4>
									<p><?=$str;?>...</p> 
									<div class="links"><a href="<?=base_url();?>tin-tuc/<?=$item->friendlyurl;?>.html">Xem chi tiết</a></div>
                                </div>
                            </div>
                        </div>
					<?php }?>
                    <div class="clear"></div>
				</div>
				
			</div>
		</section>
