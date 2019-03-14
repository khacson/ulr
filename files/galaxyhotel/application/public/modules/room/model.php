<?php
/**
 * @author 
 * @copyright 2016
 */
class RoomModel extends CI_Model
{
	function __construct(){
		parent::__construct('');
	}
	function getSeoWeb(){
		$query = $this->model->table('galaxy_seoweb')
					  ->select('*')
					  ->where('isdelete',0)
					  ->find_all();
		$array = array();
		foreach($query as $item){
			$array[$item->friendlyurl] = $item;
		}
		return $array;
	}
	function getService(){
		$query = $this->model->table('galaxy_service')
					  ->where('isdelete',0)
					  ->find_all();
		return $query;
	}
	function getRooms(){
		$query = $this->model->table('galaxy_product')
					  ->where('isdelete',0)
					  ->find_all();
		return $query;
	}
	function getFind($id){
		$query = $this->model->table('galaxy_product')
					  ->where('isdelete',0)
					  ->where('id',$id)
					  ->find();
		return $query;
	}
}