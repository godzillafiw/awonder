<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends MY_Controller {

    public function __construct() {
        parent::__construct();
        
    }

    public function index()
	{
        $this->template->set_layout('temp')->build('about',isset($data) ? $data : NULL);
	}
   
        
}