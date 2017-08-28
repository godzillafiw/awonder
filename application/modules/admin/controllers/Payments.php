<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payments extends ADMIN_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$this->template->set_layout('temp_back')
		->build('payments/payments_view',isset($data) ? $data : NULL);
	}

}

/* End of file Payments.php */
/* Location: ./application/modules/admin/controllers/Payments.php */