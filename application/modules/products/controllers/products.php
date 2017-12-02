<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends MY_Controller {

	public function __construct() {
		parent::__construct();

	}

	public function index()
	{

		$categories = $this->input->get('categories');
		$search 	= $this->input->get('search');

		$this->load->library('pagination');
		
		/*$config['base_url'] = base_url('products/index');
		$config['total_rows'] = $this->db->count_all('aw_product');
		$config['per_page'] = 10;
		$config['uri_segment'] = 3;
		$config['num_links'] = 3;
		$config['full_tag_open'] = '<p>';
		$config['full_tag_close'] = '</p>';
		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="current"></li>';
		$config['first_tag_close'] = '</div>';
		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<div>';
		$config['last_tag_close'] = '</div>';
		$config['next_link'] = '&gt;';
		$config['next_tag_open'] = '<div>';
		$config['next_tag_close'] = '</div>';
		$config['prev_link'] = '&lt;';
		$config['prev_tag_open'] = '<div>';
		$config['prev_tag_close'] = '</div>';
		$config['cur_tag_open'] = '<b>';
		$config['cur_tag_close'] = '</b>';*/
		

		$config['base_url'] = base_url('products/index');
		
		if (!empty($categories)) {
			$config['base_url'] = base_url('products/index');
			$config['total_rows'] =  $this->AppModel->count_product($table = 'aw_product' , $where = array('c_id' => $categories));
		}else{
			$config['total_rows'] =  $this->db->count_all('aw_product');
		}

		$config['per_page'] = 12;
		$config['uri_segment'] = 3;
		$config['full_tag_open'] = '<ul class="pagination">';        
		$config['full_tag_close'] = '</ul>';        
		$config['first_link'] = 'First';        
		$config['last_link'] = 'Last';        
		$config['first_tag_open'] = '<li>';        
		$config['first_tag_close'] = '</li>';        
		$config['prev_link'] = '&laquo';        
		$config['prev_tag_open'] = '<li class="prev">';        
		$config['prev_tag_close'] = '</li>';        
		$config['next_link'] = '&raquo';        
		$config['next_tag_open'] = '<li>';        
		$config['next_tag_close'] = '</li>';        
		$config['last_tag_open'] = '<li>';        
		$config['last_tag_close'] = '</li>';        
		$config['cur_tag_open'] = '<li class="current"><a href="#">';        
		$config['cur_tag_close'] = '</a></li>';        
		$config['num_tag_open'] = '<li>';        
		$config['num_tag_close'] = '</li>';
		$choice = $config['total_rows'] / $config['per_page'];
		$config['num_links'] = round($choice);
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$this->pagination->initialize($config);


		if (!empty($categories)) {
			$data['products'] = $this->AppModel->get_all_records($table = 'aw_product',
				$array = array('c_id' => $categories),
				$join_table = 'aw_categories',
				$join_criteria = 'aw_product.c_id = aw_categories.cat_id',
				'p_id',$config['per_page'], $page
				);
			$data['link'] = $this->pagination->create_links();

		}elseif (!empty($search)) {
			$this->db->like('product_name', $search);
			$this->db->join('aw_categories', 'aw_product.c_id = aw_categories.cat_id', 'left');
			$this->db->limit($config['per_page'], $page);
			$data['products'] = $this->db->get('aw_product')->result();
			$data['link'] = $this->pagination->create_links();

			}else{
				$data['products'] = $this->AppModel->get_all_records($table = 'aw_product',
					$array = array('p_id >=' => '0'),
					$join_table = 'aw_categories',
					$join_criteria = 'aw_product.c_id = aw_categories.cat_id',
					'p_id',$config['per_page'], $page
					);
				$data['link'] = $this->pagination->create_links();
			}

			$this->db->join('aw_categories','aw_product.c_id = aw_categories.cat_id');
			$this->db->order_by('p_id', 'random');
			$this->db->limit(5);
			$data['bestsellers'] = $this->db->get('aw_product')->result();


			$this->db->join('aw_categories','aw_product.c_id = aw_categories.cat_id');
			$this->db->order_by('p_id', 'random');
			$this->db->limit(5);
			$data['others'] = $this->db->get('aw_product')->result();


			$this->template->set_layout('temp')
			->build('products',isset($data) ? $data : NULL);
		}

		public function detail($id)
		{
			$data['details'] = $this->AppModel->detail($where = 'p_id',$id,$table = 'aw_product');
			$this->template->set_layout('temp')
			->build('products_detail',isset($data) ? $data : NULL);
		}

	}