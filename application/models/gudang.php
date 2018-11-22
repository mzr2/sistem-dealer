<?php
/**
 * Created by PhpStorm.
 * User: Kacangrebus
 * Date: 21/04/2018
 * Time: 2:30
 */

class gudang extends CI_Model
{
    public function getDtMbl($table){
        $data = $this->db->get($table);
        return $data->result_array();
    }

    public function edit(){
        $merk = $this->input->post('merk',true);
        $type = $this->input->post('type',true);
        $harga = $this->input->post('harga',true);
        $stok = $this->input->post('stok',true);
        $status = $this->input->post('status',true);
        $deskripsi = $this->input->post('deskripsi',true);
        $data = array('merk' => $merk,
                    'type' => $type,
                    'harga' => $harga,
                    'stok' => $stok,
                    'status' => $status,
                    'deskripsi' => $deskripsi);
        $this->db->where('kdProduk', $this->input->post('kdProduk'));
        $this->db->update('dt_mbl', $data);
        redirect('gudang_c');
    }

}