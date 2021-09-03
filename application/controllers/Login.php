<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_login');
	}

	public function index()
	{
		$this->load->view('login');
	}
	public function signin(){
		$username = $this->input->post('username');
        $password = $this->input->post('password');
         $cek = $this->M_login->ceknum('t_user', array('username' => $username), 
            array('password' => $password));
        if($cek != false){
            foreach ($cek as $apps) {

                        $session_data = array(
                            'id_user'   => $apps->id_user,
                            'username' => $apps->username,
                            'password' => $apps->password,
                        );
                        $this->session->set_userdata($session_data);
                        redirect('Barang');
    }
}
		else{
			$this->session->set_flashdata('error','Maaf Username atau Password Salah');
			redirect('Login');
        }
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('Login');
	}
}

