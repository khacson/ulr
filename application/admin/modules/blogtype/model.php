<?php
 class BlogtypeModel extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	function getCatalog(){
		$query = $this->model->table('mec_blog_type')
					  ->select('id,blogtype_name')
					  ->where('isdelete',0)
					  ->order_by('blogtype_name')
					  ->find_all();
		return $query;
	}
	function getSearch($search){
		$sql = "";
		if (!empty($search['blogtype_name'])) {
			$sql .= " AND p.blogtype_name LIKE '%".$search['blogtype_name']."%' ";
		}
		return $sql;
	}
	function getList($search,$page,$numrows){
		$sql = "SELECT p.id,p.blogtype_name,p.friendlyurl,p.datecreate,p.usercreate, p.img, p.ordering, p.ishome
                        FROM mec_blog_type p
                        WHERE p.isdelete = 0";
		$sql.= $this->getSearch($search);
                if(empty($search['order'])){
			$sql .= " ORDER BY p.ordering ASC ";
		}
		else{
			$sql.= " ORDER BY ".$search['order']." ".$search['index']." ";
		} 
                $sql.= ' limit '.$page.','.$numrows;
		
		return $this->model->query($sql)->execute();
	}
	function getTotal($search){
		$sql = " SELECT COUNT(1) AS total
				FROM mec_blog_type
				WHERE isdelete = 0 ";
		$sql.= $this->getSearch($search);
		$query = $this->model->query($sql)->execute();
		if(empty($query[0]->total)){
			return 0;
		}
		else{
			return $query[0]->total;
		}
	}
	function export($search){
		return $this->getList($search);
	}
	function saves($array){
        unset($array['fromdate']);
        unset($array['todate']);
		$result = $this->model
						->table('mec_blog_type')
						->insert($array);	
		return $result;
	}
	function edits($array,$id){
		unset($array['fromdate']);
        unset($array['todate']);
		$result = $this->model->table('mec_blog_type')->save($id,$array);	
		return $result;
	}
	
}