<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index()
	{
		$data['categories'] = $this->AppModel->categories();
		$this->template->set_layout('temp')->build('home',isset($data) ? $data : NULL);
	}
   
        
}
