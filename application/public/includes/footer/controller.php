<?php

/**
 * @author Sonnk
 * @copyright 2017
 */
class incFooter extends CI_Include {

    function __construct() {
        parent::__construct();
        $this->load->incModel();
		$data = new stdClass();
		//$data->finds = $this->model->getInfor();
		$lang = $this->site->GetSession('langs'); 
		if(empty($lang)){
			$lang = 'vn';
		}
		$data->lang = $lang;
		$this->load->incView($data);
    }
}