<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_lib {

	private $ci;
	private $table = 'aw_users';

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
       return $res;
   }
} else {
   $res['status']  = NULL;
   $res['message'] = 'ไม่พบข้อมูลของคุณในระบบ';
   return $res;
}
}


public function _is_logged_in()
{
    return (bool) $this->session->userdata('u_id');
}

public function logout()
{
   $this->session->sess_destroy();
   redirect('login');
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


public function hash_password($password,$salt)
{
    if(empty($password)){
        return false;
    }

    return sha1($password.$salt);
}





} 