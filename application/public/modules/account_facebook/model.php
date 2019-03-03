<?php
/**
 * @author Sonnk
 * @copyright 2018
 */
class AccountModel extends CI_Model
{
	function __construct(){
		parent::__construct('');
	}
	/*function getSeoWeb(){
		$query = $this->model->table('mec_seoweb')
					  ->select('*')
					  ->where('isdelete', 0)
					  ->find_all();
		$array = array();
		foreach($query as $item){
			$array[$item->friendlyurl] = $item;
		}
		return $array;
	}
	*/
	function checkUser($userData = array()){
		if(!empty($userData)){
            //Check whether user data already exists in database
            $this->db->trans_start();
			$sql = "SELECT * FROM ulr_member WHERE social_network_type = '".$userData['social_network_type']."' AND social_network_id = '".$userData['social_network_id']."'";
            $query = $this->model->query($sql)->execute();
            if(count($query) > 0){
                //Update user data if already exists
                $sql1 = "UPDATE ulr_member SET first_name = '".$userData['first_name']."', last_name = '".$userData['last_name']."', email = '".$userData['email']."', gender = '".$userData['gender']."', locale = '".$userData['locale']."', picture = '".$userData['picture']."', link = '".$userData['link']."', dateupdate = '".date("Y-m-d H:i:s")."', last_login = '".date("Y-m-d H:i:s")."' WHERE social_network_type = '".$userData['social_network_type']."' AND social_network_id = '".$userData['social_network_id']."'";
                
				$this->model->executeQuery($sql1);
            }
			else{
				$userData['last_login']= date("Y-m-d H:i:s");
				$userData['datecreate']= date("Y-m-d H:i:s");                
				 $this->model->table('ulr_member')->insert($userData);
            }
            $this->db->trans_complete(); # Completing transaction
			if ($this->db->trans_status() === FALSE) {
				$this->db->trans_rollback();
				return 0;
			} 
            //Get user data from the database
            $userData = $this->model->query($sql)->execute();            
        }
        
        //Return user data
        return $userData;
	}
}