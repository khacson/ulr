<?php

/**
 * @author Sonnk
 * @copyright 2018
 */
class incProfile extends CI_Include {

    function __construct() {
        parent::__construct();
        $this->load->incModel();
		$data = new stdClass();
		
		$this->load->incView($data);
    }
}