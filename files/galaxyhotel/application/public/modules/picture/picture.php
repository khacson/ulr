<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @author 
 * @copyright 2018
 */
class Picture extends CI_Controller {
    
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
		if(empty($url)){
			$this->_view();
		}
		else{
			$this->_detail($url);
		}
    }
	function _view(){
		$data = new stdClass();
		$find = $this->model->getInfor();
		$data->finds = $find;
		$data->pictureTypes = $this->model->getPictureType();
		
		$uri = $this->uri->segment(1);
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
	function _detail($url){
		$data = new stdClass();
		$finds = $this->model->getFindNews($url);
		if(!empty($finds->id)){
			$this->site->write('title',$finds->meta_title,true);
			$this->site->write('description',$finds->meta_keyword,true);
			$this->site->write('keywords',$finds->mete_description,true);
			$this->site->write('title_page',$finds->title,true);
		}
		$data->finds = $finds;
		
		$content = $this->load->view('detail',$data,true);
        $this->site->write('content',$content,true);
        $this->site->render();
	}
}