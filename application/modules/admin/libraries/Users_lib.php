<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_lib {

	private $ci;
	private $table = 'system_users';

    function __construct()
    {
        $this->ci =& get_instance();
        $this->ci->load->database();
        $this->ci->load->model('login_model');
    }


    public function verify_login($username,$password)
    {
        $res = array();
        if (empty($username) || empty($password)) {
            $res['status']  = 'error';
            $res['message'] = 'กรุณาใส่ข้อมูลให้ครบ';
            return $res;
        }

        $user = $this->ci->login_model->get_by_user($username);

        if ($user) {
          if ($this->hash_password($password,$user->salt) != $user->password) {
            $res['status']  = 'warning';
            $res['message'] = 'รหัสผ่านของคุณไม่ถูกต้อง';
            return $res;
        }else{
            $res['status']  = 'success';
            $res['message'] = 'ยินดีต้อนรับ';
            $this->set_session($user);
            return $res;
        }
    }else{
        $res['status']  = 'error';
        $res['message'] = 'ไม่พบข้อมูลของคุณในระบบ';
        return $res;
    }
}

public function set_session($user)
{
    if($user){
        $_sess = array();
        $_sess['u_id'] = $user->u_id;
        $_sess['first_name'] = $user->first_name;
        $_sess['last_name'] = $user->last_name;
        $_sess['username'] = $user->username;
        $_sess['is_login'] = true;
        $_sess['permiss'] = $user->permiss;

        $this->ci->session->set_userdata($_sess);

    } else {
        $_sess['is_login'] = false;
        $this->ci->session->set_userdata($_sess);
    }
}


public function new_password($new_password)
{
    $id = $this->ci->session->userdata('u_id');
    $salt = $this->salt();
    $new_password = $this->hash_password($new_password,$salt);
    $param['password'] = $new_password;
    $param['salt'] = $salt;
    $where = 'u_id = '.$id;
    $this->ci->db->where($where)->update($this->table, $param);
    return TRUE;
}

public function _is_logged_in()
{
    if (!$this->ci->session->userdata('is_login')){
        redirect('admin/login');
    }
}

public function _sess_destroy()
{
    $this->ci->session->sess_destroy();
    redirect('admin/login');
}  


public function hash_password($password,$salt)
{
    if(empty($password)){
        return false;
    }

    return sha1($password.$salt);
}

public function _set_alert($user)
{
    $this->ci->session->set_flashdata(array($user['status'] => '<div class="alert alert-danger" >'.'<strong>'.ucfirst($user['status']).'</strong> '.$user['message'].'</div>'));
}

public function salt()
{
    $row_salt_len = 16;
    $buffer = '';
    $bl = strlen($buffer);
    for($i = 0;$i < $row_salt_len; $i++)
    {
        if ($i < $bl) {
            $buffer[$i] = $buffer[$i] ^ chr(mt_rand(0,255));
        }else{
            $buffer .= chr(mt_rand(0,255));
        }
    }
    $salt = $buffer;


    $base64_digits = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/';
    $bcrypt64_digits = './ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    $base64_string = base64_encode($salt);
    $salt = strtr(rtrim($base64_string, '='), $base64_digits, $bcrypt64_digits);

    $salt = substr($salt, 0, 31);

    return $salt;

}

} 