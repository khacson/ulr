<?php
/**
 * @author Sonnk
 * @copyright 2019
 */
class SangmatbantModel extends CI_Model
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
			from ulr_sell us 
			where us.isdelete = 0
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
			select us.*
			from ulr_sell us 
			where us.isdelete = 0
			$and
			order by us.datecreate desc
		";
		$sql.= ' limit '.$page.','.$numrows;
		return $this->model->query($sql)->execute();
	}
	
}