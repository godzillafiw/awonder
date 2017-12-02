<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends MY_Controller {

	public function __construct() {
		parent::__construct();

	}

	public function index()
	{
		$this->template->set_layout('temp')->build('about',isset($data) ? $data : NULL);
	}

	public function test()
	{
		/*$a = '1x';
		$b = &$a;

		$b = "2$b";
		echo $a.", ".$b;*/

		/*$num = "123";
		if (!filter_var($num, FILTER_VALIDATE_INT))
			echo("Integer is not valid");
		else
		echo("Integer is valid");*/


		/*$a = 1;
		$a = $a-- + 1;
		echo $a;*/

		

	}


}