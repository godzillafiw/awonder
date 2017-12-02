<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Quotation extends MY_Controller {

	public function __construct() {
		parent::__construct();

	}

	public function index()
	{
		$this->template->set_layout('temp')->build('quotation');
	}

	public function send()
	{
		$respond = array('status' => false, 'message' => 'ส่งใบเสนอราคาเรียบร้อยแล้ว');
		$data = array(
			"company_name"	=> $this->input->post('company_name'),
			"fullname"		=>	$this->input->post('full_name'),
			"phone"			=>	$this->input->post('you_phone'),
			"email"			=>	$this->input->post('you_email'),
			"address"		=>	$this->input->post('you_address'),
			"detail"		=>	$this->input->post('you_quotation'),
			"create_at"     => date("Y-m-d h:i:s")
			);
		$this->db->escape($data);
		$res =	$this->AppModel->insert('aw_quotation',$data);
		if ($res) {
			$respond['status'] = true;
			echo json_encode($respond);
		}
		
	}

	public function sends()
	{
		$this->form_validation->set_error_delimiters('<div class="text-danger" style="font-size:12px">', '</div>');
		$this->form_validation->set_rules('company_name', 'Company name', 'trim|required');
		$this->form_validation->set_rules('full_name', 'Full name', 'trim|required');
		$this->form_validation->set_rules('you_phone', 'Phone', 'trim|required');
		$this->form_validation->set_rules('you_email', 'You email', 'trim|required|valid_email');
		$this->form_validation->set_rules('you_address', 'You address', 'trim|required');
		$this->form_validation->set_rules('you_quotation', 'You quotation', 'trim|required');
		if ($this->form_validation->run() == TRUE) {
			$data = array(
				"company_name"	=> $this->input->post('company_name'),
				"fullname"		=>	$this->input->post('full_name'),
				"phone"			=>	$this->input->post('you_phone'),
				"email"			=>	$this->input->post('you_email'),
				"address"		=>	$this->input->post('you_address'),
				"detail"		=>	$this->input->post('you_quotation'),
				"create_at"     => date("Y-m-d h:i:s")
				);
			$this->db->escape($data);
			$res =	$this->AppModel->insert('aw_quotation',$data);
			if ($res) {
				$this->alert('Success','ส่งใบเสนอราคาเรียบร้อยแล้ว');
				redirect('quotation');
			}
		} else {
			$this->index();
		}

	}

	public function test()
	{
		phpinfo();
	}


}
