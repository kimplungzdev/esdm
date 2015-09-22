<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin extends CI_Controller {

    public function index()
	{
		$data['title']='Sistem Informasi Manajemen Diklat';
        $this->admin_template->display_with_sidebar('/admin_site/front_view','menu',$data);
	}

	public function login()
	{
		$this->load->view("admin_template/login");
	}
}