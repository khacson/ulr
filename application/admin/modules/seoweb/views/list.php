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
		
        <td class="text-center"><img src="<?php echo base_url().'files/seoweb/'.$item->image?>" alt="img" height="70" width="100"></td>	
		<td class="seoweb_type_name"><?=$item->seoweb_type_name;?></td>
		<td></td>
	</tr>
<?php	
$i++;
}
?>