<?php
 class ProductModel extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	function getProductType(){
		$query = $this->model->table('galaxy_producttype')
							 ->select('id,title as producttype_name')
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
		if (!empty($search['producttypeid'])) {
			$sql .= " AND p.producttypeid in (".$search['producttypeid'].") ";
		}
		return $sql;
	}
	function getList($search,$page,$numrows){
		$sql = "SELECT p.*, t.title as producttype_name
					FROM galaxy_product p
					LEFT JOIN galaxy_producttype t on t.id = p.producttypeid
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
					FROM galaxy_product p
					LEFT JOIN galaxy_producttype t on t.id = p.producttypeid
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
		$query = $this->model->table('galaxy_product')
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
		WHERE table_name='galaxy_product'; 
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
		 $result = $this->model->table('galaxy_product')
						->insert($array);	
		 return $result;
	}
	function edits($array,$id){
		 $result = $this->model->table('galaxy_product')->save($id,$array);	
		 return $result;
	}
	
}