<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Join extends CI_Controller {

	public function index()
	{

		  $this->db->flush_cache();
      $this->db->select('*');
      $this->db->where('ID',$this->input->post('ID'));
      $result = $this->db->get('member');

      if($result->num_rows()>0){


        echo "<script>alert('중복된 아이디가 있습니다.');</script>";
        $this->load->view('join');
        return ;

      }else{

				$Regdate = date("Y-m-d");
				$PWD = $this->input->post('PWD');

				$this->db->set('Name', $this->input->post('Name'));
				$this->db->set('ID', $this->input->post('ID'));
				$this->db->set('PWD', $this->encrypt->encode($PWD));
				$this->db->set('Level', 0);
				$this->db->set('Birth', $this->input->post('Birth'));
				$this->db->set('PhoneNumber', $this->input->post('PhoneNumber'));
				$this->db->set('Email', $this->input->post('Email'));
				$this->db->set('Gender', $this->input->post('Gender'));
				$this->db->set('Introduction', $this->input->post('Introduction'));
				$this->db->set('Regdate', $Regdate);
		    $this->db->insert('member');

				echo "<script>alert('회원가입을 축하합니다.');</script>";

        $this->load->view('login'); // 로그인 페이지로 이동
        return ;
      }

	}
}
