<?php
/**
 * @author 
 * @copyright 2016
 */

class NewsModel extends CI_Model
{
	function __construct(){
		parent::__construct('');
	}
	function getNews(){
		$query = $this->model->table('galaxy_blog')
					  ->where('isdelete',0)
					  ->order_by('id','desc')
					  ->find_all();
		return $query;
	}
	function getNewsList(){
		$sql = "
			SELECT * 
				FROM galaxy_blog b
				where b.isdelete = 0
				order by id desc
				limit 2,20
		";
		return $this->model->query($sql)->execute();
	}
	function getFindNews($friendlyurl){
		$query = $this->model->table('galaxy_blog')
					  ->where('isdelete',0)
					  ->where('friendlyurl',$friendlyurl)
					  ->find();
		return $query;
	}
	function getAccordition(){
			$sql = "
			SELECT 	a.title,a.description				
			FROM galaxy_accordition a			
		";
		$query = $this->model->query($sql)->execute();
		return $query;
	}
	function getInfor(){
		$query = $this->model->table('galaxy_contact')
					  ->where('isdelete',0)
					  ->find();
		return $query;
	}
}