<?php
 class SeowebModel extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	function seowebTypes(){
		$query = $this->model->table('galaxy_seoweb_type')
				 ->select('id,seoweb_type_name')
				 ->where('isdelete',0)
				 ->order_by('ordering')
				 ->find_all();
		return $query;
	}
	function getSearch($search){
		$sql = "";
		if (!empty($search['title'])) {
			$sql .= " AND sw.title LIKE '%".$search['title']."%' ";
		}
		return $sql;
	}
	function getList($search,$page,$numrows){
		$sql = "SELECT sw.*, st.seoweb_type_name
                        FROM galaxy_seoweb sw
						LEFT JOIN galaxy_seoweb_type st on st.id = sw.typeid
                        WHERE sw.isdelete = 0";
		$sql.= $this->getSearch($search);
                if(empty($search['order'])){
			$sql .= " ORDER BY sw.id desc ";
		}
		else{
			$sql.= " ORDER BY ".$search['order']." ".$search['index']." ";
		} 
        $sql.= ' limit '.$page.','.$numrows;
		return $this->model->query($sql)->execute();
	}
	function getTotal($search){
		$sql = " SELECT COUNT(1) AS total
				FROM galaxy_seoweb sw
				WHERE sw.isdelete = 0 ";
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
		$query = $this->model->table('galaxy_seoweb')
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
		WHERE table_name='galaxy_seoweb'; 
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
		 $result = $this->model
						->table('galaxy_seoweb')
						->insert($array);	
		 return $result;
	}
	function edits($array,$id){
		 $result = $this->model->table('galaxy_seoweb')->save($id,$array);	
		 return $result;
	}
	
}