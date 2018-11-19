<?php 
$i= $start;
foreach ($datas as $item) { 
	$imgtype = 'Video';
	
	if((int)$item->video == 2){
		$img = '
		<video controls preload=metadata width=120 height=100 poster="">
			<source src="'. base_url().'files/designpicture/'.$item->image .'" type="video/mp4">
			<source src="'. base_url().'files/designpicture/'.$item->image .'" type="video/webm">
			<source src="'. base_url().'files/designpicture/'.$item->image .'" type="video/ogg">
		</video>
	    ';
		if(!empty($item->youtube)){
			$img = '<iframe width="100%" height="100" src="'. $item->youtube .'" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
		}
	}
	else{
		$imgtype = 'Hình ảnh';
		$img = '<img src="'. base_url().'files/designpicture/'.$item->image .'" alt="img" height="80" width=100">';
		
	}
?>

	<tr class="content edit" img = "<?=$item->img;?>" id="<?=$item->id; ?>" >
		<td style="text-align: center;">
		<input class="noClick" type="checkbox" name="keys[]" id="<?=$item->id;?>"></td>
		<td class="center"><?=$i;?></td>
		<td class="title">
		 <?php if (isset($permission['edit'])) { ?>
		   <a href="<?=admin_url();?>designpicture/form/<?=$item->id;?>"><?=$item->title;?></a>
		 <?php }else{?>
			<?=$item->title;?>
		 <?php }?>
		</td>
		<td class="linkweb"><?=$item->typename;?></td>
        <td class="text-center"><?=$img;?></td>	
		<td class="imgtype"><?=$imgtype;?></td>
		<td class="text-center"><input value="<?=$item->isshow;?>" class="isshow" id="<?=$item->id;?>" <?php if($item->isshow == 1){?> checked <?php }?> type="checkbox" /></td>
		<td>
			<input class="ordering search text-center" id="<?=$item->id;?>" type="number" value="<?=$item->ordering;?>" />
		</td>
		<td class="datecreate"><?=$item->datecreate;?></td>
		<td class="usercreate"><?=$item->usercreate;?></td>
		<td></td>
	</tr>
<?php	
$i++;
}
?>