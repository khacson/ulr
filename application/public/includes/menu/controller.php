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
		$data->sellCatalogs = $this->model->getSellCatalog();
		$data->leaseCatalogs = $this->model->getLeaseCatalog();
		$data->transferCatalogs = $this->model->getTransferCatalog();
		$data->menusCatalogs = $this->model->getMenusCatalog();
		$data->projectCatalogs = $this->model->getProjectCatalog();
		$data->advisoryCatalogs = $this->model->getAdvisoryCatalog();
		
		$this->load->incView($data);
    }
}