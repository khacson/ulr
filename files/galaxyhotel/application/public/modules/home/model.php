<?php
/**
 * @author Sonnk
 * @copyright 2016
 */

class HomeModel extends CI_Model
{
	function __construct(){
		parent::__construct('');
	}
	function getService(){
		$query = $this->model->table('galaxy_service')
					  ->select('id,title,description_sort,thumb,friendlyurl')
					  ->where('isdelete',0)
					  ->order_by('ordering','asc')
					  ->find_all();
		return $query;
	}
	function getBlog(){
		$query = $this->model->table('galaxy_blog')
					  ->select('id, title, thumb, friendlyurl, description_sort')
					  ->where('isdelete',0)
					  ->limit(4)
					  ->order_by('id','desc')
					  ->find_all();
		return $query;
	}
	function getServiceType(){
		$query = $this->model->table('galaxy_servicetype')
					  ->select('id,type_name,img,friendlyurl')
					  ->where('isdelete',0)
					  ->order_by('ordering','asc')
					  ->find_all();
		return $query;
	}
	function getSlideList(){
		$query = $this->model->table('galaxy_slide_product')
					  ->select('id,slide_name,description,url,img')
					  ->where('isdelete',0)
					  //->order_by('ordering','asc')
					  ->find_all();
		return $query;
	}
	function getSlideAbout(){
		$query = $this->model->table('galaxy_slide_about')
					  ->select('id,slide_name,description,url,img')
					  ->where('isdelete',0)
					  ->limit(3)
					  ->order_by('ordering','asc')
					  ->find_all();
		return $query;
	}
	function getAbounts(){
		$query = $this->model->table('galaxy_about')
					  ->select('id,about_title,description_short')
					  ->where('isdelete',0)
					  ->find();
		return $query;
	}
	function getAbountProdut(){
		$query = $this->model->table('galaxy_productblog')
					  ->select('id,about_title,description_short')
					  ->where('isdelete',0)
					  ->find();
		return $query;
	}
	
	function getInfor(){
		$query = $this->model->table('galaxy_contact')
					  ->where('isdelete',0)
					  ->find();
		return $query;
	}
	function getProductType(){
		$query = $this->model->table('galaxy_producttype')
					  ->select('id, title as producttype_name, thumb as img, friendlyurl, description_sort')
					  ->where('isdelete',0)
					  ->order_by('ordering','asc')
					  ->limit(4)
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
	function getProduct(){
		$query = $this->model->table('galaxy_product')
					  ->select('id,title,friendlyurl,price,price_type,thumb')
					  ->where('isdelete',0)
					  ->limit(6)
					  ->order_by('ordering','asc')
					  ->find_all();
		return $query;
	}
	function getCustomer(){
		$query = $this->model->table('galaxy_customer')
					  ->where('isdelete',0)
					  ->find_all();
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
	function getBanner(){
		$query = $this->model->table('galaxy_baners')
					  ->select('id,slide_name,description,img,url')
					  ->where('isdelete',0)
					  ->find_all();
		return $query;
	}
	function getPosts(){
		$query = $this->model->table('galaxy_posts')
					  ->select('*')
					  ->where('isdelete',0)
					  ->find_all();
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