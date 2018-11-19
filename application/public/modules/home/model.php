<?php
/**
 * @author Sonnk
 * @copyright 2018
 */
class HomeModel extends CI_Model
{
	function __construct(){
		parent::__construct('');
	}
	function getSeoWeb(){
		$query = $this->model->table('mec_seoweb')
					  ->select('*')
					  ->where('isdelete', 0)
					  ->find_all();
		$array = array();
		foreach($query as $item){
			$array[$item->friendlyurl] = $item;
		}
		return $array;
	}
	function getService(){
		$query = $this->model->table('mec_service')
					  ->select('id, title, description_sort')
					  ->where('isdelete', 0)
					  ->order_by('ordering', 'asc')
					  ->limit(3)
					  ->find_all();
		return $query;
	}
	function getSlideList(){
		$query = $this->model->table('mec_slide_product')
					  ->select('id, slide_name, description, url, img')
					  ->where('isdelete', 0)
					  ->find_all();
		return $query;
	}
	function getDesign($language){
		$query = $this->model->table('mec_design')
					  ->select('id, description_sort, friendlyurl, title, image, thumb')
					  ->where('isdelete', 0)
					  ->where('language', $language)
					  ->order_by('ordering', 'asc')
					  ->limit(3)
					  ->find_all();
		return $query;
	}
	function getBanner(){
		$query = $this->model->table('mec_baners')
					  ->select('id, img, thumb_img, slide_name')
					  ->where('isdelete',0)
					  ->limit(4)
					  ->find_all();
		return $query;
	}
	function getAbounts($language){
		$query = $this->model->table('mec_about')
					  ->select('id, about_title, description_short')
					  ->where('isdelete', 0)
					  ->where('language', $language)
					  ->find();
		return $query;
	}
	function getInfor(){
		$query = $this->model->table('mec_contact')
					  ->where('isdelete',0)
					  ->find();
		return $query;
	}
	function getPictureType(){
		$query = $this->model->table('mec_picturetype')
					  ->select('id,picturetype_name')
					  ->where('isdelete',0)
					  ->order_by('ordering','asc')
					  ->find_all();
		return $query;
	}
	function getSlideAbout($language){
		$query = $this->model->table('mec_slide_about')
					  ->select('*')
					  ->where('isdelete',0)
					  ->where('language',$language)
					  ->limit(3)
					  ->find_all();
		return $query;
	}
	function getCustomer(){
		$query = $this->model->table('mec_customer')
					  ->where('isdelete',0)
					  ->find_all();
		return $query;
	}
	function getTechnologys($language){
		$query = $this->model->table('mec_technology')
					  ->select('id,title, friendlyurl, thumb, description_sort')
					  ->where('isdelete',0)
					  ->where('language',$language)
					  ->limit(4)
					  ->order_by('ordering','asc')
					  ->find_all();
		return $query;
	}
	function getPicture(){
		$query = $this->model->table('mec_picture')
					  ->select('id,title,typeid,image,thumb,linkweb,video')
					  ->where('isdelete',0)
					  ->limit(20)
					  ->find_all();
		return $query;
	}
	function getTranslation($language){
		$query = $this->model->table('mec_translate')
					  ->select('keyword, translation')
					  ->where('isdelete',0)
					  ->where('language',$language)
					  ->find_all();
		$array = array(); 
		foreach($query as $item){
			$array[$item->keyword] = $item->translation;
		}
		return $array;
	}
	function getLang(){
		$query = $this->model->table('mec_language')
			->order_by('ordering','asc')
			->find_all();
		return $query;
	}
}