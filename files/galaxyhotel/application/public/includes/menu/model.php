<?php
/**
 * @author Sonnk
 * @copyright 2017
 */
 
class incModelMenu extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	function getInfor(){
		$query = $this->model->table('galaxy_contact')
					  ->where('isdelete',0)
					  ->find();
		return $query;
	}
	function getProduct(){
		$query = $this->model->table('galaxy_product')
							->where('isdelete',0)
							->order_by('title','asc')
							->find_all();
		return $query;
	}
}