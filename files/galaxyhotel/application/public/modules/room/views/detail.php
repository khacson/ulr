<section id="recent-works">
    <div class="container">
        <div class="center">
            <h3><?=$finds->title;?></h3>
            <p class="lead"><?=$finds->description_sort;?></p>
        </div>  
        <div class="gap"></div>
        <ul class="gallery col-4">
            <?php foreach($listImage as $key=>$val){?>
			<!--Item 1-->
            <li>
                <div class="preview">
                    <img alt=" " src="<?=base_url();?>files/product/<?=$val; ?>">
                    <div class="overlay">
                    </div>
                    <div class="links">
                        <a data-toggle="modal" href="#modal-1"><i class="icon-eye-open"></i></a><a href="#"><i class="icon-link"></i></a>                          
                    </div>
                </div>
            </li>
            <!--/Item 1--> 
			<?php }?>
        </ul>
    </div>

</section>