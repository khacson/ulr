<?php

/**
 * @author Sonnk
 * @copyright 2017
 */
class incHeader extends CI_Include {

    function __construct() {
        parent::__construct();
        $this->load->incModel();
		$data = new stdClass();
		$data->finds = $this->model->getInfor();
		$data->productTypes = $this->model->getProductType();
		$data->serviceTypes = $this->model->getServiceType();
		$data->pictures = $this->model->getPicture();
		$this->load->incView($data);
    }
}