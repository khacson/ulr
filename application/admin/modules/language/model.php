<?php
 class languageModel extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	function getlanguage(){
		$query = $this->model->table('mec_language')
				 ->order_by('ordering')
				 ->find_all();
		return $query;
	}
	function getSearch($search){
		$sql = "";
		if (!empty($search['keyword'])) {
			$sql .= " AND p.keyword LIKE '%".$search['keyword']."%' ";
		}
		if (!empty($search['translation'])) {
			$sql .= " AND p.translation LIKE '%".$search['translation']."%' ";
		}
		if (!empty($search['language'])) {
			$search['language'] = str_replace('"','',$search['language']);
			$sql .= " AND p.language LIKE '%".str_replace('"','',$search['language'])."%' ";
		}
		return $sql;
	}
	function getList($search,$page,$numrows){
		$sql = "SELECT *
                        FROM mec_translate p
                        WHERE p.isdelete = 0";
		$sql.= $this->getSearch($search);
                if(empty($search['order'])){
			$sql .= " ORDER BY keyword ASC ";
		}
		else{
			$sql.= " ORDER BY ".$search['order']." ".$search['index']." ";
		} 
        $sql.= ' limit '.$page.','.$numrows;
		return $this->model->query($sql)->execute();
	}
	function getTotal($search){
		$sql = " SELECT COUNT(1) AS total
				FROM mec_translate p
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
	function export($search){
		return $this->getList($search);
	}
	function saves($array){
		$array['language'] = str_replace('"','',$array['language']);
		 $check = $this->model->table('mec_translate')
		 ->select('id')
		 ->where('isdelete',0)
		 ->where('keyword',$array['keyword'])
		 ->where('language',$array['language'])
		 ->find();
		 if(!empty($check->id)){
			 return -1;	
		 }
		 $result = $this->model
						->table('mec_translate')
						->insert($array);	
		 return $result;
	}
	function edits($array,$id){
		$array['language'] = str_replace('"','',$array['language']);
		
		 $check = $this->model->table('mec_translate')
		 ->select('id')
		 ->where('isdelete',0)
		 ->where('keyword',$array['keyword'])
		 ->where('language',$array['language'])
		 ->where('id <>',$id)
		 ->find();
		 if(!empty($check->id)){
			 return -1;	
		 }
		 
		 $result = $this->model->table('mec_translate')->save($id,$array);	
		 return $result;
	}
	
}