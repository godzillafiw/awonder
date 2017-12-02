<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends MY_Controller {

    public function __construct() {
        parent::__construct();
        
    }

    public function index()
    {
        $this->template->set_layout('temp')->build('contact',isset($data) ? $data : NULL);
    }

    public function send() 
    {
        $respond = array('status' => false, 'message' => 'ส่งข้อความติดต่อเรียบร้อยแล้ว');
        $data = array(
            "fullname"      => $this->input->post('fullname'),
            "email"         => $this->input->post('email'),
            "subject"       => $this->input->post('subject'),
            "messages"      => $this->input->post('messages'),
            "create_at"     => date("Y-m-d h:i:s")
            );
        $this->db->escape($data);
        $res = $this->AppModel->insert('aw_contacts',$data);
        if ($res) {
            $respond['status'] = true;
            echo json_encode($respond);
            exit();
        }
    }

    public function sends() 
    {
        $this->form_validation->set_error_delimiters('<div class="text-danger" style="font-size:12px">', '</div>');
        $this->form_validation->set_rules('fullname', 'Fullname', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('subject', 'Subject', 'trim|required');
        $this->form_validation->set_rules('messages', 'Messages', 'trim|required');
        if ($this->form_validation->run() == TRUE) {
            $data = array(
                "fullname"      => $this->input->post('fullname'),
                "email"         => $this->input->post('email'),
                "subject"       => $this->input->post('subject'),
                "messages"      => $this->input->post('messages'),
                "create_at"     => date("Y-m-d h:i:s")
                );
            $this->db->escape($data);
            $res = $this->AppModel->insert('aw_contacts',$data);
            if ($res) {
                $this->alert('Success','ส่งข้อมูลติดต่อของคุณเรียบร้อยแล้ว');
                echo '<script> alert("บันทึกสำเร็จ") </script>';
                redirect('contact','refresh');
            }
        } else {
            $this->index();
        }
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */