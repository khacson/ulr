<?php
 class ProvinceModel extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	function getCatalog(){
		$query = $this->model->table('vland_province')
					  ->select('id,province_name')
					  ->where('isdelete',0)
					  ->order_by('province_name')
					  ->find_all();
		return $query;
	}
	function getSearch($search){
		$sql = "";
		if (!empty($search['province_name'])) {
			$sql .= " AND p.province_name LIKE '%".$search['province_name']."%' ";
		}
		return $sql;
	}
	function getList($search,$page,$numrows){
		$sql = "SELECT p.id,p.province_name,p.friendlyurl,p.datecreate,p.usercreate, p.img, p.ordering
                        FROM vland_province p
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
				FROM vland_province
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
		 $check = $this->model->table('vland_province')
		 ->select('id')
		 ->where('isdelete',0)
		 ->where('province_name',$array['province_name'])
		 ->find();
		 //Find max ordering
		 $findMax = $this->model->select('max(ordering) ordering')
						 ->table('vland_province')
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
						->table('vland_province')
						->insert($array);	
		 return $result;
	}
	function edits($array,$id){
		 $check = $this->model->table('vland_province')
		 ->select('id')
		 ->where('isdelete',0)
		 ->where('province_name',$array['province_name'])
		 ->where('id <>',$id)
		 ->find();
		 if(!empty($check->id)){
			 return -1;	
		 }//print_r($array);exit;
		 $result = $this->model->table('vland_province')->save($id,$array);	
		 return $result;
	}
	
}