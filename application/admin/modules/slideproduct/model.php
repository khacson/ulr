<?php
 class SlideproductModel extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	function getSearch($search){
		$sql = "";
		if (!empty($search['slide_name'])) {
			$sql .= " AND slide_name LIKE '%".$search['slide_name']."%' ";
		}
		if (!empty($search['description'])) {
			$sql .= " AND description LIKE '%".$search['description']."%' ";
		}
		if (!empty($search['slide_name'])) {
			$sql .= " AND slide_name LIKE '%".$search['slide_name']."%' ";
		}
		
		return $sql;
	}
	function getList($search,$page,$numrows){
		$sql = "SELECT id,img,slide_name,description,slide_name2,datecreate,usercreate, ordering
                        FROM ndnt_slide_product
                        WHERE isdelete = 0";
		$sql.= $this->getSearch($search);
                if(empty($search['order'])){
			$sql .= " ORDER BY ordering asc ";
		}
		else{
			$sql.= " ORDER BY ".$search['order']." ".$search['index']." ";
		} 
                $sql.= ' limit '.$page.','.$numrows;
		
		return $this->model->query($sql)->execute();
	}
	function getTotal($search){
		$sql = " SELECT COUNT(1) AS total
				FROM ndnt_slide_product
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
		 $result = $this->model
						->table('ndnt_slide_product')
						->insert($array);	
		 return $result;
	}
	function edits($array,$id){
		 $result = $this->model->table('ndnt_slide_product')->save($id,$array);	
		 return $result;
	}
	function getSlitetop($idaction){
            $sql = "SELECT *
                    FROM ndnt_slide_product
                    WHERE isdelete=0 and id = ".$idaction;
            $query = $this->model->query($sql)->execute();
            return $query;
    }

}