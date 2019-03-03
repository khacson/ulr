<?php
/**
 * @author Sonnk
 * @copyright 2018
 */
 
class incModelMenu extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	/**
	* Bán
	*/
	function getSellCatalog(){
		$query = $this->model->table('vland_sell_catalog')
					  ->select('id, catalog_name, friendlyurl')
					  ->where('isdelete', 0)
					  ->order_by('ordering', 'ASC')
					  ->find_all();
		return $query;			  
	}
	/**
	* Cho thuê
	*/
	function getLeaseCatalog(){
		$query = $this->model->table('vland_lease_catalog')
					  ->select('id, catalog_name, friendlyurl')
					  ->where('isdelete', 0)
					  ->order_by('ordering', 'ASC')
					  ->find_all();
		return $query;			  
	}
	/**
	* Sang mặt bằng
	*/
	function getTransferCatalog(){
		$query = $this->model->table('vland_transfer_catalog')
					  ->select('id, catalog_name, friendlyurl')
					  ->where('isdelete', 0)
					  ->order_by('ordering', 'ASC')
					  ->find_all();
		return $query;			  
	}
	/**
	* Danh mục công ty
	*/
	function getMenusCatalog(){
		$query = $this->model->table('vland_menus_catalog')
					  ->select('id, catalog_name, friendlyurl')
					  ->where('isdelete', 0)
					  ->order_by('ordering', 'ASC')
					  ->find_all();
		return $query;			  
	}
	/**
	* Danh mục dự án
	*/
	function getProjectCatalog(){
		$query = $this->model->table('vland_project_catalog')
					  ->select('id, catalog_name, friendlyurl')
					  ->where('isdelete', 0)
					  ->order_by('ordering', 'ASC')
					  ->find_all();
		return $query;			  
	}
	/**
	* Danh mục tư vấn
	*/
	function getAdvisoryCatalog(){
		$query = $this->model->table('vland_advisory_catalog')
					  ->select('id, catalog_name, friendlyurl')
					  ->where('isdelete', 0)
					  ->order_by('ordering', 'ASC')
					  ->find_all();
		return $query;			  
	}
}