<?php 
$i= $start;
foreach ($datas as $item) { 
if($item->parentid == 0){
	$parent = 'Cấp 1';
}
else{
	$parent = $item->capcha;
}
?>

	<tr class="content edit" id="<?=$item->id; ?>" parentid = "<?=$item->parentid; ?>" >
		<td style="text-align: center;">
		<input class="noClick" type="checkbox" name="keys[]" id="<?=$item->id; ?>" "></td>
		<td class="center"><?=$i;?></td>
		<td class="type_name"><?=$item->type_name;?></td>
		<td class="text-center">
			<?php if(!empty($item->img)){?>
			<img width="80" height="50" src="<?=base_url();?>files/producttype/<?=$item->img;?>" />
			<?php }?>
		</td>
		<td><?=$parent;?></td>
		<td class="text-center"><input value="<?=$item->ishome;?>" class="ishome" id="<?=$item->id;?>" <?php if($item->ishome == 1){?> checked <?php }?> type="checkbox" /></td>
		<td>
			<input class="ordering search text-center" id="<?=$item->id;?>" type="number" value="<?=$item->ordering;?>" />
		</td>
		<td></td>
	</tr>
<?php	
$i++;
}
?>