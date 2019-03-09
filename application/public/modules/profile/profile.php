<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @author 
 * @copyright 2018
 */
class Profile extends CI_Controller {
    
	function __construct(){
		parent::__construct();			
	    $this->load->model('base_model');
		$this->site->setTemplate('profile');
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
		
        $this->site->render();
	}
	function historypost(){
		$data = new stdClass();
		
		$content = $this->load->view('historypost',$data,true);
        $this->site->write('content',$content,true);
		$this->site->write('title','',true);
		$this->site->write('description','',true);
		$this->site->write('keywords','',true);
		
        $this->site->render();
	}
	function approved(){
		$data = new stdClass();
		
		$content = $this->load->view('approved',$data,true);
        $this->site->write('content',$content,true);
		$this->site->write('title','',true);
		$this->site->write('description','',true);
		$this->site->write('keywords','',true);
		
        $this->site->render();
	}
	function waiting(){
		$data = new stdClass();
		
		$content = $this->load->view('waiting',$data,true);
        $this->site->write('content',$content,true);
		$this->site->write('title','',true);
		$this->site->write('description','',true);
		$this->site->write('keywords','',true);
		
        $this->site->render();
	}
	function expired(){
		$data = new stdClass();
		
		$content = $this->load->view('expired',$data,true);
        $this->site->write('content',$content,true);
		$this->site->write('title','',true);
		$this->site->write('description','',true);
		$this->site->write('keywords','',true);
		
        $this->site->render();
	}
}