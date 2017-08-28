<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{
	
	public function __construct()
	{
		parent:: __construct();
	}
	
	public function total_blog()
	{
		$query = $this->db->query('SELECT * FROM system_blog');
		return $query->num_rows();
	}

	public function total_jobs()
	{
		$query = $this->db->query('SELECT * FROM system_jobs');
		return $query->num_rows();
	}

	public function total_users()
	{
		$query = $this->db->query('SELECT * FROM system_users');
		return $query->num_rows();
	}




	
	
}