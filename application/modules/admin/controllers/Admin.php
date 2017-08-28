<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends ADMIN_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$data['total_products']		=	$this->AppModel->count_table('aw_product');
		$data['total_quotations']	=	$this->AppModel->count_table('aw_quotation');
		$data['total_contacts']		=	$this->AppModel->count_table('aw_contacts');
		$data['total_orders']		=	$this->AppModel->count_table('aw_orders');
		$data['total_users']		=	$this->AppModel->count_table('system_users');
		$data['total_category']		=	$this->AppModel->count_table('aw_categories');
		$this->template->set_layout('temp_back')
		->build('dashboard/dashboard_view',isset($data) ? $data : NULL);
	}

}

