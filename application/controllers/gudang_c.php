<?php
/**
 * Created by PhpStorm.
 * User: Hantamsurga
 * Date: 21/04/2018
 * Time: 2:28
 */

class gudang_c extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('gudang');
        $this->load->helper(array('form', 'url'));
        if($this->session->userdata('status')!="login"){
            redirect('');
        }
    }
    public function index()
    {
        $this->load->view('pegawai/halGudang');
    }

    public function inpDat()
    {
        $this->load->view('pegawai/input data mobil');
    }

    public function sts()
    {
        $this->data['hasil'] = $this->gudang->getDtMbl('dt_mbl');
        $this->load->view('pegawai/statusbarang', $this->data);
    }
    
    public function edt()
    {
        $this->data['hasil'] = $this->gudang->getDtMbl('dt_mbl');
        $this->load->view('pegawai/editdata', $this->data);
    }

    public function update(){
        $this->gudang->edit();
    }

    public function do_upload()
    {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 10000;
        $config['max_width']            = 5000;
        $config['max_height']           = 5000;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile'))
        {
                $error = array('error' => $this->upload->display_errors());

                $this->load->view('pegawai/input data mobil', $error);
        }
        else
        {
            $img = $this->upload->data();
            $merk = $this->input->post('merk',true);
            $type = $this->input->post('type',true);
            $jBody = $this->input->post('jBody',true);
            $harga = $this->input->post('harga',true);
            $stok = $this->input->post('stok',true);
            $deskripsi = $this->input->post('deskripsi',true);
            $user = $this->input->post('gdg');
            $gambar = $img['file_name'];
            $data = array('merk' => $merk,
                    'type' => $type,
                    'jBody' => $jBody,
                    'harga' => $harga,
                    'stok' => $stok,
                    'gambar' => $gambar,
                    'deskripsi' => $deskripsi,
                    'userGdg' => $user);
            $insert = $this->db->insert('dt_mbl', $data);
            if($insert > 0){
                redirect('gudang_c/inpDat');
            }else{
                echo 'gagal';
            }
            $this->load->view('pegawai/input data mobil', $data);
        }
    }

    public function logout(){
        //isi dengan sess_destroy
        $this->session->sess_destroy();
        redirect(site_url('awal'));
    }
}