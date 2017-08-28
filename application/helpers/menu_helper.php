<?php defined('BASEPATH') OR exit('No direct script access allowed');

if(!function_exists('active_link')) {
  function activate_menu($controller) {
    $CI = get_instance();
    $class = $CI->router->fetch_class();
    return ($class == $controller) ? 'active' : '';
  }

  function is_publish($param) {
    return ($param == '1') ? '<span class="label label-info">Active</span>' : '<span class="label label-danger">Deactive</span>';
  }

  function is_category($param) {

    if ($param == '1') {
      return '<span class="label label-info">ประกันรถยนต์</span>';
    }elseif($param == '2'){
      return '<span class="label label-success">ประกันชีวิต</span>';
    }elseif($param == '3'){
      return '<span class="label label-danger">ประกันเดินทาง</span>';
    }elseif($param == '4'){
      return '<span class="label label-warning">ประกันอื่นๆ</span>';
    }
    
  }

}