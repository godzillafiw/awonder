<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if(!function_exists('active_link')) {

	function selectYear($num) {
		for($i=date("Y")-$num;$i<=date("Y");$i++) {
			echo "<option value=".$i.">".date("Y", mktime(0,0,0,0,1,$i+1))."</option>";
		}
	}

	function statusCheck($value,$id=NULL)
	{
		if ($value == 1) {
			return '<span style="cursor:pointer" class="label label-success status" onclick="status('.$value.','.$id.')">ชำระแล้ว</span>';
		}elseif ($value  == 0) {
			return '<span style="cursor:pointer" class="label label-warning status" onclick="status('.$value.','.$id.')">ดำเนินการ</span>';
		}
		
	}

	function status($value)
	{
		if ($value == 1) {
			return '<span style="cursor:pointer" class="label label-success status" >ชำระแล้ว</span>';
		}elseif ($value  == 0) {
			return '<span style="cursor:pointer" class="label label-warning status" >ดำเนินการ</span>';
		}
		
	}

	function statusPayment($value,$id=NULL)
	{
		if ($value == 1) {
			return '<span style="cursor:pointer" class="label label-success status">อ่านแล้ว</span>';
		}elseif ($value  == 0) {
			return '<span style="cursor:pointer" class="label label-warning status">ยังไม่อ่าน</span>';
		}
		
	}

	function productType($value)
	{
		if ($value == 1) {
			return '<span class="label label-danger">สินค้าขายดี</span>';
		}else {
			return false;
		}
	}

	function convertInt($value)
	{
		$arr = explode(',', $value);
		$newValue = NULL;
		foreach ($arr as $v) {
			$newValue .=  $v;
		}
		return $newValue;
		
	}

}