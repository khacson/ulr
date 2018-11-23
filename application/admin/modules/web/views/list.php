<?php 
$i= $start;
foreach ($datas as $item) { 
?>

	<tr class="content edit" img = "<?=$item->img;?>" id="<?=$item->id; ?>" >
		<td style="text-align: center;">
		<input class="noClick" type="checkbox" name="keys[]" id="<?=$item->id;?>"></td>
		<td class="center"><?=$i;?></td>
		<td class="title">
		 <?php if (isset($permission['edit'])) { ?>
		   <a href="<?=admin_url();?>web/form/<?=$item->id;?>"><?=$item->title;?></a>
		 <?php }else{?>
			<?=$item->title;?>
		 <?php }?>
		</td>
		<td class="linkweb"><?=$item->linkweb;?></td>
        <td class="text-center"><img src="<?php echo base_url().'files/web/'.$item->image?>" alt="img" height="50" width="70"></td>	
		<td class="friendlyurl"><?=$item->friendlyurl;?></td>
		<td></td>
	</tr>
<?php	
$i++;
}
?>