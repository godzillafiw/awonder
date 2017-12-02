<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lang extends MY_Controller {

    public function __construct() {
        parent::__construct();
        
    }

    public function change($lang)
    {
        $this->session->set_userdata('lang',$lang);
        redirect(base_url(),'refresh');
    }

     public function test()
    {
        echo 'test';
    }
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */