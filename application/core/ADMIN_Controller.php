<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');

class ADMIN_Controller extends MX_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('users_lib');
		$this->users_lib->_is_logged_in();
	}


	public function alert($status,$message){
		$this->session->set_flashdata( 
			array('msginfo' => '<div class="alert alert-success alert-dismissible">
				<a class="close" data-dismiss="alert" aria-label="close">&times;</a>
				<strong>'.$status.'!</strong> '.$message.'</div>')
			);
	}

}
