<?php
/**
 * Created by PhpStorm.
 * User: Kacangrebus
 * Date: 21/04/2018
 * Time: 2:30
 */

class adm_m extends CI_Model
{
    public function getDtMbl($table)
    {
        $sql = "SELECT * FROM pembeli natural join pesanan natural join pembayaran where pembayaran.statPes = ?";

        $data = $this->db->query($sql, array('Belum diproses'));
        // $data = $this->db->get();
        // return $data->result_array();
        // $data = $this->db->get($table);
        return $data->result_array();
    }

    public function getDtFin($table){
        $data = $this->db->get($table);
        return $data->result_array();
    }

    public function delPesan()
    {
        $this->db->where('ktp', $this->input->post('ktp'));
        $this->db->delete('pesan');
        redirect('adm/datPrs');
    }

    public function aptstatpes(){
        $this->db->set('statpes', "Sudah Diproses");
        $this->db->where('ktp', $this->input->post('ktp'));
        $this->db->update('pesan');
        redirect('adm/datPrs');
    }

    public function insPes($table){
        $nama = $this->input->post('nama',true);
        $noktp = $this->input->post('ktp',true);
        $hp = $this->input->post('hp',true);
        $alamat = $this->input->post('alamat',true);
        $kodemobil = $this->input->post('kdProduk',true);
        $warna = $this->input->post('warna',true);
        $metpem = $this->input->post('metPem',true);
        $merk = $this->input->post('merk',true);
        $type = $this->input->post('type',true);
        $gambar = $this->input->post('gambar',true);
        $idPes = $this->input->post('idPes',true);
        $user = $this->input->post('adm',true);
        if($metpem=="Cash"){
            $harga = "Lunas";
        }else{
            $harga = "Dalam masa cicilan";
        }
        $statpes = "Sudah diproses";
        $data = array('nama' => $nama,
                'ktp' => $noktp,
                'hp' => $hp,
                'alamat' => $alamat,
                'kdProduk' => $kodemobil,
                'warna' => $warna,
                'metpem' => $metpem,
                'merk' => $merk,
                'type' => $type,
                'gambar' => $gambar,
                'tagihan' => $harga,
                'statpes' => $statpes,
                'idPes' => $idPes,
                'userAdm' => $user);
        $insert = $this->db->insert($table, $data);
        
    }

    public function edit(){
        $merk = $this->input->post('merk',true);
        $type = $this->input->post('type',true);
        $harga = $this->input->post('harga',true);
        $stok = $this->input->post('stok',true);
        $data = array('merk' => $merk,
                    'type' => $type,
                    'harga' => $harga,
                    'stok' => $stok);
        $this->db->where('kdProduk', $this->input->post('kdProduk'));
        $this->db->update('dt_mbl', $data);
        redirect('gudang_c');
    }

    public function getDtl()
    {
        $sql = "SELECT * FROM pembeli natural join pesanan natural join pembayaran where pembeli.ktp = ? and pesanan.idPes = ? and pembayaran.statPes = ?";
        $data = $this->db->query($sql, array($this->input->post('ktp'), $this->input->post('idPes'), 'Belum diproses'));
        // $this->db->where('ktp', $this->input->post('ktp'));
        // $data = $this->db->get($table);
        return $data->result_array();
    }
}