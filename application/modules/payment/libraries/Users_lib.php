<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_lib {

	private $ci;
	private $table = 'aw_users';

    function __construct()
	{
    	$this->ci =& get_instance();
		$this->ci->load->database();
    }

    public function get_all_users()
	{
		$query = $this->ci->db->get($this->table)->row();
		return json_encode($query);
    }

	public function get_by_user($username)
	{
		$data = array('results' => NULL,'status' => FALSE);
		$query = $this->ci->db->where('username',$username)->get($this->table);
		if($query->num_rows() > 0)
		{
			$data['results'] = $query->row();
			$data['status'] = TRUE;
		} else {
			$data['results'] = 'No Result';
		}
		return json_encode($data);
		
	}

	public function get_by_id($id)
	{
		$data = array('results' => NULL,'status' => FALSE);
		$query = $this->ci->db->where('u_id',$id)->get($this->table);
		if($query->num_rows() > 0)
		{
			$data['results'] = $query->row();
			$data['status'] = TRUE;
		} else {
			$data['results'] = 'No Result';
		}
		return json_encode($data);
	}

   
} 