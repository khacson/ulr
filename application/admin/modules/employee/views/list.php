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
		   <a href="<?=admin_url();?>employee/form/<?=$item->id;?>"><?=$item->title;?></a>
		 <?php }else{?>
			<?=$item->title;?>
		 <?php }?>
		</td>
		<td class="position"><?=$item->position;?></td>
		<td class="phone"><?=$item->phone;?></td>
		<td class="email"><?=$item->email;?></td>
		<td class="zalo"><?=$item->zalo;?></td>
		<td class="skype"><?=$item->skype;?></td>
		<td class="facebook"><?=$item->facebook;?></td>
		<td class="google"><?=$item->google;?></td>
        <td class="text-center"><img src="<?php echo base_url().'files/employee/'.$item->image; ?>" alt="img" height="45" width="60"></td>	
		<td>
			<input class="ordering search text-center" id="<?=$item->id;?>" type="number" value="<?=$item->ordering;?>" />
		</td>
		<td></td>
	</tr>
<?php	
$i++;
}
?>