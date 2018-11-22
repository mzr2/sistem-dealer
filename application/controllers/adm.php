<?php
/**
 * Created by PhpStorm.
 * User: Hantamsurga
 * Date: 21/04/2018
 * Time: 2:28
 */

class adm extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('adm_m');
        $this->load->helper('url');
        $this->load->helper('form');
        if($this->session->userdata('status')!="login"){
            redirect('');
        }
    }
    public function index()
    {
        $this->load->view('administrasi/halAdm');
        // $this->load->view('pegawai/halGudang');
    }

    public function datPem()
    {
        $this->data['hasil'] = $this->adm_m->getDtMbl('pesan');
        $this->load->view('administrasi/datapemesanan', $this->data);
    }

    public function datPrs()
    {
        $this->data['hasil'] = $this->adm_m->getDtMbl('pesan');
        $this->load->view('administrasi/prosespemesanan', $this->data);
    }

    public function detil()
    {
        $this->data['hasil'] = $this->adm_m->getDtl();
        $this->load->view('administrasi/detilpemesanan', $this->data);
    }

    public function history()
    {
        $this->data['hasil'] = $this->adm_m->getDtFin('finish');
        $this->load->view('administrasi/history', $this->data);
    }

    public function login()
    {
        
    }

    public function proses(){
        $this->adm_m->insPes('finish');
        $sql = "SELECT * FROM dt_mbl WHERE kdProduk = ?";
        $hasil = $this->db->query($sql, array($this->input->post('kdProduk')));
        foreach($hasil->result_array() as $row)
        {
            $stok = $row['stok'] - 1;
            $data = array(
                'stok' => $stok
            );
            $this->db->where('kdProduk', $this->input->post('kdProduk'));
            $this->db->update('dt_mbl', $data);
        }
        // $this->adm_m->delPesan();
        $data2 = array(
            'statPes' => "Sudah diproses"
        );
        $this->db->where('idPes', $this->input->post('idPes'));
        $this->db->update('pembayaran', $data2);
        redirect(site_url('adm/datPrs'));
        // $this->db->set('stok', 'stok-1');
        // $this->db->where('kdProduk', $this->input->post('kdProduk'));
        // $this->db->update('dt_mbl');
    }

    public function logout(){
        //isi dengan sess_destroy
        $this->session->sess_destroy();
        redirect(site_url('awal'));
    }
}