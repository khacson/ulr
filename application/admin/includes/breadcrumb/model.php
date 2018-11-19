<?php
/**
 * @author Sonnk
 * @copyright 2011
 */
 
class incModelBreadcrumb extends CI_Model{
	function __construct(){
		parent::__construct();
		
	}
	function getBreadCrumb($controller,$lang) {
		if($controller == 'home'){
			return '<li></li>';
		}
		$sql = "SELECT parent, name,keylang
		FROM mec_menus 
		WHERE route = '$controller' 
		AND isdelete = 0 ";
		$pid = $this->model->query($sql)->execute();
		if(empty($pid[0]->name)){
			return '<li></li>';
		}
		$arr = array();
		$breadcrumb = '';
		$this->getParent($pid[0]->parent, $arr,$lang);
		$c = count($arr) - 1;
		for ($i = $c; $i >= 0; $i--) {
			$breadcrumb .= $arr[$i];
		}
		$pagename = isset($lang['menu'][$pid[0]->keylang]) ? $lang['menu'][$pid[0]->keylang] : $pid[0]->name;
		//print_r($arr);
		$breadcrumb .= '<li ><a href="javascript:;" style="color:#3399FF">'.$pagename.'</a></li>';
		return $breadcrumb;
	}

	function getParent($id, &$arr,$lang) {
		$sql = " SELECT id, route, name, parent ,keylang
					FROM mec_menus 
					WHERE id = '$id'
					AND isdelete = 0  ";
		$parent = $this->model->query($sql)->execute();
		if (!$parent) return;
		$pid = $parent[0]->parent;
		$route = $parent[0]->route;
		$pagename = isset($lang['menu'][$parent[0]->keylang]) ? $lang['menu'][$parent[0]->keylang] : $parent[0]->name;
		$breadcrumb = '<li><a href="'.$route.'">'.$pagename.'</a><i class="fa fa-angle-right"></i></li>';
		array_push($arr, $breadcrumb);
		$this->getParent($pid, $arr,$lang);
	}
}