<?php
 class PicturetypeModel extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	function getCatalog(){
		$query = $this->model->table('vland_picturetype')
					  ->select('id,picturetype_name')
					  ->where('isdelete',0)
					  ->order_by('picturetype_name')
					  ->find_all();
		return $query;
	}
	function getSearch($search){
		$sql = "";
		if (!empty($search['picturetype_name'])) {
			$sql .= " AND p.picturetype_name LIKE '%".$search['picturetype_name']."%' ";
		}
		return $sql;
	}
	function getList($search,$page,$numrows){
		$sql = "SELECT p.id,p.picturetype_name,p.friendlyurl,p.datecreate,p.usercreate, p.img, p.ordering, p.ishome
                        FROM vland_picturetype p
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
				FROM vland_picturetype
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
		 $check = $this->model->table('vland_picturetype')
		 ->select('id')
		 ->where('isdelete',0)
		 ->where('picturetype_name',$array['picturetype_name'])
		 ->find();
		 if(!empty($check->id)){
			 return -1;	
		 }
                 unset($array['fromdate']);
                 unset($array['todate']);
		 $result = $this->model
						->table('vland_picturetype')
						->insert($array);	
		 return $result;
	}
	function edits($array,$id){
		 $check = $this->model->table('vland_picturetype')
		 ->select('id')
		 ->where('isdelete',0)
		 ->where('picturetype_name',$array['picturetype_name'])
		 ->where('id <>',$id)
		 ->find();
		 if(!empty($check->id)){
			 return -1;	
		 }//print_r($array);exit;
		 unset($array['fromdate']);
                 unset($array['todate']);
		 $result = $this->model->table('vland_picturetype')->save($id,$array);	
		 return $result;
	}
	
}