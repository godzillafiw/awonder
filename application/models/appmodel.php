<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AppModel extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	function get_all_records($table,$where,$join_table,$join_criteria,$order,$limit=NULL,$start=NULL)
	{
		$this->db->where($where);
		if($join_table){
			$this->db->join($join_table,$join_criteria);
		}
		//$this->db->limit($limit,$start);
		$query = $this->db->order_by($order,'DESC')->get($table,$limit);
		if ($query->num_rows() > 0){
			return $query->result();
		} else{
			return NULL;
		}
	}

	function count_product($table,$where)
	{
		$this->db->where($where);
		$query = $this->db->get($table);
		return $query->num_rows();
	}


	function users()
	{
		return $this->db->get('aw_users')->result();
	}

	function categories()
	{
		return $this->db->get('aw_categories')->result();
	}

	function main_cat()
	{
		return $this->db->get('aw_maincat')->result();
	}

	function joincat($id)
	{
		$this->db->where('mid', $id);
		return $this->db->get('aw_categories')->result();
	}

	function insert($table,$data)
	{
		$this->db->insert($table, $data);
		return $this->db->insert_id();
	}

	function update($table,$data,$where)
	{
		$this->db->where($where)->update($table, $data);
		return TRUE;
	}

	function detail($where,$id,$table)
	{
		$this->db->join('aw_categories', 'aw_categories.cat_id = aw_product.c_id', 'left');
		$data = $this->db->where($where,$id)->get($table);
		return $data->result();
	}

	function detail_pro($where,$id,$table)
	{
		$this->db->join('aw_categories', 'aw_categories.cat_id = aw_product.c_id', 'left');
		$data = $this->db->where($where,$id)->get($table);
		return $data->result_array();
	}

	public function count_table($table)
	{
		return $this->db->count_all($table);
	}

	
}
