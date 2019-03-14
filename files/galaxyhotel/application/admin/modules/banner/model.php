<?php
 class BannerModel extends CI_Model{
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
		if (!empty($search['url'])) {
			$sql .= " AND url LIKE '%".$search['url']."%' ";
		}
		
		return $sql;
	}
	function getList($search,$page,$numrows){
		$sql = "SELECT id,img,slide_name,description,url,datecreate,usercreate
                        FROM galaxy_baners
                        WHERE isdelete = 0";
		$sql.= $this->getSearch($search);
                if(empty($search['order'])){
			$sql .= " ORDER BY id DESC ";
		}
		else{
			$sql.= " ORDER BY ".$search['order']." ".$search['index']." ";
		} 
                $sql.= ' limit '.$page.','.$numrows;
		
		return $this->model->query($sql)->execute();
	}
	function getTotal($search){
		$sql = " SELECT COUNT(1) AS total
				FROM galaxy_baners
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
						->table('galaxy_baners')
						->insert($array);	
		 return $result;
	}
	function edits($array,$id){
		 $result = $this->model->table('galaxy_baners')->save($id,$array);	
		 return $result;
	}
	function getSlitetop($idaction){
            $sql = "SELECT *
                    FROM galaxy_baners
                    WHERE isdelete=0 and id = ".$idaction;
            $query = $this->model->query($sql)->execute();
            return $query;
    }

}