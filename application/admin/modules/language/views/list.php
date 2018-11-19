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

	<tr class="content edit" id="<?=$item->id; ?>" language="<?=$item->language; ?>">
		<td style="text-align: center;">
		<input class="noClick" type="checkbox" name="keys[]" id="<?=$item->id; ?>" "></td>
		<td class="center"><?=$i;?></td>
		<td class="keyword"><?=$item->keyword;?></td>
		<td class="lang"><?=$lang;?></td>
		<td class="translation"><?=$item->translation;?></td>
		<td></td>
	</tr>
<?php	
$i++;
}
?>