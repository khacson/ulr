<?php 
$i= $start;
foreach ($datas as $item) { 
?>
	<tr class="content edit" img = "<?=$item->img;?>" 
	id="<?=$item->id; ?>" 
	slide_name="<?=$item->slide_name; ?>"
	>
		<td style="text-align: center;">
		<input class="noClick" type="checkbox" name="keys[]" id="<?=$item->id; ?>"></td>
		<td class="center"><?=$i;?></td>
		<td class="slide_name">
		<?php if (isset($permission['edit'])) { ?>
			<a href="<?=admin_url();?>/aboutslide/edits/<?=$item->id; ?>"><?=$item->slide_name;?></a>
		<?php }else{?>
			<?=$item->slide_name;?>
		<?php }?>
		</td>
		<td class="description"><?=$item->description;?></td>
        <td class="text-center"><img src="<?php echo base_url().'files/aboutslide/'.$item->img?>" alt="img" height="45" width="60"></td>
		<td></td>
	</tr>
<?php	
$i++;
}
?>