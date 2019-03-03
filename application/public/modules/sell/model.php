<?php
/**
 * @author Sonnk
 * @copyright 2019
 */
class SellModel extends CI_Model
{
	function __construct(){
		parent::__construct('');
	}
	function getSeoWeb(){
		$query = $this->model->table('mec_seoweb')
					  ->select('*')
					  ->where('isdelete', 0)
					  ->find_all();
		$array = array();
		foreach($query as $item){
			$array[$item->friendlyurl] = $item;
		}
		return $array;
	}
	function getSearch($search){
		$sql = '';
		return $sql;
	}
	function getTotal($search){
		$and = $this->getSearch($search);
		$sql = "
			select COUNT(1) AS total
			from vland_sell s 
			where s.isdelete = 0
			$and
			;
		";
		$query = $this->model->query($sql)->execute();
		if(empty($query[0]->total)){
			return 0;
		}
		else{
			return $query[0]->total;
		}
	}
	function getList($search, $page, $numrows){
		$and = $this->getSearch($search);
		$sql = "
			select s.*, p.province_name, d.distric_name
			from vland_sell s 
			left join vland_province p on p.id = s.province_id
			left join vland_distric d on d.id = s.distric_id
			where s.isdelete = 0
			$and
			order by s.datecreate desc
		";
		$sql.= ' limit '.$page.','.$numrows;
		return $this->model->query($sql)->execute();
	}
	
}