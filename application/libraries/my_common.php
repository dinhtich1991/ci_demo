<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class My_common {

	private $CI;
	
	public function __construct()
	{
		 $this->CI =&get_instance();
	}
	
	public function sentmail($param = array()){
		
		$config = Array(
		
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com', 
			'smtp_port' => 465,
			'smtp_user' => $param['from'],
			'smtp_pass' => $param['password'],
			'charset' => 'utf-8',
			'newline' => "\r\n",
			'mailtype' => 'html',
		
		);
		
		$this->CI->load->library('email',$config);
		$this->CI->email->set_newline("\r\n");
		$this->CI->email->from($param['from'],$param['name']);
		$this->CI->email->to($param['to']);
		$this->CI->email->subject($param['subject']);
		$this->CI->email->message($param['message']);
		$this->CI->email->send();
		if (!$this->CI->email->send()) {
		show_error($this->CI->email->print_debugger()); }
		  else {
			echo 'Your e-mail has been sent!';
		  }
		
		
	}
	public function backend_pagination(){
		
		$param['base_url']			= ''; // The page we are linking to
		$param['prefix']			= ''; // A custom prefix added to the path.
		$param['suffix']			= ''; // A custom suffix added to the path.

		$param['total_rows']		=  0; // Total number of items (database results)
		$param['per_page']			=  10; // Max number of items you want shown per page
		$param['num_links']			=  2; // Number of "digit" links to show before/after the currently viewed page
		$param['cur_page']			=  0; // The current page being viewed
		$param['use_page_numbers']	= TRUE; // Use page number for segment instead of offset
		$param['first_link']		= 'Trang đầu';
		$param['next_link']			= 'Tiếp theo';
		$param['prev_link']			= 'Lùi lại';
		$param['last_link']			= 'Trang cuối';
		$param['uri_segment']		= 4;
		$param['full_tag_open']		= '<ul>';
		$param['full_tag_close']	= '</ul>';
		$param['first_tag_open']	= '<li>';
		$param['first_tag_close']	= '</li>';
		$param['last_tag_open']		= '<li>';
		$param['last_tag_close']	= '</li>';
		$param['first_url']			= ''; // Alternative URL for the First Page.
		$param['cur_tag_open']		= '<li class = "active">';
		$param['cur_tag_close']		= '</li>';
		$param['next_tag_open']		= '<li>';
		$param['next_tag_close']	= '</li>';
		$param['prev_tag_open']		= '<li>';
		$param['prev_tag_close']	= '</li>';
		$param['num_tag_open']		= '<li>';
		$param['num_tag_close']		= '</li>';
		
		return $param;
	}
	public function sort_orderby($field, $value){
		return (isset($value) && !empty($value) &&isset($field) && !empty($field)) ? array(
			'field' => $field,
			'value' => $value,
		):array(
			'field' => 'id',
			'value' => 'desc'
		);
	}
    
}