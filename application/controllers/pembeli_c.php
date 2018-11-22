<?php
/**
 * Created by PhpStorm.
 * User: Hantamsurga
 * Date: 21/04/2018
 * Time: 2:28
 */

class pembeli_c extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pembeli_m');
        $this->load->helper(array('form', 'url'));
    }
    public function index()
    {
        $this->load->view('pembeli/halaman utama');
    }

    public function barang()
    {
        $this->data['hasil'] = $this->pembeli_m->getDtMbl('dt_mbl');
        $this->load->view('pembeli/lihatbarang', $this->data);
    }

    public function pesanV()
    {
        $data1 = $this->input->post('kdProduk');
        $data2 = $this->input->post('merk');
        $data3 = $this->input->post('gambar');
        $data4 = $this->input->post('harga');
        $data5 = $this->input->post('type');
        $data6 = $this->input->post('gambar');
        $data['hasil'] = array('kdProoduk' => $data1,
                    'merk' => $data2);
        $this->load->view('pembeli/pesan', compact('data1', 'data2', 'data3', 'data4', 'data5', 'data6'));
    }

    public function pesan()
    {
        $this->pembeli_m->insPes();
    }

    public function lihatPesanan()
    {
        $this->load->view('pembeli/pesanan');
    }

    public function cekpesanan()
    {
        // $this->data['hasil'] = $this->pembeli_m->cek('pesan');
        $this->data['hasil'] = $this->pembeli_m->cek($this->input->post('ktp'));
        $this->load->view('pembeli/hasilCek', $this->data);
    }


    public function logout(){
        //isi dengan sess_destroy
        $this->session->sess_destroy();
        redirect(site_url('awal'));
    }
}