<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keranjang_data extends CI_Model {

    function ShowDataKeranjang()
    {
        $this->db->select('*');
        $this->db->from('keranjang');
        $this->db->join('user', 'user.id_user = keranjang.user_id');
        $this->db->join('barang', 'barang.id_barang = keranjang.barang_id');
        $this->db->join('toko', 'toko.id_toko = keranjang.toko_id');
        return $this->db->get()->result_array();
    }
    function AddKeranjang($data)
    {
        $this->db->insert('keranjang', $data);
    }
}

