<?php
/**
 * @author Sonnk
 * @copyright 2015
 */
 
class incModelQuickview extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	/*function getNews(){
		$query = $this->model->table('mm_blog')
					  ->select('id,title,friendlyurl,thumb,datecreate,description_sort')
					  ->where('isdelete',0)
					  ->where('isshow',1)
					  ->limit(3)
					  ->find_all();
		return $query;
	}*/
}