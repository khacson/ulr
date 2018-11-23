<?php
 class EmployeeModel extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	function blogType(){
		$query = $this->model->table('ndnt_employee')
				 ->select('id,title')
				 ->where('isdelete',0)
				 ->order_by('ordering')
				 ->find_all();
		return $query;
	}
	function getSearch($search){
		$sql = "";
		if (!empty($search['title'])) {
			$sql .= " AND l.title LIKE '%".$search['title']."%' ";
		}
		return $sql;
	}
	function getList($search,$page,$numrows){
		$sql = "SELECT l.*
                        FROM ndnt_employee l
                        WHERE l.isdelete = 0";
		$sql.= $this->getSearch($search);
                if(empty($search['order'])){
			$sql .= " ORDER BY l.id desc ";
		}
		else{
			$sql.= " ORDER BY ".$search['order']." ".$search['index']." ";
		} 
        $sql.= ' limit '.$page.','.$numrows;
		return $this->model->query($sql)->execute();
	}
	function getTotal($search){
		$sql = " SELECT COUNT(1) AS total
				FROM ndnt_employee l
				WHERE l.isdelete = 0 ";
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
		$query = $this->model->table('ndnt_employee')
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
		WHERE table_name='ndnt_employee'; 
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
		 $check = $this->model->table('ndnt_employee')
		 ->select('id')
		 ->where('isdelete',0)
		 ->where('title',$array['title'])
		 ->find();
		 if(!empty($check->id)){
			 return -1;	
		 }
		 $result = $this->model
						->table('ndnt_employee')
						->insert($array);	
		 return $result;
	}
	function edits($array,$id){
		 $check = $this->model->table('ndnt_employee')
		 ->select('id')
		 ->where('isdelete',0)
		 ->where('title',$array['title'])
		 ->where('id <>',$id)
		 ->find();
		 if(!empty($check->id)){
			 return -1;	
		 }
		 $result = $this->model->table('ndnt_employee')->save($id,$array);	
		 return $result;
	}
	
}