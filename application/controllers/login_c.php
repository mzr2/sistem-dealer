<?php
/**
 * Created by PhpStorm.
 * User: Hantamsurga
 * Date: 21/04/2018
 * Time: 2:28
 */

class login_c extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pegawai');
        $this->load->model('login_m');
        $this->load->helper('url');
        $this->load->helper('form');
    }
    public function index()
    {
        $this->load->view('awal');
    }

    public function aksi_login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $whereadm = array(
            'userAdm' => $username,
            'passAdm' => $password
            );
        $wheregdg = array(
            'userGdg' => $username,
            'passGdg' => $password
            );
        // $cekadm = $this->login_m->cek_login("adm",$whereadm)->num_rows();
        $cekadm = $this->db->get_where("adm",$whereadm)->num_rows();
        // $cekgud = $this->login_m->cek_login("peggudang",$wheregdg)->num_rows();
        $cekgdg = $this->db->get_where("peggudang",$wheregdg)->num_rows();
        // $query = $this->db->where('username',$username)->get('akun');
        // $hasil = $query->row();
        // if ($query->num_rows() > 0) {
        //     $result = $query->result_array();
        //     foreach ($result as $r) {
        //         $skor = $r['skor'];
        //     }
        // }
        
        if($cekadm > 0){
            $data_session = array(
                'nama' => $username,
                'JP' => "admin",
                'status' => "login"
                );
            $this->session->set_userdata($data_session);
            // $this->load->view('beranda', $data_session);
            redirect(site_url('adm/index'));
        }else if($cekgdg > 0){
            $data_session = array(
                'nama' => $username,
                'JP' => "gdg",
                'status' => "login"
                );
            $this->session->set_userdata($data_session);
            // $this->load->view('beranda', $data_session);
            redirect(site_url('gudang_c/index'));
        }else{
            // $this->load->view('awal');
            // return echo '<script language="javascript">; alert ("username atau password salah"); </script>';
            redirect('');
        }
    }  

    public function daftar()
    {
        $namaLengkap = $this->input->post('namaLengkap');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $skor = 0;
        $data = array(
            'namaLengkap' => $namaLengkap,
            'username' => $username,
            'password' => $password,
            'skor' => $skor
        );
        $cek = $this->db->where('username',$username)->get('akun')->num_rows();
        if($cek==0){
            $insert = $this->db->insert('akun', $data);
            echo '<script language="javascript">';
            echo 'alert ("pendaftaran berhasil")';
            echo '</script>';
            redirect('');
        }else{
            echo '<script language="javascript">';
            echo 'alert ("username sudah digunakan")';
            echo '</script>';
            redirect('');
        }
    }

    public function logout(){
        //isi dengan sess_destroy
        $this->session->sess_destroy();
        // redirect(site_url('login_c/index'));
        redirect('');
    }
}