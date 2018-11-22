<?php
/**
 * Created by PhpStorm.
 * User: Kacangrebus
 * Date: 21/04/2018
 * Time: 2:30
 */

class pembeli_m extends CI_Model
{
    public function getDtMbl($table){
        $data = $this->db->get($table);
        return $data->result_array();
    }


    public function insPes(){
        $nama = $this->input->post('nama',true);
        $noktp = $this->input->post('noktp',true);
        $hp = $this->input->post('hp',true);
        $alamat = $this->input->post('alamat',true);
        $kodemobil = $this->input->post('kodemobil',true);
        $warna = $this->input->post('warna',true);
        $metpem = $this->input->post('metodepembayaran',true);
        $merk = $this->input->post('merk',true);
        $type = $this->input->post('type',true);
        $gambar = $this->input->post('gambar',true);
        $harga = $this->input->post('harga',true);
        $statpes = "Belum diproses";
        $where = array(
            'ktp' => $noktp
        );
        $cek = $this->db->get_where('pembeli', $where)->num_rows();
        if($cek>0){
            $dataPes = array('kdProduk' => $kodemobil,
                    'warna' => $warna,
                    'merk' => $merk,
                    'type' => $type,
                    'gambar' => $gambar,
                    'ktp' => $noktp);
            
            $insert = $this->db->insert('pesanan', $dataPes);

            $this->db->select('*');
            $this->db->from('pesanan');
            $this->db->order_by('idPes', 'desc');
            $this->db->limit(1);
            $last = $this->db->get()->result_array();
            $angka = 1;
            foreach($last as $l){
            $dataMetPem = array('ktp' => $noktp,
                    'metpem' => $metpem,
                    'tagihan' => $harga,
                    'statpes' => $statpes,
                    'idPes' => $l['idPes']);
            // $insert = $this->db->insert('pesan', $data);
            }
            $insert = $this->db->insert('pembayaran', $dataMetPem);
            if($insert > 0){
                redirect('pembeli_c');
            }else{
                echo ('gagal');
            }
        }else{
            $dataPem = array('nama' => $nama,
                    'ktp' => $noktp,
                    'hp' => $hp,
                    'alamat' => $alamat);
                    
            $insert = $this->db->insert('pembeli', $dataPem);

            $dataPes = array('kdProduk' => $kodemobil,
                    'warna' => $warna,
                    'merk' => $merk,
                    'type' => $type,
                    'gambar' => $gambar,
                    'ktp' => $noktp);

            $insert = $this->db->insert('pesanan', $dataPes);

            $this->db->select('*');
            $this->db->from('pesanan');
            $this->db->order_by('idPes', 'desc');
            $this->db->limit(1);
            $last = $this->db->get()->result_array();
            $angka = 1;
            foreach($last as $l){
            $dataMetPem = array('ktp' => $noktp,
                    'metpem' => $metpem,
                    'tagihan' => $harga,
                    'statpes' => $statpes,
                    'idPes' => $l['idPes']);
            // $insert = $this->db->insert('pesan', $data);
            }
            $insert = $this->db->insert('pembayaran', $dataMetPem);
            if($insert > 0){
                redirect('pembeli_c');
            }else{
                echo ('gagal');
            }
        }
        // $dataPem = array('nama' => $nama,
        //         'ktp' => $noktp,
        //         'hp' => $hp,
        //         'alamat' => $alamat,
        //         'kdProduk' => $kodemobil,
        //         'warna' => $warna,
        //         'metpem' => $metpem,
        //         'merk' => $merk,
        //         'type' => $type,
        //         'gambar' => $gambar,
        //         'tagihan' => $harga,
        //         'statpes' => $statpes);

        
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

    public function cek($ktp)
    {
        // $this->db->where('ktp', $this->input->post('ktp'));
        // $data = $this->db->get('pesan');
        // $this->db->select('*');
        // $this->db->from('pembeli', 'pesanan', 'pembayaran');
        // $this->db->join('pesanan', 'pesanan.idPes = pembeli.idPes');
        // $this->db->join('pembayaran', 'pembayaran.idPes = pembeli.idPes');
        // $this->db->join('pembayaran', 'pembayaran.idPes = pesanan.idPes');
        // $this->db->where('pembeli.ktp', $ktp);
        // $data = $this->db->get();
        // return $data->result_array();
        $sql = "SELECT * FROM pembeli natural join pesanan natural join pembayaran where pembeli.ktp = ?";

        $data = $this->db->query($sql, array($this->input->post('ktp')));
        // $data = $this->db->get();
        return $data->result_array();
    }

}