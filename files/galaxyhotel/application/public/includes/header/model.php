<?php
/**
 * @author Sonnk
 * @copyright 2017
 */
 
class incModelHeader extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	function getInfor(){
		$query = $this->model->table('galaxy_contact')
					  ->where('isdelete',0)
					  ->find();
		return $query;
	}
	function getProductType(){
		$query = $this->model->table('galaxy_producttype')
					  ->select('id,producttype_name,friendlyurl')
					  ->where('isdelete',0)
					  ->order_by('ordering','asc')
					  ->find_all();
		return $query;
	}
	function getServiceType(){
		$query = $this->model->table('galaxy_servicetype')
					  ->select('id,type_name,friendlyurl')
					  ->where('isdelete',0)
					  ->order_by('ordering','asc')
					  ->find_all();
		return $query;
	}
	function getPicture(){
		$query = $this->model->table('galaxy_picturetype')
					  ->select('id,picturetype_name,friendlyurl')
					  ->where('isdelete',0)
					  ->order_by('ordering','asc')
					  ->find_all();
		return $query;
	}
}