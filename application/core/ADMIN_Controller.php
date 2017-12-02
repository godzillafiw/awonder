<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');

class ADMIN_Controller extends MX_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('users_lib');
		$this->users_lib->_is_logged_in();
		$this->data = array();
	}


	public function alert($status,$message){
		$this->session->set_flashdata( 
			array('msginfo' => '<div class="alert alert-success alert-dismissible">
				<a class="close" data-dismiss="alert" aria-label="close">&times;</a>
				<strong>'.$status.'!</strong> '.$message.'</div>')
			);
	}

	public function statusCheck()
	{
		$status[0] = ' <span class="label label-danger">Disable</span>';
		$status[1] = ' <span class="label label-success">Active</span>';
		$status[2] = ' <span class="label label-warning">Suspend</span>';
		$status[3] = ' <span class="label label-danger">Delete</span>';
	}

	public function assetsLoad()
	{
		
		return $assets   =	array('datatable' => array(
			array('link' => base_url('assets/back/plugins/datatables/jquery.dataTables.min.js')),
			array('link' => base_url('assets/back/plugins/datatables/dataTables.bootstrap4.min.js')),
			array('link' => base_url('assets/back/plugins/datatables/dataTables.buttons.min.js')),
			array('link' => base_url('assets/back/plugins/datatables/buttons.bootstrap4.min.js')),
			array('link' => base_url('assets/back/plugins/datatables/jszip.min.js')),
			array('link' => base_url('assets/back/plugins/datatables/pdfmake.min.js')),
			array('link' => base_url('assets/back/plugins/datatables/vfs_fonts.js')),
			array('link' => base_url('assets/back/plugins/datatables/buttons.html5.min.js')),
			array('link' => base_url('assets/back/plugins/datatables/buttons.print.min.js')),
			array('link' => base_url('assets/back/plugins/datatables/buttons.colVis.min.js')),
			array('link' => base_url('assets/back/plugins/dataTables/dataTables.responsive.min.js')),
			array('link' => base_url('assets/back/plugins/datatables/responsive.bootstrap4.min.js'))
			),
		
		'css' => array(
			array('link' => base_url('assets/back/plugins/datatables/dataTables.bootstrap4.min.css')),
			array('link' => base_url('assets/back/plugins/datatables/buttons.bootstrap4.min.css')),
			array('link' => base_url('assets/back/plugins/datatables/responsive.bootstrap4.min.css'))

			),

		'sweetAlert' => array(
			array('link' => base_url('assets/back/plugins/bootstrap-sweetalert/sweet-alert.css'))

			),

		'sweetAlertJS' => array(
			array('link' => base_url('assets/back/plugins/bootstrap-sweetalert/sweet-alert.min.js'))

			),

		'parsleyjs' => array(
			array('link' => base_url('assets/back/plugins/parsleyjs/parsley.min.js'))

			),

		'ckeditorfull' => array(
			array('link' => base_url('assets/back/ckeditor-full/ckeditor.js'))

			)
		);

	}

}
