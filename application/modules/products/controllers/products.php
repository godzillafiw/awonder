<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends MY_Controller {

	public function __construct() {
		parent::__construct();

	}

	public function index()
	{
		$this->template->set_layout('temp')->build('products',isset($data) ? $data : NULL);
	}

	public function detail()
	{
		$this->template->set_layout('temp')->build('products_detail',isset($data) ? $data : NULL);
	}


}