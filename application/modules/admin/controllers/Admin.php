<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends ADMIN_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$this->list_page();
	}


	public function list_page()
	{
		$this->data['page_title'] 	= 'แดชบอร์ด';
		$this->data['assets']		= $this->assetsLoad('');
		$this->data['breadcrumbs']	= array(
			array('title' => 'อะวันเดอร์', 'url' => base_url('admin')),
			array('title' => 'แดชบอร์ด', 'url' => '#')
			);
		$this->data['total_order']  = $this->AppModel->count_table('aw_orders');
		$this->data['total_payment']  = $this->AppModel->count_table('aw_payments');
		$this->data['total_quotation']  = $this->AppModel->count_table('aw_quotation');
		$this->data['total_product']  = $this->AppModel->count_table('aw_product');
		$this->data['payments']  = $this->AppModel->get_all_records($table = 'aw_payments',
				$array = array('pay_id >=' => 0 ),
				$join_table = '',
				$join_criteria = '',
				'pay_id',
				5
				);
		$this->template->set_layout('temp_back')
		->build('dashboard/dashboard_view',isset($this->data) ? $this->data : NULL);
	}


	public function getJSON4Datatable() 
	{
		$this->db->select('*');
		$this->db->order_by("p_id", "desc");
		$this->db->join('aw_categories as c', 'c.cat_id = aw_product.c_id', 'left');
		$rows = $this->db->get('aw_product')->result_array();

		foreach ($rows as $i => $row) {

			$array['t1'] =  '<span hidden>'.$row['p_id'].'</span>';
			$array['t1'] .= '<div class=""><input type="checkbox" ';
			$array['t1'] .=  'data-id="'.$row['p_id'].'"><label for="checkbox2"></label></div>';
			$array['t2'] = $row['product_name'];
			$array['t3'] = $row['cat_name'];
			$data['aaData'][] = $array;
		}
		echo json_encode($data);

	}

	public function getDateLineChart()
	{
		$sql = "SELECT COUNT(order_id) AS total , MONTHNAME(create_at) AS create_at FROM aw_orders GROUP BY MONTHNAME(create_at)";
		$query = $this->db->query($sql);
		$result = $query->result();
		echo json_encode($result);
	}
}

