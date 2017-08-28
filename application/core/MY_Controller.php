<?php

class MY_Controller extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('AppModel');
        if($this->session->userdata('lang')==NULL){
            $lang = "thailand";
            $this->session->set_userdata('lang',$lang);
        }else{
            $lang = $this->session->userdata('lang');
        }
        $this->lang->load($lang,$lang);
    }

    private function getAllLangs()
    {
        $arr = array();
        $langs = $this->AdminModel->getLanguages();
        foreach ($langs->result() as $lang) {
            $arr[$lang->abbr]['name'] = $lang->name;
            $arr[$lang->abbr]['flag'] = $lang->flag;
        }
        return $arr;
    }

    public function alert($status,$message){
        $this->session->set_flashdata( 
            array('msginfo' => '<div class="alert alert-success alert-dismissible">
                <a class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>'.$status.'!</strong> '.$message.'</div>')
            );
    }

    


}
