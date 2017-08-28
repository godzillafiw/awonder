<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if(!function_exists('active_link')) {
  
  function selectYear($num) {
    for($i=date("Y")-$num;$i<=date("Y");$i++) {
         echo "<option value=".$i.">".date("Y", mktime(0,0,0,0,1,$i+1))."</option>";
    }
  }
		
}