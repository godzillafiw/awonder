<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AppModel extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	function get_all_records($table,$where,$join_table,$join_criteria,$order,$limit=NULL)
	{
		$this->db->where($where);
		if($join_table){
			$this->db->join($join_table,$join_criteria);
		}
		$query = $this->db->order_by($order,'asc')->get($table,$limit);
		if ($query->num_rows() > 0){
			return $query->result();
		} else{
			return NULL;
		}
	}

	function users()
	{
		return $this->db->get('aw_users')->result();
	}

	function categories()
	{
		return $this->db->get('aw_categories')->result();
	}

	function payments()
	{
		return $this->db->get('payment_methods')->result();
	}

	function user_by_id($id)
	{
		return $this->db-> where(array('id'=>$id))->get('users')->result();
	}

	function insert($table,$data){
		$this->db->insert($table, $data);
		return $this->db->insert_id();
	}

	function update($table,$data,$where)
	{
		$this->db->where($where)->update($table, $data);
		return TRUE;
	}

	function search_project($keyword,$where)
	{
		//$array = array('project_title' => $keyword, 'project_code' => $keyword);
		$this->db->like('project_title',$keyword); 
		return $this->db->order_by('date_created','desc')	
		->where($where)					
		->get('projects')->result();
	}

	public function count_table($table)
	{
		return $this->db->count_all($table);
	}
}

/* End of file appmodel.php */
/* Location: ./application/models/appmodel.php */ 