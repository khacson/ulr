<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @author 
 * @copyright 2018
 */
class Home extends CI_Controller {
    
	function __construct(){
		parent::__construct();			
	    $this->load->model('base_model');
		$this->site->setTemplate('home');
	}
    function  _remap($method, $params = array()){
        if(method_exists($this, $method)){
            return call_user_func_array(array($this, $method), $params);
        }
        $this->_view();
    }
	function _view(){
		$data = new stdClass();
		$find = $this->model->getInfor();
		$data->finds = $find;
		$lang = $this->site->GetSession('langs'); 
		if(empty($lang)){
			$lang = 'vn';
			$this->setLanguage($lang); 
		}
		$data->lang = $lang;
		
		//$data->slides = $this->model->getSlideList();
		$data->banners = $this->model->getBanner();
		$data->designs = $this->model->getDesign($lang);
		$data->abouts = $this->model->getAbounts($lang);
		$data->technologys = $this->model->getTechnologys($lang);
		$data->customers = $this->model->getCustomer();
		$data->slideAbouts = $this->model->getSlideAbout($lang);
		$data->pictures = $this->model->getPicture(); //pictures arrType
		
		$title = '';
		$description = '';
		$keywords = '';
		$image = '';
		
		$face_title = '';
		$face_description = '';
		$face_url = '';
		$face_site_name = '';
		$seoWeb = $this->model->getSeoWeb();
		$uri = $this->uri->segment(1);
		if(empty($uri)){
			$uri = 'trang-chu';
		}
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
	function setLangguag(){
		$lang = 'vn';
		if(!empty($_GET['lang'])){
			$lang = $_GET['lang'];
		}
		$return = $this->setLanguage($lang); 
		$segment = $this->uri->segment(1); 
		redirect($return.'/'.$lang.'.html', 'refresh');
	}
	function setLanguage($lang){ 
		$server = base_url().'trang-chu/vn.html';
		if(isset($_SERVER['HTTP_REFERER'])){
			$server = $_SERVER['HTTP_REFERER'];
		}
		$frefer = str_replace('.html', '', $server);
		
		$this->site->DeleteSession('languagepublic');
		$language = $this->base_model->getTranslation($lang); 
		$this->site->SetSession('languagepublic', $language); 
		$this->site->SetSession('langs',$lang); 
		
		$langList = $this->base_model->getLang(); 
		foreach($langList as $item){
			$frefer = str_replace('/'.$item->lang_code,'',$frefer);
			$frefer = str_replace('/'.$item->lang_code .'.html','',$frefer);
		}
		$segment = $this->uri->segment(1);
		$uri = '';
		if(empty($segment) || $segment == 'trang-chu'){
			$return = base_url().'trang-chu/'.$lang.'.html';
			redirect($return, 'refresh');
		}
		else{
			return $frefer;
		}
	}
}