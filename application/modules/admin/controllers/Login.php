<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('users_lib');
        
    }
	public function index()
	{
		if (!$this->session->userdata('is_login')) {
			$this->load->view('login',isset($data) ? $data : NULL);
		}else {
			redirect('admin');
		}
	}

	public function check_login()
	{
		$this->load->library(array('form_validation'));
		$this->form_validation->set_rules('username','Username','trim|required');
		$this->form_validation->set_rules('password','Password','trim|required');
		if ($this->form_validation->run() === TRUE) {
				$username = $this->input->post('username');
				$password = $this->input->post('password');
				$user = $this->users_lib->verify_login($username,$password);

				if($user['status'] == 'success'){
					$params['user'] = $this->session->userdata('u_id');
					$params['module'] = 'Admin';
					$params['date'] = date("Y-m-d h:i:s");
					$params['activity'] = ucfirst('login');
					$params['icon'] = 'fa-user-circle-o';
					modules::run('activity/log',$params);
					redirect('admin','refresh');

				}elseif($user['status'] == 'warning'){

					$this->users_lib->_set_alert($user);
					redirect('admin/login','refresh');

				}elseif($user['status'] == 'error'){
					$this->users_lib->_set_alert($user);
					redirect('admin/login','refresh');

				}else{
					$this->users_lib->_set_alert($user);
					redirect('admin/login','refresh');
				}

			} else {
				 $this->load->view('login',isset($data) ? $data : NULL);
			}
	}

	public function logout()
    {
       $params['user'] = $this->session->userdata('u_id');
	   $params['module'] = 'Admin';
	   $params['date'] = date("Y-m-d h:i:s");
	   $params['activity'] = ucfirst('logout');
	   $params['icon'] = 'fa-sign-out';
		modules::run('activity/log',$params);
		$this->users_lib->_sess_destroy();
    }


   public function changpassword()
   {
		$new_password = $this->input->post('new_password');
   		$this->load->library(array('form_validation'));
   		$this->form_validation->set_error_delimiters('<div class="text-danger" style="font-size:12px">', '</div>');
		$this->form_validation->set_rules('new_password','New Password','trim|required');
		$this->form_validation->set_rules('conf_password','Confirm Password','trim|required|matches[new_password]');
		if ($this->form_validation->run() === TRUE) {
				$this->users_lib->new_password($new_password);
				echo '<script> alert("Chang password success.") </script>';
			}else{
			}
			$this->load->view('temp/head');
			$this->load->view('chang_pass',isset($data) ? $data : NULL);
			$this->load->view('temp/footer');
   }


   public function success()
	{
		$this->session->set_flashdata( 
			array('msginfo'=>'  <div class="alert bg-green alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <strong>ทำรายการสำเร็จ!</strong> คุณได้ทำรายการ เสร็จเรียบร้อยแล้ว
                            	</div>'));
	}

    public function create_pass()
    {
    	$salt = $this->users_lib->salt();
    	$password = $this->users_lib->hash_password('SaiLian',$salt);
    	echo $password .'<br>'.$salt;
    }

	
        
}