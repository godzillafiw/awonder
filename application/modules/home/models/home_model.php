<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model
{
	var $table = 'aw_product';
    var $columns = array('p_id','product_detail','product_name','product_price','create_at','c_id');
    var $column_search = array('product_name','product_price','create_at');
    var $column_sort = array('p_id','product_name','create_at');

	 function lists($option=null){
        $fields = '*';
        if (isset($option['fields'])){
            $fields = explode(",",$option['fields']);
        }
        if (isset($option['where'])){
            foreach ($option['where'] as $label => $item) {
                if (is_array($item)) {
                    $this->db->where_in($label, $item);
                }else{
                    $this->db->where($label, $item);
                }
            }
        }
        if (isset($option['where_raw'])){
            $this->db->where($option['where_raw']);
        }
        if (isset($option['q'])){
            $i = 0;
            foreach ($this->column_search as $item) {
                if($i===0){
                    $this->db->group_start();
                    $this->db->like($item, $option['q']);
                } else {
                    $this->db->or_like($item, $option['q']);
                }
                if(count($this->column_search) - 1 == $i) {
                    $this->db->group_end();
                }
                $i++;
            }
        }
        if (isset($option['sort'])){
            $sorts = explode(",",$option['sort']);
            foreach ($sorts as $item){
                if (strpos($item,'-') === 0){
                    $item = substr_replace($item,"",0,1);
                    $this->db->order_by($item, 'DESC');
                }else{
                    $this->db->order_by($item, 'ASC');
                }
            }
        }
        if (isset($option['limit'])){
            if (isset($option['offset'])){
                $this->db->limit($option['limit'],$option['offset']);
            }else{
                $this->db->limit($option['limit']);
            }
        }
        $this->db->select($fields);
        $query = $this->db->get($this->table);
        $response = new stdClass();
        if ($query){
            $response->result = true;
            $response->data = $query->result();
            $response->total = $query->num_rows();
        }else{
            $response->result = false;
        }
        return $response;
    }


	
	
}