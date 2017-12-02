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
		$this->list_page();
	}
 
	public function list_page()
	{
		$this->data['page_title'] = 'ชำระเงิน';
		$this->data['assets'] = $this->assetsLoad('');
		$this->data['breadcrumbs'] = array(
			array('title' => 'อะวันเดอร์', 'url' => base_url('admin')),
			array('title' => 'ชำระเงิน', 'url' => '#')
			);

		$this->template->set_layout('temp_back')
		->build('payments/payments_view',isset($this->data) ? $this->data : NULL);
	}


	public function getJSON4Datatable() 
	{
		$this->db->select('*');
		$this->db->order_by("pay_id", "desc");
		$rows = $this->db->get('aw_payments')->result_array();

		foreach ($rows as $i => $row) {

			$array['t1'] =  '<span hidden>'.$row['pay_id'].'</span>';
			$array['t1'] .= '<div class="checkbox checkbox-primary checkbox-circle"><input id="checkbox'.$i.'" type="checkbox" ';
			$array['t1'] .= 'data-id="'.$row['pay_id'].'"><label for="checkbox'.$i.'"></label></div>';
			$array['t2'] =  '<a href="javascript:void(0)"><strong>P0'.$row['pay_id'].'</strong></a>';
			$array['t2'] .= ' โดย '.$row['fullname'].'<br>';
			$array['t2'] .= '<span class="text-muted m-b-30 font-13"><i class="fa fa-cc-visa text-success"></i> '.$row['transaction_number'].'</span> <br>';
			$array['t3'] = '<a class="btn waves-effect btn-secondary btn-sm" target="_blank" href="'.base_url().'assets/back/uploads/slip/'.$row['slip_file'].'" onClick="statusPayment('.$row['status'].','.$row['pay_id'].')" title="สลิปการโอน"><i class="fa fa-file-text-o"></i> </a>';
			$array['t4'] = substr($row['create_at'], 0,10);
			$array['t5'] = statusPayment($row['status'],$row['pay_id']);
			$array['t6'] = '<a class="btn waves-effect btn-secondary btn-sm" onClick="deleteItem('.$row['pay_id'].')" title="ลบ"> <i class="fa fa-trash-o"></i> </a>';
			$data['aaData'][] = $array;
		}
		echo json_encode($data);

	}

	public function delete()
	{
		$data = array('status' => 1, 'pay_id' => $this->input->post());
		$this->db->where_in('pay_id', $this->input->post('id'));
		$this->db->delete('aw_payments');
		echo json_encode($data);
	} 

	public function status()
	{
		$data = array('status' => 1);
		$status = $this->input->post('status');
		if ($status == 0) {
			$update = array('status' => 1);
			$this->db->where('pay_id', $this->input->post('id'));
			$this->db->update('aw_payments',$update);
		}
		
		echo json_encode($data);
	}  


	
}

/* End of file Payments.php */
/* Location: ./application/modules/admin/controllers/Payments.php */