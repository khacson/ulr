<?php
 class UserModel extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	function getSearch($search){
		$sql = "";
		if (!empty($search['username'])) {
			$sql .= " AND u.username LIKE '%".$search['username']."%' ";
		}
		if (!empty($search['fullname'])) {
			$sql .= " AND u.fullname LIKE '%".$search['fullname']."%' ";
		}
		if (!empty($search['email'])) {
			$sql .= " AND u.email LIKE '%".$search['email']."%' ";
		}
		if (!empty($search['mobile'])) {
			$sql .= " AND u.mobile LIKE '%".$search['mobile']."%' ";
		}
		if (!empty($search['groupid'])) {
			$sql .= " AND u.groupid = '".$search['groupid']."' ";
		}
		return $sql;
	}
	function getList($search,$page,$numrows){
		$sql = " SELECT u.id,u.username, u.fullname, u.groupid, u.image, 
				 u.mobile, u.email, u.datecreate,
				 g.groupname,g.grouptype
				FROM ndnt_users AS u 
				LEFT JOIN ndnt_groups AS g ON g.id = u.groupid
				WHERE u.isdelete = 0 ";
		$sql.= $this->getSearch($search);
		if(empty($search['order'])){
			$sql .= " ORDER BY u.id DESC ";
		}
		else{
			$sql.= " ORDER BY ".$search['order']." ".$search['index']." ";
		}   
        $sql.= ' limit '.$page.','.$numrows;
		
		return $this->model->query($sql)->execute();
	}
	function getTotal($search){
		$sql = " SELECT COUNT(1) AS total
				FROM ndnt_users AS u 
				LEFT JOIN ndnt_groups AS g ON g.id = u.groupid
				WHERE u.isdelete = 0 ";
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
		 $check = $this->model->table('ndnt_users')
		 ->select('id')
		 ->where('isdelete',0)
		 ->where('username',$array['username'])
		 ->find();
		 if(!empty($check->id)){
			 return -1;	
		 }
		 $pass = md5("firefuma.com").md5($array['password']);
		 $array['password'] = $pass;
		 $result = $this->model
						->table('ndnt_users')
						->insert($array);	
		 return $result;
	}
	function edits($array,$id){
		 $check = $this->model->table('ndnt_users')
		 ->select('id')
		 ->where('isdelete',0)
		 ->where('username',$array['username'])
		 ->where('id <>',$id)
		 ->find();
		 if(!empty($check->id)){
			 return -1;	
		 }//print_r($array);exit;
		 if(isset($array['password']) && $array['password']!=""){
			$pass = md5("firefuma.com").md5($array['password']);
			$array['password'] = $pass;
		 }
		 
		 $result = $this->model->table('ndnt_users')->save($id,$array);	
		 return $result;
	}
	function changueSearch($search){//print_r($search);exit;
		$groupid = '';//print_r($search['customers']);exit;
		if(isset($search['groupid'])){			
			$arr_g = explode("__",$search['groupid']);
			$groupid = isset($arr_g[0])?$arr_g[0]:"";
		}		
		unset($search['groupid']);
		$search['groupid'] = $groupid;		
		return $search;
	}
}