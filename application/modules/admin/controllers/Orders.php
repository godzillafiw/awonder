<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends ADMIN_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$data['orders'] = $this->AppModel->get_all_records($table = 'aw_orders',
			$array = array('order_id >=' => '0'),
			$join_table = '',
			$join_criteria = '',
			'order_id'
			);
		$this->template->set_layout('temp_back')
		->build('orders/orders_view',isset($data) ? $data : NULL);
	}

}

/* End of file Orders.php */
/* Location: ./application/modules/admin/controllers/Orders.php */