<!--end-->
            <section class="image-head-wrapper" style="background-image: url('<?=$image;?>');">
                <div class="inner-wrapper">
                    <h1>Phòng</h1>
                </div>
            </section>
            <div class="clearfix"></div>
			
            <!--gallery block--->
            <section class="gallery-block gallery-front">
                <div class="container">
                    <div class="row">
						<?php foreach($rooms as $item){?>
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 room-detail">
								<div class="gallery-image">
									<a href="<?=base_url();?>phong/<?=$item->friendlyurl;?>-<?=$item->id;?>.html"><img src="<?=base_url();?>files/product/thumb/<?=$item->thumb;?>" class="img-responsive" alt="<?=$item->title;?>" /></a>
								</div>
								<div class="text-room-5">
									<h2 class="h2-rooms"><?=$item->title;?></h2>
									<h5 class="h5-room"><span class="amout"><?=number_format($item->price);?> vnđ</span></h5>
								</div>
							</div>
                        <?php }?>
                    </div>
                </div>
            </section>
            <!--service block--->
            <section class="service-block">
                <div class="bg-set-col">
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
                </div>
            </section>
