<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index()
	{

		$this->db->join('aw_categories','aw_product.c_id = aw_categories.cat_id');
		$this->db->order_by('p_id', 'random');
		$this->db->where('aw_product.type', 1);
		$this->db->limit(6);
		$data['products'] = $this->db->get('aw_product')->result();

		$this->db->join('aw_categories','aw_product.c_id = aw_categories.cat_id');
		$this->db->order_by('p_id', 'random');
		$this->db->limit(1);
		$data['product_random'] = $this->db->get('aw_product')->result();

		$this->db->join('aw_categories','aw_product.c_id = aw_categories.cat_id');
		$this->db->order_by('p_id', 'random');
		$this->db->where('aw_product.type', 1);
		$this->db->limit(4);
		$data['bestsellers'] = $this->db->get('aw_product')->result();

		$this->db->join('aw_categories','aw_product.c_id = aw_categories.cat_id');
		$this->db->order_by('p_id', 'random');
		$this->db->limit(4);
		$data['others'] = $this->db->get('aw_product')->result();

		$data['categories'] = $this->categories_limit();

		$this->template->set_layout('temp')->build('home',isset($data) ? $data : NULL);
	}

	public function categories_limit()
	{
		$this->db->limit(11);
		return $this->db->get('aw_categories')->result();
	}

	public function test()
	{
		$this->load->model('home_model','home');

		$option = array(
            'fields' => 'p_id,product_name,create_at,c_id'
        );
		$response = $this->home->lists($option);
		foreach ($response->data as $value) {
			$this->db->where('cat_id', $value->c_id);
			$data2 = $this->db->get('aw_categories');
			$data2->result();
			echo json_encode($data2);
			exit;
		}
	}

	public function test2()
	{
		
		
		
		

	}


}
