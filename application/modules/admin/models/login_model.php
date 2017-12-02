<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model
{
	
	private $table = 'system_users';

	public function get_all_users()
	{
		$query = $this->db->get($this->table);
		return $query->result();
	}

	public function get_by_user($username)
	{
		$query = $this->db->where('username',$username)->get($this->table);
		return $query->row();
	}


	
	
}