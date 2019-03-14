<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * @author 
 * @copyright 2015
 */
class Product extends CI_Controller {

    private $route;
    private $login;

    function __construct() {
        parent::__construct();
        $this->load->model(array('model', 'base_model'));
        $this->login = $this->admin->getSession('login');
        $this->route = $this->router->class;
        $menus = $this->admin->getSession('menus');
        $this->title = $menus[$this->route];
        $this->load->library('upload');
    }
    function _remap($method, $params = array()) {
        if (method_exists($this, $method)) {
            return call_user_func_array(array($this, $method), $params);
        }
        $this->_view();
    }
    function _view() {
        $data = new stdClass();
        $permission = $this->base_model->getPermission($this->login, $this->route);
        if (!isset($permission['view'])) {
            redirect('authorize');
        }
        $data->permission = $permission;
        $data->csrfName = $this->security->get_csrf_token_name();
        $data->csrfHash = $this->security->get_csrf_hash();
        $data->routes = $this->route;
        $data->login = $this->login;
        $data->controller = admin_url() . ($this->uri->segment(1));
        $data->productTypes = $this->model->getProductType();
		$arrP = array();
		$arr = array();
		foreach($data->productTypes as $item){
			$arrP[$item->id] = $item->producttype_name;
		}
		$arrRer = array();
		foreach($arrP as $key=>$val){
			if(isset($arr[$key])){
				$arrRer[$key] = $arr[$key];
			}
		}
		$data->arrRer = $arrRer;
		$content = $this->load->view('view', $data, true);
        $this->admin->write('content', $content, true);
        $this->admin->write('title', $this->title, true);
        $this->admin->render();
    }
	function form($id=''){
		$data = new stdClass();
        $permission = $this->base_model->getPermission($this->login, $this->route);
        if (!isset($permission['view'])) {
            redirect('authorize');
        }
        $data->permission = $permission;
        $data->csrfName = $this->security->get_csrf_token_name();
        $data->csrfHash = $this->security->get_csrf_hash();
        $data->routes = $this->route;
        $data->login = $this->login;
        $data->controller = admin_url() . ($this->uri->segment(1));
        $data->groups = $this->base_model->getGroup(''); 
		$data->finds = $this->model->detail($id);
        $data->productTypes = $this->model->getProductType();
		$arrP = array();
		$arr = array();
		foreach($data->productTypes as $item){
			$arrP[$item->id] = $item->producttype_name;
		}
		$arrRer = array();
		foreach($arrP as $key=>$val){
			if(isset($arr[$key])){
				$arrRer[$key] = $arr[$key];
			}
		}
		$data->arrRer = $arrRer;
		$content = $this->load->view('form', $data, true);
        $this->admin->write('content', $content, true);
        $this->admin->write('title', $this->title, true);
        $this->admin->render();
	}
    function getList() {

        if (!isset($_POST['csrf_stock_name'])) {
            //show_404();
        }
        $param = array();
        $numrows = 20;
        $data = new stdClass();
        $index = $this->input->post('index');
        $order = $this->input->post('order');
		if(!empty($order)) {
            $order = str_replace('ord_', '', $order);
        }
        $page = $this->input->post('page');
        $search = $this->input->post('search');
        $search = json_decode($search, true);
        $search['index'] = $index;
        $search['order'] = $order;
        $query = $this->model->getList($search, $page, $numrows);
        $data->start = empty($page) ? 1 : $page + 1;

        $count = $this->model->getTotal($search);
        $data->datas = $query;
        $page_view = $this->admin->pagination($count, $numrows, 5, 'product/', $page);
        $data->permission = $this->base_model->getPermission($this->login, $this->route);
        $result = new stdClass();
        $result->paging = $page_view;
        $result->cPage = $page;
        $result->viewtotal = $count;
        $result->csrfHash = $this->security->get_csrf_hash();
        $result->content = $this->load->view('list', $data, true);
        echo json_encode($result);
    }
    function save() {

        $permission = $this->base_model->getPermission($this->login, $this->route);
        $token = $this->security->get_csrf_hash();
        $array = json_decode($this->input->post('search'), true);
        
        if (!isset($permission['add'])) {
            $result['status'] = 0;
            $result['csrfHash'] = $token;
            echo json_encode($result);
            exit;
        }
        $length = $this->input->post('length');
		$strImg = "";
		for($i=0; $i < $length; $i++){
			if (isset($_FILES['userfile'.$i]) && $_FILES['userfile'.$i]['name'] != "") {
				$imge_name = $_FILES['userfile'.$i]['name'];
				$this->upload->initialize($this->set_upload_options());
				$image_data = $this->upload->do_upload('userfile'.$i, $imge_name); //Ten hinh 
				$strImg.= ';'.$image_data;
			}
		}
		if(!empty($strImg)){
			$array['image'] = substr($strImg,1);
		}
		if (isset($_FILES['userfile2']) && $_FILES['userfile2']['name'] != "") {
            $imge_name = $_FILES['userfile2']['name'];
            $this->upload->initialize($this->set_upload_options2());
            $image_data = $this->upload->do_upload('userfile2', $imge_name); //Ten hinh 
            $array['thumb'] = $image_data;
            $resize = $this->resizeImg($image_data,600,600);
        }
        $login = $this->login;
		$array['friendlyurl'] = $this->admin->friendlyURL($array['title']);
        $array['description_sort'] = $this->input->post('description_sort');
		$array['description_long'] = $this->input->post('description_long');
        $array['datecreate'] = gmdate("Y-m-d H:i:s", time() + 7 * 3600);
        $array['usercreate'] = $login->username;//print_r($array);exit;
		$arr = array();
		foreach($array as $key=>$val){
			if(!empty($val)){
				$arr[$key] = $val;
			}
		}
        $result['status'] = $this->model->saves($arr);
        $result['csrfHash'] = $token;
        echo json_encode($result);
    }
    function edit() {
        $token = $this->security->get_csrf_hash();
        $permission = $this->base_model->getPermission($this->login, $this->route);
        if (!isset($permission['edit'])) {
            $result['status'] = 0;
            $result['csrfHash'] = $token;
            echo json_encode($result);
            exit;
        }
        $array = json_decode($this->input->post('search'), true);
        $id = $this->input->post('id');
		$finds = $this->model->table('galaxy_product')
					  ->select('image,thumb')
					  ->where('id',$id)
					  ->find();
		$login = $this->login;
		$length = $this->input->post('length');
		$strImg = "";
		for($i=0; $i < $length; $i++){
			if (isset($_FILES['userfile'.$i]) && $_FILES['userfile'.$i]['name'] != "") {
				if($i==0){
					if(!empty($finds->image)){
						$arrImg = explode(';',$finds->image);
						foreach($arrImg as $k=>$v){
							if(file_exists('files/product/'.$v)){
								unlink('files/product/'.$v);
							}
						}
					}
				}
				$imge_name = $_FILES['userfile'.$i]['name'];
				$this->upload->initialize($this->set_upload_options());
				$image_data = $this->upload->do_upload('userfile'.$i, $imge_name); //Ten hinh 
				$strImg.= ';'.$image_data;
			}
		}
		if(!empty($strImg)){
			$array['image'] = substr($strImg,1);
		}
		if (isset($_FILES['userfile2']) && $_FILES['userfile2']['name'] != "") {
			if(file_exists('files/product/thumb/'.$finds->thumb) && !empty($finds->thumb)){
				unlink('files/product/thumb/'.$finds->thumb);
			}
			$imge_name = $_FILES['userfile2']['name'];
            $this->upload->initialize($this->set_upload_options2());
            $image_data = $this->upload->do_upload('userfile2', $imge_name); //Ten hinh 
            $array['thumb'] = $image_data;
            $resize = $this->resizeImg($image_data,600,600);
        }
		$array['friendlyurl'] = $this->admin->friendlyURL($array['title']);
        $array['description_sort'] = $this->input->post('description_sort');
		$array['description_long'] = $this->input->post('description_long');
        $array['dateupdate'] = gmdate("Y-m-d H:i:s", time() + 7 * 3600);
        $array['userupdate'] = $login->username;
//print_r($array);exit;
        $result['status'] = $this->model->edits($array, $id);
        $result['csrfHash'] = $token;
        echo json_encode($result);
    }
	function deleteimg(){
		$id = $this->input->post('id');
		$idimg = $this->input->post('idimg');
		$img = $this->input->post('img');
		$finds = $this->model->table('galaxy_product')
					  ->select('image')
					  ->where('id',$id)
					  ->find();
		if(!empty($finds->image)){
			$arr = explode(';',$finds->image);
			unset($arr[$idimg]);
			$array['image'] = implode(';',$arr);
			$this->model->table('galaxy_product')->save($id,$array);
			unlink('files/product/'.$img);
		}	
	}
    function resizeImg($image_data,$width='',$height='') {
        $this->load->library('image_lib');
        $configz = array();
        $configz['image_library'] = 'gd2';
        $configz['source_image'] = './files/product/thumb/' . $image_data;
        $configz['new_image'] = './files/product/thumb/' . $image_data;
        $configz['create_thumb'] = TRUE;
        $configz['maintain_ratio'] = TRUE;
		if(!empty($width)){
			 $configz['width'] = $width;
		}
		if(!empty($height)){
			 $configz['height'] = $height;
		}
        $this->image_lib->initialize($configz);
        $this->image_lib->resize();
        $this->image_lib->clear();
    }
    private function set_upload_options() {
        $config = array();
        $config['allowed_types'] = 'jpg|jpeg|gif|png';
        $config['upload_path'] = './files/product/';
        $config['encrypt_nam'] = 'TRUE';
        $config['remove_spaces'] = TRUE;
        //$config['max_size'] = 0024;
        return $config;
    }
	private function set_upload_options2() {
        $config = array();
        $config['allowed_types'] = 'jpg|jpeg|gif|png';
        $config['upload_path'] = './files/product/thumb/';
        $config['encrypt_nam'] = 'TRUE';
        $config['remove_spaces'] = TRUE;
        //$config['max_size'] = 0024;
        return $config;
    }
    function deletes() {
        $token = $this->security->get_csrf_hash();
        $id = $this->input->post('id');
        $permission = $this->base_model->getPermission($this->login, $this->route);
        if (!isset($permission['delete'])) {
            $result['status'] = 0;
            $result['csrfHash'] = $token;
            echo json_encode($result);
            exit;
        }
        $login = $this->login;
        $array['dateupdate'] = gmdate("Y-m-d H:i:s", time() + 7 * 3600);
        $array['userupdate'] = $login->username;        
        $array['isdelete'] = 1;
		$finds = $this->model->table('galaxy_product')
					  ->select('image,thumb')
					  ->where('id',$id)
					  ->find();
		if(!empty($finds->image)){
			$arrImg = explode(';',$finds->image);
			foreach($arrImg as $k=>$v){
				if(file_exists('files/product/'.$v) && !empty($v)){
					unlink('files/product/'.$v);
				}
			}
		}	
		if(file_exists('files/product/thumb/'.$finds->thumb) && !empty($finds->thumb)){
			unlink('files/product/thumb/'.$finds->thumb);
		}		
		$this->model->table('galaxy_product')->where("id in ($id)")->delete();	
		$result['status'] = 1;
        $result['csrfHash'] = $token;
        echo json_encode($result);
    }
	function isshow(){
		$array = array();
		$id = $this->input->post('id');
		$value = $this->input->post('value');
		$array['isshow'] = $value * -1 + 1;
		$this->model->table('galaxy_product')->save($id,$array);	
	}
	function isnew(){
		$array = array();
		$id = $this->input->post('id');
		$value = $this->input->post('value');
		$array['isnew'] = $value * -1 + 1;
		$this->model->table('galaxy_product')->save($id,$array);	
	}
	function iskm(){
		$array = array();
		$id = $this->input->post('id');
		$value = $this->input->post('value');
		$array['iskm'] = $value * -1 + 1;
		$this->model->table('galaxy_product')->save($id,$array);	
	}
	function isnb(){
		$array = array();
		$id = $this->input->post('id');
		$value = $this->input->post('value');
		$array['isnb'] = $value * -1 + 1;
		$this->model->table('galaxy_product')->save($id,$array);	
	}
	function ordering(){
		$array = array();
		$id = $this->input->post('id');
		$value = $this->input->post('value');
		$array['ordering'] = $value;
		$this->model->table('galaxy_product')->save($id,$array);	
	}
}