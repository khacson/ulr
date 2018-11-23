<?php 
$i= $start;
foreach ($datas as $item) { 
	$price_type = 'Triệu';
	if($item->price_type == 1000){
		$price_type = 'Tỷ';
	}
?>

	<tr class="content edit" img = "<?=$item->thumb;?>" 
		id="<?=$item->id; ?>" 
		producttypeid = "<?=$item->producttypeid;?>" 
		title = "<?=$item->title;?>" 
		>
		<td style="text-align: center;">
		<input class="noClick" type="checkbox" name="keys[]" id="<?=$item->id;?>"></td>
		<td class="center"><?=$i;?></td>
		<td class="title">
		 <?php if (isset($permission['edit'])) { ?>
		   <a href="<?=admin_url();?>product/form/<?=$item->id;?>"><?=$item->title;?></a>
		 <?php }else{?>
			<?=$item->title;?>
		 <?php }?>
		</td>
		<td class="text-right"><?=($item->price); ?> <?=$price_type;?></td>
		<td class="acreage"><?=$item->acreage;?></td>
		<td class="address"><?=$item->address;?></td>
		<td class="producttype_name"><?=$item->producttype_name;?></td>
        <td class="text-center"><img src="<?php echo base_url().'files/product/thumb/'.$item->thumb;?>" alt="img" height="45" width="60"></td>	
		<td class="text-center"><input value="<?=$item->isshow;?>" class="isshow" id="<?=$item->id;?>" <?php if($item->isshow == 1){?> checked <?php }?> type="checkbox" /></td>
		<td class="datecreate"><?=$item->datecreate;?></td>
		<td class="usercreate"><?=$item->usercreate;?></td>
		<td></td>
	</tr>
<?php	
$i++;
}
?>