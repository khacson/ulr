<?php
/**
 * @author Sonnk
 * @copyright 2017
 */
 
class incModelMenu extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	function getDesign($lang){
		$query = $this->model->table('mec_design')
			->select('id,friendlyurl,title')
			->where('isdelete',0)
			->where('isshow',1)
			->where('language', $lang)
			->order_by('ordering','asc')
			->find_all();
		return $query;
	}
	function getTechnology($lang){
		$query = $this->model->table('mec_technology')
			->select('id, friendlyurl, title')
			->where('isdelete', 0)
			->where('isshow', 1)
			->where('language', $lang)
			->order_by('ordering', 'asc')
			->find_all();
		return $query;
	}
	function getLang($lang){
		$query = $this->model->table('mec_language')
			->where('lang_code <>',$lang)
			->order_by('ordering','asc')
			->limit(4)
			->find_all();
		return $query;
	}
}