    <!-- S customer -->
    <div id="features" class="padding-top80">
        <!-- .container -->
        <div class="container">
            <div class="post-heading-center">
            	<h2 class="color">Sản phẩm của chúng tôi</h2>
                <!--<p>Take control over your landing page template.</p>-->
            </div>
            <!-- .row -->
            <div class="row padding-bottom20">
                <?php foreach($products as $item){?>
                <div class="col-sm-4"> <!-- 1 -->
                	<div class="affa-feature-img">
                    	<a target="_blank" href="<?=$item->url;?>"><img src="<?=base_url();?>files/product/<?=$item->image;?>" alt="<?=$item->title;?>"></a>
                        <h4><a target="_blank" href="<?=$item->url;?>"><?=$item->title;?></a></h4>
                        <p><?=$item->description_sort;?></p>
                    </div>
                </div>
                <?php }?>
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </div>
    <!-- E customer end -->