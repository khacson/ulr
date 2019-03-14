<!-- END-HEADER -->
<section class="banner-tems text-center">
	<div class="container">
		<div class="banner-content">
			<h2><?=$typeName;?></h2>
		</div>
	</div>
</section>
<!-- CONTACT -->
<section class="body-room-5">
        <div class="container">
            <div class="wrap-room-5">
			<div class="row">
				<?php foreach($datas as $item){?>
					<!--S--->
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="wrap-item ">
                            <div class="img">
								 <a title="<?=$item->title;?>" href="<?=base_url();?>phong/<?=$item->friendlyurl;?>-<?=$item->id;?>.html"><img class="img-product" src="<?=base_url();?>files/product/thumb/<?=$item->thumb;?>" title="<?=$item->title;?>" alt="<?=$item->title;?>"></a>
                            </div>
                            <div class="text-room-5">
                                <h2 class="h2-rooms"><?=$item->title;?></h2>
                                <h5 class="h5-room"><span class="amout"><?=number_format($item->price);?></span> /<?=$item->price_type;?></span></h5>
                            </div>
                            <div class="text-hover">
                                <div class="text">
                                    <h2 class="h2-rooms"><?=$item->title;?></h2>
                                    <h5 class="h5-room"><span class="amout"><?=number_format($item->price);?></span> /<?=$item->price_type;?></span></h5>
                                    <p><?=$item->description_sort;?></p>
                                    <a title="<?=$item->title;?>" href="<?=base_url();?>phong/<?=$item->friendlyurl;?>-<?=$item->id;?>.html" class="view-dateails btn btn-room">Xem chi tiết</a>
                                </div>
                            </div>
                        </div>
                    </div>
				<?php }?>
			
			<!--E-->
			</div>
		</div>	
	</div>	
</section>		