<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Payment extends MY_Controller {

	public function __construct() {
		parent::__construct();

	}

	public function index()
	{
		$this->template->set_layout('temp')->build('payment',isset($data) ? $data : NULL);
	}

	public function send()
	{
		$config['upload_path'] 		= '.assets/back/uploads/slip';
		$config['allowed_types']	= 'gif|jpg|png';
		$config['file_name'] = uniqid();
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload("slip_file")){
			$error = array('error' => $this->upload->display_errors());
			print_r($error);
		}
		else{
			
			$data = array('upload_data' => $this->upload->data());
			print_r($data);
		}


		/*$this->form_validation->set_error_delimiters('<div class="text-danger" style="font-size:12px">', '</div>');
		$this->form_validation->set_rules('fullname', 'Fullname', 'trim|required');
		$this->form_validation->set_rules('transaction_number', 'Transaction number', 'trim|required');
		//$this->form_validation->set_rules('slip_file', 'Slip file', 'trim|required');

		if ($this->form_validation->run() == TRUE ) {
			$data_file = $this->upload->data();
			$data = array(
				"fullname"				=> $this->input->post('fullname'),
				"transaction_number"	=> $this->input->post('transaction_number'),
				"slip_file"				=> $data_file['file_name'],
				"create_at"				=> date("Y-m-d h:i:s")
				);

			$this->db->escape($data);
			$res = $this->AppModel->insert('aw_payments',$data);

			if ($res) {
				$this->alert('aw_payments','ส่งรายการเรียบร้อยแล้ว');
				redirect('payment','refresh');
			}

		} else {
			$this->index();
		}*/
	}


}