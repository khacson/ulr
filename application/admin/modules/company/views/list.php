<?php 
$i= $start;
foreach ($datas as $item) { 
?>

	<tr class="content edit" id="<?=$item->id; ?>" >
		<td class="text-center" >
		<input class="noClick" type="checkbox" name="keys[]" id="<?=$item->id;?>"></td>
		<td class="center"><?=$i;?></td>
		<td class="company_name">
		 <?php if (isset($permission['edit'])) { ?>
		   <a href="<?=admin_url();?>company/form/<?=$item->id;?>"><?=$item->company_name;?></a>
		 <?php }else{?>
			<?=$item->company_name;?>
		 <?php }?>
		</td>
		<td><?=$item->phone;?></td>
        <td><?=$item->email;?></td>
        <td><?=$item->address;?></td>
		<td class="text-center" ><?=$item->count_branch;?></td>
		<td class="text-center" ><?=$item->count_room;?></td>
		<td class="text-center"><?=date('d/m/Y H:i:s',strtotime($item->datecreate));?></td>
		<td class="text-center"><?=date('d/m/Y',strtotime($item->expirationdate));?></td>
		<td class="text-center"><input value="<?=$item->isshow;?>" class="isshow" id="<?=$item->id;?>" <?php if($item->isshow == 1){?> checked <?php }?> type="checkbox" /></td>
		<td></td>
	</tr>
<?php	
$i++;
}
?>