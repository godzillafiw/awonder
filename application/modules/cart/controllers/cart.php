<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends MY_Controller {

	public function index()
	{
		$this->template->set_layout('temp')->build('cart_view',isset($data) ? $data : NULL);
	}

	public function checkout()
	{
		$this->template->set_layout('temp')->build('checkout_view',isset($data) ? $data : NULL);
	}

	public function orderConfirm()
	{
		$this->form_validation->set_error_delimiters('<div class="text-danger" style="font-size:12px">', '</div>');
		$this->form_validation->set_rules('full_name', 'Full name', 'trim|required');
		$this->form_validation->set_rules('phone', 'Phone', 'trim|required');
		$this->form_validation->set_rules('you_address', 'You address', 'trim|required');
		if ($this->form_validation->run() == TRUE) {
			$data = array(
				"company_name"	=>  $this->input->post('company_name'),
				"fullname"		=>	$this->input->post('full_name'),
				"phone"			=>	$this->input->post('phone'),
				"email"			=>	$this->input->post('you_email'),
				"address"		=>	$this->input->post('you_address'),
				"postcode"		=>	$this->input->post('post_code'),
				"total"     	=>  $this->cart->total()
				);
			$this->db->escape($data);
			$res =	$this->AppModel->insert('aw_orders',$data);
			$last_id = $this->db->insert_id();

			foreach ($this->cart->contents() as $items){
				$dataDetail = array(
					"quantity"		=>   $items['qty'],
					"price"			=>	$this->cart->format_number($items['price']),
					"product_id"	=>	$items['id'],
					"order_id"		=>	$last_id
					);
				$res_	= $this->db->insert('aw_order_detail', $dataDetail);
			}


			if ($res && $res_) {
				$this->alert('Success','สั่งซื้อเรียบร้อยแล้ว');
				$this->des();
				redirect('cart/checkout');
			}
		} else {
			$this->checkout();
		}
	}

	public function addCart()
	{
		$res = array('status' => 1, 'name' => $this->input->post('pname'));
		$id = $this->input->post('pid');
		$qty = 1;
		$price = $this->input->post('price');
		$name = $this->input->post('pname');
		$cname = $this->input->post('cname');
		$img = $this->input->post('img');
		## Allow charecter spacial
		$this->cart->product_name_rules = '\d\D';
		$data = array(
			'id'      => $id,
			'qty'     => $qty,
			'price'   => $price,
			'name'    => $name,
			'cname'	  => $cname,
			'image'	  => $img
			);
		$this->cart->insert($data);

		echo json_encode($res);
	}

	public function checkCart()
	{
		$count = count($this->cart->contents());
		$total = number_format($this->cart->total(),2);
		$res = array('status' => 1 ,'check' => FALSE, 
					 'count' => $count, 'total' => $total
					);
		if (!empty($this->cart->contents())) {
			$res['check'] = TRUE;
		}
		echo json_encode($res);
	}

	public function update()
	{
		$i = 1;
		foreach ($this->cart->contents() as $items) {
			$this->cart->update(array('rowid' => $items['rowid'], 'qty' => $_POST['qty'.$i]));
			$i++;
		}
		redirect('cart','refresh');
	}

	public function des()
	{
		$this->cart->destroy();
	}

	public function delete($rowId) 
	{
		$this->cart->update(array('rowid' => $rowId,'qty'=>0));
		redirect('cart','refresh');

	}

	public function empty_cart() {

		$this->session->unset_userdata('cart_session');

		$arr = array();
		$arr['update_cart'] = 0;
		echo json_encode($arr);
	}

}

/* End of file cart.php */
/* Location: ./application/modules/cart/controllers/cart.php */