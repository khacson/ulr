<?php
 class SeowebModel extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	function seowebTypes(){
		$query = $this->model->table('ndnt_seoweb_type')
				 ->select('id,seoweb_type_name')
				 ->where('isdelete',0)
				 ->order_by('ordering')
				 ->find_all();
		return $query;
	}
	function getSearch($search){
		$sql = "";
		if (!empty($search['title'])) {
			$sql .= " AND s.title LIKE '%".$search['title']."%' ";
		}
		return $sql;
	}
	function getList($search,$page,$numrows){
		$sql = "SELECT s.*, ts.seoweb_type_name
                        FROM ndnt_seoweb s
						LEFT JOIN ndnt_seoweb_type ts on ts.id = s.typeid
                        WHERE s.isdelete = 0";
		$sql.= $this->getSearch($search);
                if(empty($search['order'])){
			$sql .= " ORDER BY s.id desc ";
		}
		else{
			$sql.= " ORDER BY ".$search['order']." ".$search['index']." ";
		} 
        $sql.= ' limit '.$page.','.$numrows;
		return $this->model->query($sql)->execute();
	}
	function getTotal($search){
		$sql = " SELECT COUNT(1) AS total
				FROM ndnt_seoweb s
				WHERE s.isdelete = 0 ";
		$sql.= $this->getSearch($search);
		$query = $this->model->query($sql)->execute();
		if(empty($query[0]->total)){
			return 0;
		}
		else{
			return $query[0]->total;
		}
	}
	function detail($id){
		$query = $this->model->table('ndnt_seoweb')
				 ->select('*')
				 ->where('isdelete',0)
				 ->where('id',$id)
				 ->find();
		if(!empty($query->id)){
			return $query;
		}
		else{
			return $this->getNone();
		}
	}
	function getNone(){
		$sql = "
		SELECT column_name,column_default
		FROM information_schema.columns
		WHERE table_name='ndnt_seoweb'; 
		";
		//column_name
		$query = $this->model->query($sql)->execute();
		$obj = new stdClass();
		foreach($query as $item){
			$clm = $item->column_name;
			$obj->$clm = $item->column_default;
		}
		return $obj;
	}
	function saves($array){
		 $check = $this->model->table('ndnt_seoweb')
		 ->select('id')
		 ->where('isdelete',0)
		 ->where('meta_title',$array['meta_title'])
		 ->find();
		 if(!empty($check->id)){
			 return -1;	
		 }
		 $result = $this->model
						->table('ndnt_seoweb')
						->insert($array);	
		 return $result;
	}
	function edits($array,$id){
		 $check = $this->model->table('ndnt_seoweb')
		 ->select('id')
		 ->where('isdelete',0)
		 ->where('meta_title',$array['meta_title'])
		 ->where('id <>',$id)
		 ->find();
		 if(!empty($check->id)){
			 return -1;	
		 }//print_r($array);exit;
		 $result = $this->model->table('ndnt_seoweb')->save($id,$array);	
		 return $result;
	}
	
}