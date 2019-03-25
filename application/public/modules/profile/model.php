<?php
/**
 * @author Sonnk
 * @copyright 2019
 */
class ProfileModel extends CI_Model
{
	function __construct(){
		parent::__construct('');
	}

	function getListSellCatalog() {
		$query = $this->model->table('vland_sell_catalog')
					  ->select('id, catalog_name, friendlyurl')
					  ->where('isdelete', 0)
					  ->order_by('ordering', 'ASC')
					  ->find_all();
		return (object) $query;
	}

	function getListProvince() {
		$query = $this->model->table('vland_province')
					  ->select('id, province_name, friendlyurl')
					  ->where('isdelete', 0)
					  ->order_by('ordering', 'ASC')
					  ->find_all();
		return (object) $query;
	}

	function getListDirection() {
		$query = $this->model->table('vland_direction')
					  ->select('id, direction_name, friendlyurl')
					  ->where('isdelete', 0)
					  ->order_by('ordering', 'ASC')
					  ->find_all();
		return (object) $query;
	}
}