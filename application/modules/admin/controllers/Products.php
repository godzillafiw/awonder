<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends ADMIN_Controller {

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
		$this->data['page_title'] = 'สินค้า';
		$this->data['assets'] = $this->assetsLoad('');
		$this->data['breadcrumbs'] = array(
			array('title' => 'อะวันเดอร์', 'url' => base_url('admin')),
			array('title' => 'สินค้า', 'url' => '#')
			);

		$this->template->set_layout('temp_back')
		->build('products/products_view',isset($this->data) ? $this->data : NULL);
	}


	public function getJSON4Datatable() 
	{
		$this->db->select('*');
		$this->db->order_by("p_id", "desc");
		$this->db->join('aw_categories', 'aw_categories.cat_id = aw_product.c_id', 'left');
		$rows = $this->db->get('aw_product')->result_array();

		foreach ($rows as $i => $row) {

			$array['t1'] =  '<span hidden>'.$row['p_id'].'</span>';
			$array['t1'] .= '<div class="checkbox checkbox-primary checkbox-circle"><input id="checkbox'.$i.'" type="checkbox" ';
			$array['t1'] .= 'data-id="'.$row['p_id'].'"><label for="checkbox'.$i.'"></label></div>';
			$array['t2'] = '<a href="'.base_url().'products/detail/'.$row['p_id'].'" target="_blank" title="รายละเอียด" ><img width="35" height="35" src="'.base_url().'assets/front/uploads/product/'.$row['product_image'].'" alt="user" class="rounded-circle"></a>';
			$array['t3'] =  '<a href="javascript:void(0)"><strong>A0'.$row['p_id'].'</strong></a>';
			$array['t3'] .= ' '.$row['product_name'].'<br>';
			$array['t3'] .= '<span class="text-muted m-b-30 font-13">'.$row['cat_name'].' </span>';
			$array['t3'] .= productType($row['type']);
			$array['t4'] = ($row['product_price'] != NULL) ? $row['product_price'] : 'N/A'.'<br>';
			$array['t5'] = substr($row['create_at'], 0,10);
			$array['t6'] = '<a class="btn waves-effect btn-secondary btn-sm" href="'.base_url().'admin/products/edit/'.$row['p_id'].'" title="แก้ไข"> <i class="fa fa-edit"></i> </a>';
			$array['t6'] .= '<a class="btn waves-effect btn-secondary btn-sm" onClick="deleteItem('.$row['p_id'].')" title="ลบ"> <i class="fa fa-trash-o"></i> </a>';
			$data['aaData'][] = $array;
		}
		echo json_encode($data);

	}

	public function delete()
	{
		$data = array('status' => 1, 'p_id' => $this->input->post());
		$this->db->where_in('p_id', $this->input->post('id'));
		$this->db->delete('aw_product');
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

	public function add()
	{
		$this->data['page_title'] = 'เพิ่มสินค้า';
		$this->data['assets'] = $this->assetsLoad('');
		$this->data['breadcrumbs'] = array(
			array('title' => 'อะวันเดอร์', 'url' => base_url('admin')),
			array('title' => 'สินค้า', 'url' => base_url('admin/products')),
			array('title' => 'เพิ่มสินค้า', 'url' => '#')
			);

		$this->data['categories'] = $this->get_categories();
		$this->data['mains'] = $this->AppModel->main_cat();
		$this->template->set_layout('temp_back')
		->build('products/products_add',isset($this->data) ? $this->data : NULL);
	}

	public function edit($id)
	{
		$this->data['page_title'] = 'แก้ไขสินค้า';
		$this->data['assets'] = $this->assetsLoad('');
		$this->data['breadcrumbs'] = array(
			array('title' => 'อะวันเดอร์', 'url' => base_url('admin')),
			array('title' => 'สินค้า', 'url' => base_url('admin/products')),
			array('title' => 'แก้ไขสินค้า', 'url' => '#')
			);
		$this->data['detail'] = $this->AppModel->detail_pro($where = 'p_id',$id,$table = 'aw_product');
		
		$this->data['categories'] = $this->get_categories();
		$this->data['mains'] = $this->AppModel->main_cat();
		$this->template->set_layout('temp_back')
		->build('products/products_edit',isset($this->data) ? $this->data : NULL);
	}

	public function insert()
	{
		$this->form_validation->set_error_delimiters('<div class="text-danger" style="font-size:12px">', '</div>');
		$this->form_validation->set_rules('product_name', 'Products name', 'required');
		$this->form_validation->set_rules('product_detail', 'Products detail', 'required');
		$this->form_validation->set_rules('cat_id', 'Categories', 'required');

		$config['upload_path'] 		= 'assets/front/uploads/product';
		$config['allowed_types']	= 'gif|jpg|png';
		$config['file_name'] = uniqid();
		$this->load->library('upload', $config);

		$data = array();
		$check_file = FALSE;
		if ($this->upload->do_upload("product_image")){
			$data =  $this->upload->data();
			$check_file = TRUE;
			var_dump($data);
		}
		else{ 
			$error_file = array('error' => $this->upload->display_errors());
		}

		if($this->form_validation->run() == TRUE && $check_file == TRUE){
			$insert = array(
				'product_name'		=> $this->input->post('product_name'),
				'product_detail'	=> $this->input->post('product_detail'),
				'product_price'		=> $this->input->post('price'),
				'c_id'				=> $this->input->post('cat_id'),
				'type'				=> $this->input->post('type'),
				'product_image'		=> $data['file_name'],
				'create_at'			=> date("Y-m-d h:i:s")
				);
			$this->db->escape($insert);
			$res = $this->AppModel->insert('aw_product',$insert);
			if ($res) {
				$this->alert('Success','บันทึกสินค้าเรียบร้อยแล้ว');
				redirect('admin/products/add');
			}
		} else {
			$this->add();
		}
		
	}

	public function update()
	{
		$this->form_validation->set_error_delimiters('<div class="text-danger" style="font-size:12px">', '</div>');
		$this->form_validation->set_rules('product_name', 'Products name', 'required');
		$this->form_validation->set_rules('product_detail', 'Products detail', 'required');
		$this->form_validation->set_rules('cat_id', 'Categories', 'required');

		$config['upload_path'] 		= 'assets/front/uploads/product';
		$config['allowed_types']	= 'gif|jpg|png';
		$config['file_name'] = uniqid();
		$this->load->library('upload', $config);

		$data = array();
		$check_file = FALSE;
		if ($this->upload->do_upload("product_image")){
			$data =  $this->upload->data();
			$check_file = TRUE;
		}
		else{ 
			$error_file = array('error' => $this->upload->display_errors());
		}

		if($this->form_validation->run() == TRUE){
			$update = array(
				'product_name'		=> $this->input->post('product_name'),
				'product_detail'	=> $this->input->post('product_detail'),
				'product_price'		=> $this->input->post('price'),
				'c_id'				=> $this->input->post('cat_id'),
				'type'				=> $this->input->post('type'),
				'create_at'			=> date("Y-m-d h:i:s")
				);
			if ($check_file) {
				$update['product_image'] = $data['file_name'];
			}
			$this->db->escape($update);
			$where = array('p_id'=>$this->input->post('p_id'));
			$res = $this->AppModel->update('aw_product',$update,$where);
			if ($res) {
				$this->alert('Success','แก้ไขสินค้าเรียบร้อยแล้ว');
				redirect('admin/products/edit/'.$this->input->post('p_id'));
			}
		} else {
			$this->add();
		}
		
	}


	public function get_categories()
	{
		return $this->AppModel->get_all_records($table = 'aw_categories',
			$where = array('cat_id >=' => '0'),
			$join_table = '',
			$join_criteria = '',
			'cat_id'
			);
	}

}

/* End of file Products.php */
/* Location: ./application/modules/admin/controllers/Products.php */