<?php
/**
 * @author 
 * @copyright 2016
 */
class AboutusModel extends CI_Model
{
	function __construct(){
		parent::__construct('');
	}
	function getService(){
		$query = $this->model->table('galaxy_service')
					  ->where('isdelete',0)
					  ->find_all();
		return $query;
	}
	function getInfor(){
		$query = $this->model->table('galaxy_contact')
					  ->where('isdelete',0)
					  ->find();
		return $query;
	}
	function getAbout(){
		$query = $this->model->table('galaxy_about')
					  ->where('isdelete',0)
					  ->find();
		return $query;
	}
	function getAboutSlide(){
		$query = $this->model->table('galaxy_slide_about')
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
			$array[$item->typeid] = $item;
		}
		return $array;
	}
}