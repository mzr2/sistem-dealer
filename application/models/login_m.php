<?php
/**
 * Created by PhpStorm.
 * User: Kacangrebus
 * Date: 21/04/2018
 * Time: 2:30
 */

class login_m extends CI_Model
{

    public function login_akun($data){
        $this->db->where('username',$data['username']);
        $this->db->where('password',$data['password']);

        $result = $this->db->get('pegawai');
        if($result->num_rows()>0){
            return $result->row(0);
        }else{
            return false;
        }
    }

    public function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}
}