<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * @author 
 * @copyright 2015
 */
class Aboutus extends CI_Controller {

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
        $data->finds = $this->model->finds();

        $content = $this->load->view('view', $data, true);
        $this->admin->write('content', $content, true);
        $this->admin->write('title', $this->title, true);
        $this->admin->render();
    }
	function save() {
		$array = array();
        $permission = $this->base_model->getPermission($this->login, $this->route);
        $token = $this->security->get_csrf_hash();
        if (!isset($permission['add'])) {
            $result['status'] = 0;
            $result['csrfHash'] = $token;
            echo json_encode($result);
            exit;
        }
        $finds = $this->model->finds();
		$id = $finds->id;
        $login = $this->login;
		$array['about_title'] = $this->input->post('about_title');
		$array['meta_title'] = $this->input->post('meta_title');
		$array['meta_keyword'] = $this->input->post('meta_keyword');
		$array['mete_description'] = $this->input->post('mete_description');
		
		$array['description_long'] = $this->input->post('description_long');
		$array['description_short'] = $this->input->post('description_short');
        $array['friendlyurl'] = $this->admin->friendlyURL($array['about_title']);
        $array['datecreate'] = gmdate("Y-m-d H:i:s", time() + 7 * 3600);
        $array['usercreate'] = $login->username;
		
		if (isset($_FILES['userfile2']) && $_FILES['userfile2']['name'] != "") {
            $imge_name = $_FILES['userfile2']['name'];
            $this->upload->initialize($this->set_upload_options());
            $image_data = $this->upload->do_upload('userfile2', $imge_name); //Ten hinh 
            $array['image'] = $image_data;
        }
		$status = $this->model->table('ndnt_about')->save($id,$array);	
		
	    $result['status'] = $status;
        $result['csrfHash'] = $token;
        echo json_encode($result);
    }
	private function set_upload_options() {
        $config = array();
        $config['allowed_types'] = 'jpg|jpeg|gif|png';
        $config['upload_path'] = './files/aboutus/';
        $config['encrypt_nam'] = 'TRUE';
        $config['remove_spaces'] = TRUE;
        return $config;
    }
}