<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Seo_model extends CI_Model
{
	private $table = 'system_config';
	public function __construct()
	{
		parent:: __construct();
		$this->load->library('users_lib');
		$this->users_lib->_is_logged_in();
	}
	
	public function update($data)
	{
		$key = array_keys($data);
		$value = array_values($data);

		for ($i=0; $i < sizeof($data) ; $i++) { 
			$sql = "UPDATE system_config SET value = '".$value[$i]."' WHERE config_key = '".$key[$i]."'";
			$this->db->query($sql);
		}
		return TRUE;
	}




	
	
}