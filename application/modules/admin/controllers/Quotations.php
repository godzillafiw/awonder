<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quotations extends ADMIN_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$data['quotations'] = $this->AppModel->get_all_records($table = 'aw_quotation',
			$array = array('q_id >=' => '0'),
			$join_table = '',
			$join_criteria = '',
			'q_id'
			);
		$this->template->set_layout('temp_back')
		->build('quotations/quotations_view',isset($data) ? $data : NULL);
	}

}

/* End of file Quotations.php */
/* Location: ./application/modules/admin/controllers/Quotations.php */