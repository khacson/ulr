<?php
 class ServiceModel extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	function getserviceType(){
		$query = $this->model->table('ndnt_servicetype')
							 ->select('id,servicetype_name,parentid')
						     ->where('isdelete',0)
							 ->order_by('parentid,ordering')
							 ->find_all();
		return $query;
	}
	function getSearch($search){
		$sql = "";
		if (!empty($search['title'])) {
			$sql .= " AND p.title LIKE '%".$search['title']."%' ";
		}
		return $sql;
	}
	function getList($search,$page,$numrows){
		$sql = "SELECT p.*
					FROM ndnt_service p
					WHERE p.isdelete = 0
					";
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
					FROM ndnt_service p
					WHERE p.isdelete = 0
					";
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
		$query = $this->model->table('ndnt_service')
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
		WHERE table_name='ndnt_service'; 
		";
		$query = $this->model->query($sql)->execute();
		$obj = new stdClass();
		foreach($query as $item){
			$clm = $item->column_name;
			$obj->$clm = $item->column_default;
		}
		return $obj;
	}
	function saves($array){
		$array['price_value'] = (float)$array['price'] * (int)$array['price_type'];
		$result = $this->model->table('ndnt_service')
						->insert($array);	
		return $result;
	}
	function edits($array,$id){
		$array['price_value'] = (float)$array['price'] * (int)$array['price_type'];
		$result = $this->model->table('ndnt_service')->save($id,$array);	
		return $result;
	}
	
}