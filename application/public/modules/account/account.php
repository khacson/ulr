<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * @author 
 * @copyright 2019
 */
class Account extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('base_model');
        $this->site->setTemplate('account');
    }

    function _remap($method, $params = array()) {
        if (method_exists($this, $method)) {
            return call_user_func_array(array($this, $method), $params);
        }
        $this->_view();
    }

    function _view() {
        
    }

    function login() {
        $data = new stdClass();

        $content = $this->load->view('login', $data, true);
        $this->site->write('content', $content, true);
        $this->site->write('title', '', true);
        $this->site->write('description', '', true);
        $this->site->write('keywords', '', true);

        $this->site->render();
    }

    function register() {
        $data = new stdClass();

        $content = $this->load->view('register', $data, true);
        $this->site->write('content', $content, true);
        $this->site->write('title', '', true);
        $this->site->write('description', '', true);
        $this->site->write('keywords', '', true);

        $this->site->render();
    }

    function forgot() {
        $data = new stdClass();

        $content = $this->load->view('forgot', $data, true);
        $this->site->write('content', $content, true);
        $this->site->write('title', '', true);
        $this->site->write('description', '', true);
        $this->site->write('keywords', '', true);

        $this->site->render();
    }

    function resetpassword() {
        $data = new stdClass();

        $content = $this->load->view('reset', $data, true);
        $this->site->write('content', $content, true);
        $this->site->write('title', '', true);
        $this->site->write('description', '', true);
        $this->site->write('keywords', '', true);

        $this->site->render();
    }

    /*
     * Hàm gửi email
     */

    private function sendEmail($subject, $content, $email_to = 'nguyentathuy1986@gmail.com', $email_from = 'noreply@viewland.vn', $email_cc = '', $email_bcc = '') {
        $this->load->library('email');
        $config['protocol'] = "smtp";
        $config['smtp_host'] = "ssl://smtp.gmail.com";
        $config['smtp_port'] = "465";
        $config['smtp_user'] = "no-reply@greystonedatatech.com";
        $config['smtp_pass'] = "WebsitesmtpGDT@2018";
        $config['charset'] = "utf-8";
        $config['mailtype'] = "html";
        $config['newline'] = "\r\n";
        $config['validate'] = TRUE;
        $this->email->initialize($config);
        $this->email->from($email_from, 'viewland.vn');
        $this->email->to($email_to);
        $this->email->subject($subject);
        $this->email->message($content);
        if ($this->email->send()) {
            return '1';
        }
        return $this->email->print_debugger();
    }

    /*
     * Khi đăng ký member xong sẽ gửi email kích hoạt
     */

    private function sendEmailActive($email_to) {
        return '';
        $subject = 'Kích hoạt tài khoản';
        $content = '
            <div><strong>Cảm ơn bạn đã đăng ký thành viên tại viewland.vn</strong></div>
            <div>Đễ kích hoạt tài khoản vui lòng nhấn vào link bên dưới</div>
            <div>http://viewland.vn/account/active?afsdfasdfsadfadpoioprt-9890-alkdsfasdffasdipasidfasfdkfasdslaf</div>           
            ';
        $rt = $this->sendEmail($subject, $content, $email_to);
        return $rt;
    }

    /*
     * Luu log của chức năng login
     */

    private function saveLogLogin($username) {
        return;
    }

    /*
     * Đăng ký thành viên
     * Lấy thông tin từ form lưu vào DB
     * Errcode mã lỗi: 0/không thành công, 1/thành công, 2/đã tồn tại, 3/lưu db fail
     */

    function accountRegister() {
        $data['fullname'] = $this->input->post('name');
        $data['phone'] = $this->input->post('phone');
        $data['email'] = $this->input->post('email');
        $data['password'] = $this->input->post('pass');
        // Khởi tạo mảng return
        $rt = array('status' => 'fail', 'errcode' => '0', 'msg' => '');
        // Các thông tin đều có dữ liệu mới xử lý
        if (!empty($data['fullname']) && !empty($data['phone']) && !empty($data['email']) && !empty($data['password'])) {
            // Kiem tra xem email va so phone này tồn tại chưa
            $check = $this->db->select('id, phone, email, isactive')
                    ->from('vland_member')
                    ->where('email', $data['email'])
                    ->get()
                    ->row();
            // nếu đã tồn tại rồi
            if (!empty($check)) {
                $rt = array('status' => 'fail', 'errcode' => '2', 'msg' => 'Email này đã tồn tại trong hệ thống');
            } else {
                // tạo salt
                $data['prefix'] = uniqid(mt_rand(), true);
                // tạo password với salt
                $data['password'] = md5($data['prefix'] . $data['password']);
                // lưu vào db
                if ($this->db->insert('vland_member', $data)) {
                    $this->sendEmailActive(); // gui email active
                    $rt = array('status' => 'success', 'errcode' => '1', 'msg' => 'Đăng ký thành công, vui lòng check email để kích hoạt tài khoản');
                } else {
                    $rt = array('status' => 'fail', 'errcode' => '3', 'msg' => 'Đăng ký bị lỗi, vui lòng thực hiện lại');
                }
            }
        }
        echo json_encode($rt);
        exit();
    }

    function accountLogin() {
        $data['username'] = $this->input->post('username');
        $data['password'] = $this->input->post('password');
        // khỏi tạo mảng dữ liệu return
        $rt = array('status' => 'fail', 'errcode' => '0', 'msg' => '');
        // Các thông tin đều có dữ liệu mới xử lý
        if (!empty($data['username']) && !empty($data['password'])) {
            // lấy những dòng theo email và số phone
            $query = $this->db->select('id, phone, email, password, prefix, isactive')
                    ->from('vland_member')
                    ->where('email', $data['username'])
                    ->or_where('phone', $data['username'])
                    ->get();
            // không có dòng nào
            if ($query->num_rows() == 0) {
                $rt = array('status' => 'fail', 'errcode' => '0', 'msg' => 'Thông tin đăng nhập không tồn tại');
            } else if ($query->num_rows() > 1) { // có nhiều hơn 1 dòng
                $rt = array('status' => 'fail', 'errcode' => '2', 'msg' => 'Thông tin đăng nhập không hợp lê');
            } else if ($query->num_rows() == 1) { // chỉ có 1 dòng
                $row = $query->row();
                // tạo password để so sánh
                $password = md5($row->prefix . $data['password']);
                // nếu khớp
                if ($password == $row->password) {
                    $rt = array('status' => 'success', 'errcode' => '1', 'msg' => 'Đăng nhập thành công');
                } else {
                    $rt = array('status' => 'fail', 'errcode' => '3', 'msg' => 'Mật khẩu không đúng');
                }
            }
            // lưu log đăng nhập
            $this->saveLogLogin($data['username'], $rt['errcode']);
        }
        echo json_encode($rt);
        exit();
    }

    /*
     * Hàm tạo link reset password và gửi email tới thành viên
     */

    function accountResetPassword() {
        $email_to = $this->input->post('email');
        $rt = '';
        if (!empty($email_to)) {
            $subject = "Có một yêu cầu thay đổi mật khẩu của bạn từ website viewland.vn";
            $content = "Nếu bạn quên mật khẩu hãy nhấn vào link bên dưới để đổi mật khẩu http://viewland.vn/account/resetpassword?email=$email&sec=1123091238043243fasdfasdf90";
            $rt = $this->sendEmail($subject, $content, $email_to);
            // Gửi email thành công
            if ($rt == "1") {
                // update thông tin vào DB đánh dấu user này muốn reset pass
                // save log sent request change pass
            } else {
                // save log sent request change pass
            }
        }
        return $rt;
    }

    function resetPassword() {
        $email = $this->input->get('email');
        $sec = $this->input->get('sec');
        
    }

}
