<?php
/**
 * @author 
 * @copyright 2016
 */
class ProductModel extends CI_Model
{
	function __construct(){
		parent::__construct('');
	}
	function getSeoWeb(){
		$query = $this->model->table('galaxy_seoweb')
					  ->select('id,meta_title,typeid,image,friendlyurl,meta_keyword,mete_description,link_web')
					  ->where('isdelete',0)
					  ->find_all();
		$array = array();
		foreach($query as $item){
			$array[$item->typeid] = $item;
		}
		return $array;
	}
	function getInfor(){
		$query = $this->model->table('galaxy_contact')
					  ->where('isdelete',0)
					  ->find();
		return $query;
	}
	function getTypeProduct($friendlyurl){
		$query = $this->model->table('galaxy_producttype')
					  ->select('id,producttype_name')
					  ->where('friendlyurl',$friendlyurl)
					  ->find();
		return $query;
	}
	function getProductList(){
		$query = $this->model->table('galaxy_product')
					  ->select('id,title,friendlyurl,price,price_type,thumb,description_sort')
					  ->where('isdelete',0);
		$query = $query->order_by('ordering','asc')
					  ->find_all();
		return $query;
	}
}