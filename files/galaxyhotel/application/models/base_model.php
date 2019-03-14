<?php

/**
 * @author 
 * @copyright 2015-05
 */
class base_model extends CI_Model {

    function __construct() {
        parent::__construct('');
        $this->load->model();
        $this->route = $this->router->class;
    }

    function sendMail($from, $to, $subject, $message, $cc = "", $bcc = "") {

        $this->load->library('email');

        $this->email->set_header('Header1', 'Value1');
        $this->email->from('khacson2504@gmail.com', 'Stock');
        $this->email->to('khacson1610@gmail.com');
        $this->email->cc('khacson2504@gmail.com');
        $this->email->bcc('khacson1610@gmail.com');

        $this->email->subject('Email Test');
        $this->email->message('Testing the email class.');

        $config['protocol'] = 'sendmail';
        $config['mailpath'] = '/usr/sbin/sendmail';
        $config['charset'] = 'utf-8';
        $config['wordwrap'] = TRUE;

        $this->email->initialize($config);

        if (!$this->email->send()) {
            print_r(111);
        }
    }

    public function getPermission($login, $route) {
        $right = '';
        if (isset($login->params[$route])) {
            $right = json_encode($login->params[$route]);
        }
        return json_decode($right, true);
    }

    public function getGroup($schoolid) {
        $query = $this->model->table('galaxy_groups')
                ->select('id,groupname')
                ->where('isdelete', 0);

        if (!empty($schoolid)) {
            $query = $query->where('id', $schoolid);
        }
        $query = $query->find_all();
        return $query;
    }

    public function getAllProduct() {
        $query = $this->model->table('galaxy_product')
                ->select('id,product_name,manufactureid,default_img')
                ->where('isdelete', 0);
        $query = $query->find_all();
        return $query;
    }

    public function getAllCarrier() {
        $query = $this->model->table('galaxy_supplier')
                ->select('id,supplier_name,supplier_image')
                ->where('isdelete', 0);
        $query = $query->find_all();
        return $query;
    }

    public function getAllColor() {
        $query = $this->model->table('galaxy_color')
                ->select('id,colorname')
                ->where('isdelete', 0);
        $query = $query->find_all();
        return $query;
    }

    public function getMacAddress() {
        $ip = $_SERVER['REMOTE_ADDR'];
        $mac = shell_exec("arp -a $ip");
        $arr = explode(" ", $mac);
        if (isset($arr[3])) {
            $macAddress = $arr[3];
        } else {
            $macAddress = $ip;
        }
        if ($macAddress != 'entries') {
            return $ip . ' ' . $macAddress;
        } else {
            return $ip;
        }
    }

    public function getAllManufacturer() {
        $rs = $this->db->where('isdelete', 0)->get('galaxy_manufacture')->result();
        return $rs;
    }

    public function getAllCurrency() {
        $rs = $this->db->where('isdelete', 0)->get('galaxy_currency')->result();
        return $rs;
    }

    public function getAllStatus() {
        $rs = $this->db->where('isdelete', 0)->get('galaxy_status')->result();
        return $rs;
    }

    public function getAllCapacity() {
        $rs = $this->db->where('isdelete', 0)->get('galaxy_capacity')->result();
        return $rs;
    }

    public function getAllInstock() {
        $arr = array("Sold", "Instock");
        return $arr;
    }

    public function getAllOS() {
        $rs = $this->db->where('isdelete', 0)->get('galaxy_os')->result();
        return $rs;
    }

    public function getAllPay() {
        $sql = "SELECT * 
                FROM galaxy_payment_methods
                WHERE isdelete=0 ";
        return $this->model->query($sql)->execute();
    }

    public function getAllDelivery() {
        $sql = "SELECT * 
                FROM galaxy_delivery_methods
                WHERE isdelete=0 ";
        return $this->model->query($sql)->execute();
    }

    public function getAllAccessoriesType() {
        $sql = "SELECT * 
                FROM galaxy_accessories_type
                WHERE isdelete=0 ";
        return $this->model->query($sql)->execute();
    }

    public function getAllAccessoriesTypePhone() {
        $sql = "SELECT * 
                FROM galaxy_accessories_of_phone
                WHERE isdelete=0 ";
        return $this->model->query($sql)->execute();
    }

    function inverse_column($table, $column, $id) {
        $sql = "UPDATE " . $table . " SET " . $column . " = " . $column . " XOR 1 WHERE id = " . $id;
        $this->db->query($sql);
        return "success";
    }

    function update_column($table, $column, $id, $value) {
        $sql = "UPDATE " . $table . " SET " . $column . " = '" . $value . "' WHERE id = " . $id;
        $this->db->query($sql);
        return "success";
    }

    public function getSearchPrice() {
        $rs = $this->db->select("name, range")->where("isdelete", 0)->from("galaxy_price_filter")->get()->result();
        return $rs;
    }

    function getAllMember() {
        $sql = "SELECT id,fullname FROM galaxy_member
                        WHERE isdelete=0 and fullname <>''";
        return $this->model->query($sql)->execute();
    }

    function getAllCountry() {
        $sql = "SELECT id as countryid, country_name as countryname 
					FROM galaxy_country
                    WHERE isdelete=0 ";
        return $this->model->query($sql)->execute();
    }

    function getAllDistrict($country = '') {
        if (empty($country)) {
            return array();
        } else {
            return array();
        }
    }

    public function getAllGuarantee() {
        $rs = $this->db->select("id, guaranteename")->where("isdelete", 0)->from("galaxy_guarantee")->get()->result();
        return $rs;
    }

    public function getAllProvince($countryid = "") {
        if ($countryid == "all") {
            $rs = $this->db->select("id, province_name")->where("isdelete", 0)->from("galaxy_province")->get()->result();
            return $rs;
        } else if (!empty($countryid)) {
            $rs = $this->db->select("id, province_name")->where("isdelete", 0)->where("countryid", $countryid)->from("galaxy_province")->get()->result();
            return $rs;
        } else {
            return array();
        }
    }

    function delall($table, $arrid) {
        $arr_id = array_filter($arrid);
        $this->db->where_in("id", $arr_id)->update($table, array("isdelete" => 1));
        return 'success';
    }

}
