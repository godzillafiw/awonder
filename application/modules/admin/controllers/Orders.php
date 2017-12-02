<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends ADMIN_Controller {

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
		$this->data['page_title'] = 'ออร์เดอร์';
		$this->data['assets'] = $this->assetsLoad('sweetAlertJS');
		$this->data['breadcrumbs'] = array(
			array('title' => 'อะวันเดอร์', 'url' => base_url('admin')),
			array('title' => 'ออร์เดอร์', 'url' => '#')
			);

		$this->template->set_layout('temp_back')
		->build('orders/orders_view',isset($this->data) ? $this->data : NULL);
	}


	public function getJSON4Datatable() 
	{
		$this->db->select('*');
		$this->db->order_by("order_id", "desc");
		$rows = $this->db->get('aw_orders')->result_array();
		$i = 0;
		foreach ($rows as $i => $row) {
			$i++;
			$array['t1'] =  '<span hidden>'.$row['order_id'].'</span>';
			$array['t1'] .= '<div class="checkbox checkbox-primary checkbox-circle"><input id="checkbox'.$i.'" type="checkbox" ';
			$array['t1'] .= 'data-id="'.$row['order_id'].'"><label for="checkbox'.$i.'"></label></div>';
			$array['t2'] =  '<a href="javascript:void(0)"><strong>#0'.$row['order_id'].'</strong></a>';
			$array['t2'] .= ' โดย '.$row['fullname'].'<br>';
			$array['t2'] .= '<span class="text-muted m-b-30 font-13">'.$row['email'].'</span> <br>';
			$array['t2'] .= '<span class="text-muted m-b-30 font-13">'.$row['phone'].'</span> <br>';
			$array['t3'] = 	$row['address'].' '.$row['postcode'];
			$array['t4'] =  statusCheck($row['status'],$row['order_id']);
			$array['t5'] =  substr($row['create_at'], 0,10);
			$array['t6'] =  '<a class="btn waves-effect btn-secondary btn-sm" href="'.base_url().'admin/orders/detail/'.$row['order_id'].'" title="รายละเอียด"><i class="fa fa-file-text-o"></i> </a>';
			$array['t6'] .= '<a class="btn waves-effect btn-secondary btn-sm" onClick="deleteItem('.$row['order_id'].')" title="ลบ"> <i class="fa fa-trash-o"></i> </a>';
			$data['aaData'][] = $array;
		}
		echo json_encode($data);

	}

	public function detail($id)
	{
		$this->db->select('*');
		$this->db->where('aw_orders.order_id', $id);
		$this->db->join('aw_order_detail', 'aw_order_detail.order_id = aw_orders.order_id', 'left');
		$this->db->join('aw_product', 'aw_product.p_id = aw_order_detail.product_id', 'left');
		$query = $this->db->get('aw_orders');
		$this->data['details']  	= $query->result();
		$this->data['order']  		= $query->result_array();
		$this->data['page_title'] 	= 'ออร์เดอร์';
		$this->data['assets'] 		= $this->assetsLoad('');
		$this->data['breadcrumbs'] 	= array(
			array('title' => 'อะวันเดอร์', 'url' => base_url('admin')),
			array('title' => 'ออร์เดอร์', 'url' => base_url('admin/orders')),
			array('title' => 'รายละเอียด', 'url' => '#')
			);

		$this->template->set_layout('temp_back')
		->build('orders/orders_detail',isset($this->data) ? $this->data : NULL);
	}

	public function delete()
	{
		$data = array('status' => 1, 'order_id' => $this->input->post());
		$this->db->where_in('order_id', $this->input->post('id'));
		$this->db->delete('aw_orders');
		echo json_encode($data);
	} 

	public function status()
	{
		$data = array('status' => 1, 'val' => $this->input->post('status'));
		$status = $this->input->post('status');
		if ($status == 0) {$val = 1;}
		elseif ($status == 1) {$val = 0;}
		$update = array('status' => $val);
		$this->db->where('order_id', $this->input->post('id'));
		$this->db->update('aw_orders',$update);
		echo json_encode($data);
	}  

}

/* End of file Orders.php */
/* Location: ./application/modules/admin/controllers/Orders.php */