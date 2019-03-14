<?php
/**
 * @author 
 * @copyright 2016
 */

class CustomerModel extends CI_Model
{
	function __construct(){
		parent::__construct('');
	}
	function getCustomer(){
		$query = $this->model->table('galaxy_customer')
					  ->where('isdelete',0)
					  ->limit(3)
					  ->find_all();
		return $query;
	}
	function getInfor(){
		$query = $this->model->table('galaxy_contact')
					  ->where('isdelete',0)
					  ->find();
		return $query;
	}
}