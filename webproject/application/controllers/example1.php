<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class example1 extends CI_Controller {


		public function index()
		{
			$this->load->view('example_view');

		}

		public function hi(){
			$obj = new stdclass();
			$obj->num1 = 1;
			$obj->str = "success";

	
			echo json_encode($obj);
		}


	}
