<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends ADMIN_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$data['products'] = $this->AppModel->get_all_records($table = 'aw_product',
			$array = array('p_id >=' => '0'),
			$join_table = '',
			$join_criteria = '',
			'p_id'
			);
		$this->template->set_layout('temp_back')
		->build('products/products_view',isset($data) ? $data : NULL);
	}

	public function add()
	{
		$data['categories'] = $this->get_categories();
		$this->template->set_layout('temp_back')
		->build('products/products_add',isset($data) ? $data : NULL);
	}

	public function insert()
	{
		$this->form_validation->set_error_delimiters('<div class="text-danger" style="font-size:12px">', '</div>');
		$this->form_validation->set_rules('product_name', 'Products name', 'required');

		if($this->form_validation->run('required|xss_clean') == TRUE){
			$insert = array(
				'product_name'		=> $this->input->post('product_name'),
				'product_detail'	=> $this->input->post('product_detail'),
				'c_id'				=> $this->input->post('c_id'),
				'create_at'			=> date("Y-m-d h:i:s")
				);
			$this->db->escape($insert);
			$res = $this->AppModel->insert('aw_product',$insert);
			if ($res) {
				$this->alert('Success','บันทึกสินค้าเรียบร้อบแล้ว');
				redirect('admin/products/add');
			}
		} else {
			$this->add();
		}
		
	}

	public function get_categories()
	{
		return $this->AppModel->get_all_records($table = 'aw_categories',
			$where = array('cat_id >=' => '0'),
			$join_table = '',
			$join_criteria = '',
			'cat_id'
			);
	}

}

/* End of file Products.php */
/* Location: ./application/modules/admin/controllers/Products.php */