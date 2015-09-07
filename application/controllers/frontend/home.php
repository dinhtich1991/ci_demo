<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

	private $user;
    public function __construct(){
		parent::__construct();
		$this->user = $this->my_frontend_auth->check();
	}
    
	public function index($lang = 'vi'){
		
		$this->my_frontend->lang($lang);
		$slider = $this->db->select('image1, image2, image3, image4, image5 ')->from('slider')->get()->row_array();
		$data['data']['_slider'] = $slider;
		$data['data']['user'] = $this->user;
		$data['seo']['title'] = 'Trang chủ Gen Việt';
		$data['template'] = 'frontend/home/index';
		$this->load->view('frontend/layout/home',$data?$data:NULL);
		
	}

    
    
}

