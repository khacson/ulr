<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @author 
 * @copyright 2018
 */
class Services extends CI_Controller {
    
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
	function login(){
		$str = file_get_contents('php://input'); 
		$timeNow  = gmdate("Y-m-d H:i:s", time() + 7 * 3600);
		//$str = '{"phone":"0939770785","password":"123","token":"31451162202856789888"}';
		$obj = json_decode($str);
		$return = new stdClass();
		if(empty($obj->token)){
			$return->status = 0;
			$return->msg = 'Mật khẩu hoạc số điện thoại không đúng.';
			echo json_encode($return); exit;
		}
		if($obj->token != 31451162202856789888){
			$return->status = 0;
			$return->msg = 'Mật khẩu hoạc số điện thoại không đúng.';
			echo json_encode($return); exit;
		}
		$password = $obj->password;
		$pass = md5($password.'firefuma@vn').md5('56789888');
		$phone = $obj->phone;
		$checkLogin = $this->model->table('service_member')
								  ->select('id,phone,email,token,point,sex,birthday,password,isactive,fullname,avatar')
								  ->where('phone',$phone)
								  ->where('isdelete',0)
								  ->find();
		if(empty($checkLogin->id)){
			$return->status = 0;
			$return->msg = 'Mật khẩu hoạc số điện thoại không đúng.';
			echo json_encode($return); exit;
		}
		if($checkLogin->isactive == 0){
			$return->status = 0;
			$return->msg = 'Tài khoản chưa kích hoạt.';
			echo json_encode($return); exit;
		}
		if($checkLogin->password != $pass){
			$return->status = 0;
			$return->msg = 'Mật khẩu hoạc số điện thoại không đúng.';
			echo json_encode($return); exit;
		}
		$rand = $this->random();
		$tokens = $rand.(strtotime(gmdate("Y-m-d H:i:s", time() + 7 * 3600)));
		$this->model->table('service_member')->where('phone',$phone)->where('isdelete',0)->update(array('token'=>$tokens));
		$insertToken = array();
		$insertToken['phone'] = $phone;
		$insertToken['token'] = $tokens;
		$insertToken['datecreate'] = gmdate("Y-m-d H:i:s", time() + 7 * 3600);
		$this->model->table('service_member_token')->insert($insertToken);
		//Return
		$return->status = 1;
		$return->msg = '';
		$return->fullname = $checkLogin->fullname;
		$return->phone = $checkLogin->phone;
		$return->email = $checkLogin->email;
		$return->point = (int)$checkLogin->point;
		$return->sex = $checkLogin->sex;
		$return->avatar = $checkLogin->avatar;
		$return->token =  $tokens;
		echo json_encode($return); exit;
	}
	function random() {
		$length = 8;
		$pool = '123456789';
		$str = '';
		for ($i = 0; $i < $length; $i++) {
			$str .= substr($pool, mt_rand(0, strlen($pool) - 1), 1);
		}
		return $str;
	}
	function getconfig(){
		$obj = new stdClass();
		$obj->server = 'http://firefuma.vn/';
		$obj->display_advertising_home = 1;
		$obj->display_advertising_detail = 1;
		$obj->language = 'vi';
		echo json_encode($obj); exit;
	}
	function getcatalog(){
		ob_clean();
		$link =  'http://firefuma.vn/files/services/svg.svg';
		$obj = array();
		$objDetail =  array();
		$objDetail['catalog_id']  = 1;
		$objDetail['catalog_name'] = 'Bất động sản';
		$objDetail['catalog_icon'] = $link;
		array_push($obj, $objDetail);
		$objDetail = array();
		$objDetail['catalog_id']  = 2;
		$objDetail['catalog_name'] = 'Bất động sản 2';
		$objDetail['catalog_icon'] = $link;
		array_push($obj, $objDetail);
		$objDetail = array();
		$objDetail['catalog_id']  = 3;
		$objDetail['catalog_name'] = 'Bất động sản 3';
		$objDetail['catalog_icon'] = $link;
		array_push($obj, $objDetail);
		$objDetail = array();
		$objDetail['catalog_id']  = 4;
		$objDetail['catalog_name'] = 'Bất động sản 4';
		$objDetail['catalog_icon'] = $link;
		array_push($obj, $objDetail);
		$objDetail = array();
		$objDetail['catalog_id']  = 5;
		$objDetail['catalog_name'] = 'Bất động sản 5';
		$objDetail['catalog_icon'] = $link;
		array_push($obj, $objDetail);
		$objDetail = array();
		$objDetail['catalog_id']  = 6;
		$objDetail['catalog_name'] = 'Bất động sản 6';
		$objDetail['catalog_icon'] = $link;
		array_push($obj, $objDetail);
		$objDetail = array();
		$objDetail['catalog_id']  = 7;
		$objDetail['catalog_name'] = 'Bất động sản 7';
		$objDetail['catalog_icon'] = $link;
		array_push($obj, $objDetail);
		$objDetail = array();
		$objDetail['catalog_id']  = 8;
		$objDetail['catalog_name'] = 'Bất động sản 8';
		$objDetail['catalog_icon'] = $link;
		array_push($obj, $objDetail);
		$objDetail = array();
		$objDetail['catalog_id']  = 9;
		$objDetail['catalog_name'] = 'Bất động sản 9';
		$objDetail['catalog_icon'] = $link;
		array_push($obj, $objDetail);
		$objDetail = array();
		$objDetail['catalog_id']  = 10;
		$objDetail['catalog_name'] = 'Bất động sản 10';
		$objDetail['catalog_icon'] = $link;
		array_push($obj, $objDetail);
		echo json_encode($obj); exit;
	}
}