<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Actions extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('users_lib');
		$this->users_lib->_is_logged_in();
		$this->config->load('form_validation');
		$this->load->model('seo_model');
		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');
	}


	public function addBlog() 
	{
		
		$config['upload_path'] = "assets/images/blog";
		$config['allowed_types'] = 'gif|jpg|png';
		$config['file_name'] = uniqid();
		$this->load->library('upload', $config);

		if ($this->upload->do_upload("featured")) {
			$data = $this->upload->data();
			$file_name =  $data['file_name'].date("");
			$data = array('sysblog_name' => $this->input->post('blog_name'),
				'sysblog_detail' => $this->input->post('detail'),
				'sysblog_date' => date("Y-m-d"),
				'sysblog_Postby' => $this->session->userdata('username'),
				'sysblog_pic' => $file_name
				);
			$this->db->escape($data);
			$this->AppModel->insert('system_blog',$data);
			echo '<script> alert("Add blog success!") </script>';
			redirect('admin/blog/add','refresh');
		}else{
			$errors = $this->upload->display_errors();
			echo $errors;
		}
		
		
	}

	public function addJob()
	{
		$state = array('status' => false, 'messages' => array());
		$this->form_validation->set_rules('job_name','Position','required');
		$this->form_validation->set_rules('detail','Detail','required');
		if ($this->form_validation->run() == TRUE) {
			$data = array('job_name' => $this->input->post('job_name'),
				'job_detail' => $this->input->post('detail'),
				'create_at' => date("Y-m-d h:i:s")
				);
			$state = array('status'=>FALSE);
			$this->db->escape($data);
			if($this->AppModel->insert('system_jobs',$data)){
				$state['status'] = TRUE;
			}

		} else {
			foreach ($_POST as $key => $value) {
				$state['messages'][$key] = form_error($key);
			}
		}
		echo json_encode($state);
	}

	public function jobUpdate()
	{
		$state = array('status' => false, 'messages' => array());
		$this->form_validation->set_rules('job_name','Position','required');
		$this->form_validation->set_rules('detail','Detail','required');
		if ($this->form_validation->run() == TRUE) {
			$data = array('job_name' => $this->input->post('job_name'),
				'job_detail' => $this->input->post('detail')
				);
			$this->db->escape($data);
			$id = $this->input->post('id');
			$where = 'j_id = '.$id;
			if($this->AppModel->update('system_jobs',$data,$where)){
				echo '<script> alert("Update Job success!") </script>';
				redirect('admin/job/edit/'.$id,'refresh');
			}
		} else {
			$this->load->view('admin/job/edit',isset($data) ? $data : NULL);
		}
		
	}

	public function seo_update()
	{
		$this->form_validation->set_rules('site_name','Site Name','trim|required');
		$this->form_validation->set_rules('descrition','Descrition','trim|required');
		$this->form_validation->set_rules('keyword','Keyword','trim|required');
		if ($this->form_validation->run() === TRUE) {
			$data = array('website_name' => $this->input->post('site_name'),
				'site_desc' => $this->input->post('descrition'),
				'site_keyword' => $this->input->post('keyword')
				);
			$res = $this->seo_model->update($data);
			$state = array('status'=>FALSE);
			if($res){
				$state['status'] = TRUE;
				echo json_encode($state);
			}else{
				echo json_encode($state);
			}

		} else {
			$this->load->view('admin/seo',isset($data) ? $data : NULL);
		}
	}

	public function deleteBlog($id)
	{
		$state = array('status'=>FALSE);
		if ($this->input->server('REQUEST_METHOD') == TRUE) {
			if (empty($id)) {
				echo json_encode($state);
			}else{
				$res = $this->AppModel->delete('system_blog',array('sysblog_id' => $id));
				if ($res) {
					$state['status'] = TRUE;
					echo json_encode($state);
				}
			}
			
		}
		
	}

	public function deleteJob($id)
	{
		$state = array('status'=>FALSE);
		if ($this->input->server('REQUEST_METHOD') == TRUE) {
			if (empty($id)) {
				echo json_encode($state);
			}else{
				$res = $this->AppModel->delete('system_jobs',array('j_id' => $id));
				if ($res) {
					$state['status'] = TRUE;
					echo json_encode($state);
				}
			}
			
		}
		
	}



}
