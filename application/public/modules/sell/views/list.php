<?php foreach ($datas as $item) {
	
	if (!empty($item->price)) {
		$price_type = 'Tỉ';
		if ($item->price_type == 1) {
			$price_type = 'Triệu';
		}
		$price = number_format($item->price) . ' ' . $price_type;
	} else {
		$price = 'Thương lượng';
	}
	$address = '';
	$sub = '';
	if (!empty($item->distric_name) && !empty($item->distric_name)) {
		$sub = ', ';
	}
	if (!empty($item->distric_name)) {
		$address .= $item->distric_name;
	}
	if (!empty($item->province_name)) {
		$address .= $sub . $item->province_name;
	}
	$links = base_url() . 'ban/' . $item->friendlyurl . '-' . $item->id . '.html';	
	
	?>
	<article class="col-md-12 article-list">
		<div class="inner">
		  <figure>
			  <a href="detail.php">
				<img src="<?=url_tmpl();?>images/news/img01.jpg">
			</a>
		  </figure>
		  <div class="details">
			<div class="detail">
			  <div class="category">
			   <a href="<?=$links;?>"><i class="ion-android-time f14"></i></a>
			  </div>
			  <div class="time"><?=date('d-M-Y H:i:s',strtotime($item->datecreate)); ?></div>
			</div>
			<h1><a href="<?=$links;?>">
				<?=$item->title; ?>
			</a></h1>
			<ul class="price">
				<li><i class="ion-pricetag"></i> Giá:  <?=$price; ?></li>
				<li><i class="ion-map"></i> Diện tích: <?=number_format($item->acreage)?> m²</li>
				<li><i class="ion-location f16"></i> <?=$address; ?></li>
			</ul>
			<p></p>
			<footer>
			  <!--<a href="<?=base_url();?>ban/<?=$item->friendlyurl;?>-<?=$item->id;?>.html" class="love"><i class="ion-android-favorite-outline"></i> <div>0</div></a>-->
			  <a class="btn btn-primary more" href="<?=$links;?>">
				<div>Xem thêm</div>
				<div><i class="ion-ios-arrow-thin-right"></i></div>
			  </a>
			</footer>
		  </div>
		</div>
	  </article>
<?php }?>