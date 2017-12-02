<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Warranty extends MY_Controller {

	public function __construct() {
		parent::__construct();

	}

	public function index()
	{
		$this->template->set_layout('temp')->build('warranty',isset($data) ? $data : NULL);
	}


}