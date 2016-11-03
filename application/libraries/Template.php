<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template{
	private $ci;
		
	public function __construct(){
		$this->ci =& get_instance();
	}
	
	public function view($content, $data=NULL){
		if(!$this->is_ajax()){
			$template['navigation'] = $this->ci->load->view('template/navigation', $data, TRUE);
			$template['content'] = $this->ci->load->view($content, NULL, TRUE);
			$template['nav_header'] = $this->ci->load->view('template/nav_header', NULL, TRUE);
			$this->ci->load->view('template/index', $template);
		}else{
			//$this->ci->load->view($content, $data);
		}
	}
	
	private function is_ajax(){
		return (
			$this->ci->input->server('HTTP_X_REQUESTED_WITH') &&
			($this->ci->input->server('HTTP_X_REQUESTED_WITH') ==
			'XMLHttpRequest'));
	}
}

/* End of file Template.php */
/* Location: ./application/libraries/Template.php */