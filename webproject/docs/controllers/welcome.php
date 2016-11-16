<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
		$A = array();
		$A[0] = 50;
		$A[1] = 'Hello world';
		$test = array('arr'=>$A,'ktx'=>'hi');
		$this->load->view('welcome_message',$test);
		$this->load->library('session');
	}

	public function example1(){
		$newdata = array(
			'name' => 'a',
			'age' => 22
			);
		$this->session->set_userdata($newdata);
	}

	public function example2(){
		$exam = $this->session->userdata('name');
		print_r($exam);
		print_r($this->session->userdata('age'));
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */