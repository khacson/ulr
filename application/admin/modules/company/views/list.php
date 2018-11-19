<?php 
$i= $start;
foreach ($datas as $item) { 
?>

	<tr class="content edit" id="<?=$item->id; ?>" >
		<td style="text-align: center;">
		<input class="noClick" type="checkbox" name="keys[]" id="<?=$item->id; ?>" "></td>
		<td class="center"><?=$i;?></td>
		<td class="customer_name"><?=$item->customer_name;?></td>
		<td class="phone"><?=$item->phone;?></td>
		<td class="email"><?=$item->email;?></td>
		<td class="websites"><?=$item->website;?></td>
		<td class="text-center">
			<?php if(!empty($item->img)){?>
			<img width="80" height="50" src="<?=base_url();?>files/customer/<?=$item->img;?>" />
			<?php }?>
		</td>
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