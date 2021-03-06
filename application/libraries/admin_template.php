<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Description of template
 *
 * @author Administrator
 * @develop Abdurrahman Hakim
 */
class Admin_template {
    protected $ci;

    // Constructor
    function __construct() {
        $this->_ci = &get_instance();
        $this->_ci->load->model('mdl_admin','adm');
    }

    // Default Template
    function display($template, $data = null) {
        // $data['profil'] = $this->_ci->adm->get_profil();
        if(isset($data['title'])){
           $data['_title']=$data['title'];
        }else{
           $data['_title'] = $this->_ci->session->userdata('detail');
        }
        $data['_header'] = $this->_ci->load->view('template/header', $data, true);
        if($this->_ci->session->userdata('is_login')){
           $data['_menu'] = $this->_ci->load->view('template/menubar', $data, true);
        }
       $data['_content'] = $this->_ci->load->view($template, $data, true);
        $this->_ci->load->view('/admin_template/main.php', $data);
    }
    
    function display_with_sidebar($template,$sidebar, $data = null) {
        //$data['profil'] = $this->_ci->adm->get_profil();
        if(isset($data['title'])){
            $data['_title']=$data['title'];
        }else{
            $data['_title'] = $this->_ci->session->userdata('detail');
        }
        //$data['_header'] = $this->_ci->load->view('template/header', $data, true);
        $data['_sidebar'] = $this->_ci->load->view("admin_site/sidebar_$sidebar", $data, true);
        //if($this->_ci->session->userdata('is_login')){
        //    $data['_menu'] = $this->_ci->load->view('template/menubar', $data, true);
        //}
        $data['_content'] = $this->_ci->load->view($template, $data, true);
        $this->_ci->load->view('/admin_template/main.php', $data);
    }
    
    function display_unit($template, $data = null) {
        $data['profil'] = $this->_ci->adm->get_profil();
        if(isset($data['title'])){
            $data['_title']=$data['title'];
        }else{
            $data['_title'] = $this->_ci->session->userdata('detail');
        }
        $data['_header'] = $this->_ci->load->view('template/header', $data, true);
        if($this->_ci->session->userdata('is_login_unit')){
            $data['_menu'] = $this->_ci->load->view('template/menubar_unit', $data, true);
        }
        $data['_content'] = $this->_ci->load->view($template, $data, true);
        $this->_ci->load->view('/template/main.php', $data);
    }
    function display_pes($template, $data = null) {
        $data['profil'] = $this->_ci->adm->get_profil();
        if(isset($data['title'])){
            $data['_title']=$data['title'];
        }else{
            $data['_title'] = $this->_ci->session->userdata('detail');
        }
        if(isset($data['sidebar'])){
            $data['_sidebar']=$this->_ci->load->view('sidebar/sidebar_pes', $data, true);
        }
        $data['_header'] = $this->_ci->load->view('template/header', $data, true);
        if($this->_ci->session->userdata('is_login_pes')){
            $data['_menu'] = $this->_ci->load->view('template/menubar_pes', $data, true);
        }
        $data['_content'] = $this->_ci->load->view($template, $data, true);
        $this->_ci->load->view('/template/main.php', $data);
    }
    
    function display_inst($template, $data = null) {
        $data['profil'] = $this->_ci->adm->get_profil();
        if(isset($data['title'])){
            $data['_title']=$data['title'];
        }else{
            $data['_title'] = $this->_ci->session->userdata('detail');
        }
        $data['_header'] = $this->_ci->load->view('template/header', $data, true);
        if($this->_ci->session->userdata('is_login_inst')){
            $data['_menu'] = $this->_ci->load->view('template/menubar_inst', $data, true);
        }
        $data['_content'] = $this->_ci->load->view($template, $data, true);
        $this->_ci->load->view('/template/main.php', $data);
    }
    function display_wid($template, $data = null) {
        $data['profil'] = $this->_ci->adm->get_profil();
        if(isset($data['title'])){
            $data['_title']=$data['title'];
        }else{
            $data['_title'] = $this->_ci->session->userdata('detail');
        }
        if(isset($data['sidebar'])){
            $data['_sidebar']=$this->_ci->load->view('sidebar/'.$data['sidebar'], $data, true);
        }
        $data['_header'] = $this->_ci->load->view('template/header', $data, true);
        if($this->_ci->session->userdata('is_login_wid')){
            $data['_menu'] = $this->_ci->load->view('template/menubar_wid', $data, true);
        }
        $data['_content'] = $this->_ci->load->view($template, $data, true);
        $this->_ci->load->view('/template/main.php', $data);
    }
    
    function display_lib($template, $data = null) {
        $data['profil'] = $this->_ci->adm->get_profil();
        $data['_sidebar'] = $this->_ci->load->view('elibrary/sidebar', $data, true);            
        if(isset($data['title'])){
            $data['_title']=$data['title'];
        }else{
            $data['_title'] = 'E-library';
        }
        $data['_header'] = $this->_ci->load->view('template/header', $data, true);
        $data['_content'] = $this->_ci->load->view($template, $data, true);
        $this->_ci->load->view('/template/main.php', $data);
    }
}