<?php

/**
 * @author 
 * @copyright 2015-05
 */
class base_model extends CI_Model {

    function __construct() {
        parent::__construct('');
        $this->load->model();
        $this->route = $this->router->class;
    }

    function sendMail($from, $to, $subject, $message, $cc = "", $bcc = "") {

        $this->load->library('email');

        $this->email->set_header('Header1', 'Value1');
        $this->email->from('khacson2504@gmail.com', 'Stock');
        $this->email->to('khacson1610@gmail.com');
        $this->email->cc('khacson2504@gmail.com');
        $this->email->bcc('khacson1610@gmail.com');

        $this->email->subject('Email Test');
        $this->email->message('Testing the email class.');

        $config['protocol'] = 'sendmail';
        $config['mailpath'] = '/usr/sbin/sendmail';
        $config['charset'] = 'utf-8';
        $config['wordwrap'] = TRUE;

        $this->email->initialize($config);

        if (!$this->email->send()) {
            print_r(111);
        }
    }

    public function getPermission($login, $route) {
        $right = '';
        if (isset($login->params[$route])) {
            $right = json_encode($login->params[$route]);
        }
        return json_decode($right, true);
    }

    public function getGroup($schoolid) {
        $query = $this->model->table('mec_groups')
                ->select('id,groupname')
                ->where('isdelete', 0);

        if (!empty($schoolid)) {
            $query = $query->where('id', $schoolid);
        }
        $query = $query->find_all();
        return $query;
    }

    public function getAllProduct() {
        $query = $this->model->table('mec_product')
                ->select('id,product_name,manufactureid,default_img')
                ->where('isdelete', 0);
        $query = $query->find_all();
        return $query;
    }

    public function getAllCarrier() {
        $query = $this->model->table('mec_supplier')
                ->select('id,supplier_name,supplier_image')
                ->where('isdelete', 0);
        $query = $query->find_all();
        return $query;
    }

    public function getAllColor() {
        $query = $this->model->table('mec_color')
                ->select('id,colorname')
                ->where('isdelete', 0);
        $query = $query->find_all();
        return $query;
    }

    public function getMacAddress() {
        $ip = $_SERVER['REMOTE_ADDR'];
        $mac = shell_exec("arp -a $ip");
        $arr = explode(" ", $mac);
        if (isset($arr[3])) {
            $macAddress = $arr[3];
        } else {
            $macAddress = $ip;
        }
        if ($macAddress != 'entries') {
            return $ip . ' ' . $macAddress;
        } else {
            return $ip;
        }
    }
	function setLanguage($lang,$frefer){
		$language = $this->model->getTranslation($lang); 
		$total = count((array)$language);
		if($total == 0){
			$language = $this->model->getTranslation('vn'); 
		}
		$this->site->SetSession('langs',$lang);
		$segment = $this->uri->segment(1);
		$uri = '';
		if(empty($segment)){
			$uri = 'trang-chu';
		}
		$langList = $this->model->getLang();
		foreach($langList as $item){
			$frefer = str_replace('/'.$item->lang_code,'',$frefer);
			$frefer = str_replace('/'.$item->lang_code .'.html','',$frefer);
		}
		return $frefer;
	}
	function getLang(){
		$query = $this->model->table('mec_language')
			->order_by('ordering','asc')
			->find_all();
		return $query;
	}
	function getTranslation($language){
		$query = $this->model->table('mec_translate')
					  ->select('keyword, translation')
					  ->where('isdelete',0)
					  ->where('language',$language)
					  ->find_all();
		$array = array();
		foreach($query as $item){
			$array[$item->keyword] = $item->translation;
		}
		return $array;
	}
}
