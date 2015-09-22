<?php 
class Login extends CI_Controller {

    public function index()
	{
		$user = $this->input->post("user");
		$password = $this->input->post("password");
		//login prosess
		$this->load->library('access');
		$login_result=$this->access->login($user,$password);
		
		if($login_result){
            //if true
            $nama=ucwords(strtolower($this->session->userdata('nama')));
            $this->session->set_flashdata('msg', $this->editor->alert_ok('Selamat datang '.$nama));
        }else{
        	//if false
            $this->session->set_flashdata('msg',$this->editor->alert_error('Username atau password salah'));
        }
        redirect(base_url().'index.php/admin');
	}
}