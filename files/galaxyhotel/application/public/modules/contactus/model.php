<?php
/**
 * @author Sonnk
 * @copyright 2017
 */

class ContactusModel extends CI_Model
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
}