<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{

		     $id = $this->input->post('id');        // post 전달 값 수정해야 합니다.
         $inputPWD = $this->input->post('pwd'); // post 전달 값 수정해야 합니다.
         $this->db->where("ID", $id);
         $result = $this->db->get("member");
         $row = $result->row();
         $hashPWD =$row->PWD;

				//  echo $row->PWD;

         if($this->encrypt->decode($hashPWD) == $inputPWD)
         {

					 $data = array(
				 	 	 'username'  => $row->Name,
					 	 'userid' => $row->ID,
				     'logged_in' => TRUE
					 );

            $this->session->set_userdata($data);
						print_r("Success!!<br>");
						$this->load->view('login'); // 회원 처음 화면으로 이동해야한다.
         }
         else {
            echo "<script>alert('아이디와 비밀번호가 일치하지 않습니다.');</script>";

						$this->load->view('login'); //로그인 페이지로 이동
         }
  }
}
