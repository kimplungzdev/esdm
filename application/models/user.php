<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model {
    public $table_user='user';


    function __construct() {
	   parent::__construct();
    }

    function login($usr,$pwd)
    {	    
        $pwdmd5 = md5($pwd);
        $where=array('username'=>$usr,'password'=>$pwdmd5);

        $this->db->join('role','pegawai.id=role.id_pegawai','left');
        $res=$this->db->get_where('pegawai',$where);
        
        if($res->num_rows()>0){
            return $res->row_array();
        }else{
            return false;
        }
        
    }
}

/* End of file user.php */
/* Location: ./application/models/user.php */