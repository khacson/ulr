<?php
 class WebtypeModel extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	function getCatalog(){
		$query = $this->model->table('mec_webtype')
					  ->select('id,webtype_name')
					  ->where('isdelete',0)
					  ->order_by('webtype_name')
					  ->find_all();
		return $query;
	}
	function getSearch($search){
		$sql = "";
		if (!empty($search['webtype_name'])) {
			$sql .= " AND p.webtype_name LIKE '%".$search['webtype_name']."%' ";
		}
		return $sql;
	}
	function getList($search,$page,$numrows){
		$sql = "SELECT p.id,p.webtype_name,p.friendlyurl,p.datecreate,p.usercreate, p.img, p.ordering, p.ishome
                        FROM mec_webtype p
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
				FROM mec_webtype
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
		 $check = $this->model->table('mec_webtype')
		 ->select('id')
		 ->where('isdelete',0)
		 ->where('webtype_name',$array['webtype_name'])
		 ->find();
		 if(!empty($check->id)){
			 return -1;	
		 }
                 unset($array['fromdate']);
                 unset($array['todate']);
		 $result = $this->model
						->table('mec_webtype')
						->insert($array);	
		 return $result;
	}
	function edits($array,$id){
		 $check = $this->model->table('mec_webtype')
		 ->select('id')
		 ->where('isdelete',0)
		 ->where('webtype_name',$array['webtype_name'])
		 ->where('id <>',$id)
		 ->find();
		 if(!empty($check->id)){
			 return -1;	
		 }//print_r($array);exit;
		 unset($array['fromdate']);
                 unset($array['todate']);
		 $result = $this->model->table('mec_webtype')->save($id,$array);	
		 return $result;
	}
	
}