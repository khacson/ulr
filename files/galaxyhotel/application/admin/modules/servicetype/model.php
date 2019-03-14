<?php
 class ServicetypeModel extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	function getCatalog(){
		$query = $this->model->table('galaxy_servicetype')
					  ->select('id,type_name')
					  ->where('isdelete',0)
					  ->where('parentid',0)
					  ->order_by('type_name')
					  ->find_all();
		return $query;
	}
	function getSearch($search){
		$sql = "";
		if (!empty($search['type_name'])) {
			$sql .= " AND p.type_name LIKE '%".$search['type_name']."%' ";
		}
		if ($search['parentid'] != '') {
			$sql .= " AND p.parentid in (".$search['parentid'].") ";
		}
		return $sql;
	}
	function getList($search,$page,$numrows){
		$sql = "SELECT p.meta_title,p.meta_keyword,p.mete_description,p.parentid, p.id,p.type_name,p.friendlyurl,p.datecreate,p.usercreate, p.img, p.ordering, p.ishome,p.background, pt.type_name as capcha
                        FROM galaxy_servicetype p
						LEFT JOIN galaxy_servicetype pt on pt.id = p.parentid
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
				FROM galaxy_servicetype p
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
		 /*$check = $this->model->table('galaxy_servicetype')
		 ->select('id')
		 ->where('isdelete',0)
		 ->where('type_name',$array['type_name'])
		 ->find();
		 if(!empty($check->id)){
			 return -1;	
		 }*/
                 unset($array['fromdate']);
                 unset($array['todate']);
		 $result = $this->model
						->table('galaxy_servicetype')
						->insert($array);	
		 return $result;
	}
	function edits($array,$id){
		 /*$check = $this->model->table('galaxy_servicetype')
		 ->select('id')
		 ->where('isdelete',0)
		 ->where('type_name',$array['type_name'])
		 ->where('id <>',$id)
		 ->find();
		 if(!empty($check->id)){
			 return -1;	
		 }*/
		 //print_r($array);exit;
		 unset($array['fromdate']);
                 unset($array['todate']);
		$result = $this->model->table('galaxy_servicetype')->where('id',$id)->update($array);	
		 return $result;
	}
	
}