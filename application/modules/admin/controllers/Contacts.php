<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacts extends ADMIN_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$data['contacts'] = $this->AppModel->get_all_records($table = 'aw_contacts',
			$array = array('con_id >=' => '0'),
			$join_table = '',
			$join_criteria = '',
			'con_id'
			);
		$this->template->set_layout('temp_back')
		->build('contacts/contacts_view',isset($data) ? $data : NULL);
	}

}

/* End of file Abouts.php */
/* Location: ./application/modules/admin/controllers/Abouts.php */