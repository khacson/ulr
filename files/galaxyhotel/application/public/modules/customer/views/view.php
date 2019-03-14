    <!-- S customer -->
    <div id="features" class="padding-top80">
        <!-- .container -->
        <div class="container">
            <div class="post-heading-center">
            	<h2 class="color">Khách hàng của chúng tôi</h2>
                <!--<p>Take control over your landing page template.</p>-->
            </div>
            <!-- .row -->
            <div class="row padding-bottom20">
				<?php foreach($customers as $item){?>
					<div class="col-sm-4"> <!-- 1 -->
						<div class="affa-feature-img">
							<img src="<?=base_url();?>files/customer/<?=$item->img;?>" alt="<?=$item->customer_name;?>">
							<h4><?=$item->customer_name;?></h4>
						</div>
					</div>
                <?php }?>
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </div>
    <!-- E customer end -->