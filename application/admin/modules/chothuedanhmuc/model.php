<?php
 class ChothuedanhmucModel extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	function getCatalog(){
		$query = $this->model->table('vland_lease_catalog')
					  ->select('id,catalog_name')
					  ->where('isdelete',0)
					  ->order_by('catalog_name')
					  ->find_all();
		return $query;
	}
	function getSearch($search){
		$sql = "";
		if (!empty($search['catalog_name'])) {
			$sql .= " AND p.catalog_name LIKE '%".$search['catalog_name']."%' ";
		}
		return $sql;
	}
	function getList($search,$page,$numrows){
		$sql = "SELECT p.id,p.catalog_name,p.friendlyurl,p.datecreate,p.usercreate, p.img, p.ordering
                        FROM vland_lease_catalog p
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
				FROM vland_lease_catalog
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
		 $check = $this->model->table('vland_lease_catalog')
		 ->select('id')
		 ->where('isdelete',0)
		 ->where('catalog_name',$array['catalog_name'])
		 ->find();
		 //Find max ordering
		 $findMax = $this->model->select('max(ordering) ordering')
						 ->table('vland_lease_catalog')
						 ->select('id')
						 ->where('isdelete',0)
						 ->find();
		 
		 if(!empty($findMax->ordering)){
			 $array['ordering'] = $findMax->ordering + 1;
		 }
		 
		 if(!empty($check->id)){
			 return -1;	
		 }
		 $result = $this->model
						->table('vland_lease_catalog')
						->insert($array);	
		 return $result;
	}
	function edits($array,$id){
		 $check = $this->model->table('vland_lease_catalog')
		 ->select('id')
		 ->where('isdelete',0)
		 ->where('catalog_name',$array['catalog_name'])
		 ->where('id <>',$id)
		 ->find();
		 if(!empty($check->id)){
			 return -1;	
		 }//print_r($array);exit;
		 $result = $this->model->table('vland_lease_catalog')->save($id,$array);	
		 return $result;
	}
	
}