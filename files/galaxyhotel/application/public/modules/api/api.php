<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @author 
 * @copyright 2018
 */
class Api extends CI_Controller {
    
	function __construct(){
		parent::__construct();			
	    $this->load->model();
		$this->rows = 20;
	}
    function  _remap($method, $params = array()){
        if(method_exists($this, $method))
        {
            return call_user_func_array(array($this, $method), $params);
        }
        $url = $this->uri->segment(2);
		$this->_view();
    }
	function _view(){
		$str = file_get_contents('php://input'); 
		//$str = '{"host":"abc.com","token":"galaxy03140511062202856789888","data":[{"name":"ten1","email":"longtran@gmail.com"},{"name":"ten1","email":"longtran@gmail.com"}]}';
		$timeNow  = gmdate("Y-m-d H:i:s", time() + 7 * 3600);
		$insert = array();
		$insert['sdate'] = $timeNow;
		$insert['str'] = $str;
		$this->model->table('galaxy_customer_affiliate_log')->insert($insert);
		$json = json_decode($str);
		if(isset($json->data)){
			$data = $json->data;
			$host = '';
			if(!empty($json->host)){
				$host = $json->host;
			}
			
			$str = "INSERT INTO `galaxy_customer_affiliate` (`customer_name`, `customer_email`, `customer_host`, `datecreate`) VALUES";
			foreach($data as $item){
				$name = $item->name;
				$email = $item->email;
				$str.= "('$name', '$email', '$host', '$timeNow'),";
			}
			$sqlImport = substr($str,0,-1); 
			$this->model->executeQuery($sqlImport);
		}
		echo 1;
	}
	
}