<?php 
$i= $start;
foreach ($datas as $item) { 
?>

	<tr class="content edit" img = "<?=$item->img;?>" id="<?=$item->id; ?>" >
		<td style="text-align: center;">
		<input class="noClick" type="checkbox" name="keys[]" id="<?=$item->id;?>"></td>
		<td class="center"><?=$i;?></td>
		<td class="meta_title">
		 <?php if (isset($permission['edit'])) { ?>
		   <a href="<?=admin_url();?>seoweb/form/<?=$item->id;?>"><?=$item->meta_title;?></a>
		 <?php }else{?>
			<?=$item->meta_title;?>
		 <?php }?>
		</td>
		
        <td class="text-center"><img src="<?php echo base_url().'files/seoweb/'.$item->image?>" alt="img" height="42" width="42"></td>	
		<td class="text-center"><input value="<?=$item->isshow;?>" class="isshow" id="<?=$item->id;?>" <?php if($item->isshow == 1){?> checked <?php }?> type="checkbox" /></td>
		<td class="datecreate"><?=$item->datecreate;?></td>
		<td class="usercreate"><?=$item->usercreate;?></td>
		<td></td>
	</tr>
<?php	
$i++;
}
?>