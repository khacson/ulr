<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @author 
 * @copyright 2018
 */
class Profile extends CI_Controller {
    
	function __construct(){
		parent::__construct();			
	    $this->load->model('base_model');
		$this->site->setTemplate('profile');
	}
    function  _remap($method, $params = array()){
        if(method_exists($this, $method)){
            return call_user_func_array(array($this, $method), $params);
        }
        $this->_view();
    }
	function _view(){
		$data = new stdClass();
		
		$content = $this->load->view('view',$data,true);
        $this->site->write('content',$content,true);
		$this->site->write('title','',true);
		$this->site->write('description','',true);
		$this->site->write('keywords','',true);
		
        $this->site->render();
	}
	function historypost(){
		$data = new stdClass();
		
		$content = $this->load->view('historypost',$data,true);
        $this->site->write('content',$content,true);
		$this->site->write('title','',true);
		$this->site->write('description','',true);
		$this->site->write('keywords','',true);
		
        $this->site->render();
	}
	function approved(){
		$data = new stdClass();
		
		$content = $this->load->view('approved',$data,true);
        $this->site->write('content',$content,true);
		$this->site->write('title','',true);
		$this->site->write('description','',true);
		$this->site->write('keywords','',true);
		
        $this->site->render();
	}
	function waiting(){
		$data = new stdClass();
		
		$content = $this->load->view('waiting',$data,true);
        $this->site->write('content',$content,true);
		$this->site->write('title','',true);
		$this->site->write('description','',true);
		$this->site->write('keywords','',true);
		
        $this->site->render();
	}
	function expired(){
		$data = new stdClass();
		
		$content = $this->load->view('expired',$data,true);
        $this->site->write('content',$content,true);
		$this->site->write('title','',true);
		$this->site->write('description','',true);
		$this->site->write('keywords','',true);
		
        $this->site->render();
	}
	function edit(){
		$data = new stdClass();
		
		$content = $this->load->view('edit',$data,true);
        $this->site->write('content',$content,true);
		$this->site->write('title','',true);
		$this->site->write('description','',true);
		$this->site->write('keywords','',true);
		
        $this->site->render();
	}
	function changepassword(){
		$data = new stdClass();
		
		$content = $this->load->view('changepassword',$data,true);
        $this->site->write('content',$content,true);
		$this->site->write('title','',true);
		$this->site->write('description','',true);
		$this->site->write('keywords','',true);
		
        $this->site->render();
	}
	function dangban(){
		$data = new stdClass();

		#region defined
		$data->sale_posts = "Đăng bán";
		$data->posted_news = "Tin đã đăng (20)";
		$data->approved_posts = "Tin được duyệt (15)";
		$data->not_approve_posts = "Tin chưa duyệt (1)";
		$data->expired_posts = "Tin hết hạn (4)";
		$data->based_info = "Thông tin cơ bản";
		$data->title = "Tiêu đề";
		$data->title_placeholder = "Tiêu đề tối đa 150 ký tự";
		$data->type = "Loại";
		$data->type_placeholder = "Chọn loại";
		$data->province = "Tỉnh/Thành phố";
		$data->province_placeholder = "Chọn tỉnh/thành phố";
		$data->district = "Quận huyện";
		$data->district_placeholder = "Chọn quận huyện";
		$data->wards = "Phường xã";
		$data->wards_placeholder = "Chọn phường xã";
		$data->address = "Địa chỉ";
		$data->address_placeholder = "Địa chỉ tối đa 150 ký tự";
		$data->area = "Diện tích";
		$data->sale_price = "Giá bán";
		$data->million_price = "Triệu";
		$data->billion_price = "Tỷ";
		$data->facade = "Mặt tiền";
		$data->entrance = "Đường vào";
		$data->direction = "Hướng";
		$data->direction_placeholder = "Chọn hướng";
		$data->product_description = "Mô tả bất động sản";
		$data->desc_info = "Thông tin mô tả";
		$data->desc_info_placeholder = "Thông tin mô tả tối đa 3000 ký tự";
		$data->pictures = "Hình ảnh";
		$data->pictures_placeholder = "Chọn hình ảnh";
		$data->contact_info = "Thông tin liên hệ";
		$data->contact_fullname = "Họ và tên";
		$data->contact_phone = "Điện thoại";
		$data->contact_address = "Địa chỉ";
		$data->map_location = "Vị trí bản đồ";
		$data->map_label1 = "Để tăng độ tin cậy và tin rao được nhiều người quan tâm hơn, hãy sửa vị trí tin rao của bạn trên bản đồ bằng cách";
		$data->map_label2 = "chọn lại vị trí bản đồ";
		$data->schedule_post_news = "Lịch đăng tin";
		$data->news_type = "Loại tin";
		$data->post_new_description = "Tin Vip 1: Là loại tin được đăng tiêu đề bằng chữ IN HOA MÀU ĐỎ, khung màu đỏ, nằm bên dưới tin VIP ĐẶC BIỆT và ở trên các tin vip 2";
		#endregion

		#region get data
		$data->sell_type_list = $this->model->getListSellCatalog();
		$data->list_provice = $this->model->getListProvince();
		$data->list_direction = $this->model->getListDirection();
		#endregion

		$data->lang = $this->lang->line('lang');
		$content = $this->load->view('dangban',$data,true);
        $this->site->write('content',$content,true);
		$this->site->write('title','',true);
		$this->site->write('description','',true);
		$this->site->write('keywords','',true);
		
        $this->site->render();
	}
}