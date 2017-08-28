<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Sidebar extends MY_Controller {
function __construct()
	{
		parent::__construct();
	}
	
	public function top_menubar()
	{
		$this->load->view('top_menubar',isset($data) ? $data : NULL);
	}

	public function header()
	{
		$data['categories'] = $this->AppModel->categories();
		$this->load->view('header',isset($data) ? $data : NULL);
	}

	public function breadcrumb()
	{
		$this->load->view('breadcrumb',isset($data) ? $data : NULL);
	}

	public function menuvertical()
	{
		$this->load->view('menuvertical',isset($data) ? $data : NULL);
	}

	public function menuhorizental()
	{
		$data['categories'] = $this->AppModel->categories();
		$this->load->view('menuhorizental',isset($data) ? $data : NULL);
	}

	public function footer()
	{
		$this->load->view('footer',isset($data) ? $data : NULL);
	}

	public function scripts()
	{
		$this->load->view('scripts',isset($data) ? $data : NULL);
	}
}
/* End of file sidebar.php */