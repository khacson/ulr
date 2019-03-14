<?php
 class CustomerModel extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	function getSearch($search){
		$sql = "";
		if (!empty($search['customer_name'])) {
			$sql .= " AND customer_name LIKE '%".$search['customer_name']."%' ";
		}
		return $sql;
	}
	function getList($search,$page,$numrows){
		$sql = "SELECT id,customer_name,friendlyurl,datecreate,usercreate,website,phone,email, img, ordering, ishome
                        FROM galaxy_customer
                        WHERE isdelete = 0";
		$sql.= $this->getSearch($search);
                if(empty($search['order'])){
			$sql .= " ORDER BY ordering ASC ";
		}
		else{
			$sql.= " ORDER BY ".$search['order']." ".$search['index']." ";
		} 
                $sql.= ' limit '.$page.','.$numrows;
		
		return $this->model->query($sql)->execute();
	}
	function getTotal($search){
		$sql = " SELECT COUNT(1) AS total
				FROM galaxy_customer
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
		 $check = $this->model->table('galaxy_customer')
		 ->select('id')
		 ->where('isdelete',0)
		 ->where('customer_name',$array['customer_name'])
		 ->find();
		 if(!empty($check->id)){
			 return -1;	
		 }
                 unset($array['fromdate']);
                 unset($array['todate']);
		 $result = $this->model
						->table('galaxy_customer')
						->insert($array);	
		 return $result;
	}
	function edits($array,$id){
		 $check = $this->model->table('galaxy_customer')
		 ->select('id')
		 ->where('isdelete',0)
		 ->where('customer_name',$array['customer_name'])
		 ->where('id <>',$id)
		 ->find();
		 if(!empty($check->id)){
			 return -1;	
		 }//print_r($array);exit;
		 unset($array['fromdate']);
                 unset($array['todate']);
		 $result = $this->model->table('galaxy_customer')->save($id,$array);	
		 return $result;
	}
	
}