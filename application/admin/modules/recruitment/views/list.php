<?php 
$i= $start;
$array = array();
$array['vn'] = 'Việt nam';
$array['cn'] = 'China';
$array['en'] = 'English';
$array['jp'] = 'Japan';
foreach ($datas as $item) { 
	$lang = '';
	if(isset($array[$item->language])){
		$lang = $array[$item->language];
	}
?>

	<tr class="content edit" img = "<?=$item->thumb;?>" 
		id="<?=$item->id; ?>" 
		title = "<?=$item->title;?>" 
		>
		<td style="text-align: center;">
		<input class="noClick" type="checkbox" name="keys[]" id="<?=$item->id;?>"></td>
		<td class="center"><?=$i;?></td>
		<td class="title">
		 <?php if (isset($permission['edit'])) { ?>
		   <a href="<?=admin_url();?>recruitment/form/<?=$item->id;?>"><?=$item->title;?></a>
		 <?php }else{?>
			<?=$item->title;?>
		 <?php }?>
		</td>
		<td class=""><?=$lang;?></td>
        <td class="text-center"><img src="<?php echo base_url().'files/recruitment/thumb/'.$item->thumb;?>" alt="img" height="45" width="60"></td>	
		<td>
			<input class="ordering search text-center" id="<?=$item->id;?>" type="number" value="<?=$item->ordering;?>" />
		</td>
		<td class="text-center"><input value="<?=$item->isshow;?>" class="isshow" id="<?=$item->id;?>" <?php if($item->isshow == 1){?> checked <?php }?> type="checkbox" /></td>
		<td class="datecreate"><?=$item->datecreate;?></td>
		<td class="usercreate"><?=$item->usercreate;?></td>
		<td></td>
	</tr>
<?php	
$i++;
}
?>