<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @author 
 * @copyright 2017
 */
class Contactus extends CI_Controller {
	function __construct(){
		parent::__construct();			
	    $this->load->model();
	}
    function  _remap($method, $params = array()){
        if(method_exists($this, $method))
        {
            return call_user_func_array(array($this, $method), $params);
        }
        $this->_view();
    }
	function _view(){
		$data = new stdClass();
		$find = $this->model->getInfor();
		$data->finds = $find;
		
		$uri = $this->uri->segment(1);
		if(empty($uri)){
			$uri = 'trang-chu';
		}
		$title = '';
		$description = '';
		$keywords = '';
		$image = '';
		$face_title = '';
		$face_description = '';
		$face_url = '';
		$face_site_name = '';
		$seoWeb = $this->model->getSeoWeb();
		if(isset($seoWeb[$uri])){
			$dataFind = $seoWeb[$uri];
			$title = $dataFind->meta_title;
			$description = $dataFind->mete_description;
			$keywords = $dataFind->meta_keyword;
			$image = base_url().'files/seoweb/'.$dataFind->image;
			
			$face_title = $dataFind->face_title;
			$face_description = $dataFind->face_description;
			$face_url = $dataFind->face_url;
			$face_site_name = $dataFind->face_site_name;
		}
		
		$data->timeNows =  gmdate("d/m/Y", time() + 7 * 3600);
		$content = $this->load->view('view',$data,true);
        
		$this->site->write('content',$content,true);
		$this->site->write('title',$title,true);
		$this->site->write('description',$description,true);
		$this->site->write('keywords',$keywords,true);
		
		$this->site->write('image',$image,true);
		$this->site->write('face_title',$face_title,true);
		$this->site->write('face_description',$face_description,true);
		$this->site->write('face_url',$face_url,true);
		$this->site->write('face_site_name',$face_site_name,true);
		 $this->site->render();
	}
	function save(){
		$arrInsert = array();
		$arrInsert['fullname'] = $this->input->post('fullname');
		//$arrInsert['phone'] = $this->input->post('phone');
		$arrInsert['email'] = $this->input->post('email');
		$arrInsert['description'] = $this->input->post('description');
		$arrInsert['datecreate'] = gmdate("Y-m-d H:i:s", time() + 7 * 3600);
		$this->model->table('galaxy_contacus')->insert($arrInsert);
		echo 1;
	}
	
}