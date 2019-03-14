<section class="blog">
	<div class="container">
		<header class="section-header ">
			<div class="row">
				 <div class="col-md-6 text-left">
					<h4 class="text-left">Tin tức</h4>
				 </div>
				 <div class="col-md-6">
					  <div class="pull-right">
						<ul class="breadcrumb">
							<li><a href="<?=base_url();?>"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Trang chủ &nbsp;</a></li>
							<li><a href="<?=base_url();?>tin-tuc.html"> <i class="fa fa-angle-right" aria-hidden="true"></i>
	Tin tức</a></li>
						</ul>
					 </div>
				  </div>
			</div>
        </header>
	</div>
</div>
<section class="blog-block blog-blocks">
	<div class="container">
		 <div class="row">
			<?php foreach($news as $item){
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
							<div class="image images">
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