<?php
 class DesignpictureModel extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	function blogDesign(){
		$query = $this->model->table('mec_design')
				 ->select('id, title, language')
				 ->where('isdelete',0)
				 ->order_by('ordering')
				 ->find_all();
		return $query;
	}
	function getSearch($search){
		$sql = "";
		if (!empty($search['title'])) {
			$sql .= " AND p.title LIKE '%".$search['title']."%' ";
		}
		if (!empty($search['typeid'])) {
			$sql .= " AND p.typeid in (".$search['typeid'].") ";
		}
		return $sql;
	}
	function getList($search,$page,$numrows){
		$sql = "SELECT p.*, t.title as typename
                        FROM mec_picture_design p
						LEFT JOIN mec_design t on t.id = p.typeid
                        WHERE p.isdelete = 0";
		$sql.= $this->getSearch($search);
                if(empty($search['order'])){
			$sql .= " ORDER BY p.ordering asc ";
		}
		else{
			$sql.= " ORDER BY ".$search['order']." ".$search['index']." ";
		} 
        $sql.= ' limit '.$page.','.$numrows;
		return $this->model->query($sql)->execute();
	}
	function getTotal($search){
		$sql = " SELECT COUNT(1) AS total
				FROM mec_picture_design p
				WHERE p.isdelete = 0 ";
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
		$query = $this->model->table('mec_picture_design')
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
		WHERE table_name='mec_picture_design'; 
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
		 /*$check = $this->model->table('mec_picture_design')
		 ->select('id')
		 ->where('isdelete',0)
		 ->where('title',$array['title'])
		 ->find();
		 if(!empty($check->id)){
			 return -1;	
		 }*/
		 $result = $this->model
						->table('mec_picture_design')
						->insert($array);	
		 return $result;
	}
	function edits($array,$id){
		 /*$check = $this->model->table('mec_picture_design')
		 ->select('id')
		 ->where('isdelete',0)
		 ->where('title',$array['title'])
		 ->where('id <>',$id)
		 ->find();
		 if(!empty($check->id)){
			 return -1;	
		 }//print_r($array);exit;*/
		 $result = $this->model->table('mec_picture_design')->save($id,$array);	
		 return $result;
	}
	
}