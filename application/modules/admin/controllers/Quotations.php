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
		$this->list_page();
	}
 
	public function list_page()
	{
		$this->data['page_title'] = 'ใบเสนอราคา';
		$this->data['assets'] = $this->assetsLoad('');
		$this->data['breadcrumbs'] = array(
			array('title' => 'อะวันเดอร์', 'url' => base_url('admin')),
			array('title' => 'ใบเสนอราคา', 'url' => '#')
			);

		$this->template->set_layout('temp_back')
		->build('quotations/quotations_view',isset($this->data) ? $this->data : NULL);
	}


	public function getJSON4Datatable() 
	{
		$this->db->select('*');
		$this->db->order_by("q_id", "desc");
		$rows = $this->db->get('aw_quotation')->result_array();

		foreach ($rows as $i => $row) {

			$array['t1'] =  '<span hidden>'.$row['q_id'].'</span>';
			$array['t1'] .= '<div class="checkbox checkbox-primary checkbox-circle"><input id="checkbox'.$i.'" type="checkbox" ';
			$array['t1'] .= 'data-id="'.$row['q_id'].'"><label for="checkbox'.$i.'"></label></div>';
			$array['t2'] =  '<a href="javascript:void(0)"><strong>Q0'.$row['q_id'].'</strong></a>';
			$array['t2'] .= ' โดย '.$row['company_name'].'<br>';
			$array['t2'] .= '<span class="text-muted m-b-30 font-13">'.$row['email'].'</span> <br>';
			$array['t2'] .= $row['phone'].'<br>';
			$array['t3'] = $row['company_name'];
			$array['t4'] = substr($row['create_at'], 0,10);
			$array['t5'] = statusPayment($row['status'],$row['q_id']);
			$array['t6'] = '<a class="btn waves-effect btn-secondary btn-sm" href="'.base_url().'admin/quotations/detail/'.$row['q_id'].'"  onClick="statusQuotation('.$row['status'].','.$row['q_id'].')" title="รายละเอียด"> <i class="fa fa-file-o"></i> </a>';
			$array['t6'] .= '<a class="btn waves-effect btn-secondary btn-sm" onClick="deleteItem('.$row['q_id'].')" title="ลบ"> <i class="fa fa-trash-o"></i> </a>';
			$data['aaData'][] = $array;
		}
		echo json_encode($data);

	}

	public function detail($id)
	{
		$this->db->select('*');
		$this->db->where('q_id', $id);
		$query = $this->db->get('aw_quotation');
		$this->data['details']  	= $query->result_array();
		$this->data['page_title'] 	= 'ใบเสนอราคา';
		$this->data['assets'] 		= $this->assetsLoad('');
		$this->data['breadcrumbs'] 	= array(
			array('title' => 'อะวันเดอร์', 'url' => base_url('admin')),
			array('title' => 'ใบเสนอราคา', 'url' => base_url('admin/quotations')),
			array('title' => 'รายละเอียด', 'url' => '#')
			);

		$this->template->set_layout('temp_back')
		->build('quotations/quotation_detail',isset($this->data) ? $this->data : NULL);
	}

	public function delete()
	{
		$data = array('status' => 1, 'q_id' => $this->input->post());
		$this->db->where_in('q_id', $this->input->post('id'));
		$this->db->delete('aw_quotation');
		echo json_encode($data);
	} 

	public function status()
	{
		$data = array('status' => 1, 'val' => $this->input->post('status'));
		$status = $this->input->post('status');
		if ($status == 0) {$val = 1;}
		elseif ($status == 1) {$val = 0;}
		$update = array('status' => $val);
		$this->db->where('q_id', $this->input->post('id'));
		$this->db->update('aw_quotation',$update);
		echo json_encode($data);

	}  

}

/* End of file Quotations.php */
/* Location: ./application/modules/admin/controllers/Quotations.php */