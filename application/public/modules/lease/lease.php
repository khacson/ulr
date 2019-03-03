<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @author 
 * @copyright 2019
 */
class Lease extends CI_Controller {
    
	function __construct(){
		parent::__construct();			
	    $this->load->model('base_model');
		$this->site->setTemplate('sell');
	}
    function  _remap($method, $params = array()){
        if(method_exists($this, $method)){
            return call_user_func_array(array($this, $method), $params);
        }
        $this->_view();
    }
	function _view(){
		$data = new stdClass();
		$data->controller = base_url().$this->router->class;
		
		$content = $this->load->view('view',$data,true);
        $this->site->write('content',$content,true);
		$this->site->write('title','',true);
		$this->site->write('description','',true);
		$this->site->write('keywords','',true);
		
        $this->site->render();
	}
	function getList(){
		$param = array();
        $numrows = 30;
        $data = new stdClass();
		$page = $this->input->post('page');
        $search = '{}';
		$uri = $this->input->post('uri');
		$price = $this->input->post('price');
		$productName = $this->input->post('productName');
		$status = $this->input->post('status');
		$index = $this->input->post('index');
		
		$search = json_decode($search,true);
		
		$count = $this->model->getTotal($search);
        $data->datas = $this->model->getList($search, $page, $numrows);
        $page_view = $this->site->pagination($count, $numrows, 5, 'product/', $page);
		
        $result = new stdClass();
		$result->numrows = $numrows;
        $result->cPage = $page;
        $result->viewtotal = $count;
		if($count > $numrows){
			 $result->paging = $page_view;	
		}
		else{
			$result->paging = '';
		}
        $result->content = $this->load->view('list', $data, true);
        echo json_encode($result);
	}
	
}