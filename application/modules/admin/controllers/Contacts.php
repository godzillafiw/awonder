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
		$this->list_page();
	}
 
	public function list_page()
	{
		$this->data['page_title'] = 'ผู้ติดต่อ';
		$this->data['assets'] = $this->assetsLoad('');
		$this->data['breadcrumbs'] = array(
			array('title' => 'อะวันเดอร์', 'url' => base_url('admin')),
			array('title' => 'ผู้ติดต่อ', 'url' => '#')
			);
		$this->data['contacts'] = $this->AppModel->get_all_records($table = 'aw_contacts',
			$array = array('con_id >=' => '0'),
			$join_table = '',
			$join_criteria = '',
			'con_id'
			);

		$this->template->set_layout('temp_back')
		->build('contacts/contacts_view',isset($this->data) ? $this->data : NULL);
	}

	public function getJSON4Datatable() 
	{
		$this->db->select('*');
		$this->db->order_by("con_id", "desc");
		$rows = $this->db->get('aw_contacts')->result_array();

		foreach ($rows as $i => $row) {

			$array['t1'] =  '<span hidden>'.$row['con_id'].'</span>';
			$array['t1'] .= '<div class="checkbox checkbox-primary checkbox-circle"><input id="checkbox'.$i.'" type="checkbox" ';
			$array['t1'] .= 'data-id="'.$row['con_id'].'"><label for="checkbox'.$i.'"></label></div>';
			$array['t2'] =  '<a href="javascript:void(0)"><strong>C0'.$row['con_id'].'</strong></a>';
			$array['t2'] .= ' โดย '.$row['fullname'].'<br>';
			$array['t2'] .= '<span class="text-muted m-b-30 font-13">'.$row['subject'].'</span> <br>';
			$array['t2'] .= $row['email'].'<br>';
			$array['t3'] = $row['messages'];
			$array['t4'] = substr($row['create_at'], 0,10);
			$array['t5'] = status($row['status'],$row['con_id']);
			$array['t6'] = '<a class="btn waves-effect btn-secondary btn-sm" onClick="deleteItem('.$row['con_id'].')" title="ลบ"> <i class="fa fa-trash-o"></i> </a>';
			$data['aaData'][] = $array;
		}
		echo json_encode($data);

	}

	public function delete()
	{
		$data = array('status' => 1, 'con_id' => $this->input->post());
		$this->db->where_in('con_id', $this->input->post('id'));
		$this->db->delete('aw_contacts');
		echo json_encode($data);
	} 

	public function status()
	{
		$data = array('status' => 1, 'val' => $this->input->post('status'));
		$status = $this->input->post('status');
		if ($status == 0) {$val = 1;}
		elseif ($status == 1) {$val = 0;}
		$update = array('status' => $val);
		$this->db->where('con_id', $this->input->post('id'));
		$this->db->update('aw_contacts',$update);
		echo json_encode($data);

	}  

}

/* End of file Abouts.php */
/* Location: ./application/modules/admin/controllers/Abouts.php */