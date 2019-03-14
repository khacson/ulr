<!-- END-HEADER -->
<section class="banner-tems text-center">
	<div class="container">
		<div class="banner-content">
			<h2>Hình ảnh</h2>
		</div>
	</div>
</section>
<!-- CONTACT -->
 <!-- OUR-GALLERY-->
    <section class="gallery-our">
        <div class="container-fluid">
            <div class="gallery">
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
                
            </div>
            <!-- /gallery -->
        </div>
        <!-- /container -->
    </section>