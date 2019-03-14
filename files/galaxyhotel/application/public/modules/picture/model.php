<?php
/**
 * @author 
 * @copyright 2016
 */
class PictureModel extends CI_Model
{
	function __construct(){
		parent::__construct('');
	}
	function getInfor(){
		$query = $this->model->table('galaxy_contact')
					  ->where('isdelete',0)
					  ->find();
		return $query;
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
	function getPictureType(){
		$query = $this->model->table('galaxy_picturetype')
					  ->select('id,picturetype_name')
					  ->where('isdelete',0)
					  ->order_by('ordering','asc')
					  ->find_all();
		return $query;
	}
	function getPicture(){
		$query = $this->model->table('galaxy_picture')
					  ->select('id,title,typeid,image,thumb,linkweb')
					  ->where('isdelete',0)
					  ->find_all();
		return $query;
	}
}