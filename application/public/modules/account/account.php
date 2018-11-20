<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @author 
 * @copyright 2018
 */
class Account extends CI_Controller {
    
	function __construct(){
		parent::__construct();			
	    $this->load->model('base_model');
		
	}
    function  _remap($method, $params = array()){
        if(method_exists($this, $method)){
            return call_user_func_array(array($this, $method), $params);
        }
        $this->_view();
    }
	function _view(){
		$data = new stdClass();
		
		
		$content = $this->load->view('view',$data,true);
        $this->site->write('content',$content,true);
		$this->site->write('title','',true);
		$this->site->write('description','',true);
		$this->site->write('keywords','',true);
		
		$this->site->write('image','',true);
		$this->site->write('face_title','',true);
		$this->site->write('face_description','',true);
		$this->site->write('face_url','',true);
		$this->site->write('face_site_name','',true);
		
        $this->site->render();
	}
	function login(){
		$this->site->setTemplate('login');
		$data = new stdClass();
		
		$content = $this->load->view('login',$data,true);
        $this->site->write('content',$content,true);
		$this->site->write('title','',true);
		$this->site->write('description','',true);
		$this->site->write('keywords','',true);
		
		$this->site->write('image','',true);
		$this->site->write('face_title','',true);
		$this->site->write('face_description','',true);
		$this->site->write('face_url','',true);
		$this->site->write('face_site_name','',true);
		
        $this->site->render();
	}
}