<?php

/**
 * @author Sonnk
 * @copyright 2017
 */
class incMenu extends CI_Include {

    function __construct() {
        parent::__construct();
        $this->load->incModel();
		$data = new stdClass();
		$data->uri = $this->uri->segment(1);
		
		$lang = $this->site->GetSession('langs'); 
		if(empty($lang)){
			$lang = 'vn';
		}
		$data->listDesign = $this->model->getDesign($lang);
		$data->listTechnology = $this->model->getTechnology($lang);
		
		$data->lang = $lang;
		$data->listLang = $this->model->getLang($lang);
		$this->load->incView($data);
    }
}