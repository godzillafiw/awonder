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
		$data['categories'] 	= $this->AppModel->categories();
		$data['cart_session'] 	= $this->session->userdata('cart_session');
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
		$data['mains'] = $this->AppModel->main_cat();
	
		$this->load->view('menuhorizental',isset($data) ? $data : NULL);
	}

	public function footer()
	{
		$this->db->join('aw_categories','aw_product.c_id = aw_categories.cat_id');
		$this->db->order_by('p_id', 'random');
		$this->db->limit(4);
		$data['bestsellers'] = $this->db->get('aw_product')->result();

		$this->db->join('aw_categories','aw_product.c_id = aw_categories.cat_id');
		$this->db->order_by('p_id', 'random');
		$this->db->limit(4);
		$data['others'] = $this->db->get('aw_product')->result();
		$this->load->view('footer',isset($data) ? $data : NULL);
	}

	public function scripts()
	{
		$this->load->view('scripts',isset($data) ? $data : NULL);
	}
}
/* End of file sidebar.php */