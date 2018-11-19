<div class="container-fluid">
  <div id="logo" class="pull-left">
	<h1>
		<a href="<?=base_url();?>trang-chu/<?=$lang;?>.html" class="scrollto">
			<img src="<?=url_tmpl();?>img/logo.png" />
		</a>
	</h1>
  </div>
  <nav id="nav-menu-container">
	<ul class="nav-menu">
	  <li class="<?php if($uri == 'trang-chu' || empty($uri)){?>menu-active<?php }?>"><a href="<?=base_url();?>trang-chu/<?=$lang;?>.html"><?php echo getLanguagePubic('trang-chu');?></a></li>
	  <li  class="menu-has-children <?php if($uri == 'thiet-ke'){?>menu-active<?php }?>"><a href="<?=base_url();?>thiet-ke/0/<?=$lang;?>.html"><?php echo getLanguagePubic('thiet-ke');?></a>
		<ul class="design">
		  <li class="li-first">
			<span class="arr_t"></span>
		  </li>
		  <?php foreach($listDesign as $item){?>
			  <li><a href="<?=base_url();?>thiet-ke/<?=$item->friendlyurl;?>/<?=$lang;?>.html"><?=$item->title;?></a></li>
		  <?php }?>
		</ul>
	  </li>
	  <li  class="menu-has-children <?php if($uri == 'cong-nghe'){?>menu-active<?php }?>"><a href="<?=base_url();?>cong-nghe/0/<?=$lang;?>.html"><?php echo getLanguagePubic('cong-nghe');?></a>
		<ul class="technical">
		  <li class="li-first">
			<span class="arr_t"></span>
		  </li>
		  <?php foreach($listTechnology as $item){?>
			  <li><a href="<?=base_url();?>cong-nghe/<?=$item->friendlyurl;?>/<?=$lang;?>.html"><?=$item->title;?></a></li>
		  <?php }?>
		</ul>
	  </li>
	  <li class="<?php if($uri == 'gioi-thieu'){?>menu-active<?php }?>"><a href="<?=base_url();?>gioi-thieu/<?=$lang;?>.html"><?php echo getLanguagePubic('gioi-thieu');?></a></li>
	  <li class="<?php if($uri == 'tuyen-dung'){?>menu-active<?php }?>"><a href="<?=base_url();?>tuyen-dung/<?=$lang;?>.html"><?php echo getLanguagePubic('tuyen-dung');?></a></li>
	  <li class="<?php if($uri == 'tin-tuc'){?>menu-active<?php }?>"><a href="<?=base_url();?>tin-tuc/<?=$lang;?>.html"><?php echo getLanguagePubic('tin-tuc');?></a></li>
	  <li class="<?php if($uri == 'lien-he'){?>menu-active<?php }?>"><a href="<?=base_url();?>lien-he/<?=$lang;?>.html"><?php echo getLanguagePubic('lien-he');?></a></li>
	  <li  class="menu-has-children"><a href="#"><img src="<?=base_url();?>files/lang/<?=$lang;?>.png"/></a>
		<ul class="language">
		  <li class="li-first">
			<span class="arr_t"></span>
		  </li>
		  <?php 
			foreach($listLang as $item){?>
			  <li><a href="<?=base_url();?>trang-chu/setLangguag?lang=<?=$item->lang_code;?>"><img src="<?=base_url();?>files/lang/<?=$item->lang_icon;?>"/> <?=$item->lang_name;?></a> </li>
		  <?php }?>
		</ul>
	  </li>
	</ul>
  </nav><!-- #nav-menu-container -->
</div>