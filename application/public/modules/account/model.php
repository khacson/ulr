<?php
/**
 * @author Sonnk
 * @copyright 2018
 */
class AccountModel extends CI_Model
{
	function __construct(){
		parent::__construct('');
	}
	/*function getSeoWeb(){
		$query = $this->model->table('mec_seoweb')
					  ->select('*')
					  ->where('isdelete', 0)
					  ->find_all();
		$array = array();
		foreach($query as $item){
			$array[$item->friendlyurl] = $item;
		}
		return $array;
	}
	*/
}