<?php
/**
 * Created by PhpStorm.
 * User: Kacangrebus
 * Date: 21/04/2018
 * Time: 2:30
 */

class pegawai extends CI_Model
{
    public function daftar_akun($data)
    {
        $param = array(
            "username"=>$data['username'],
            "password"=>$data['password']
        );
        $insert = $this->db->insert('akun', $param);
        if ($insert){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function login($user, $pass){
        $this->db->select('*');
        $this->db->from('pegawai');
        $this->db->where($user);
        $this->db->where($pass);
        $this->db->limit(1);
        
        $qry = $this->db->get();
        if($qry->num_rows()==0){
            return false;
        }else{
            $login_data = $qry->result();
            foreach($login_data as $data){
                $session_data = array(
                    'username'  => $data->username,
                    'password' => $data->pwd,
                    'status' => $data->status
                );
                $this->session->set_userdata($session_data);
            }
            return true;
        }
    }
}