<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends ADMIN_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$this->template->set_layout('temp_back')
		->build('dashboard/dashboard_view',isset($data) ? $data : NULL);
	}

}

