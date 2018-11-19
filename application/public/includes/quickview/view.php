<div class="blog_news block">
<div class="block-title">
	<h5><a href="tin-tuc">Tin tức</a></h5>
	<div class="blog-navigator">
		<a class="btn prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
		<a class="btn next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
	</div>
</div>
<div class="block-content">
	<div id="owl-news-blog" class="owl-carousel owl-theme">
		<?php foreach($news as $item){?>
		<div class="item blog-post">
			<div class="blog-image">
				<a href="<?=base_url();?>tin-tuc/<?=$item->friendlyurl;?>"><img src="<?=base_url();?>files/blog/thumb/<?=$item->thumb;?>" alt="<?=$item->title;?>"/></a>
			</div>
			<h3><a href="<?=base_url();?>tin-tuc/<?=$item->friendlyurl;?>"><?=$item->title;?></a></h3>
			<p>
				<span><i class="fa fa-calendar" aria-hidden="true"></i> <?=date('d/m/Y',strtotime($item->datecreate));?></span>
			</p>
			<p class="post_content"><?=$item->description_sort;?><a href="<?=base_url();?>tin-tuc/<?=$item->friendlyurl;?>"> [Xem thêm] </a></p>
		</div>
		<?php }?>
	</div>
</div>
</div>