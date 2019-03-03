<?php foreach($datas as $item){?>
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
			   <a href="detail.php">Chính chủ</a>
			  </div>
			  <div class="time"><?=date('d-M-Y H:i:s',strtotime($item->datecreate)); ?></div>
			</div>
			<h1><a href="<?=base_url();?>ban/<?=$item->friendlyurl;?>-<?=$item->id;?>.html">
				<?=$item->title; ?>
			</a></h1>
			<ul class="price">
				<li>Giá:  4.85 tỷ</li>
				<li>Diện tích: 78.3 m²</li>
				<li> Quận 2, Hồ Chí Minh</li>
			</ul>
			<p></p>
			<footer>
			  <a href="<?=base_url();?>ban/<?=$item->friendlyurl;?>-<?=$item->id;?>.html" class="love"><i class="ion-android-favorite-outline"></i> <div></div></a>
			  <a class="btn btn-primary more" href="detail.php">
				<div>Xem thêm</div>
				<div><i class="ion-ios-arrow-thin-right"></i></div>
			  </a>
			</footer>
		  </div>
		</div>
	  </article>
<?php }?>