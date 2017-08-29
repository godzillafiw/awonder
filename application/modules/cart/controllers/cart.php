<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends MX_Controller {

	public function index()
	{
		$this->template->set_layout('temp')->build('cart_view',isset($data) ? $data : NULL);
	}

	public function checkout()
	{
		$this->template->set_layout('temp')->build('checkout_view',isset($data) ? $data : NULL);
	}

}

/* End of file cart.php */
/* Location: ./application/modules/cart/controllers/cart.php */