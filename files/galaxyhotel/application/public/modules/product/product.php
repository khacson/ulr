<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @author 
 * @copyright 2016
 */
class Product extends CI_Controller {
    
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
        $uri = $this->uri->segment(2);
		print_r( $uri); exit;
		if(!empty($uri)){
			$this->_detail($uri);
		}
		else{
			$this->_view($uri);
		}
    }
	function _view(){
		$login = $this->site->getSession('login');
		$finds = $this->model->getInfor();
		$data = new stdClass();
		
		$data->datas = $this->model->getProductList();
		$data->typeName = 'Phòng';
		$data->finds = $finds;
		$seoWeb = $this->model->getSeoWeb();
		$title_page = ''; //site_name
		$title = '';
		$description = '';
		$keywords = '';
		$image = '';
		$link_web = '';
		if(isset($seoWeb[3])){
			$dataSeo = $seoWeb[3];
			$title_page = $dataSeo->friendlyurl; //site_name
			$title = $dataSeo->meta_title;
			$description = $dataSeo->mete_description;
			$keywords = $dataSeo->meta_keyword;
			$link_web = $dataSeo->link_web;
			$image = base_url().'files/seoweb/'.$seoWeb[5]->image;
		}
        $content = $this->load->view('view',$data,true);
		$this->site->write('content',$content,true);
		$this->site->write('title',$title,true);
		$this->site->write('description',$description,true);
		$this->site->write('keywords',$keywords,true);
		$this->site->write('title_page',$title_page,true);
		$this->site->write('image',$image,true);
		$this->site->write('url',$link_web,true);
        $this->site->render();
	}
	function _detail($friendlyurl){
		$data = new stdClass();
		//$finds = $this->model->getDetailUrl($url); 
		if(empty($finds->id)){
			redirect(base_url().'phong.html', 'location');
		}
		print_r($friendlyurl); exit;
		$this->site->write('title',$finds->meta_title,true);
		$this->site->write('description',$finds->meta_keyword,true);
		$this->site->write('keywords',$finds->mete_description,true);
		$this->site->write('title_page',$finds->title,true);
		
		$image = base_url().'files/product/'.$finds->image;
		$title_page = $finds->meta_title;
		$url = 'http://galaxyhotel.vn/phong/'.$finds->friendlyurl;
		$app_id = '630086134033200';
		
		$data->linkDemo = $this->model->getLinkDemo($finds->id);
		$data->features = $this->model->getFeature($finds->id);
		$data->blogProducts = $this->model->getBlogproduct($finds->id);
		$data->priceDetail = $this->model->getProductPrice($finds->id);
		$data->features = $this->model->getProductFeature($finds->id);
		
		$data->finds = $finds;
		$data->url = $url;
		$content = $this->load->view('detail',$data,true);
        $this->site->write('content',$content,true);
		
		$this->site->write('title_page',$title_page,true);
		$this->site->write('image',$image,true);
		$this->site->write('url',$url,true);
		$this->site->write('app_id',$app_id,true);
		
        $this->site->render();
	}
}